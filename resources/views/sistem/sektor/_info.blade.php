<form id="form_sektor">
    @csrf
    <h5>Create {{ $title }}</h5>
    <div class="row" id="data_sektor">
        <div class="form-group col-md-6">
            <label class="section-title">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $sektor->nama ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Sub Sektor</label>
            <input type="text" class="form-control" name="sub_sektor" value="{{ $sektor->sub_sektor ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Coy</label>
            <input type="text" class="form-control" name="coy" value="{{ $sektor->coy ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">BBSQ</label>
            <input type="text" class="form-control" name="bbsq" value="{{ $sektor->bbsq ?? '' }}">
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-success mr-1" id="button_submit_sektor" type="submit">Submit</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
    </div>
</form>

<script>
    init_form_element()
    init_form_sektor({{ $sektor->id ?? '' }})
</script>