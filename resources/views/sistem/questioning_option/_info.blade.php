<form id="form_questioning_option">
    @csrf
    <h5>Create {{ $title }}</h5>
    <div class="row" id="data_questioning_option">
        <div class="form-group col-md-6">
            <label class="section-title">Menu</label>
            <input type="text" class="form-control" name="menu" value="{{ $questioning_option->menu ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $questioning_option->title ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Pertanyaan</label>
            <input type="text" class="form-control" name="pertanyaan" value="{{ $questioning_option->pertanyaan ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Identifier</label>
            <input type="text" class="form-control" name="identifier" value="{{ $questioning_option->identifier ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Sub Identifier</label>
            <input type="text" class="form-control" name="sub_identifier" value="{{ $questioning_option->sub_identifier ?? '' }}">
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-success mr-1" id="button_submit_questioning_option" type="submit">Submit</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
    </div>
</form>


<script>
    init_form_element()
    init_form_questioning_option({{ $questioning_option->id ?? '' }})
</script>