<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\BtcRate;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // $bitcoin =  BtcRate::getBtcRate();

        // $date = Carbon::now()->startOfDay();

        // $deposits = Deposit::where('user_id', Auth::user()->id)->whereDate('time', '<=', $date)->where('status', 'Completed')->get()->sum('amount');
        // $withdrawals = Withdrawal::where('user_id', Auth::user()->id)->whereDate('time', '<=', $date)->where('status', 'Completed')->get()->sum('amount');

        

        // $bitcoin_price = $bitcoin[$date->format("Y-m-d")];

        // $account = $deposits *  ($bitcoin_price / 1000);

        // $portfolioValue = $account  - $withdrawals;



        //dnesni datum
        $dateToday = Carbon::now()->startOfDay();
        //dnesni kurz
        $rateToday = BtcRate::getBtcRate()[$dateToday->format("Y-m-d")];

        
        //vytahnu si vsechny vklady
        $deposits = Deposit::where('user_id', Auth::user()->id)->where('status', 'Completed')->get();
        //vytahnu si vsechny vybery
        $withdrawals = Withdrawal::where('user_id', Auth::user()->id)->where('status', 'Completed')->get();
        
        
        //nachystam si promennou pro vypocet celkove hodnoty portfolia
        $portfolioValue = 0;
        //nachystam si promennou pro soucet depositu
        $totalDeposit = 0;
        //nachystam si promennou pro soucet withdrawalu
        $totalWithdraw = 0;
        
        foreach($deposits as $deposit){
            //kolik uzivatel vlozil
            $depositValue = $deposit->amount;

            //navysim soucet depositu o vlozenou castku
            $totalDeposit+=$depositValue;

            //jaky byl pri tomto vkladu kurz
            $depositRate = BtcRate::getBtcRate()[Carbon::parse($deposit->time)->format("Y-m-d")];

            //vypocitam pomer vkladoveho a soucasneho kurzu
            $rateRatio = $rateToday / $depositRate;

            //pomerem vynasobim puvodne vlozenou castku
            $currentValue = $depositValue * $rateRatio;

            //zpomerovanou castku prictu na hromadu
            $portfolioValue += $currentValue;
        }

        foreach($withdrawals as $withdrawal){
            //kolik uzivatel vybral
            $withdrawalValue = $withdrawal->amount;

            //navysim soucet withdrawalu o vybranou castku
            $totalWithdraw+=$withdrawalValue;

            //jaky byl pri tomto vyberu kurz
            $withdrawalRate = BtcRate::getBtcRate()[Carbon::parse($withdrawal->time)->format("Y-m-d")];

            //vypocitam pomer vyberoveho a soucasneho kurzu
            $rateRatio = $rateToday / $withdrawalRate;

            //pomerem vynasobim puvodne vybranou castku
            $currentValue = $withdrawalValue * $rateRatio;

            //zpomerovanou castku odectu z hromady
            $portfolioValue -= $currentValue;
        }            

        return (
            view('dashboard.index', compact('user','portfolioValue','totalDeposit','totalWithdraw'))
        );
    }
}
