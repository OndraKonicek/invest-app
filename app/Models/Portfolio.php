<?php

namespace App\Models;

use App\Models\Deposit;
use App\Models\PortfolioValue;
use App\Models\Withdrawal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class);
    }

    public function portfolioValues()
    {
        return $this->hasMany(PortfolioValue::class);
    }
}
