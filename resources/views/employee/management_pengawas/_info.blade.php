<form id="form_pengawas">
    @csrf
    <h5>Pengawas Akun</h5>
    <div class="row" id="data_pengawas">
        <div class="form-group col-md-6">
            <label class="section-title">Nama Pengawas</label>
            <input type="text" class="form-control" name="nama_pengawas" value="{{ $pengawas->nama_pengawas ?? '' }}">
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-primary mr-1" id="button_submit_pengawas" type="submit">Submit</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
    </div>
</form>

<script>
    init_form_pengawas({{ $pengawas->id ?? '' }})
</script>