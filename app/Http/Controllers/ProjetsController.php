<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projets;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;

class ProjetsController extends Controller
{
    // afficher l'inventaire des projets
    public function index(){
        $projets = Projets::all()->sortByDesc('id');
        
        return view("pages.projets.projets", compact("projets"));
    }
    
    // afficher un projet particulier
    public function show($id){
        // get the current projet
        $projet = Projets::findOrFail($id);
        // Get Next / Previous Record
        $next = $projet->next();
        $previous = $projet->previous();
        
        return view("pages.projets.projet", compact("projet"    , "previous", "next"));
    }
    
}
