<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $basic_portfolio = new Portfolio;
        $basic_portfolio->name = 'Balanced';
        $basic_portfolio->description = 'A balanced portfolio, providing good returns with low risk';
        $basic_portfolio->save();
    }
}
