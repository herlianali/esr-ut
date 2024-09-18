<div class="table-responsive">
    <table class="table table-striped table-md">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email / Username</th>
                <th>User Level</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (method_exists($hakAksess, 'links'))
                @php
                    $hakAksess = $hakAksess ?? null;
                    $no = (($hakAksess->currentPage()-1) * $hakAksess->perPage()) + 1
                @endphp
            @else
                @php($no = 1)
            @endif
            @foreach ($hakAksess as $item)
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
@if(method_exists($hakAksess, 'links'))
    {{ $hakAksess->links('vendor.pagination.custom', ['function' => 'search_hak_akses']) }}
@endif