@extends('layout.app')

@push('css')
<style>
    .hide {
        display: none;
    }
</style>
@endpush

@section('content')
<div class="section-header">
    <h1>{{ $title }}</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Form Questioning</a></div>
        <div class="breadcrumb-item">{{ $title }}</div>
    </div>
</div>
<div class="container">
    <div class="container-fluid" id="form_input">
        <form id="form_bbsq_non_service">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4>{{ $title }} Data Form</h4>
                </div>
                <div class="card-body">
                    <section class="section" id="section1">
                        <div class="row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">Tanggal Pelaksanaan Genba</label>
                                <input type="text" class="form-control datepicker" name="tanggal" value="{{ $bbsq_non_service->tanggal ?? '' }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">Nama Pengawas</label>
                                <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $bbsq_non_service->nama_pengawas ?? '' "/>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">Nama Karyawan Yang Diobservasi</label>
                                <input type="text" class="form-control" name="nama_karyawan" value="{{ $bbsq_non_service->nama_karyawan ?? '' }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">Jabatan Karyawan Yang Diobservasi</label>
                                <input type="text" class="form-control" name="jabatan_karyawan" value="{{ $bbsq_non_service->jabatan_karyawan ?? '' }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">Perusahaan Karyawan Yang Diobservasi</label>
                                <x-select class="select2" name="perusahaan_karyawan" :default="'-- Pilih Nama Perusahaan --'" :options=" $list_perusahaan " :value=" $bbsq_non_service->perusahaan_karyawan ?? '' "/>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">Jenis Pekerjaan Yang Sedang Dilakukan</label>
                                <input type="text" class="form-control" name="jenis_pekerjaan" value="{{ $bbsq_non_service->jenis_pekerjaan ?? '' }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">Lokasi / Area Kerja</label>
                                <x-select class="select2" name="lokasi" :default="'-- Pilih Area Kerja --'" :options=" $list_area " :value=" $bbsq_non_service->lokasi ?? '' "/>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <a class="btn btn-primary mr-1 text-white next" data-next="#section2">Next</a>
                        </div>
                    </section>
                    <section class="section hide" id="section2">
                        <div class="container mt-4">
                            <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
    
                            <div class="text-center mb-4">
                                <h3>A. Kondisi Kendaraan</h3>
                            </div>
                        
                            <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
                        
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="bg-info text-white">No</td>
                                        <th class="col-12 bg-info"></th>
                                        <th class="text-center text-white bg-success col-6">Ya</th>
                                        <th class="text-center text-white bg-danger col-6">Tidak</th>
                                        <th class="text-center text-white bg-secondary col-6">N/A</th>
                                    </tr>
                                    @php($no = 1)
                                    @foreach ($option_prosedur as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->pertanyaan }}</td>
                                        <td class="text-center"><input type="radio" name="prosedur_{{$item->identifier}}" value="1" @if(isset($prosedur['prosedur_'.$item->identifier]) && $prosedur['prosedur_'.$item->identifier] == 1) checked @endif></td>
                                        <td class="text-center"><input type="radio" name="prosedur_{{$item->identifier}}" value="2" @if(isset($prosedur['prosedur_'.$item->identifier]) && $prosedur['prosedur_'.$item->identifier] == 2) checked @endif></td>
                                        <td class="text-center"><input type="radio" name="prosedur_{{$item->identifier}}" value="3" @if(isset($prosedur['prosedur_'.$item->identifier]) && $prosedur['prosedur_'.$item->identifier] == 3) checked @endif></td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
    
                            <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
    
                            <div class="text-center mb-4">
                                <h3>B. Alat Peralatan</h3>
                            </div>
                        
                            <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
                        
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="bg-info text-white">No</td>
                                        <th class="col-12 bg-info"></th>
                                        <th class="text-center text-white bg-success col-6">Ya</th>
                                        <th class="text-center text-white bg-danger col-6">Tidak</th>
                                        <th class="text-center text-white bg-secondary col-6">N/A</th>
                                    </tr>
                                    @php($no = 1)
                                    @foreach ($option_alat_peralatan as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->pertanyaan }}</td>
                                        <td class="text-center"><input type="radio" name="peralatan_{{$item->identifier}}" value="1" @if(isset($peralatan['peralatan_'.$item->identifier]) && $peralatan['peralatan_'.$item->identifier] == 1) checked @endif></td>
                                        <td class="text-center"><input type="radio" name="peralatan_{{$item->identifier}}" value="2" @if(isset($peralatan['peralatan_'.$item->identifier]) && $peralatan['peralatan_'.$item->identifier] == 2) checked @endif></td>
                                        <td class="text-center"><input type="radio" name="peralatan_{{$item->identifier}}" value="3" @if(isset($peralatan['peralatan_'.$item->identifier]) && $peralatan['peralatan_'.$item->identifier] == 3) checked @endif></td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
    
                            <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
    
                            <div class="text-center mb-4">
                                <h3>C. Lingkungan Kerja</h3>
                            </div>
                        
                            <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
                        
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="bg-info text-white">No</td>
                                        <th class="col-12 bg-info"></th>
                                        <th class="text-center text-white bg-success col-6">Ya</th>
                                        <th class="text-center text-white bg-danger col-6">Tidak</th>
                                        <th class="text-center text-white bg-secondary col-6">N/A</th>
                                    </tr>
                                    @php($no = 1)
                                    @foreach ($option_lingkungan_kerja as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->pertanyaan }}</td>
                                        <td class="text-center"><input type="radio" name="lingkungan_kerja_{{$item->identifier}}" value="1" @if(isset($lingkungan_kerja['lingkungan_kerja_'.$item->identifier]) && $lingkungan_kerja['lingkungan_kerja_'.$item->identifier] == 1) checked @endif></td>
                                        <td class="text-center"><input type="radio" name="lingkungan_kerja_{{$item->identifier}}" value="2" @if(isset($lingkungan_kerja['lingkungan_kerja_'.$item->identifier]) && $lingkungan_kerja['lingkungan_kerja_'.$item->identifier] == 2) checked @endif></td>
                                        <td class="text-center"><input type="radio" name="lingkungan_kerja_{{$item->identifier}}" value="3" @if(isset($lingkungan_kerja['lingkungan_kerja_'.$item->identifier]) && $lingkungan_kerja['lingkungan_kerja_'.$item->identifier] == 3) checked @endif></td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
    
                            <div class="text-center mb-4">
                                <h3>D. Karyawan</h3>
                            </div>
                        
                            <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
                        
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="bg-info text-white">No</td>
                                        <th class="col-12 bg-info"></th>
                                        <th class="text-center text-white bg-success col-6">Ya</th>
                                        <th class="text-center text-white bg-danger col-6">Tidak</th>
                                        <th class="text-center text-white bg-secondary col-6">N/A</th>
                                    </tr>
                                    @php($no = 1)
                                    @foreach ($option_karyawan as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->pertanyaan }}</td>
                                        <td class="text-center"><input type="radio" name="karyawan_{{$item->identifier}}" value="1" @if(isset($karyawan['karyawan_'.$item->identifier]) && $karyawan['karyawan_'.$item->identifier] == 1) checked @endif></td>
                                        <td class="text-center"><input type="radio" name="karyawan_{{$item->identifier}}" value="2" @if(isset($karyawan['karyawan_'.$item->identifier]) && $karyawan['karyawan_'.$item->identifier] == 2) checked @endif></td>
                                        <td class="text-center"><input type="radio" name="karyawan_{{$item->identifier}}" value="3" @if(isset($karyawan['karyawan_'.$item->identifier]) && $karyawan['karyawan_'.$item->identifier] == 3) checked @endif></td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="row justify-content-between" id="questioning-button">
                            <a class="btn btn-danger mr-1 text-white back" data-back="#section1">Back</a>
                            <a class="btn btn-primary mr-1 text-white next" data-next="#section3">Next</a>
                        </div>
                    </section>
                    <section class="section hide" id="section3">
                        <div class="row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">TINDAKAN Tidak Aman yang ditemukan ?</label>
                                <small class="form-text text-muted">Tulis "Tidak Ada" jika tidak terdapat deviasi</small>
                                <input type="text" class="form-control" name="tta_temuan" value="{{ $bbsq_non_service->tta_temuan ?? '' }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">Kategori  Deviasi TINDAKAN Tidak Aman</label>
                                <small class="form-text text-muted">Tulis "Tidak Ada" jika tidak terdapat deviasi</small>
                                <x-select class="select2" name="kategori_deviasi_tta" :default="'-- Pilih Kategori Deviasi --'" :options=" $list_kategori " :value=" $bbsq_non_service->kategori_deviasi_tta ?? '' "/>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">Follow up atas TINDAKAN Tidak Aman</label>
                                <small class="form-text text-muted">Tulis "Tidak Ada" jika tidak terdapat deviasi</small>
                                <x-select class="select2" name="folowup_tta" :default="'-- Pilih Folow Up --'" :options=" $list_Folowup " :value=" $bbsq_non_service->folowup_tta ?? '' "/>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">KONDISI Tidak Aman yang ditemukan</label>
                                <small class="form-text text-muted">Tulis "Tidak Ada" jika tidak terdapat deviasi</small>
                                <input type="text" class="form-control" name="kta_temuan" value="{{ $bbsq_non_service->kta_temuan ?? '' }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">Kategori  Deviasi KONDISI Tidak Aman</label>
                                <small class="form-text text-muted">Tulis "Tidak Ada" jika tidak terdapat deviasi</small>
                                <x-select class="select2" name="kategori_deviasi_kta" :default="'-- Pilih Kategori Deviasi --'" :options=" $list_kategori " :value=" $bbsq_non_service->kategori_deviasi_kta ?? '' "/>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">Follow up atas KONDISI Tidak Aman</label>
                                <small class="form-text text-muted">Tulis "Tidak Ada" jika tidak terdapat deviasi</small>
                                <x-select class="select2" name="folowup_kta" :default="'-- Pilih Folow Up --'" :options=" $list_Folowup " :value=" $bbsq_non_service->folowup_kta ?? '' "/>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label class="section-title">Kontrol Tambahan yang dilakukan (jika ada):</label>
                                <input type="text" class="form-control" name="kontrol_tambahan" value="{{ $bbsq_non_service->kontrol_tambahan ?? '' }}">
                            </div>
                        </div>
                        <div class="row justify-content-between" id="questioning-button">
                            <a class="btn btn-danger mr-1 text-white back" data-back="#section2">Back</a>
                            <a class="btn btn-primary mr-1 text-white next" data-next="#section4">Next</a>
                        </div>
                    </section>
                    <section class="section hide" id="section4">
                        <h5>Validasi</h5>
                        <h5>Pernyataan Validasi ini sebagai pengganti tandatangan pada form hardcopy.</h5>
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Observer telah memberikan feedback terhadap karyawan yang diobservasi, atas catatan-catatan positif maupun need improvement dari hasil observasi ini !</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="feedback_1" id="feedback_11" value="1" @if(!empty($bbsq_non_service) && $bbsq_non_service->feedback_1 === 1) checked @endif>
                                    <label class="form-check-label" for="feedback_11">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="feedback_1" id="feedback_12" value="2" @if(!empty($bbsq_non_service) && $bbsq_non_service->feedback_1 === 2) checked @endif>
                                    <label class="form-check-label" for="feedback_12">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Karyawan yang diobservasi (Observed) telah memahami, mengerti dan menyetujui atas semua feedback yang telah disampaikan oleh observer !</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="feedback_2" id="feedback_21" value="1" @if(!empty($bbsq_non_service) && $bbsq_non_service->feedback_2 === 1) checked @endif>
                                    <label class="form-check-label" for="feedback_21">
                                        Ya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="feedback_2" id="feedback_22" value="2" @if(!empty($bbsq_non_service) && $bbsq_non_service->feedback_2 === 2) checked @endif>
                                    <label class="form-check-label" for="feedback_22">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row justify-content-between">
                                <a class="btn btn-danger text-white back" data-back="#section3">Back</a>
                                <button class="btn btn-success mr-1" id="button_submit_bbsq_non_service" type="submit">Submit</button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </form>
    </div>
    <div class="container-fluid" id="detail"> </div>
</div>
@endsection

@push('js')
<script>
    init_form_element()

    $(document).ready(function(){
        $('.next').click(function() {
            var nextSection = $(this).data('next');
            $(this).closest('.section').hide();
            $(nextSection).show();
        });

        $('.back').click(function() {
            var backSection = $(this).data('back');
            $(this).closest('.section').hide();
            $(backSection).show();
        });
    });

    let questioning_bbsq_non_service = (id = '') => {
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
                footer: 'Refresh and make sure you choice "Aktivitas BBSQ Non Service Yang akan dilakukan" correctly'
            });
        }
    }

    

    let init_form_bbsq_non_service = (id = '') =>{
        let $form_bbsq_non_service = $('#form_bbsq_non_service'),
            $button_submit_bbsq_non_service = $('#button_submit_bbsq_non_service');
            $form_bbsq_non_service.submit((e) => {
                e.preventDefault();
                let dataForm = new FormData($form_bbsq_non_service.get(0));
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
                            text: 'Data BBSQ Non Service has been saved.',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            detail_bbsq_non_service(response.id);
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

    let detail_bbsq_non_service = (id = '') => {
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

    init_form_bbsq_non_service({{ $bbsq_non_service->id ?? '' }})

</script>
@endpush