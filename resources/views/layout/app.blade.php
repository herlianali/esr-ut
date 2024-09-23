@php
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
$user_level_id = $user->user_level_id ?? '';
$ehs_pantau = 'https://ehspantau.unitedtractors.com/Home/';
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ config('app.name') }} &mdash; {{ $title ?? ''}}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/modules/select2/dist/css/select2.min.css') }}">

  <link rel="stylesheet" href="{{ asset('public/stisla/assets/modules/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('public/stisla/assets/modules/dropify/dist/css/dropify.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('public/stisla/assets/css/custom.css') }}">
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
      <div class="navbar-bg bg-warning"></div>
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
                  <img class="mr-3 rounded" width="30" src="{{ asset('public/stisla/assets/img/products/product-3-50.png') }} " alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ asset('public/stisla/assets/img/products/product-2-50.png') }}" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{ asset('public/stisla/assets/img/products/product-1-50.png') }}" alt="product">
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
                    <img alt="image" src="{{ asset('public/stisla/assets/img/avatar/avatar-1.png') }}" class="rounded-circle">
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
                    <img alt="image" src="{{ asset('public/stisla/assets/img/avatar/avatar-2.png') }}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('public/stisla/assets/img/avatar/avatar-3.png') }}" class="rounded-circle">
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
                    <img alt="image" src="{{ asset('public/stisla/assets/img/avatar/avatar-4.png') }}" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="{{ asset('public/stisla/assets/img/avatar/avatar-5.png') }}" class="rounded-circle">
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
            <img alt="image" src="{{ asset('public/stisla/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            {{-- <div class="d-sm-none d-lg-inline-block">Hi, User ESR</div></a> --}}
            <div class="d-sm-none d-lg-inline-block">Hi, {{ $user->nama ?? '' }}</div></a>
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
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">13 PW UT Digital</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">ESR</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li >
              <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-home"></i> <span>Home </span>
              </a>
            </li>
            @yield('menu')
            @foreach ($fitur as $item)
                <li class="{{ cek_aktif_sidebar($item->url) }}"><a class="nav-link"  href="{{ $item->url == $ehs_pantau ? $ehs_pantau : route($item->url) }}">{!! $item->icon !!} <span>{{ $item->nama }}</span></a></li>
            @endforeach
            {{-- <li><a href=""></a></li> --}}
            {{-- 
            
            @if( $menu === '2') 
              <li class="dropdown {{ \Route::is('esr_corner.*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-md"></i><span>SAPA ESR</span></a>
                <ul class="dropdown-menu">
                  <li {{ \Route::is('esr_corner.monitoring_cof.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('esr_corner.monitoring_cof.index') }}">Monitoring COF</a></li>
                  <li {{ \Route::is('esr_corner.monitoring_laporan.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('esr_corner.monitoring_laporan.index') }}">Monitoring Lapangan</a></li>
                  <li {{ \Route::is('esr_corner.monitoring_permit.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('esr_corner.monitoring_permit.index') }}">Monitoring PERMIT</a></li>
                  <li {{ \Route::is('esr_corner.rekap_link.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('esr_corner.rekap_link.index') }}" style="margin-top: 18px; margin-bottom: 18px">Rekap Link & Email Support</a></li>
                  <li {{ \Route::is('esr_corner.monitoring_program.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('esr_corner.monitoring_program.index') }}">Monitoring Program SDA</a></li>
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
              <li {{ \Route::is('sistem.user.*') || \Route::is('sistem.karyawan.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('sistem.user.index') }}"><i class="fas fa-user-cog"></i> <span>Data User</span></a></li>
              <li {{ \Route::is('sistem.pengawas.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('sistem.pengawas.index') }}"><i class="fas fa-user-shield"></i> <span>Data Pengawas</span></a></li>
              <li {{ \Route::is('sistem.sektor.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('sistem.sektor.index') }}"><i class="fas fa-building"></i> <span>Data Sektor</span></a></li>
              <li {{ \Route::is('sistem.fitur.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('sistem.fitur.index') }}"><i class="fab fa-elementor"></i> <span>Management Menu</span></a></li>
              <li {{ \Route::is('sistem.user_level.*') ? 'class=active' : '' }}><a class="nav-link" href="{{ route('sistem.user_level.index') }}"><i class="fas fa-users-cog"></i> <span>Management Hak Akses</span></a></li>
              <li ><a class="nav-link" href=""><i class="fas fa-tasks"></i> <span>Management Projects</span></a></li>
              <li ><a class="nav-link" href=""><i class="fas fa-tasks"></i> <span>Questioning Options Setting</span></a></li>
            @endif --}}
          </ul>
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
          &copy; {{ date('Y') }} <a href="#">TIM ESR UT TANJUNG</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('public/stisla/assets/modules/jquery.min.js')}}"></script>
  <script src="{{ asset('public/stisla/assets/modules/popper.js')}}"></script>
  <script src="{{ asset('public/stisla/assets/modules/tooltip.js')}}"></script>
  <script src="{{ asset('public/stisla/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('public/stisla/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset('public/stisla/assets/modules/moment.min.js')}}"></script>
  <script src="{{ asset('public/stisla/assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{ asset('public/stisla/assets/modules/jquery.sparkline.min.js')}}"></script>
  <script src="{{ asset('public/stisla/assets/modules/chart.min.js')}}"></script>
  <script src="{{ asset('public/stisla/assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('public/stisla/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
  <script src="{{ asset('public/stisla/assets/modules/select2/dist/js/select2.full.min.js')}}"></script>
  <script src="{{ asset('public/stisla/assets/modules/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  
  <!-- Page Specific JS File -->
  {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
  <script src="{{ asset('public/stisla/assets/modules/sweetalert/sweetalert.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/stisla/assets/modules/dropify/dist/js/dropify.min.js') }}"></script><!-- Page Specific JS File -->
  <script src="{{ asset('public/stisla/assets/js/page/index.js') }}"></script>
  <script src="{{ asset('public/stisla/assets/js/page/bootstrap-modal.js') }}"></script>
  {{-- document.addEventListener("DOMContentLoaded", function() {
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
  }); --}}
  <script>

    let init_form_element = () => {
        $(".select2").select2();
        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true
        });
        // $(".summernote").summernote({
        //     height: 300,
        // });
        $('.dropify').dropify();
    }
    let getFormData = ($form) => {
        let unindexed_array = $form.serializeArray();
        let indexed_array = {};
        $.map(unindexed_array, function(n, i){
            indexed_array[n['name']] = n['value'];
        });
        return indexed_array;
    }
    let getData = ($form) => {
      let formData = new FormData($form.get(0));
      let serializedData = [...formData.entries()];

      data = Object.fromEntries(entriesArray);
      return serializedData;
    }
    function add_commas(nStr) {
        nStr += '';
        let x = nStr.split('.');
        let x1 = x[0];
        let x2 = x.length > 1 ? '.' + x[1] : '';
        let rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + '.' + '$2');
        }
        return x1 + x2;
    }
    function remove_commas(nStr) {
        nStr = nStr.replace(/\./g,'');
        return nStr;
    }

  </script>
  @stack('js')
  <!-- Template JS File -->
  <script src="{{ asset('public/stisla/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('public/stisla/assets/js/custom.js') }}"></script>
  
</body>
</html>