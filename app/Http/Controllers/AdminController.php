<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\User;
use App\Models\Withdrawal;

class AdminController extends Controller
{
    public function index()
    {

        $users = User::with("roles")->whereHas("roles", function ($q) {
            $q->whereNotIn("name", ["admin"]);
        })->get();

        return view('admin.index', compact('users'));
    }

    public function transaction()
    { //Fetching all unapproved post and passing it into view

        $deposits = Deposit::where("status", "Pending")->get();
        $withdrawals = Withdrawal::where("status", "Pending")->get();

        return view('admin.transactions', compact('deposits', 'withdrawals'));
    }
}
