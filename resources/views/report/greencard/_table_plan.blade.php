<table class="table table-striped table-md">
    <thead>
        <tr class="text-center">
            <th class="text-dark">No</th>
            <th class="text-dark">Nama</th>
            <th class="text-dark">Kelompok Target</th>
            <th class="text-dark">Sektor</th>
            <th class="text-dark">Target</th>
            <th class="text-dark">Target Proporsional</th>
            <th class="text-dark">Actual</th>
            <th class="text-dark">%</th>
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
            @foreach ($greencard as $key => $value)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$value['nama_pengawas']}}</td>
                    <td>{{$value['kelompok_target']}}</td>
                    <td>{{$value['sektor']}}</td>
                    <td class="d-flex justify-content-center"><input type="text" name="{{ $key }}_target" class="form-control border_less" style="width: 70px"></td>
                    <td class="text-center" style="width: 70px">{{ $value['target_proporsional'] ?? '' }}</td>
                    <td class="text-center">{{ $value['actual'] ?? '' }}</td>
                    <td class="text-center">{{ $value['persentase'] ?? '' }} %</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

@if(method_exists($greencard, 'links'))
    {{ $greencard->links('vendor.pagination.custom', ['function' => 'search_greencard']) }}
@endif