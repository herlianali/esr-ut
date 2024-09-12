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
                    <form id="form_jsa" enctype="multipart/form-data">
                        @csrf
                        <section class="section" id="section1">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tanggal Pelaksanaan Safety Talk</label>
                                    <input type="text" class="form-control datepicker" name="tanggal" value="{{ $jsa->tanggal ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Nama Pengawas</label>
                                    <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $jsa->nama_pengawas ?? '' "/>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Posisi Anda</label>
                                    <x-select class="select2" name="posisi" :default="'-- Pilih Posisi Anda --'" :options=" [1 => 'Pengawas UT (Supervisor / Dept Head)', 2 => 'Pengawas UT (Leader Mekanik)', 3 => 'Mitra Kerja'] " :value=" $jsa->posisi ?? '' "/>
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                {{-- <button class="btn btn-primary mr-1 next" >next</button> --}}
                                <a class="btn btn-primary text-white mr-1 next" data-next="#section2">Next</a>
                            </div>
                        </section>
                        <section class="section" id="section2" style="display: none">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Review JSA</label>
                                    <input type="text" class="form-control" name="review" value="{{ $jsa->review ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Jenis Review</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_review" id="jenis_review1" value="1" @if(!empty($jsa)) @if($jsa->jenis_review === 1) checked @endif @endif>
                                        <label class="form-check-label" for="jenis_review1">
                                            Review JSA yang sudah ada
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_review" id="jenis_review2" value="2" @if(!empty($jsa)) @if($jsa->jenis_review === 2) checked @endif @endif>
                                        <label class="form-check-label" for="jenis_review2">
                                            Membuat JSA baru
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Judul JSA yang dilakukan review</label>
                                    <input type="text" class="form-control" name="judul_jsa" value="{{ $jsa->judul_jsa ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Nomor JSA yang dilakukan review</label>
                                    <input type="text" class="form-control" name="nomor_jsa" value="{{ $jsa->nomor_jsa ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Jumlah pekerja yang diberikan sosialisasi JSA</label>
                                    <input type="text" class="form-control" name="jumlah_pekerja" value="{{ $jsa->jumlah_pekerja ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Hasil Review</label>
                                    <input type="text" class="form-control" name="hasil_review" value="{{ $jsa->hasil_review ?? '' }}">
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between">
                                <a class="btn btn-danger text-white mr-1 back" data-back="#section1">Back</a>
                                <a class="btn btn-primary text-white mr-1 next" data-next="#section3">Next</a>
                            </div>
                        </section>
                        <section class="section" id="section3" style="display: none">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Sosialisasi JSA</label>
                                    <input type="text" class="form-control" name="sosialisasi_jsa" value="{{ $jsa->sosialisasi_jsa ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Shift</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="shift" id="shift1" value="1" @if(!empty($jsa)) @if($jsa->shift === 1) checked @endif @endif>
                                        <label class="form-check-label" for="shift1">
                                            Day / Siang
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="shift" id="shift2" value="2" @if(!empty($jsa)) @if($jsa->shift === 2) checked @endif @endif>
                                        <label class="form-check-label" for="shift2">
                                            Night / Malam
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Lokasi pelaksanaan sosialisasi JSA</label>
                                    <input type="text" class="form-control" name="lokasi_pelaksanan" value="{{ $jsa->sosialisasi_jsa ?? '' }}">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="" class="section-title">Foto dokumentasi pelaksanaan sosialisasi jsa (foto/absensi)</label>
                                    <input type="file" class="dropify" id="foto" name="foto" @if(!empty($jsa) && $jsa->foto != '') data-default-file="{{ asset("public/storage/$jsa->foto") }}" @endif>
                                </div>
                            </div>
                            <hr>
                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <a class="btn btn-danger text-white back" data-back="#section2">Back</a>
                                    <button class="btn btn-success mr-1" type="submit" id="button_submit_jsa">Save</button>
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
                <div id="detail"></div>
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
            var posisi = $('#posisi').val();

            if (nextSection === '#section2' && posisi === '2') {
                nextSection = '#section3';
            }

            $(this).closest('.section').hide();
            $(nextSection).show();
        });

        $('.back').click(function() {
            var backSection = $(this).data('back');
            var posisi = $('#posisi').val();

            if (backSection === '#section2' && posisi === '2') {
                backSection = '#section1';
            }

            $(this).closest('.section').hide();
            $(backSection).show();
        });

        $('#posisi').change(function() {
            var posisi = $(this).val();
            console.log(posisi);
            if (posisi !== '2') {
                $('#section2').hide();
            } else {
                $('#section1').hide();
                $('#section3').show();
            }
        });

    });

    let init_form_jsa = (id = '') =>{
            let $form_jsa = $('#form_jsa'),
                $button_submit_jsa = $('#button_submit_jsa');
                $form_jsa.submit((e) => {
                    e.preventDefault();
                    let dataForm = new FormData($form_jsa.get(0));
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
                                text: 'Data JSA has been saved.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                detail_jsa(response.id);
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

        let detail_jsa = (id = '') => {
            let url = "{{ route($active_route) }}/"+id;

            $.get(url, (result) => {
                $('#form_input').hide();
                $('#form_input').html('');
                $('#detail').html(result);
            }).fail((xhr) => {
                $user_table.html(xhr.responseText);
            });
        }

        init_form_jsa({{ $jsa->id ?? '' }})
</script>
@endpush