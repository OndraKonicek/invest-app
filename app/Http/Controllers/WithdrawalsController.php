<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use Auth;
use Illuminate\Http\Request;

class WithdrawalsController extends Controller
{
    public function withdrawals()
    {
        return view('withdrawals.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['portfolio_id'] = 1;
        $data['user_id'] = Auth::user()->id;
        $data['status'] = 'Pending';
        $data['time'] = date('Y-m-d H:i:s');
        // dd($data);

        Withdrawal::create($data);

        // $deposit = new Deposit();
        // $deposit->amount = $request->input('deposit');
        // $deposit->user_id =

        // $deposit->save();

        session()->flash('success_message', 'The withdrawal request was successfully sent!');

        return redirect()->action('WithdrawalsController@index');

    }

    public function index()
    {
        return view('withdrawals.index');
    }
}
