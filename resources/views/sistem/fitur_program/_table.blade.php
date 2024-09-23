<div class="table-responsive">
    <table class="table table-striped table-md">
        <thead>
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Sub Menu</th>
                <th>Url</th>
                <th>Icon</th>
                <th>Kode</th>
                <th>Kode Induk</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (method_exists($fitur_program, 'links'))
                @php
                    $fitur_program = $fitur_program ?? null;
                    $no = (($fitur_program->currentPage()-1) * $fitur_program->perPage()) + 1
                @endphp
            @else
                @php($no = 1)
            @endif
            @foreach ($fitur_program as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    @if($item->parent_kode == '#')
                        <td>{{ $item->nama }}</td>
                        <td>-</td>
                    @else
                        <td class="text-center"><i class="fas fa-angle-double-right"></i></td>
                        <td>{{ $item->nama }}</td>
                    @endif
                    <td>{{ $item->url }}</td>
                    @if (strpos($item->icon, 'public/img/'))
                        <td><img src="{{ asset($item->icon) }}" width="50%" alt=""></td>
                    @else
                        <td>{!! $item->icon !!}</td>
                    @endif
                    <td>{{ $item->kode }}</td>
                    <td>{{ $item->parent_kode }}</td>
                    <td>
                        <div class="row">
                            <button id="edit" onclick="info_fitur({{ $item->id}})" class="btn btn-sm m-1 btn-success">Edit</button>
                            <a href="" class="btn btn-sm m-1 btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@if(method_exists($fitur_program, 'links'))
    {{ $fitur_program->links('vendor.pagination.custom', ['function' => 'search_fitur']) }}
@endif