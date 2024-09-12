@extends('layout.app')

@push('css')
@endpush

@section('menu')
    @php($menu = '1')
@endsection

@section('content')
<div class="section-header">
    <h1>{{ $title }}</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#"></a>Questioning</div>
        <div class="breadcrumb-item">{{ $title }}</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Tambah Data {{ $title }}</h4>
    </div>
    <div class="card-body">
        <div class="container-fluid" id="form_input">
            <form id="form_genba" enctype="multipart/form-data">
                @csrf
                <section class="section" id="section1">
                    <div class="row normalTopPadding">
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Tanggal Pelaksanaan Genba <span class="text-danger">*</span></label>
                            <input type="text" class="form-control datepicker" name="tanggal" value="{{ $genba->tanggal ?? '' }}" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Area Genba <span class="text-danger">*</span></label>
                            <x-select class="select2" name="area" :default="'-- Pilih Area Genba --'" :options=" $list_area " :value=" $genba->area ?? '' "/>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Lokasi Pelaksanaan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="lokasi" value="{{ $genba->lokasi ?? '' }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Nama Pengawas<span class="text-danger">*</span></label>
                            <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $genba->nama_pengawas ?? '' "/>
                        </div>
                    </div>
                    <hr>
                    <div class="text-right">
                        {{-- <button class="btn btn-primary mr-1 next-button" >next</button> --}}
                        <a class="btn btn-primary text-white mr-1 next" data-next="#section2">Selanjutnya</a>
                    </div>
                </section>
                <section class="section" id="section2" style="display: none">
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
                                <input type="text" class="form-control" name="deskripsi_tindakan" value="{{ $genba->deskripsi_tindakan ?? '' }}" required >
                            </div>
                            <div class="form-group col-md-4 col-sm-12 col-12">
                                <label class="section-title">Kategori Temuan / Deviasi TINDAKAN Tidak Aman<span class="text-danger">*</span></label>
                                <x-select class="select2" name="kategori_tindakan" :default="'-- Pilih Kategori Tindakan --'" :options=" $list_kategori " :value=" $genba->kategori_tindakan ?? '' "/>
                            </div>
                            <div class="form-group col-md-4 col-sm-12 col-12">
                                <label class="section-title">Usulan Tindakan / Rekomendasi Perbaikan atas TINDAKAN Tidak Aman<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="usulan_tindakan" value="{{ $genba->usulan_tindakan ?? '' }}" required >
                            </div>
                        </div>
                    {{-- </div> --}}
                    <div class="row">
                        <div class="form-group col-md-8 col-sm-12 col-12">
                            <label for="" class="section-title">Foto Temuan TINDAKAN Tidak Aman (jika ada)</label>
                            <input type="file" class="dropify" id="foto_tindakan" name="foto_tindakan" @if(!empty($genba) && $genba->foto_tindakan != '') data-default-file="{{ asset("public/storage/$genba->foto_tindakan") }}" @endif>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Apa follow up yang sudah anda lakukan atas TINDAKAN Tidak Aman ?<span class="text-danger">*</span></label>
                            <x-select class="select2" name="follow_up_tindakan" :default="'-- Pilih Followup Tindakan --'" :options=" $list_follow_up " :value=" $genba->follow_up_tindakan ?? '' "/>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-between">
                        <a class="btn btn-danger text-white mr-1 back" data-back="#section1">Kembali</a>
                        <a class="btn btn-primary text-white mr-1 next" data-next="#section3">Selanjutnya</a>
                    </div>
                </section>
                <section class="section" id="section3" style="display: none">
                    <div class="row normalTopPadding">
                        <div class="text-center col-sm-12 col-xs-12">
                            <h3>Laporan Genba KONDISI Tidak Aman (KTA)</h3>
                        </div>
                        <div class="text-center col-sm-12 col-xs-12">
                            <span>Setiap laporan harus dapat mengidentifikasi deviasi baik KTA maupun TTA</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Deskripsi Temuan /Deviasi KONDISI Tidak Aman<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="deskripsi_kondisi" value="{{ $genba->deskripsi_kondisi ?? '' }}" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Kategori Temuan /Deviasi KONDISI Tidak Aman<span class="text-danger">*</span></label>
                            <x-select class="select2" name="kategori_kondisi" :default="'-- Pilih Kategori Kondisi --'" :options=" $list_kategori " :value=" $genba->kategori_kondisi ?? '' "/>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Usulan Tindakan/Rekomendasi Perbaikan atas KONDISI Tidak Aman<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="usulan_kondisi" value="{{ $genba->usulan_tindakan ?? '' }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8 col-sm-12 col-12">
                            <label for="" class="section-title pb-md-4">Foto Temuan KONDISI Tidak Aman<span class="text-danger">*</span></label>
                            <input type="file" class="dropify" id="foto_kondisi" name="foto_kondisi" @if(!empty($genba) && $genba->foto_kondisi != '') data-default-file="{{ asset("public/storage/$genba->foto_kondisi") }}" @endif>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-12">
                            <label class="section-title">Apa follow up yang sudah anda lakukan KONDISI Tidak Aman ?<span class="text-danger">*</span></label>
                            <x-select class="select2" name="follow_up_kondisi" :default="'-- Pilih Followup Kondisi --'" :options=" $list_follow_up " :value=" $genba->follow_up_kondisi ?? '' "/>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-between">
                        <a class="btn btn-danger text-white mr-1 back" data-back="#section2">Kembali</a>
                        <a class="btn btn-primary text-white mr-1 next" data-next="#section4">Selanjutnya</a>
                    </div>
                </section>
                <section class="section" id="section4" style="display: none">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12 col-12">
                            <label class="section-title pb-md-4">Keikutsertaan Genba Management</label>
                            <input type="text" class="form-control" name="keikutsertaan"  value="{{ $genba->keikutsertaan ?? '' }}"required>
                        </div>
                        <div class="form-group col-md-6 col-sm-12 col-12">
                            <label class="section-title pb-md-4">Penyelenggara Genba<span class="text-danger">*</span></label>
                            <x-select class="select2" name="penyelenggara" :default="'-- Pilih Penyelenggara --'" :options=" $list_penyelenggara " :value=" $genba->penyelenggara ?? '' "/>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-12">
                            <label for="" class="section-title">Dokumentasi Keikutsertaan Genba (additional)</label>
                            <input type="file" class="dropify" id="dokumentasi" name="dokumentasi" @if(!empty($genba) && $genba->dokumentasi != '') data-default-file="{{ asset("public/storage/$genba->dokumentasi") }}" @endif>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row justify-content-between">
                            <a class="btn btn-danger text-white back" data-back="#section3">Kembali</a>
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div>
                    </div>
                </section>
            </form>
        </div>
        <div class="container-fluid" id="detail"> </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        init_form_element()
        $(document).ready(function(){

            $('.next').click(function() {
                var nextSection = $(this).data('next');
                $(this).closest('.section').hide();
                $(nextSection).show();
            });

            $('.back').click(function() {
                var backSection = $(this).data('back');
                $(this).closest('.section').hide();
                $(backSection).show();
            });

        });

        let init_form_genba = (id = '') =>{
            let $form_genba = $('#form_genba'),
                $button_submit_genba = $('#button_submit_genba');
                $form_genba.submit((e) => {
                    e.preventDefault();
                    let dataForm = new FormData($form_genba.get(0));
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
                                text: 'Data Genba has been saved.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                detail_genba(response.id);
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

        let detail_genba = (id = '') => {
            let url = "{{ route($active_route) }}/"+id;

            $.get(url, (result) => {
                $('#form_input').hide();
                $('#form_input').html('');
                $('#detail').html(result);
            }).fail((xhr) => {
                $user_table.html(xhr.responseText);
            });
        }

        init_form_genba({{ $genba->id ?? '' }})
    </script>
@endpush