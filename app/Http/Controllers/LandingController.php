<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller {
    // Nom du projet

    public function index(){
      $project = json_decode(file_get_contents('health/config.json'));
      return view('health.index', compact('project'));
    }
    public function about(){
      return view('health.index');
    }
    public function services(){
      return view('health.index');
    }
    public function news(){
      return view('health.index');
    }
    public function contact(){
      return view('health.index');
    }
}
