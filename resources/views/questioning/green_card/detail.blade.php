@extends('layout.app')

@push('css')
@endpush

@section('menu')
    @php($menu = '1')
@endsection

@section('content')
<div class="section-header">
    <h1>Green Card</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Questioning</a></div>
        <div class="breadcrumb-item">Green card</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <a href="{{ url()->previous() }}" class="btn btn-icon">
            <i class="fas fa-arrow-circle-left" style="font-size:30px;"></i>
        </a>
        <h4>Detail Green Card</h4>
    </div>
    <div class="card-body">
        <div class="card">
            {{-- <div class="card-header"> --}}
                {{-- <h4>Detail Surat</h4> --}}
            {{-- </div> --}}
            <div class="card-body p-0">
                <div class="container">
                    <table style="font-size: 20px">
                        <tr>
                            <td>1.</td>
                            <td>Tanggal Laporan</td>
                            <td>:</td>
                            <td>16 - 07 -2024</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Kelompok Jabatan</td>
                            <td>:</td>
                            <td>Pengawas / Target 13 PW</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Pengawas / Target 13 PW</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Nama Pengawas</td>
                            <td>:</td>
                            <td>Jhon doe</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Non Pengawas / All Karyawan</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>NRP</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Perusahaan</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Dept / Sektor</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Laporan Bahaya</td>
                            <td>:</td>
                            <td>Bahaya testing</td>
                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>Lokasi Ditemukannya Bahaya</td>
                            <td>:</td>
                            <td>Lokasi Bahaya testing</td>
                        </tr>
                        <tr>
                            <td>12.</td>
                            <td>Detail Lokasi Ditemukannya Bahaya</td>
                            <td>:</td>
                            <td>Detail Lokasi Bahaya testing</td>
                        </tr>
                        <tr>
                            <td>13.</td>
                            <td>Dept / Sektor Ditemukannya Bahaya</td>
                            <td>:</td>
                            <td>Dept Bahaya</td>
                        </tr>
                        <tr>
                            <td>14.</td>
                            <td>Tindakan atau Kondisi Bahaya Yang Ditemukan</td>
                            <td>:</td>
                            <td>Tindakan Bahaya testing</td>
                        </tr>
                        <tr>
                            <td>15.</td>
                            <td>Kategori Deviasi</td>
                            <td>:</td>
                            <td>Prosedur</td>
                        </tr>
                        <tr>
                            <td>16.</td>
                            <td>Kategori Temuan</td>
                            <td>:</td>
                            <td>Kategori Tidak Aman</td>
                        </tr>
                        <tr>
                            <td>17.</td>
                            <td>KTA Lanjut 1</td>
                            <td>:</td>
                            <td>KTA lanjut </td>
                        </tr>
                        <tr>
                            <td class="align-top">18.</td>
                            <td>Apakah KTA (Kondisi tidak aman) yang <br>ditemukan, ada kontribusi dari TTA (Tindakan tidak aman) ?</td>
                            <td class="align-bottom">:</td>
                            <td class="align-bottom">-</td>
                        </tr>
                        <tr>
                            <td>19.</td>
                            <td>KTA Lanjut 2</td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>20.</td>
                            <td>Jelaskan TTA yang berkontribusi terhadap adanya temuan KTA tersebut ! </td>
                            <td>:</td>
                            <td>-</td>
                        </tr>
                        
                    </table>
                    {{-- <form action="" method="">
                        <div class="row">
                            <div class="form-group col-md-4">
                              <label class="section-title">Nomor Surat</label>
                              <input type="text" class="form-control" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="section-title">Perihal</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="section-title">Tujuan</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="section-title">Status</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="section-title">File</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                  </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            <button class="btn btn-secondary" type="reset">Reset</button>
                        </div>
                    </form> --}}
                    <div class="card-footer text-right">
                        <button class="btn btn-danger mr-1 back-button">Back</button>
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        {{-- <button class="btn btn-secondary" type="reset">Reset</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush