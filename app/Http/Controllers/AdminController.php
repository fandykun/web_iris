<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getDashboardPage()
    {
        return view('admin.pages.dashboard');
    }
}
