<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   

        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "mauriaucourt.sarah@gmail.com",
            'password' => bcrypt('password'),
        ]);

        DB::table('projets')->insert([
            'titre' => "Abécédaire",
            'url' => "abecedaire",
            'tags' => 'Vidéo',
            'logiciels' => 'Premiere Pro',
            "date" => '2018',
            "mission" => 'En équipe, nous avons dû réaliser un abécédaire sur le champ lexical de l’IUT de Lens. Pour cela, nous devions prendre l’ensemble des photographies au sein de notre IUT, créer les cartons de chaque lettre et concevoir une bande son. En s’inspirant de Jean-Luc Godard, nous avons cherché à ressortir les lettres des photographies.',
            "services" => 'Montage',
            "demarche" => 'NULL',
            'video' => 'NULL',
            'decouvrir' => 'NULL',
        ]);

        DB::table('projets')->insert([
            'titre' => "Chella man",
            'url' => "chella_man",
            'image' => "4",
            'tags' => 'Print',
            'logiciels' => 'Photoshop',
            "date" => '2018',
            "mission" => 'Lors d’un cours d’esthétisme, j’ai dû réaliser la première et quatrième de couverture d’un livre monographique imaginaire d’un artiste. J’ai choisi Chella Man qui est une personnalité que j’aime beaucoup, car il est un symbole de bienveillance, d’ouverture d’esprit et de pouvoir. Il se caractérise en tant qu’artiste sourd, transgenre et juif pour faire passer des messages d’acceptation de soi et de l’autre.',
            "services" => 'Couverture sensible',
            "demarche" => 'NULL',
            'video' => 'NULL',
            'decouvrir' => 'NULL',
        ]);
        
        DB::table('projets')->insert([
            'titre' => "Mouud",
            'url' => "mouud",
            'tags' => 'Web',
            'logiciels' => 'Laravel, HTML, CSS, JS, Bootstrap',
            "date" => '2020',
            "mission" => 'Dans le cadre de notre cours de développement web, nous devions réaliser une plateforme de distribution musicale. Les fonctionnalités attendues : page utilisateur, suivre d’autres utilisateurs, rechercher des utilisateurs et des chansons, uploader et aimer des chansons, créer des playlists.',
            "services" => 'Site web, UI & UX',
            "demarche" => 'Au travers de ce projet, je voulais créer un site reposant où on peut exprimer ses émotions par la musique. Pour cela, j’ai choisi des couleurs chaleureuses créant une ambiance tamisée et les animations permettent de créer de la fluidité dans le parcours du site.',
            'video' => 'NULL',
            'decouvrir' => 'https://mouud.sarahmauriaucourt.fr/',
        ]);

        DB::table('projets')->insert([
            'titre' => "Lockbook",
            'url' => "lockbook",
            'tags' => 'Print',
            'logiciels' => 'Indesign, Lightroom,Lumix GX9',
            "date" => '2020',
            "mission" => "Réalisation d'un journal de bord durant le confinement 2020.",
            "services" => 'Photographie',
            "demarche" => 'Je me suis mise au défi de prendre l’ensemble des photographies au sein de ma chambre. En tant que lieu statique, chaque jour, je cherchais un nouveau point de vue et les éventuels changements (luminosité, contraste, …) qu’il pouvait avoir pour mes prises photographiques.',
            'video' => 'NULL',
            'decouvrir' => 'https://www.behance.net/gallery/133392623/Lockbook',
        ]);

        // DB::table('projets')->insert([
        //     'titre' => "Brique à Braque",
        //     'url' => "brique_a_braque",
        //     'tags' => 'Print',
        //     'logiciels' => 'POV-Ray, Blender',
        //     "date" => '2021',
        //     "mission" => '',
        //     "services" => '',
        //     "demarche" => '',
        //     'video' => 'NULL',
        //     'decouvrir' => 'NULL',
        // ]);

        DB::table('projets')->insert([
            'titre' => "now",
            'url' => "now",
            'tags' => 'Vidéo',
            'logiciels' => 'Premier Pro, After Effects, Protools, Photoshop, Illustrator',
            "date" => '2021',
            "mission" => 'Réaliser un film court sur le thème 2050.',
            "services" => 'Prise de vue et son, Support de communication',
            "demarche" => 'En 2050, la France est tombée sous une dictature après les nombreux problèmes économiques et environnementaux que le monde a dû traverser. Anar, un jeune programmeur, va mettre en place une stratégie pour protester contre le régime actuel.',
            'video' => 'https://player.vimeo.com/video/559339399',
            'decouvrir' => 'https://www.behance.net/gallery/134235161/now-Court-mtrage',
        ]);

        DB::table('projets')->insert([
            'titre' => "Grilles",
            'url' => "grilles",
            'image' => "4",
            'tags' => 'Print',
            'logiciels' => 'Illustrator',
            "date" => '2021',
            "mission" => "Défi de 2 heures pour réaliser 3 affiches à partir d'une grille.",
            "services" => 'Création libre',
            "demarche" => 'NULL',
            'video' => 'NULL',
            'decouvrir' => 'NULL',
        ]);

        DB::table('projets')->insert([
            'titre' => "Persona d'Ingmar Bergman",
            'url' => "persona",
            'tags' => 'Print',
            'logiciels' => 'Photoshop',
            "date" => '2021',
            "mission" => "Réinterprétation de l'affiche du film Persona d'Ingmar Bergman. Comme dans le film, cette affiche explore la quête d'identité.",
            "services" => "Affiche",
            "demarche" => "Comme dans le film d’Ingmar Bergman, cette affiche explore l’identité personnelle au travers de la dépersonnalisation, volonté de se différencier et de se ressembler. Difficilement discernable, on retrouve les deux protagonistes de l’histoire par une superposition de sept photographies. Les effets de dégradé et de négatif ajoutent un aspect fantomatique.",
            'video' => 'NULL',
            'decouvrir' => 'https://www.behance.net/gallery/129927601/Persona-by-Ingmar-Bergman-Poster',
        ]);

        DB::table('projets')->insert([
            'titre' => "Splash Screen",
            'url' => "splash_screen_watermelon",
            'tags' => 'Web',
            'logiciels' => ' XD, Illustrator',
            "date" => '2021',
            "mission" => "Splash Screen animé d'une interface mobile sur le thème de la pastèque.",
            "services" => "UI & UX",
            "demarche" => 'NULL',
            'video' => 'https://player.vimeo.com/video/654248995',
            'decouvrir' => 'NULL',
        ]);

        DB::table('projets')->insert([
            'titre' => "Audio Player",
            'url' => "audio_player",
            'tags' => 'Web',
            'logiciels' => ' XD',
            "date" => '2021',
            "mission" => "Transition animée entre les musiques d'un Player Audio.",
            "services" => "UI & UX",
            "demarche" => 'NULL',
            'video' => 'https://player.vimeo.com/video/654249675',
            'decouvrir' => 'NULL',
        ]);

        DB::table('projets')->insert([
            'titre' => "Recette de cuisine asiatique",
            'url' => "asian_recipe",
            'tags' => 'Web',
            'logiciels' => ' XD',
            "date" => '2021',
            "mission" => "Interface mobile d'une page de recette d'une application mobile.",
            "services" => "UI & UX",
            "demarche" => 'NULL',
            'video' => 'https://player.vimeo.com/video/657412628',
            'decouvrir' => 'NULL',
        ]);

        DB::table('projets')->insert([
            'titre' => "Carte interactive",
            'url' => "carte_interactive",
            'tags' => 'Web',
            'logiciels' => ' XD',
            "date" => '2021',
            "mission" => "Découverte des espèces marines à travers une carte interactive.",
            "services" => "UI & UX",
            "demarche" => 'NULL',
            'video' => 'https://player.vimeo.com/video/661780846',
            'decouvrir' => 'NULL',
        ]);

        DB::table('projets')->insert([
            'titre' => "UP'event",
            'url' => "up_event",
            'tags' => ' Web',
            'logiciels' => 'Figma, Indesign, Illustrator',
            "date" => '2021',
            "mission" => "Développer un projet autour des thèmes relations humaines, réseaux et services ainsi que numérisation du monde.",
            "services" => "Data, Prototypage, Application mobile, UI & UX",
            "demarche" => "Up'event est une application mobile dédiée aux événements et sorties étudiantes dans la ville de Valenciennes. Sous forme ludique, l'application invite les étudiants à proposer des rencontres et événements ou à participer à ceux de nos partenaires. Sous forme de calendrier et de carte, l'application invite ses utilisateurs à se rencontrer, à partager leurs intérêts en dehors de leurs études et à marquer des points pour leur maison.",
            'video' => 'https://player.vimeo.com/video/662958130',
            'decouvrir' => 'https://www.behance.net/gallery/134945973/UPevent',
        ]);

         DB::table('projets')->insert([
            'titre' => "G20 | Rome",
            'url' => "climat",
            'tags' => 'Print',
            'logiciels' => ' Photoshop',
            "date" => '2021',
            "mission" => "Réappropriation du style graphique d'Henryk Tomaszewski pour créer une affiche sur le thème du climat.",
            "services" => "Poster",
            "demarche" => 'Réunis à Rome, les dirigeants du G20, on prit la pose devant la Fontaine de Trévi ou traditionnellement, on y jette des pièces pour réaliser un vœu. Cette photographie laisse imaginer qu’ils s’en remettent à la chance pour sauver la planète.',
            'video' => 'NULL',
            'decouvrir' => 'NULL',
        ]);

        DB::table('projets')->insert([
            'titre' => "Affiches CCI",
            'url' => "widmer",
            'image' => "2",
            'tags' => 'Print',
            'logiciels' => 'Illustrator',
            "date" => '2021',
            "mission" => "Dans la lignée de Widmer, ces affiches fictives d’une exposition 2022 au CCI mettent en avant des objets du quotidien.",
            "services" => "Poster",
            "demarche" => 'NULL',
            'video' => 'NULL',
            'decouvrir' => 'NULL',
        ]);
       
       DB::table('projets')->insert([
            'titre' => "Serres Royales de Laeken",
            'url' => "serres_royales_laeken",
            'tags' => 'Print Web',
            'logiciels' => 'Illustrator, Indesign, Photoshop',
            "date" => '2021',
            "mission" => "Élaboration de la charte graphique de Laeken, en passant de la création de son logotype à sa déclinaison sur les supports de communication print et digitaux.",
            "services" => "Identité de marque",
            "demarche" => 'NULL',
            'video' => 'https://player.vimeo.com/video/662957351',
            'decouvrir' => 'https://www.behance.net/gallery/134289793/Serres-Royales-de-Laeken-Charte-Graphique',
        ]);

        // DB::table('projets')->insert([
        //     'titre' => "La Nébuleuse",
        //     'url' => "nebuleuse",
        //     'tags' => "Web",
        //     'logiciels' => "XD, HTML, CSS, JS",
        //     "date" => '2021',
        //     "mission" => "Webdesign et développement front-end d'un site web pour le théâtre fictif 'La Nébuleuse'.",
        //     "services" => "Développement Web, UI & UX",
        //     "demarche" => 'NULL',
        //     'video' => 'NULL',
        //     'decouvrir' => 'https://nebuleuse.sarahmauriaucourt.fr/',
        // ]);

        // DB::table('projets')->insert([
        //     'titre' => "Portfolio 2022",
        //     'url' => "portfolio",
        //     'tags' => "Web",
        //     'logiciels' => "XD, Laravel, HTML, CSS, JS",
        //     "date" => '2022',
        //     "mission" => "Minimalist & Brutalisme design",
        //     "services" => "Refonte graphique",
        //     "demarche" => 'NULL',
        //     'video' => 'NULL',
        //     'decouvrir' => 'NULL',
        // ]);
    }
}