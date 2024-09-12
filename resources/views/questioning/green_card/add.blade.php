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
                <div class="container-fluid" id="form_input">
                    <form id="form_green_card" enctype="multipart/form-data">
                        @csrf
                        <section class="section" id="section1">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tanggal Laporan</label>
                                    <input type="text" class="form-control datepicker" name="tanggal" value="{{ $green_card->tanggal ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Kelompok Jabatan</label>
                                    <x-select class="select2" name="jabatan" :default="'-- Pilih Kelompok Jabatan --'" :options="[ 1 => 'Pengawas / Target 13 PW', 2 => 'Non Pengawas / All Karyawan' ]" :value=" $green_card->jabatan ?? '' "/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Pengawas / Target 13 PW</label>
                                    <input type="text" class="form-control" name="pengawas" value="{{ $green_card->pengawas ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Nama Pengawas</label>
                                    <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $green_card->nama_pengawas ?? '' "/>
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <a class="btn btn-primary mr-1 text-white next" data-next="#section2">Next</a>
                            </div>
                        </section>
                        <section class="section" id="section2" style="display: none">    
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label class="section-title">Non Pengawas / All Karyawan</label>
                                    <input type="text" class="form-control" name="non_pengawas" value="{{ $green_card->non_pengawas ?? '' }}">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label class="section-title">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" value="{{ $green_card->nama_lengkap ?? '' }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label class="section-title">NRP</label>
                                    <input type="text" class="form-control" name="nrp" value="{{ $green_card->nrp ?? '' }}">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label class="section-title">Perusahaan</label>
                                    <x-select class="select2" name="perusahaan" :default="'-- Pilih Perusahaan --'" :options=" $list_perusahaan " :value=" $green_card->perusahaan ?? '' "/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label class="section-title">Dept / Sektor</label>
                                    <x-select class="select2" name="sektor" :default="'-- Pilih Dept / Sektor --'" :options=" $list_sektor1 " :value=" $green_card->sektor ?? '' "/>
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <div class="row justify-content-between">
                                    <a class="btn btn-danger mr-1 text-white back" data-back="#section1">Back</a>
                                    <a class="btn btn-primary mr-1 text-white next" data-next="#section3">Next</a>
                                </div>
                            </div>
                        </section>
                        <section class="section" id="section3" style="display: none">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Laporan Bahaya</label>
                                    <input type="text" class="form-control" name="laporan_bahaya" value="{{ $green_card->laporan_bahaya ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Lokasi Ditemukannya Bahaya</label>
                                    <input type="text" class="form-control" name="lokasi_bahaya" value="{{ $green_card->lokasi_bahaya ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Detail Lokasi Ditemukannya Bahaya</label>
                                    <input type="text" class="form-control" name="detail_lokasi" value="{{ $green_card->detail_lokasi ?? '' }}">
                                    <small class="form-text text-muted">Tulis detail lokasi ditemukannya kondisi atau tindakan bahaya. Misal jalan hauling km 68; workshop 35B; warehouse RISA TJS; dll.</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="section-title">Dept / Sektor Ditemukannya Bahaya</label>
                                    <x-select class="select2" name="sektor_bahaya" :default="'-- Pilih Dept / Sektor --'" :options=" $list_sektor2 " :value=" $green_card->sektor_bahaya ?? '' "/>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tindakan atau Kondisi Bahaya Yang Ditemukan</label>
                                    <input type="text" class="form-control" name="tindakan" value="{{ $green_card->tindakan ?? '' }}">
                                    <small class="form-text text-muted">Jelaskan temuan TTA dan KTA yang anda temukan.</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="section-title">Kategori Deviasi</label>
                                    <x-select class="select2" name="ketegori_deviasi" :default="'-- Pilih Ketegori Deviasi --'" :options=" $list_deviasi " :value=" $green_card->ketegori_deviasi ?? '' "/>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Kategori Temuan</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kategori_temuan" id="kategoriTemuan1" value="1" @if(!empty($green_card) && $green_card->kategori_temuan === 1 ) checked @endif>
                                        <label class="form-check-label" for="kategoriTemuan1">
                                            KTA (Kondisi Tidak Aman)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kategori_temuan" id="kategoriTemuan2" value="2" @if(!empty($green_card) && $green_card->kategori_temuan === 2 ) checked @endif>
                                        <label class="form-check-label" for="kategoriTemuan2">
                                            TTA (Tindakan Tidak Aman)
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <div class="row justify-content-between">
                                    <a class="btn btn-danger mr-1 text-white back" data-back="#section2">Back</a>
                                    <a class="btn btn-primary mr-1 text-white next" data-next="#section4">Next</a>
                                </div>
                            </div>
                        </section>
                        <section class="section" id="section4" style="display: none">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">KTA Lanjut 1</label>
                                    <input type="text" class="form-control" name="kta_lanjut1" value="{{ $green_card->kta_lanjut1 ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Apakah KTA (Kondisi tidak aman) yang ditemukan, ada kontribusi dari TTA (Tindakan tidak aman) ?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kontribusi" id="kontribusi1" value="1" @if(!empty($green_card) && $green_card->kontribusi) checked @endif>
                                        <label class="form-check-label" for="kontribusi1">
                                            YA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kontribusi" id="kontribusi2" value="2" @if(!empty($green_card) && $green_card->kontribusi) checked @endif>
                                        <label class="form-check-label" for="kontribusi2">
                                            Tidak
                                        </label>
                                    </div>
                                    <small class="form-text text-muted">Contoh temuan housekeeping yang tidak rapi (KTA) disebabkan oleh tindakan karyawan yang tidak menyimpan perlengkapan dan peralatan dengan baik (TTA)</small>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title pb-4">KTA Lanjut 2</label>
                                    <input type="text" class="form-control" name="kta_lanjut2" value="{{ $green_card->kta_lanjut2 ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Jelaskan TTA yang berkontribusi terhadap adanya temuan KTA tersebut !</label>
                                    <input type="text" class="form-control" name="penjelasan" value="{{ $green_card->penjelasan ?? '' }}">
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <div class="row justify-content-between">
                                    <a class="btn btn-danger mr-1 text-white back" data-back="#section3">Back</a>
                                    <a class="btn btn-primary mr-1 text-white next" data-next="#section5">Next</a>
                                </div>
                            </div>
                        </section>
                        <section class="section" id="section5" style="display: none">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tindakan Perbaikan</label>
                                    <input type="text" class="form-control" name="tindakan_perbaikan" value="{{ $green_card->tindakan_perbaikan ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Usulan Tindakan Perbaikan Dari TTA/KTA yang ditemukan !</label>
                                    <input type="text" class="form-control" name="usulan_tindakan" value="{{ $green_card->usulan_tindakan ?? '' }}">
                                    <small class="form-text text-muted">Tuliskan usulan atau saran tindakan perbaikan yang diperlukan untuk menangani kondisi atau tindakan bahaya yang ditemukan.</small>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="" class="section-title">Foto Temuan (additional)</label>
                                    <div class="custom-file">
                                        <input type="file" class="dropify" id="foto" name="foto" @if(!empty($green_card) && $green_card->foto != '') data-default-file="{{ asset("public/storage/$green_card->foto") }}" @endif>
                                        <small class="form-text text-muted">Jika temuannya dianggap kritikal, maka wajib melampirkan foto.</small>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Apakah usulan tindakan perbaikan atas temuan telah dilakukan perbaikan sendiri ?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_perbaikan" id="is_perbaikan1" value="1" @if(!empty($green_card) && $green_card->is_perbaikan === 1) checked @endif>
                                        <label class="form-check-label" for="is_perbaikan1">
                                            YA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_perbaikan" id="is_perbaikan2" value="2" @if(!empty($green_card) && $green_card->is_perbaikan === 2) checked @endif>
                                        <label class="form-check-label" for="is_perbaikan2">
                                            Tidak, karena bukan kompetensi saya/ bukan area kerja saya (dept lain atau cusomer)
                                        </label>
                                    </div>
                                    <small class="form-text text-muted">Jika temuannya dianggap kritikal, maka wajib melampirkan foto.</small>
                                </div>
                            </div>
                            <hr>
                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <a class="btn btn-danger text-white back" data-back="#section4">Back</a>
                                    <button class="btn btn-success mr-1" type="submit" id="button_submit_green_card" >Save</button>
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
                <div id="detail"> </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        init_form_element();

        $(document).ready(function(){

            $('.next').click(function() {
                var nextSection = $(this).data('next');
                var jabatan = $('#jabatan').val();

                if (nextSection === '#section2' && jabatan === '1') {
                    nextSection = '#section3';
                }

                $(this).closest('.section').hide();
                $(nextSection).show();
            });

            $('.back').click(function() {
                var backSection = $(this).data('back');
                var jabatan = $('#jabatan').val();

                if (backSection === '#section2' && jabatan === '1') {
                    backSection = '#section1';
                }

                $(this).closest('.section').hide();
                $(backSection).show();
            });

            $('#jabatan').change(function() {
                var jabatan = $(this).val();
                console.log(jabatan);
                if (jabatan === '1') {
                    $('#section2').hide();
                } else {
                    $('#section1').hide();
                    $('#section2').show();
                }
            });

        });

        let init_form_green_card = (id = '') =>{
            let $form_green_card = $('#form_green_card'),
                $button_submit_green_card = $('#button_submit_green_card');
                $form_green_card.submit((e) => {
                    e.preventDefault();
                    let dataForm = new FormData($form_green_card.get(0));
                    let url = '{{ route($active_route) }}';
                    if (id !== '') {
                        url += ('/' + id);
                        dataForm.append('_method', 'PUT');
                    }
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: dataForm,
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: (response) => {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Green Card data has been saved.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                detail_green_card(response.id);
                            });
                        },
                        error: (xhr) => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                                footer: xhr.responseText
                            });
                        }
                    });
                });
        }

        let detail_green_card = (id = '') => {
            let url = "{{ route($active_route) }}/"+id;

            $.get(url, (result) => {
                $('#form_input').hide();
                $('#form_input').html('');
                $('#detail').html(result);
            }).fail((xhr) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: xhr.responseText
                });
            });
        }

        init_form_green_card({{ $green_card->id ?? '' }})
    </script>
@endpush