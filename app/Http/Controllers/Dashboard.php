<?php

namespace App\Http\Controllers;

use App\Models\Gfaq;
use App\Models\User;
use App\Models\Gfile;
use App\Models\Gtdona;
use App\Models\Gprojet;
use App\Models\Gbenevole;
use App\Models\Gactualite;
use App\Models\Grejoindre;
use App\Models\Grealisation;
use App\Models\Grecrutement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class Dashboard extends Controller
{
    // Espace commun
    public function profil()
    {
        return view('dashboard.commun.profil');
    }
    public function majprofil($maj)
    {
        return view('dashboard.commun.majprofil', ['maj' => $maj]);
    }
    public function setting()
    {
        return view('dashboard.commun.settings');
    }


    //Espace réservé uniquement à l'administrateur

    public function aadhesion()
    {
        $adhesi = Grejoindre::paginate(10);
        return view('dashboard.admin.adhesion', ['adhesi' => $adhesi]);
    }
    public function aapropos()
    {
        $dons = Gtdona::paginate(8);
        $faqs = Gfaq::paginate(8);
        $benevols = Gbenevole::paginate(8);
        return view('dashboard.admin.apropos', ['dons' => $dons, 'faqs' => $faqs, 'benevols' => $benevols]);
    }
    public function aactu()
    {
        $actus = Gactualite::paginate(8);
        $realisations = Grealisation::paginate(8);
        return view('dashboard.admin.actu', ['actus' => $actus, 'realisations' => $realisations]);
    }
    public function acontributeurs()
    {
        $utilisateurs = User::paginate(10);
        $admins = User::where('rule', 'ADMIN')->paginate(10);
        $contributeurs = User::where('rule', 'CONTRIBUTEUR')->paginate(10);
        $abonnes = User::where('rule', 'USER')->paginate(10);

        return view('dashboard.admin.contributeurs', ['utilisateurs' => $utilisateurs, 'admins' => $admins, 'contributeurs' => $contributeurs, 'abonnes' => $abonnes]);
    }

    public function dcompte($id)
    {
        $dcompte = User::findOrFail($id);
        return view('dashboard.admin.dcompte', compact('dcompte'));
    }
    
    public function aprojets()
    {
        $projets = Gprojet::paginate(8);
        return view('dashboard.admin.projets', ['projets' => $projets]);
    }

    public function deleteprojet(Gprojet $projet)
    {        
        if($projet->delete())
        {
            return redirect()->back()->with('success', "Projet " . $projet->titre . " supprimé avec succès !");
        }
    }
    
    public function agprojets()
    {
        return view('dashboard.admin.gestprojet');
    }

    public function arecrutements()
    {
        $stages = Grecrutement::where('typeoff', 'stage')->paginate(8);
        $emploies = Grecrutement::where('typeoff', 'emploie')->paginate(8);
        $benevolats = Grecrutement::where('typeoff', 'benevolat')->paginate(8);
        return view('dashboard.admin.recrutements', ['stages' => $stages, 'emploies' => $emploies, 'benevolats' => $benevolats]);
    }
    public function addemande()
    {
        return view('dashboard.admin.ddemande');
    }

    //Espace réservé uniquement aux contributeurs
    public function carticle()
    {
        $actus = Gactualite::paginate(8);
        return view('dashboard.contributeur.article', ['actus' => $actus]);
    }
    public function cgarticle()
    {
        return view('dashboard.contributeur.garticle');
    }
    public function coffres()
    {
        $stages = Grecrutement::where('typeoff', 'stage')->paginate(8);
        $emploies = Grecrutement::where('typeoff', 'emploie')->paginate(8);
        $benevolats = Grecrutement::where('typeoff', 'benevolat')->paginate(8);
        return view('dashboard.contributeur.offres', ['stages' => $stages, 'emploies' => $emploies, 'benevolats' => $benevolats]);
    }
    public function crealisation()
    {
        $realisations = Grealisation::paginate(8);
        return view('dashboard.contributeur.realisation', ['realisations' => $realisations]);
    }
    public function cdon()
    {
        return view('dashboard.contributeur.don');
    }

    //Espaces réservés uniquement aux abonnés
    public function demande()
    {
        return view('dashboard.abonne.demande');
    }
    public function documents($utilisateurId)
    {
        $documents = User::findOrFail($utilisateurId);
        $files = Gfile::where('user_id', $utilisateurId)->paginate(8);
        return view('dashboard.abonne.document', compact('documents', 'files'));
    }


    // Gestion des Ajouts, Suppressions et des Mises à jours

    //Gestion des Ajouts

    //ajout des actualités

    public function addactu(Request $request)
    {
        $image = $request->file('image');
        $image_name = $image->store("public/uploads/actualite");
        $image_name = explode("public", $image_name)[1];

        Gactualite::create([
            'titre' => $request->titre,
            'image' => $image_name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Actualité ajouté avec success');
    }

    // Affichage du formulaire de modification
    public function afficherModification(Gprojet $projet)
    {
        return view('dashboard.admin.updateProjet', ['projet' => $projet]);
    }

    // Modification
    public function modifier(Request $request, $id)
    {
        $projet = Gprojet::findOrFail($id);
        $projet->titre = $request->input("titre");
        $projet->description = $request->input("description");
        $projet->date = $request->input("date");

        if($request->hasFile("image"))
        {
            $image = $request->file('image');
            $image_name = $image->store("public/uploads/projet");
            $image_name = explode("public", $image_name)[1];
            $projet->image = $image_name;
        }

        $projet->save();

        return redirect(route("projets"))->with('success', 'Actualité ajouté avec success');
    }

    //ajout des réalisations
    
    public function addrealisation(Request $request)
    {
        $image = $request->file('image');
        $image_name = $image->store("public/uploads/realisation");
        $image_name = explode("public", $image_name)[1];

        $fichier = $request->file('fichier');
        $fichier_name = $fichier->store("public/uploads/realisation");
        $fichier_name = explode("public", $fichier_name)[1];


        Grealisation::create([
            'titre' => $request->titre,
            'image' => $image_name,
            'fichier' => $fichier_name,
        ]);
        return redirect()->back()->with('success', 'Réalisation ajouté avec success');
    }

    // modification des réalisations
    
    public function updaterealisation(Request $request, Grealisation $realisation)
    {
        $image_name = $realisation->image;
        $fichier_name = $realisation->fichier;

        if ($request->has("image")) {
            $image = $request->file('image');
            $image_name = $image->store("public/uploads/realisation");
            $image_name = explode("public", $image_name)[1];

            if(Storage::exists("public/" . $realisation->image)) {
                Storage::delete("public/" . $realisation->image);
            }
        }

        if($request->has("fichier"))
        {
            $fichier = $request->file('fichier');
            $fichier_name = $fichier->store("public/uploads/realisation");
            $fichier_name = explode("public", $fichier_name)[1];

            if(Storage::exists("public/" . $realisation->fichier)) {
                Storage::delete("public/" . $realisation->fichier);
            }
        }        

        $realisation->update([
            'titre' => $request->titre,
            'image' => $image_name,
            'fichier' => $fichier_name,
        ]);

        return redirect()->back()->with('success', 'Réalisation #153' . $realisation->id . ' mise à jour avec success');
    } 
    
    // ajout des recrutements
    public function addrecrutement(Request $request)
    {
        $image = $request->file('image');
        $image_name = time() . "." . $image->extension();
        $image->move(public_path('uploads/recrutement/'), $image_name);

        Grecrutement::create([
            'titre' => $request->titre,
            'typeoff' => $request->typeoff,
            'reference' => $request->reference,
            'niveaue' => $request->niveaue,
            'experience' => $request->experience,
            'contrat' => $request->contrat,
            'expire' => $request->expire,
            'image' => '/uploads/recrutement/' . $image_name,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Recrutement ajouté avec success');
    }

    //ajout des projets
    public function addprojet(Request $request)
    {

        // dd($request->all());

        $image = $request->file('image');
        $image_name = time() . "." . $image->extension();
        $image->move(public_path('uploads/projet/'), $image_name);


        Gprojet::create([
            'titre' => $request->titre,
            'date' => $request->date,
            'image' => '/uploads/projet/' . $image_name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Projet ajouté avec success');
    }

    //ajout des temoignages des donateurs
    public function addona(Request $request)
    {

        Gtdona::create([
            'titre' => $request->titre,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Témoignage ajouté avec success');
    }

    //ajout des faq
    public function addfaq(Request $request)
    {

        Gfaq::create([
            'titre' => $request->titre,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Faq ajouté avec success');
    }

    //ajout des temoignages pour bénevolats
    public function addtbenevol(Request $request)
    {

        $image = $request->file('image');
        $image_name = time() . "." . $image->extension();
        $image->move(public_path('uploads/temoignage/'), $image_name);


        Gbenevole::create([
            'titre' => $request->titre,
            'image' => '/uploads/temoignage/' . $image_name,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Témoignage de bénévole ajouté avec success');
    }

    //ajout des documents
    public function addfile(Request $request)
    {

        $fichier = $request->file('fichier');
        $fichier_name = time() . "." . $fichier->extension();
        $fichier->move(public_path('uploads/document/'), $fichier_name);


        Gfile::create([
            'titre' => $request->titre,
            'user_id' => $request->user_id,
            'fichier' => '/uploads/document/' . $fichier_name,
        ]);
        return redirect()->back()->with('success', 'Document ajouté avec success');
    }

    // Gestion des mise à jour
    
    //Mise à jour du profil
    public function UpdateProfil(User $maj, Request $request)
    {
        $new_image_name = $maj->image;

        if ($request->file('image')) {
            $image = $request->file('image');
            $new_image_name = $image->store("public/uploads/profil");
            $new_image_name = explode("public/", $new_image_name)[1];
        }

        $maj->update([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact, 
            'adresse' => $request->adresse,
            'ville' => $request->ville,
            'pays' => $request->pays,
            'lieu' => $request->lieu,
            'birth' => $request->birth,
            'profession' => $request->profession,
            'image' => $new_image_name
        ]);

        return redirect()->back()->with('success', 'Profil mise à jour avec succès');
    }

    public function Updatecompt( Request $request)
    {
         $id = $request->input('iduser');
        // $user = User::findOrFail($request->iduser);
        // $user->rule = $request->rule;
        // $user->save();
         User::where('id', $id)->update(['rule' => $request->rule]);

        return redirect()->back()->with('success', 'Profil mise à jour avec succès');
    }

    //Zone de supression
    public function Destroyfile(Gfile $fichier)
    {
        $fichier->delete();
        return redirect()->back()->with('success', 'Document supprimé avec succès');
    }

    public function Destroycompte(User $compte)
    {
        $compte->delete();
        return redirect(route('contributeurs'))->with('success', 'Compte supprimé avec succès');
    }

    public function Destroyrecrute(Grecrutement $recrute)
    {
        $recrute->delete();
        return redirect()->back()->with('success', 'L\'offre a été supprimé avec succès');
    }

    public function Destroyactu(Gactualite $actu)
    {
        $actu->delete();
        return redirect()->back()->with('success', 'L\'actualité a été supprimé avec succès');
    }

    public function Destroyrealis(Grealisation $realis)
    {
        $realis->delete();
        return redirect()->back()->with('success', 'La réalisation a été supprimé avec succès');
    }

    public function Destroydona(Gtdona $dona)
    {
        $dona->delete();
        return redirect()->back()->with('success', 'Le temoignage a été supprimé avec succès');
    }

    public function Destroyfaq(Gfaq $faq)
    {
        $faq->delete();
        return redirect()->back()->with('success', 'Le faq a été supprimé avec succès');
    }

    public function Destroybenev(Gbenevole $benev)
    {
        $benev->delete();
        return redirect()->back()->with('success', 'Le temoignage a été supprimé avec succès');
    }
}
