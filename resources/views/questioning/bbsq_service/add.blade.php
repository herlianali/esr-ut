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
    <h1>{{ $title }}</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Questioning</a></div>
        <div class="breadcrumb-item">{{ $title }}</div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>{{ $title }} Form</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid">
                    {{-- <form action="" method=""> --}}
                        <section class="section" id="section1">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tanggal Laporan</label>
                                    <input type="text" class="form-control datepicker" name="tanggal">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Nama Pengawas</label>
                                    <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $bbsq_service->nama_pengawas ?? '' "/>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Lokasi Pelaksanaan BBSQ Svc</label>
                                    <input type="text" class="form-control" name="lokasi_pelaksanaan">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Nama karyawan yang dilakukan observasi (Observed)</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Perusahaan karyawan yang dilakukan observasi (Observed)</label>
                                    <x-select class="select2" name="perusahaan" :default="'-- Pilih Perusahaan --'" :options=" $list_perusahaan " :value=" $bbsq_service->perusahaan ?? '' "/>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Aktivitas / Jenis Pekerjaan Yang Dilakukan Observasi</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Kategori Observasi BBSQ</label>
                                    <x-select class="select2" name="kategori_observasi" :default="'-- Pilih Kategori Kondisi --'" :options=" [1 => 'Preventive Maintenance', 2 => 'Remove & Install (R & I)', 3 => 'Troubleshooting & Repair ( Minor & Major Repair )'] " :value=" $bbsq_service->kategori_kondisi ?? '' "/>
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                {{-- <button class="btn btn-primary mr-1 next" >Next</button> --}}
                                <a class="btn btn-primary mr-1 text-white next" data-next="#section2">Next</a>
                            </div>
                        </section>
                        <section class="section hide" id="section2">
                            <div class="row" id="questioning">

                            </div>
                            <h5 class="text-center hide" id="error-text">Data Kategori Observasi Return Null Click Back Or Refresh This Page</h5>
                            <div class="row justify-content-between">
                                <a class="btn btn-danger mr-1 back text-white" data-back="#section1">Back</a>
                                <a class="btn btn-primary mr-1 next text-white" id="button-questioning" data-next="#section3">Next</a>
                            </div>
                        </section>
                        <section class="section hide" id="section3">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Jenis Perilaku</label>
                                    <input type="text" class="form-control">
                                </div>
                                {{-- jika jenis perilaku value 1 tampilkan section lanjutan jika 2 tampilkan langsung section 8 --}}
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Jenis Prilaku Hasil observasi</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked="">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Ada prilaku Beresiko/Bad Quality yang dilakukan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2" checked="">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Aman/Good Quality
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between">
                                <a class="btn btn-danger mr-1 back text-white" data-back="#section2">Back</a>
                                <a class="btn btn-primary mr-1 next text-white" data-next="#section4">Next</a>
                            </div>
                        </section>
                        <section class="section hide" id="section4">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Catatan Observasi - Prilaku 1</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Deskripsi prilaku (Unsafe, Bad Quality)</label>
                                    <small class="form-text text-muted">Tuliskan deskripsi prilaku berisiko karyawan/ bad quality, misal : tidak menggunakan APD, tidak memasang loto, dll</small>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Apa yang sedang dilakukan</label>
                                    <small class="form-text text-muted">Tuliskan pekerjaan atau aktivitas yang sedang dilakukan karyawan saat ditemukannya prilaku berisiko/bad quality</small>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Mengapa Dilakukan? (Rintangan/Barrier)</label>
                                    <x-select class="select2" name="rintangan" :default="'-- Pilih Rintangan/Barrier --'" :options=" $list_rintangan " :value=" $bbsq_service->rintangan ?? '' "/>
                                    
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Pekerja mengakui telah melakukan prilaku berisiko?</label>
                                    <div class="row">
                                        <div class="form-check ml-3 pr-2">
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
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tindakan perbaikan yang dilakukan</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tindakan pencegahan yang dilakukan</label>
                                    <input type="text" class="form-control">
                                </div>
                                {{-- jika value 1 lanjut next section jika 2 langsung section akhir --}}
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Apakah ada prilaku berisiko lain yang ditemukan?</label>
                                    <div class="row">
                                        <div class="form-check ml-3 pr-2">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked="">
                                            <label class="form-check-label" for="exampleRadios1">
                                                YA
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2" checked="">
                                            <label class="form-check-label" for="exampleRadios2">
                                                TIDAK
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between">
                                <a class="btn btn-danger mr-1 back text-white" data-back="#section3">Back</a>
                                <a class="btn btn-primary mr-1 next text-white" data-next="#section5">Next</a>
                            </div>
                        </section>
                        <section class="section hide" id="section5">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Catatan Observasi - Prilaku 2</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Deskripsi prilaku (Unsafe, Bad Quality)</label>
                                    <small class="form-text text-muted">Tuliskan deskripsi prilaku berisiko karyawan/ bad quality, misal : tidak menggunakan APD, tidak memasang loto, dll</small>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Apa yang sedang dilakukan</label>
                                    <small class="form-text text-muted">Tuliskan pekerjaan atau aktivitas yang sedang dilakukan karyawan saat ditemukannya prilaku berisiko/bad quality</small>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Mengapa Dilakukan? (Rintangan/Barrier)</label>
                                    <x-select class="select2" name="rintangan2" :default="'-- Pilih Rintangan/Barrier --'" :options=" $list_rintangan " :value=" $bbsq_service->rintangan2 ?? '' "/>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Pekerja mengakui telah melakukan prilaku berisiko?</label>
                                    <div class="row">
                                        <div class="form-check ml-3 pr-2">
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
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tindakan perbaikan yang dilakukan</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tindakan pencegahan yang dilakukan</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between">
                                <a class="btn btn-danger mr-1 back text-white" data-back="#section4" >Back</a>
                                <a class="btn btn-primary mr-1 next text-white" data-next="#section6" >Next</a>
                            </div>
                        </section>
                        <section class="section hide" id="section6">
                            <div class="row">
                                <h3>Validasi</h3>
                                <h3>Pernyataan ini sebagai pengganti tandatangan</h3>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Jenis Prilaku</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Observer telah memberikan feedback terhadap karyawan yang diobservasi, atas catatan-catatan positif maupun need improvement dari hasil observasi ini !</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked="">
                                        <label class="form-check-label" for="exampleRadios1">
                                            YA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2" checked="">
                                        <label class="form-check-label" for="exampleRadios2">
                                            TIDAK
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Karyawan yang diobservasi (Observed) telah memahami, mengerti dan menyetujui atas semua feedback yang telah disampaikan oleh observer !</label>
                                    <small class="form-text text-muted">Pengawas harus melakukan konfirmasi kepada karyawan untuk menjawab ini.</small>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked="">
                                        <label class="form-check-label" for="exampleRadios1">
                                            YA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2" checked="">
                                        <label class="form-check-label" for="exampleRadios2">
                                            TIDAK
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-footer text-right">
                                <a class="btn btn-danger" >Back</a>
                                <button class="btn btn-success mr-1" type="submit">Submit</button>
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
    init_form_element()
    $(function(){
        $('.next').click(function() {
            var nextSection = $(this).data('next');
            var currentSection = $(this).closest('.section');

            if (nextSection) {
                questioning_bbsq_service($('#kategori_observasi').val())
                currentSection.addClass('hide');
                $(nextSection).removeClass('hide');
            }
        });

        $('.back').click(function() {
            var backSection = $(this).data('back');
            var currentSection = $(this).closest('.section');

            if (backSection) {
                currentSection.addClass('hide');
                $(backSection).removeClass('hide');
            }
        });

        $('#kategori_observasi').change(function() {
            let id = $(this).val();
            console.log(id)
            questioning_bbsq_service(id);
        });
        
    });

    let questioning_bbsq_service = (id = '') => {
        let url = "{{ route($active_route) }}/options/"+id;

        if (id !== '') {
            $.get(url, (result) => {
                $('#questioning').html(result);
                $('.next').show();
                $('#error-text').hide();
                $('#questioning-button').show();
            }).fail((xhr) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: xhr.responseText
                });
            });
        }else{
            $('#error-text').show("");
            $('#button-questioning').hide();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: 'Refresh and make sure you choice "Kategori Observasi BBSQ" correctly'
            });
        }
    }
</script>
@endpush