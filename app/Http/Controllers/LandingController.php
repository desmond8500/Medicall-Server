<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller {
    // Nom du projet

    public function index(){
      $project = json_decode(file_get_contents('health/config.json'));
      return view('health.pages.acceuil', compact('project'));
    }
    public function about(){
      return view('health.pages.about');
    }
    public function services(){
      return view('health.pages.services');
    }
    public function news(){
      return view('health.pages.news');
    }
    public function contact(){
      return view('health.pages.contact');
    }
}
