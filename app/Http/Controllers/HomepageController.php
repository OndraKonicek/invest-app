<?php

namespace App\Http\Controllers;

class HomepageController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function notapproved()
    {
        return view('notapproved');
    }

}
