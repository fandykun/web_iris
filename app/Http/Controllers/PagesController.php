<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        return view('pages.home');
    }
    public function team()
    {
        $title = 'Team';
        return view('pages.team')->with('title', $title);
    }
    public function gallery()
    {
        $title = 'Gallery';
        return view('pages.gallery')->with('title', $title);
    }
    public function achievement()
    {
        $title = 'Achievement';
        return view('pages.achievement')->with('title', $title);
    }
    public function qualification()
    {
        $title = 'Qualification';
        return view('pages.qualification')->with('title', $title);
    }
    public function contact()
    {
        $title = 'Contact';
        return view('pages.contact')->with('title', $title);
    }
}
