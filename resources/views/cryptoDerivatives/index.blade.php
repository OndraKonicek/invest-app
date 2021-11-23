@extends('layouts/main')

@section('content')

    <div class="wrapper-cryptoDerivatives">

        <section class="cryptoDerivatives_section">

            <h1>Crypto Derivatives</h1>

        </section>


        <section>

            <h3>What is derivative trading?</h3>
            <p>A derivative is a contract or product whose value is determined by an underlying asset. Currencies, exchange rates, commodities, stocks, and the rate of interest are all examples of derivative assets. The buyer and seller of such contracts have directly opposed predictions for the future trading price. To earn a profit, both parties wager on the underlying assets’ future value.

</p>
        </section>


        <section>
            <h3>What is derivative trading in crypto?</h3>
            <p>The underlying asset in crypto derivatives trading can be any cryptocurrency token. Two parties that enter into a financial contract speculate on the cryptocurrency’s price on a future date. During the first phase of the contract, the sides agree on a selling/buying price for the cryptocurrency on a specific day, regardless of the market price. As a result, investors can profit from changes in the underlying asset’s price by purchasing the currency at a cheaper price and selling it at a higher price.

</p>
        </section>

        {{-- <section class="crypto-derivatives-types"> --}}
{{-- 
            <div class="crypto-futures">
                <h3>Crypto Futures</h3>
                <img src="img/crypto-futures.png" alt="Crypto Futures">
                <p>
                    Crypto futures are Derivative Products. Such products are a form of contract. In essence, futures form a commitment between two parties to either buy..
                </p>
                <a href="/deposits">
                    <button class="crypto-futures-btn">Invest</button>
                </a> --}}
                {{-- <input class="crypto-futures-btn" type="button" value="Invest"> --}}
            {{-- </div> --}}

            {{-- <div class="crypto-futures">
                <h3>Perpetual Swaps</h3>
                <img src="img/crypto-futures.png" alt="Crypto Futures">
                <p>
                    A perpetual swap is an increasingly popular way to trade bitcoin because it allows investors to buy and sell the value of bitcoin without having to own..
                </p>
                <button class="crypto-futures-btn"><a href="">Invest</a></button> --}}
                {{-- <input class="crypto-futures-btn" type="button" value="Invest"> --}}
            {{-- </div> --}}

            {{-- <div class="crypto-futures">
                <h3>Crypto Options</h3>
                <img src="img/crypto-futures.png" alt="Crypto Futures">
                <p>
                    Compared to the entire crypto futures market, the options market is relatively small, with only a limited range of products available at the moment.
                </p>
                <button class="crypto-futures-btn"><a href="">Invest</a></button> --}}
                {{-- <input class="crypto-futures-btn" type="button" value="Invest"> --}}
            {{-- </div>
        </section> --}}

    </div>

@endsection
