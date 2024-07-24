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
                            <label class="section-title pb-4">Lokasi Pelaksanaan Inspeksi / Sidak Sarana</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="section-title pb-4">Nomor Lambang Unit Yang Dilakukan Inspeksi / Sidak Sarana</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label class="section-title">Checklist Inspeksi Sarana / Kendaraan</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <div class="card" >
                                <div class="card-body ">
                                    <h5>A. Kondisi Kendaraan</h5>
                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-2">
                                            Normal
                                        </div>
                                        <div class="col-md-2">
                                            Tidak Normal
                                        </div>
                                        <div class="col-md-2">
                                            N/A
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-6">Kondisi Roda</label>
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
                                        <label for="" class="col-md-6">Kondisi Sabuk Pengaman</label>
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
                                        <label for="" class="col-md-6">Kondisi Kaca-kaca</label>
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
                                        <label for="" class="col-md-6">Kondisi lampu-lampu (depan, belakang, rem, sen, rotary, back alarm, dll)</label>
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
                                        <label for="" class="col-md-6">Kondisi sistem 4 WD</label>
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
                                        <label for="" class="col-md-6">Kondisi sistem rem</label>
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
                                        <label for="" class="col-md-6">Kondisi sistem kemudi</label>
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
                                        <label for="" class="col-md-6">Kondisi radio komunikasi</label>
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
                                        <label for="" class="col-md-6">Kondisi sistem rem</label>
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
                                        <label for="" class="col-md-6">Ketersediaan dan kelengkapan isi kotak P3K</label>
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
                                        <label for="" class="col-md-6">Ketersediaan dan kelayakan APAR</label>
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
                                        <label for="" class="col-md-6">Ketersediaan dan kelayakan Buggy whip</label>
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
                                        <label for="" class="col-md-6">Ketersediaan dan kelayakan kunci-kunci</label>
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
                                        <label for="" class="col-md-6">Ketersediaan dan kelayakan safety cone / segitiga</label>
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
                                        <label for="" class="col-md-6">Kondisi fisik kendaraan</label>
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
                                        <label for="" class="col-md-6">Kondisi box (untuk mobil box)</label>
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
                        <div class="form-group col-md-12 col-sm-12">
                            <label class="section-title">Catatan deviasi dari item KONDISI KENDARAAN</label>
                            <small class="form-text text-muted">Tuliskan deviasi-deviasi yang ditemukan pada item pemeriksaan di atas. Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. Tulis "Tidak Ada Deviasi" jika tidak ditemukan deviasi.</small>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <div class="card" >
                                <div class="card-body ">
                                    <h5>B. Driver dan Penumpang</h5>
                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-2">
                                            Lengkap
                                        </div>
                                        <div class="col-md-2">
                                            Tidak Lengkap
                                        </div>
                                        <div class="col-md-2">
                                            N/A
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-6">Memiliki dan membawa KIMPER yang sesuai (driver)</label>
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
                                        <label for="" class="col-md-6">Memiliki dan membawa Mine Permit (penumpang)</label>
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
                                        <label for="" class="col-md-6">Memiliki dan membawa APD lengkap</label>
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
                                        <label for="" class="col-md-6">Menggunakan sabuk pengaman</label>
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
                                        <label for="" class="col-md-6">Kondisi kebugaran driver</label>
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
                        <div class="form-group col-md-12 col-sm-12">
                            <label class="section-title">Catatan deviasi dari item DRIVER & PENUMPANG</label>
                            <small class="form-text text-muted">Tuliskan deviasi-deviasi yang ditemukan pada item pemeriksaan di atas. Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. Tulis "Tidak Ada Deviasi" jika tidak ditemukan deviasi.</small>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <div class="card" >
                                <div class="card-body ">
                                    <h5>C. Prosedur & Standar</h5>
                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-2">
                                            Lengkap
                                        </div>
                                        <div class="col-md-2">
                                            Tidak Lengkap
                                        </div>
                                        <div class="col-md-2">
                                            N/A
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-6">P2H telah dilaksanakan dan disyahkan</label>
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
                                        <label for="" class="col-md-6">Membawa formulir JSA</label>
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
                                        <label for="" class="col-md-6">Membawa pad lock dan danger tag</label>
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
                                        <label for="" class="col-md-6">Membawa dokumen kelengkapan kerja lainnya (job card, form sosialisasi JSA, dll)</label>
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
                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        <button class="btn btn-secondary " type="reset">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush