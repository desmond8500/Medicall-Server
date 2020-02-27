<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function index()
    {
        $project = json_decode(file_get_contents('health/config.json'));

        $tabMenu = json_decode('
        [
          { "titre": "Vous avez besoin d\'assistance ?", "description": "Prenez-rendez vous avec notre équipe de professionels" },
          { "titre": "Intégrez notre équipe", "description": "Vous êtes un professionel de la santé ? Vous pouvez nous rejoindre" },
          { "titre": "Notre application Mobile", "description": "Télécharger notre application mobile pour bénéficier de services supplémentaires" }
        ]
      ');
        // { "titre": "Section 4", "description": "Description" }

        $tabs = [$tabMenu];
        return view('health.pages.acceuil', compact('project', 'tabs'));
    }

    public static function menu()
    {
        $menus[] = array( "name" => "Acceuil",      "route" => "landing"    );
        $menus[] = array( "name" => "Services",     "route" => "services"   );
        $menus[] = array( "name" => "Informations", "route" => "news"       );
        $menus[] = array( "name" => "A propos",     "route" => "about"      );
        $menus[] = array( "name" => "Contact",      "route" => "contact"    );

        return $menus;
    }
}
