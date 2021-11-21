<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class PendingTransactionController extends Controller
{

    public function deposits($deposit_id, Request $request)
    {
        // get the user object from the users table using the $user_id variable

        $deposit = Deposit::findOrFail($deposit_id);

        // set the property date_approved to current date
        $deposit->status = 'Completed';

        // save the updated user
        $deposit->save();

        // flash a success message
        session()->flash('Transaction has been completed');

        // redirect somewhere
        return redirect()->action('AdminController@transaction');
    }

    public function withdrawals($withdrawal_id, Request $request)
    {
        // get the user object from the users table using the $user_id variable

        $withdrawal = Withdrawal::findOrFail($withdrawal_id);

        // set the property date_approved to current date
        $withdrawal->status = 'Completed';

        // save the updated user
        $withdrawal->save();

        // flash a success message
        session()->flash('Transaction has been completed');

        // redirect somewhere
        return redirect()->action('AdminController@transaction');
    }

    public function denydeposits(Request $request, $deposit_id)
    {
        // get the user object from the users table using the $user_id variable

        $deposit = Deposit::findOrFail($deposit_id);

        $deposit->status = 'Denied';

        // set the property date_approved to current date
        // $user->date_approved = null;

        // save the updated user
        $deposit->save();

        // flash a success message
        session()->flash('Transaction has been denied');

        // redirect somewhere
        return redirect()->action('AdminController@transaction');

    }

    public function denywithdrawals(Request $request, $withdrawal_id)
    {
        // get the user object from the users table using the $user_id variable

        $withdrawal = Withdrawal::findOrFail($withdrawal_id);

        $withdrawal->status = 'Denied';

        // set the property date_approved to current date
        // $user->date_approved = null;

        // save the updated user
        $withdrawal->save();

        // flash a success message
        session()->flash('Transaction has been denied');

        // redirect somewhere
        return redirect()->action('AdminController@transaction');

    }
}
