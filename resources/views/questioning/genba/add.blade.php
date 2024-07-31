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
                            <label class="section-title">Tanggal Pelaksanaan Genba <span class="text-danger">*</span></label>
                            <input type="text" class="form-control datepicker" name="tanggal" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Area Genba <span class="text-danger">*</span></label>
                            <select class="form-control select2" name="area" required>
                                <option value="office">office</option>
                                <option value="workshop">workshop</option>
                                <option value="field">field</option>
                                <option value="warehouse">warehouse</option>
                                <option value="catering">catering</option>
                                <option value="mess">mess</option>
                        </select>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Lokasi Pelaksanaan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="lokasi" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Nama Pengawas<span class="text-danger">*</span></label>
                            <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options="$list_pengawas" :value="auth()->user()->pegawai->id ?? ''" />
                        </div>
                    </div>
                    <hr>
                    <div class="text-right">
                        {{-- <button class="btn btn-primary mr-1 next-button" >next</button> --}}
                        <button class="btn btn-primary mr-1 next-button" >Selanjutnya</button>
                    </div>
                </section>
                <section class="hide">
                    {{-- <div class="row normalTopPadding"> --}}
                        <div class="row">
                            <div class="text-center col-sm-12 col-xs-12">
                                <h3>Laporan Genba TINDAKAN Tidak Aman (TTA)</h3>
                            </div>
                            <div class="text-center col-sm-12 col-xs-12">
                                <span>Setiap laporan harus dapat mengidentifikasi deviasi baik KTA maupun TTA</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4 col-sm-12 col-12">
                                <label class="section-title">Deskripsi Temuan / Deviasi TINDAKAN Tidak Aman<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-12 col-12">
                                <label class="section-title">Kategori Temuan / Deviasi TINDAKAN Tidak Aman<span class="text-danger">*</span></label>
                                <select class="form-control select2" required>
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
                                <label class="section-title">Usulan Tindakan / Rekomendasi Perbaikan atas TINDAKAN Tidak Aman<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required>
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
                            <label class="section-title">Apa follow up yang sudah anda lakukan atas TINDAKAN Tidak Aman ?<span class="text-danger">*</span></label>
                            <select class="form-control select2" required>
                                <option value="1">Personal Contact</option>
                                <option value="2">Sanksi Surat Peringatan</option>
                                <option value="3">Sanksi Pelubangan sesuai SPDK</option>
                                <option value="4">Melaporkan ke PIC terkait karena bukan kewenangan saya</option>
                                <option value="5">Tidak Dilakukan Tindakan</option>
                        </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-between">
                        <button class="btn btn-danger mr-1 back-button" >Kembali</button>
                        <button class="btn btn-primary mr-1 next-button" >Selanjutnya</button>
                    </div>
                </section>
                <section class="hide">
                    <div class="row normalTopPadding">
                        <div class="text-center col-sm-12 col-xs-12">
                            <h3>Laporan Genba KONDISI Tidak Aman (KTA)</h3>
                        </div>
                        <div class="text-center col-sm-12 col-xs-12">
                            <span>Setiap laporan harus dapat mengidentifikasi deviasi baik KTA maupun TTA</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12 col-12">
                            <label class="section-title">Deskripsi Temuan /Deviasi KONDISI Tidak Aman<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-12 col-12">
                            <label class="section-title">Kategori Temuan /Deviasi KONDISI Tidak Aman<span class="text-danger">*</span></label>
                            <select class="form-control select2" required>
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
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Usulan Tindakan/Rekomendasi Perbaikan atas KONDISI Tidak Aman<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label for="" class="section-title pb-md-4">Foto Temuan KONDISI Tidak Aman<span class="text-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Apa follow up yang sudah anda lakukan KONDISI Tidak Aman ?<span class="text-danger">*</span></label>
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
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title pb-md-4">Keikutsertaan Genba Management</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title pb-md-4">Penyelenggara Genba<span class="text-danger">*</span></label>
                            <select class="form-control select2">
                                <option value="1">Genba Internal UT</option>
                                <option value="2">Genba Intrenal Mitra Kerja</option>
                                <option value="3">Genba Bersama KTT & PJO Mitra Utama</option>
                                <option value="4">Genba Bersama Customer</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label for="" class="section-title">Dokumentasi Keikutsertaan Genba (additional)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row justify-content-between">
                            <button class="btn btn-danger back-button">Kembali</button>
                            <button class="btn btn-success" type="submit" onclick="add_data()">Simpan</button>
                            {{-- <button class="btn btn-secondary" type="reset">Reset</button> --}}
                        </div>
                    </div>
                </section>
                
            {{-- </form> --}}
        </div>
    </div>
</div>
@endsection

@push('js')
    <script src="{{ asset('stisla/assets/js/page/forms-advanced-forms.js') }}"></script>
    <script>
        init_form_element()

        $(function(){
            $('.next-button').on('click', function (e) {
                var section = $(this).closest("section");
                var $next = section.next();
                console.log($next)
                if($next.length>0) {  // check condition first and then hide current section and show next
                    section.addClass('hide');
                    $next.removeClass('hide');
                    $('html, body').animate({
                        scrollTop: $('.section-header').offset().top
                    }, 500);
                }
            });
            $('.back-button').on('click', function (e) {
                var section = $(this).closest("section");
                var $previous = section.prev();
                console.log($previous)
                if($previous.length>0) {  // check condition first and then hide current section and show previous
                    section.addClass('hide');
                    $previous.removeClass('hide');
                    $('html, body').animate({
                        scrollTop: $('.section-header').offset().top
                    }, 500);
                }
            });
        });
        let add_data = () => {
            let url = "{{ route('questioning.genba.show',1) }}";

            // $.get(url, (result) => {
                window.location.href = url;
            // }).fail((xhr) => {
                
            // });
        }
    </script>
@endpush