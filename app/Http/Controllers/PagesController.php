<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHomePage()
    {
        return view('pages.home');
    }

    public function getTeamPage()
    {
        $members = Member::orderBy('description', 'desc')->get();
        return view('pages.team', compact('members'));
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
