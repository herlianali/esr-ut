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
        {{-- <div class="card"> --}}
            {{-- <div class="card-body "> --}}
                <div class="table-responsive p-0">
                    {{-- <table style="font-size: 20px"> --}}
                    <table class="table table-striped col-lg-12 col-md-12 col-sm-2 col-2">
                        <tbody>
                            <tr>
                                <td class="pr-0 col-1">1.</td>
                                <td class="col-lg-6 col-md-6 col-sm-1 col-1">Tanggal Laporan</td>
                                <td class="">: 16-07-2024</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">2. </td>
                                <td class="">Kelompok Jabatan</td>
                                <td class="">: Pengawas / Target 13 PW</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">3. </td>
                                <td class="">Pengawas / Target 13 PW</td>
                                <td class="">: -</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">4. </td>
                                <td class="">Nama Pengawas</td>
                                <td class="">: Jhon doe</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">5. </td>
                                <td class="">Non Pengawas / All Karyawan</td>
                                <td class="">: -</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">6. </td>
                                <td class="">Nama Lengkap</td>
                                <td class="">: -</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">7. </td>
                                <td class="">NRP</td>
                                <td class="">: -</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">8. </td>
                                <td class="">Perusahaan</td>
                                <td class="">: -</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">9. </td>
                                <td class="">Dept / Sektor</td>
                                <td class="">: -</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">10. </td>
                                <td class="">Laporan Bahaya</td>
                                <td class="">: Bahaya testing</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">11. </td>
                                <td class="">Lokasi Ditemukannya Bahaya</td>
                                <td class="">: Lokasi Bahaya testing</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">12. </td>
                                <td class="">Detail Lokasi Ditemukannya Bahaya</td>
                                <td class="">: Detail Lokasi Bahaya testing</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">13. </td>
                                <td class="">Dept / Sektor Ditemukannya Bahaya</td>
                                <td class="">: Dept Bahaya</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">14. </td>
                                <td class="">Tindakan atau Kondisi Bahaya Yang Ditemukan</td>
                                <td class="">: Tindakan Bahaya testing</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">15. </td>
                                <td class="">Kategori Deviasi</td>
                                <td class="">: Prosedur</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">16. </td>
                                <td class="">Kategori Temuan</td>
                                <td class="">: Kategori Tidak Aman</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">17. </td>
                                <td class="">KTA Lanjut 1</td>
                                <td class="">: KTA lanjut </td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">18. </td>
                                <td class="">Apakah KTA (Kondisi tidak aman) yang <br>ditemukan, ada kontribusi dari TTA (Tindakan tidak aman) ?</td>
                                <td class="">: -</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">19. </td>
                                <td class="">KTA Lanjut 2</td>
                                <td class="">: -</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">20. </td>
                                <td class="">Jelaskan TTA yang berkontribusi terhadap adanya temuan KTA tersebut ! </td>
                                <td class="">: -</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            {{-- </div> --}}
        {{-- </div> --}}
        <div class="card-footer">
            <div class="row justify-content-between">
                <button class="btn btn-danger mr-1 Edit-button">Ubah</button>
                <button class="btn btn-primary mr-1" type="submit">Selesai</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush