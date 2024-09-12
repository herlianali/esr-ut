@extends('layout.app')

@push('css')
<style>
    .hide {
        display: none;
    }

    .wrapped-text {
        max-width: 300px;
        word-wrap: break-word;
        white-space: normal;
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
        <div class="breadcrumb-item active"><a href="#">Form Questioning</a></div>
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
                    <form id="form_audit_apd">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title pb-4">Tanggal Inspeksi / Sidak</label>
                                <input type="text" class="form-control datepicker mt-1" name="tanggal" value="{{ $audit_apd->tanggal ?? '' }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">Nama Pengawas</label>
                                <small class="form-text text-muted">Nama Pengawas Yang Memiliki Target 09 Atau 13 PW</small>
                                <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $audit_apd->nama_pengawas ?? '' "/>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title ">MIA Lokasi Pelaksanaan Inspeksi / Sidak APD</label>
                                <input type="text" class="form-control" name="mialokasi" value="{{ $audit_apd->mialokasi ?? '' }}">
                            </div>
                            <div class="form-group col-md-12">
                                <div class="container mt-4">
                                    <div class="text-center mb-4">
                                        <h3>Checklist Audit APD</h3>
                                        <p>Periksa kelengkapan dan kondisi kelayakan APD setiap karyawan yang diaudit.</p>
                                    </div>
                                
                                    <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
                                
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td class="bg-info text-white" style="width: 1%; white-space: nowrap;">No</td>
                                                <th class="bg-info" style="width: 50%; white-space: nowrap;"></th>
                                                <th class="text-center text-white bg-success">Lengkap</th>
                                                <th class="text-center text-white bg-danger">Tidak Lengkap</th>
                                                <th class="text-center text-white bg-secondary">N/A</th>
                                            </tr>
                                            @php($no = 1)
                                            @foreach ($options_audit as $item)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $item->pertanyaan }}</td>
                                                    <td class="text-center">
                                                        <input type="radio" name="checklist_{{ $item->identifier }}" value="1" @if(isset($checklist['checklist_'.$item->identifier]) && $checklist['checklist_'.$item->identifier] == 1) checked @endif>
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="radio" name="checklist_{{ $item->identifier }}" value="2" @if(isset($checklist['checklist_'.$item->identifier]) && $checklist['checklist_'.$item->identifier] == 2) checked @endif>
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="radio" name="checklist_{{ $item->identifier }}" value="3" @if(isset($checklist['checklist_'.$item->identifier]) && $checklist['checklist_'.$item->identifier] == 3) checked @endif>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Jumlah Karyawan Yang Diaudit (Berapa Orang)</label>
                                <small class="form-text text-muted">Tuliskan deviasi-deviasi yang ditemukan pada item pemeriksaan di atas. Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. Tulis "Tidak Ada Deviasi" jika tidak ditemukan deviasi.</small>
                                <input type="text" class="form-control" name="jumlah_karyawan_audit" value="{{ $audit_apd->jumlah_karyawan_audit ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Apakah ada deviasi dari hasil audit APD?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_deviasi" id="is_deviasi1" value="1" @if(!empty($audit_apd) && $audit_apd->is_deviasi === 1) checked @endif>
                                    <label class="form-check-label" for="is_deviasi1">
                                        YA
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_deviasi" id="is_deviasi2" value="2" @if(!empty($audit_apd) && $audit_apd->is_deviasi === 2) checked @endif>
                                    <label class="form-check-label" for="is_deviasi2">
                                        TIDAK
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Deviasi</label>
                                <input type="text" class="form-control" name="deviasi" value="{{ $audit_apd->deviasi ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Jumlah Karyawan Yang Ditemukan Diviasi (Berapa Orang)</label>
                                <input type="text" class="form-control" name="jumlah_karyawan_deviasi" value="{{ $audit_apd->jumlah_karyawan_deviasi ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Detail Temuan</label>
                                <small class="form-text text-muted">Tuliskan deviasi-deviasi yang ditemukan pada item pemeriksaan di atas. Gunakan nomor urut jika ditemukan lebih dari 1 deviasi.</small>
                                <input type="text" class="form-control" name="detail_temuan" value="{{ $audit_apd->detail_temuan ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Nama Karyawan yang Ditemukan Deviasi</label>
                                <small class="form-text text-muted pb-4">Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. </small>
                                <input type="text" class="form-control" name="nama_karyawan" value="{{ $audit_apd->nama_karyawan ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Jabatan Karyawan Yang Ditemukan Deviasi</label>
                                <small class="form-text text-muted">Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. </small>
                                <input type="text" class="form-control" name="jabatan_karyawan" value="{{ $audit_apd->jabatan_karyawan ?? '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="section-title pb-4">Perusahaan Karyawan Yang Ditemukan Deviasi</label>
                                <x-select class="select2" name="perusahaan" :default="'-- Pilih Perusahaan --'" :options=" $list_perusahaan " :value=" $audit_apd->perusahaan ?? '' "/>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Validasi</label>
                                <input type="text" class="form-control" name="validasi" value="{{ $audit_apd->validasi ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Pengawas telah melakukan audit APD dengan sebenarnya, dan telah memberikan feedback kepada karyawan yang ditemukan deviasi, serta akan melakukan follow up atas deviasi-deviasi yang ditemukan</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_audit" id="is_audit1" value="1" @if(!empty($audit_apd) && $audit_apd->is_audit === 1) checked @endif>
                                    <label class="form-check-label" for="is_audit1">
                                        YA
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_audit" id="is_audit2" value="2" @if(!empty($audit_apd) && $audit_apd->is_audit === 2) checked @endif>
                                    <label class="form-check-label" for="is_audit2">
                                        TIDAK
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Catatan Khusus (Jika Ada)</label>
                                <textarea name="catatan_khusus" class="form-control" id="catatan_khusus" cols="30" rows="10">{{ $audit_apd->catatan_khusus ?? '' }}</textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <div class="row justify-content-between">
                                <button class="btn btn-danger " type="reset">Reset</button>
                                <button class="btn btn-success mr-1" id type="submit">Submit</button>
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
        let init_form_audit_apd = (id = '') =>{
            let $form_audit_apd = $('#form_audit_apd'),
                $button_submit_audit_apd = $('#button_submit_audit_apd');
                $form_audit_apd.submit((e) => {
                    e.preventDefault();
                    let dataForm = new FormData($form_audit_apd.get(0));
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
                                text: 'Data Audit APD has been saved.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                detail_audit_apd(response.id);
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

        let detail_audit_apd = (id = '') => {
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

        init_form_audit_apd({{ $audit_apd->id ?? '' }})
    </script>
@endpush