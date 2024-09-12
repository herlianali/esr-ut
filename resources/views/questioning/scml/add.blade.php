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
                    <form id="form_scml">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Tanggal Pelaksanaan Meeting</label>
                                <input type="text" class="form-control datepicker" name="tanggal" value="{{ format_date($scml->tanggal) ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Nama Pengawas</label>
                                <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $scml->nama_pengawas ?? '' " />
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Lokasi Pelaksanaan Meeting Level 2</label>
                                <input type="text" class="form-control" name="lokasi_pelaksanaan" value="{{ $scml->lokasi_pelaksanaan ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="" class="section-title">Dokumentasi Pelaksanaan Meeting Level 2</label>
                                <input type="file" class="dropify" id="file" name="file" @if(!empty($scml) && $scml->file != '') data-default-file="{{ asset("public/storage/$scml->file") }}" @endif>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <div class="row justify-content-between">
                                <button class="btn btn-danger " type="reset">Reset</button>
                                <button class="btn btn-success mr-1" id="button_submit_scml" type="submit">Submit</button>
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

        let init_form_scml = (id = '') =>{
            let $form_scml = $('#form_scml'),
                $button_submit_scml = $('#button_submit_scml');
                $form_scml.submit((e) => {
                    e.preventDefault();
                    let dataForm = new FormData($form_scml.get(0));
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
                                text: 'Data SCML has been saved.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                detail_scml(response.id);
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

        let detail_scml = (id = '') => {
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

        init_form_scml({{ $scml->id ?? '' }})
    </script>
@endpush