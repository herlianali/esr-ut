<form action="" method="">
    <h5>User Akun</h5>
    <div class="row">
        <div class="form-group col-md-4">
            <label class="section-title">Email</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group col-md-4">
            <label class="section-title">Password</label>
            <input type="text" class="form-control" name="password">
        </div>
        <div class="form-group col-md-4">
            <label class="section-title">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        {{-- @php(dd($user_level)) --}}
        <div class="form-group col-md-4">
            <label class="section-title">Level User</label>
            <x-select class="select2" name="" :options="$user_level" />
        </div>
    </div>
    <h5>Data Lengkap Karyawan / Pegawai</h5>
    <div class="row">
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
            <label class="section-title">No KTP</label>
            <input type="text" class="form-control" name="no_ktp">
        </div>
        <div class="form-group col-md-4">
            <label class="section-title">Tanggal Lahir</label>
            <input type="text" class="form-control datepicker" name="no_ktp">
        </div>
        <div class="form-group col-md-4">
            <label for="" class="section-title">Foto</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-primary mr-1" type="submit">Submit</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
    </div>
</form>