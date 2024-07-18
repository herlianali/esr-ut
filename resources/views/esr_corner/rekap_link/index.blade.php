@extends('layout.app')

@push('css')
@endpush

@section('menu')
    @php($menu = '2')
@endsection

@section('content')
<div class="section-header">
    <h1>Monitoring Permit</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">SAPA ESR</div>
        <div class="breadcrumb-item">Monitoring Permit</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Monitoring Permit</h4>
        <a href="{{ route('surat.permohonan_surat.create') }}" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>

    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4></h4>
                {{-- <h4>List Surat</h4> --}}
                <div class="card-header-form">
                    <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive table-bordered">
                    <table class="table table-striped">
                        <thead class="bg-warning">
                            <tr class="text-center">
                                <th class="text-dark">No</th>
                                <th class="text-dark">Fungsi</th>
                                <th class="text-dark">Tujuan Link</th>
                                <th class="text-dark">Link</th>
                                <th class="text-dark">Link Support</th>
                                <th class="text-dark">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            <tr>
                                <td>1</td>
                                <td>Laporan Sustainability UTCM</td>
                                <td>UtdO</td>
                                <td>http://bit.ly/DataSustainabilityUTCM*.*</td>
                                <td></td>
                                <td class="fit">
                                    <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                    <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                    <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
@endpush