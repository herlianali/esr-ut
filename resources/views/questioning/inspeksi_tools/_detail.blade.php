<h1>Cek Data Form {{$title}}</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <td class="text-dark"><b>Tanggal</b></td>
            <td>:</td>
            <td>{{$inspeksi_tools->tanggal}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Nama Pengawas</b></td>
            <td>:</td>
            <td>{{$inspeksi_tools->nama_pengawas}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Posisi Anda </b></td>
            <td>:</td>
            <td>{{$inspeksi_tools->posisi}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Laporan KO</b></td>
            <td>:</td>
            <td>{{$inspeksi_tools->laporan_ko}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Apakah laporan KO bulan sebelumnya sudah dibuat dan dikirim ke PIC KO ?</b></td>
            <td>:</td>
            <td>
                @if ($inspeksi_tools->is_laporan_ko === 1)
                    <span class="badge bg-success text-white">YA</span>
                @else
                    <span class="badge bg-danger text-white">TIDAK</span>
                @endif
            </td>
        </tr>
        <tr>
            <td class="text-dark"><b>Tanggal Pengiriman Laporan KO ke PIC KO</b></td>
            <td>:</td>
            <td>{{$inspeksi_tools->tanggal_laporan}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Inspeksi Tools</b></td>
            <td>:</td>
            <td>{{$inspeksi_tools->inspeksi_tools}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Apakah Inspeksi Tools Telah Dilaksanakan</b></td>
            <td>:</td>
            <td>
                @if ($inspeksi_tools->is_inspeksi_tools === 1)
                    <span class="badge bg-success text-white">YA</span>
                @else
                    <span class="badge bg-danger text-white">TIDAK</span>
                @endif
            </td>
        </tr>
        <tr>
            <td class="text-dark"><b>Tanggal Pelaksanaan Inspeksi Tools Bulan Ini</b></td>
            <td>:</td>
            <td>{{$inspeksi_tools->tanggal_inspeksi}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Jenis Tools Yang Di Inspeksi</b></td>
            <td>:</td>
            <td>{{$inspeksi_tools->jenis_tools}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Deviasi Yang Ditemukan (Jika ada)</b></td>
            <td>:</td>
            <td>{{$inspeksi_tools->deviasi_temuan}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Dokumentasi pelaksanaan inspeksi tools (foto atau scan form chekclist inspeksi tools yang sudah ditandatangani oleh tool keeper dan pengawas ybs)</b></td>
            <td>:</td>
            <td>
                <img src="{{asset('public/storage/'.$inspeksi_tools->file)}}" width="50%" alt="">
            </td>
        </tr>
    </table>
</div>
<div class="row justify-content-between">
    <a class="btn btn-primary mr-1" href="{{ route('questioning.inspeksi_tools.edit',$inspeksi_tools->id) }}">Ubah Data</a>
    <a class="btn btn-secondary" href="{{ route('questioning.inspeksi_tools.index') }}">Selesai</a>
</div>