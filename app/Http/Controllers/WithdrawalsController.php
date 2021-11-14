<?php

namespace App\Http\Controllers;

class WithdrawalsController extends Controller
{
    public function withdrawals()
    {
        return view('withdrawals.index');
    }
}
