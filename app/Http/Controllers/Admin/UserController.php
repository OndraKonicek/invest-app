<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function approve(Request $request, $user_id)
    {
        // get the user object from the users table using the $user_id variable

        $user = User::findOrFail($user_id);

        // set the property date_approved to current date
        $user->date_approved = date('Y-m-d H:i:s');

        // save the updated user
        $user->save();

        // flash a success message
        session()->flash('User has been approved');

        // redirect somewhere
        return redirect()->action('AdminController@index');
    }

    public function deny(Request $request, $user_id)
    {
        // get the user object from the users table using the $user_id variable

        $user = User::findOrFail($user_id);

        // set the property date_approved to current date
        // $user->date_approved = null;

        // save the updated user
        $user->delete();

        // flash a success message
        session()->flash('User has been denied');

        // redirect somewhere
        return redirect()->action('AdminController@index');
    }

}
