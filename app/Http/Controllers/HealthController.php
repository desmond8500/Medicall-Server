<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function index()
    {
        $page = json_decode('{
            "logo": "health/images/Logo/Logo.png"
        }');

        return view('health.landing.pages.index',compact('page'));
    }


}
