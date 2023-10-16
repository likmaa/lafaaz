<?php

namespace App\Http\Controllers;

use App\Models\Gactualite;
use App\Models\Gbenevole;
use App\Models\Gdonprojet;
use App\Models\Gdonsout;
use App\Models\Gfaq;
use App\Models\Gprojet;
use App\Models\Grealisation;
use App\Models\Grecrutement;
use App\Models\Grejoindre;
use App\Models\Gtdona;
use Illuminate\Http\Request;

class Controllers extends Controller
{
    //Fondation 
    
    public function index()
    {
        $projets = Gprojet::orderBy('created_at', 'DESC')->limit(3)->get();
        $actus = Gactualite::orderBy('created_at', 'DESC')->limit(3)->get();
        $dons = Gtdona::orderBy('created_at', 'DESC')->limit(3)->get();

        return view('fondation.welcome', ['projets' => $projets, 'actus' => $actus, 'dons' => $dons,]);
    }

    public function detail($id)
    {
        $projet = Gprojet::findOrFail($id);
        $projets = Gprojet::orderBy('created_at', 'DESC')->limit(3)->get();
        return view('fondation.details', compact('projet'), ['projets' => $projets]);
    }
    public function projet()
    {
        $projets = Gprojet::paginate(8);
        return view('fondation.projet', ['projets' => $projets]);
    }
    public function apropos()
    {
        $benevols = Gbenevole::orderBy('created_at', 'DESC')->limit(3)->get();
        return view('fondation.apropos', ['benevols' => $benevols]);
    }
    public function realisation()
    {
        $realisations = Grealisation::paginate(6);
        return view('fondation.realisation', ['realisations' => $realisations]);
    }
    public function emplois()
    {
        $emploies = Grecrutement::where('typeoff', 'emploie')->paginate(4);
        $projets = Gprojet::orderBy('created_at', 'DESC')->limit(6)->get();
        return view('fondation.emplois', ['emploies' => $emploies, 'projets' => $projets]);
    }
    public function demplois($id)
    {
        $emploie = Grecrutement::findOrFail($id);
        return view('fondation.demplois', compact('emploie'));
    }
    public function benevol()
    {
        $benevol = Grecrutement::where('typeoff', 'benevolat')->orderBy('created_at', 'DESC')->paginate(4);
        return view('fondation.benevolat', ['benevol' => $benevol]);
    }
    public function dbenevol($id)
    {
        $benev = Grecrutement::findOrFail($id);
        return view('fondation.dbenevolat', compact('benev'));
    }
    public function stage()
    {
        $stages = Grecrutement::where('typeoff', 'stage')->paginate(8);
        return view('fondation.stage', ['stages' => $stages]);
    }
    public function dstage($id)
    {
        $stage = Grecrutement::findOrFail($id);
        return view('fondation.dstage', compact('stage'));
    }
    public function travail()
    {
        return view('fondation.travail-avec-nous');
    }

    //Actualité
    public function actu1()
    {
        $actus = Gactualite::paginate(6);
        return view('actualite.actu', ['actus' => $actus]);
    }
    public function actu2($id)
    {
        $actu = Gactualite::findOrFail($id);
        $actus = Gactualite::orderBy('created_at', 'DESC')->limit(3)->get();
        return view('actualite.dactu', compact('actu'), ['actus' => $actus]);
    }

    public function actu4()
    {
        return view('actualite.2023');
    }

    // Don

    public function donpr()
    {
        $projets = Gprojet::all();
        return view('don.pr-projet', ['projets' => $projets]);
    }


    public function addproj(Request $request)
    {
        $kkiapay = new \Kkiapay\Kkiapay(
            config('app.kkiapay_public'),
            config('app.kkiapay_private'),
            config('app.kkiapay_secret')
        );

        $operation = $kkiapay->verifyTransaction($request->ts);
        if (is_int($operation)) {
            return redirect()->back()->with('danger', 'Nous rencontrons des difficultés pour confirmer votre paiement. Veuillez réessayer.');
        }

        $request->validate([
            'nom' => 'required',
            'projet' => 'required',
            'montant' => 'required|string|min:100',
            'tel' => 'required',
            'email' => 'required',
        ]);
        
        if ($operation->status) {
            Gdonprojet::create([
                'nom' => $request->nom,
                'projet' => $request->projet,
                'tel' => $request->tel,
                'email' => $request->email,
                'adresse' => $request->adresse,
                'montant' => $request->montant,
                'message' => $request->message,
            ]);
            return redirect()->back()->with('success', 'Votre don a été envoyer avec success');
        } else {

            return redirect()->back()->with('danger', 'Nous rencontrons des difficultés pour confirmer votre paiement. Veuillez réessayer.');
        }
    }

