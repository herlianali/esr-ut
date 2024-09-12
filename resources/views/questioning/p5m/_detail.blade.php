<h1>Cek Data Form {{$title}}</h1>
<div class="table-responsive p-0">
    <table class="table table-striped col-lg-12 col-md-12 col-sm-2 col-2">
        <tbody>
            <tr>
                <td class="">Tanggal Pelaksanaan P5M</td>
                <td class="">: {{ format_date($p5m->tanggal) ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Shift / Giliran Kerja</td>
                <td class="">:
                    @if($p5m->shift === 1)
                        <span class="badge badge-warning">Day / Siang</span>
                    @else
                        <span class="badge badge-secondary">Night / Malam</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="">Nama Pengawas</td>
                <td class="">: {{ $p5m->nama_pengawas ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Dokumentasi</td>
                <td class="">: {{ $p5m->dokumentasi ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Nama Pemateri P5M</td>
                <td class="">: {{ $p5m->nama_pemateri ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Materi KPLH Yang Disampaikan </td>
                <td class="">: {{ $p5m->materi_kplh ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Foto Temuan (additional)</td>
                <td class="">: <img src="{{ asset('public/storage').'/'.$p5m->foto }}" width="50%" alt=""></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="row justify-content-between">
    <a class="btn btn-primary mr-1" href="{{ route('questioning.p5m.edit',$p5m->id) }}">Ubah Data</a>
    <a class="btn btn-secondary" href="{{ route('questioning.p5m.index') }}">Selesai</a>
</div>