<div class="container mt-4">
    <div class="table-container">
        <!-- Left side (fixed) -->
        <div class="fixed-column">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pengawas</th>
                        <th>Jabatan</th>
                        <th>Sektor</th>
                        <th>Sub Sektor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($summary as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->nama_pengawas }}</td>
                        <td>{{ $value->jabatan }}</td>
                        <td>aaaaaaaaa</td>
                        <td>aaaaaaaaa</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Right side (scrollable) -->
        <div class="scrollable-column">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kelompok Target</th>
                        <th>Perusahaan</th>
                        <th>Green Card</th>
                        <th>Genba</th>
                        <th>BBSQ</th>
                        <th>Personal Contact</th>
                        <th>Safety Talk</th>
                        <th>JSA</th>
                        <th>P5M</th>
                        <th>FLPG</th>
                        <th>Sidak Sarana</th>
                        <th>Sidak APD</th>
                        <th>Report KO</th>
                        <th>Housekeeping</th>
                        <th>SCML</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($summary as $key => $value)
                    <tr>
                        <td>{{ $value->kelompok_target }}</td>
                        <td>{{ $value->perusahaan }}</td>
                        <td>{{ $value->green_card }}</td>
                        <td>{{ $value->genba }}</td>
                        <td>{{ $value->bbsq }}</td>
                        <td>{{ $value->personal_contact }}</td>
                        <td>{{ $value->safety_talk }}</td>
                        <td>{{ $value->jsa }}</td>
                        <td>{{ $value->p5m }}</td>
                        <td>{{ $value->flpg }}</td>
                        <td>{{ $value->sidak_sarana }}</td>
                        <td>{{ $value->sidak_apd }}</td>
                        <td>{{ $value->report_ko }}</td>
                        <td>{{ $value->housekeeping }}</td>
                        <td>{{ $value->scml }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@if(method_exists($summary, 'links'))
    {{ $summary->links('vendor.pagination.custom', ['function' => 'search_summary']) }}
@endif