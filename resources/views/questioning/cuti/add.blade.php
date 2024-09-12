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
                    <form id="form_cuti">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Nama Pengawas</label>
                                <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $cuti->nama_pengawas ?? '' "/>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Periode Bulan</label>
                                <x-select class="select2" name="bulan" :default="'-- Pilih Periode Bulan --'" :options=" array_bulan() " :value=" $cuti->bulan ?? '' "/>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Jumlah total hari anda tidak masuk bekerja (selain off mingguan) ?</label>
                                <small class="form-text text-muted">Khusus hari cuti, dinas, training, sakit dan atau izin khusus. Tidak termasuk hari off mingguan.</small>
                                <input type="text" class="form-control" name="total_cuti" value="{{ $cuti->total_cuti ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Alasan tidak masuk bekerja (selain off mingguan)</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="alasan" id="alasan1" value="1" @if(!empty($cuti)) @if($cuti->alasan === 1) checked @endif @endif>
                                    <label class="form-check-label" for="alasan1">
                                        Cuti
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="alasan" id="alasan2" value="2"  @if(!empty($cuti)) @if($cuti->alasan === 2) checked @endif @endif>
                                    <label class="form-check-label" for="alasan2">
                                        Dinas / Training
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="alasan" id="alasan2" value="3"  @if(!empty($cuti)) @if($cuti->alasan === 3) checked @endif @endif>
                                    <label class="form-check-label" for="alasan2">
                                        Izin Khusus (Sakit/izin/dll)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <div class="row justify-content-between">
                                <button class="btn btn-danger " type="reset">Reset</button>
                                <button class="btn btn-success mr-1" type="submit" id="button_submit_cuti">Save</button>
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

    let init_form_cuti = (id = '') =>{
        let $form_cuti = $('#form_cuti'),
            $button_submit_cuti = $('#button_submit_cuti');
            $form_cuti.submit((e) => {
                e.preventDefault();
                let dataForm = new FormData($form_cuti.get(0));
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
                            text: 'Data Cuti Has Been Saved.',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            detail_cuti(response.id);
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

    let detail_cuti = (id = '') => {
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

    init_form_cuti({{ $cuti->id ?? '' }})
    
</script>
@endpush
{{-- info_user(1); --}}