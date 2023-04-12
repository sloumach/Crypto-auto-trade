@extends('layouts.app')

@section('content')

    </head>

    <body>
        @include('header')
        @include('navbar')
            <!--**********************************
                Content body start
            ***********************************-->
            <div class="content-body">
                <!-- row -->
                <div class="container">
                    <div class="row">
                       @include('topbody')

                        <!-- /# column -->
                    </div>




                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                </div>

                                <div class="col-md-6">

                                </div>
                                <div class="col-lg-12 text-black">
                                    <div class="card text-black">
                                        <div class="card-header justify-content-center">
                                            <h4 class="card-title">Crypto market:</h4>
                                        </div>
                                        <div class="card-body text-black">
                                            <div class="table-responsive ">
                                                <table
                                                    class="table table-striped table-responsive  result-point text-center">
                                                    <thead class="point-table-head ">
                                                        <tr>
                                                            <th class="text-dark text-center">Coin:</th>
                                                            <th class="text-dark text-center">Tag:</th>
                                                            <th class="text-dark text-center ">Current Price: </th>
                                                            <th class="text-dark text-center">Market cap: </th>
                                                            <th class="text-dark text-center">Circulating supply: </th>
                                                            <th class="text-dark text-center">Max supply: </th>
                                                            <th class="text-dark text-center">High 24h: </th>
                                                            <th class="text-dark text-center">Low 24h: </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($cry as $crys)
                                                            <tr>
                                                                <td class="text-dark text-left text-center">
                                                                    {{ $crys->name }}</td>

                                                                <td class="text-dark text-left text-center "><img
                                                                        style="max-width: 35%;" src="{{ $crys->image }}"
                                                                        alt="public"> {{ strtoupper($crys->symbol) }}
                                                                </td>

                                                                @php
                                                                    $firstChar = substr($crys->current_price, 0, 1);

                                                                @endphp
                                                                @if ($firstChar === '0')
                                                                    <td class="d-sm-none d-md-block"><span
                                                                            class="text-dark  text-center"><i
                                                                                class="fa fa-usd"></i>{{ number_format($crys->current_price, 6, '.', ',') }}</span>
                                                                    </td>
                                                                @else
                                                                    <td><span class="text-dark text-center"><i
                                                                                class="fa fa-usd"></i>{{ number_format($crys->current_price, 3, '.', ',') }}</span>
                                                                    </td>
                                                                @endif
                                                                <td class="text-dark text-center"><i
                                                                        class="fa fa-usd"></i>{{ number_format($crys->market_cap, 0, '.', ',') }}
                                                                </td>
                                                                <td class="text-dark text-center"><i
                                                                        class="fa fa-usd"></i>{{ number_format($crys->circulating_supply, 0, '.', ',') }}
                                                                </td>
                                                                <td class="text-dark text-center"><i
                                                                        class="fa fa-usd"></i>{{ number_format($crys->max_supply, 0, '.', ',') }}
                                                                </td>

                                                                @php
                                                                    $firstChar = substr($crys->high_24h, 0, 1);

                                                                @endphp
                                                                @if ($firstChar === '0')
                                                                    <td class="text-dark col col-2 text-center"><i
                                                                            class="fa fa-usd"></i>{{ number_format($crys->high_24h, 6, '.', ',') }}
                                                                    </td>
                                                                @else
                                                                    <td class="text-dark col col-2 text-center"><i
                                                                            class="fa fa-usd"></i>{{ number_format($crys->high_24h, 3, '.', ',') }}
                                                                    </td>
                                                                @endif


                                                                @php
                                                                    $firstChar = substr($crys->low_24h, 0, 1);

                                                                @endphp
                                                                @if ($firstChar === '0')
                                                                    <td class="text-dark col col-2 text-center"><i
                                                                            class="fa fa-usd"></i>{{ number_format($crys->low_24h, 6, '.', ',') }}
                                                                    </td>
                                                                @else
                                                                    <td class="text-dark col col-2 text-center"><i
                                                                            class="fa fa-usd"></i>{{ number_format($crys->low_24h, 3, '.', ',') }}
                                                                    </td>
                                                                @endif
                                                            </tr>
                                                        @endforeach


                                                    </tbody>

                                                </table>
                                                {{ $cry->links('paginate') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- /# card -->
                        </div>
                    </div>
                </div>
            </div>
            <!--**********************************
                Content body end
            ***********************************-->


            <!--**********************************
                Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                    <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
                </div>
            </div>
            <!--**********************************
                Footer end
            ***********************************-->

            <!--**********************************
               Support ticket button start
            ***********************************-->

            <!--**********************************
               Support ticket button end
            ***********************************-->


        </div>
    </body>
    <script src="dshb/vendor/global/global.min.js"></script>
    <script src="dshb/js/quixnav-init.js"></script>
    <script src="dshb/js/custom.min.js"></script>



    <!--**********************************
            Main wrapper end
@endsection
