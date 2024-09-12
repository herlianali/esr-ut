@php
use Illuminate\Support\Facades\Auth;
$user = Auth::user() ?? '';
$user_level_id = $user->user_level_id ?? '';
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ config('app.name') }} &mdash; {{ $title ?? '' }}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/modules/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
  @stack('css')
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg bg-warning"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.html" class="navbar-brand sidebar-gone-hide">13 PW UT Digital</a>
        <div class="nav-collapse">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars fa-3x"></i></a>
          {{-- <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
            <li class="nav-item active"><a href="#" class="nav-link">Application</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Report Something</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Server Status</a></li>
          </ul> --}}
        </div>
        <form class="form-inline ml-auto">
          <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Menu Search
              </div>
              {{-- <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div> --}}
              <div class="search-item m-2">
                <i class="fas fa-address-card"></i>
                <a href="#">
                  <span>Green Card</span>
                  {{-- <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product"> --}}
                  {{-- oPhone S9 Limited Edition --}}
                </a>
              </div>
              <div class="search-item m-2">
                <i class="fas fa-envelope-open-text"></i>
                <a href="#">
                  <span>Genba </span>
                  {{-- <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7 --}}
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  {{-- <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz --}}
                </a>
              </div>
              {{-- <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div> --}}
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          
          {{-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li> --}}
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('public/stisla/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ $user->nama }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
              @if (!Route::is('dashboard'))
                <li class="nav-item">
                  <a href="#" class="nav-link"><i class="fas fa-home"></i><span>Home</span></a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fas fa-plane-departure"></i><span>Cuti</span></a>
                  <ul class="dropdown-menu">
                      <li class="nav-item"><a href="{{ route('report.cuti.index') }}" class="nav-link">Result</a></li>
                      <li class="nav-item"><a href="{{ route('report.plan.index') }}" class="nav-link">Plan</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link"><i class="fas fa-poll"></i><span>Summary 13 PW</span></a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link"><i class="fas fa-chart-bar"></i><span>Follow Up Genba</span></a>
                </li>
                <li class="nav-item dropdown {{ \Route::is('report.*') ? 'class=active' : '' }}">
                  <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="far fa-clipboard"></i><span>Questioning</span></a>
                  <ul class="dropdown-menu">
                      <li class="nav-item dropdown {{ \Route::is('report.green_card.*') ? 'class=active' : '' }}"><a href="#" class="nav-link has-dropdown">Green Card</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item {{ \Route::is('report.green_card.index') ? 'class=active' : '' }}"><a href="{{ route('report.green_card.index') }}" class="nav-link">Questioning Result</a></li>
                            <li class="nav-item {{ \Route::is('report.green_card.plan') ? 'class=active' : '' }}"><a href="{{ route('report.green_card.plan') }}" class="nav-link">Plan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Genba</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="" class="nav-link">Questioning Result</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">BBSQ Non Service</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="" class="nav-link">Questioning Result</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">BBSQ Service</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="" class="nav-link">Questioning Result</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Personal Contact</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="" class="nav-link">Questioning Result</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Safety Talk</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="#" class="nav-link">Questioning Result</a></li>
                            <li class="nav-item"><a href="{{ route('report.safety_talk.index') }}" class="nav-link">Plan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">JSA</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="#" class="nav-link">Questioning Result</a></li>
                            <li class="nav-item"><a href="{{ route('report.jsa.index') }}" class="nav-link">Plan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">P5M</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="#" class="nav-link">Questioning Result</a></li>
                            <li class="nav-item"><a href="{{ route('report.p5m.index') }}" class="nav-link">Plan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">FLPG</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="#" class="nav-link">Questioning Result</a></li>
                            <li class="nav-item"><a href="{{ route('report.flpg.index') }}" class="nav-link">Plan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Sidak Sarana</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="" class="nav-link">Questioning Result</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Sidak APD</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="" class="nav-link">Questioning Result</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Report KO</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="" class="nav-link">Questioning Result</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">HouseKeeping</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="#" class="nav-link">Questioning Result</a></li>
                            <li class="nav-item"><a href="{{ route('report.housekeeping.index') }}" class="nav-link">Plan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">SCML</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="" class="nav-link">Questioning Result</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Plan</a></li>
                        </ul>
                      </li>
                  </ul>
                </li>
                {{-- <li class="nav-item dropdown">
                  <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="far fa-clone"></i><span>Multiple Dropdown</span></a>
                  <ul class="dropdown-menu">
                      <li class="nav-item"><a href="#" class="nav-link">Not Dropdown Link</a></li>
                      <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Hover Me</a>
                      <ul class="dropdown-menu">
                          <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                          <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Link 2</a>
                          <ul class="dropdown-menu">
                              <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                              <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                              <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                          </ul>
                          </li>
                          <li class="nav-item"><a href="#" class="nav-link">Link 3</a></li>
                      </ul>
                      </li>
                  </ul>
                </li> --}}
              @endif
          </ul>
        </div>
      </nav>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header sidebar-gone-show" id="navigation">
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active m-3">
                {{-- <a href="#">Dashboard</a> --}}
                {{-- Dashboard --}}
                Hi, {{ $user->nama ?? '' }}
              </div>
              {{-- <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Top Navigation</div> --}}
            </div>
          </div>

          <div class="section-body">
            @yield('content')
            @yield('modals')
          </div>
        </section>
      </div>
      <footer class="main-footer bg-white">
        <div class="container">

        </div>
        <div class="footer-left">
          Copyright &copy; 2024 <div class="bullet"></div> Design By <a href="">ESR UT</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('public/stisla/assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('public/stisla/assets/modules/popper.js') }}"></script>
  <script src="{{ asset('public/stisla/assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('public/stisla/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/stisla/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('public/stisla/assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('public/stisla/assets/js/stisla.js') }}"></script>
  <script src="{{ asset('public/stisla/assets/modules/sweetalert/sweetalert.min.js') }}"></script>
  
  <!-- JS Libraies -->
  <script src="{{ asset('public/stisla/assets/modules/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Show the loading alert
        Swal.fire({
            title: 'Loading...',
            text: 'Please wait while the page is loading.',
            imageUrl: '{{ asset("public/img/logo_obor.png") }}',
            imageWidth: 200,
            imageHeight: 200,
            imageAlt: 'Loading',
            showConfirmButton: false,
            allowOutsideClick: false,
            timer: 1000,
            timerProgressBar: true,
            backdrop: `
                rgba(0,0,0,0.4)
                left top
                no-repeat
            `,
            didOpen: () => {
                Swal.showLoading()
            },
            willClose: () => {
                console.log('Alert is closing');
            }
        });
    });
    let getFormData = ($form) => {
        let unindexed_array = $form.serializeArray();
        let indexed_array = {};
        $.map(unindexed_array, function(n, i){
            indexed_array[n['name']] = n['value'];
        });
        return indexed_array;
    }
  </script>
  @stack('js')
  <script src="{{ asset('public/stisla/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('public/stisla/assets/js/custom.js') }}"></script>
</body>
</html>