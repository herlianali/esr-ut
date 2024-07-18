@extends('layout.app')

@push('css')
@endpush

@section('menu')
    @php($menu = '2')
@endsection

@section('content')
<div class="section-header">
    <h1>Rekap Pemakaian SDA</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">SAPA ESR</div>
        <div class="breadcrumb-item">Rekap Pemakaian SDA</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Rekap Pemakaian SDA</h4>
        <a href="{{ route('surat.permohonan_surat.create') }}" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>

    </div>
    <div class="card-body">
    </div>
</div>
<div class="card">
    <div class="card-header d-flex justify-content-center">
        <h3 class="mt-3">Pemakaian Listrik Risa</h3>
        {{-- <div class="card-header-form">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div> --}}
    </div>
    <div class="card-body p-0">
        <div class="container">
            <div class="table-responsive table-bordered">
                <table class="table table-striped">
                    <thead class="bg-warning">
                        <tr class="text-center">
                            <th class="text-dark" colspan="4">2022</th>
                            <th class="text-dark" colspan="4">2023</th>
                        </tr>
                        <tr class="text-center">
                            <th class="text-dark">No</th>
                            <th class="text-dark">Bulan</th>
                            <th class="text-dark">Nominal</th>
                            <th class="text-dark">KWH</th>
                            <th class="text-dark">Bulan</th>
                            <th class="text-dark">Nominal</th>
                            <th class="text-dark">KWH</th>
                            <th class="text-dark">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        <tr>
                            <td>1.</td>
                            <td>Januari</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Febuari</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Maret</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>April</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Mei</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Juni</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Juli</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Agustus</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>September</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Oktober</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>November</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>12.</td>
                            <td>Desember</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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
<div class="card">
    <div class="card-header d-flex justify-content-center">
        <h3 class="mt-3">Pemakaian Listrik TC</h3>
        {{-- <div class="card-header-form">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div> --}}
    </div>
    <div class="card-body p-0">
        <div class="container">
            <div class="table-responsive table-bordered">
                <table class="table table-striped">
                    <thead class="bg-warning">
                        <tr class="text-center">
                            <th class="text-dark" colspan="4">2022</th>
                            <th class="text-dark" colspan="4">2023</th>
                        </tr>
                        <tr class="text-center">
                            <th class="text-dark">No</th>
                            <th class="text-dark">Bulan</th>
                            <th class="text-dark">Nominal</th>
                            <th class="text-dark">KWH</th>
                            <th class="text-dark">Bulan</th>
                            <th class="text-dark">Nominal</th>
                            <th class="text-dark">KWH</th>
                            <th class="text-dark">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        <tr>
                            <td>1.</td>
                            <td>Januari</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Febuari</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Maret</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>April</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Mei</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Juni</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Juli</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Agustus</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>September</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Oktober</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>November</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="fit">
                                <a href="{{ route('surat.permohonan_surat.show', 2) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>12.</td>
                            <td>Desember</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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