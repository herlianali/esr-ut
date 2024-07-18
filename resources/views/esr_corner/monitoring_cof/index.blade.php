@extends('layout.app')

@push('css')
@endpush

@section('menu')
    @php($menu = '2')
@endsection

@section('content')
<div class="section-header">
    <h1>Monitoring COF</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">SAPA ESR</div>
        <div class="breadcrumb-item">Monitoring COF</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Monitoring COF</h4>
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
                    <table class="table table-striped" style="font-size: 10px">
                        <thead class="bg-info">
                            <tr class="text-center">
                                <th class="text-dark">No</th>
                                <th class="text-dark">Nama Karyawan MCU</th>
                                <th class="text-dark">NRP</th>
                                <th class="text-dark">Perusahaan</th>
                                <th class="text-dark">No MCU</th>
                                <th class="text-dark">Tanggal MCU</th>
                                <th class="text-dark">Tanggal Upload MCU</th>
                                <th class="text-dark">Nama Pengirim Hard Copy</th>
                                <th class="text-dark">Area Kerja</th>
                                <th class="text-dark">Tanggal Terima MCU</th>
                                <th class="text-dark">Tanggal COF Ready</th>
                                <th class="text-dark">Mecical Confidetial (Analisa Dan Rekomendasi Hasi MCU)</th>
                                <th class="text-dark">Hasil COF</th>
                                <th class="text-dark">Due Date F/U mcu</th>
                                <th class="text-dark">Tanggal Submit F/U MCU</th>
                                <th class="text-dark">Status</th>
                                <th class="text-dark">Keterangan</th>
                                <th class="text-dark">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-dark">1</td>
                                <td class="text-dark">Mursidah</td>
                                <td class="text-dark">-</td>
                                <td class="text-dark">PT. BP</td>
                                <td class="text-dark">1137</td>
                                <td class="text-dark">14 Okt 2022</td>
                                <td class="text-dark">21 Des 2022</td>
                                <td class="text-dark">Erlando Bintoro</td>
                                <td class="text-dark">Tanjung</td>
                                <td class="text-dark">22 Des 2022</td>
                                <td class="text-dark">24 Jan 2023</td>
                                <td class="text-dark"></td>
                                <td class="text-dark">FIT</td>
                                <td class="text-dark">-</td>
                                <td class="text-dark"></td>
                                <td class="text-dark"></td>
                                <td class="text-dark"></td>
                                <td class="fit">
                                    {{-- <div class="row"> --}}
                                        <a href="" class="btn btn-sm m-1 btn-primary">Detail</a>
                                        <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                        <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                                    {{-- </div> --}}
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