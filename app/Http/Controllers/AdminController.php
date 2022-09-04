<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projets;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    // Affiche TOUT les projets
    public function index(){
        $projets = Projets::all()->sortByDesc('id');        
        return view("pages.admin.admin", compact("projets"));
    }

    // FORMULAIRE pour créer une NOUVEAU projet
    public function create() { 
        return view("pages.admin.create");
    }
    
    // ENREGISTRER un NOUVEAU projet
    public function store(Request $request) { 
        // 1. La validation
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
            'url' => 'required|string|max:100',
            'image' => 'required|integer|max:10',
            'tags' => 'required|string|max:255|in:Print,Web, Vidéo',
            'logiciels' => 'required|string|max:255',
            'date' => 'required|numeric|digits:4|min:2018',
            'mission' => 'required|string|max:255',
            'services' => 'required|string|max:255',
            'demarche' => 'nullable|string|max:255',
            'video' => 'nullable|string|max:255',
            'decouvrir' => 'nullable|string|max:255',
        ]);
        // 2. Upload de l'image dans "/storage/app/public/images/projets"
        // $chemin_image = $request->picture->store("images/projets");
        // faire ? Upload Multiple files at once
        // 3. On enregistre les informations du projet
        $projet = Projets::create($validatedData);
    
        return redirect('/admin')->with('success', 'Projet créer avec succèss');
    }

    // FORMULAIRE pour éditer les données d'un projet 
    public function edit(Projets $projet) { 
        return view("pages.admin.edit", compact("projet"));
    }

    // METTRE A JOUR les données du projet dans la BDD
    public function update(Request $request, $id) {
        $projet = Projets::where('id', '=', $id);
        // 1. La validation

        // Les règles de validation pour "title" et "content"
        $rules = [
            'title' => 'bail|required|string|max:255',
            "content" => 'bail|required',
        ];

        // // Si une nouvelle image est envoyée
        // if ($request->has("picture")) {
        //     // On ajoute la règle de validation pour "picture"
        //     $rules["picture"] = 'bail|required|image|max:1024';
        // }

        // $this->validate($request, $rules);

        // // 2. On upload l'image dans "/storage/app/public/posts"
        // if ($request->has("picture")) {

        //     //On supprime l'ancienne image
        //     Storage::delete($post->picture);

        //     $chemin_image = $request->picture->store("posts");
        // }

        // 3. On met à jour les informations du Post
        $projet->update([
            "titre" => $request->titre,
            // "picture" => isset($chemin_image) ? $chemin_image : $post->picture,
            "mission" => $request->mission
        ]);

        // 4. On affiche le Post modifié : route("posts.show")
        return redirect(route("pages.accueil.show", $projet));
    }

    public function destroy($id) { 
        // On supprime l'image existant
        // Storage::delete($projet->id);
        Projets::destroy($id);
        return redirect()->back();
    }
}
