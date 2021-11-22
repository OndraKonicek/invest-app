<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Auth;
use Illuminate\Http\Request;

class DepositsController extends Controller
{
    public function deposits()
    {

        $deposit = new Deposit();

        return view('deposits.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['portfolio_id'] = 1;
        $data['user_id'] = Auth::user()->id;
        $data['status'] = 'Pending';
        $data['time'] = date('Y-m-d H:i:s');

        Deposit::create($data);

        session()->flash('success_message', 'The deposit request was successfully sent!');

        return redirect()->action('DepositsController@index');

    }

    public function index()
    {
        return view('deposits.index');
    }
}
