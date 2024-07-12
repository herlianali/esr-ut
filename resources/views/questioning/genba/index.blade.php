@extends('layout.app')

@push('css')
@endpush

@section('content')
<div class="section-header">
    <h1>Genba</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Genba</a></div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>List Data Genba</h4>
        <a href="{{ route('genba.add') }}" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>

    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>
                    {{-- List Genba --}}
                </h4>
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
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Tanggal & Waktu</th>
                            <th>Area Genba</th>
                            <th>Lokasi Pelaksanaan</th>
                            <th>Nama Pengawas</th>
                            <th>Deskripsi Temuan /Deviasi TINDAKAN Tidak Aman</th>
                            <th>Kategori Temuan /Deviasi TINDAKAN Tidak Aman</th>
                            <th>Usulan Tindakan/Rekomendasi Perbaikan atas TINDAKAN Tidak Aman</th>
                            <th>Foto Temuan TINDAKAN Tidak Aman (jika ada)</th>
                            <th>Apa follow up yang sudah anda lakukan atas TINDAKAN Tidak Aman ?</th>
                            <th>Penyelenggara Genba</th>
                            <th>Dokumentasi Keikutsertaan Genba (additional)</th>
                            <th>Deskripsi Temuan /Deviasi KONDISI Tidak Aman</th>
                            <th>Kategori Temuan /Deviasi KONDISI Tidak Aman</th>
                            <th>Usulan Tindakan/Rekomendasi Perbaikan atas KONDISI Tidak Aman</th>
                            <th>Foto Temuan KONDISI Tidak Aman</th>
                            <th>Apa follow up yang sudah anda lakukan KONDISI Tidak Aman ?</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>3/9/2022 13:44:08</td>
                            <td>Warehouse</td>
                            <td>Warehouse TJB,TTN</td>
                            <td>AHMAD RIFAI</td>
                            <td>Area 916 overload</td>
                            <td>House Keeping</td>
                            <td>Info ke tim COP Untuk segera supply area 916 ke customer</td>
                            <td></td>
                            <td>Melaporkan ke PIC terkait karena bukan kewenangan saya</td>
                            <td></td>
                            <td></td>
                            <td>Area 916 overload</td>
                            <td>House Keeping</td>
                            <td>Koordinasi dg COP Untuk segera supply ke customer</td>
                            <td></td>
                            <td>Melaporkan ke PIC terkait karena bukan kewenangan saya</td>
                            <td class="fit">
                                <a href="#" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>3/9/2022 13:44:08</td>
                            <td>Warehouse</td>
                            <td>Warehouse TJB,TTN</td>
                            <td>AHMAD RIFAI</td>
                            <td>Area 916 overload</td>
                            <td>House Keeping</td>
                            <td>Info ke tim COP Untuk segera supply area 916 ke customer</td>
                            <td></td>
                            <td>Melaporkan ke PIC terkait karena bukan kewenangan saya</td>
                            <td></td>
                            <td></td>
                            <td>Area 916 overload</td>
                            <td>House Keeping</td>
                            <td>Koordinasi dg COP Untuk segera supply ke customer</td>
                            <td></td>
                            <td>Melaporkan ke PIC terkait karena bukan kewenangan saya</td>
                            <td>
                                <a href="#" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>3/9/2022 13:44:08</td>
                            <td>Warehouse</td>
                            <td>Warehouse TJB,TTN</td>
                            <td>AHMAD RIFAI</td>
                            <td>Area 916 overload</td>
                            <td>House Keeping</td>
                            <td>Info ke tim COP Untuk segera supply area 916 ke customer</td>
                            <td></td>
                            <td>Melaporkan ke PIC terkait karena bukan kewenangan saya</td>
                            <td></td>
                            <td></td>
                            <td>Area 916 overload</td>
                            <td>House Keeping</td>
                            <td>Koordinasi dg COP Untuk segera supply ke customer</td>
                            <td></td>
                            <td>Melaporkan ke PIC terkait karena bukan kewenangan saya</td>
                            <td>
                                <a href="#" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
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