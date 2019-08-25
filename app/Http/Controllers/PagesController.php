<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHomePage()
    {
        return view('pages.home');
    }

    public function getTeamPage()
    {
        return view('pages.team');
    }

    public function getGalleryPage()
    {
        return view('pages.gallery');
    }

    public function getAchievementPage()
    {
        return view('pages.achievement');
    }

    public function getContactPage()
    {
        return view('pages.contact');
    }

    public function getRobocup2019Page()
    {
        return view('pages.qualification.robocup-2019');
    }
}
