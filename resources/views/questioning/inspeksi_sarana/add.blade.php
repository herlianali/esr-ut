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
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h4>Form Inspeksi Sarana</h4>
            </div>
            <div class="card-body p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Tanggal Inspeksi / Sidak</label>
                            <input type="text" class="form-control datetimepicker">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Nama Pengawas</label>
                            <small class="form-text text-muted">Nama Pengawas Yang Mendapat Target 09 Atau 13 PW</small>
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
                            <label class="section-title">Lokasi Pelaksanaan Inspeksi / Sidak Sarana</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Nomor Lambang Unit Yang Dilakukan Inspeksi / Sidak Sarana</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label class="section-title">Checklist Inspeksi Sarana / Kendaraan</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <h5>A. Kondisi Kendaraan</h5>
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
                                            <td>Kondisi Roda</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Kondisi Sabuk Pengaman</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Kondisi Kaca-kaca</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Kondisi lampu-lampu (depan, belakang, rem, sen, rotary, back alarm, dll)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Kondisi sistem 4 WD</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Kondisi sistem rem</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>Kondisi sistem kemudi</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>Kondisi radio komunikasi</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>Ketersediaan dan kelengkapan isi kotak P3K</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>Ketersediaan dan kelayakan APAR</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>Ketersediaan dan kelayakan buggy whip</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>Ketersediaan dan kelayakan kunci kunci</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>Ketersediaan dan kelayakan safety cone / segitiga</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>Kondisi fisik kendaraan</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>Kondisi box (untuk mobil box)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label class="section-title">Catatan deviasi dari item KONDISI KENDARAAN</label>
                            <small class="form-text text-muted">Tuliskan deviasi-deviasi yang ditemukan pada item pemeriksaan di atas. Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. Tulis "Tidak Ada Deviasi" jika tidak ditemukan deviasi.</small>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <h5>B. Driver dan Penumpang</h5>
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
                                            <td>Memiliki dan membawa KIMPER yang sesuai (driver)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Memiliki dan membawa Mine Permit (penumpang)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Memiliki dan membawa APD lengkap</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Menggunakan sabuk pengaman</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Kondisi kebugaran driver</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label class="section-title">Catatan deviasi dari item DRIVER & PENUMPANG</label>
                            <small class="form-text text-muted">Tuliskan deviasi-deviasi yang ditemukan pada item pemeriksaan di atas. Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. Tulis "Tidak Ada Deviasi" jika tidak ditemukan deviasi.</small>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <h5>C. Prosedur & Standar</h5>
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
                                            <td>P2H telah dilaksanakan dan disyahkan</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Membawa formulir JSA</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Membawa pad lock dan danger tag</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Membawa dokumen kelengkapan kerja lainnya (job card, form sosialisasi JSA, dll)</td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                            <td class="text-center"><input type="radio" ></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label class="section-title">Catatan deviasi dari item PROSEDUR & STANDAR</label>
                            <small class="form-text text-muted">Tuliskan deviasi-deviasi yang ditemukan pada item pemeriksaan di atas. Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. Tulis "Tidak Ada Deviasi" jika tidak ditemukan deviasi.</small>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title">Pengawas telah memberikan feedback kepada karyawan, dan akan melakukan follow up atas deviasi-deviasi yang ditemukan</label>
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
                        <div class="form-group col-md-12 col-sm-12">
                            <label class="section-title">Catatan Khusus(Jika ada)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="card-footer">
                        <div class="row justify-content-between">
                            <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            <button class="btn btn-secondary " type="reset">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush