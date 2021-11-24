<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\Auth;
use App\BtcRate;
use Carbon\Carbon;

class ChartDataController extends Controller
{

    public function oldAccountData(){
        $date = Carbon::parse('2020-01-01');

        $bitcoin = BtcRate::getBtcRate();
        
        $accountBalances = [];
    
        $todayDate = Carbon::now()->startOfDay();
        while($date <= $todayDate){
            $deposits = Deposit::where('user_id', Auth::user()->id)->whereDate('time', '<=', $date)->where('status', 'Completed')->get()->sum('amount');
            $withdrawals = Withdrawal::where('user_id', Auth::user()->id)->whereDate('time', '<=', $date)->where('status', 'Completed')->get()->sum('amount');

            

            $bitcoin_price = $bitcoin[$date->format("Y-m-d")];

            $account = $deposits *  ($bitcoin_price / 1000);

            $accountBalances[] =  [
                "time" => $date->format("Y-m-d"),
                "value_change" => $account  - $withdrawals,
            ];
            
            $date->addDay()->startOfDay();
        }
    }

    public function accountData(){
        
        //datum od - 1.1.2020
        $date = Carbon::parse('2020-01-01');
        //dnesni datum
        $dateToday = Carbon::now()->startOfDay();

        //vytahnu si vsechny vklady - jeste pred cyklem (v cyklu se meni jen kurz)
        $deposits = Deposit::where('user_id', Auth::user()->id)->where('status', 'Completed')->get();
        //vytahnu si vsechny vybery - jeste pred cyklem (v cyklu se meni jen kurz)
        $withdrawals = Withdrawal::where('user_id', Auth::user()->id)->where('status', 'Completed')->get();

        //pripravim si vysledne pole pro vykresleni do grafu
        $accountBalances =  [];

        while($date <= $dateToday){
            //nachystam si promennou pro vypocet celkove hodnoty portfolia v danem dni (hodnota je kazdy den jina, protoze je kazdy den jiny kurz)
            $datePortfolioValue = 0;

            //vyfiltruju si pouze vklady, ktere probehly v predchozich dnech, tzn pred prave iterovanym dnem
            $filteredDeposits = array_filter($deposits->toArray(),function($deposit) use ($date){
                return Carbon::parse($deposit["time"])->startOfDay() <= $date;
            });


            foreach($filteredDeposits as $deposit){
                //kolik uzivatel vlozil
                $depositValue = $deposit["amount"];          

                //jaky byl pri tomto vkladu kurz
                $depositRate = BtcRate::getBtcRate()[Carbon::parse($deposit["time"])->format("Y-m-d")];

                //vypocitam pomer vkladoveho kurzu a kurzu v prave iterovanem dni
                $rateRatio = BtcRate::getBtcRate()[$date->format("Y-m-d")] / $depositRate;

                //pomerem vynasobim puvodne vlozenou castku
                $dateDepositValue = $depositValue * $rateRatio;

                //zpomerovanou castku prictu na hromadu
                $datePortfolioValue += $dateDepositValue;
            }

            //vyfiltruju si pouze vybery, ktere probehly v predchozich dnech, tzn pred prave iterovanym dnem
            $filteredWithdrawals = array_filter($withdrawals->toArray(),function($withdrawal) use ($date){
                return Carbon::parse($withdrawal["time"])->startOfDay() <= $date;
            });

            foreach($filteredWithdrawals as $withdrawal){
                //kolik uzivatel vlozil
                $withdrawalValue = $withdrawal["amount"];

                //jaky byl pri tomto vkladu kurz
                $withdrawalRate = BtcRate::getBtcRate()[Carbon::parse($withdrawal["time"])->format("Y-m-d")];

                //vypocitam pomer vyberoveho kurzu a kurzu v prave iterovanem dni
                $rateRatio = BtcRate::getBtcRate()[$date->format("Y-m-d")] / $withdrawalRate;

                //pomerem vynasobim puvodne vybranou castku
                $datewithdrawalValue = $withdrawalValue * $rateRatio;
                
                //vybranou castku odectu z hromady
                $datePortfolioValue -= $datewithdrawalValue;
            }
            
        // $accountBalances[0] =

            $accountBalances[] = [
                "time" =>  $date->format("Y-m-d"),
                "value_change" => $datePortfolioValue
            ];

            //posunu se na dalsi den do dalsi iterace
            $date->addDay()->startOfDay();
        }

        return $accountBalances;
    }
}