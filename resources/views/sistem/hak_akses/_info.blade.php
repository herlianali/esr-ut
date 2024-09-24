<form id="form_hak_akses">
    @csrf
    <h5>Create User Level</h5>
    <div class="row" id="data_user">
        <div class="form-group col-md-6">
            <label class="section-title">Nama Level User</label>
            <x-select class="select2" name="user_level_id" :default="'-- Pilih User Level --'" :options="$user_level" :value=" $hak_akses->user_level_id ?? '' " />
            {{-- <input type="text" class="form-control" name="nama" value="{{ $hak_akses->nama ?? '' }}"> --}}
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Akses Menu</label>
            <x-select class="select2" name="user_level_id" :default="'-- Pilih User Level --'" :options="$user_level" :value=" $hak_akses->user_level_id ?? '' " />

            {{-- <input type="text" class="form-control" name="keterangan" value="{{ $hak_akses->keterangan ?? '' }}"> --}}
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-success mr-1" id="button_submit_hak_akses" type="submit">Submit</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
    </div>
</form>


<script>
    init_form_element()
    init_form_hak_akses({{ $hak_akses->id ?? '' }})
</script>