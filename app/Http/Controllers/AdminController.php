<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Commentaire;
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
            'route' => 'userlist'
        );
        $rv = array(
            'titre' =>'Rendez-Vous',
            'nombre' => User::all()->count(),
            'description' => "Nombre de rendez-vous",
            'route' => 'userlist'
        );
        $resume = array($users, $commentaires, $rv);
        return view('health.landing.admin.index',compact('resume','user'));
    }

}
