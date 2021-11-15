<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::whereNull('date_approved')->get();
        return view('admin.index', compact('users'));
    }
}
