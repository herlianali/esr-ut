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
    <h1>Safety Talk</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Form Questioning</a></div>
        <div class="breadcrumb-item">Safety Talk</div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>Safety Talk Form</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid">
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
                                <option value="1">BUMA (Mainshop)</option>
                                <option value="2">BUMA (Paringin)</option>
                                <option value="3">RISA Office</option>
                                <option value="4">RISA  UTE</option>
                                <option value="5">RISA WAREHOUSE</option>
                                <option value="6">SIS (MIA 4)</option>
                                <option value="7">SIS (KM 35B)</option>
                                <option value="8">SIS (SERA)</option>
                                <option value="9">TC</option>
                                <option value="10">PPA (WARA)</option>
                                <option value="11">Online (MS Team, Youtube, Zoom, dll)</option>
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
                            <label class="section-title">Nama Pemateri Safety Talk</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Judul Matei Safety Talk</label>
                            <input type="text" class="form-control">
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Penyelenggara Safety Talk</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked="">
                                <label class="form-check-label" for="exampleRadios1">
                                    Internal UT
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked="">
                                <label class="form-check-label" for="exampleRadios2">
                                    Eksternal Customer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked="">
                                <label class="form-check-label" for="exampleRadios2">
                                    Mandiri Mitra Kerja
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="section-title">Dokumentasi (additional)</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="card-footer">
                <div class="row justify-content-between">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary " type="reset">Reset</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush