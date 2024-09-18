<div class="table-responsive">
    <table class="table table-md">
        <thead>
            <tr class="text-center">
                <th rowspan="2" class="text-dark" style="vertical-align : middle;text-align:center;">No</th>
                <th rowspan="2" class="text-dark" style="vertical-align : middle;text-align:center;">Item 13PW</th>
                <th colspan="2" class="text-dark">MGT UT</th>
                <th colspan="2" class="text-dark">DH UT</th>
                <th colspan="2" class="text-dark">SPV UT</th>
                <th colspan="2" class="text-dark">Leader UT</th>
                <th colspan="2" class="text-dark">PJO Mitra</th>
                <th colspan="2" class="text-dark">Pengawas Mitra</th>
                <th colspan="2" class="text-dark">PIC ESR Mitra</th>
                <th colspan="2" class="text-dark">Advisor QA</th>
                <th colspan="2" class="text-dark">PSCA</th>
                <th colspan="2" class="text-dark">QA Officer</th>
                <th colspan="2" class="text-dark">AllKaryawan</th>
            </tr>
            <tr class="text-center">
                <th>Current</th>
                <th class="text-info">Target</th>
                <th>Current</th>
                <th class="text-info">Target</th>
                <th>Current</th>
                <th class="text-info">Target</th>
                <th>Current</th>
                <th class="text-info">Target</th>
                <th>Current</th>
                <th class="text-info">Target</th>
                <th>Current</th>
                <th class="text-info">Target</th>
                <th>Current</th>
                <th class="text-info">Target</th>
                <th>Current</th>
                <th class="text-info">Target</th>
                <th>Current</th>
                <th class="text-info">Target</th>
                <th>Current</th>
                <th class="text-info">Target</th>
                <th>Current</th>
                <th class="text-info">Target</th>
            </tr>
        </thead>
        <tbody class="text">
            @php($i = 0)
            @php($no = 1)

            @foreach ( $list_item as $key => $value )
                {{-- @php(var_dump($list_item[$key][])) --}}
            
                @if(!is_array($value))
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $list_item[$i++] }}</td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                    </tr>
                @else
                    <tr>
                        <td rowspan="3" style="vertical-align : middle;text-align:center;">{{ $no++ }}</td>
                        <td colspan="23" class="bg-secondary">{{ $key }}</td>
                    </tr>
                    <tr>
                        <td>{{ $list_item[$key][1] }}</td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                    </tr>
                    <tr>
                        <td>{{ $list_item[$key][2] }}</td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                        <td><input type="text" name="" class="form-control transparant-input" placeholder="--"></td>
                    </tr>
                @endif
            @endforeach
            
        </tbody>
        
    </table>
</div>

@if(method_exists($plan_target, 'links'))
    {{ $plan_target->links('vendor.pagination.custom', ['function' => 'search_plan_target']) }}
@endif

<script>

</script>