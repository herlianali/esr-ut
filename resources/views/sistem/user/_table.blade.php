<div class="table-responsive">
    <table class="table table-striped table-fit">
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
            @php($no = 1)
            @foreach ($users as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->user_level->nama }}</td>
                    <td>
                        <img src="{{ asset('stisla/assets/img/avatar/avatar-1.png') }}" class="rounded-circle" width="35" data-toggle="tooltip" alt="{{ $item->nama }}">
                    </td>
                    <td>
                        <div class="row">
                            <a href="{{ route('employee.user.show', $item->id) }}" class="btn btn-sm m-1 btn-primary">Detail</a>
                            <button id="edit" onclick="edit_user({{ $item->id}})" class="btn btn-sm m-1 btn-success">Edit</button>
                            <a href="" class="btn btn-sm m-1 btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>