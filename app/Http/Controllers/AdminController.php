<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        // $users = User::whereNull('date_approved')->get();

        // $users = User::all();

        $users = User::with("roles")->whereHas("roles", function ($q) {
            $q->whereNotIn("name", ["admin"]);
        })->get();

        return view('admin.index', compact('users'));

    }
}
