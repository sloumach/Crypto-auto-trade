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
            <div class="col-md-6 col-lg-3 col-xl-3 second_section" style="border: 2px #fff solid;padding: 10px 20px;">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center">
                  <h1 class="lead fw-bold mb-0 me-3">Welcome Folk</p>
                </div>
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="fw-normal mb-0 me-3">Welcome to Mate Family. Please login with your personal account
                    information letter</p>
                </div>
                <div class="text-center text-lg-start mt-4 pt-2">

                  <button class="btn btn-block" style="background: linear-gradient(324deg, #353b5e, #6b51df)"><i
                      class="fa fa-google-plus-square"></i> Sign in with Google</button>
                </div>
                <div class="divider d-flex align-items-center my-1">
                  <p class="text-center fw-bold mt-3 mb-1">Or</p>
                </div>

                <!-- Email input -->
                <div class="mb-4">
                  <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" />
                </div>

                <!-- Password input -->
                <div class="mb-3">
                  <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" />
                </div>

                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div>
                <div class="d-flex justify-content-center align-items-center
                 " style="column-gap: 5px;">

                  <button type="submit" class="btn btn-primary  btn-block ">Login</button>
                  <button type="button" class="mb-2 btn btn-primary btn-block ">Register</button>
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