    public function dons()
    {
        return view('don.soutient');
    }
    public function addsoutien(Request $request)
    {

        $kkiapay = new \Kkiapay\Kkiapay(
            config('app.kkiapay_public'),
            config('app.kkiapay_private'),
            config('app.kkiapay_secret')
        );

        $operation = $kkiapay->verifyTransaction($request->ts);
        if (is_int($operation)) {
            return redirect()->back()->with('danger', 'Nous rencontrons des difficultés pour confirmer votre paiement. Veuillez réessayer.');
        }

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'montant' => 'required|string|min:100',
            'tel' => 'required',
            'email' => 'required',
        ]);

        if ($operation->status) {
            Gdonsout::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'tel' => $request->tel,
                'email' => $request->email,
                'adresse' => $request->adresse,
                'montant' => $request->montant,
                'description' => $request->description,
            ]);
            return redirect()->back()->with('success', 'Votre don a été envoyer avec success');
        } else {

            return redirect()->back()->with('danger', 'Nous rencontrons des difficultés pour confirmer votre paiement. Veuillez réessayer.');
        }
    }

    //Membre
    public function membpa()
    {
        return view('membre.partenaire');
    }
    public function membre()
    {
        return view('membre.rejoindre');
    }
    public function addmembre(Request $request)
    {
        $kkiapay = new \Kkiapay\Kkiapay(
            config('app.kkiapay_public'),
            config('app.kkiapay_private'),
            config('app.kkiapay_secret')
        );

        $operation = $kkiapay->verifyTransaction($request->ts);
        if (is_int($operation)) {
            return redirect()->back()->with('danger', 'Nous rencontrons des difficultés pour confirmer votre paiement. Veuillez réessayer.');
        }
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'postal' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'adresse' => 'required',
            'birth' => 'required',
            'profession' => 'required',
        ]);

        $casier_name = "required";
        $cin_name = "required";
        $motive_name = "required";


        if ($operation->status) {

            if ($request->file('cin')) {
                $cin = $request->file('cin');
                $cin_name = time() . "." . $cin->extension();
                $cin->move(public_path('uploads/rejoindre/'), $cin_name);
            }
            if ($request->file('casier')) {
                $casier = $request->file('casier');
                $casier_name = time() . "." . $casier->extension();
                $casier->move(public_path('uploads/rejoindre/'), $casier_name);
            }
            if ($request->file('motive')) {
                $motive = $request->file('motive');
                $motive_name = time() . "." . $motive->extension();
                $motive->move(public_path('uploads/rejoindre/'), $motive_name);
            }

            Grejoindre::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'postal' => $request->postal,
                'ville' => $request->ville,
                'pays' => $request->pays,
                'tel' => $request->tel,
                'email' => $request->email,
                'adresse' => $request->adresse,
                'birth' => $request->birth,
                'profession' => $request->profession,
                'casier' => '/uploads/rejoindre/' . $casier_name,
                'cin' => '/uploads/rejoindre/' . $cin_name,
                'motive' => '/uploads/rejoindre/' . $motive_name,
            ]);
            return redirect()->back()->with('success', 'Votre demande a été envoyer avec success');
        } else {

            return redirect()->back()->with('danger', 'Nous rencontrons des difficultés pour confirmer votre paiement. Veuillez réessayer.');
        }
    }

    //Programme
    public function progas1()
    {
        return view('programme.assistance-troisieme-age');
    }
    public function progas2()
    {
        return view('programme.assistant-aux-orphelins');
    }
    public function progco()
    {
        return view('programme.coaching-couple');
    }
    public function proged()
    {
        return view('programme.education-jeunesse');
    }

    //FAQ
    public function faq()
    {
        $faqs = Gfaq::all();
        return view('faq', ['faqs' => $faqs]);
    }
    public function root()
    {
        return view('dashboard.profil');
    }
}
