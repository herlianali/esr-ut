<table class="table table-bordered">
    <thead class="bg-primary">
        <tr>
            <th rowspan="2" class="text-white">No</th>
            <th rowspan="2" class="text-white">Nama</th>
            <th rowspan="2" class="text-white">Kelompok Target</th>
            <th rowspan="2" class="text-white">Sektor</th>
            <th rowspan="2" class="text-center text-white">Jlh Hari</th>
            <th colspan="3" class="text-center text-white">Green Card</th>
            <th colspan="3" class="text-center text-white">Safety Talk</th>
            <th colspan="3" class="text-center text-white">JSA</th>
            <th colspan="3" class="text-center text-white">P5M</th>
            <th colspan="3" class="text-center text-white">FLPG</th>
            <th colspan="3" class="text-center text-white">Housekeeping</th>
            
        </tr>
        <tr>
            <th class="text-white text-center">Plan Awal</th>
            <th class="text-white text-center">Plan Proporsional</th>
            <th class="text-white text-center">Gab</th>
            <th class="text-white text-center">Plan Awal</th>
            <th class="text-white text-center">Plan Proporsional</th>
            <th class="text-white text-center">Gab</th>
            <th class="text-white text-center">Plan Awal</th>
            <th class="text-white text-center">Plan Proporsional</th>
            <th class="text-white text-center">Gab</th>
            <th class="text-white text-center">Plan Awal</th>
            <th class="text-white text-center">Plan Proporsional</th>
            <th class="text-white text-center">Gab</th>
            <th class="text-white text-center">Plan Awal</th>
            <th class="text-white text-center">Plan Proporsional</th>
            <th class="text-white text-center">Gab</th>
            <th class="text-white text-center">Plan Awal</th>
            <th class="text-white text-center">Plan Proporsional</th>
            <th class="text-white text-center">Gab</th>
        </tr>
    </thead>
    <tbody>
        @if (method_exists($plan, 'links'))
            @php
                $plan = $plan ?? null;
                $no = (($plan->currentPage()-1) * $plan->perPage()) + 1;
            @endphp
        @else
            @php($no = 1)
        @endif
        @if($plan->isEmpty())
            <tr>
                <td colspan="8" class="text-center">No data available</td>
            </tr>
        @else
            @foreach ($plan as $value)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $value['nama_pengawas'] }}</td>
                    <td>{{ $value['kelompok_target'] }}</td>
                    <td>{{ $value['sektor'] }}</td>
                    <td>{{ $value['hari_aktif'] }}</td>
                    <td></td>
                    <td class="text-center">{{ $value['gc_plan_prop'] }}</td>
                    <td class="bg-light"></td>
                    <td></td>
                    <td class="text-center">{{ $value['st_plan_prop'] }}</td>
                    <td class="bg-light"></td>
                    <td></td>
                    <td class="text-center">{{ $value['jsa_plan_prop'] }}</td>
                    <td class="bg-light"></td>
                    <td></td>
                    <td class="text-center">{{ $value['p5m_plan_prop'] }}</td>
                    <td class="bg-light"></td>
                    <td></td>
                    <td class="text-center">{{ $value['flpg_plan_prop'] }}</td>
                    <td class="bg-light"></td>
                    <td></td>
                    <td class="text-center">{{ $value['hk_plan_prop'] }}</td>
                    <td class="bg-light"></td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

@if(method_exists($plan, 'links'))
    {{ $plan->links('vendor.pagination.custom', ['function' => 'search_plan']) }}
@endif