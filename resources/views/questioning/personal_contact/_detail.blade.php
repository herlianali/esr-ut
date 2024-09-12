<h1>Cek Data Form {{$title}}</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <td class="text-dark"><b>Tanggal Laporan Personal Contact</b></td>
            <td>:</td>
            <td>{{$personal_contact->tanggal}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Nama Pengawas Yang Melakukan Personal Contact</b></td>
            <td>:</td>
            <td>{{$personal_contact->nama_pengawas}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Nama Karyawan Yang Dilakukan Personal Contact</b></td>
            <td>:</td>
            <td>{{$personal_contact->nama_karyawan}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Jabatan Karyawan Yang Dilakukan Personal Contact</b></td>
            <td>:</td>
            <td>{{$personal_contact->jabatan}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Perusahaan karyawan yang dilakukan personal contact</b></td>
            <td>:</td>
            <td>{{$personal_contact->perusahaan}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Topik Yang Dibicarakan</b></td>
            <td>:</td>
            <td>
                <span class="badge @if($personal_contact->topik == 1) badge-primary @else badge-success @endif">@if ($personal_contact->topik === 1) Topik Pribadi @else Topik Pekerjaan @endif</span>
            </td>
        </tr>
        <tr>
            <td class="text-dark"><b>Isi Pembahasan Atas Topik Pribadi dan atau Pekerjaan</b></td>
            <td>:</td>
            <td>{{$personal_contact->isi_pembahasan_topik}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Kesimpulan / Nasihat Dari Hasil Pembahasan</b></td>
            <td>:</td>
            <td>{{$personal_contact->kesimpulan}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Pengawas benar telah melakukan personal contact terhadap karyawan di atas.</b></td>
            <td>:</td>
            <td>
                <span class="badge @if($personal_contact->is_personal_contact == 1) badge-success @else badge-danger @endif">@if ($personal_contact->is_personal_contact === 1) YA @else TIDAK @endif</span>
            </td>
        </tr>
        <tr>
            <td class="text-dark"><b>Karyawan yang dilakukan personal contact telah memahami, mengerti dan menyetujui atas kesimpulan yang telah disepakati bersama dengan pengawas !</b></td>
            <td>:</td>
            <td>
                <span class="badge @if($personal_contact->is_persetujuan == 1) badge-success @else badge-danger @endif">@if ($personal_contact->is_persetujuan === 1) YA @else TIDAK @endif</span>
            </td>
        </tr>
    </table>
</div>
<div class="row justify-content-between">
    <a class="btn btn-primary mr-1" href="{{ route('questioning.personal_contact.edit',$personal_contact->id) }}">Ubah Data</a>
    <a class="btn btn-secondary" href="{{ route('questioning.personal_contact.index') }}">Selesai</a>
</div>