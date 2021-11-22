@extends('layouts/main')

@section('content')

    <div class="wrapper-cryptoDerivatives">

        <section class="cryptoDerivatives_section">

            <h1>Types of Crypto Derivatives</h1>

        </section>

        <section class="crypto-derivatives-types">

            <div class="crypto-futures">
                <h3>Crypto Futures</h3>
                <img src="img/crypto-futures.png" alt="Crypto Futures">
                <p>
                    Crypto futures are Derivative Products. Such products are a form of contract. In essence, futures form a commitment between two parties to either buy..
                </p>
                <a href="/deposits">
                    <button class="crypto-futures-btn">Invest</button>
                </a>
                {{-- <input class="crypto-futures-btn" type="button" value="Invest"> --}}
            </div>

            <div class="crypto-futures">
                <h3>Perpetual Swaps</h3>
                <img src="img/crypto-futures.png" alt="Crypto Futures">
                <p>
                    A perpetual swap is an increasingly popular way to trade bitcoin because it allows investors to buy and sell the value of bitcoin without having to own..
                </p>
                <button class="crypto-futures-btn"><a href="">Invest</a></button>
                {{-- <input class="crypto-futures-btn" type="button" value="Invest"> --}}
            </div>

            <div class="crypto-futures">
                <h3>Crypto Options</h3>
                <img src="img/crypto-futures.png" alt="Crypto Futures">
                <p>
                    Compared to the entire crypto futures market, the options market is relatively small, with only a limited range of products available at the moment.
                </p>
                <button class="crypto-futures-btn"><a href="">Invest</a></button>
                {{-- <input class="crypto-futures-btn" type="button" value="Invest"> --}}
            </div>
        </section>

    </div>

@endsection
