<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ config('app.name') }} &mdash; Login</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('public/stisla/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/stisla/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('public/stisla/assets/modules/bootstrap-social/bootstrap-social.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('public/stisla/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('public/stisla/assets/css/components.css')}}">
  <link rel="stylesheet" href="{{asset('public/stisla/assets/css/custom.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{asset('public/img/logo_obor.png')}}" alt="logo" width="120" class="shadow-light rounded-circle bg-white">
            </div>

            <div class="card card-warning">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('login_proses') }}" class="needs-validation" novalidate="">
                {{-- <form method="GET" action="{{ route('dashboard') }}" class="needs-validation" novalidate=""> --}}
                  @csrf
                  @if ($errors->any())
                      <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                          <ul class="mb-0 pl-0">
                              @foreach ($errors->all() as $error)
                                  <li style="list-style: none;">{{ $error }}</li>
                              @endforeach
                          </ul>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                      </div>
                  @endif
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                      <div class="input-group">
                          <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                          <div class="input-group-append">
                              <button type="button" class="btn btn-outline-light" id="togglePassword">
                                  <i class="fa fa-eye text-dark"></i>
                              </button>
                          </div>
                      </div>
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
                    <button type="submit" class="btn btn-warning btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                

              </div>
            </div>
            
            <div class="simple-footer">
              <img src="{{asset('public/img/Logo_ehs.png')}}" alt="logo" width="200" class="img-fluid" style="border-radius: 45%">
              {{-- Copyright &copy; ESR UT --}}
            </div>
            
          </div>
        </div>
      </div>
      
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('public/stisla/assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('public/stisla/assets/modules/popper.js')}}"></script>
  <script src="{{asset('public/stisla/assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('public/stisla/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/stisla/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('public/stisla/assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('public/stisla/assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  <script>
    document.getElementById('togglePassword').addEventListener('click', function (e) {
        var password = document.getElementById('password');
        var icon = this.querySelector('i');
        if (password.type === 'password') {
            password.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            password.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
  </script>
  <!-- Template JS File -->
  <script src="{{ asset('public/stisla/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('public/stisla/assets/js/custom.js') }}"></script>
</body>
</html>