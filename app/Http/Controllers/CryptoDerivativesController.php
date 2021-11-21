<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CryptoDerivativesController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return (
            view('cryptoDerivatives.index', compact('user'))
        );
    }
}


