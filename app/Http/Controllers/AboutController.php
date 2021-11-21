<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index() {
        $user = auth()->user();

        return (
            view('about.index', compact('user'))
        );
    }
}
