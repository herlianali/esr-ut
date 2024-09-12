<table class="table table-striped table-md">
    <thead>
        <tr class="text-center">
            <th class="text-dark">No</th>
            <th class="text-dark">tanggal</th>
            <th class="text-dark">Jabatan</th>
            <th class="text-dark">Nama</th>
            <th class="text-dark">Laporan Bahaya</th>
            <th class="text-dark">Lokasi Bahaya</th>
            <th class="text-dark">Sektor Bahaya</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody class="text-dark">
        @if (method_exists($greencard, 'links'))
            @php
                $greencard = $greencard ?? null;
                $no = (($greencard->currentPage()-1) * $greencard->perPage()) + 1
            @endphp
        @else
            @php($no = 1)
        @endif
        @if($greencard->isEmpty())
            <tr>
                <td colspan="8" class="text-center">No data available</td>
            </tr>
        @else
            @foreach ( $greencard as $value )
                <tr>
                    <td>{{ $no++ }}</td>
                    <td class="text-center">{{ format_date($value->tanggal) }}</td>
                    <td>
                        @if( $value->jabatan === 1 )
                            Pengawas / Target 13 PW
                        @else
                            Non Pengawas / All Karyawan 
                        @endif
                    </td>
                    <td>
                        @if( $value->jabatan === 1 )
                            {{ $value->nama_pengawas }}
                        @else
                            {{ $value->nama_lengkap }}
                        @endif
                    </td>
                    <td>{{ $value->laporan_bahaya }}</td>
                    <td>{{ $value->lokasi_bahaya }}</td>
                    <td>{{ $value->sektor_bahaya }}</td>
                    <td class="text-center">
                        <a href="javascript:void(0)" class="btn btn-icon btn-sm btn-primary" onclick="open_greencard_modal({{ $value->id }})"><i class="far fa-comment-alt"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

@if(method_exists($greencard, 'links'))
    {{ $greencard->links('vendor.pagination.custom', ['function' => 'search_greencard']) }}
@endif
