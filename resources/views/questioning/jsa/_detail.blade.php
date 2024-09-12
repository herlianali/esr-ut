<h1>Cek Data Form {{$title}}</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <td class="text-dark"><b>Tanggal Review / Sosialisasi JSA</b></td>
            <td>:</td>
            <td>{{$jsa->tanggal}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Nama Pengawas</b></td>
            <td>:</td>
            <td>{{$jsa->nama_pengawas}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Posisi Anda </b></td>
            <td>:</td>
            <td>{{$jsa->posisi}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Review JSA</b></td>
            <td>:</td>
            <td>{{$jsa->review}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Jenis Review</b></td>
            <td>:</td>
            <td>{{$jsa->jenis_review}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Judul JSA yang dilakukan review</b></td>
            <td>:</td>
            <td>{{$jsa->judul_jsa}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Nomor JSA yang dilakukan review</b></td>
            <td>:</td>
            <td>{{$jsa->nomor_jsa}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Jumlah pekerja yang diberikan sosialisasi JSA</b></td>
            <td>:</td>
            <td>{{$jsa->jumlah_pekerja}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Hasil Review</b></td>
            <td>:</td>
            <td>{{$jsa->hasil_review}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Sosialisasi JSA</b></td>
            <td>:</td>
            <td>{{$jsa->sosialisasi_jsa}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Shift</b></td>
            <td>:</td>
            <td>{{$jsa->shift}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Lokasi pelaksanaan sosialisasi JSA</b></td>
            <td>:</td>
            <td>{{$jsa->lokasi_pelaksanan}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Foto dokumentasi pelaksanaan Sosialisasi JSA (foto / absensi)</b></td>
            <td>:</td>
            <td>
                <img src="{{asset('public/storage/'.$jsa->foto)}}" width="50%" alt="">
            </td>
        </tr>
    </table>
</div>
<div class="row justify-content-between">
    <a class="btn btn-primary mr-1" href="{{ route('questioning.jsa.edit',$jsa->id) }}">Ubah Data</a>
    <a class="btn btn-secondary" href="{{ route('questioning.jsa.index') }}">Selesai</a>
</div>