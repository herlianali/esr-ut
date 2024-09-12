<div class="table-responsive">
    <table class="table table-striped table-md">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelompok Target</th>
                <th>Jabatan</th>
                <th>Sektor</th>
                <th>Sub Sektor</th>
                <th>Perusahaan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (method_exists($pengawas, 'links'))
                @php
                    $pengawas = $pengawas ?? null;
                    $no = (($pengawas->currentPage()-1) * $pengawas->perPage()) + 1
                @endphp
            @else
                @php($no = 1)
            @endif
            @if($pengawas->isEmpty())
                <tr>
                    <td colspan="8" class="text-center">No data available</td>
                </tr>
            @else
                @foreach ($pengawas as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->user->nama }}</td>
                        <td>{{ $item->kelompok_target }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->sektor->nama }}</td>
                        <td>{{ $item->sektor->sub_sektor }}</td>
                        <td>{{ $item->sektor->coy }}</td>
                        <td>
                            <div class="row">
                                <a href="{{ route('sistem.pengawas.show', $item->id) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                                <button id="edit" onclick="info_pengawas({{ $item->id}})" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
            {{-- @php(dd($pengawas)) --}}
        </tbody>
    </table>
</div>
@if(method_exists($pengawas, 'links'))
    {{ $pengawas->links('vendor.pagination.custom', ['function' => 'search_pengawas']) }}
@endif