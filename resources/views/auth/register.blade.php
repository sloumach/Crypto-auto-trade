@extends('layouts.app')

@section('content')
    <!-- dshb_Scripts -->





    <link rel="stylesheet" href="lgn/css/bootstrap-login-form.min.css" />
    <link rel="stylesheet" href="lgn/css/style.css" />
    </head>

    <body>


        <style>
            .divider:after,
            .divider:before {
                content: "";
                flex: 1;
                height: 1px;
                background: #eee;
            }
        </style>
        <section class="vh-100 base_section">
            <div class="container  m-0 h-100">
                <div class="row d-flex align-items-center justify-content-around h-100 two_section">
                    <div class="col-md-8 col-lg-7 col-xl-8" id="particles-js">
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 second_section"
                        style="border: 2px #fff solid;padding: 10px 20px;">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div
                                class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
                                <h1 class="lead fw-bold mb-0 me-3">Welcome to TRABOTAI</p>
                            </div>
                            {{-- <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                <p class="fw-normal mb-0 me-3">Welcome to Mate Family. Please register with your personal
                                    account
                                    details:</p>
                            </div> --}}

                            <div class="divider d-flex align-items-center my-1">
                                <p class="text-center fw-bold mt-3 mb-1">Register</p>
                            </div>

                            <!-- Email input -->
                            <div class="mb-4">
                                <label class="form-label" for="form3Example3">First name</label>
                                <input type="text" id="form3Example3" class="form-control form-control-lg"
                                    @error('firstname') is-invalid @enderror" name="firstname"
                                    value="{{ old('firstname') }}" required autocomplete="firstname" autofocus
                                    placeholder="Enter your first name" />
                            </div>
                            @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="mb-4">
                                <label class="form-label" for="form3Example3">Last name</label>
                                <input type="text" id="form3Example3" class="form-control form-control-lg"
                                    @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}"
                                    required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="mb-3">
                                <label class="form-label" for="form3Example4">Date of birth</label>
                                <input type="date" id="form3Example4" class="form-control form-control-lg"
                                    @error('datenaissance') is-invalid @enderror" name="datenaissance"
                                    value="{{ old('datenaissance') }}" required autocomplete="datenaissance" autofocus>

                                @error('datenaissance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Password input -->
                            <div class="mb-3">
                                <label class="form-label" for="form3Example4">Email adress</label>
                                <input type="email" name="email" id="form3Example4" class="form-control form-control-lg"
                                    @error('email') is-invalid @enderror" value="{{ old('email') }}" required
                                    autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Password input -->
                            <div class="mb-3">
                                <label class="form-label" for="form3Example4">Password</label>
                                <input type="password" name="password" id="form3Example4"
                                    class="form-control form-control-lg" @error('password') is-invalid @enderror" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Password input -->
                            <div class="mb-3">
                                <label class="form-label" for="form3Example4">Confirm password</label>
                                <input type="password" id="form3Example4"
                                    class="form-control form-control-lg"name="password_confirmation" required
                                    autocomplete="password_confirmation">
                            </div>
                             <!-- Password input -->
                             <div class="mb-3">
                                <label class="form-label" for="form3Example4">Invitational code</label>
                                <input type="text" id="form3Example4"
                                    class="form-control form-control-lg"name="invitation_code" required
                                    autocomplete="invitation_code">
                            </div>






                            <div class="d-flex justify-content-center align-items-center
                 "
                                style="column-gap: 5px;">

                                <button type="submit" class="btn btn-primary  btn-block ">Register</button>
                                <button type="button" class="mb-2 btn btn-primary btn-block ">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End your project here-->

        <!-- MDB -->
        <script src="lgn/particles.js"></script>
        <script src="lgn/app.js"></script>
    </body>


    </body>
@endsection
