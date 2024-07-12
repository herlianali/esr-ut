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
    <h1>BBSQ Services</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Form Questioning</a></div>
        <div class="breadcrumb-item">BBSQ Services</div>
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
                <h4>Green Card Form</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid">
                    {{-- <form action="" method=""> --}}
                        <section>
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tanggal Laporan</label>
                                    <input type="text" class="form-control datetimepicker">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Nama Pengawas</label>
                                    <select class="form-control select2">
                                        <option value="1">HERI PRIYO MAHARGYO</option>
                                        <option value="2">RONIE PERMANA</option>
                                        <option value="3">AGUS HARIYADI</option>
                                        <option value="4">HARYONO</option>
                                        <option value="5">WISNU PURA WIJAYANTO</option>
                                        <option value="6">ARIWANSA</option>
                                        <option value="7">SYAMSUL PURNOMO</option>
                                        <option value="8">JAIMAN</option>
                                        <option value="9">DENI EKO MUKTI</option>
                                        <option value="10">ACHMAD MAULANA SYAHRIL</option>
                                        <option value="11">BAGYO SETYANTO</option>
                                        <option value="12">GANJAR WICAKSONO</option>
                                        <option value="13">NANO</option>
                                        <option value="14">SUKRISNO</option>
                                        <option value="15">AGUNG KRISMANTO</option>
                                        <option value="16">EKO AGUS PRIBADI</option>
                                        <option value="17">WAHYU HADI SAFRUDIN</option>
                                        <option value="18">ADI SETIADI</option>
                                        <option value="19">TRI MARJUKI</option>
                                        <option value="20">ALDI SATRIO</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Lokasi Pelaksanaan BBSQ Svc</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Nama karyawan yang dilakukan observasi (Observed)</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Perusahaan karyawan yang dilakukan observasi (Observed)</label>
                                    <select class="form-control select2">
                                        <option value="1">BP</option>
                                        <option value="2">HMU</option>
                                        <option value="3">KAMAJU</option>
                                        <option value="4">HARYONO</option>
                                        <option value="5">NAJ</option>
                                        <option value="6">NIKMAT</option>
                                        <option value="7">TPP</option>
                                        <option value="8">TRAC</option>
                                        <option value="9">UT</option>
                                        <option value="10">UTR</option>
                                        <option value="11">OTHER</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Aktivitas / Jenis Pekerjaan Yang Dilakukan Observasi</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Kategori Observasi BBSQ</label>
                                    <select class="form-control select2" id="kategori_observasi">
                                        <option value="1">Preventive Maintenance</option>
                                        <option value="2">Remove & Install (R & I)</option>
                                        <option value="3">Troubleshooting & Repair ( Minor & Major Repair )</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                {{-- <button class="btn btn-primary mr-1 next-button" >next</button> --}}
                                <button class="btn btn-primary mr-1 next-button" >next</button>
                            </div>
                        </section>
                        <section class="hide" id="section_2">    
                            <h5>1. Preventive Maintenance</h5>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-2 text-center">
                                    YA
                                </div>
                                <div class="col-md-2 text-center">
                                    TIDAK
                                </div>
                                <div class="col-md-2 text-center">
                                    N/A
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">1. Apakah kondisi area kerja memenuhi standart kerja(Area lokasi kerja rata, datar, keras, ada garis demarkasi (layout), bersih, rapi, luas (untuk proses manuver) dan jauh dari lokasi blasting)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio" >
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">2. Apakah Form QA 10 (Receiving,PS dan PI) / KSR (untuk unit waranty) dan  Form PPM/QA3 telah disiapkan sesuai kebutuhan(Form Sudah tersedia di area kerja)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">3. Apakah kebutuhan tools dan facility yang diperlukan tersedia sesuai dengan jenis pekerjaan dan pembagian zona kerja serta dalam kondisi baik(Tools sesuai dengan zona kerja yang telah ditetapkan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">4. Apakah persiapan parts service (penempatan dan pengelompokan) sesuai dengan pembagian zona kerja (Part tersedia sesuai dengan zona kerja)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">5. Apakah telah tersedia buku referensi (OMM/SM, PB) terkait pekerjaan yang dilakukan(Referensi (OMM/SM, PB) tersedia dilokasi kerja)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">6. Apakah ada keluhan operator yang tercatat(Ada catatan keluhan operator)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">7. Apakah form QA receiving unit telah diisi(Ada pengechekan atas kebocoran, kerusakan unit dan kelengkapan unit)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">8. Apakah unit sudah dilakukan pencucian sesuai prosedur(Pastikan electric compartment , turbo dan exhaust manifold tidak disemprot air dan bagian undercarriage (Track type) dicuci saat proses washing)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">9. Apakah sudah dilaksanakan P5M/ morning talk  (pembagian job, target dan JSA)(Pembagian job, target lead time pekerjaan dan dokumen JSA sudah tersosialisasikan dan telah dipahami oleh mekanik)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">10. Apakah APD yang diperlukan sudah lengkap dan sesuai dengan jenis dan kondisi pekerjaan(Bekerja menggunakan APD yang sesuai dengan jenis pekerjaannya)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">11. Apakah setiap pekerjaan di area terbatas sudah memiliki workpermit / ijin kerja khusus atas pekerjaan ( confined space, scafollding, hot work , high work, excavating, lifting (Ada form workpermit yang sudah divalidasi oleh pihak yang berwenang)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">12. Apakah semua energi bahaya sudah diisolasi dan personal lock serta isolation tag  sudah dipasang sesuai dengan standar prosedur pemasangan(Semua energi bahaya (listrik, thermal, mekanik, kimia, radiasi) sudah diisolasi, personal lock, isolation tag, dan kartu peralatan rusak sudah terpasang sesuai prosedur sebelum melakukan pekerjaan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">13. Apakah pekerja yang bertugas melakukan testing, dan operate equipment support telah mempunyai SIO/KIMPER/TIO yang sesuai(Pekerja yang bertugas testing unit dan mengoperasikan overhead crane, forklift, tyre handler, manitou, dll telah mempunyai SIO/KIMPER/TIO yang sesuai)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">14. Apakah proses lifting sudah mengikuti standar prosedur (Proses lifting memperhatikan lifting point, SWL, posisi equipment support (outrigger, kapasitas, lokasi kerja), dan dipandu oleh seorang Rigger yang ditunjuk)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">15. Apakah penggunaan tools memperhatikan kondisi kelayakan, keamanan, sesuai dengan standar prosedur(Penggunaan tools mengikuti langkah kerja sesuai standar prosedur serta penempatan tools sebelum dan sesudah pekerjaan dilakukan dengan benar)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">16. Apakah limbah ditempatkan sesuai dengan tempat & jenis limbah (Ada tempat limbah dan terisi sesuai jenisnya)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">17. Apakah pengambilan oil sample telah menggunakan tools dan botol sesuai dengan standar prosedur dan diidentifikasi(Botol oil sample telah diberi label dan diisi sesuai standar (model unit, kode unit, jenis oli, komponen yang diambil, date dan HM))</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">18. Apakah pengisian oli dan  pemasangan filter memperhatikan kesesuaian spect, kebersihan, kekencangan dan kapasitas(Kondisi drain plug bersih, oil dan filter sesuai dengan spesifikasi serta memperhatikan kebersihan saat pengisisan maupun penempatan oil filter)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">19. Apakah proses penggantian spare part memperhatikan aspek kebersihan, ketepatan proses pemasangannya.(Ada marking, torque sesuai, bersih, tidak rusak)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">20. Apakah semua energi/potensi bahaya masih diisolasi dan prosedur isolasi masih dilakukan(Prosedur isolasi dimengerti dan dilakukan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">21. Apakah proses pekerjaan diarea tertentu mengikuti aturan work permit yang sudah dikeluarkan.(Prosedur work permit dimengerti dan dilakukan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">22. Apakah proses pekerjaan yang menggunakan peralatan tertentu telah mengikuti aturan SIO/KIMPER/TIO(Operator mempunyai SIO/Kimper/TIO)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">23. Apakah penempatan barang (komponen, parts, tools, special tools ) dilakukan secara rapih, aman dan terhindar dari kotoran, debu serta ditempatkan pada tempatnya .(Penempatan barang bekas dilakukan secara rapih, aman dan terlindung dan utk komponen diberikan taging serta ditempatkan pada tempatnya .)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">24. Apakah proses pekerjaan telah mengikuti langkah safety sesuai dengan (JSA) Job Safety Analisis yang telah dibuat. (Proses  pekerjaan telah  menggunakan tools / sarana kerja sesuai dengan (JSA) Job Safety Analisis yang telah dibuat dan dipahami oleh mekanik)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">25. Apakah proses pekerjaan juga dilakukan pengecheckan kelengkapan, indicator kerja dan fungsi optional  equipment system ( Auto lub, Optional lamp, Fire safety device) dan dicatat pada lembar kerja.(Pengecheckan dan pencatatan kelengkapan dan fungsi optional  equipment system ( Auto lub, Optional lamp) dan Fire safety device (emergency stop, isolator switch, fatique warning, safety belt, fire suspresiin) dilakukan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">26. Apakah pengisian check sheet dilakukan secara lengkap sesuai dengan form yang tersedia (Pengisian check sheet dilakukan selama proses pekerjaan berlangsung dan hasilnya divalidasi oleh atasan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">27. Apakah dalam proses pekerjaan selalu dilakukan testing performance sebelum dinyatakan unit ready.(Testing dan pencatatan performance atas beberapa fungsi dan kompenen ( Steering, brake, Lamp) dan  safety device ( fire axtinguser/suspresion, Auto lub ) dilakukan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">28. Apakah dilakukan final inspection terhadap hasil pekerjaan dengan menggunakan check sheet ( QA10 PI) serta dilakukan penyimpanan dokumen secara rapih (Final inspection total, pembersihan unit/komponen, pengumpulan semua form (lembar kerja) telah dilakukan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">29. Apakah ditemukan item yang rusak, mudah diperbaiki dan bisa diperbaiki saat PS tersebut tetapi tidak dilakukan tindakan perbaikan (misal : missing clamp, bolt lose, dll)(Ditemukan clamp kendor, hose melintir, crack, dll.)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">30. Temuan pada point 1.29 tersebut tidak dimasukkan atau diusulkan ke list backlog(Tercatat pada form BMS (Backlog Monitoring System))</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <button class="btn btn-danger mr-1 next-button" >back</button>
                                <button class="btn btn-primary mr-1 next-button" >next</button>
                            </div>
                        </section>
                        <section class="hide" id="section_3">
                            <h5>2. Remove & Install (R&I)</h5>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-2 text-center">
                                    YA
                                </div>
                                <div class="col-md-2 text-center">
                                    TIDAK
                                </div>
                                <div class="col-md-2 text-center">
                                    N/A
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">1. Apakah kondisi area kerja memenuhi standart kerja(Area lokasi kerja rata, datar, keras, ada garis demarkasi, bersih, rapi, luas (untuk proses manuver) dan jauh dari lokasi blasting)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio" >
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">2. Apakah Form QA 4A (R & I), QA 5 (Measurement) dan  Form PPM/QA3 telah disiapkan sesuai kebutuhan(Form Sudah tersedia di area kerja)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">3. Apakah kebutuhan tools dan facility yang diperlukan tersedia sesuai dengan jenis pekerjaan dan dalam kondisi baik/siap pakai(Tools dan facility tersedia dan siap pakai)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">4. Apakah parts handling untuk GOH/PCR telah dikelompokan dan ditempatkan secara rapi dan mudah dicari(Dilakukan pengelompokan part sesuai dengan step pekerjaan dan pencatatan additional part)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">5. Apakah telah tersedia buku referensi (PSN,SM,PK2,Reuseable Part,PB) terkait pekerjaan yang dilakukan(Referensi PSN,SM,PK2,PB,Reusable Part tersedia)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">6. Apakah dilakukan PPM & Receiving unit in sebelum GOH/PCR(Ada pengisian form receiving dan pengechekan atas kebocoran, kerusakan unit dan kelengkapan unit)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">7. Apakah unit sudah dilakukan pencucian sesuai prosedur(Pastikan electric compartment , turbo dan exhaust manifold tidak disemprot air dan bagian undercarriage (Track type) dicuci saat proses washing)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">8. Apakah sudah dilaksanakan P5M/ morning talk  (pembagian job, target dan JSA)(Pembagian job, target lead time pekerjaan dan dokumen JSA sudah tersosialisasikan dan telah dipahami oleh mekanik)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">9. Apakah APD yang diperlukan sudah lengkap dan sesuai dengan jenis dan kondisi pekerjaan(Bekerja menggunakan APD yang sesuai dengan jenis pekerjaannya)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">10. Apakah setiap pekerjaan di area terbatas sudah memiliki workpermit / ijin kerja khusus atas pekerjaan ( confined space, scafollding, hot work , high work, excavating, lifting (Ada form workpermit yang sudah divalidasi oleh pihak yang berwenang)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">11. Apakah semua energi bahaya sudah diisolasi dan personal lock serta isolation tag  sudah dipasang sesuai dengan standar prosedur pemasangan(Semua energi bahaya (listrik, thermal, mekanik, kimia, radiasi) sudah diisolasi, personal lock, isolation tag, dan kartu peralatan rusak sudah terpasang sesuai prosedur sebelum melakukan pekerjaan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">12. Apakah pekerja yang bertugas melakukan testing, dan operate equipment support telah mempunyai SIO/KIMPER/TIO yang sesuai(Pekerja yang bertugas testing unit dan mengoperasikan overhead crane, forklift, tyre handler, manitou, dll telah mempunyai SIO/KIMPER/TIO yang sesuai)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">13. Apakah proses lifting sudah mengikuti standar prosedur (Proses lifting memperhatikan lifting point, SWL, posisi equipment support (outrigger, kapasitas, lokasi kerja), dan dipandu oleh seorang Rigger yang ditunjuk)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">14. Apakah penggunaan tools memperhatikan kondisi kelayakan, keamanan, sesuai dengan standar prosedur(Penggunaan tools mengikuti langkah kerja sesuai standar prosedur serta penempatan tools sebelum dan sesudah pekerjaan dilakukan dengan benar)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">15. Apakah limbah ditempatkan sesuai dengan tempat & jenis limbah (Ada tempat limbah dan terisi sesuai jenisnya)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">16. Apakah proses pekerjaan sesuai prosedur/referensi yang ada dan hasilnya tercatat(Ada eviden / QA sheet terisi)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">17. Apakah receiving komponen baru dilakukan (pengecheckan kondisi, kelengkapan komponen, measurement) sebelum dipasang(ada evident / Form receiving terisi dengan lengkap)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">18. Apakah penanganan komponen bekas ditempatkan pada stand dan diberi tanda (tagging) serta dilakukan pengecheckan kelengkapannya sebelum dikirim ke Reman(Komponen bekas ditempat khusus/stand dan diberi tanda/tagging)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">19. Apakah proses penggantian spare part memperhatikan aspek kebersihan, ketepatan proses pemasangannya.(Ada marking, torque sesuai, bersih, tidak rusak)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">20. Apakah semua energi/potensi bahaya masih diisolasi dan prosedur isolasi masih dilakukan(Prosedur isolasi dimengerti dan dilakukan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">21. Apakah proses pekerjaan diarea tertentu mengikuti aturan work permit yang sudah dikeluarkan.(Prosedur work permit dimengerti dan dilakukan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">22. Apakah proses pekerjaan yang menggunakan peralatan tertentu telah mengikuti aturan SIO/KIMPER/TIO(Operator mempunyai SIO/Kimper/TIO)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">23. Apakah penempatan barang (komponen, parts, tools, special tools ) dilakukan secara rapih, aman dan terhindar dari kotoran, debu serta ditempatkan pada tempatnya .(Penempatan barang bekas dilakukan secara rapih, aman dan terlindung dan utk komponen diberikan taging serta ditempatkan pada tempatnya .)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">24. Apakah proses pekerjaan telah mengikuti langkah safety sesuai dengan (JSA) Job Safety Analisis yang telah dibuat. (Proses  pekerjaan telah  menggunakan tools / sarana kerja sesuai dengan (JSA) Job Safety Analisis yang telah dibuat dan dipahami oleh mekanik)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">25. Apakah proses pekerjaan juga dilakukan pengecheckan kelengkapan, indicator kerja dan fungsi optional  equipment system ( Auto lub, Optional lamp, Fire safety device) dan dicatat pada lembar kerja.(Pengecheckan dan pencatatan kelengkapan dan fungsi optional  equipment system ( Auto lub, Optional lamp) dan Fire safety device (emergency stop, isolator switch, fatique warning, safety belt, fire suspresiin) dilakukan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">26. Apakah pengisian check sheet dilakukan secara lengkap sesuai dengan form yang tersedia (Pengisian check sheet dilakukan selama proses pekerjaan berlangsung dan hasilnya divalidasi oleh atasan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">27. Apakah dalam proses pekerjaan selalu dilakukan testing performance sebelum dinyatakan unit ready.(Testing dan pencatatan performance atas beberapa fungsi dan kompenen ( Steering, brake, Lamp) dan  safety device ( fire axtinguser/suspresion, Auto lub ) dilakukan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">28. Apakah dilakukan final inspection dan PPM unit out terhadap hasil pekerjaan dengan menggunakan check sheet ( QA10 PI & QA 3) serta dilakukan penyimpanan dokumen secara rapih (Final inspection total, pembersihan unit/komponen, pengumpulan semua form (QA 3, QA 4A, QA 4,QA 5, QA 7, QA 10) telah dilakukan dan didokumentasikan secara aman dan rapi)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <button class="btn btn-danger mr-1 next-button" >back</button>
                                <button class="btn btn-primary mr-1 next-button" >next</button>
                            </div>
                        </section>
                        <section class="hide" id="section_4">
                            <h5>3. Troubleshooting & Repair ( Minor & Major Repair )</h5>
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-2 text-center">
                                    YA
                                </div>
                                <div class="col-md-2 text-center">
                                    TIDAK
                                </div>
                                <div class="col-md-2 text-center">
                                    N/A
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">1. Apakah kondisi area kerja memenuhi standart kerja(Area lokasi kerja rata, datar, keras, ada garis demarkasi, bersih, rapi, luas (untuk proses manuver) dan jauh dari lokasi blasting)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio" >
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">2. Apakah mekanik mengerti problem/pekerjaan yang sedang dilakukan(Mekanik mendapat supervisi awal dan mengerti)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">3. Apakah kebutuhan tools dan facility yang diperlukan tersedia sesuai dengan jenis pekerjaan dan dalam kondisi baik/siap pakai(Tools dan facility tersedia dan siap pakai)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">4. Apakah persiapan parts sudah sesuai dengan scope job(Part tersedia sesuai dengan SPB)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">5. Apakah telah tersedia buku referensi (PSN,SM,PK2,Reuseable Part,PB) terkait pekerjaan yang dilakukan(Referensi PSN,SM,PK2,PB,Reusable Part tersedia)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">6. Apakah sudah dilaksanakan P5M/ morning talk  (pembagian job, target dan JSA)(Pembagian job, target lead time pekerjaan dan dokumen JSA sudah tersosialisasikan dan telah dipahami oleh mekanik)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">7. Apakah APD yang diperlukan sudah lengkap dan sesuai dengan jenis dan kondisi pekerjaan(Bekerja menggunakan APD yang sesuai dengan jenis pekerjaannya)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">8. Apakah setiap pekerjaan di area terbatas sudah memiliki workpermit / ijin kerja khusus atas pekerjaan ( confined space, scafollding, hot work , high work, excavating, lifting (Ada form workpermit yang sudah divalidasi oleh pihak yang berwenang)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">9. Apakah semua energi bahaya sudah diisolasi dan personal lock serta isolation tag  sudah dipasang sesuai dengan standar prosedur pemasangan(Semua energi bahaya (listrik, thermal, mekanik, kimia, radiasi) sudah diisolasi, personal lock, isolation tag, dan kartu peralatan rusak sudah terpasang sesuai prosedur sebelum melakukan pekerjaan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">10. Apakah pekerja yang bertugas melakukan testing, dan operate equipment support telah mempunyai SIO/KIMPER/TIO yang sesuai(Pekerja yang bertugas testing unit dan mengoperasikan overhead crane, forklift, tyre handler, manitou, dll telah mempunyai SIO/KIMPER/TIO yang sesuai)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">11. Apakah proses lifting sudah mengikuti standar prosedur (Proses lifting memperhatikan lifting point, SWL, posisi equipment support (outrigger, kapasitas, lokasi kerja), dan dipandu oleh seorang Rigger yang ditunjuk)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">12. Apakah penggunaan tools memperhatikan kondisi kelayakan, keamanan, sesuai dengan standar prosedur(Penggunaan tools mengikuti langkah kerja sesuai standar prosedur serta penempatan tools sebelum dan sesudah pekerjaan dilakukan dengan benar)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">13. Apakah limbah ditempatkan pada tempatnya(Ada tempat limbah)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">14. Apakah pengisian oli dan  pemasangan filter memperhatikan kesesuaian spect, kebersihan, kekencangan dan kapasitas(Kondisi drain plug bersih, oil dan filter sesuai dengan spesifikasi serta memperhatikan kebersihan saat pengisisan maupun penempatan oil filter)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">15. Apakah proses penggantian spare part memperhatikan aspek kebersihan, ketepatan proses pemasangannya.(Ada marking, torque sesuai, bersih, tidak rusak)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">16. Apakah semua energi/potensi bahaya masih diisolasi dan prosedur isolasi masih dilakukan(Prosedur isolasi dimengerti dan dilakukan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">17. Apakah proses pekerjaan diarea tertentu mengikuti aturan work permit yang sudah dikeluarkan.(Prosedur work permit dimengerti dan dilakukan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">18. Apakah proses pekerjaan yang menggunakan peralatan tertentu telah mengikuti aturan SIO/KIMPER/TIO(Operator mempunyai SIO/Kimper/TIO)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">19. Apakah penempatan barang (komponen, parts, tools, special tools ) dilakukan secara rapih, aman dan terhindar dari kotoran, debu serta ditempatkan pada tempatnya .(Penempatan barang bekas dilakukan secara rapih, aman dan terlindung dan utk komponen diberikan taging serta ditempatkan pada tempatnya .)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">20. Apakah proses pekerjaan telah mengikuti langkah safety sesuai dengan (JSA) Job Safety Analisis yang telah dibuat. (Proses  pekerjaan telah  menggunakan tools / sarana kerja sesuai dengan (JSA) Job Safety Analisis yang telah dibuat dan dipahami oleh mekanik)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">21. Apakah proses pekerjaan juga dilakukan pengecheckan kelengkapan, indicator kerja dan fungsi optional  equipment system ( Auto lub, Optional lamp, Fire safety device) dan dicatat pada lembar kerja.(Pengecheckan dan pencatatan kelengkapan dan fungsi optional  equipment system ( Auto lub, Optional lamp) dan Fire safety device (emergency stop, isolator switch, fatique warning, safety belt, fire suspresiin) dilakukan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">22. Apakah pengisian check sheet dilakukan secara lengkap sesuai dengan form yang tersedia (Check sheet terisi lengkap dan  sesuai standarnya.)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">23. Apakah dalam proses pekerjaan selalu dilakukan testing performance sebelum dinyatakan unit ready.(Test perform unit dan test optional unit  (safety device, fire axtinguser/suspresion, Auto lub ) tercatat.)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-6">24. Apakah dilakukan final inspection terhadap hasil pekerjaan dengan menggunakan check sheet ( QA10 PI) serta dilakukan penyimpanan dokumen secara rapih (Final inspection total, pembersihan unit/komponen, pengumpulan semua form (lembar kerja) telah dilakukan)</label>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                                <div class="col-md-2 align-self-center text-center">
                                    <input type="radio">
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <button class="btn btn-danger mr-1 next-button" >back</button>
                                <button class="btn btn-primary mr-1 next-button" >next</button>
                            </div>
                        </section>
                        <section class="hide" id="section_5">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Jenis Perilaku</label>
                                    <input type="text" class="form-control">
                                </div>
                                {{-- jika jenis perilaku value 1 tampilkan section lanjutan jika 2 tampilkan langsung section 8 --}}
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Jenis Prilaku Hasil observasi</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked="">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Ada prilaku Beresiko/Bad Quality yang dilakukan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2" checked="">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Aman/Good Quality
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <button class="btn btn-danger mr-1 next-button" >back</button>
                                <button class="btn btn-primary mr-1 next-button" >next</button>
                            </div>
                        </section>
                        <section class="hide" id="section_6">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Catatan Observasi - Prilaku 1</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Deskripsi prilaku (Unsafe, Bad Quality)</label>
                                    <small class="form-text text-muted">Tuliskan deskripsi prilaku berisiko karyawan/ bad quality, misal : tidak menggunakan APD, tidak memasang loto, dll</small>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Apa yang sedang dilakukan</label>
                                    <small class="form-text text-muted">Tuliskan pekerjaan atau aktivitas yang sedang dilakukan karyawan saat ditemukannya prilaku berisiko/bad quality</small>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Mengapa Dilakukan? (Rintangan/Barrier)</label>
                                    <select class="form-control select2">
                                        <option value="1">Menganggap sudah Bekerja Aman</option>
                                        <option value="2">Motivasi Kerja yang keliru</option>
                                        <option value="3">Jalan Pintas</option>
                                        <option value="4">Bekerja Berlebihan</option>
                                        <option value="5">Tidak ada Prosedur</option>
                                        <option value="6">Tidak tersedia APD</option>
                                        <option value="7">Tidak Mengetahui</option>
                                        <option value="8">Kebiasaan</option>
                                        <option value="9">Pilihan Pribadi</option>
                                        <option value="10">Tidak Fokus</option>
                                        <option value="11">Perbedaan pendapat mengenai keselamatan</option>
                                        <option value="12">Peralatan tidak sesuai</option>
                                        <option value="13">Tidak ada pengawasan</option>
                                        <option value="14">Kurang Pelatihan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Pekerja mengakui telah melakukan prilaku berisiko?</label>
                                    <div class="row">
                                        <div class="form-check ml-3 pr-2">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked="">
                                            <label class="form-check-label" for="exampleRadios1">
                                                YA
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked="">
                                            <label class="form-check-label" for="exampleRadios2">
                                                TIDAK
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tindakan perbaikan yang dilakukan</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tindakan pencegahan yang dilakukan</label>
                                    <input type="text" class="form-control">
                                </div>
                                {{-- jika value 1 lanjut next section jika 2 langsung section akhir --}}
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Apakah ada prilaku berisiko lain yang ditemukan?</label>
                                    <div class="row">
                                        <div class="form-check ml-3 pr-2">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked="">
                                            <label class="form-check-label" for="exampleRadios1">
                                                YA
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2" checked="">
                                            <label class="form-check-label" for="exampleRadios2">
                                                TIDAK
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <button class="btn btn-danger mr-1 next-button" >back</button>
                                <button class="btn btn-primary mr-1 next-button" >next</button>
                            </div>
                        </section>
                        <section class="hide" id="section_7">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Catatan Observasi - Prilaku 2</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Deskripsi prilaku (Unsafe, Bad Quality)</label>
                                    <small class="form-text text-muted">Tuliskan deskripsi prilaku berisiko karyawan/ bad quality, misal : tidak menggunakan APD, tidak memasang loto, dll</small>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Apa yang sedang dilakukan</label>
                                    <small class="form-text text-muted">Tuliskan pekerjaan atau aktivitas yang sedang dilakukan karyawan saat ditemukannya prilaku berisiko/bad quality</small>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Mengapa Dilakukan? (Rintangan/Barrier)</label>
                                    <select class="form-control select2">
                                        <option value="1">Menganggap sudah Bekerja Aman</option>
                                        <option value="2">Motivasi Kerja yang keliru</option>
                                        <option value="3">Jalan Pintas</option>
                                        <option value="4">Bekerja Berlebihan</option>
                                        <option value="5">Tidak ada Prosedur</option>
                                        <option value="6">Tidak tersedia APD</option>
                                        <option value="7">Tidak Mengetahui</option>
                                        <option value="8">Kebiasaan</option>
                                        <option value="9">Pilihan Pribadi</option>
                                        <option value="10">Tidak Fokus</option>
                                        <option value="11">Perbedaan pendapat mengenai keselamatan</option>
                                        <option value="12">Peralatan tidak sesuai</option>
                                        <option value="13">Tidak ada pengawasan</option>
                                        <option value="14">Kurang Pelatihan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Pekerja mengakui telah melakukan prilaku berisiko?</label>
                                    <div class="row">
                                        <div class="form-check ml-3 pr-2">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked="">
                                            <label class="form-check-label" for="exampleRadios1">
                                                YA
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked="">
                                            <label class="form-check-label" for="exampleRadios2">
                                                TIDAK
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tindakan perbaikan yang dilakukan</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Tindakan pencegahan yang dilakukan</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="text-right">
                                <button class="btn btn-danger mr-1 next-button" >back</button>
                                <button class="btn btn-primary mr-1 next-button" >next</button>
                            </div>
                        </section>
                        <section class="hide" id="section_8">
                            <div class="row">
                                <h3>Validasi</h3>
                                <h3>Pernyataan ini sebagai pengganti tandatangan</h3>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Jenis Prilaku</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Observer telah memberikan feedback terhadap karyawan yang diobservasi, atas catatan-catatan positif maupun need improvement dari hasil observasi ini !</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked="">
                                        <label class="form-check-label" for="exampleRadios1">
                                            YA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2" checked="">
                                        <label class="form-check-label" for="exampleRadios2">
                                            TIDAK
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Karyawan yang diobservasi (Observed) telah memahami, mengerti dan menyetujui atas semua feedback yang telah disampaikan oleh observer !</label>
                                    <small class="form-text text-muted">Pengawas harus melakukan konfirmasi kepada karyawan untuk menjawab ini.</small>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" checked="">
                                        <label class="form-check-label" for="exampleRadios1">
                                            YA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2" checked="">
                                        <label class="form-check-label" for="exampleRadios2">
                                            TIDAK
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                <button class="btn btn-secondary " type="reset">Reset</button>
                            </div>
                        </section>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(function(){
        $('.next-button').on('click', function (e) {
            var section = $(this).closest("section");
            var $next = section.next();
            console.log($next)
            if($next.length>0) {  // check condition first and then hide current section and show next
                section.addClass('hide');
                $next.removeClass('hide');
            }
        });
    });
</script>
@endpush