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
        $projets = Gprojet::orderBy('created_at', 'desc')->paginate(8);
        return view('dashboard.admin.projets', ['projets' => $projets]);
    }

    public function deleteprojet(Gprojet $projet)
    {
        if ($projet->delete()) {
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
        $emploies = Grecrutement::where('typeoff', 'emploi')->paginate(8);
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

    // Affichage du formulaire de modification de projets

    public function afficherModification(Gprojet $projet)
    {
        return view('dashboard.admin.updateProjet', ['projet' => $projet]);
    }

    // Modification de projets

    public function modifierProjet(Request $request, $id)
    {
        $request->validate(
            [
                'extrait' => 'required|string|max:250',
                'titre' => 'required|string|max:150',
                'description' => 'required|string',
                'date' => 'required|date',
                'image' => 'image|mimes:jpg,jpeg,png'
            ],
            [
                'image.image' => 'Vous devez fournir une image valide',
                'image.mimes' => 'L\'image fournie devrait être de type : jpg, jpeg, png',
                'titre.required' => 'Le titre est obligatoire',
                'titre.string' => 'Le titre est une chaîne de caractères',
                'titre.max' => 'Au plus :max caractères pour le titre',
                'extrait.required' => 'L\'extrait est obligatoire',
                'extrait.string' => 'L\'extrait est une chaîne de caractères',
                'description.required' => 'La description est obligatoire',
                'description.string' => 'La description est une chaîne de caractères',
                'extrait.max' => 'Au plus :max caractères pour l\'extrait',
            ]
        );

        $projet = Gprojet::findOrFail($id);
        $projet->titre = $request->input("titre");
        $projet->extrait = $request->input("extrait");
        $projet->description = $request->input("description");
        $projet->date = $request->input("date");

        if ($request->hasFile("image")) {
            if (Storage::exists('public/' . $projet->image)) {
                Storage::delete("public/" . $projet->image);
            }

            $image = $request->file('image');
            $image_name = $image->store("public/uploads/projet");
            $image_name = explode("public", $image_name)[1];
            $projet->image = $image_name;
        }

        $projet->save();

        return redirect(route("projets"))->with('success', 'Projet ' . $projet->titre . ' mis à jour avec success');
    }


    // Affichage du formulaire de modification des offres

    public function afficherModificationOffre(Grecrutement $offre)
    {
        return view('dashboard.admin.updateOffre', ['offre' => $offre]);
    }

    // Modification des offres

    public function modifierOffre(Request $request, $id)
    {
        $request->validate(
            [
                'titre' => 'required|string|max:150',
                'description' => 'required|string',
                'experience' => 'required|string',
                'contrat' => 'string',
                'typeoff' => 'string',
                'expire' => 'required|date',
                'image' => 'image|mimes:jpg,jpeg,png',
                'niveaue' => 'string',
                'reference' => 'required|string',
            ],
            [
                'image.image' => 'Vous devez fournir une image valide',
                'image.mimes' => 'L\'image fournie devrait être de type : jpg, jpeg, png',
                'titre.required' => 'Le titre est obligatoire',
                'titre.string' => 'Le titre est une chaîne de caractères',
                'titre.max' => 'Au plus :max caractères pour le titre',
                'experience.required' => 'L\'experience est obligatoire',
                'experience.string' => 'L\'experience est une chaîne de caractères',
                'description.required' => 'La description est obligatoire',
                'description.string' => 'La description est une chaîne de caractères',
                'contrat.string' => 'Le contrat est une chaîne de caractères',
                'expire.required' => 'La date d\'expiration est obligatoire',
                'expire.date' => 'Le date d\'expiration doit être valide',
                'niveaue.string' => 'Le niveau d\'étude est une chaîne de caractères',
                'typeoff.string' => 'Le type d\'offre est une chaîne de caractères',
                'reference.required' => 'La référence est obligatoire',
                'reference.string' => 'La reference est une chaîne de caractères'
            ]
        );

        $recrutement = Grecrutement::findOrFail($id);
        $recrutement->titre = $request->input("titre");
        $recrutement->experience = $request->input("experience");
        $recrutement->description = $request->input("description");
        $recrutement->contrat = ($request->input("contrat") != '0') ? $request->input("contrat") : $recrutement->contrat;
        $recrutement->typeoff = ($request->input("typeoff") != '0') ? $request->input("typeoff") : $recrutement->typeoff;
        $recrutement->niveaue = ($request->input("niveaue") != '0') ? $request->input("niveaue") : $recrutement->niveaue;
        $recrutement->reference = $request->input("reference");
        $recrutement->expire = $request->input("expire"); 

        if ($request->hasFile("image")) {
            if (Storage::exists('public/' . $recrutement->image)) {
                Storage::delete("public/" . $recrutement->image);
            }

            $image = $request->file('image');
            $image_name = $image->store("public/uploads/recrutement");
            $image_name = explode("public", $image_name)[1];
            $recrutement->image = $image_name;
        }

        $recrutement->save();

        return redirect(route("recrutements"))->with('success', 'Offre ' . $recrutement->titre . ' mis à jour avec success');
    }


    // Affichage du formulaire de modification des dons

    public function afficherModificationDon(Gtdona $donateur)
    {
        return view('dashboard.admin.updateDonateur', ['donateur' => $donateur]);
    }

    // Modification des dons

    public function modifierDonateur(Request $request, $id)
    {
        $request->validate(
            [
                'titre' => 'required|string|max:150',
                'description' => 'required|string'
            ],
            [
                'titre.required' => 'Le titre est obligatoire',
                'titre.string' => 'Le titre est une chaîne de caractères',
                'titre.max' => 'Au plus :max caractères pour le titre',
                'description.required' => 'La description est obligatoire',
                'description.string' => 'La description doit être une chaîne de caractères',
            ]
        );

        $dona = Gtdona::findOrFail($id);
        $dona->titre = $request->input("titre");
        $dona->description = $request->input("description");
        $dona->save();

        return redirect(route("aapropos"))->with('success', 'Donateur ' . $dona->titre . ' mis à jour avec success');
    }

    // Affichage du formulaire de modification d'actualités

    public function afficherModificationActu(Gactualite $actu)
    {
        return view('dashboard.admin.updateActualite', ['actu' => $actu]);
    }

    // Modification de projets

    public function modifierActu(Request $request, $id)
    {
        $actualite = Gactualite::findOrFail($id);
        $actualite->titre = $request->input("titre");
        $actualite->description = $request->input("description");

        if ($request->hasFile("image")) {
            if (Storage::exists('public/' . $actualite->image)) {
                Storage::delete("public/" . $actualite->image);
            }

            $image = $request->file('image');
            $image_name = $image->store("public/uploads/actualite");
            $image_name = explode("public", $image_name)[1];
            $actualite->image = $image_name;
        }

        $actualite->save();

        return redirect(route("aactu"))->with('success', 'Actualité \'' . $actualite->titre . '\' mise à jour avec success');
    }


    // Affichage du formulaire de modification des faqs

    public function afficherModificationFaq(Gfaq $faq)
    {
        return view('dashboard.admin.updateFaq', ['faq' => $faq]);
    }

    // Modification de faqs

    public function modifierFaq(Request $request, $id)
    {
        $request->validate(
            [
                'titre' => 'required|string|max:150',
                'description' => 'required|string'
            ],
            [
                'titre.required' => 'Le titre est obligatoire',
                'titre.string' => 'Le titre est une chaîne de caractères',
                'titre.max' => 'Au plus :max caractères pour le titre',
                'description.required' => 'La description est obligatoire',
                'description.string' => 'La description doit être une chaîne de caractères',
            ]
        );

        $faq = Gfaq::findOrFail($id);
        $faq->titre = $request->input("titre");
        $faq->description = $request->input("description");
        $faq->save();

        return redirect(route("aapropos"))->with('success', 'Faq ' . $faq->titre . ' mise à jour avec success');
    }

    // Affichage du formulaire de modification des réalisations

    public function afficherModificationReal(Grealisation $realisation)
    {
        return view('dashboard.admin.updateRealisation', ['realisation' => $realisation]);
    }

    // Modification des réalisations

    public function modifierRealisation(Request $request, $id)
    {
        $realisation = Grealisation::findOrFail($id);
        $realisation->titre = $request->input("titre");

        if ($request->hasFile("image")) {
            if (Storage::exists('public/' . $realisation->image)) {
                Storage::delete("public/" . $realisation->image);
            }
            $image = $request->file('image');
            $image_name = $image->store("public/uploads/realisation");
            $image_name = explode("public", $image_name)[1];
            $realisation->image = $image_name;
        }

        if ($request->hasFile("fichier")) {
            if (Storage::exists('public/' . $realisation->fichier)) {
                Storage::delete("public/" . $realisation->fichier);
            }
            $fichier = $request->file('fichier');
            $fichier_name = $fichier->store("public/uploads/realisation");
            $fichier_name = explode("public", $fichier_name)[1];
            $realisation->fichier = $fichier_name;
        }

        $realisation->save();

        return redirect(route("aactu"))->with('success', 'Réalisation \'' . $realisation->titre . '\' mise à jour avec success');
    }

    // Affichage du formulaire de modification des bénévoles

    public function afficherModificationBen(Gbenevole $benevole)
    {
        return view('dashboard.admin.updateBenevole', ['benevole' => $benevole]);
    }

    // Modification de bénévoles

    public function modifierBenevole(Request $request, $id)
    {
        $request->validate(
            [
                'titre' => 'required|string|max:150',
                'description' => 'required|string',
                'image' => 'image|mimes:jpg,jpeg,png'
            ],
            [
                'image.image' => 'Vous devez fournir une image valide',
                'image.mimes' => 'L\'image fournie devrait être de type : jpg, jpeg, png',
                'titre.required' => 'Le titre est obligatoire',
                'titre.string' => 'Le titre est une chaîne de caractères',
                'titre.max' => 'Au plus :max caractères pour le titre',
                'description.required' => 'La description est obligatoire',
                'description.string' => 'La description est une chaîne de caractères',
                'extrait.max' => 'Au plus :max caractères pour l\'extrait',
            ]
        );

        $benevole = Gbenevole::findOrFail($id);
        $benevole->titre = $request->input("titre");
        $benevole->description = $request->input("description");

        if ($request->hasFile("image")) {
            if (Storage::exists('public/' . $benevole->image)) {
                Storage::delete("public/" . $benevole->image);
            }
            $image = $request->file('image');
            $image_name = $image->store("public/uploads/benevole");
            $image_name = explode("public", $image_name)[1];
            $benevole->image = $image_name;
        }

        $benevole->save();

        return redirect(route("aapropos"))->with('success', 'Bénévole ' . $benevole->titre . ' mis à jour avec success');
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

            if (Storage::exists("public/" . $realisation->image)) {
                Storage::delete("public/" . $realisation->image);
            }
        }

        if ($request->has("fichier")) {
            $fichier = $request->file('fichier');
            $fichier_name = $fichier->store("public/uploads/realisation");
            $fichier_name = explode("public", $fichier_name)[1];

            if (Storage::exists("public/" . $realisation->fichier)) {
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
        $request->validate(
            [
                'titre' => 'required|string|max:150',
                'description' => 'required|string',
                'experience' => 'required|string',
                'contrat' => 'required|string',
                'typeoff' => 'required|string',
                'expire' => 'required|date',
                'image' => 'required|image|mimes:jpg,jpeg,png',
                'niveaue' => 'required|string',
                'reference' => 'required|string|unique:grecrutements,reference',
            ],
            [
                'image.required' => 'Le titre est obligatoire',
                'image.image' => 'Vous devez fournir une image valide',
                'image.mimes' => 'L\'image fournie devrait être de type : jpg, jpeg, png',
                'titre.required' => 'Le titre est obligatoire',
                'titre.string' => 'Le titre est une chaîne de caractères',
                'titre.max' => 'Au plus :max caractères pour le titre',
                'experience.required' => 'L\'experience est obligatoire',
                'experience.string' => 'L\'experience est une chaîne de caractères',
                'description.required' => 'La description est obligatoire',
                'description.string' => 'La description est une chaîne de caractères',
                'contrat.required' => 'Le contrat est obligatoire',
                'contrat.string' => 'Le contrat est une chaîne de caractères',
                'expire.required' => 'La date d\'expiration est obligatoire',
                'expire.date' => 'Le date d\'expiration doit être valide',
                'niveaue.required' => 'Le niveau d\'étude est obligatoire',
                'niveaue.string' => 'Le niveau d\'étude est une chaîne de caractères',
                'typeoff.required' => 'Le type d\'offre est obligatoire',
                'typeoff.string' => 'Le type d\'offre est une chaîne de caractères',
                'reference.required' => 'La référence est obligatoire',
                'reference.string' => 'La reference est une chaîne de caractères',
                'reference.unique' => 'La reference doit être unique',
            ]
        );

        $image = $request->file('image');
        $image_name = $image->store("public/uploads/recrutement");
        $image_name = explode("public", $image_name)[1];

        Grecrutement::create([
            'titre' => $request->titre,
            'typeoff' => $request->typeoff,
            'reference' => $request->reference,
            'niveaue' => $request->niveaue,
            'experience' => $request->experience,
            'contrat' => $request->contrat,
            'expire' => $request->expire,
            'image' => $image_name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Recrutement ajouté avec success');
    }

    //ajout des projets
    public function addprojet(Request $request)
    {
        $request->validate([
            'extrait' => 'required|string|max:150',
            'titre' => 'required|string|unique:gprojets,titre|max:150',
            'description' => 'required|string',
            'date' => 'required|date',
            'image' => 'required|image'
        ]);

        if ($request->has("image")) {
            $image = $request->file('image');
            $image_name = $image->store("public/uploads/projet");
            $image_name = explode("public", $image_name)[1];
        }

        Gprojet::create([
            'titre' => $request->titre,
            'extrait' => $request->extrait,
            'date' => $request->date,
            'image' => $image_name,
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

    public function Updatecompt(Request $request)
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
