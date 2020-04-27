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


        return view('health.landing.pages.index',compact('user'));
    }
    public function login()
    {
        return view('health.landing.pages.login');
    }

    public function loginValidate(Request $request)
    {
        $user = new User();
        $user->tel = '0000';
        $user->password = Hash::make('passer');

        $users = Auth::login($user);

        return view('health.landing.pages.login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('health');
    }
    public function register($role = 'user')
    {
        return view('health.landing.pages.register',compact('role'));
    }
    public function registering(Request $request)
    {
        $user = new User();

        $user->prenom = $request->prenom;
        $user->nom = $request->nom;
        $user->tel = $request->tel;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('health');
    }
    public function userlist()
    {
        $users = User::all();
        return view('health.landing.pages.userlist',compact('users'));
    }
    public function adminpage()
    {
        $users = User::all();

        return view('health.landing.pages.userlist',compact('users'));
    }


}
