<h1>Cek Data Form {{$title}}</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <td class="text-dark"><b>Tanggal</b></td>
            <td>:</td>
            <td>{{$safety_talk->tanggal}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Nama Pengawas Safety Talk</b></td>
            <td>:</td>
            <td>{{$safety_talk->nama_pengawas}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Lokasi Safety Talk</b></td>
            <td>:</td>
            <td>{{$safety_talk->lokasi}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Nama Pemateri Safety Talk</b></td>
            <td>:</td>
            <td>{{$safety_talk->nama_pemateri}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Judul Safety Talk</b></td>
            <td>:</td>
            <td>{{$safety_talk->judul}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Judul Penyelenggara Safety Talk</b></td>
            <td>:</td>
            <td>{{$safety_talk->penyelenggara}}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Dokumentasi Safety Talk</b></td>
            <td>:</td>
            <td>
                <img src="{{asset('public/storage/'.$safety_talk->dokumentasi)}}" width="50%" alt="">
            </td>
        </tr>
    </table>
</div>
<div class="row justify-content-between">
    <a class="btn btn-primary mr-1" href="{{ route('questioning.safety_talk.edit',$safety_talk->id) }}">Ubah Data</a>
    <a class="btn btn-secondary" href="{{ route('questioning.safety_talk.index') }}">Selesai</a>
</div>