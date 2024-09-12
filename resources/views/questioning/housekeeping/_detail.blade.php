<h1>Cek Data Form {{$title}}</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <td class="text-dark"><b>Tanggal Pelaksanaan Housekeeping</b></td>
            <td>:</td>
            <td>{{$housekeeping->tanggal}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Nama Pengawas</b></td>
            <td>:</td>
            <td>{{$housekeeping->nama_pengawas}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Lokasi Pelaksanaan Housekeeping </b></td>
            <td>:</td>
            <td>{{$housekeeping->lokasi}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Detail area yang dilakukan housekeeping</b></td>
            <td>:</td>
            <td>{{$housekeeping->detail}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Dokumentasi</b></td>
            <td>:</td>
            <td>
                <img src="{{asset('public/storage/'.$housekeeping->dokumentasi)}}" width="50%" alt="">
            </td>
        </tr>
    </table>
</div>
<div class="row justify-content-between">
    <a class="btn btn-primary mr-1" href="{{ route('questioning.housekeeping.edit',$housekeeping->id) }}">Ubah Data</a>
    <a class="btn btn-secondary" href="{{ route('questioning.housekeeping.index') }}">Selesai</a>
</div>