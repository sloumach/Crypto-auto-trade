@extends('layouts.app')

@section('content')

    <body>


            @include('header')
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
                        <div class="col-lg-12">
                            <div class="card ">
                                <div class="card-header justify-content-center">
                                    <a style="font-size: 14px;"
                                        class="badge badge-rounded badge-outline-secondary bg-secondary text-white">What to do:</a>

                                </div>
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
                                <div class="card-body">

                                    <div class="row justify-content-center">
                                        <div class="col col-4-lg col-6-sm mt-2 ">
                                            <button type="button" class="btn btn-secondary btn-block"
                                                data-toggle="modal" data-target="#transfertmodal">Transfert</button>

                                        </div>
                                        <div class="modal fade" id="transfertmodal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>Site wallet (USDT): Loremipsumdolorsitamet.</h5>
                                                        <form method="post" action="{{ url('/recharge') }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Amount:</label>
                                                                <input type="text" class="form-control" name="amount"
                                                                    id="recipient-name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text"
                                                                    class="col-form-label">Txid:</label>
                                                                <textarea class="form-control" name="txid" id="message-text"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="confirmation" class="col-form-label">Password
                                                                    confirmation:</label>
                                                                <input type="password" name="password"
                                                                    class="form-control" id="password">
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary">Confirm</button>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="historymodal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="table-responsive ">
                                                            <table class="text-dark table table-hover table-bordered  ">
                                                                <thead>
                                                                    <tr class="border-dark text-center">
                                                                        <th class="border-dark">ID:</th>
                                                                        <th class="border-dark">Amount</th>
                                                                        <th class="border-dark">Status</th>
                                                                        <th class="border-dark">type</th>
                                                                        <th class="border-dark">Date</th>


                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($hist as $item)
                                                                        <tr class="text-center ">
                                                                            <th>{{ $item->id }}</th>
                                                                            <td>{{ $item->montant }}</td>
                                                                            <td class="text-center ">
                                                                                @if ($item->status == '0')
                                                                                    <span
                                                                                        class=" alert alert-warning bg-warning text-center m-1 text-white ">Queue</span>
                                                                                @endif
                                                                                @if ($item->status == '1')
                                                                                    <span
                                                                                        class=" alert alert-success bg-success text-center m-1 text-white ">Confirmed</span>
                                                                                @endif
                                                                                @if ($item->status == '2')
                                                                                    <span
                                                                                        class=" alert alert-danger bg-danger text-center m-1 text-white ">Rejected</span>
                                                                                @endif
                                                                            </td>
                                                                            <td>
                                                                                @if ($item->type == '0')
                                                                                    <span
                                                                                        class=" alert alert-success bg-success text-center m-1 text-white ">Recharge</span>
                                                                                @endif
                                                                                @if ($item->type == '1')
                                                                                    <span
                                                                                        class=" alert alert-warning bg-warning text-center m-1 text-white ">Withdraw</span>
                                                                                @endif
                                                                            </td>
                                                                            <td class="color-primary">
                                                                                {{ $item->created_at }}</td>

                                                                        </tr>
                                                                    @endforeach

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="withdrawmodal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{ url('/withdraw') }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Amount:</label>
                                                                <input type="text" class="form-control" name="amount"
                                                                    id="recipient-name">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="confirmation" class="col-form-label">Password
                                                                    confirmation:</label>
                                                                <input type="password" class="form-control"
                                                                    name="password" id="password">
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary">Confirm</button>
                                                        </form>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col col-4-lg col-6-sm mt-2">
                                            <button type="button" class="btn btn-secondary btn-block "
                                                data-toggle="modal" data-target="#withdrawmodal">Withdraw</button>

                                        </div>

                                    </div>
                                    <div class="row justify-content-center mt-2">
                                        <div class="col col-12-lg col-12-sm ">
                                            <button type="button" class="btn btn-secondary btn-block"
                                                data-toggle="modal" data-target="#historymodal">History</button>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- /# card -->


                </div> <!-- /# column -->
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
