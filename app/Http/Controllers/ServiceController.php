<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function proChoose($service = null) {

      return view('health.pages.servicesChoose');
    }
}
