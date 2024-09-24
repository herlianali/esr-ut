<div class="table-responsive">
    <table class="table table-striped table-md">
        <thead>
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Title</th>
                <th>Pertanyaan</th>
                <th>Identifier</th>
                <th>Sub Identifier</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (method_exists($questioning_option, 'links'))
                @php
                    $questioning_option = $questioning_option ?? null;
                    $no = (($questioning_option->currentPage()-1) * $questioning_option->perPage()) + 1
                @endphp
            @else
                @php($no = 1)
            @endif
            @if($questioning_option->isEmpty())
                <tr>
                    <td colspan="8" class="text-center">No data available</td>
                </tr>
            @else
                @foreach ($questioning_option as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->menu }}</td>
                        <td class="text-center">{{ $item->title }}</td>
                        <td>{{ $item->pertanyaan }}</td>
                        <td class="text-center">{{ $item->identifier }}</td>
                        <td class="text-center">{{ $item->sub_identifier }}</td>
                        <td>
                            <div class="row">
                                {{-- <a href="{{ route('sistem.questioning_option.show', $item->id) }}" class="btn btn-sm m-1 btn-primary">Detail</a> --}}
                                <button id="edit" onclick="info_questioning_option({{ $item->id}})" class="btn btn-sm m-1 btn-success">Edit</button>
                                <a href="" class="btn btn-sm m-1 btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
            {{-- @php(dd($questioning_option)) --}}
        </tbody>
    </table>
</div>
@if(method_exists($questioning_option, 'links'))
    {{ $questioning_option->links('vendor.pagination.custom', ['function' => 'search_questioning_option']) }}
@endif