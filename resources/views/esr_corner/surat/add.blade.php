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
        <a href="{{ url()->previous() }}" class="btn btn-icon">
            <i class="fas fa-arrow-circle-left" style="font-size:30px;"></i>
        </a>
        <h4>Permohonan Surat</h4>
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Surat</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid">
                    <form action="" method="">
                        <div class="row">
                            <div class="form-group col-md-4">
                              <label class="section-title">Jenis Surat</label>
                              <select class="form-control select2">
                                    <option value="1">Pengajuan SIMT</option>
                                    <option value="2">Surat Kuasa</option>
                                    <option value="3">Memo Internal</option>
                                    <option value="4">Surat Tugas</option>
                                    <option value="5">Surat Induksi, Re Induksi, Komisioning, dll</option>
                                    <option value="6">Surat Peringatan</option>
                              </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="section-title">Jenis TTD Surat</label>
                                <select class="form-control select2">
                                    <option value="1">Surat TTD Site Manager/PJO</option>
                                    <option value="2">Surat TTD Dept Head</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="section-title">Perihal</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="section-title">Tujuan</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="section-title">Status</label>
                                <select class="form-control select2">
                                  <option>Complate</option>
                                  <option>On Process</option>
                                  <option>Pending</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="section-title">File</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                  </div>
                            </div>
                        </div>
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
@endpush