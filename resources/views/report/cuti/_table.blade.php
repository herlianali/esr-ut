<table class="table teble-strip">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Pengawas</th>
            <th class="text-center">Periode Bulan</th>
            <th class="text-center">Jumlah Total Hari</th>
            <th class="text-center">Alasan Cuti</th>
        </tr>
    </thead>
    <tbody>
        @if (method_exists($cuti, 'links'))
            @php
                $cuti = $cuti ?? null;
                $no = (($cuti->currentPage()-1) * $cuti->perPage()) + 1
            @endphp
        @else
            @php($no = 1)
        @endif
        @if($cuti->isEmpty())
            <tr>
                <td colspan="8" class="text-center">No data available</td>
            </tr>
        @else
            @foreach ($cuti as $key => $value)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ date('d F Y h:i:s A' , strtotime($value['created_at'])) }}</td>
                    <td>{{ $value['nama_pengawas'] }}</td>
                    <td class="text-center">{{ DateTime::createFromFormat('!m', $value['bulan'])->format('F'); }}</td>
                    <td class="text-center">{{ $value['total_cuti'] }}</td>
                    <td class="text-center">{{ $value['alasan'] }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

@if(method_exists($cuti, 'links'))
    {{ $cuti->links('vendor.pagination.custom', ['function' => 'search_cuti']) }}
@endif