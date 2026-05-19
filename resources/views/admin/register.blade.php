<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset ('admin/css/app.min.css')}}">
  <link rel="stylesheet" href="{{ asset ('admin/bundles/bootstrap-social/bootstrap-social.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset ('admin/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset ('admin/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset ('admin/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='{{ asset ('admin/img/favicon.ico')}}' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>
              <div class="card-body">

                <form action="{{ route('register.store')}}" class="needs-validation"  method="POST" enctype="multipart/form-data">
                  @csrf 

                   {{-- Name --}}
                  <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name" tabindex="1" autofocus>
                        <div class="invalid-feedback">
                        Please fill in your name
                        </div>
                  </div>

                  {{-- Email --}}
                  <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" tabindex="1" autofocus>
                        <div class="invalid-feedback">
                        Please fill in your email
                        </div>
                  </div>

                  {{-- Image --}}
                  <div class="form-group">
                        <label for="image">Image For your Profile</label>
                        <input id="image" type="file" class="form-control" name="image" tabindex="1" autofocus>
                        <div class="invalid-feedback">
                            Please fill in your email
                        </div>
                  </div>

                  {{-- Password --}}
                  <div class="form-group">

                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                    </div>

                    <input id="password" type="password" class="form-control" name="password">
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>

                  </div>

                  {{-- Password Confirmation--}}
                  <div class="form-group">

                    <div class="d-block">
                      <label for="password" class="control-label">Password Confirmation</label>
                    </div>

                    <input id="password" type="password" class="form-control" name="password_confirmation">
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>

                  </div>


                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>



                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Register
                    </button>
                  </div>

                </form>
                <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-twitter">
                      <span class="fab fa-twitter"></span> Twitter
                    </a>
                  </div>
                </div>
                <a href="{{ route('index.page')}}">Home</a>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              <a href="{{ route('login.page')}}">Login</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset ('admin/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{ asset ('admin/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset ('admin/js/custom.js')}}"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>