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
    <h1>Inspeksi Tools</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Form Questioning</a></div>
        <div class="breadcrumb-item">Inspeksi Tools</div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>Report Laporan KO dan Inspeksi Tools Data Form</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid" id="form_input">
                    <form id="form_inspeksi_tools" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Tanggal</label>
                                <input type="text" class="form-control datepicker" name="tanggal" value="{{ $inspeksi_tools->tanggal ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Nama Pengawas</label>
                                <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $inspeksi_tools->nama_pengawas ?? '' "/>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Posisi Anda</label>
                                <x-select class="select2" name="posisi" :default="'-- Pilih Posisi Anda --'" :options=" $list_posisi " :value=" $inspeksi_tools->posisi ?? '' "/>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Laporan KO</label>
                                <input type="text" class="form-control" name="laporan_ko" value="{{ $inspeksi_tools->laporan_ko ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Apakah laporan KO bulan sebelumnya sudah dibuat dan dikirim ke PIC KO ?</label>
                                <small class="form-text text-muted">Laporan KO wajib dibuat masing-masing departemen dan mitra kerja setiap bulannya, dan dikirimkan ke PIC KO paling lambat tanggal 5 setiap bulannya.</small>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_laporan_ko" id="is_laporan_ko1" value="1" @if(!empty($inspeksi_tools) && $inspeksi_tools->is_laporan_ko === 1) checked @endif>
                                    <label class="form-check-label" for="is_laporan_ko1">
                                        YA
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_laporan_ko" id="is_laporan_ko2" value="2" @if(!empty($inspeksi_tools) && $inspeksi_tools->is_laporan_ko === 2) checked @endif>
                                    <label class="form-check-label" for="is_laporan_ko2">
                                        TIDAK
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Tanggal Pengiriman Laporan KO ke PIC KO</label>
                                <input type="text" class="form-control datepicker" name="tanggal_laporan" value="{{ $inspeksi_tools->tanggal_laporan ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Inspeksi Tools</label>
                                <input type="text" class="form-control" name="inspeksi_tools" value="{{ $inspeksi_tools->inspeksi_tools ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Apakah Inspeksi Tools Telah Dilaksanakan</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_inspeksi_tools" id="is_inspeksi_tools1" value="1" @if(!empty($inspeksi_tools) && $inspeksi_tools->is_inspeksi_tools === 1) checked @endif>
                                    <label class="form-check-label" for="is_inspeksi_tools1">
                                        YA
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_inspeksi_tools" id="is_inspeksi_tools2" value="2" @if(!empty($inspeksi_tools) && $inspeksi_tools->is_inspeksi_tools === 2) checked @endif>
                                    <label class="form-check-label" for="is_inspeksi_tools2">
                                        TIDAK
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title pb-4">Tanggal Pelaksanaan Inspeksi Tools Bulan Ini</label>
                                <input type="text" class="form-control datepicker" name="tanggal_inspeksi" value="{{ $inspeksi_tools->tanggal_inspeksi ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Jenis Tools Yang Di Inspeksi</label>
                                <small class="form-text text-muted">Tuliskan Jenis Tools Yang Diinspeksi Sesuai Checklist Yang Diisi</small>
                                <input type="text" class="form-control" name="jenis_tools" value="{{ $inspeksi_tools->jenis_tools ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Deviasi Yang Ditemukan (Jika ada)</label>
                                <small class="form-text text-muted">Tuliskan dengan nomor urut jika deviasi yang ditemukan lebih dari 1. Tulis "Tidak Ada Deviasi" jika tidak ditemukan deviasi.</small>
                                <input type="text" class="form-control" name="deviasi_temuan" value="{{ $inspeksi_tools->deviasi_temuan ?? '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="section-title">Dokumentasi pelaksanaan inspeksi tools (foto atau scan form chekclist inspeksi tools yang sudah ditandatangani oleh tool keeper dan pengawas ybs)</label>
                                <small class="form-text text-muted">Untuk non service, maka checklist disesuaikan dengan checklist laporan KO yang sudah distandarkan. Segera hubungi PIC KO jika mengalami kesulitan dalam hal checklist dan pengisiannya.</small>
                                <input type="file" class="dropify" id="file" name="file" @if(!empty($inspeksi_tools) && $inspeksi_tools->file != '') data-default-file="{{ asset("public/storage/$inspeksi_tools->file") }}" @endif>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <div class="row justify-content-between">
                                <button class="btn btn-danger" id="button_reset_inspeksi_tools" type="reset">Reset</button>
                                <button class="btn btn-primary mr-1" id="button_submit_inspeksi_tools" type="submit">Submit</button>
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

        let init_form_inspeksi_tools = (id = '') =>{
            let $form_inspeksi_tools = $('#form_inspeksi_tools'),
                $button_submit_inspeksi_tools = $('#button_submit_inspeksi_tools');
                $form_inspeksi_tools.submit((e) => {
                    e.preventDefault();
                    let dataForm = new FormData($form_inspeksi_tools.get(0));
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
                                text: 'Data Inspeksi Tools has been saved.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                detail_inspeksi_tools(response.id);
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

        let detail_inspeksi_tools = (id = '') => {
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

        init_form_inspeksi_tools({{ $inspeksi_tools->id ?? '' }})

        $('#button_reset_inspeksi_tools').click((e) => {

        });
    </script>
@endpush