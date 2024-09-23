<form id="form_user">
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
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-success mr-1" id="button_submit_user" type="submit">Submit</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
    </div>
</form>


<script>    
    init_form_user({{ $user_level->id ?? '' }})
</script>