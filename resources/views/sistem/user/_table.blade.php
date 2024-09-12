<div class="table-responsive">
    <table class="table table-striped table-md">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email / Username</th>
                <th>User Level</th>
                <th>Is Pengawas</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (method_exists($users, 'links'))
                @php
                    $users = $users ?? null;
                    $no = (($users->currentPage()-1) * $users->perPage()) + 1
                @endphp
            @else
                @php($no = 1)
            @endif
            @foreach ($users as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->user_level->nama }}</td>
                    {{-- @php($is_pengawas = $item->pengawas->user_id ?? '' ) --}}
                    <td>
                        @if ( !empty($item->pengawas->user_id) )
                            <span class="badge badge-pill text-white bg-success">Pengawas</span>
                        @else
                            <span class="badge badge-pill text-white bg-danger">Bukan Pengawas</span>
                        @endif
                    </td>
                    <td>
                        <img src="{{ asset('stisla/assets/img/avatar/avatar-1.png') }}" class="rounded-circle" width="35" data-toggle="tooltip" alt="{{ $item->nama }}">
                    </td>
                    <td>
                        <div class="row">
                            <a href="{{ route('sistem.user.show', $item->id) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                            <button id="edit" onclick="info_user({{ $item->id}})" class="btn btn-sm m-1 btn-success">Edit</button>
                            <a href="" class="btn btn-sm m-1 btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@if(method_exists($users, 'links'))
    {{ $users->links('vendor.pagination.custom', ['function' => 'search_user']) }}
@endif