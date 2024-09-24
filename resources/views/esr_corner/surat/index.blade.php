@extends('layout.app')

@push('css')
@endpush

@section('content')
<div class="section-header">
    <h1>Surat</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Components</a></div>
        <div class="breadcrumb-item">Table</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Permohonan Surat</h4>
        <a href="{{ route('surat.permohonan_surat.create') }}" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>

    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>List Surat</h4>
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
                            <th>
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                </div>
                            </th>
                            <th>No</th>
                            <th>Nomor Surat</th>
                            <th>Perihal</th>
                            <th>Tujuan</th>
                            <th>File</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td class="p-0 text-center">
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                </div>
                            </td>
                            <td>1</td>
                            <td>
                                LUT-S/01/5400-a/v/16
                            </td>
                            <td>Surat Permohonan Komisioning</td>
                            <td>SIS, PAMA, ADARO</td>
                            <td>
                                <i class="fas fa-file-alt fa-xl" style='font-size:48px'></i>
                                {{-- <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian"> --}}
                            </td>
                            <td><div class="badge badge-success">Completed</div></td>
                            <td>
                                <div class="row">
                                    <a href="{{ route('surat.permohonan_surat.show', 1) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                    <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                    <a href="javascript:void(0)" class="btn btn-sm m-1 btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-0 text-center">
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                    <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                </div>
                            </td>
                            <td>2</td>
                            <td class="align-middle">
                                LUT-S/002/5400-A/IX/16
                            </td>
                            <td>Surat Pengantar MCU</td>
                            <td>Tirta</td>
                            <td>
                                <i class="fas fa-file-alt fa-xl" style='font-size:48px'></i>
                            </td>
                            <td><div class="badge badge-info">Todo</div></td>
                            <td>
                                <div class="row">
                                    <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                    <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                    <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-0 text-center">
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                                    <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                </div>
                            </td>
                            <td>3</td>
                            <td class="align-middle">
                                LUT-S/003/5400-A/IX/16
                            </td>
                            <td>Surat Pengantar MCU</td>
                            <td>Tirta</td>
                            <td>
                                <i class="fas fa-file-alt fa-xl" style='font-size:48px'></i>
                            </td>
                            <td><div class="badge badge-warning">In Progress</div></td>
                            <td>
                                <div class="row">
                                    <a href="{{ route('surat.permohonan_surat.show', 3) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                    <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                    <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-0 text-center">
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                                    <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                </div>
                            </td>
                            <td>4</td>
                            <td class="align-middle">
                                LUT-S/004/5400-A/IX/16
                            </td>
                            <td>Surat Ijin Masuk Tamu</td>
                            <td>Adaro</td>
                            <td>
                                <i class="fas fa-file-alt fa-xl" style='font-size:48px'></i>
                            </td>
                            <td><div class="badge badge-success">Completed</div></td>
                            <td>
                                <div class="row">
                                    <a href="{{ route('surat.permohonan_surat.show', 4) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
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