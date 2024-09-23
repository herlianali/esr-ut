<div class="table-responsive">
    <table class="table table-striped table-md">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Sektor</th>
                <th>Sub Sektor</th>
                <th>COY</th>
                <th>BBSQ</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (method_exists($sektor, 'links'))
                @php
                    $sektor = $sektor ?? null;
                    $no = (($sektor->currentPage()-1) * $sektor->perPage()) + 1
                @endphp
            @else
                @php($no = 1)
            @endif
            @foreach ($sektor as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->sub_sektor }}</td>
                    <td>{{ $item->coy }}</td>
                    <td>{{ $item->bbsq }}</td>
                    <td>
                        <div class="row">
                            <button id="edit" onclick="info_sektor({{ $item->id}})" class="btn btn-sm m-1 btn-success">Edit</button>
                            <a href="" class="btn btn-sm m-1 btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@if(method_exists($sektor, 'links'))
    {{ $sektor->links('vendor.pagination.custom', ['function' => 'search_sektor']) }}
@endif