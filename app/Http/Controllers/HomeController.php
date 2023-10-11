<?php

namespace App\Http\Controllers;

use App\Models\Gactualite;
use App\Models\Gdonprojet;
use App\Models\Gdonsout;
use App\Models\Grealisation;
use App\Models\Grecrutement;
use App\Models\Grejoindre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rejoindre = Grejoindre::orderBy('created_at', 'DESC')->limit(5)->get();
        $soutien = Gdonsout::orderBy('created_at', 'DESC')->limit(5)->get();
        $projets = Gdonprojet::orderBy('created_at', 'DESC')->limit(5)->get();
        $realisations = Grealisation::orderBy('created_at', 'DESC')->limit(4)->get();
        $actus = Gactualite::orderBy('created_at', 'DESC')->limit(4)->get();
        $stages = Grecrutement::where('typeoff', 'stage')->limit(4)->get();
        $emploies = Grecrutement::where('typeoff', 'emploie')->limit(4)->get();
        $benevolats = Grecrutement::where('typeoff', 'benevolat')->limit(4)->get();
        return view('dashboard.commun.home', ['realisations' => $realisations, 'actus' => $actus,'stages' => $stages, 'emploies' => $emploies, 'benevolats' => $benevolats ,'rejoindre' => $rejoindre, 'soutien' => $soutien, 'projets' => $projets]);
    }
}
