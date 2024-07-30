@extends('layout.app')

@section('title', 'Form Data')

@push('css')
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
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>BBSQ Services Form</h4>
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
                                <button class="btn btn-primary mr-1 next-button" >Next</button>
                            </div>
                        </section>
                        <section class="hide" id="section_2">    
                            <h5>1. Preventive Maintenance</h5>
                            <div class="table-responsive">
                                <table class="table table-striped custom-table" >
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th class="text-center">YA</th>
                                            <th class="text-center">TIDAK</th>
                                            <th class="text-center" style="width: 1%; white-space: nowrap;">N/A</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Apakah kondisi area kerja memenuhi standart kerja(Area lokasi kerja rata, datar, keras, ada garis demarkasi (layout), bersih, rapi, luas (untuk proses manuver) dan jauh dari lokasi blasting)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Apakah Form QA 10 (Receiving,PS dan PI) / KSR (untuk unit waranty) dan  Form PPM/QA3 telah disiapkan sesuai kebutuhan(Form Sudah tersedia di area kerja)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Apakah kebutuhan tools dan facility yang diperlukan tersedia sesuai dengan jenis pekerjaan dan pembagian zona kerja serta dalam kondisi baik(Tools sesuai dengan zona kerja yang telah ditetapkan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Apakah persiapan parts service (penempatan dan pengelompokan) sesuai dengan pembagian zona kerja (Part tersedia sesuai dengan zona kerja)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Apakah telah tersedia buku referensi (OMM/SM, PB) terkait pekerjaan yang dilakukan(Referensi (OMM/SM, PB) tersedia dilokasi kerja)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Apakah ada keluhan operator yang tercatat(Ada catatan keluhan operator)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>Apakah form QA receiving unit telah diisi(Ada pengechekan atas kebocoran, kerusakan unit dan kelengkapan unit)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>Apakah unit sudah dilakukan pencucian sesuai prosedur(Pastikan electric compartment , turbo dan exhaust manifold tidak disemprot air dan bagian undercarriage (Track type) dicuci saat proses washing)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>Apakah sudah dilaksanakan P5M/ morning talk  (pembagian job, target dan JSA)(Pembagian job, target lead time pekerjaan dan dokumen JSA sudah tersosialisasikan dan telah dipahami oleh mekanik)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>Apakah APD yang diperlukan sudah lengkap dan sesuai dengan jenis dan kondisi pekerjaan(Bekerja menggunakan APD yang sesuai dengan jenis pekerjaannya)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>Apakah setiap pekerjaan di area terbatas sudah memiliki workpermit / ijin kerja khusus atas pekerjaan ( confined space, scafollding, hot work , high work, excavating, lifting (Ada form workpermit yang sudah divalidasi oleh pihak yang berwenang)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>Apakah semua energi bahaya sudah diisolasi dan personal lock serta isolation tag  sudah dipasang sesuai dengan standar prosedur pemasangan(Semua energi bahaya (listrik, thermal, mekanik, kimia, radiasi) sudah diisolasi, personal lock, isolation tag, dan kartu peralatan rusak sudah terpasang sesuai prosedur sebelum melakukan pekerjaan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>Apakah pekerja yang bertugas melakukan testing, dan operate equipment support telah mempunyai SIO/KIMPER/TIO yang sesuai(Pekerja yang bertugas testing unit dan mengoperasikan overhead crane, forklift, tyre handler, manitou, dll telah mempunyai SIO/KIMPER/TIO yang sesuai)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>Apakah proses lifting sudah mengikuti standar prosedur (Proses lifting memperhatikan lifting point, SWL, posisi equipment support (outrigger, kapasitas, lokasi kerja), dan dipandu oleh seorang Rigger yang ditunjuk)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>Apakah penggunaan tools memperhatikan kondisi kelayakan, keamanan, sesuai dengan standar prosedur(Penggunaan tools mengikuti langkah kerja sesuai standar prosedur serta penempatan tools sebelum dan sesudah pekerjaan dilakukan dengan benar)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>16.</td>
                                            <td>Apakah limbah ditempatkan sesuai dengan tempat & jenis limbah (Ada tempat limbah dan terisi sesuai jenisnya)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>17.</td>
                                            <td>Apakah pengambilan oil sample telah menggunakan tools dan botol sesuai dengan standar prosedur dan diidentifikasi(Botol oil sample telah diberi label dan diisi sesuai standar (model unit, kode unit, jenis oli, komponen yang diambil, date dan HM))</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>18.</td>
                                            <td>Apakah pengisian oli dan  pemasangan filter memperhatikan kesesuaian spect, kebersihan, kekencangan dan kapasitas(Kondisi drain plug bersih, oil dan filter sesuai dengan spesifikasi serta memperhatikan kebersihan saat pengisisan maupun penempatan oil filter)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>19.</td>
                                            <td>Apakah proses penggantian spare part memperhatikan aspek kebersihan, ketepatan proses pemasangannya.(Ada marking, torque sesuai, bersih, tidak rusak)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>20.</td>
                                            <td>Apakah semua energi/potensi bahaya masih diisolasi dan prosedur isolasi masih dilakukan(Prosedur isolasi dimengerti dan dilakukan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>21.</td>
                                            <td>Apakah proses pekerjaan diarea tertentu mengikuti aturan work permit yang sudah dikeluarkan.(Prosedur work permit dimengerti dan dilakukan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>22.</td>
                                            <td>Apakah proses pekerjaan yang menggunakan peralatan tertentu telah mengikuti aturan SIO/KIMPER/TIO(Operator mempunyai SIO/Kimper/TIO)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>23.</td>
                                            <td>Apakah penempatan barang (komponen, parts, tools, special tools ) dilakukan secara rapih, aman dan terhindar dari kotoran, debu serta ditempatkan pada tempatnya .(Penempatan barang bekas dilakukan secara rapih, aman dan terlindung dan utk komponen diberikan taging serta ditempatkan pada tempatnya .)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>24.</td>
                                            <td>Apakah proses pekerjaan telah mengikuti langkah safety sesuai dengan (JSA) Job Safety Analisis yang telah dibuat. (Proses  pekerjaan telah  menggunakan tools / sarana kerja sesuai dengan (JSA) Job Safety Analisis yang telah dibuat dan dipahami oleh mekanik)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>25.</td>
                                            <td>Apakah proses pekerjaan juga dilakukan pengecheckan kelengkapan, indicator kerja dan fungsi optional  equipment system ( Auto lub, Optional lamp, Fire safety device) dan dicatat pada lembar kerja.(Pengecheckan dan pencatatan kelengkapan dan fungsi optional  equipment system ( Auto lub, Optional lamp) dan Fire safety device (emergency stop, isolator switch, fatique warning, safety belt, fire suspresiin) dilakukan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>26.</td>
                                            <td>Apakah pengisian check sheet dilakukan secara lengkap sesuai dengan form yang tersedia (Pengisian check sheet dilakukan selama proses pekerjaan berlangsung dan hasilnya divalidasi oleh atasan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>27.</td>
                                            <td>Apakah dalam proses pekerjaan selalu dilakukan testing performance sebelum dinyatakan unit ready.(Testing dan pencatatan performance atas beberapa fungsi dan kompenen ( Steering, brake, Lamp) dan  safety device ( fire axtinguser/suspresion, Auto lub ) dilakukan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>28.</td>
                                            <td>Apakah dilakukan final inspection terhadap hasil pekerjaan dengan menggunakan check sheet ( QA10 PI) serta dilakukan penyimpanan dokumen secara rapih (Final inspection total, pembersihan unit/komponen, pengumpulan semua form (lembar kerja) telah dilakukan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>29.</td>
                                            <td>Apakah ditemukan item yang rusak, mudah diperbaiki dan bisa diperbaiki saat PS tersebut tetapi tidak dilakukan tindakan perbaikan (misal : missing clamp, bolt lose, dll)(Ditemukan clamp kendor, hose melintir, crack, dll.)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>30.</td>
                                            <td>Temuan pada point 1.29 tersebut tidak dimasukkan atau diusulkan ke list backlog(Tercatat pada form BMS (Backlog Monitoring System))</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="row justify-content-between">
                                <button class="btn btn-danger mr-1 back-button" >Back</button>
                                <button class="btn btn-primary mr-1 next-button" >Next</button>
                            </div>
                        </section>
                        <section class="hide" id="section_3">
                            <h5>2. Remove & Install (R&I)</h5>
                            <div class="table-responsive">
                                <table class="table table-striped custom-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th class="text-center">YA</th>
                                            <th class="text-center">TIDAK</th>
                                            <th class="text-center" style="width: 1%; white-space: nowrap;">N/A</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Apakah kondisi area kerja memenuhi standart kerja(Area lokasi kerja rata, datar, keras, ada garis demarkasi, bersih, rapi, luas (untuk proses manuver) dan jauh dari lokasi blasting)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Apakah Form QA 4A (R & I), QA 5 (Measurement) dan  Form PPM/QA3 telah disiapkan sesuai kebutuhan(Form Sudah tersedia di area kerja)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Apakah kebutuhan tools dan facility yang diperlukan tersedia sesuai dengan jenis pekerjaan dan dalam kondisi baik/siap pakai(Tools dan facility tersedia dan siap pakai)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Apakah parts handling untuk GOH/PCR telah dikelompokan dan ditempatkan secara rapi dan mudah dicari(Dilakukan pengelompokan part sesuai dengan step pekerjaan dan pencatatan additional part)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Apakah telah tersedia buku referensi (PSN,SM,PK2,Reuseable Part,PB) terkait pekerjaan yang dilakukan(Referensi PSN,SM,PK2,PB,Reusable Part tersedia)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Apakah dilakukan PPM & Receiving unit in sebelum GOH/PCR(Ada pengisian form receiving dan pengechekan atas kebocoran, kerusakan unit dan kelengkapan unit)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>Apakah unit sudah dilakukan pencucian sesuai prosedur(Pastikan electric compartment , turbo dan exhaust manifold tidak disemprot air dan bagian undercarriage (Track type) dicuci saat proses washing)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>Apakah sudah dilaksanakan P5M/ morning talk  (pembagian job, target dan JSA)(Pembagian job, target lead time pekerjaan dan dokumen JSA sudah tersosialisasikan dan telah dipahami oleh mekanik)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>Apakah APD yang diperlukan sudah lengkap dan sesuai dengan jenis dan kondisi pekerjaan(Bekerja menggunakan APD yang sesuai dengan jenis pekerjaannya)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>Apakah setiap pekerjaan di area terbatas sudah memiliki workpermit / ijin kerja khusus atas pekerjaan ( confined space, scafollding, hot work , high work, excavating, lifting (Ada form workpermit yang sudah divalidasi oleh pihak yang berwenang)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>Apakah semua energi bahaya sudah diisolasi dan personal lock serta isolation tag  sudah dipasang sesuai dengan standar prosedur pemasangan(Semua energi bahaya (listrik, thermal, mekanik, kimia, radiasi) sudah diisolasi, personal lock, isolation tag, dan kartu peralatan rusak sudah terpasang sesuai prosedur sebelum melakukan pekerjaan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>Apakah pekerja yang bertugas melakukan testing, dan operate equipment support telah mempunyai SIO/KIMPER/TIO yang sesuai(Pekerja yang bertugas testing unit dan mengoperasikan overhead crane, forklift, tyre handler, manitou, dll telah mempunyai SIO/KIMPER/TIO yang sesuai)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>Apakah proses lifting sudah mengikuti standar prosedur (Proses lifting memperhatikan lifting point, SWL, posisi equipment support (outrigger, kapasitas, lokasi kerja), dan dipandu oleh seorang Rigger yang ditunjuk)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>Apakah penggunaan tools memperhatikan kondisi kelayakan, keamanan, sesuai dengan standar prosedur(Penggunaan tools mengikuti langkah kerja sesuai standar prosedur serta penempatan tools sebelum dan sesudah pekerjaan dilakukan dengan benar)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>Apakah limbah ditempatkan sesuai dengan tempat & jenis limbah (Ada tempat limbah dan terisi sesuai jenisnya)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>16.</td>
                                            <td>Apakah proses pekerjaan sesuai prosedur/referensi yang ada dan hasilnya tercatat(Ada eviden / QA sheet terisi)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>17.</td>
                                            <td>Apakah receiving komponen baru dilakukan (pengecheckan kondisi, kelengkapan komponen, measurement) sebelum dipasang(ada evident / Form receiving terisi dengan lengkap)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>18.</td>
                                            <td>Apakah penanganan komponen bekas ditempatkan pada stand dan diberi tanda (tagging) serta dilakukan pengecheckan kelengkapannya sebelum dikirim ke Reman(Komponen bekas ditempat khusus/stand dan diberi tanda/tagging)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>19.</td>
                                            <td>Apakah proses penggantian spare part memperhatikan aspek kebersihan, ketepatan proses pemasangannya.(Ada marking, torque sesuai, bersih, tidak rusak)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>20.</td>
                                            <td>Apakah semua energi/potensi bahaya masih diisolasi dan prosedur isolasi masih dilakukan(Prosedur isolasi dimengerti dan dilakukan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>21.</td>
                                            <td>Apakah proses pekerjaan diarea tertentu mengikuti aturan work permit yang sudah dikeluarkan.(Prosedur work permit dimengerti dan dilakukan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>22.</td>
                                            <td>Apakah proses pekerjaan yang menggunakan peralatan tertentu telah mengikuti aturan SIO/KIMPER/TIO(Operator mempunyai SIO/Kimper/TIO)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>23.</td>
                                            <td>Apakah penempatan barang (komponen, parts, tools, special tools ) dilakukan secara rapih, aman dan terhindar dari kotoran, debu serta ditempatkan pada tempatnya .(Penempatan barang bekas dilakukan secara rapih, aman dan terlindung dan utk komponen diberikan taging serta ditempatkan pada tempatnya .)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>24.</td>
                                            <td>Apakah proses pekerjaan telah mengikuti langkah safety sesuai dengan (JSA) Job Safety Analisis yang telah dibuat. (Proses  pekerjaan telah  menggunakan tools / sarana kerja sesuai dengan (JSA) Job Safety Analisis yang telah dibuat dan dipahami oleh mekanik)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>25.</td>
                                            <td>Apakah proses pekerjaan juga dilakukan pengecheckan kelengkapan, indicator kerja dan fungsi optional  equipment system ( Auto lub, Optional lamp, Fire safety device) dan dicatat pada lembar kerja.(Pengecheckan dan pencatatan kelengkapan dan fungsi optional  equipment system ( Auto lub, Optional lamp) dan Fire safety device (emergency stop, isolator switch, fatique warning, safety belt, fire suspresiin) dilakukan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>26.</td>
                                            <td>Apakah pengisian check sheet dilakukan secara lengkap sesuai dengan form yang tersedia (Pengisian check sheet dilakukan selama proses pekerjaan berlangsung dan hasilnya divalidasi oleh atasan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>27.</td>
                                            <td>Apakah dalam proses pekerjaan selalu dilakukan testing performance sebelum dinyatakan unit ready.(Testing dan pencatatan performance atas beberapa fungsi dan kompenen ( Steering, brake, Lamp) dan  safety device ( fire axtinguser/suspresion, Auto lub ) dilakukan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>28.</td>
                                            <td>Apakah dilakukan final inspection dan PPM unit out terhadap hasil pekerjaan dengan menggunakan check sheet ( QA10 PI & QA 3) serta dilakukan penyimpanan dokumen secara rapih (Final inspection total, pembersihan unit/komponen, pengumpulan semua form (QA 3, QA 4A, QA 4,QA 5, QA 7, QA 10) telah dilakukan dan didokumentasikan secara aman dan rapi)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="row justify-content-between">
                                <button class="btn btn-danger mr-1 back-button" >Back</button>
                                <button class="btn btn-primary mr-1 next-button" >Next</button>
                            </div>
                        </section>
                        <section class="hide" id="section_4">
                            <h5>3. Troubleshooting & Repair ( Minor & Major Repair )</h5>
                            <div class="table-responsive">
                                <table class="table table-striped custom-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th class="text-center">YA</th>
                                            <th class="text-center">TIDAK</th>
                                            <th class="text-center" style="width: 1%; white-space: nowrap;">N/A</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Apakah kondisi area kerja memenuhi standart kerja(Area lokasi kerja rata, datar, keras, ada garis demarkasi, bersih, rapi, luas (untuk proses manuver) dan jauh dari lokasi blasting)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Apakah mekanik mengerti problem/pekerjaan yang sedang dilakukan(Mekanik mendapat supervisi awal dan mengerti)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Apakah kebutuhan tools dan facility yang diperlukan tersedia sesuai dengan jenis pekerjaan dan dalam kondisi baik/siap pakai(Tools dan facility tersedia dan siap pakai)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Apakah persiapan parts sudah sesuai dengan scope job(Part tersedia sesuai dengan SPB)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Apakah telah tersedia buku referensi (PSN,SM,PK2,Reuseable Part,PB) terkait pekerjaan yang dilakukan(Referensi PSN,SM,PK2,PB,Reusable Part tersedia)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Apakah sudah dilaksanakan P5M/ morning talk  (pembagian job, target dan JSA)(Pembagian job, target lead time pekerjaan dan dokumen JSA sudah tersosialisasikan dan telah dipahami oleh mekanik)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>Apakah APD yang diperlukan sudah lengkap dan sesuai dengan jenis dan kondisi pekerjaan(Bekerja menggunakan APD yang sesuai dengan jenis pekerjaannya)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>Apakah setiap pekerjaan di area terbatas sudah memiliki workpermit / ijin kerja khusus atas pekerjaan ( confined space, scafollding, hot work , high work, excavating, lifting (Ada form workpermit yang sudah divalidasi oleh pihak yang berwenang)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>Apakah semua energi bahaya sudah diisolasi dan personal lock serta isolation tag  sudah dipasang sesuai dengan standar prosedur pemasangan(Semua energi bahaya (listrik, thermal, mekanik, kimia, radiasi) sudah diisolasi, personal lock, isolation tag, dan kartu peralatan rusak sudah terpasang sesuai prosedur sebelum melakukan pekerjaan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>Apakah pekerja yang bertugas melakukan testing, dan operate equipment support telah mempunyai SIO/KIMPER/TIO yang sesuai(Pekerja yang bertugas testing unit dan mengoperasikan overhead crane, forklift, tyre handler, manitou, dll telah mempunyai SIO/KIMPER/TIO yang sesuai)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>Apakah proses lifting sudah mengikuti standar prosedur (Proses lifting memperhatikan lifting point, SWL, posisi equipment support (outrigger, kapasitas, lokasi kerja), dan dipandu oleh seorang Rigger yang ditunjuk)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>Apakah penggunaan tools memperhatikan kondisi kelayakan, keamanan, sesuai dengan standar prosedur(Penggunaan tools mengikuti langkah kerja sesuai standar prosedur serta penempatan tools sebelum dan sesudah pekerjaan dilakukan dengan benar)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>Apakah limbah ditempatkan pada tempatnya(Ada tempat limbah)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>Apakah pengisian oli dan  pemasangan filter memperhatikan kesesuaian spect, kebersihan, kekencangan dan kapasitas(Kondisi drain plug bersih, oil dan filter sesuai dengan spesifikasi serta memperhatikan kebersihan saat pengisisan maupun penempatan oil filter)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>Apakah proses penggantian spare part memperhatikan aspek kebersihan, ketepatan proses pemasangannya.(Ada marking, torque sesuai, bersih, tidak rusak)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>16.</td>
                                            <td>Apakah semua energi/potensi bahaya masih diisolasi dan prosedur isolasi masih dilakukan(Prosedur isolasi dimengerti dan dilakukan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>17.</td>
                                            <td>Apakah proses pekerjaan diarea tertentu mengikuti aturan work permit yang sudah dikeluarkan.(Prosedur work permit dimengerti dan dilakukan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>18.</td>
                                            <td>Apakah proses pekerjaan yang menggunakan peralatan tertentu telah mengikuti aturan SIO/KIMPER/TIO(Operator mempunyai SIO/Kimper/TIO)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>19.</td>
                                            <td>Apakah penempatan barang (komponen, parts, tools, special tools ) dilakukan secara rapih, aman dan terhindar dari kotoran, debu serta ditempatkan pada tempatnya .(Penempatan barang bekas dilakukan secara rapih, aman dan terlindung dan utk komponen diberikan taging serta ditempatkan pada tempatnya .)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>20.</td>
                                            <td>Apakah proses pekerjaan telah mengikuti langkah safety sesuai dengan (JSA) Job Safety Analisis yang telah dibuat. (Proses  pekerjaan telah  menggunakan tools / sarana kerja sesuai dengan (JSA) Job Safety Analisis yang telah dibuat dan dipahami oleh mekanik)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>21.</td>
                                            <td>Apakah proses pekerjaan juga dilakukan pengecheckan kelengkapan, indicator kerja dan fungsi optional  equipment system ( Auto lub, Optional lamp, Fire safety device) dan dicatat pada lembar kerja.(Pengecheckan dan pencatatan kelengkapan dan fungsi optional  equipment system ( Auto lub, Optional lamp) dan Fire safety device (emergency stop, isolator switch, fatique warning, safety belt, fire suspresiin) dilakukan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>22.</td>
                                            <td>Apakah pengisian check sheet dilakukan secara lengkap sesuai dengan form yang tersedia (Check sheet terisi lengkap dan  sesuai standarnya.)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>23.</td>
                                            <td>Apakah dalam proses pekerjaan selalu dilakukan testing performance sebelum dinyatakan unit ready.(Test perform unit dan test optional unit  (safety device, fire axtinguser/suspresion, Auto lub ) tercatat.)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>24.</td>
                                            <td>Apakah dilakukan final inspection terhadap hasil pekerjaan dengan menggunakan check sheet ( QA10 PI) serta dilakukan penyimpanan dokumen secara rapih (Final inspection total, pembersihan unit/komponen, pengumpulan semua form (lembar kerja) telah dilakukan)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="row justify-content-between">
                                <button class="btn btn-danger mr-1 back-button" >Back</button>
                                <button class="btn btn-primary mr-1 next-button" >Next</button>
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
                            <div class="row justify-content-between">
                                <button class="btn btn-danger mr-1 back-button" >Back</button>
                                <button class="btn btn-primary mr-1 next-button" >Next</button>
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
                            <div class="row justify-content-between">
                                <button class="btn btn-danger mr-1 back-button" >Back</button>
                                <button class="btn btn-primary mr-1 next-button" >Next</button>
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
                            <div class="row justify-content-between">
                                <button class="btn btn-danger mr-1 back-button" >Back</button>
                                <button class="btn btn-primary mr-1 next-button" >Next</button>
                            </div>
                        </section>
                        <section class="hide" id="section_8">
                            <div class="row">
                                <div class="text-center col-sm-12 col-xs-12">
                                    <h3>Validasi</h3>
                                </div>
                                <div class="text-center col-sm-12 col-xs-12">
                                    <h3>Pernyataan ini sebagai pengganti tandatangan</h3>
                                </div>
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
                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <button class="btn btn-danger back-button">Kembali</button>
                                    <button class="btn btn-success" type="submit" onclick="add_data()">Simpan</button>
                                </div>
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
                if($next.length>0) {
                    section.addClass('hide');
                    $next.removeClass('hide');
                    $('html, body').animate({
                        scrollTop: $('.section-header').offset().top
                    }, 500);
                }
            });
            $('.back-button').on('click', function (e) {
                var section = $(this).closest("section");
                var $previous = section.prev();
                console.log($previous)
                if($previous.length>0) {
                    section.addClass('hide');
                    $previous.removeClass('hide');
                    $('html, body').animate({
                        scrollTop: $('.section-header').offset().top
                    }, 500);
                }
            });
        });
    </script>
@endpush