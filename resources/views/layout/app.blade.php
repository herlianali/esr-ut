<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Ecommerce Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('stisla/assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/assets/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('stisla/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('stisla/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/assets/css/custom.css') }}">
  @stack('css')
  <!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body class="sidebar-mini">
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
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
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ asset('stisla/assets/img/products/product-3-50.png') }} " alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ asset('stisla/assets/img/products/product-2-50.png') }}" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ asset('stisla/assets/img/products/product-1-50.png') }}" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
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
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('stisla/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
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
                    <img alt="image" src="{{ asset('stisla/assets/img/avatar/avatar-2.png') }}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('stisla/assets/img/avatar/avatar-3.png') }}" class="rounded-circle">
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
                    <img alt="image" src="{{ asset('stisla/assets/img/avatar/avatar-4.png') }}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('stisla/assets/img/avatar/avatar-5.png') }}" class="rounded-circle">
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
          </li>
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
            <img alt="image" src="{{ asset('stisla/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, User ESR</div></a>
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
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">13 PW UT Digital</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">ESR</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            @yield('menu')
            
            @if( !$menu === '1' )
              <li {{ \Route::is('dashboard') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-th"></i> <span>Dashboard</span></a></li>
              <li ><a class="nav-link" href="{{ route('surat') }}"><i class="fas fa-envelope-open-text"></i> <span>Genba </span></a></li>
              <li ><a class="nav-link" href=""><i class="fas fa-envelope-open-text"></i> <span>BBSQ </span></a></li>
            @endif
            @if( $menu === '1') 
              <li {{ \Route::is('green_card.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('green_card.add') }}"><i class="fas fa-address-card"></i> <span>Green Card </span></a></li>
              <li {{ \Route::is('genba.*') ? 'class=active' : '' }} ><a class="nav-link" href="{{ route('genba.add') }}"><i class="fas fa-envelope-open-text"></i> <span>Genba </span></a></li>
              <li {{ \Route::is('bbsq_service.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('bbsq_service.add') }}"><i class="fas fa-user-check"></i> <span>BBSQ Service </span></a></li>
              <li {{ \Route::is('bbsq_non_service.*') ? 'class=active' : '' }} ><a class="nav-link" href="{{ route('bbsq_non_service.add') }}"><i class="fas fa-clipboard-check"></i> <span>BBSQ Non Service </span></a></li>
              <li {{ \Route::is('personal_contact.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('personal_contact.add') }}"><i class="fas fa-people-carry"></i> <span>Personal Contact</span></a></li>
              <li {{ \Route::is('safety_talk.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('safety_talk.add') }}"><i class="fas fa-chalkboard-teacher"></i> <span>Safety Talk</span></a></li>
              <li {{ \Route::is('jsa.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('jsa.add') }}"><i class="fas fa-file-signature"></i> <span>JSA</span></a></li>
              <li ><a class="nav-link" href=""><i class="fas fa-chart-line"></i> <span>P5M</span></a></li>
              <li ><a class="nav-link" href=""><i class="fas fa-truck-pickup"></i> <span>Inspeksi / Sidak Sarana</span></a></li>
              <li ><a class="nav-link" href=""><i class="fas fa-clipboard-list"></i> <span>Audit APD</span></a></li>
              <li ><a class="nav-link" href=""><i class="fas fa-toolbox"></i> <span>Inspeksi Tools</span></a></li>
              <li ><a class="nav-link" href=""><i class="fas fa-person-booth"></i> <span>Housekeeping</span></a></li>
              <li ><a class="nav-link" href=""><i class="fas fa-users"></i> <span>SCML</span></a></li>
            @endif
            @if( $menu === '2') 
            <li class="dropdown ">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-md"></i><span>SAPA ESR</span></a>
              <ul class="dropdown-menu">
                <li ><a class="nav-link" href="">Monitoring COF</a></li>
                <li ><a class="nav-link" href="">Monitoring Lapangan</a></li>
                <li ><a class="nav-link" href="">Monitoring PERMIT</a></li>
                <li ><a class="nav-link" href="" style="margin-top: 18px; margin-bottom: 18px">Rekap Link & Email Support</a></li>
                <li ><a class="nav-link" href="">Monitoring Program SDA</a></li>
              </ul>
            </li>
            <li class="dropdown ">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-folder-open"></i><span>Rekap Dokumen KPLH</span></a>
              <ul class="dropdown-menu">
                <li ><a class="nav-link" href="">Persyaratan SIM-T</a></li>
                <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Persyaratan ijin masuk</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a href="#" class="nav-link">Adaro</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Balangan Coal</a></li>
                  </ul>
                </li>
                <li ><a class="nav-link" href="" style="margin-top: 18px; margin-bottom: 18px">persyaratan Perubahan Permit</a></li>
                <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Dokumen SOP</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a href="#" class="nav-link">Internal</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">External</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            
            <li class="dropdown ">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-shield"></i><span>ESR Update</span></a>
              <ul class="dropdown-menu">
                <li ><a class="nav-link" href="">Materi Safety Talk</a></li>
                <li ><a class="nav-link" href="">Materi Campaign KPLH</a></li>
                <li ><a class="nav-link" href="">Rekap Buletin ESG</a></li>
                <li ><a class="nav-link" href="">Roster Cuti</a></li>
              </ul>
            </li>
            <li {{ \Route::is('surat') || \Route::is('surat.permohonan_surat.*')  ? 'class=active' : '' }}><a class="nav-link" href="{{ route('surat.permohonan_surat.index') }}"><i class="fas fa-envelope-open-text"></i> <span>Surat</span></a></li>
            <li class="dropdown {{ \Route::is('inventaris.*') ? 'active' : '' }}">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-boxes"></i><span>Inventaris</span></a>
              <ul class="dropdown-menu">
                <li {{ \Route::is('inventaris.peminjaman_apd.*') ? 'class=active' : '' }}><a class="nav-link" href="{{route('inventaris.peminjaman_apd.index')}}">APD</a></li>
              </ul>
            </li>
            @endif
            @if($menu === '4')
              <li {{ \Route::is('employee.user.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('employee.user.index') }}"><i class="fas fa-user-cog"></i> <span>Management User</span></a></li>
              <li ><a class="nav-link" href=""><i class="fas fa-user-tie"></i> <span>Pengawas</span></a></li>
              <li ><a class="nav-link" href=""><i class="fas fa-tasks"></i> <span>Management Projects</span></a></li>
              
            @endif

          </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            @yield('content')
          
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2024 <div class="bullet"></div> Design By <a href="">ESR UT</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('stisla/assets/modules/jquery.min.js')}}"></script>
  <script src="{{ asset('stisla/assets/modules/popper.js')}}"></script>
  <script src="{{ asset('stisla/assets/modules/tooltip.js')}}"></script>
  <script src="{{ asset('stisla/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('stisla/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset('stisla/assets/modules/moment.min.js')}}"></script>
  <script src="{{ asset('stisla/assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{ asset('stisla/assets/modules/jquery.sparkline.min.js')}}"></script>
  <script src="{{ asset('stisla/assets/modules/chart.min.js')}}"></script>
  <script src="{{ asset('stisla/assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('stisla/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
  
  <!-- Page Specific JS File -->
  <script src="{{ asset('stisla/assets/js/page/index.js') }}"></script>
  <script src="{{ asset('stisla/assets/js/page/bootstrap-modal.js') }}"></script>
  @stack('js')

  
  <!-- Template JS File -->
  <script src="{{ asset('stisla/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('stisla/assets/js/custom.js') }}"></script>
  
</body>
</html>