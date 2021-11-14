<?php

namespace App\Http\Controllers;

class DepositsController extends Controller
{
    public function deposits()
    {
        return view('deposits.index');

    }
}
