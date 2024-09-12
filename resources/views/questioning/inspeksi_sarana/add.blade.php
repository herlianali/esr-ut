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
    <h1>Inspeksi Sarana</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Form Questioning</a></div>
        <div class="breadcrumb-item">Inspeksi Sarana</div>
    </div>
</div>
<div class="card">
    {{-- <div class="card-header">
        <a href="{{ url()->previous() }}" class="btn btn-icon">
            <i class="fas fa-arrow-circle-left" style="font-size:30px;"></i>
        </a>
        <h4>Permohonan Surat</h4>
    </div> --}}
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>Form Inspeksi Sarana</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid" id="form_input">
                    <form id="form_inspeksi_sarana">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Tanggal Inspeksi / Sidak</label>
                                <input type="text" class="form-control datepicker" name="tanggal" value="{{ $inspeksi_sarana->tanggal ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Nama Pengawas</label>
                                <small class="form-text text-muted">Nama Pengawas Yang Mendapat Target 09 Atau 13 PW</small>
                                <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $inspeksi_sarana->nama_pengawas ?? '' "/>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title pb-4">Lokasi Pelaksanaan Inspeksi / Sidak Sarana</label>
                                <input type="text" class="form-control" name="lokasi_inspeksi" value="{{ $inspeksi_sarana->lokasi_inspeksi ?? '' }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title pb-4">Nomor Lambang Unit Yang Dilakukan Inspeksi / Sidak Sarana</label>
                                <input type="text" class="form-control" name="nomor_lambung" value="{{ $inspeksi_sarana->nomor_lambung ?? '' }}">
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label class="section-title">Checklist Inspeksi Sarana / Kendaraan</label>
                                <input type="text" class="form-control" name="checklist_inspeksi" value="{{ $inspeksi_sarana->checklist_inspeksi ?? '' }}">
                            </div>
                            <div class="container mt-4">
                                <div class="text-center mb-4">
                                    <h3>A. Kondisi Kendaraan</h3>
                                </div>
                            
                                <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
                            
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td class="bg-info text-white">No</td>
                                            <th class="col-12 bg-info"></th>
                                            <th class="text-center text-white bg-success col-6">Normal</th>
                                            <th class="text-center text-white bg-danger col-6">Tidak Normal</th>
                                            <th class="text-center text-white bg-secondary col-6">N/A</th>
                                        </tr>
                                        @php($no = 1)
                                        @foreach ($options_kondisi_kendaraan as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->pertanyaan }}</td>
                                            <td class="text-center"><input type="radio" name="kondisi_kendaraan_{{$item->identifier}}" value="1" @if(isset($kondisi['kondisi_kendaraan_'.$item->identifier]) && $kondisi['kondisi_kendaraan_'.$item->identifier] == 1) checked @endif></td>
                                            <td class="text-center"><input type="radio" name="kondisi_kendaraan_{{$item->identifier}}" value="2" @if(isset($kondisi['kondisi_kendaraan_'.$item->identifier]) && $kondisi['kondisi_kendaraan_'.$item->identifier] == 2) checked @endif></td>
                                            <td class="text-center"><input type="radio" name="kondisi_kendaraan_{{$item->identifier}}" value="3" @if(isset($kondisi['kondisi_kendaraan_'.$item->identifier]) && $kondisi['kondisi_kendaraan_'.$item->identifier] == 3) checked @endif></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label class="section-title">Catatan deviasi dari item KONDISI KENDARAAN</label>
                                <small class="form-text text-muted">Tuliskan deviasi-deviasi yang ditemukan pada item pemeriksaan di atas. Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. Tulis "Tidak Ada Deviasi" jika tidak ditemukan deviasi.</small>
                                <input type="text" class="form-control" name="catatan_kondisi_kendaraan" value="{{ $inspeksi_sarana->catatan_kondisi_kendaraan ?? '' }}">
                            </div>

                            <div class="container mt-4">
                                <div class="text-center mb-4">
                                    <h3>B. Driver dan Penumpang</h3>
                                </div>
                            
                                <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
                            
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td class="bg-info text-white">No</td>
                                            <th class="col-12 bg-info"></th>
                                            <th class="text-center text-white bg-success col-6">Normal</th>
                                            <th class="text-center text-white bg-danger col-6">Tidak Normal</th>
                                            <th class="text-center text-white bg-secondary col-6">N/A</th>
                                        </tr>
                                        @php($no = 1)
                                        @foreach ($options_driver as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->pertanyaan }}</td>
                                            <td class="text-center"><input type="radio" name="driver_{{ $item->identifier }}" value="1" @if(isset($driver['driver_'.$item->identifier]) && $driver['driver_'.$item->identifier] == 1) checked @endif></td>
                                            <td class="text-center"><input type="radio" name="driver_{{ $item->identifier }}" value="2" @if(isset($driver['driver_'.$item->identifier]) && $driver['driver_'.$item->identifier] == 2) checked @endif></td>
                                            <td class="text-center"><input type="radio" name="driver_{{ $item->identifier }}" value="3" @if(isset($driver['driver_'.$item->identifier]) && $driver['driver_'.$item->identifier] == 3) checked @endif></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label class="section-title">Catatan deviasi dari item DRIVER & PENUMPANG</label>
                                <small class="form-text text-muted">Tuliskan deviasi-deviasi yang ditemukan pada item pemeriksaan di atas. Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. Tulis "Tidak Ada Deviasi" jika tidak ditemukan deviasi.</small>
                                <input type="text" class="form-control" name="catatan_penumpang" value="{{ $inspeksi_sarana->catatan_penumpang ?? '' }}">
                            </div>

                            <div class="container mt-4">
                                <div class="text-center mb-4">
                                    <h3>C. Prosedur & Standar</h3>
                                </div>
                            
                                <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
                            
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td class="bg-info text-white">No</td>
                                            <th class="col-12 bg-info"></th>
                                            <th class="text-center text-white bg-success col-6">Normal</th>
                                            <th class="text-center text-white bg-danger col-6">Tidak Normal</th>
                                            <th class="text-center text-white bg-secondary col-6">N/A</th>
                                        </tr>
                                        @php($no = 1)
                                        @foreach ($options_prosedur as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->pertanyaan }}</td>
                                                <td class="text-center">
                                                    <input type="radio" name="prosedur_{{ $item->identifier }}" value="1" @if(isset($prosedur['prosedur_'.$item->identifier]) && $prosedur['prosedur_'.$item->identifier] == 1) checked @endif>
                                                </td>
                                                <td class="text-center">
                                                    <input type="radio" name="prosedur_{{ $item->identifier }}" value="2" @if(isset($prosedur['prosedur_'.$item->identifier]) && $prosedur['prosedur_'.$item->identifier] == 2) checked @endif>
                                                </td>
                                                <td class="text-center">
                                                    <input type="radio" name="prosedur_{{ $item->identifier }}" value="3" @if(isset($prosedur['prosedur_'.$item->identifier]) && $prosedur['prosedur_'.$item->identifier] == 3) checked @endif>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            {{-- @php(var_dump($prosedur)) --}}
                            <div class="form-group col-md-12 col-sm-12">
                                <label class="section-title">Catatan deviasi dari item PROSEDUR & STANDAR</label>
                                <small class="form-text text-muted">Tuliskan deviasi-deviasi yang ditemukan pada item pemeriksaan di atas. Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. Tulis "Tidak Ada Deviasi" jika tidak ditemukan deviasi.</small>
                                <input type="text" class="form-control" name="catatan_prosedur" value="{{ $inspeksi_sarana->catatan_prosedur ?? '' }}">
                            </div>
                            
                            <div class="form-group col-md-12 col-sm-12">
                                <label class="section-title">Pengawas telah memberikan feedback kepada karyawan, dan akan melakukan follow up atas deviasi-deviasi yang ditemukan</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_feedback" id="is_feedback1" value="1" @if(!empty($inspeksi_sarana) && $inspeksi_sarana->is_feedback === 1) checked @endif>
                                    <label class="form-check-label" for="is_feedback1">
                                        YA
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_feedback" id="is_feedback2" value="2" @if(!empty($inspeksi_sarana) && $inspeksi_sarana->is_feedback === 2) checked @endif>
                                    <label class="form-check-label" for="is_feedback2">
                                        TIDAK
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label class="section-title">Catatan Khusus(Jika ada)</label>
                                <input type="text" class="form-control" name="catatan_khusus" value="{{ $inspeksi_sarana->catatan_khusus ?? '' }}">
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <div class="row justify-content-between">
                                <button class="btn btn-danger " type="reset">Reset</button>
                                <button class="btn btn-success mr-1" id="button_submit_inspeksi_sarana" type="submit">Submit</button>
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
    init_form_element();

    let init_form_inspeksi_sarana = (id = '') =>{
        let $form_inspeksi_sarana = $('#form_inspeksi_sarana'),
            $button_submit_inspeksi_sarana = $('#button_submit_inspeksi_sarana');
            $form_inspeksi_sarana.submit((e) => {
                e.preventDefault();
                let dataForm = new FormData($form_inspeksi_sarana.get(0));
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
                            text: 'Data Inspeksi Sarana has been saved.',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            detail_inspeksi_sarana(response.id);
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

    let detail_inspeksi_sarana = (id = '') => {
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

    init_form_inspeksi_sarana({{ $green_card->id ?? '' }})
</script>
@endpush