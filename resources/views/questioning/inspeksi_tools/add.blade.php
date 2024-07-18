@extends('layout.app')

@push('css')
<style>
    .hide {
        display: none;
    }
</style>
@endpush

@section('menu')
    @php($menu = '1')
@endsection

@section('content')
<div class="section-header">
    <h1>Inspeksi Tools</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Form Questioning</a></div>
        <div class="breadcrumb-item">Inspeksi Tools</div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>Report Laporan KO dan Inspeksi Tools Data Form</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Tanggal</label>
                            <input type="text" class="form-control datetimepicker">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Nama Pengawas</label>
                            <select class="form-control select2">
                                <option value="1">HERI PRIYO MAHARGYO</option>
                                <option value="2">RONIE PERMANA</option>
                                <option value="3">AGUS HARIYADI</option>
                                <option value="4">HARYONO</option>
                                <option value="5">WISNU PURA WIJAYANTO</option>
                                <option value="6">ARIWANSA</option>
                                <option value="7">SYAMSUL PURNOMO</option>
                                <option value="8">JAIMAN</option>
                                <option value="9">DENI EKO MUKTI</option>
                                <option value="10">ACHMAD MAULANA SYAHRIL</option>
                                <option value="11">BAGYO SETYANTO</option>
                                <option value="12">GANJAR WICAKSONO</option>
                                <option value="13">NANO</option>
                                <option value="14">SUKRISNO</option>
                                <option value="15">AGUNG KRISMANTO</option>
                                <option value="16">EKO AGUS PRIBADI</option>
                                <option value="17">WAHYU HADI SAFRUDIN</option>
                                <option value="18">ADI SETIADI</option>
                                <option value="19">TRI MARJUKI</option>
                                <option value="20">ALDI SATRIO</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Posisi Anda</label>
                            <select class="form-control select2">
                                <option value="1">Dept Head UT</option>
                                <option value="2">Supervisor UT</option>
                                <option value="3">PJO Mitra / PIC ESR Mitra</option>
                                <option value="4">Pengawas Mitra</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Laporan KO</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Apakah laporan KO bulan sebelumnya sudah dibuat dan dikirim ke PIC KO (pak Kholik) ?</label>
                            <small class="form-text text-muted">Laporan KO wajib dibuat masing-masing departemen dan mitra kerja setiap bulannya, dan dikirimkan ke PIC KO paling lambat tanggal 5 setiap bulannya.</small>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked="">
                                <label class="form-check-label" for="exampleRadios1">
                                    YA
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked="">
                                <label class="form-check-label" for="exampleRadios2">
                                    TIDAK
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Tanggal Pengiriman Laporan KO ke PIC KO</label>
                            <input type="text" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Inspeksi Tools</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Apakah Inspeksi Tools Telah Dilaksanakan</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked="">
                                <label class="form-check-label" for="exampleRadios1">
                                    YA
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked="">
                                <label class="form-check-label" for="exampleRadios2">
                                    TIDAK
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title pb-4">Tanggal Pelaksanaan Inspeksi Tools Bulan Ini</label>
                            <input type="text" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Jenis Tools Yang Di Inspeksi</label>
                            <small class="form-text text-muted">Tuliskan Jenis Tools Yang Diinspeksi Sesuai Checklist Yang Diisi</small>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Deviasi Yang Ditemukan (Jika ada)</label>
                            <small class="form-text text-muted">Tuliskan dengan nomor urut jika deviasi yang ditemukan lebih dari 1. Tulis "Tidak Ada Deviasi" jika tidak ditemukan deviasi.</small>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="section-title">Dokumentasi pelaksanaan inspeksi tools (foto atau scan form chekclist inspeksi tools yang sudah ditandatangani oleh tool keeper dan pengawas ybs)</label>
                            <small class="form-text text-muted">Untuk non service, maka checklist disesuaikan dengan checklist laporan KO yang sudah distandarkan. Segera hubungi PIC KO jika mengalami kesulitan dalam hal checklist dan pengisiannya.</small>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        <button class="btn btn-secondary " type="reset">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        init_form_element()
    </script>
@endpush