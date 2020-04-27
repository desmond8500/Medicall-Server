<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicallController extends Controller
{
    private static $menus;

    public function __construct(){

    }

    public function getNavigationMenu(){
        return json_decode('[
            { "name": "Acceuil", "route": "vacation" },
            { "name": "A propops", "route": "apropos" },
            { "name": "Services", "route": "services" },
            { "name": "Blog",    "route": "blog" },
            { "name": "Contact", "route": "contact" }
        ]');
    }

    public function getServices(){
        return json_decode('[
            {
                "title": "Soins à domicile",
                "image": "src/images/wallpaper/infirmière.jpg",
                "description": "Nous mettons à votre disposition un personnel medicall proche de chez vous afin de vous apporter des soins de qualité.",
                "bouton": "Plus d\'informations",
                "route": "vacation"
            },
            {
                "title": "Medicall Mobile",
                "image": "src/images/wallpaper/meghan.jpg",
                "description": "Avec notre application mobile vous pouvez gérer vos rendez-vous votre suivi médical. Elle est disponible sur android",
                "bouton": "Plus d\'informations",
                "route": "vacation"
            },
            {
                "title": "Prenez soin de vos proches",
                "image": "src/images/wallpaper/soins.jpg",
                "description": "Nous mettons à votre disposition un personnel medicall proche de chez vous afin de vous apporter des soins de qualité.",
                "bouton": "Plus d\'informations",
                "route": "vacation"
            }
        ]');
    }

    public function getOffers()
    {
        return json_decode('[
            {
                "title": "Surveillance médicale",
                "icon": "flaticon-first",
                "description": "."
            },
            {
                "title": "Injections",
                "icon": "flaticon-first",
                "description": "Piqures et perfusions"
            },
            {
                "title": "Pansements",
                "icon": "flaticon-first",
                "description": "La réalisation et le renouvellement des pansements et bandages non médicamenteux"
            },
            {
                "title": "Assistance aux soins d\'hygiène ",
                "icon": "flaticon-first",
                "description": "Les soins d’hygiène et de confort du patient (toilette, installation, aide au levé…)"
            },
            {
                "title": "soins paramédicaux",
                "icon": "flaticon-first",
                "description": "Kinésithérapie, pédicures"
            },
            {
                "title": "Surveillance médicale",
                "icon": "flaticon-first",
                "description": "le recueil de données participant à la surveillance de son état de santé (mensurations, température, pouls, tension, rythme respiratoire, volume des urines, évaluation de la douleur…),"
            },
            {
                "title": "Dossier medicale en ligne",
                "icon": "flaticon-first",
                "description": "Dossier médicall mi  à jour régulièrement "
            }

        ]');
    }

    public function getLastArticles()
    {
        $posts = \Canvas\Post::published()->orderByDesc('published_at')->take(3)->get();
        return $posts;
    }
}
