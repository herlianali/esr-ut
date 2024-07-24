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
    <h1>JSA</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Form Questioning</a></div>
        <div class="breadcrumb-item">JSA</div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>JSA Form</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid">
                    <section>
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Tanggal Pelaksanaan Safety Talk</label>
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
                                <label class="section-title">Lokasi Pelaksanaan Safety Talk</label>
                                <select class="form-control select2">
                                    <option value="1">Pengawas UT (Supervisor / Dept Head)</option>
                                    <option value="2">Pengawas UT (Leader Mekanik)</option>
                                    <option value="3">Mitra Kerja</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="text-right">
                            {{-- <button class="btn btn-primary mr-1 next-button" >next</button> --}}
                            <button class="btn btn-primary mr-1 next-button" >next</button>
                        </div>
                    </section>
                    <section class="hide" id="section_2">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Review JSA</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Jenis Review</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked="">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Review JSA yang sudah ada
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2" checked="">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Membuat JSA baru
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Judul JSA yang dilakukan review</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Nomor JSA yang dilakukan review</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Jumlah pekerja yang diberikan sosialisasi JSA</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Hasil Review</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </section>
                    <section class="hide" id="section_3">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Sosialisasi JSA</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Shift</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked="">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Day / Siang
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2" checked="">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Night / Malam
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Lokasi pelaksanaan sosialisasi JSA</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Nomor JSA yang dilakukan review</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="" class="section-title">Foto dokumentasi pelaksanaan sosialisasi jsa (foto/absensi)</label>
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
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush