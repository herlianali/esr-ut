@extends('layout.app')

@section('title', 'Form Data')

@push('css')
@endpush

@section('menu')
    @php($menu = '1')
@endsection

@section('content')
<div class="section-header">
    <h1>BBSQ Non Service</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Components</a></div>
        <div class="breadcrumb-item">Table</div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>BBSQ Non Services Form</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid">
                    {{-- <form action="" method=""> --}}
                        <section>
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Waktu Observasi</label>
                                    <input type="text" class="form-control datetimepicker">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Nama Pengawas Yang Melakukan Observasi</label>
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
                                    <label class="section-title">Nama Karyawan Yand Diobservasi</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Jabatan Karyawan Yang Diobservasi</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Perusahaan karyawan yang dilakukan observasi</label>
                                    <select class="form-control select2">
                                        <option value="1">BP</option>
                                        <option value="2">HMU</option>
                                        <option value="3">KAMAJU</option>
                                        <option value="4">NAJ</option>
                                        <option value="5">HARYONO</option>
                                        <option value="6">NIKMAT</option>
                                        <option value="7">TPP</option>
                                        <option value="8">TRAC</option>
                                        <option value="9">UT</option>
                                        <option value="10">UTR</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Jenis Pekerjaan Yang sedang Dilakukan</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Lokasi / Area Kerja</label>
                                    <select class="form-control select2" id="">
                                        <option value="1">Office</option>
                                        <option value="2">Warehouse</option>
                                        <option value="3">Workshop</option>
                                        <option value="4">Catering</option>
                                        <option value="5">Mess</option>
                                        <option value="6">Fild</option>
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
                            <div class="form-group ">
                                <label class="section-title">Checklist BBSQ Non Service</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="">
                                <h5>PROSEDUR</h5>
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
                                                <td>JSA tersedia di tempat kerja</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>JSA telah disosialisasikan kepada seluruh tim kerja</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>JSA telah diikuti dalam proses kerja</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Sistem isolasi (LOTO dijalankan dengan baik)</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td>Terdapat rambu-rambu atau sistem peringatan yang memadai</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>6.</td>
                                                <td>Izin Kerja Khusus dilengkapi</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>7.</td>
                                                <td>Mempunyai kewenangan yang sesuai (KIMPER)</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="">
                                <h5>ALAT PERALATAN</h5>
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
                                                <td>Kondisi alat / tools yang digunakan masih layak dan aman untuk digunakan</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Peralatan sudah diperiksa/diinspeksi</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Alat yang digunakan sesuai dengan pekerjaan yang dilakukan</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Alat digunakan dengan benar (cara yang benar dan sesuai peruntukannya)</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td>Hanya peralatan yang diperlukan yang berada di tempat kerja (ringkas)</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="">
                                <h5>LINGKUNGAN KERJA</h5>
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
                                                <td>Kebersihan dan denah kerja yang baik</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Area kerja memadai (tidak sempit dan akses tidak terhalang)</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Kondisi-kondisi yang tidak aman telah dikontrol</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="">
                                <h5>KARYAWAN</h5>
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
                                                <td>Karyawan dalam kondisi FIT to work (Lihat kondisi fisik dan pastikan Istirahat yang cukup minimal 6 jam)</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Mengetahui detail job yang dilakukan ?</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Mendapat Informasi prosedur Pekerjaan & tindakan jika terjadi Emergency (misal : kecelakaan) ?</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Mengetahui Resiko pekerjaan yang dilakukan (Contoh terpukul, terjepit, tertimpa, tertusuk, terpotong, tersayat, terbakar, lentingan dll) ?</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td>Karyawan kompeten dan mampu menegrjakan pekerjaan tersebut</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>6.</td>
                                                <td>Posisi kerja karyawan sudah benar (ergonomis)</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>7.</td>
                                                <td>Karyawan tidak terburu buru atau shortcut dalam bekerja</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>8.</td>
                                                <td>APD tersedia dan digunakan</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>9.</td>
                                                <td>Mengerti dan memahami prosedur penanganan limbah B3</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">TINDAKAN Tidak Aman yang ditemukan ?</label>
                                    <small class="form-text text-muted">Tulis "Tidak Ada" jika tidak terdapat deviasi</small>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Kategori  Deviasi TINDAKAN Tidak Aman</label>
                                    <small class="form-text text-muted">Tulis "Tidak Ada" jika tidak terdapat deviasi</small>
                                    <select class="form-control select2">
                                        <option value="1">Prosedur</option>
                                        <option value="2">APD/Alat Keselamatan</option>
                                        <option value="3">Alat & Peralatan Kerja</option>
                                        <option value="4">Fasilitas</option>
                                        <option value="5">Housekeeping</option>
                                        <option value="6">Lingkungan</option>
                                        <option value="7">Kesehatan</option>
                                        <option value="8">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Follow up atas TINDAKAN Tidak Aman</label>
                                    <small class="form-text text-muted">Tulis "Tidak Ada" jika tidak terdapat deviasi</small>
                                    <select class="form-control select2">
                                        <option value="1">Personal Contact</option>
                                        <option value="2">Sanksi Surat Peringatan</option>
                                        <option value="3">Sanksi Pelubangan sesuai SPDK</option>
                                        <option value="4">Melaporkan ke PIC terkait karena bukan kewenangan saya</option>
                                        <option value="5">Tidak Dilakukan Tindakan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">KONDISI Tidak Aman yang ditemukan</label>
                                    <small class="form-text text-muted">Tulis "Tidak Ada" jika tidak terdapat deviasi</small>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Kategori  Deviasi KONDISI Tidak Aman</label>
                                    <small class="form-text text-muted">Tulis "Tidak Ada" jika tidak terdapat deviasi</small>
                                    <select class="form-control select2">
                                        <option value="1">Prosedur</option>
                                        <option value="2">APD/Alat Keselamatan</option>
                                        <option value="3">Alat & Peralatan Kerja</option>
                                        <option value="4">Fasilitas</option>
                                        <option value="5">Housekeeping</option>
                                        <option value="6">Lingkungan</option>
                                        <option value="7">Kesehatan</option>
                                        <option value="8">Tidak Ada</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Follow up atas KONDISI Tidak Aman</label>
                                    <small class="form-text text-muted">Tulis "Tidak Ada" jika tidak terdapat deviasi</small>
                                    <select class="form-control select2">
                                        <option value="1">Personal Contact</option>
                                        <option value="2">Sanksi Surat Peringatan</option>
                                        <option value="3">Sanksi Pelubangan sesuai SPDK</option>
                                        <option value="4">Melaporkan ke PIC terkait karena bukan kewenangan saya</option>
                                        <option value="5">Tidak Dilakukan Tindakan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label class="section-title">Kontrol Tambahan yang dilakukan (jika ada):</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between">
                                <button class="btn btn-danger mr-1 back-button" >Back</button>
                                <button class="btn btn-primary mr-1 next-button" >Next</button>
                            </div>
                        </section>
                        <section class="hide" id="section_3">
                            <div class="row">
                                <div class="text-center col-sm-12 col-xs-12">
                                    <h3>Validasi</h3>
                                </div>
                                <div class="text-center col-sm-12 col-xs-12">
                                    <span>Pernyataan Validasi ini sebagai pengganti tandatangan pada form hardcopy.</span>
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