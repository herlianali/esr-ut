@extends('layout.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('stisla/assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
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
    <h1>Genba</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Genba</a></div>
        <div class="breadcrumb-item">Add</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <a href="{{ url()->previous() }}" class="btn btn-icon">
            <i class="fas fa-arrow-circle-left" style="font-size:30px;"></i>
        </a>
        <h4>Tambah Data Genba</h4>
    </div>
    <div class="card-body">
        <div class="container">   
            {{-- <form action=""> --}}
                <section>
                    <div class="row normalTopPadding">
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Tanggal Pelaksanaan Genba</label>
                            <input type="text" class="form-control datetimepicker">
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Area Genba</label>
                            <select class="form-control select2">
                                <option value="1">office</option>
                                <option value="2">workshop</option>
                                <option value="3">field</option>
                                <option value="4">warehouse</option>
                                <option value="5">catering</option>
                                <option value="6">mess</option>
                        </select>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Lokasi Pelaksanaan</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-12 col-12">
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
                    </div>
                    <hr>
                    <div class="text-right">
                        {{-- <button class="btn btn-primary mr-1 next-button" >next</button> --}}
                        <button class="btn btn-primary mr-1 next-button" >next</button>
                    </div>
                </section>
                <section class="hide">
                    {{-- <div class="row normalTopPadding"> --}}
                        <div class="row">
                            <h5>Laporan Genba TINDAKAN Tidak Aman (TTA)</h5>
                            <h5>Setiap laporan harus dapat mengidentifikasi deviasi baik KTA maupun TTA</h5>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 col-sm-12 col-12">
                                <label class="section-title">Deskripsi Temuan /Deviasi TINDAKAN Tidak Aman</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-4 col-sm-12 col-12">
                                <label class="section-title">Kategori Temuan /Deviasi TINDAKAN Tidak Aman</label>
                                <select class="form-control select2">
                                    <option value="1">Prosedur</option>
                                    <option value="2">APD / Alat Kesehatan</option>
                                    <option value="3">Alat & Peralatan Kerja</option>
                                    <option value="4">Fasilitas</option>
                                    <option value="5">House Keeping</option>
                                    <option value="6">Lingkungan</option>
                                    <option value="7">Kesehatan</option>
                            </select>
                            </div>
                            <div class="form-group col-md-4 col-sm-12 col-12">
                                <label class="section-title">Usulan Tindakan/Rekomendasi Perbaikan atas TINDAKAN Tidak Aman</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    {{-- </div> --}}
                    <div class="row">
                        
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label for="" class="section-title">Foto Temuan TINDAKAN Tidak Aman (jika ada)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Apa follow up yang sudah anda lakukan atas TINDAKAN Tidak Aman ?</label>
                            <select class="form-control select2">
                                <option value="1">Personal Contact</option>
                                <option value="2">Sanksi Surat Peringatan</option>
                                <option value="3">Sanksi Pelubangan sesuai SPDK</option>
                                <option value="4">Melaporkan ke PIC terkait karena bukan kewenangan saya</option>
                                <option value="5">Tidak Dilakukan Tindakan</option>
                        </select>
                        </div>
                    </div>
                    <hr>
                    <div class="text-right">
                        <button class="btn btn-danger mr-1 back-button" >Back</button>
                        <button class="btn btn-primary mr-1 next-button" >next</button>
                    </div>
                </section>
                <section class="hide">
                    <div class="row normalTopPadding">
                        <div class="row col-md-12 pl-4 col-sm-12 col-12">
                            <h5>Laporan Genba KONDISI Tidak Aman (KTA)</h5>
                            <h5>Setiap laporan harus dapat mengidentifikasi deviasi baik KTA maupun TTA</h5>
                        </div>
                        <div class="row col-md-12">
                            <div class="form-group col-md-6 col-sm-12 col-12">
                                <label class="section-title">Deskripsi Temuan /Deviasi KONDISI Tidak Aman</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-12">
                                <label class="section-title">Kategori Temuan /Deviasi KONDISI Tidak Aman</label>
                                <select class="form-control select2">
                                    <option value="1">Prosedur</option>
                                    <option value="2">APD / Alat Kesehatan</option>
                                    <option value="3">Alat & Peralatan Kerja</option>
                                    <option value="4">Fasilitas</option>
                                    <option value="5">House Keeping</option>
                                    <option value="6">Lingkungan</option>
                                    <option value="7">Kesehatan</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Usulan Tindakan/Rekomendasi Perbaikan atas KONDISI Tidak Aman</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label for="" class="section-title">Foto Temuan KONDISI Tidak Aman</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Apa follow up yang sudah anda lakukan KONDISI Tidak Aman ?</label>
                            <select class="form-control select2">
                                <option value="1">Personal Contact</option>
                                <option value="2">Sanksi Surat Peringatan</option>
                                <option value="3">Sanksi Pelubangan sesuai SPDK</option>
                                <option value="4">Melaporkan ke PIC terkait karena bukan kewenangan saya</option>
                                <option value="5">Tidak Dilakukan Tindakan</option>
                          </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12 col-12">
                            <label class="section-title">Keikutsertaan Genba Management</label>
                            <select class="form-control select2">
                                <option value="1">Genba Internal UT</option>
                                <option value="2">Genba Intrenal Mitra Kerja</option>
                                <option value="3">Genba Bersama KTT & PJO Mitra Utama</option>
                                <option value="4">Genba Bersama Customer</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6 col-sm-12 col-12">
                            <label for="" class="section-title">Dokumentasi Keikutsertaan Genba (additional)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-danger mr-1 back-button">Back</button>
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        {{-- <button class="btn btn-secondary" type="reset">Reset</button> --}}
                    </div>
                </section>
                
            {{-- </form> --}}
        </div>
    </div>
</div>
@endsection

@push('js')
    <script src="{{ asset('stisla/assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('stisla/assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('stisla/assets/js/page/forms-advanced-forms.js') }}"></script>
    <script>
        $(function(){
            $('.next-button').on('click', function (e) {
                var section = $(this).closest("section");
                var $next = section.next();
                console.log($next)
                if($next.length>0) {  // check condition first and then hide current section and show next
                    section.addClass('hide');
                    $next.removeClass('hide');
                }
            });
            $('.back-button').on('click', function (e) {
                var section = $(this).closest("section");
                var $previous = section.prev();
                console.log($previous)
                if($previous.length>0) {  // check condition first and then hide current section and show previous
                    section.addClass('hide');
                    $previous.removeClass('hide');
                }
            });
        });
    </script>
@endpush