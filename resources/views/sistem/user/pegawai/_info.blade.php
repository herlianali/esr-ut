<form action="form_get_pegawai">
    <h5>Data Lengkap Karyawan / Pegawai</h5>
    <div class="row" id="data_karyawan">
        <div class="form-group col-md-4">
            <label class="section-title">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" value="{{ $user->nama ?? '' }}">
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
                <option value="0">--Pilih Jenis Kelamin--</option>
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
            <input type="text" class="form-control datetimepicker" name="tanggal_lahir">
        </div>
        <div class="form-group col-md-4">
            <label class="section-title">Pengawas</label>
            <select class="form-control select2" name="pengawas">
                <option value="2">--Pilih Keterangan--</option>
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="" class="section-title">Foto</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
    </div>
</form>