<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Commentaire;
use App\Models\Rendezvous;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index1()
    {
        $project = json_decode(file_get_contents('health/config.json'));
        return view('health.landing.admin.index',compact('project'));
    }

    public function index()
    {
        $user = Auth::user();
        $users = array(
            'titre' =>'Utilisateurs',
            'nombre' => User::all()->count(),
            'description' => "Nombre d'utilisateurs",
            'route' => 'userlist'
        );
        $commentaires = array(
            'titre' =>'Commentaires',
            'nombre' => Commentaire::all()->count(),
            'description' => "Nombre de commentaires",
            'route' => 'commentaires'
        );
        $rv = array(
            'titre' =>'Rendez-Vous',
            'nombre' => Rendezvous::all()->count(),
            'description' => "Nombre de rendez-vous",
            'route' => 'rendezvous'
        );
        $resume = array($users, $commentaires, $rv);
        return view('health.landing.admin.index',compact('resume','user'));
    }

    public function adminlist($categorie = null)
    {
        $user = Auth::user();
        switch ($categorie) {
            case 'userlist':
                $data = User::all();
            break;
            case 'commentaires':
                $data = Commentaire::all();
            break;
            case 'rendezvous':
                $data = Rendezvous::all();
            break;

            default:
                # code...
            break;
        }
        return view("health.landing.pages.$categorie",compact('data','user'));

    }

}
