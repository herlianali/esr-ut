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
    <h1>Green Card</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Form Questioning</a></div>
        <div class="breadcrumb-item">Green Card</div>
    </div>
</div>
<div class="card">
    {{-- <div class="card-header">
        <a href="{{ url()->previous() }}" class="btn btn-icon">
            <i class="fas fa-arrow-circle-left" style="font-size:30px;"></i>
        </a>
        <h4>Permohonan Surat</h4>
    </div> --}}
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>Green Card Form</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid">
                    {{-- <form action="" method=""> --}}
                        <section>
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tanggal Laporan</label>
                                    <input type="text" class="form-control datetimepicker">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Kelompok Jabatan</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Pengawas / Target 13 PW</label>
                                    <input type="text" class="form-control">
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
                            </div>
                            <hr>
                            <div class="text-right">
                                {{-- <button class="btn btn-primary mr-1 next-button" >Next</button> --}}
                                <button class="btn btn-primary mr-1 next-button" >Next</button>
                            </div>
                        </section>
                        <section class="hide">    
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Non Pengawas / All Karyawan</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Nama Lengkap</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">NRP</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Perusahaan</label>
                                    <select class="form-control select2">
                                        <option value="1">BP</option>
                                        <option value="2">HMU</option>
                                        <option value="3">KAMAJU</option>
                                        <option value="4">HARYONO</option>
                                        <option value="5">NAJ</option>
                                        <option value="6">NIKMAT</option>
                                        <option value="7">TPP</option>
                                        <option value="8">TRAC</option>
                                        <option value="9">UT</option>
                                        <option value="10">UTR</option>
                                        <option value="11">OTHER</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Dept / Sektor</label>
                                    <select class="form-control select2">
                                        <option value="1">ADM</option>
                                        <option value="2">ADVISOR</option>
                                        <option value="3">PART ADARO</option>
                                        <option value="4">PART TJG</option>
                                        <option value="5">PSCE</option>
                                        <option value="6">SVC BUMA</option>
                                        <option value="7">SVC FMC SCANIA</option>
                                        <option value="8">SVC FMC SIS MIA4</option>
                                        <option value="9">SVC NFMC SIS MIA4</option>
                                        <option value="10">SVC TERITORY</option>
                                        <option value="11">TC</option>
                                        <option value="12">BP</option>
                                        <option value="13">HMU</option>
                                        <option value="14">KAMAJU</option>
                                        <option value="15">NAJ</option>
                                        <option value="16">NIKMAT</option>
                                        <option value="17">TPP</option>
                                        <option value="18">TRAC</option>
                                        <option value="19">UT</option>
                                        <option value="20">UTR</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <button class="btn btn-danger mr-1 back-button" >Back</button>
                                <button class="btn btn-primary mr-1 next-button" >Next</button>
                            </div>
                        </section>
                        <section class="hide">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Laporan Bahaya</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Lokasi Ditemukannya Bahaya</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Detail Lokasi Ditemukannya Bahaya</label>
                                    <input type="text" class="form-control">
                                    <small class="form-text text-muted">Tulis detail lokasi ditemukannya kondisi atau tindakan bahaya. Misal jalan hauling km 68; workshop 35B; warehouse RISA TJS; dll.</small>
                                </div>
                                {{-- <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Detail Lokasi Ditemukannya Bahaya</label>
                                    <input type="text" class="form-control">
                                </div> --}}
                                <div class="form-group col-md-6">
                                    <label class="section-title">Dept / Sektor Ditemukannya Bahaya</label>
                                    <select class="form-control select2">
                                        <option value="1">ADM</option>
                                        <option value="2">PART ADARO</option>
                                        <option value="3">PART TJG</option>
                                        <option value="4">SVC BUSERT</option>
                                        <option value="5">SVC SIS KM 35B</option>
                                        <option value="6">SVC SIS MIA 4</option>
                                        <option value="7">TC</option>
                                        <option value="8">BP</option>
                                        <option value="9">HMU</option>
                                        <option value="10">KAMAJU</option>
                                        <option value="11">NAJ</option>
                                        <option value="12">NIKMAT</option>
                                        <option value="13">TPP</option>
                                        <option value="14">TRAC</option>
                                        <option value="15">UT</option>
                                        <option value="16">UTR</option>
                                        <option value="17">Area Customer</option>
                                        <option value="18">Other</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tindakan atau Kondisi Bahaya Yang Ditemukan</label>
                                    <input type="text" class="form-control">
                                    <small class="form-text text-muted">Jelaskan temuan TTA dan KTA yang anda temukan.</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="section-title">Kategori Deviasi</label>
                                    <select class="form-control select2">
                                        <option value="1">Prosedur</option>
                                        <option value="2">APD / Alat Keselamatan</option>
                                        <option value="3">Alat & Peralatan Kerja</option>
                                        <option value="4">Fasilitas</option>
                                        <option value="5">House Keeping</option>
                                        <option value="6">Lingkungan</option>
                                        <option value="7">kesehatan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Kategori Temuan</label>
                                    {{-- <div class="row"> --}}
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked="">
                                            <label class="form-check-label" for="exampleRadios1">
                                                KTA (Kondisi Tidak Aman)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked="">
                                            <label class="form-check-label" for="exampleRadios2">
                                                TTA (Tindakan Tidak Aman)
                                            </label>
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <button class="btn btn-danger mr-1 back-button" >Back</button>
                                <button class="btn btn-primary mr-1 next-button" >Next</button>
                            </div>
                        </section>
                        <section class="hide">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">KTA Lanjut 1</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Apakah KTA (Kondisi tidak aman) yang ditemukan, ada kontribusi dari TTA (Tindakan tidak aman) ?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked="">
                                        <label class="form-check-label" for="exampleRadios1">
                                            YA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked="">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Tidak
                                        </label>
                                    </div>
                                    <small class="form-text text-muted">Contoh temuan housekeeping yang tidak rapi (KTA) disebabkan oleh tindakan karyawan yang tidak menyimpan perlengkapan dan peralatan dengan baik (TTA)</small>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">KTA Lanjut 2</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Jelaskan TTA yang berkontribusi terhadap adanya temuan KTA tersebut !</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <button class="btn btn-danger mr-1 back-button" >Back</button>
                                <button class="btn btn-primary mr-1 next-button" >Next</button>
                            </div>
                        </section>
                        <section class="hide">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tindakan Perbaikan</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Usulan Tindakan Perbaikan Dari TTA/KTA yang ditemukan !</label>
                                    <input type="text" class="form-control">
                                    <small class="form-text text-muted">Tuliskan usulan atau saran tindakan perbaikan yang diperlukan untuk menangani kondisi atau tindakan bahaya yang ditemukan.</small>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="" class="section-title">Foto Temuan (additional)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <small class="form-text text-muted">Jika temuannya dianggap kritikal, maka wajib melampirkan foto.</small>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Apakah usulan tindakan perbaikan atas temuan telah dilakukan perbaikan sendiri ?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked="">
                                        <label class="form-check-label" for="exampleRadios1">
                                            YA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked="">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Tidak, karena bukan kompetensi saya/ bukan area kerja saya (dept lain atau cusomer)
                                        </label>
                                    </div>
                                    <small class="form-text text-muted">Jika temuannya dianggap kritikal, maka wajib melampirkan foto.</small>
                                </div>
                            </div>
                            <hr>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" onclick="">Submit</button>
                                <button class="btn btn-secondary " onclick="">Reset</button>
                            </div>
                        </section>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
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