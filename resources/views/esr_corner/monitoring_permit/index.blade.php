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
                    <table class="table table-striped" style="font-size: 10px">
                        <thead class="bg-warning">
                            <tr class="text-center">
                                <th class="text-dark">No</th>
                                <th class="text-dark">Nama</th>
                                <th class="text-dark">Jabatan</th>
                                <th class="text-dark">Perusahaan</th>
                                <th class="text-dark">Tanggal Pengajuan</th>
                                <th class="text-dark">Verifikasi berkas dan f/b email UT</th>
                                <th class="text-dark">Tim MA entry ke adago</th>
                                <th class="text-dark">Tanggal Induksi Baru</th>
                                <th class="text-dark">Req Cetak Permit</th>
                                <th class="text-dark">Permit Cetak</th>
                                <th class="text-dark">Permit Berlaku s/d</th>
                                <th class="text-dark">Pendaftaran Training BLS BFF</th>
                                <th class="text-dark">Jadwal Training BLS BFF</th>
                                <th class="text-dark">Hasil Training Release</th>
                                <th class="text-dark">Hasil Di upload ke ADAGO</th>
                                <th class="text-dark">Req Permit Permanent</th>
                                <th class="text-dark">Permit Permanent</th>
                                <th class="text-dark">Permit Permanent Cetak</th>
                                <th class="text-dark">Keterangan</th>
                                <th class="text-dark">Lokasi</th>
                                <th class="text-dark">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            <tr>
                                <td>1.</td>
                                <td>Cahyana Dwihana</td>
                                <td>Site Manager</td>
                                <td>PT MULTI ARDECON - UT</td>
                                <td>8 Jan 24</td>
                                <td>8 Jan 24</td>
                                <td></td>
                                <td>12 Jan 24</td>
                                <td>15 Jan 24</td>
                                <td>17 Jan 24</td>
                                <td>12 Jan 24</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Permit Berlaku sd. 12 Jan 2025</td>
                                <td><b>Permit Area Terbatas Risa</b></td>
                                <td class="fit">
                                    <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                    <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                    <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>M. Rizky Prima Putra Arsil</td>
                                <td>Surveyor</td>
                                <td>PT MULTI ARDECON - UT</td>
                                <td>8 Jan 24</td>
                                <td>8 Jan 24</td>
                                <td></td>
                                <td>12 Jan 24</td>
                                <td>15 Jan 24</td>
                                <td>17 Jan 24</td>
                                <td>12 Jan 24</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Permit Berlaku sd. 12 Jan 2025</td>
                                <td><b>SIS SERA</b></td>
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