<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MedicallController;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class VacationController extends Controller
{
    public function index(){
        $page       = new MedicallController();
        $services   = $page->getServices();
        $offers     = $page->getOffers();
        $posts      = $page->getLastArticles();

        return view('0 vacation.index',compact('services', 'offers', 'posts'));
    }
    public function blog($topic=null){
        $page       = new MedicallController();
        $services   = $page->getServices();
        $offers     = $page->getOffers();

        // if ($topic) {
        //     $posts      = \Canvas\Post::with('topic');
        //     $posts      =  $posts->where('topic',$topic)->paginate(10);
        //     $topics     = \Canvas\Topic::orderBy('name')->get();
        // }else{
            $posts      = \Canvas\Post::paginate(10);
            $topics     = \Canvas\Topic::orderBy('name')->get();
        // }

        return view('0 vacation.pages.blog',compact('services', 'offers', 'posts', 'topics'));
    }
    public function blogPage($id){

        $post     = \Canvas\Post::find($id);
        $topics     = \Canvas\Topic::orderBy('name')->get();

        return view('0 vacation.pages.blogpage',compact('post', 'topics'));
    }

    public function contact(){
        $page       = new MedicallController();
        $services   = $page->getServices();
        $offers     = $page->getOffers();
        $posts      = $page->getLastArticles();

        return view('0 vacation.pages.contact',compact('services', 'offers', 'posts'));
    }

    public function apropos(){
        $page       = new MedicallController();
        $services   = $page->getServices();
        $offers     = $page->getOffers();
        $posts      = $page->getLastArticles();

        return view('0 vacation.pages.apropos',compact('services', 'offers', 'posts'));
    }

    public function services(){
        $page       = new MedicallController();
        $services   = $page->getServices();
        $offers     = $page->getOffers();
        $posts      = $page->getLastArticles();

        return view('0 vacation.pages.services',compact('services', 'offers', 'posts'));
    }

    public function login()
    {
        return view('0 vacation.pages.login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('vacation');
    }

    public function register($role = 'user')
    {
        return view('0 vacation.pages.register', compact('role'));
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

        return redirect()->route('vacation');
    }
}
