<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HealthController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $page = json_decode('{
            "logo": "health/images/Logo/Logo.png"
        }');

        return view('health.landing.pages.index',compact('page'));
    }
    public function login()
    {
        $page = json_decode('{
            "logo": "health/images/Logo/Logo.png"
        }');

        return view('health.landing.pages.login',compact('page'));
    }
    public function register()
    {
        $page = json_decode('{
            "logo": "health/images/Logo/Logo.png"
        }');

        return view('health.landing.pages.register',compact('page'));
    }
    public function registering(Request $request)
    {
        $page = json_decode('{
            "logo": "health/images/Logo/Logo.png"
        }');

        $user = new User();

        $user->prenom = $request->prenom;
        $user->nom = $request->nom;
        $user->tel = $request->tel;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'user';
        $user->save();

        //dump($user);

        return redirect()->route('health');
    }
    public function userlist()
    {
        $page = json_decode('{
            "logo": "health/images/Logo/Logo.png"
        }');

        $users = User::all();

        return view('health.landing.pages.userlist',compact('users','page'));
    }


}
