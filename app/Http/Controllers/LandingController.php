<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller {

    public function index(){
      $project = json_decode(file_get_contents('health/config.json'));
      return view('health.pages.acceuil', compact('project'));
    }
    public function about(){
      $project = json_decode(file_get_contents('health/config.json'));
      $team = json_decode(file_get_contents('health/team.json'));
      return view('health.pages.about', compact('project','team'));
    }
    public function services(){
      $project = json_decode(file_get_contents('health/config.json'));
      return view('health.pages.services', compact('project'));
    }
    public function news(){
      $project = json_decode(file_get_contents('health/config.json'));
      return view('health.pages.news', compact('project'));
    }
    public function contact(){
      $project = json_decode(file_get_contents('health/config.json'));
      return view('health.pages.contact', compact('project'));
    }
    public function register(){
      $project = json_decode(file_get_contents('health/config.json'));
      return view('health.pages.register', compact('project'));
    }
    public function login(){
      $project = json_decode(file_get_contents('health/config.json'));
      return view('health.pages.login', compact('project'));
    }
}
