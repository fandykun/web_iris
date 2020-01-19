<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Member;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHomePage()
    {
        $galleries = Gallery::orderBy('updated_at', 'desc')->take(5)->get();
        return view('pages.home', compact('galleries'));
    }

    public function getTeamPage()
    {
        $members = Member::orderBy('description', 'desc')->get();
        return view('pages.team', compact('members'));
    }

    public function getGalleryPage()
    {
        $galleries = Gallery::all();
        return view('pages.gallery', compact('galleries'));
    }

    public function getAchievementPage()
    {
        return view('pages.achievement');
    }

    public function getOprecPage()
    {
        return view('pages.oprec');
    }

    public function getContactPage()
    {
        return view('pages.contact');
    }

    public function getRobocup2019Page()
    {
        return view('pages.qualification.robocup-2019');
    }

    public function getRobocup2020Page()
    {
        return view('pages.qualification.robocup-2020');
    }
}
