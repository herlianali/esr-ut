@extends('layout.app')

@push('css')
    @php($menu = '4')
@endpush

@section('content')
<div class="section-header">
    <h1>Pegawai</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Employee</a></div>
        <div class="breadcrumb-item">Pegawai</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Data Pegawasi</h4>
        <a href="#" onclick="add_data()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>

    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>List Pegawai</h4>
                <div class="card-header-form" id="pegawai_search">
                    <form id="search_form">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" name="nik" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body p-0" id="pegawai_table"></div>
        </div>
    </div>
</div>
<form class="modal-part" id="edit_form">
    <div class="form-group">
      <label>Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-envelope"></i>
          </div>
        </div>
        <input type="text" class="form-control" placeholder="Email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label>Password</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-lock"></i>
          </div>
        </div>
        <input type="password" class="form-control" placeholder="Password" name="password">
      </div>
    </div>
    <div class="form-group mb-0">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
        <label class="custom-control-label" for="remember-me">Remember Me</label>
      </div>
    </div>
</form>
@endsection

@push('js')
<script>
    // init_form_element();

    $pegawai_data = $('#pegawai_data');
    $pegawai_search = $('#pegawai_search');
    $pegawai_search.hide();
    toggle_search = () => {
        $pegawai_search.toggle();
    }

    $search_form = $('#search_form');
    $pegawai_table = $('#pegawai_table');
    search_pegawai = (page = 1) => {
        let data = getFormData($search_form)
        $.post("{{ route('employee.karyawan.search') }}", data, (result) => {
            $pegawai_table.html(result);
        }).fail((xhr) => {
            $pegawai_table.html(xhr.responseText);
        })
    }

    search_pegawai();
</script>
@endpush