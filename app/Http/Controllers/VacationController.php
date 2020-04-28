<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MedicallController;
use Illuminate\Support\Facades\Auth;

class VacationController extends Controller
{
    public function index(){
        $page       = new MedicallController();
        $services   = $page->getServices();
        $offers     = $page->getOffers();
        $posts      = $page->getLastArticles();

        return view('0 vacation.index',compact('services', 'offers', 'posts'));
    }
    public function blog(){
        $page       = new MedicallController();
        $services   = $page->getServices();
        $offers     = $page->getOffers();
        // $posts      = \Canvas\Post::published()->orderByDesc('published_at')->paginate(2)->get();
        $posts      = \Canvas\Post::paginate(10);
        $topics     = \Canvas\Topic::orderBy('name')->get();

        return view('0 vacation.pages.blog',compact('services', 'offers', 'posts', 'topics'));
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
}
