<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Withdrawal;

class HistoryController extends Controller
{
    public function index()
    {

        $deposits = Deposit::all();
        $withdrawals = Withdrawal::all();

        return view('history.index', compact('deposits', 'withdrawals'));
    }
}
