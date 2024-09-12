<h1>Cek Data Form {{ $title }}</h1>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <td class="text-dark"><b>Nama Pengawas</b></td>
            <td>:</td>
            <td>{{ $cuti->nama_pengawas }}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Periode Bulan</b></td>
            <td>:</td>
            <td>{{ date('F', strtotime($cuti->bulan)) }}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Jumlah total hari anda tidak masuk bekerja (selain off mingguan) ?</b></td>
            <td>:</td>
            <td>{{ $cuti->total_cuti }}</td>
        </tr>
        <tr>
            <td class="text-dark"><b>Alasan tidak masuk bekerja (selain off mingguan)</b></td>
            <td>:</td>
            <td>
                @if ($cuti->alasan === 1)
                    <span class="badge bg-danger text-white">Cuti</span>
                @elseif($cuti->alasan === 2)
                    <span class="badge bg-info text-white">Dinas / Training</span>
                @else
                    <span class="badge bg-success text-white">Izin Khusus (Sakit/izin/dll)</span>
                @endif
            </td>
        </tr>
    </table>
</div>
<div class="row justify-content-between">
    <a class="btn btn-danger mr-1" href="{{ route('questioning.cuti.edit',$cuti->id) }}">Ubah Data</a>
    <a class="btn btn-success" href="{{ route('questioning.cuti.index') }}">Selesai</a>
</div>