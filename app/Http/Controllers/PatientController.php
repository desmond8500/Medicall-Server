<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index() {
      // Demandes
      $demandes = json_decode('[
        {
          "date": "30 Aout 2020",
          "duree": "depuis 2 jours",
          "titre": "Nouvelle demande",
          "description": "Nouveau message"
        },
        {
          "date": "30 Aout 2020",
          "duree": "depuis 2 jours",
          "titre": "Nouvelle demande",
          "description": "Nouveau message"
        }
        ]');

      // Notifications
      $notifications = json_decode('[
        {
          "icon": "list",
          "titre": "30 Aout 2020",
          "duree": "depuis 2 jours",
          "description": "Nouveau message"
        },
        {
          "icon": "comments",
          "titre": "30 Aout 2020",
          "duree": "depuis 2 jours",
          "description": "Nouveau message"
        },
        {
          "icon": "calendar",
          "titre": "30 Aout 2020",
          "duree": "depuis 2 jours",
          "description": "Nouveau message"
        }
        ]');

      return view('health.patients.index', compact('demandes','notifications'));
    }
    public function rv() {

      return view('health.patients.rv');
    }
    public function message() {

      return view('health.patients.message');
    }
    public function bilan() {

      return view('health.patients.bilan');
    }
    public function profile() {

      return view('health.patients.profile');
    }
    public function document() {

      return view('health.patients.document');
    }
}
