<form id="form_fitur" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            <label class="section-title">Nama Menu / Sub Menu</label>
            <input type="text" class="form-control" name="nama" value="{{ $fitur_program->nama ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Url</label>
            <input type="text" class="form-control" name="url" value="{{ $fitur_program->url ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">icon</label>
            <input type="text" class="form-control" name="icon" value="{{ $fitur_program->icon ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Kode</label>
            <input type="text" class="form-control" name="kode" value="{{ $fitur_program->kode ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Kode Induk</label>
            <input type="text" class="form-control" name="parent_kode" value="{{ $fitur_program->parent_kode ?? '' }}">
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-primary mr-1" id="button_submit_fitur" type="submit">Submit</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
    </div>
</form>

<script>
    init_form_element()
    init_form_fitur({{ $fitur_program->id ?? '' }})
</script>