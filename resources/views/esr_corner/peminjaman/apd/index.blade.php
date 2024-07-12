@extends('layout.app')

@push('css')
@endpush

@section('content')
<div class="section-header">
    <h1>Inventaris</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Inventaris</a></div>
        <div class="breadcrumb-item"><a href="#">Apd</a></div>
        <div class="breadcrumb-item">List</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>List Peminjaman</h4>
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>Advanced Table</h4>
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
                    <table class="table table-striped table-fit">
                        <tr>
                            {{-- <th>
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                </div>
                            </th> --}}
                            <th>No</th>
                            <th>Nama</th>
                            <th>No. Telp</th>
                            <th>Perusahaan</th>
                            <th>Barang</th>
                            <th>Tgl Peminjaman</th>
                            <th>Tgl Pengembalian</th>
                            <th>Jaminan</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Della Putri</td>
                            <td>0851231***</td>
                            <td>SMKN 1 Tanjung</td>
                            <td>
                                <span class="badge badge-info m-1">sepatu</span>
                                <span class="badge badge-info m-1">helm</span>
                                <span class="badge badge-info m-1">rompi</span>
                            </td>
                            <td>02 Agustus 22</td>
                            <td>03 Agustus 22</td>
                            <td></td>
                            <td>Anak PKL ADM GA</td>
                            <td class="fit">
                                <div class="row">
                                    <a href="#" class="btn btn-sm m-1 btn-primary">Detail</a>
                                    <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                    <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Raudatun Nisa</td>
                            <td>0851231***</td>
                            <td>SMKN 1 Tanjung</td>
                            <td>
                                <span class="badge badge-info m-1">sepatu</span>
                                <span class="badge badge-info m-1">helm</span>
                                <span class="badge badge-info m-1">rompi</span>
                            </td>
                            <td>02 Agustus 22</td>
                            <td>04 Agustus 22</td>
                            <td></td>
                            <td>Anak PKL ADM GA</td>
                            <td class="fit">
                                <div class="row">
                                    <a href="#" class="btn btn-sm m-1 btn-primary">Detail</a>
                                    <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                    <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mukarramah</td>
                            <td>0851231***</td>
                            <td>SMKN 1 Tanjung</td>
                            <td>
                                <span class="badge badge-info m-1">sepatu</span>
                                <span class="badge badge-info m-1">helm</span>
                                <span class="badge badge-info m-1">rompi</span>
                            </td>
                            <td>02 Agustus 22</td>
                            <td>04 Agustus 22</td>
                            <td></td>
                            <td>Anak PKL ADM GA</td>
                            <td class="fit">
                                <div class="row">
                                    <a href="#" class="btn btn-sm m-1 btn-primary">Detail</a>
                                    <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                    <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Siti Rahmah</td>
                            <td>0851231***</td>
                            <td>SMKN 1 Tanjung</td>
                            <td>
                                <span class="badge badge-info m-1">sepatu</span>
                                <span class="badge badge-info m-1">helm</span>
                                <span class="badge badge-info m-1">rompi</span>
                            </td>
                            <td>02 Agustus 22</td>
                            <td>03 Agustus 22</td>
                            <td></td>
                            <td>Anak PKL ADM GA</td>
                            <td class="fit">
                                <div class="row">
                                    <a href="#" class="btn btn-sm m-1 btn-primary">Detail</a>
                                    <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                    <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                                </div>
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