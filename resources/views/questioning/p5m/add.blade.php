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
    <h1>P5M</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Form Questioning</a></div>
        <div class="breadcrumb-item">P5M</div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>P5M Data Form</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid" id="form_input">
                    <form id="form_p5m">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Tanggal Pelaksanaan P5M</label>
                                <input type="text" class="form-control datepicker" name="tanggal" value="{{ $p5m->tanggal ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Shift / Giliran Kerja</label>
                                <x-select class="select2" name="shift" :default="'-- Pilih Shift --'" :options=" [1 => 'Day / Siang', 2 => 'Night / Malam'] " :value=" $p5m->shift ?? '' "/>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Nama Pengawas</label>
                                <small class="form-text text-muted">Nama Pengawas Yang Mendapat Target 13 Atau 9 PW</small>
                                <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $p5m->nama_pengawas ?? '' "/>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title pb-4">Dokumentasi</label>
                                <input type="text" class="form-control" name="dokumentasi" value="{{ $p5m->dokumentasi ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title pb-4">Nama Pemateri P5M</label>
                                <input type="text" class="form-control" name="nama_pemateri" value="{{ $p5m->nama_pengawas ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Materi KPLH Yang Disampaikan </label>
                                <small class="form-text text-muted">Setiap P5M Harus Ada Penyampaian Materi KPLH</small>
                                <input type="text" class="form-control" name="materi_kplh" value="{{ $p5m->materi_kplh ?? '' }}">
                            </div>
                            <div class="form-group col-md-12 col-12">
                                <label for="" class="section-title">Foto Dokumentasi Pelaksanaan P5M (foto/absensi)</label>
                                <input type="file" class="dropify" id="foto" name="foto" @if(!empty($p5m) && $p5m->foto != '') data-default-file="{{ asset("public/storage/$p5m->foto") }}" @endif>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer row justify-content-between">
                            <button class="btn btn-secondary " type="reset">Reset</button>
                            <button class="btn btn-primary mr-1" type="submit">Submit</button>
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
        init_form_element()

        let init_form_p5m = (id = '') =>{
            let $form_p5m = $('#form_p5m'),
                $button_submit_p5m = $('#button_submit_p5m');
                $form_p5m.submit((e) => {
                    e.preventDefault();
                    let dataForm = new FormData($form_p5m.get(0));
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
                                text: 'Data P5M has been saved.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                detail_p5m(response.id);
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

        let detail_p5m = (id = '') => {
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

        init_form_p5m({{ $p5m->id ?? '' }})
    </script>
@endpush