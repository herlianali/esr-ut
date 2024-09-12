<h1>Cek Data Form {{$title}}</h1>
<div class="table-responsive p-0">
    <table class="table table-striped col-lg-12 col-md-12 col-sm-2 col-2">
        <tbody>
            <tr>
                <td class="col-lg-6 col-md-6 col-sm-1 col-1">Tanggal Laporan</td>
                <td class="">: {{ format_date($green_card->tanggal) ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Kelompok Jabatan</td>
                <td class="">: @if($green_card->jabatan === '#section2') Pengawas / Target 13 PW @else Non Pengawas / All Karyawan @endif</td>
            </tr>
            <tr>
                <td class="">Pengawas / Target 13 PW</td>
                <td class="">: {{ $green_card->pengawas ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Nama Pengawas</td>
                <td class="">: {{ $green_card->nama_pengawas ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Non Pengawas / All Karyawan</td>
                <td class="">: {{ $green_card->non_pengawas ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Nama Lengkap</td>
                <td class="">: {{ $green_card->nama_lengkap ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">NRP</td>
                <td class="">: {{ $green_card->nrp ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Perusahaan</td>
                <td class="">: {{ $green_card->perusahaan ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Dept / Sektor</td>
                <td class="">: {{ $green_card->sektor ?? '-'}}</td>
            </tr>
            <tr>
                <td class="">Laporan Bahaya</td>
                <td class="">: {{ $green_card->laporan_bahaya ?? '' }}</td>
            </tr>
            <tr>
                <td class="">Lokasi Ditemukannya Bahaya</td>
                <td class="">: {{ $green_card->lokasi_bahaya ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Detail Lokasi Ditemukannya Bahaya</td>
                <td class="">: {{ $green_card->detail_lokasi ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Dept / Sektor Ditemukannya Bahaya</td>
                <td class="">: {{ $green_card->sektor_bahaya ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Tindakan atau Kondisi Bahaya Yang Ditemukan</td>
                <td class="">: {{ $green_card->tindakan ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Kategori Deviasi</td>
                <td class="">: {{ $green_card->kategori_deviasi ?? '-'}}</td>
            </tr>
            <tr>
                <td class="">Kategori Temuan</td>
                <td class="">: @if($green_card->kategori_temuan === '1') YA @else Tidak @endif</td>
            </tr>
            <tr>
                <td class="">KTA Lanjut 1</td>
                <td class="">: {{ $green_card->kta_lanjut1 ?? '' }}</td>
            </tr>
            <tr>
                <td class="">Apakah KTA (Kondisi tidak aman) yang <br>ditemukan, ada kontribusi dari TTA (Tindakan tidak aman) ?</td>
                <td class="">: @if($green_card->kontribusi === '1') YA @else Tidak @endif</td>
            </tr>
            <tr>
                <td class="">KTA Lanjut 2</td>
                <td class="">: {{ $green_card->kta_lanjut2 ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Jelaskan TTA yang berkontribusi terhadap adanya temuan KTA tersebut ! </td>
                <td class="">: {{ $green_card->penjelasan ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Tindakan Perbaikan</td>
                <td class="">: {{ $green_card->tindakan_perbaikan ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Usulan Tindakan Perbaikan Dari TTA/KTA yang ditemukan !</td>
                <td class="">: {{ $green_card->usulan_tindakan ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Foto Temuan (additional)</td>
                <td class="">: <img src="{{ asset('public/storage').'/'.$green_card->foto }}" width="50%" alt=""></td>
            </tr>
            <tr>
                <td class="">Apakah usulan tindakan perbaikan atas temuan telah dilakukan perbaikan sendiri ?</td>
                <td class="">: @if($green_card->is_perbaikan === '1') YA @else Tidak, karena bukan kompetensi saya/ bukan area kerja saya (dept lain atau cusomer) @endif</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="row justify-content-between">
    <a class="btn btn-warning mr-1" href="{{ route('questioning.green_card.edit',$green_card->id) }}">Ubah Data</a>
    <a class="btn btn-success" href="{{ route('questioning.green_card.index') }}">Selesai</a>
</div>