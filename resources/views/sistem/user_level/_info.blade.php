<form id="form_user_level">
    @csrf
    <h5>Create User Level</h5>
    <div class="row" id="data_user">
        <div class="form-group col-md-6">
            <label class="section-title">Nama Level User</label>
            <input type="text" class="form-control" name="nama" value="{{ $user_level->nama ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="{{ $user_level->keterangan ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Akses Menu Apa Saja Yang Bisa Diakses</label>
            <div class="table-responsive ">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>Menu Utama</th>
                            <th>Submenu</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fitur_program as $item)
                            @if ($item->parent_kode == '#')
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td class="text-center">
                                        <i class="fas fa-plus-circle" style="font-size: 23px;" role="button" data-toggle="collapse" data-target="#submenu{{ $item->id }}" aria-expanded="false"></i>
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <div class="form-check" style="display: flex; justify-content: center; align-items: center; height: 100%;">
                                            <input class="form-check-input" type="checkbox" name="akses_menu[]" value="{{ $item->id }}" @isset($akses_menu) @if(in_array($item->id, $akses_menu)) checked @endif @endisset>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                            @foreach ($fitur_program as $submenu)
                                @if ($submenu->parent_kode == $item->kode)
                                    <tr class="collapse align-items-center @isset($akses_menu) @if(in_array($submenu->id, $akses_menu)) show @endif @endisset" id="submenu{{ $item->id }}">
                                        <td></td>
                                        <td class="text-center">{{ $submenu->nama }}</td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            <div class="form-check" style="display: flex; justify-content: center; align-items: center; height: 100%;">
                                                <input class="form-check-input" type="checkbox" name="akses_menu[]" value="{{ $submenu->id }}" @isset($akses_menu) @if(in_array($submenu->id, $akses_menu)) checked @endif @endisset>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-success mr-1" id="button_submit_user_level" type="submit">Submit</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
    </div>
</form>


<script>
    $('.select2').select2({
        placeholder: "-- Pilih Menu --",
        allowClear: true,
    });

    init_form_user_level({{ $user_level->id ?? '' }})

    $('.fa-plus-circle').on('click', function() {
        let target = $(this).data('target');
        $(target).collapse('toggle');
        $(this).toggleClass('fa-plus-circle fa-minus-circle');
    });
</script>