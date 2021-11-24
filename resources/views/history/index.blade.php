@extends('layouts/main')

@section('content')

    <div class="wrapper-history">

        <section class="history_section">

            <h1>Transaction History</h1>
            @php
                function CZKtoEUR($koruny, $datum) {
                    $kurzyEuro = [
                    '30.11.2021' => 25.218,
                    '29.11.2021' => 25.218,
                    '28.11.2021' => 25.218,
                    '27.11.2021' => 25.218,
                    '26.11.2021' => 25.218,
                    '25.11.2021' => 25.218,
                    '24.11.2021' => 25.218,
                    '23.11.2021' => 25.218,
                    '22.11.2021' => 25.218,
                    '21.11.2021' => 25.218,
                    '20.11.2021' => 25.218,
                    '19.11.2021' => 25.218,
                    '18.11.2021' => 25.218,
                    '17.11.2021' => 25.218,
                    '16.11.2021' => 25.247,
                    '15.11.2021' => 25.226,
                    '14.11.2021' => 25.226,
                    '13.11.2021' => 25.249,
                    '12.11.2021' => 25.246,
                    '11.11.2021' => 25.225,
                    '10.11.2021' => 25.226,
                    '09.11.2021' => 25.246,
                    '08.11.2021' => 25.259,
                    '07.11.2021' => 25.219,
                    '06.11.2021' => 25.205,
                    '05.11.2021' => 25.205,
                    '04.11.2021' => 25.350,
                    '03.11.2021' => 25.490,
                    '02.11.2021' => 25.559,
                    '01.11.2021' => 25.578,
                    '31.10.2021' => 25.695,
                    '30.10.2021' => 25.653,
                    '29.10.2021' => 25.653,
                    '28.10.2021' => 25.743,
                    '27.10.2021' => 25.716,
                    '26.10.2021' => 25.715,
                    '25.10.2021' => 25.732,
                    '24.10.2021' => 25.664,
                    '23.10.2021' => 25.683,
                    '22.10.2021' => 25.685,
                    '21.10.2021' => 25.650,
                    '20.10.2021' => 25.527,
                    '19.10.2021' => 25.508,
                    '18.10.2021' => 25.473,
                    '17.10.2021' => 25.359,
                    '16.10.2021' => 25.383,
                    '15.10.2021' => 25.381,
                    '14.10.2021' => 25.392,
                    '13.10.2021' => 25.382,
                    '12.10.2021' => 25.401,
                    '11.10.2021' => 25.398,
                    '10.10.2021' => 25.453,
                    '09.10.2021' => 25.444,
                    '08.10.2021' => 25.464,
                    '07.10.2021' => 25.435,
                    '06.10.2021' => 25.396,
                    '05.10.2021' => 25.326,
                    '04.10.2021' => 25.341,
                    '03.10.2021' => 25.337,
                    '02.10.2021' => 25.317,
                    '01.10.2021' => 25.321,
                    '30.09.2021' => 25.333,
                    '29.09.2021' => 25.514,
                    '28.09.2021' => 25.498,
                    '27.09.2021' => 25.421,
                    '26.09.2021' => 25.413,
                    '25.09.2021' => 25.443,
                    '24.09.2021' => 25.444,
                    '23.09.2021' => 25.379,
                    '22.09.2021' => 25.408,
                    '21.09.2021' => 25.422,
                    '20.09.2021' => 25.472,
                    '19.09.2021' => 25.374,
                    '18.09.2021' => 25.382,
                    '17.09.2021' => 25.386,
                    '16.09.2021' => 25.319,
                    '15.09.2021' => 25.306,
                    '14.09.2021' => 25.353,
                    '13.09.2021' => 25.355,
                    '12.09.2021' => 25.338,
                    '11.09.2021' => 25.351,
                    '10.09.2021' => 25.343,
                    '09.09.2021' => 25.435,
                    '08.09.2021' => 25.410,
                    '07.09.2021' => 25.396,
                    '06.09.2021' => 25.402,
                    '05.09.2021' => 25.397,
                    '04.09.2021' => 25.384,
                    '03.09.2021' => 25.375,
                    '02.09.2021' => 25.398,
                    '01.09.2021' => 25.354,
                    '31.08.2021' => 25.413,
                    '30.08.2021' => 25.570,
                    '29.08.2021' => 25.506,
                    '28.08.2021' => 25.507,
                    '27.08.2021' => 25.511,
                    '26.08.2021' => 25.541,
                    '25.08.2021' => 25.558,
                    '24.08.2021' => 25.537,
                    '23.08.2021' => 25.552,
                    '22.08.2021' => 25.550,
                    '21.08.2021' => 25.567,
                    '20.08.2021' => 25.569,
                    '19.08.2021' => 25.503,
                    '18.08.2021' => 25.453,
                    '17.08.2021' => 25.454,
                    '16.08.2021' => 25.422,
                    '15.08.2021' => 25.396,
                    '14.08.2021' => 25.398,
                    '13.08.2021' => 25.399,
                    '12.08.2021' => 25.381,
                    '11.08.2021' => 25.386,
                    '10.08.2021' => 25.387,
                    '09.08.2021' => 25.367,
                    '08.08.2021' => 25.403,
                    '07.08.2021' => 25.421,
                    '06.08.2021' => 25.411,
                    '05.08.2021' => 25.405,
                    '04.08.2021' => 25.451,
                    '03.08.2021' => 25.457,
                    '02.08.2021' => 25.487,
                    '01.08.2021' => 25.531,
                    '31.07.2021' => 25.496,
                    '30.07.2021' => 25.496,
                    '29.07.2021' => 25.480,
                    '28.07.2021' => 25.556,
                    '27.07.2021' => 25.707,
                    '26.07.2021' => 25.670,
                    '25.07.2021' => 25.650,
                    '24.07.2021' => 25.649,
                    '23.07.2021' => 25.650,
                    '22.07.2021' => 25.633,
                    '21.07.2021' => 25.700,
                    '20.07.2021' => 25.651,
                    '19.07.2021' => 25.698,
                    '18.07.2021' => 25.530,
                    '17.07.2021' => 25.531,
                    '16.07.2021' => 25.534,
                    '15.07.2021' => 25.569,
                    '14.07.2021' => 25.569,
                    '13.07.2021' => 25.650,
                    '12.07.2021' => 25.657,
                    '11.07.2021' => 25.762,
                    '10.07.2021' => 25.740,
                    '09.07.2021' => 25.744,
                    '08.07.2021' => 25.850,
                    '07.07.2021' => 25.787,
                    '06.07.2021' => 25.639,
                    '05.07.2021' => 25.576,
                    '04.07.2021' => 25.567,
                    '03.07.2021' => 25.572,
                    '02.07.2021' => 25.571,
                    '01.07.2021' => 25.533,
                    '30.06.2021' => 25.500,
                    '29.06.2021' => 25.511,
                    '28.06.2021' => 25.425,
                    '27.06.2021' => 25.468,
                    '26.06.2021' => 25.479,
                    '25.06.2021' => 25.483,
                    '24.06.2021' => 25.450,
                    '23.06.2021' => 25.379,
                    '22.06.2021' => 25.498,
                    '21.06.2021' => 25.509,
                    '20.06.2021' => 25.568,
                    '19.06.2021' => 25.584,
                    '18.06.2021' => 25.580,
                    '17.06.2021' => 25.550,
                    '16.06.2021' => 25.498,
                    '15.06.2021' => 25.460,
                    '14.06.2021' => 25.429,
                    '13.06.2021' => 25.406,
                    '12.06.2021' => 25.393,
                    '11.06.2021' => 25.392,
                    '10.06.2021' => 25.354,
                    '09.06.2021' => 25.393,
                    '08.06.2021' => 25.434,
                    '07.06.2021' => 25.409,
                    '06.06.2021' => 25.429,
                    '05.06.2021' => 25.428,
                    '04.06.2021' => 25.428,
                    '03.06.2021' => 25.469,
                    '02.06.2021' => 25.455,
                    '01.06.2021' => 25.415,
                    '31.05.2021' => 25.437,
                    '30.05.2021' => 25.471,
                    '29.05.2021' => 25.458,
                    '28.05.2021' => 25.458,
                    '27.05.2021' => 25.441,
                    '26.05.2021' => 25.427,
                    '25.05.2021' => 25.421,
                    '24.05.2021' => 25.401,
                    '23.05.2021' => 25.459,
                    '22.05.2021' => 25.451,
                    '16.04.2021' => 25.451,
                    '01.12.2020' => 25.451,
                    '03.11.2020' => 25.451,
                    '25.07.2020' => 25.451,
                    '05.03.2020' => 25.451,
                    '01.02.2020' => 25.451,
                    '05.01.2020' => 25.451,
                    '01.05.2020' => 25.451,
                    '20.01.2020' => 25.451,
                    ];

                    return 0;

                    $kurz = $kurzyEuro[$datum];
                    return round($koruny / $kurz, 2);
                }

                function CZKtoUSD($koruny, $datum) {
                    $kurzyUsd = [
                    '30.11.2021' => 22.281,
                    '29.11.2021' => 22.281,
                    '28.11.2021' => 22.281,
                    '27.11.2021' => 22.281,
                    '26.11.2021' => 22.281,
                    '25.11.2021' => 22.281,
                    '24.11.2021' => 22.281,
                    '23.11.2021' => 22.281,
                    '22.11.2021' => 22.281,
                    '21.11.2021' => 22.281,
                    '20.11.2021' => 22.281,
                    '19.11.2021' => 22.281,
                    '18.11.2021' => 22.281,
                    '17.11.2021' => 22.281,
                    '16.11.2021' => 22.307,
                    '15.11.2021' => 22.193,
                    '14.11.2021' => 22.048,
                    '13.11.2021' => 22.063,
                    '12.11.2021' => 22.059,
                    '11.11.2021' => 22.035,
                    '10.11.2021' => 21.963,
                    '09.11.2021' => 21.776,
                    '08.11.2021' => 21.799,
                    '07.11.2021' => 21.800,
                    '06.11.2021' => 21.820,
                    '05.11.2021' => 21.820,
                    '04.11.2021' => 21.940,
                    '03.11.2021' => 21.943,
                    '02.11.2021' => 22.073,
                    '01.11.2021' => 22.053,
                    '31.10.2021' => 22.230,
                    '30.10.2021' => 22.189,
                    '29.10.2021' => 22.189,
                    '28.10.2021' => 22.035,
                    '27.10.2021' => 22.166,
                    '26.10.2021' => 22.176,
                    '25.10.2021' => 22.168,
                    '24.10.2021' => 22.039,
                    '23.10.2021' => 22.058,
                    '22.10.2021' => 22.054,
                    '21.10.2021' => 22.067,
                    '20.10.2021' => 21.908,
                    '19.10.2021' => 21.923,
                    '18.10.2021' => 21.939,
                    '17.10.2021' => 21.863,
                    '16.10.2021' => 21.882,
                    '15.10.2021' => 21.882,
                    '14.10.2021' => 21.894,
                    '13.10.2021' => 21.887,
                    '12.10.2021' => 22.027,
                    '11.10.2021' => 21.990,
                    '10.10.2021' => 21.999,
                    '09.10.2021' => 21.992,
                    '08.10.2021' => 22.000,
                    '07.10.2021' => 22.013,
                    '06.10.2021' => 21.980,
                    '05.10.2021' => 21.836,
                    '04.10.2021' => 21.815,
                    '03.10.2021' => 21.827,
                    '02.10.2021' => 21.837,
                    '01.10.2021' => 21.837,
                    '30.09.2021' => 21.875,
                    '29.09.2021' => 21.999,
                    '28.09.2021' => 21.820,
                    '27.09.2021' => 21.736,
                    '26.09.2021' => 21.683,
                    '25.09.2021' => 21.710,
                    '24.09.2021' => 21.710,
                    '23.09.2021' => 21.614,
                    '22.09.2021' => 21.726,
                    '21.09.2021' => 21.682,
                    '20.09.2021' => 21.718,
                    '19.09.2021' => 21.638,
                    '18.09.2021' => 21.647,
                    '17.09.2021' => 21.652,
                    '16.09.2021' => 21.521,
                    '15.09.2021' => 21.409,
                    '14.09.2021' => 21.482,
                    '13.09.2021' => 21.469,
                    '12.09.2021' => 21.452,
                    '11.09.2021' => 21.457,
                    '10.09.2021' => 21.458,
                    '09.09.2021' => 21.512,
                    '08.09.2021' => 21.500,
                    '07.09.2021' => 21.441,
                    '06.09.2021' => 21.397,
                    '05.09.2021' => 21.379,
                    '04.09.2021' => 21.360,
                    '03.09.2021' => 21.361,
                    '02.09.2021' => 21.389,
                    '01.09.2021' => 21.413,
                    '31.08.2021' => 21.518,
                    '30.08.2021' => 21.674,
                    '29.08.2021' => 21.618,
                    '28.08.2021' => 21.625,
                    '27.08.2021' => 21.625,
                    '26.08.2021' => 21.725,
                    '25.08.2021' => 21.713,
                    '24.08.2021' => 21.722,
                    '23.08.2021' => 21.754,
                    '22.08.2021' => 21.850,
                    '21.08.2021' => 21.858,
                    '20.08.2021' => 21.852,
                    '19.08.2021' => 21.838,
                    '18.08.2021' => 21.730,
                    '17.08.2021' => 21.745,
                    '16.08.2021' => 21.583,
                    '15.08.2021' => 21.533,
                    '14.08.2021' => 21.531,
                    '13.08.2021' => 21.531,
                    '12.08.2021' => 21.625,
                    '11.08.2021' => 21.619,
                    '10.08.2021' => 21.659,
                    '09.08.2021' => 21.612,
                    '08.08.2021' => 21.618,
                    '07.08.2021' => 21.613,
                    '06.08.2021' => 21.602,
                    '05.08.2021' => 21.471,
                    '04.08.2021' => 21.500,
                    '03.08.2021' => 21.448,
                    '02.08.2021' => 21.465,
                    '01.08.2021' => 21.513,
                    '31.07.2021' => 21.484,
                    '30.07.2021' => 21.484,
                    '29.07.2021' => 21.427,
                    '28.07.2021' => 21.576,
                    '27.07.2021' => 21.753,
                    '26.07.2021' => 21.753,
                    '25.07.2021' => 21.786,
                    '24.07.2021' => 21.789,
                    '23.07.2021' => 21.790,
                    '22.07.2021' => 21.773,
                    '21.07.2021' => 21.791,
                    '20.07.2021' => 21.770,
                    '19.07.2021' => 21.790,
                    '18.07.2021' => 21.617,
                    '17.07.2021' => 21.627,
                    '16.07.2021' => 21.627,
                    '15.07.2021' => 21.644,
                    '14.07.2021' => 21.602,
                    '13.07.2021' => 21.777,
                    '12.07.2021' => 21.627,
                    '11.07.2021' => 21.692,
                    '10.07.2021' => 21.671,
                    '09.07.2021' => 21.675,
                    '08.07.2021' => 21.822,
                    '07.07.2021' => 21.859,
                    '06.07.2021' => 21.691,
                    '05.07.2021' => 21.556,
                    '04.07.2021' => 21.558,
                    '03.07.2021' => 21.552,
                    '02.07.2021' => 21.551,
                    '01.07.2021' => 21.553,
                    '30.06.2021' => 21.508,
                    '29.06.2021' => 21.437,
                    '28.06.2021' => 21.321,
                    '27.06.2021' => 21.333,
                    '26.06.2021' => 21.346,
                    '25.06.2021' => 21.346,
                    '24.06.2021' => 21.330,
                    '23.06.2021' => 21.269,
                    '22.06.2021' => 21.354,
                    '21.06.2021' => 21.411,
                    '20.06.2021' => 21.535,
                    '19.06.2021' => 21.562,
                    '18.06.2021' => 21.564,
                    '17.06.2021' => 21.450,
                    '16.06.2021' => 21.255,
                    '15.06.2021' => 20.994,
                    '14.06.2021' => 20.979,
                    '13.06.2021' => 20.980,
                    '12.06.2021' => 20.971,
                    '11.06.2021' => 20.970,
                    '10.06.2021' => 20.828,
                    '09.06.2021' => 20.851,
                    '08.06.2021' => 20.896,
                    '07.06.2021' => 20.840,
                    '06.06.2021' => 20.907,
                    '05.06.2021' => 20.899,
                    '04.06.2021' => 20.899,
                    '03.06.2021' => 20.997,
                    '02.06.2021' => 20.847,
                    '01.06.2021' => 20.806,
                    '31.05.2021' => 20.797,
                    '30.05.2021' => 20.890,
                    '29.05.2021' => 20.881,
                    '28.05.2021' => 20.881,
                    '27.05.2021' => 20.868,
                    '26.05.2021' => 20.853,
                    '25.05.2021' => 20.746,
                    '24.05.2021' => 20.792,
                    '23.05.2021' => 20.904,
                    '22.05.2021' => 20.897,
                    '16.04.2021' => 20.897,
                    '01.12.2020' => 20.897,
                    '03.11.2020' => 20.897,
                    '25.07.2020' => 20.897,
                    '05.03.2020' => 20.897,
                    '01.02.2020' => 20.897,
                    '05.01.2020' => 20.897,
                    '01.05.2020' => 20.897,
                    ];

                    return 0;

                    $kurz = $kurzyUsd[$datum];
                    return round($koruny / $kurz, 2);
                }
            @endphp

            
            <div class="deposit-table-section">
                <div class="history-deposits-header">
                    <h3>Deposits</h3>
                    <a href="/deposits"><button class="history-deposit-btn">Deposit</button></a>
                </div>
                <table class="deposits-table">
                    <thead>
                        <tr>
                            <th>
                                Date
                            </th>
                            <th>
                                Transaction
                            </th>
                            <th>
                                CZK
                            </th>
                            <th>
                                EUR
                            </th>
                            <th>
                                USD
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Auth::user()->deposits as $deposit)
                            <tr>
                                <td>{{$deposit->time->format('d.m.Y')}}</td>
                                <td>Deposit</td>
                                <td> {{$deposit->amount}}</td>
                                <td> {{ CZKtoEUR($deposit->amount, $deposit->time->format('d.m.Y'))}}</td>
                                <td> {{ CZKtoUSD($deposit->amount, $deposit->time->format('d.m.Y'))}}</td>
                                <td>{{$deposit->status}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            
            <div class="deposit-table-section">
                

                <div class="history-deposits-header">
                    <h3>Withdrawals</h3>
                    <a href="/withdrawals"><button class="history-withdrawal-btn">Withdraw</button></a>
                </div>

                <table class="withdrawals-table">
                    <thead>
                        <tr>
                            <th>
                                Date
                            </th>
                            <th>
                                Transaction
                            </th>
                            <th>
                                CZK
                            </th>
                            <th>
                                EUR
                            </th>
                            <th>
                                USD
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (Auth::user()->withdrawals as $withdrawal)
                            <tr>
                                <td>{{$withdrawal->time->format('d.m.Y')}}</td>
                                <td>Withdrawal</td>
                                <td> - {{$withdrawal->amount}}</td>
                                <td> - {{ CZKtoEUR($withdrawal->amount, $withdrawal->time->format('d.m.Y'))}}</td>
                                <td> - {{ CZKtoUSD($withdrawal->amount, $withdrawal->time->format('d.m.Y'))}}</td>
                                <td>{{$withdrawal->status}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection