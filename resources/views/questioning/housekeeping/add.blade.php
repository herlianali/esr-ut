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
    <h1>Housekeeping</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Form Questioning</a></div>
        <div class="breadcrumb-item">Housekeeping</div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>Housekeeping Data Form</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title pb-4">Tanggal Pelaksanaan Housekeeping</label>
                            <input type="text" class="form-control datetimepicker">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Nama Pengawas</label>
                            <small class="form-text text-muted">Nama Pengawas Yang Mendapat Target 13 Atau 9 PW</small>
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
                            <label class="section-title">Lokasi Pelaksanaan Housekeeping</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked="">
                                <label class="form-check-label" for="exampleRadios1">
                                    Office
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked="">
                                <label class="form-check-label" for="exampleRadios2">
                                    Warehouse
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked="">
                                <label class="form-check-label" for="exampleRadios2">
                                    Workshop
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Detail area yang dilakukan housekeeping</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="section-title">Dokumentasi</label>
                            <small class="form-text text-muted">Foto dokumentasi pelaksanaan housekeeping</small>
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