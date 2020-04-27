<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MedicallController;

class VacationController extends Controller
{
    public function index(){
        $page       = new MedicallController();
        $services   = $page->getServices();
        $offers     = $page->getOffers();
        $posts      = $page->getLastArticles();

        return view('0 vacation.index',compact('services', 'offers', 'posts'));
    }
}
