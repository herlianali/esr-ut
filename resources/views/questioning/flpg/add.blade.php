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
    <div class="card-header">
        <h4>{{ $title }} Data Form</h4>
    </div>
    <div class="card-body p-2">
        <div class="container p-3" id="form_input">
            <form id="form_flpg">
                @csrf
                <section class="section" id="section1">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title pb-4">Tanggal Pelaksanaan Flpg</label>
                            <input type="text" class="form-control datepicker" name="tanggal" value="{{ $flpg->tanggal ?? '' }}">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Nama Pengawas</label>
                            <small class="form-text text-muted">Nama Pengawas Yang Mendapat Target 13 Atau 9 PW</small>
                            <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $flpg->nama_pengawas ?? '' "/>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title pb-4">Lokasi pelaksanaan FLPG</label>
                            <input type="text" class="form-control" name="lokasi" value="{{ $flpg->lokasi ?? '' }}">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Aktivitas / jenis pekerjaan yang dilakukan</label>
                            <input type="text" class="form-control" name="jenis_pekerjaan" value="{{ $flpg->jenis_pekerjaan ?? '' }}">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title pb-4">Aktivitas FLPG Yang akan dilakukan</label>
                            <x-select class="select2" name="aktivitas_flpg" :default="'-- Pilih List Aktivitas --'" :options=" $list_aktivitas " :value=" $flpg->aktivitas_flpg ?? '' "/>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        {{-- <a class="btn btn-danger mr-1 text-white back" >Back</a> --}}
                        <a class="btn btn-primary mr-1 text-white next" data-next="#section2">Next</a>
                    </div>
                </section>
                <section class="section hide" id="section2">
                    <div id="questioning"> </div>
                    <div class="row justify-content-between" id="questioning-button">
                        <a class="btn btn-danger mr-1 text-white back" data-back="#section1">Back</a>
                        <a class="btn btn-primary mr-1 text-white next" data-next="#section3">Next</a>
                    </div>
                </section>
                <section class="section hide" id="section3">
                    <div class="row">
                        <div class="form-group col-md-12 col-sm-12">
                            <label class="section-title">Review</label>
                            <p>Pernyataan ini sebagai pengganti tandatangan.</p>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Pengawas telah melakukan FLPG dengan sebenarnya dan akan melakukan follow up atas deviasi-deviasi yang ditemukan</label>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_flpg" id="is_flpg1" value="1" @if(!empty($flpg) && $flpg->is_flpg === 1) checked @endif>
                                    <label class="form-check-label" for="is_flpg1">
                                        YA
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_flpg" id="is_flpg2" value="2" @if(!empty($flpg) && $flpg->is_flpg === 2) checked @endif>
                                    <label class="form-check-label" for="is_flpg2">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row justify-content-between">
                            <a class="btn btn-danger text-white" data-back="#section2">Back</a>
                            <button class="btn btn-success mr-1" id="button_submit_flpg" type="submit">Submit</button>
                        </div>
                    </div>
                </section>
            </form>
        </div>
        <div class="container" id="detail"> </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        init_form_element()

        $('#questioning-button').hide();

        
        $(document).ready(function(){
            $('.next').click(function() {
                var nextSection = $(this).data('next');
                var currentSection = $(this).closest('.section');

                if (nextSection) {
                    questioning_flpg(parseInt($('#aktivitas_flpg').val().split(" ")[$('#aktivitas_flpg').val().split(" ").length - 1], 10))
                    currentSection.addClass('hide');
                    $(nextSection).removeClass('hide');
                }
            });

            $('.back').click(function() {
                var backSection = $(this).data('back');
                var currentSection = $(this).closest('.section');

                if (backSection) {
                    questioning_flpg(parseInt($('#aktivitas_flpg').val().split(" ")[$('#aktivitas_flpg').val().split(" ").length - 1], 10))
                    currentSection.addClass('hide');
                    $(backSection).removeClass('hide');
                }
            });

            $('#aktivitas_flpg').change(function() {
                let aktivitas_flpg = $(this).val().split(" ");
                let id = parseInt(aktivitas_flpg[aktivitas_flpg.length - 1], 10);
                questioning_flpg(id);
            });
            console.log(parseInt($('#aktivitas_flpg').val().split(" ")[$('#aktivitas_flpg').val().split(" ").length - 1], 10));
        });

        let questioning_flpg = (id = '') => {
            let url = "{{ route($active_route) }}/options/"+id;

            if (id !== '') {
                $.get(url, (result) => {
                    $('#questioning').html(result);
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
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: 'Refresh and make sure you choice "Aktivitas FLPG Yang akan dilakukan" correctly'
                });
            }
        }

        

        let init_form_flpg = (id = '') =>{
            let $form_flpg = $('#form_flpg'),
                $button_submit_flpg = $('#button_submit_flpg');
                $form_flpg.submit((e) => {
                    e.preventDefault();
                    let dataForm = new FormData($form_flpg.get(0));
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
                                text: 'Data FLPG has been saved.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                detail_flpg(response.id);
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

        let detail_flpg = (id = '') => {
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

        init_form_flpg({{ $flpg->id ?? '' }})
    </script>
@endpush