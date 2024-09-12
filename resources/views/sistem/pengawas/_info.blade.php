<form id="form_pengawas">
    @csrf
    <h5>User Akun</h5>
    <div class="row" id="data_user">
        <div class="row col-md-6">
            <div class="form-group col-md-12" id="user_id_select">
                <label class="section-title">Nama Pegawai</label>
                <x-select class="select2" name="user_id" :default="'-- Pilih Pegawai --'" :options="$list_user" :value=" $pengawas->user_id ?? '' " />
            </div>
            <div class="form-group col-md-12" id="user_id_input">
                <label class="section-title">Nama Pegawai</label>
                <input type="text" class="form-control" name="user_id_input">
            </div>
            <div class="form-group col-md-12" id="other_user_group">
                <label class="custom-switch mt-2">
                    <input type="checkbox" name="custom-switch-checkbox" id="custom_switch" class="custom-switch-input">
                    <span class="custom-switch-indicator"></span>
                    <span class="custom-switch-description">Jika Bukan Pegawai</span>
                </label>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Kelompok Target</label>
            <x-select class="select2" name="kelompok_target" :default="'-- Pilih Kelompok Target --'" :options="$list_kelompok_target" :value=" $pengawas->kelompok_target ?? '' " />
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Sektor</label>
            <x-select class="select2" name="sektor_id" :default="'-- Pilih Sektor dan Sub Sektor --'" :options="$list_sektor" :value=" $pengawas->sektor_id ?? '' " />
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" value="{{ $pengawas->nama ?? '' }}" >
        </div>
    </div>
    
    <div class="card-footer text-right">
        <button class="btn btn-success mr-1" id="button_submit_pengawas" type="submit">Submit</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
    </div>
</form>


<script>
    init_form_element();
    init_form_pengawas({{ $pengawas->id ?? '' }})

    $('#user_id_input').hide();

    $(document).ready(function() {
        setTimeout(function() {
            $('#custom_switch').change(function () {
                if ($(this).is(':checked')) {
                    $('#user_id_select').hide();
                    $('#user_id_select').prop('disabled', true);
                    $('#user_id_input').show();
                    $('#user_id_input').prop('disabled', false);
                } else {
                    $('#user_id_select').show();
                    $('#user_id_select').prop('disabled', false);
                    $('#user_id_input').hide();
                    $('#user_id_input').prop('disabled', true);
                }
            });
        }, 100); // Adjust timeout as necessary
    });
</script>