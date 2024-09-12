@extends('layout.app')

@push('css')
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
    <form action="" method="">
        <div class="card">
            <div class="card-header">
                <h4>{{ $title }} Data Form</h4>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="section-title">Tanggal Pelaksanaan Genba</label>
                                    <input type="text" class="form-control datepicker">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="section-title">Nama Pengawas</label>
                                    <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $bbsq_non_service->nama_pengawas ?? '' "/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="section-title">Nama Karyawan Yang Diobservasi</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="section-title">Jabatan Karyawan Yang Diobservasi</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="section-title">Perusahaan Karyawan Yang Diobservasi</label>
                                    <x-select class="select2" name="perusahaan" :default="'-- Pilih Nama Perusahaan --'" :options=" $list_perusahaan " :value=" $bbsq_non_service->perusahaan ?? '' "/>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="section-title">Jenis Pekerjaan Yang Sedang Dilakukan</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="section-title">Lokasi / Area Kerja</label>
                                    <x-select class="select2" name="area" :default="'-- Pilih Area Kerja --'" :options=" $list_area " :value=" $bbsq_non_service->area ?? '' "/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Checklist BBSQ Non Service</h4>
            </div>
        </div>
        <div class="row container">
            <div class="card col-lg-5 col-md-5 col-sm-12 col-12 mx-auto" >
                <div class="card-body ">
                    <h5>Prosedur</h5>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-2">
                            YA
                        </div>
                        <div class="col-md-2">
                            TIDAK
                        </div>
                        <div class="col-md-2">
                            N/A
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">JSA tersedia di tempat kerja</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">JSA telah disosialisasikan kepada seluruh tim kerja</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">JSA telah diikuti dalam proses kerja</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Sistem isolasi (LOTO dijalankan dengan baik)</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Terdapat rambu-rambu atau sistem peringatan yang memadai</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Izin Kerja Khusus dilengkapi</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Mempunyai kewenangan yang sesuai (KIMPER)</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="row">
                        {{-- <div class="custom-control custom-radio">
                            <label class="custom-control-label" for="customRadio1">YA</label>
                            <input type="radio" id="customRadio1" name="customRadio1" class="custom-control-input">
                        </div>                    
                        <div class="custom-control custom-radio">
                            <label class="custom-control-label" for="customRadio1">TIDAK</label>
                            <input type="radio" id="customRadio1" name="customRadio1" class="custom-control-input">
                        </div>
                        <div class="custom-control custom-radio">
                            <label class="custom-control-label" for="customRadio1">N/A</label>
                            <input type="radio" id="customRadio1" name="customRadio1" class="custom-control-input">
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="card col-lg-5 col-md-5 col-sm-12 col-12 mx-auto" >
                <div class="card-body ">
                    <h5>ALAT PERALATAN</h5>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-2">
                            YA
                        </div>
                        <div class="col-md-2">
                            TIDAK
                        </div>
                        <div class="col-md-2">
                            N/A
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Kondisi alat / tools yang digunakan masih layak dan aman untuk digunakan</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Peralatan sudah diperiksa/diinspeksi</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Alat digunakan dengan benar (cara yang benar dan sesuai peruntukannya</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Hanya peralatan yang diperlukan yang berada di tempat kerja (ringkas)</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row container">
            <div class="card col-lg-5 col-md-5 col-sm-12 col-12 mx-auto" >
                <div class="card-body ">
                    <h5>LINGKUNGAN KERJA</h5>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-2">
                            YA
                        </div>
                        <div class="col-md-2">
                            TIDAK
                        </div>
                        <div class="col-md-2">
                            N/A
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Kebersihan dan denah kerja yang baik</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Area kerja memadai (tidak sempit dan akses tidak terhalang)</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Kondisi-kondisi yang tidak aman telah dikontrol</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-lg-5 col-md-5 col-sm-12 col-12 mx-auto" >
                <div class="card-body ">
                    <h5>KARYAWAN</h5>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-2">
                            YA
                        </div>
                        <div class="col-md-2">
                            TIDAK
                        </div>
                        <div class="col-md-2">
                            N/A
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Karyawan dalam kondisi FIT to work (Lihat kondisi fisik dan pastikan Istirahat yang cukup minimal 6 jam)</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Mengetahui detail job yang dilakukan ?</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Mendapat Informasi prosedur Pekerjaan & tindakan jika terjadi Emergency (misal : kecelakaan) ?</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Mengetahui Resiko pekerjaan yang dilakukan (Contoh terpukul, terjepit, tertimpa, tertusuk, terpotong, tersayat, terbakar, lentingan dll) ?</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Posisi kerja karyawan sudah benar (ergonomis)</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Izin Kerja Khusus dilengkapi</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Karyawan tidak terburu buru atau shortcut dalam bekerja</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">APD tersedia dan digunakan</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-6">Mengerti dan memahami prosedur penanganan limbah B3</label>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                        <div class="col-md-2">
                            <input type="radio">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection

@push('js')
@endpush