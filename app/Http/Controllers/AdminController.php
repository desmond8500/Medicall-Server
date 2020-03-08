<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $project = json_decode(file_get_contents('health/config.json'));
        return view('health.admin.index',compact('projet'));
    }

}
