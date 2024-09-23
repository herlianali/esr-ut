<div class="table-responsive">
    <table class="table table-striped table-md">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama User Level</th>
                <th>Keterangan</th>
                <th>Menu Aktif</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (method_exists($user_level, 'links'))
                @php
                    $user_level = $user_level ?? null;
                    $no = (($user_level->currentPage()-1) * $user_level->perPage()) + 1
                @endphp
            @else
                @php($no = 1)
            @endif
            @foreach ($user_level as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>
                        <p class="muted">
                            {{ $item['keterangan'] }}
                        </p>
                    </td>
                    <td>
                        @if(!empty($item['akses_menu']))
                            @foreach ($item['akses_menu'] as $akses_menu)
                                <span class="badge bg-primary text-white m-1"><b>{{ $akses_menu['nama'] }}</b></span>
                            @endforeach
                        @endif
                    </td>
                    <td>
                        <div class="row">
                            <button id="edit" onclick="info_user_level({{ $item['id'] }})" class="btn btn-sm m-1 btn-success">Edit</button>
                            <a onclick="confirm_delete({{ $item['id'] }})" class="btn btn-sm m-1 text-white btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

  
@if(method_exists($user_level, 'links'))
    {{ $user_level->links('vendor.pagination.custom', ['function' => 'search_user_level']) }}
@endif
