<h1>Cek Data Form {{$title}}</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <td class="text-dark"><b>Tanggal Pelaksanaan Meeting</b></td>
            <td>:</td>
            <td>{{$scml->tanggal}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Nama Pengawas</b></td>
            <td>:</td>
            <td>{{$scml->nama_pengawas}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Lokasi Pelaksanaan Meeting Level 2</b></td>
            <td>:</td>
            <td>{{$scml->lokasi_pelaksanaan}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Dokumentasi Pelaksanaan Meeting Level 2</b></td>
            <td>:</td>
            <td>
                <img src="{{asset('public/storage/'.$scml->file)}}" width="50%" alt="">
            </td>
        </tr>
    </table>
</div>
<div class="row justify-content-between">
    <a class="btn btn-primary mr-1" href="{{ route('questioning.scml.edit',$scml->id) }}">Ubah Data</a>
    <a class="btn btn-secondary" href="{{ route('questioning.scml.index') }}">Selesai</a>
</div>