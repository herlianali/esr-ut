@extends('layout.app')

@push('css')
@php($menu = '4')
@endpush

@section('content')
<div class="section-header">
    <h1>Pegawai</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Form Pegawai</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <a href="{{ url()->previous() }}" class="btn btn-icon">
            <i class="fas fa-arrow-circle-left" style="font-size:30px;"></i>
        </a>
        <h4>Permohonan Data Pegawai Baru</h4>
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Pegawai</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid">
                    <form action="" method="">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="section-title">Nik</label>
                                <input type="text" class="form-control" name="nik" require>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="section-title">Nama</label>
                                <input type="text" class="form-control" name="nama" require>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="section-title">Jenis Kelamin</label>
                                <select class="form-control select2" name="jenis_kelamin">
                                    <option value="1">Laki - Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="section-title">Foto</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="foto">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="section-title">Alamat</label>
                                <textarea class="form-control" name="alamat"></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="section-title">Status</label>
                                <select class="form-control select2" name="status">
                                    <option value="1">Aktif</option>
                                    <option value="2">Cuti</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="section-title">username</label>
                                <input type="text" class="form-control" name="Username" require>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="section-title">Password</label>
                                <input type="text" class="form-control" name="password" require>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            <button class="btn btn-secondary" type="reset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    init_form_element();
</script>
@endpush