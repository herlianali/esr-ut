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
                <h4>{{ $title }} Data Form</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid" id="form_input">
                    <form id="form_housekeeping" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title pb-4">Tanggal Pelaksanaan Housekeeping</label>
                                <input type="text" class="form-control datepicker" name="tanggal" value="{{ format_date($housekeeping->tanggal) ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Nama Pengawas</label>
                                <small class="form-text text-muted">Nama Pengawas Yang Mendapat Target 13 Atau 9 PW</small>
                                <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $housekeeping->nama_pengawas ?? '' "/>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 pl-4">
                                <div class="row">
                                    <label class="section-title">Lokasi Pelaksanaan Housekeeping</label>
                                </div>
                                <div class="row">
                                    <div class="form-check col-lg-2 col-md-2 col-5 m-1">
                                        <input class="form-check-input" type="radio" name="lokasi" id="lokasi1" value="Office" @if(!empty($housekeeping)) @if($housekeeping->lokasi === "Office") checked @endif @endif>
                                        <label class="form-check-label" for="lokasi1">
                                            Office
                                        </label>
                                    </div>
                                    <div class="form-check col-lg-3 col-md-3 col-5 m-1">
                                        <input class="form-check-input" type="radio" name="lokasi" id="lokasi2" value="Warehouse" @if(!empty($housekeeping)) @if($housekeeping->lokasi === "Warehouse") checked @endif @endif>
                                        <label class="form-check-label" for="lokasi2">
                                            Warehouse
                                        </label>
                                    </div>
                                    <div class="form-check col-lg-4 col-md-4 col-5 m-1">
                                        <input class="form-check-input" type="radio" name="lokasi" id="lokasi3" value="Workshop" @if(!empty($housekeeping)) @if($housekeeping->lokasi === "Workshop") checked @endif @endif>
                                        <label class="form-check-label" for="lokasi3">
                                            Workshop
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Detail area yang dilakukan housekeeping</label>
                                <input type="text" class="form-control" name="detail" value="{{ $housekeeping->detail ?? '' }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="section-title">Dokumentasi</label>
                                <small class="form-text text-muted">Foto dokumentasi pelaksanaan housekeeping</small>
                                <input type="file" class="dropify" id="dokumentasi" name="dokumentasi" @if(!empty($housekeeping) && $housekeeping->dokumentasi != '') data-default-file="{{ asset("public/storage/$housekeeping->dokumentasi") }}" @endif>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <div class="row justify-content-between">
                                <button class="btn btn-danger " type="reset">Reset</button>
                                <button class="btn btn-success mr-1" id="button_submit_housekeeping" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container-fluid" id="detail"> </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        init_form_element()

        let init_form_housekeeping = (id = '') =>{
            let $form_housekeeping = $('#form_housekeeping'),
                $button_submit_housekeeping = $('#button_submit_housekeeping');
                $form_housekeeping.submit((e) => {
                    e.preventDefault();
                    let dataForm = new FormData($form_housekeeping.get(0));
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
                                text: 'Data Housekeeping has been saved.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                detail_housekeeping(response.id);
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

        let detail_housekeeping = (id = '') => {
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

        init_form_housekeeping({{ $housekeeping->id ?? '' }})
    </script>
@endpush