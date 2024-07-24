@extends('layout.app')

@push('css')
@endpush

@section('menu')
    @php($menu = '2')
@endsection

@section('content')
<div class="section-header">
    <h1>Monitoring Laporan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">SAPA ESR</div>
        <div class="breadcrumb-item">Monitoring Laporan</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Monitoring Laporan</h4>
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
                                <th rowspan="2" class="text-dark">No</th>
                                <th rowspan="2" class="text-dark">Jenis Laporan</th>
                                <th rowspan="2" class="text-dark">Frekuensi</th>
                                <th rowspan="2" class="text-dark">Tujuan Pelaporan</th>
                                <th rowspan="2" class="text-dark">Tanggal Maksimal Pelaporan</th>
                                <th rowspan="2" class="text-dark">PIC</th>
                                <th colspan="12" class="text-dark">Status Laporan</th>
                                <th rowspan="2" class="text-dark">Action</th>
                            </tr>
                            <tr>
                                <th class="text-dark">Januari</th>
                                <th class="text-dark">Febuari</th>
                                <th class="text-dark">Maret</th>
                                <th class="text-dark">April</th>
                                <th class="text-dark">Mei</th>
                                <th class="text-dark">Juni</th>
                                <th class="text-dark">Juli</th>
                                <th class="text-dark">Agustus</th>
                                <th class="text-dark">September</th>
                                <th class="text-dark">Oktober</th>
                                <th class="text-dark">November</th>
                                <th class="text-dark">Desember</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Laporan Statistik EHS</td>
                                <td>Mounthly</td>
                                <td>Head Office</td>
                                <td>5</td>
                                <td>MAK</td>
                                <td>02 Feb 2022</td>
                                <td>01 Mar 2022</td>
                                <td>02 Apr 2022</td>
                                <td>01 May 2022</td>
                                <td>02 Jun 2022</td>
                                <td>01 Jul 2022</td>
                                <td>02 Aug 2022</td>
                                <td>01 Sep 2022</td>
                                <td>02 Okt 2022</td>
                                <td>01 Nov 2022</td>
                                <td>02 Des 2022</td>
                                <td>01 Jan 2022</td>
                                <td class="fit">
                                    <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                    <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                    <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Laporan SDA</td>
                                <td>Mounthly</td>
                                <td>Head Office</td>
                                <td>15</td>
                                <td>SAR</td>
                                <td>14 Feb 2022</td>
                                <td>11 Mar 2022</td>
                                <td>08 Apr 2022</td>
                                <td>13 May 2022</td>
                                <td>09 Jun 2022</td>
                                <td>04 Jul 2022</td>
                                <td>12 Aug 2022</td>
                                <td>09 Sep 2022</td>
                                <td>15 Okt 2022</td>
                                <td><span class="badge bg-danger text-white">Closed</span></td>
                                <td><span class="badge bg-danger text-white">Closed</span></td>
                                <td><span class="badge bg-success text-white">Open</span></td>
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