@extends('layouts.app')

@section('content')

    <body>
        @include('header',['msg' => $msg,  'prf'=>$prf])
        @include('navbar')
        <!--**********************************
                                                                Sidebar end
                                                            ***********************************-->

        <!--**********************************
                                                                Content body start
                                                            ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    @include('topbody',['lasttrade' => $lasttrade,  'prf'=>$prf])
                </div>
                <div class="container">
                    <div class="col col-lg-12 col-md-offset-3 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title ">Account balance: <i class="fa fa-usd"></i> {{ $prf->somme }}
                                    USDT</h4>
                            </div>
                            @if(count($errors) > 0)
                            <div class="row justify-content-center">
                                <span class="alert bg-danger text-white">
                                    {{ 'Fill all sets' }}</span>
                            </div>
                            @endif
                            <div class="card-body p-0 m-0">
                                @if (session()->has('success'))
                                    <div class="row justify-content-center">
                                        <span class="alert bg-success text-white">
                                            {{ session()->get('success') }}</span>
                                    </div>
                                @endif
                                @if (session()->has('failed'))
                                    <div class="row justify-content-center">
                                        <span class="alert bg-danger text-white">
                                            {{ session()->get('failed') }}</span>
                                    </div>
                                @endif
                                @if (session()->has('limit'))
                                    <div class="row justify-content-center">
                                        <span class="alert bg-danger text-white">
                                            {{ session()->get('limit') }}</span>
                                    </div>
                                @endif
                                <!-- MultiStep Form -->

                                <form id="msform" method="POST" action="{{ url('/conftrade') }}">
                                    <!-- progressbar -->
                                    @csrf
                                    <ul id="progressbar">
                                        <li class="active">Personal Details</li>
                                        <li>Social Profiles</li>

                                        <li>Account Setup</li>
                                    </ul>
                                    <!-- fieldsets -->
                                    <fieldset class="">
                                        <div class="">
                                            <table class="table">
                                                <thead class="thead-primary">
                                                    <tr>

                                                        <th scope="col" style="background-color: #512f90" colspan="3">
                                                            Set trade details:</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="align-middle">Set 1:</th>
                                                        <td>
                                                            <div class="row   ">
                                                                <div class="col text-center ">Set duration:</div>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <div class=" btn-group btn-group-sm  btn-group-toggle mr-1   text-sm-center"
                                                                    data-toggle="buttons">
                                                                    <label class="btn btn-secondary ">
                                                                        <input type="radio" name="duration" id="option1"
                                                                            value="1"> 1 day
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th class="align-middle">Set 2:</th>
                                                        <td>
                                                            <div class="row   ">
                                                                <div class="col text-center ">Set amounts:</div>
                                                            </div>
                                                            <div class="row justify-content-center">
                                                                <!-- <label for="customRange2">Example range</label> -->
                                                                <div class="row">
                                                                    <input type="range" class="custom-range"
                                                                        name="range" min="0" max="100"
                                                                        step="10" id="customRange3">
                                                                </div>
                                                            </div>
                                        </div>
                                        </td>

                                        </tr>
                                        <tr>
                                            <th class="align-middle">Set 3:</th>
                                            <td>
                                                <div class="row   ">
                                                    <div class="col text-center ">Plan:</div>
                                                </div>
                                                <span class="badge text-white "
                                                    style="background-color: #512f90">Basic</span>

                                            </td>

                                        </tr>
                                        </tbody>
                                        </table>
                            </div>

                            <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="">
                                    <table class="table">
                                        <thead class="thead-primary">
                                            <tr>

                                                <th scope="col" style="background-color: #512f90" colspan="3">
                                                    Set trade details:</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="align-middle">Set 4:</th>
                                                <td>
                                                    <div class="row   ">
                                                        <div class="col text-center my-1 ">Set crypto-base:</div>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div class=" btn-group btn-group-sm  btn-group-toggle mr-1   text-sm-center"
                                                            data-toggle="buttons"><label class="btn btn-secondary    ">
                                                                <input type="radio" name="crypto" value="btc"
                                                                    id="option1">
                                                                BTC
                                                            </label><label class="btn btn-secondary ">
                                                                <input type="radio" name="crypto" value="eth"
                                                                    id="option2">
                                                                ETH
                                                            </label></div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th class="align-middle">Set 5:</th>
                                                <td>
                                                    <div class="row   ">
                                                        <div class="col text-center">Trades available today:</div>
                                                    </div>
                                                    <div class="row justify-content-center text-white">
                                                        <!-- <label for="customRange2">Example range</label> -->
                                                        <span class="badge" style="background-color: #512f90">
                                                            @if ($prf->daily_trade == '0')
                                                                0
                                                            @endif
                                                            @if ($prf->daily_trade == '1')
                                                                1
                                                            @endif
                                                        </span>
                                                    </div>
                                </div>
                                </td>

                                </tr>

                                </tbody>
                                </table>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>

                        <fieldset>
                            <div class="">
                                <table class="table">
                                    <thead class="thead-primary">
                                        <tr>

                                            <th scope="col" style="background-color: #512f90" colspan="3">Set
                                                trade details:</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label for="labelpassword">Password confirmation</label>
                                                <input type="password" name="pass" placeholder="Tape your password"
                                                    id="labelpassword" />

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- <h2 class="fs-title">Create your account</h2>
                                                                                                <h3 class="fs-subtitle">Fill in your credentials</h3> -->


                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                            <button type="submit" class="btn  btn-rounded text-white"
                                style=" background-color:#6048b4 "> Set trade</button>
                        </fieldset>
                        </form>
                        <div>

                        </div>

                    </div>
                </div>
                <!-- /.MultiStep Form -->

            </div>
        </div>



        <!-- /# card -->


        </div> <!-- /# column -->







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



    </body>

    <script src="dshb/vendor/global/global.min.js"></script>
    <script src="dshb/js/quixnav-init.js"></script>
    <script src="dshb/js/custom.min.js"></script>
    <script src="dshb/js/js_form.js"></script>

    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
        integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>



    <!--**********************************
                                                            Main wrapper end
@endsection
