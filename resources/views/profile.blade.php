@extends('layouts.app')

@section('content')

    </head>

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

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Account:</h4>
                                        @if (session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-xl-3">
                                                <div class="nav flex-column nav-pills">
                                                    <a href="#v-pills-home" data-toggle="pill"
                                                        class="nav-link active show">Invite a friend</a>
                                                    <a href="#v-pills-profile" data-toggle="pill"
                                                        class="nav-link">Profile</a>
                                                    <a href="#v-pills-messages" data-toggle="pill"
                                                        class="nav-link">Messages</a>
                                                    <a href="#v-pills-settings" data-toggle="pill" class="nav-link">Account
                                                        verification</a>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 text-center ">
                                                <div class="tab-content">
                                                    <div id="v-pills-home" class="tab-pane fade active show">
                                                        <p>Invite a friend using this code when signin:

                                                            <span
                                                                class="badge bg-success text-white">{{ $prf->inv_code }}</span><br>
                                                            <!-- <img class="profile-img" src="{{ $prf->url_img }}" alt="public/{{ $prf->url_img }}"> -->


                                                        </p>

                                                    </div>
                                                    <div id="v-pills-profile" class="tab-pane fade text-center">
                                                        <div class="container mt-2">
                                                            <div class="row ">



                                                                <div class="card-body px-4 ">
                                                                    <div class="col-lg-6 col-sm-8  mx-auto ">
                                                                        <form action="{{ url('/update') }}" method="POST">
                                                                            @csrf
                                                                            @if ($prf->status == '0')
                                                                                <div class="form-group">
                                                                                    <label for="fullName">Nom</label>
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0"
                                                                                        id="fullName"
                                                                                        value="{{ $prf->nom }}"
                                                                                        placeholder="Entrez votre nom complet"
                                                                                        name="nom">

                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="fullName">Prenom</label>
                                                                                    <input type="text"
                                                                                        class="form-control rounded-0"
                                                                                        id="fullName"
                                                                                        value="{{ $prf->prenom }}"
                                                                                        placeholder="Entrez votre nom complet"
                                                                                        name="prenom">
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label for="email">Adresse
                                                                                        email</label>
                                                                                    <input type="email"
                                                                                        class="form-control rounded-0"
                                                                                        id="email" name="email"
                                                                                        value="{{ $prf->email }}"
                                                                                        placeholder="Entrez votre adresse email">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="password">Nouveau mot
                                                                                        de passe</label>
                                                                                    <input type="password"
                                                                                        class="form-control rounded-0"
                                                                                        name="password" id="password"
                                                                                        >
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="passwordConfirm">Confirmez
                                                                                        votre mot de passe</label>
                                                                                    <input type="password"
                                                                                        class="form-control rounded-0"
                                                                                        name="passwordconfirm"
                                                                                        id="passwordConfirm"
                                                                                        placeholder="Confirmez votre mot de passe">
                                                                                </div>
                                                                            @else
                                                                                <div class="form-group">
                                                                                    <label for="password">Nouveau mot
                                                                                        de passe</label>
                                                                                    <input type="password"
                                                                                        class="form-control rounded-0"
                                                                                        id="password" name="password"
                                                                                        placeholder="Entrez votre mot de passe">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="passwordConfirm">Confirmez
                                                                                        votre mot de passe</label>
                                                                                    <input type="password"
                                                                                        class="form-control rounded-0"
                                                                                        id="passwordconfirm"
                                                                                        name="passwordconfirm"
                                                                                        placeholder="Confirmez votre mot de passe">
                                                                                </div>
                                                                            @endif


                                                                            <div class="form-group">
                                                                                <label for="password">Statut du
                                                                                    compte</label>
                                                                                <br>
                                                                                @if ($prf->status == '0')
                                                                                    <span
                                                                                        class="badge bg-danger  text-white">Not
                                                                                        verified</span>
                                                                                @else
                                                                                    <span
                                                                                        class="badge bg-success stat-digit text-white">verified</span>
                                                                                @endif
                                                                            </div>

                                                                            <div class="form-group">
                                                                                @if (session()->has('status'))
                                                                                    <div class="alert alert-success">
                                                                                        {{ session()->get('status') }}
                                                                                    </div>
                                                                                @endif


                                                                                <button type="submit"
                                                                                    class="btn  text-white btn-block rounded-1 py-2"
                                                                                    style="background-color: #593bdb;">Update</button>

                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        </p>
                                                    </div>

                                                    <div id="v-pills-messages" class="tab-pane fade">


                                                        <!-- row -->
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-body">


                                                                        <div class="mail-list  btn-group">
                                                                            <a href="email-inbox.html"
                                                                                class="list-group-item active"><i
                                                                                    class="fa fa-inbox font-18 align-middle mr-2"></i>
                                                                                Inbox <span
                                                                                    class="badge badge-primary badge-sm float-right">{{ $count }}</span>
                                                                            </a>
                                                                            <button class="btn btn-dark"
                                                                                style="margin-left:-2px"
                                                                                style="padding-bottom: -1px"
                                                                                type="button"><i class="ti-reload"></i>
                                                                            </button>


                                                                        </div>

                                                                        <div class="modal fade" id="exampleModal"
                                                                            tabindex="-1"
                                                                            aria-labelledby="exampleModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="exampleModalLabel">
                                                                                            Modal title</h5>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <span
                                                                                                aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        ...
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-dismiss="modal">Close</button>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="">

                                                                            <div class="email-list mt-4">

                                                                                @foreach ($data as $datas)
                                                                                    <div class="message">
                                                                                        <div>
                                                                                            <div
                                                                                                class="d-flex message-single">
                                                                                                <div
                                                                                                    class="custom-control custom-checkbox pl-4">
                                                                                                    <input type="checkbox">
                                                                                                </div>
                                                                                                <div class="ml-2">
                                                                                                    <button
                                                                                                        class="border-0 bg-transparent align-middle p-0"><i
                                                                                                            class="fa fa-star"
                                                                                                            aria-hidden="true"></i></button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <a class="col-mail col-mail-2"
                                                                                                data-toggle="modal"
                                                                                                data-target="#exampleModal">
                                                                                                <div class="subject">
                                                                                                    {{ $datas->message }}
                                                                                                </div>
                                                                                                <div class="date">
                                                                                                    11:49 am</div>
                                                                                            </a>
                                                                                        </div>

                                                                                    </div>
                                                                                @endforeach


                                                                            </div>
                                                                            <!-- panel -->
                                                                            <div class="row mt-4 m-4 mx-sm-4">
                                                                                {{ $data->links('paginate') }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                    </div>
                                                    <div id="v-pills-settings" class="tab-pane fade">
                                                        @if ($prf->status == '0')
                                                            <form action="{{ url('/verify') }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <div class="input-group mb-3">

                                                                        <div class="custom-file">
                                                                            <input type="file"
                                                                                class="custom-file-input"
                                                                                id="inputGroupFile01" name="file">
                                                                            <label class="custom-file-label"
                                                                                for="inputGroupFile01">Choose
                                                                                file</label>
                                                                        </div>

                                                                    </div>


                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="confirmation"
                                                                        class="col-form-label">Wallet adress:</label>
                                                                    <textarea class="form-control" id="wallet" name="wallet"></textarea>
                                                                </div>

                                                                @if (session()->has('status'))
                                                                    <div class="alert alert-success">
                                                                        {{ session()->get('status') }}
                                                                    </div>
                                                                @endif

                                                                <button type="submit"
                                                                    class="btn btn-primary">Confirm</button>
                                                            </form>
                                                        @else
                                                            @if ($invited->count() == 0)
                                                               <br> <span class="badge bg-warning text-white">To complete
                                                                    the verification steps, you need to invite at least
                                                                    1 friend to join us.</span><br>
                                                            @endif
                                                            @if ($prf->status == '2')
                                                                <br><span class="badge bg-warning text-white">Verification should not take more than 48 hours</span><br>
                                                            @endif
                                                            @if ($prf->status == '1')
                                                               <br> <span class="badge bg-success text-white">Verified</span><br>
                                                            @endif
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>





            </div>


    <!-- Modal -->
    <div class="modal fade show" id="flash-message-modal" tabindex="-1" role="dialog" aria-labelledby="flash-message-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content text-center">
                <div class="modal-header ">
                    <h5 class="modal-title  " id="flash-message-modal-label">Read our terms please</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="{{ url('/terms') }}" >
                    <span class="badge bg-dark text-white">Terms of use</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


            <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content  d-flex align-items-center">
                    <div class="modal-header">

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body ">
                      @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                          <span class="alert alert-danger text-white">{{ $error }}</span><br>
                          <br>
                          <br>
                        @endforeach
                      @endif
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="succModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content  d-flex align-items-center">
                    <div class="modal-header">

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body ">
                        @if(session('update')=='Updated successfully')

                        <div class="alert alert-success">
                            {{ session()->get('update') }}
                        </div>
                        @endif
                        @if(session('update')=='Update failed!')

                        <div class="alert alert-danger">
                            {{ session()->get('update') }}
                        </div>
                        @endif
                        @if(session('update')=='Password not confirm!')

                        <div class="alert alert-warning">
                            {{ session()->get('update') }}
                        </div>
                        @endif
                    </div>
                  </div>
                </div>
              </div>

            {{-- @if ($errors)
                    <span class="badge bg-danger  text-white">
                        <strong>erreur wallet adress</strong>
                    </span>
                @endif --}}
                {{-- @if ($errors->has('file'))

                @endif --}}

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
    <script>
        $(document).ready(function() {
            $('#flash-message-modal').modal('show');
        });
    </script>
    @if(count($errors) > 0)
    <script>
      $(document).ready(function() {
        $('#errorModal').modal('show');
      });
    </script>
  @endif
  @if(session()->has('update'))
    <script>
      $(document).ready(function() {
        $('#succModal').modal('show');
      });
    </script>
  @endif


    <!--**********************************
                            Main wrapper end

@endsection
