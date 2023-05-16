@extends('layouts.app')

@section('content')



    </head>

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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Trades history:</h4>
                                </div>
                                <div class="card-body">

                                    <div class="table-responsive ">
                                        <table class="text-dark table  table-bordered  ">
                                            <thead>
                                                <tr class="border-dark text-center">
                                                    <th class="border-dark">Trade ID</th>
                                                    <th class="border-dark">Trade info</th>
                                                    <th class="border-dark">Trade status</th>
                                                    <th class="border-dark">Trade date</th>
                                                    <th class="border-dark">Trade time entry</th>
                                                    <th class="border-dark">Trade time closure</th>
                                                    <th class="border-dark">Trade profit</th>

                                                </tr>
                                            </thead>
                                            <tbody class="text-white">
                                                @foreach ($data as $item)
                                                    @if ($item->status == '1')
                                                    <tr class="text-center bg-success">
                                                    @else
                                                    <tr class="text-center bg-warning">
                                                    @endif
                                                        <th>{{ $item->id }}</th>
                                                        <td>USDT->{{ $item->crypto }}</td>
                                                        @if ($item->status == '0')
                                                            <td class="text-center "><span
                                                                    class=" alert alert-warning bg-warning text-center m-1 text-white ">Queue</span>
                                                            </td>
                                                        @endif
                                                        @if ($item->status == '1')
                                                            <td class="text-center "><span
                                                                    class=" badge badge-success bg-success text-center   text-white ">Completed</span>
                                                            </td>
                                                        @endif
                                                        <td>{{ $item->created_at }}</td>
                                                        <td class="color-primary">21.03 (GMT+2)</td>
                                                        <td class="color-primary">21.05 (GMT+2)</td>
                                                        @if ($item->status == '0')
                                                            <td class="color-primary">- </td>
                                                        @endif
                                                        @if ($item->status == '1')
                                                            <td class="color-primary">{{ $item->income }}%</td>
                                                        @endif
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
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
