<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function team()
    {
        return view('pages.team');
    }
    public function gallery()
    {
        return view('pages.gallery');
    }
    public function achievement()
    {
        return view('pages.achievement');
    }
    public function qualification()
    {
        return view('pages.qualification');
    }
    public function about()
    {
        return view('pages.about');
    }
}
