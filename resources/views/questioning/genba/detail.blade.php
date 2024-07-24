@extends('layout.app')

@push('css')
@endpush

@section('menu')
    @php($menu = '1')
@endsection

@section('content')
<div class="section-header">
    <h1>Genba</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Questioning</a></div>
        <div class="breadcrumb-item">Genba</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <a href="{{ url()->previous() }}" class="btn btn-icon">
            <i class="fas fa-arrow-circle-left" style="font-size:30px;"></i>
        </a>
        <h4>Detail Genba</h4>
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
                                <td class="col-lg-6 col-md-6 col-sm-1 col-1">Tanggal Pelaksanaan Genba</td>
                                <td class="">: 03-03-2022</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">2. </td>
                                <td class="">Area Genba</td>
                                <td class="">: Warehouse</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">3. </td>
                                <td class="">Lokasi Pelaksanaan</td>
                                <td class="">: Mainshop buma</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">4. </td>
                                <td class="">Nama Pengawas</td>
                                <td class="">: AGUS SISWANTO</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">5. </td>
                                <td class="">Deskripsi Temuan / Deviasi TINDAKAN Tidak Aman</td>
                                <td class="">: Genangan air di lantai</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">6. </td>
                                <td class="">Kategori Temuan / Deviasi TINDAKAN Tidak Aman</td>
                                <td class="">: Lingkungan</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">7. </td>
                                <td class="">Usulan Tindakan / Rekomendasi Perbaikan atas TINDAKAN Tidak Aman</td>
                                <td class="">: Scrap dan eliminasi bahaya</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">8. </td>
                                <td class="">Foto Temuan TINDAKAN Tidak Aman (jika ada)</td>
                                <td class="">: <img src="https://asset.kompas.com/crops/NU3pvp4GxO5fXT_0BPcBOhcRJTo=/0x0:0x0/750x500/data/photo/2021/02/16/602b8988235ec.jpg" class="img-thumbnail" alt="" width="30%"></td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">9. </td>
                                <td class="">Apa Follow Up Yang Sudah Anda Lakukan atas TINDAKAN Tidak Aman ?</td>
                                <td class="">: Melaporkan ke PIC terkait karena bukan kewenangan saya</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">10. </td>
                                <td class="">Deskripsi Temuan / Deviasi KONDISI Tidak Aman</td>
                                <td class="">: Genangan air d lantai</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">11. </td>
                                <td class="">Kategori Temuan / Deviasi KONDISI Tidak Aman</td>
                                <td class="">: House Keeping</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">12. </td>
                                <td class="">Usulan Tindakan / Rekomendasi Perbaikan atas KONDISI Tidak Aman</td>
                                <td class="">: Scrap dan bersihkan lantai</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">13. </td>
                                <td class="">Foto Temuan KONDISI Tidak Aman (jika ada)</td>
                                <td class="">: <img src="https://asset.kompas.com/crops/NU3pvp4GxO5fXT_0BPcBOhcRJTo=/0x0:0x0/750x500/data/photo/2021/02/16/602b8988235ec.jpg" class="img-thumbnail" alt="" width="30%"> </td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">14. </td>
                                <td class="">Apa Follow Up Yang Sudah Anda Lakukan atas KONDISI Tidak Aman ?</td>
                                <td class="">: Melakukan perbaikan langsung</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">15. </td>
                                <td class="">Keikutsertaan Genba Management</td>
                                <td class="">: -</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">16. </td>
                                <td class="">Penyelenggara Genba</td>
                                <td class="">: -</td>
                            </tr>
                            <tr>
                                <td class="pr-0 col-1">17. </td>
                                <td class="">Dokumentasi Keikutsertaan Genba (additional)</td>
                                <td class="">: <button class="btn btn-info btn-icon"><i class="far fa-file fa-10x"></i></button> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            {{-- </div> --}}
        {{-- </div> --}}
        <div class="card-footer">
            <div class="row justify-content-between">
                <div class="gallery-item" data-image="https://asset.kompas.com/crops/NU3pvp4GxO5fXT_0BPcBOhcRJTo=/0x0:0x0/750x500/data/photo/2021/02/16/602b8988235ec.jpg" data-title="Image 5" href="https://asset.kompas.com/crops/NU3pvp4GxO5fXT_0BPcBOhcRJTo=/0x0:0x0/750x500/data/photo/2021/02/16/602b8988235ec.jpg" title="Image 5" style="background-image: url(&quot;https://asset.kompas.com/crops/NU3pvp4GxO5fXT_0BPcBOhcRJTo=/0x0:0x0/750x500/data/photo/2021/02/16/602b8988235ec.jpg&quot;);"></div>
                <button class="btn btn-danger mr-1 Edit-button">Ubah</button>
                <button class="btn btn-primary mr-1" type="submit">Selesai</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush