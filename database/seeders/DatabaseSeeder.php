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

        // DB::table('users')->insert([
        //     'name' => "Admin",
        //     'email' => "mauriaucourt.sarah@gmail.com",
        //     'password' => bcrypt('password'),
        // ]);

        DB::table('projets')->insert([
            'titre' => "Abécédaire",
            'slug' => "Abecedaire",
            "date" => '2018',
            'tags' => 'Audiovisuel',
            'logiciels' => 'Premiere Pro',
            "mission" => 'En équipe, nous avons dû réaliser un abécédaire sur le champ lexical de l’IUT de Lens. Pour cela, nous devions prendre l’ensemble des photographies au sein de notre IUT, créer les cartons de chaque lettre et concevoir une bande son. En s’inspirant de Jean-Luc Godard, nous avons cherché à ressortir les lettres des photographies.',
            "expertises" => 'Montage',
            "demarche" => NULL,
            'video_url' => "https://www.youtube.com/embed/2YlDveDyd4g",
            'decouvrir' => NULL,
        ]);

        DB::table('projets')->insert([
            'titre' => "Chella Man",
            'slug' => "Chella-Man",
            'nbr_image' => "4",
            "date" => '2018',
            'tags' => 'Print',
            'logiciels' => 'Photoshop',
            "mission" => 'Lors d’un cours d’esthétisme, j’ai dû réaliser la première et quatrième de couverture d’un livre monographique imaginaire d’un artiste. J’ai choisi Chella Man qui est une personnalité que j’aime beaucoup, car il est un symbole de bienveillance, d’ouverture d’esprit et de pouvoir. Il se caractérise en tant qu’artiste sourd, transgenre et juif pour faire passer des messages d’acceptation de soi et de l’autre.',
            "expertises" => 'Couverture sensible',
            "demarche" => NULL,
            'video_url' => NULL,
            'decouvrir' => NULL,
        ]);
        
        DB::table('projets')->insert([
            'titre' => "Mouud",
            'slug' => "Mouud",
            "date" => '2020',
            'tags' => 'Digital',
            'logiciels' => 'Laravel, HTML, CSS, JS, Bootstrap',
            "mission" => 'Dans le cadre de notre cours de développement web, nous devions réaliser une plateforme de distribution musicale. Les fonctionnalités attendues : page utilisateur, suivre d’autres utilisateurs, rechercher des utilisateurs et des chansons, uploader et aimer des chansons, créer des playlists.',
            "expertises" => 'Site web, UI & UX',
            "demarche" => 'Au travers de ce projet, je voulais créer un site reposant où on peut exprimer ses émotions par la musique. Pour cela, j’ai choisi des couleurs chaleureuses créant une ambiance tamisée et les animations permettent de créer de la fluidité dans le parcours du site.',
            'video_url' => 'https://player.vimeo.com/video/657738305?h=73c5481bed',
            'decouvrir' => 'https://mouud.sarahmauriaucourt.fr/',
        ]);

        DB::table('projets')->insert([
            'titre' => "Lockbook",
            'slug' => "Lockbook",
            "date" => '2020',
            'tags' => 'Print',
            'logiciels' => 'Indesign, Lightroom,Lumix GX9',
            "mission" => "Réalisation d'un journal de bord durant le confinement 2020.",
            "expertises" => 'Photographie',
            "demarche" => 'Je me suis mise au défi de prendre l’ensemble des photographies au sein de ma chambre. En tant que lieu statique, chaque jour, je cherchais un nouveau point de vue et les éventuels changements (luminosité, contraste, …) qu’il pouvait avoir pour mes prises photographiques.',
            'video_url' => NULL,
            'decouvrir' => 'https://www.behance.net/gallery/133392623/Lockbook',
        ]);

        // DB::table('projets')->insert([
        //     'titre' => "Brique à Braque",
        //     'slug' => "brique_a_braque",
        //     'tags' => 'Print',
        //     'logiciels' => 'POV-Ray, Blender',
        //     "date" => '2021',
        //     "mission" => '',
        //     "expertises" => '',
        //     "demarche" => '',
        //     'video_url' => NULL,
        //     'decouvrir' => NULL,
        // ]);

        DB::table('projets')->insert([
            'titre' => "now",
            'slug' => "now",
            "date" => '2021',
            'tags' => 'Audiovisuel',
            'logiciels' => 'Premier Pro, After Effects, Protools, Photoshop',
            'expertises' => 'Direction Artistique | Prise de vue & de son | Montage | VFX',
            "mission" => 'Dans le cadre de ma troisième année de Licence,nous avons dû réaliser en groupe un court-métrage. Celui-ci devant durer 5 minutes et abordant le thème « 2050 ».',
            "demarche" => 'En 2050, la France est tombée sous une dictature après les nombreux problèmes économiques et environnementaux que le monde a dû traverser. Anar, un jeune programmeur, va mettre en place une stratégie pour protester contre le régime actuel.',
            'video_url' => 'https://player.vimeo.com/video/559339399',
            'decouvrir' => 'https://www.behance.net/gallery/134235161/now-Court-mtrage',
        ]);

        DB::table('projets')->insert([
            'titre' => "Grilles",
            'slug' => "Grilles",
            'nbr_image' => "4",
            'tags' => 'Print',
            'logiciels' => 'Illustrator',
            "date" => '2021',
            "mission" => "Défi de 2 heures pour réaliser 3 affiches à partir d'une grille.",
            "expertises" => 'Design Graphique',
            "demarche" => "Pour ce travail de composition sur une grille, 3 affiches ont été faites dont 1 figurative et 2 abstraites. Celle figurative utilise la grille pour réaliser un pixel art de la chaussure que je portais. Celles abstraites utilisent des formes géométriques de manière déstructurée.",
            'video_url' => NULL,
            'decouvrir' => NULL,
        ]);

        DB::table('projets')->insert([
            'titre' => "Persona d'Ingmar Bergman",
            'slug' => "Persona",
            'tags' => 'Print',
            'logiciels' => 'Photoshop',
            "date" => '2021',
            "mission" => "Réinterprétation de l'affiche du film Persona d'Ingmar Bergman. Comme dans le film, cette affiche explore la quête d'identité.",
            "expertises" => "Affiche",
            "demarche" => "Comme dans le film d’Ingmar Bergman, cette affiche explore l’identité personnelle au travers de la dépersonnalisation, volonté de se différencier et de se ressembler. Difficilement discernable, on retrouve les deux protagonistes de l’histoire par une superposition de sept photographies. Les effets de dégradé et de négatif ajoutent un aspect fantomatique.",
            'video_url' => NULL,
            'decouvrir' => 'https://www.behance.net/gallery/129927601/Persona-by-Ingmar-Bergman-Poster',
        ]);

        DB::table('projets')->insert([
            'titre' => "Splash screen pasteque",
            'slug' => "Splash-screen-pasteque",
            'tags' => 'Digital',
            'logiciels' => 'Adobe XD, Illustrator',
            "date" => '2021',
            "mission" => "Splash Screen animé d'une interface mobile sur le thème de la pastèque.",
            "expertises" => "UI & UX",
            "demarche" => NULL,
            'video_url' => 'https://player.vimeo.com/video/654248995',
            'decouvrir' => NULL,
        ]);

        DB::table('projets')->insert([
            'titre' => "Audio Player",
            'slug' => "Audio-player",
            "date" => '2021',
            'tags' => 'Digital',
            'logiciels' => 'Adobe XD',
            "expertises" => "UI & UX",
            "mission" => "Dans le cadre d'un cours d'UI/UX design, nous devions réaliser un design original de player audio avec la transition animée entre deux musiques.",
            "demarche" => "Repenser l'interface d'un player de musique, en lui donnant un style cybernétique par l'utilisation du glassmorphism.",
            'video_url' => 'https://player.vimeo.com/video/654249675',
            'decouvrir' => NULL,
        ]);

        DB::table('projets')->insert([
            'titre' => "Recette de cuisine asiatique",
            'slug' => "Recette-de-cuisine-asiatique",
            'tags' => 'Digital',
            'logiciels' => 'Adobe XD',
            "date" => '2021',
            "mission" => "Interface mobile d'une page de recette d'une application mobile.",
            "expertises" => "UI & UX",
            "demarche" => NULL,
            'video_url' => 'https://player.vimeo.com/video/657412628',
            'decouvrir' => NULL,
        ]);

        DB::table('projets')->insert([
            'titre' => "Carte interactive",
            'slug' => "Carte-interactive",
            'tags' => 'Digital',
            'logiciels' => 'Adobe XD',
            "date" => '2021',
            "mission" => "Découverte des espèces marines à travers une carte interactive.",
            "expertises" => "UI & UX",
            "demarche" => NULL,
            'video_url' => 'https://player.vimeo.com/video/661780846',
            'decouvrir' => NULL,
        ]);

        DB::table('projets')->insert([
            'titre' => "UP'event",
            'slug' => "Up-event",
            'tags' => 'Digital',
            'logiciels' => 'Figma, Indesign, Illustrator',
            "date" => '2021',
            "mission" => "Développer un projet autour des thèmes relations humaines, réseaux et expertises ainsi que numérisation du monde.",
            "expertises" => "Data, Prototypage, Application mobile, UI & UX",
            "demarche" => "Up'event est une application mobile dédiée aux événements et sorties étudiantes dans la ville de Valenciennes. Sous forme ludique, l'application invite les étudiants à proposer des rencontres et événements ou à participer à ceux de nos partenaires. Sous forme de calendrier et de carte, l'application invite ses utilisateurs à se rencontrer, à partager leurs intérêts en dehors de leurs études et à marquer des points pour leur maison.",
            'video_url' => 'https://player.vimeo.com/video/662958130',
            'decouvrir' => 'https://www.behance.net/gallery/134945973/UPevent',
        ]);
        

         DB::table('projets')->insert([
            'titre' => "G20 | Rome",
            'slug' => "Climat",
            'tags' => 'Print',
            'logiciels' => ' Photoshop',
            "date" => '2021',
            "mission" => "Réappropriation du style graphique d'Henryk Tomaszewski pour créer une affiche sur le thème du climat.",
            "expertises" => "Poster",
            "demarche" => 'Réunis à Rome, les dirigeants du G20, on prit la pose devant la Fontaine de Trévi ou traditionnellement, on y jette des pièces pour réaliser un vœu. Cette photographie laisse imaginer qu’ils s’en remettent à la chance pour sauver la planète.',
            'video_url' => NULL,
            'decouvrir' => NULL,
        ]);

        DB::table('projets')->insert([
            'titre' => "Affiches CCI Widmer",
            'slug' => "Affiche-CCI-Widmer",
            'nbr_image' => "2",
            'tags' => 'Print',
            'logiciels' => 'Illustrator',
            "date" => '2021',
            "mission" => "Dans la lignée de Widmer, ces affiches fictives d’une exposition 2022 au CCI mettent en avant des objets du quotidien.",
            "expertises" => "Poster",
            "demarche" => NULL,
            'video_url' => NULL,
            'decouvrir' => NULL,
        ]);
       
       DB::table('projets')->insert([
            'titre' => "Serres Royales de Laeken",
            'slug' => "Serres-Royales-de-Laeken",
            'tags' => 'Print | Digital',
            'logiciels' => 'Adobe XD, Illustrator, Indesign, Photoshop',
            "date" => '2021',
            "mission" => "Élaboration de la charte graphique de Laeken, en passant de la création de son logotype à sa déclinaison sur les supports de communication print et digitaux.",
            "expertises" => "Identité de marque",
            "demarche" => NULL,
            'video_url' => 'https://player.vimeo.com/video/662957351?h=529ce46bb9',
            'decouvrir' => 'https://www.behance.net/gallery/134289793/Serres-Royales-de-Laeken-Charte-Graphique',
        ]);

        // DB::table('projets')->insert([
        //     'titre' => "La Nébuleuse",
        //     'slug' => "La-nebuleuse",
        //     "date" => '2021',
        //     'tags' => "Digital",
        //     'logiciels' => "Adobe XD, HTML, CSS, JS",
        //     "expertises" => "Développement Web, UI & UX",
        //     "mission" => "Webdesign et développement front-end d'un site web pour le théâtre fictif 'La Nébuleuse'.",
        //     "demarche" => NULL,
        //     'video_url' => NULL,
        //     'decouvrir' => 'https://nebuleuse.sarahmauriaucourt.fr/',
        // ]);

        DB::table('projets')->insert([
            'titre' => "PRISM",
            'slug' => "PRISM",
            "date" => '2022',
            'tags' => "Digital",
            'logiciels' => "Adobe XD, Illustrator, Indesign",
            "expertises" => "Développement Web, UI & UX",
            "mission" => "L’application mobile PRISM propose de découvrir le parcours de l’artiste en s’immergeant dans la peau de celui-ci dans un processus complet de production-diffusion-exposition. L’utilisateur est invité à découvrir son contenu artistique partagé sur la plateforme, à l’échelle de l’artiste exposée au sein du musée. ",
            "demarche" => NULL,
            'video_url' => "https://player.vimeo.com/video/745851852",
            'decouvrir' => NULL,
        ]);

        DB::table('projets')->insert([
            'titre' => "Mergazine",
            'slug' => "Mergazine",
            "date" => '2022',
            'tags' => "Print | Audiovisuel",
            'logiciels' => "After Effects | Photoshop | Illustrator |Indesign | Spline 3D",
            "expertises" => "Motion Design",
            "mission" => "Par un teaser, promouvoir le Fanzine « Mergazine » qui met en avant la merguez. ",
            "demarche" => "Pour l'élaboration de ce teaser, je me suis challengé graphiquement en utilisant de nouveaux outils et procédés graphiques. Par cette première expérience sur After Effects, j'ai pu maîtriser plusieurs techniques qu'offre le logiciel.",
            'video_url' => "https://www.youtube.com/embed/Kef9RlnXZjU",
            'decouvrir' => NULL,
        ]);

        // DB::table('projets')->insert([
        //     'titre' => "Portfolio-2023",
        //     'slug' => Portfolio-2023,
        //     "date" => 2022,
        //     'tags' => NULL,
        //     'logiciels' => "Adobe XD | HTML | CSS | JS | Laravel",
        //     "expertises" => "Maquettes | Prototype | Développement Web",
        //     "mission" => NULL,
        //     "demarche" => NULL,
        //     'video_url' => NULL,
        //     'decouvrir' => NULL,
        // ]);

        // DB::table('projets')->insert([
        //     'titre' => "",
        //     'slug' => NULL,
        //     "date" => NULL,
        //     'tags' => NULL,
        //     'logiciels' => NULL,
        //     "expertises" => NULL,
        //     "mission" => NULL,
        //     "demarche" => NULL,
        //     'video_url' => NULL,
        //     'decouvrir' => NULL,
        // ]);
    }
}
