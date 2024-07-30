@extends('layout.app')

@push('css')
@endpush

@section('menu')
    @php($menu = '1')
@endsection

@section('content')
<div class="section-header">
    <h1>Audit APD</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Form Questioning</a></div>
        <div class="breadcrumb-item">Audit APD</div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>Audit APD Data Form</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid">
                    <section>
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title pb-4">Tanggal Inspeksi / Sidak</label>
                                <input type="text" class="form-control datetimepicker mt-1">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Nama Pengawas</label>
                                <small class="form-text text-muted">Nama Pengawas Yang Memiliki Target 09 Atau 13 PW</small>
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
                                <label class="section-title ">MIA Lokasi Pelaksanaan Inspeksi / Sidak APD</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <h5>Checklist Audit APD</h5>
                                <span>Periksa kelengkapan dan kondisi kelayakan APD setiap karyawan yang diaudit.</span>
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table" >
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th class="text-center">Lengkap</th>
                                                <th class="text-center">Tidak Lengkap</th>
                                                <th class="text-center" style="width: 1%; white-space: nowrap;">N/A</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Mine permit</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Personal Danger Tag</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Pad Lock (gembok)</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Safety Helmet / helm safety</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td>Stiker LOGO PERUSAHAAN (bagian depan) helm</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>6.</td>
                                                <td>Stiker EMERGENCY CALL (bagian belakang) helm</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>7.</td>
                                                <td>Stiker KOMITMEN PELUBANGAN (bagian kanan) helm</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>8.</td>
                                                <td>Safety glasses/ kacamata safety (warna bening)</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>9.</td>
                                                <td>Safety shoes / sepatu safety</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>10.</td>
                                                <td>Seragam ber-reflector / rompi</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                            <tr>
                                                <td>11.</td>
                                                <td>Masker (sesuai ketentuan proteksi covid19)</td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                                <td class="text-center"><input type="radio" ></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Jumlah Karyawan Yang Diaudit (Berapa Orang)</label>
                                <small class="form-text text-muted">Tuliskan deviasi-deviasi yang ditemukan pada item pemeriksaan di atas. Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. Tulis "Tidak Ada Deviasi" jika tidak ditemukan deviasi.</small>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Apakah ada deviasi dari hasil audit APD?</label>
                                <div class="form-check">
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
                    </section>
                    <section>
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Deviasi</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Jumlah Karyawan Yang Ditemukan Diviasi (Berapa Orang)</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Detail Temuan</label>
                                <small class="form-text text-muted">Tuliskan deviasi-deviasi yang ditemukan pada item pemeriksaan di atas. Gunakan nomor urut jika ditemukan lebih dari 1 deviasi.</small>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Nama Karyawan yang Ditemukan Deviasi</label>
                                <small class="form-text text-muted pb-4">Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. </small>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Jabatan Karyawan Yang Ditemukan Deviasi</label>
                                <small class="form-text text-muted">Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. </small>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="section-title pb-4">Perusahaan Karyawan Yang Ditemukan Deviasi</label>
                                <select class="form-control select2">
                                    <option value="1">BP</option>
                                    <option value="2">HMU</option>
                                    <option value="3">KAMAJU</option>
                                    <option value="4">NAJ</option>
                                    <option value="5">NIKMAT</option>
                                    <option value="6">TPP</option>
                                    <option value="7">TRAC</option>
                                    <option value="8">UT</option>
                                    <option value="9">UTE</option>
                                </select>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Validasi</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Pengawas telah melakukan audit APD dengan sebenarnya, dan telah memberikan feedback kepada karyawan yang ditemukan deviasi, serta akan melakukan follow up atas deviasi-deviasi yang ditemukan</label>
                                <div class="form-check">
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
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="section-title">Catatan Khusu (Jika Ada)</label>
                                <input type="text" class="form-control">
                            </div>
                            <hr>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                <button class="btn btn-secondary " type="reset">Reset</button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        init_form_element()
    </script>
@endpush