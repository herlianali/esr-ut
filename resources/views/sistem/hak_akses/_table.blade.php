<div class="table-responsive">
    <table class="table table-striped table-md">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama User Level</th>
                <th>Keterangan</th>
                <th>Role / Akses Menu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (method_exists($hak_akses, 'links'))
                @php
                    $hak_akses = $hak_akses ?? null;
                    $no = (($hak_akses->currentPage()-1) * $hak_akses->perPage()) + 1
                @endphp
            @else
                @php($no = 1)
            @endif
            @foreach ($hak_akses as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama }}</td>
                    <td></td>
                    <td></td>
                    <td>
                        <img src="{{ asset('public/stisla/assets/img/avatar/avatar-1.png') }}" class="rounded-circle" width="35" data-toggle="tooltip" alt="{{ $item->nama }}">
                    </td>
                    <td>
                        <div class="row">
                            <a href="{{ route('employee.hak_akses.show', $item->id) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                            <button id="edit" onclick="info_hak_akses({{ $item->id}})" class="btn btn-sm m-1 btn-success">Edit</button>
                            <a href="" class="btn btn-sm m-1 btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@if(method_exists($hak_akses, 'links'))
    {{ $hak_akses->links('vendor.pagination.custom', ['function' => 'search_hak_akses']) }}
@endif