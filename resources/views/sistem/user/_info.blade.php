<form id="form_user">
    @csrf
    <h5>User Akun</h5>
    <div class="row" id="data_user">
        <div class="form-group col-md-6">
            <label class="section-title">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $user->email ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Password</label>
            <input type="password" class="form-control" name="password" >
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $user->nama ?? '' }}">
        </div>
        <div class="form-group col-md-6">
            <label class="section-title">Level User</label>
            <x-select class="select2" name="user_level_id" :options="$user_level" :value=" $user->user_level_id ?? '' " />
        </div>
    </div>
    @if (!empty($user))    
        <h5>Data Lengkap Karyawan / Pegawai</h5>
        <div class="row" id="data_karyawan">
            <div class="form-group col-md-4">
                <label class="section-title">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_lengkap">
            </div>
            <div class="form-group col-md-4">
                <label class="section-title">Nama Panggilan</label>
                <input type="text" class="form-control" name="nama_panggilan">
            </div>
            <div class="form-group col-md-4">
                <label class="section-title">NIK</label>
                <input type="text" class="form-control" name="nik">
            </div>
            <div class="form-group col-md-4">
                <label class="section-title">No KTP</label>
                <input type="text" class="form-control" name="no_ktp">
            </div>
            <div class="form-group col-md-4">
                <label class="section-title">Jenis Kelamin</label>
                <select class="form-control select2" name="jenis_kelamin">
                    <option value="laki-laki">Laki - Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label class="section-title">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir">
            </div>
            <div class="form-group col-md-4">
                <label class="section-title">Tanggal Lahir</label>
                <input type="text" class="form-control datepicker" name="tanggal_lahir">
            </div>
            <div class="form-group col-md-4">
                <label for="" class="section-title">Foto</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
        </div>
    @endif
    <div class="card-footer text-right">
        <button class="btn btn-primary mr-1" id="button_submit_user" type="submit">Submit</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
    </div>
</form>

<script>
    init_form_user({{ $user->id ?? '' }})
</script>