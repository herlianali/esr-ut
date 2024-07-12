@extends('layout.navTop')

@push('css')
<style>
    .custom-width-3 {
        width: 3%;
    }

    .custom-width-8 {
        width: 8%;
    }

    .custom-width-10 {
        width: 10%;
    }

    .custom-width-7 {
        width: 7%;
    }

    .custom-width-21 {
        width: 21%;
    }

    .custom-width-15 {
        width: 15%;
    }

    .custom-width-9 {
        width: 9%;
    }

    .custom-width-27 {
        width: 27%;
    }
    
    .custom-width-5 {
        width: 5%;
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="section-header ">
        <h1>BBSQ Non Service</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">BBSQ</a></div>
            <div class="breadcrumb-item">Table</div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('bbsq_non_service.add') }}" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>
    
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <h4>BBSQ List Data</h4>
                    <div class="card-header-form">
                        <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Tanggal Observasi</th>
                                    <th rowspan="2">Nama Pengawas Yang Melakukan Observasi</th>
                                    <th rowspan="2">Nama Karyawan Yang Diobservasi</th>
                                    <th rowspan="2">Jabatan Karyawan Yang Diobservasi</th>
                                    <th rowspan="2">Perusahaan Karayawan Yang Diobservasi</th>
                                    <th rowspan="2">Jenis Pekerjaan Yang Sedang Dilakukan</th>
                                    <th rowspan="2">Lokasi / Area Kerja</th>
                                    <th colspan="7">PROSEDUR</th>
                                    <th colspan="5">ALAT PERALATAN</th>
                                    <th colspan="3">LINGKUNGAN KERJA</th>
                                    <th colspan="9">KARYAWAN</th>
                                    <th rowspan="2">TINDAKAN Tidak Aman yang ditemukan ?</th>
                                    <th rowspan="2">KONDISI Tidak Aman yang ditemukan</th>
                                    <th rowspan="2">Kontrol Tambahan yang dilakukan (jika ada):</th>
                                    <th rowspan="2" class="fit">Observer telah memberikan <br> feedback terhadap karyawan yang <br> diobservasi, atas catatan-catatan <br> positif maupun need improvement <br> dari hasil observasi ini !</th>
                                    <th rowspan="2" class="fit">Karyawan yang diobservasi <br> (Observed) telah memahami, <br> mengerti dan menyetujui <br> atas semua feedback yang <br> telah disampaikan <br> oleh observer !</th>
                                    <th rowspan="2">Kategori Deviasi TINDAKAN Tidak Aman</th>
                                    <th rowspan="2">Kategori Deviasi KONDISI Tidak Aman</th>
                                    <th rowspan="2">Follow up atas TINDAKAN Tidak Aman</th>
                                    <th rowspan="2">Follow up atas KONDISI Tidak Aman</th>
                                    <th rowspan="2">Action</th>
                                </tr>
                                <tr class="text-center">
                                    <th class="bg-info text-white" >JSA tersedia di tempat kerja</th>
                                    <th class="bg-info text-white">JSA telah disosialisasikan kepada seluruh tim kerja</th>
                                    <th class="bg-info text-white" >JSA telah diikuti dalam proses kerja</th>
                                    <th class="bg-info text-white">Sistem isolasi (LOTO dijalankan dengan baik)</th>
                                    <th class="bg-info text-white fit" >Terdapat rambu-rambu <br> atau sistem peringatan <br> yang memadai</th>
                                    <th class="bg-info text-white">Izin Kerja Khusus dilengkapi</th>
                                    <th class="bg-info text-white">Mempunyai kewenangan yang sesuai (KIMPER)</th>
                                    <th class="bg-success text-white fit">Kondisi alat / <br> tools yang digunakan <br> masih layak dan <br> aman untuk digunakan</th>
                                    <th class="bg-success text-white" >Peralatan sudah diperiksa/diinspeksi</th>
                                    <th class="bg-success text-white fit">Alat yang digunakan <br> sesuai dengan pekerjaan <br> yang dilakukan</th>
                                    <th class="bg-success text-white fit" >Alat digunakan <br> dengan benar (cara <br> yang benar dan <br> sesuai peruntukannya)</th>
                                    <th class="bg-success text-white fit">Hanya peralatan <br> yang diperlukan yang <br> berada di tempat <br> kerja (ringkas)</th>
                                    <th class="bg-danger text-white">Kebersihan dan denah kerja yang baik</th>
                                    <th class="bg-danger text-white fit" >Area kerja <br> memadai (tidak sempit <br> dan akses <br> tidak terhalang)</th>
                                    <th class="bg-danger text-white fit" >Kondisi-kondisi <br> yang tidak aman <br> telah dikontrol</th>
                                    <th class="bg-warning text-white fit" >Karyawan dalam kondisi <br> FIT to work (Lihat kondisi <br> fisik dan pastikan Istirahat <br> yang cukup minimal 6 jam)</th>
                                    <th class="bg-warning text-white" >Mengetahui detail job yang dilakukan ?</th>
                                    <th class="bg-warning text-white fit" >Mendapat Informasi prosedur <br> Pekerjaan & tindakan jika <br> terjadi Emergency <br> (misal : kecelakaan) ?</th>
                                    <th class="bg-warning text-white fit" >Mengetahui Resiko pekerjaan <br> yang dilakukan (Contoh terpukul, <br> terjepit, tertimpa, tertusuk <br>, terpotong, tersayat, terbakar, <br> lentingan dll) ?</th>
                                    <th class="bg-warning text-white fit">Karyawan kompeten <br> dan mampu menegrjakan <br> pekerjaan tersebut</th>
                                    <th class="bg-warning text-white fit" >Posisi kerja <br> karyawan sudah benar <br> (ergonomis)</th>
                                    <th class="bg-warning text-white fit">Karyawan tidak <br> terburu buru atau <br> shortcut dalam <br> bekerja</th>
                                    <th class="bg-warning text-white">APD tersedia dan digunakan</th>
                                    <th class="bg-warning text-white fit">Mengerti dan <br> memahami prosedur <br> penanganan limbah B3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>3/2/2022 7:00:00</td>
                                    <td>DAHLIS</td>
                                    <td>Nani Supriadi</td>
                                    <td class="text-center">PDC</td>
                                    <td class="text-center">HMU</td>
                                    <td class="text-center">Mengatur pemberian consumable goods ke mekanik</td>
                                    <td class="text-center">WAREHOUSE</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">Tidak ada</td>
                                    <td class="text-center">Tidak ada</td>
                                    <td class="text-center">MUS</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">Tidak Ada</td>
                                    <td class="text-center">Tidak Ada</td>
                                    <td>Tidak Dilakukan Tindakan</td>
                                    <td>Tidak Dilakukan Tindakan</td>
                                    <td class="fit">
                                        <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                        <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>3/2/2022 7:00:00</td>
                                    <td>DAHLIS</td>
                                    <td>Nani Supriadi</td>
                                    <td class="text-center">PDC</td>
                                    <td class="text-center">HMU</td>
                                    <td class="text-center">Mengatur pemberian consumable goods ke mekanik</td>
                                    <td class="text-center">WAREHOUSE</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">Tidak ada</td>
                                    <td class="text-center">Tidak ada</td>
                                    <td class="text-center">MUS</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">Tidak Ada</td>
                                    <td class="text-center">Tidak Ada</td>
                                    <td>Tidak Dilakukan Tindakan</td>
                                    <td>Tidak Dilakukan Tindakan</td>
                                    <td class="fit">
                                        <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                        <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>3/2/2022 7:00:00</td>
                                    <td>DAHLIS</td>
                                    <td>Nani Supriadi</td>
                                    <td class="text-center">PDC</td>
                                    <td class="text-center">HMU</td>
                                    <td class="text-center">Mengatur pemberian consumable goods ke mekanik</td>
                                    <td class="text-center">WAREHOUSE</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">NA</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">YA</td>
                                    <td class="text-center">Tidak ada</td>
                                    <td class="text-center">Tidak ada</td>
                                    <td class="text-center">MUS</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">Ya</td>
                                    <td class="text-center">Tidak Ada</td>
                                    <td class="text-center">Tidak Ada</td>
                                    <td>Tidak Dilakukan Tindakan</td>
                                    <td>Tidak Dilakukan Tindakan</td>
                                    <td class="fit">
                                        <button id="edit" class="btn btn-sm m-1 btn-success">Edit</button>
                                        <a href="#" class="btn btn-sm m-1 btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
@endpush