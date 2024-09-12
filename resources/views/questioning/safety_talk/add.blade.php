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
    <h1>{{$title}}</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Questioning</a></div>
        <div class="breadcrumb-item">{{$title}}</div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>{{$title}}</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid" id="form_input"> 
                    <form id="form_safety_talk" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Tanggal Pelaksanaan Safety Talk</label>
                                <input type="text" class="form-control datepicker" name="tanggal" value="{{ $safety_talk->tanggal ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Nama Pengawas</label>
                                <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $safety_talk->nama_pengawas ?? '' "/>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Lokasi Pelaksanaan Safety Talk</label>
                                <x-select class="select2" name="lokasi" :default="'-- Pilih Lokasi --'" :options=" $list_lokasi " :value=" $safety_talk->lokasi ?? '' "/>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Nama Pemateri Safety Talk</label>
                                <input type="text" class="form-control" name="nama_pemateri" value="{{ $safety_talk->nama_pemateri ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Judul Matei Safety Talk</label>
                                <input type="text" class="form-control" name="judul" value="{{ $safety_talk->judul ?? '' }}">
                            </div>
                            
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Penyelenggara Safety Talk</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="penyelenggara" id="penyenleggara1" value="1" @if(!empty($safety_talk)) @if($safety_talk->penyelenggara === 1) checked @endif @endif>
                                    <label class="form-check-label" for="penyenleggara1">
                                        Internal UT
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="penyelenggara" id="penyenleggara2" value="2"  @if(!empty($safety_talk)) @if($safety_talk->penyelenggara === 2) checked @endif @endif>
                                    <label class="form-check-label" for="penyenleggara2">
                                        Eksternal Customer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="penyelenggara" id="penyenleggara2" value="3"  @if(!empty($safety_talk)) @if($safety_talk->penyelenggara === 3) checked @endif @endif>
                                    <label class="form-check-label" for="penyenleggara2">
                                        Mandiri Mitra Kerja
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="" class="section-title">Dokumentasi (additional)</label>
                                <input type="file" class="dropify" id="dokumentasi" name="dokumentasi" @if(!empty($safety_talk) && $safety_talk->dokumentasi != '') data-default-file="{{ asset("public/storage/$safety_talk->dokumentasi") }}" @endif >
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <div class="row justify-content-between">
                                <button class="btn btn-secondary " type="reset">Reset</button>
                                <button class="btn btn-primary mr-1" type="submit" id="button_submit_safety_talk">Save</button>
                            </div>
                        </div>
                    </form>                    
                </div>
                <div class="container-fluid" id="detail"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>

    init_form_element();

    let init_form_safety_talk = (id = '') =>{
        let $form_safety_talk = $('#form_safety_talk'),
            $button_submit_safety_talk = $('#button_submit_safety_talk');
            $form_safety_talk.submit((e) => {
                e.preventDefault();
                let dataForm = new FormData($form_safety_talk.get(0));
                console.log(dataForm);
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
                            text: 'Data Safety Talk has been saved.',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            detail_safety_talk(response.id);
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

    let detail_safety_talk = (id = '') => {
        let url = "{{ route($active_route) }}/"+id;

        $.get(url, (result) => {
            $('#form_input').hide();
            $('#form_input').html('');
            $('#detail').html(result);
        }).fail((xhr) => {
            $user_table.html(xhr.responseText);
        });
    }

    init_form_safety_talk({{ $safety_talk->id ?? '' }})
    
</script>
@endpush
{{-- info_user(1); --}}