<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class PendingTransactionController extends Controller
{

    public function complete($id, Request $request)
    {
        // get the user object from the users table using the $user_id variable

        $deposit = Deposit::findOrFail($id);

        $withdrawal = Withdrawal::findOrFail($id);

        // set the property date_approved to current date
        $deposit->status = 'Completed';
        $withdrawal->status = 'Completed';

        // save the updated user
        $deposit->save();
        $withdrawal->save();

        // flash a success message
        session()->flash('Transaction has been completed');

        // redirect somewhere
        return redirect()->action('AdminController@transaction');
    }

    public function deny(Request $request, $id)
    {
        // get the user object from the users table using the $user_id variable

        $deposit = Deposit::findOrFail($id);
        $withdrawal = Deposit::findOrFail($id);

        // set the property date_approved to current date
        // $user->date_approved = null;

        // save the updated user
        $deposit->delete();
        $withdrawal->delete();

        // flash a success message
        session()->flash('User has been denied');

        // redirect somewhere
        return redirect()->action('AdminController@transaction');

    }
}
