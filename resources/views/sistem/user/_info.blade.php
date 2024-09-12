<form id="form_user" enctype="multipart/form-data">
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
            <input type="hidden" name="id_pegawai" value="{{ $user->pegawai->id ?? '' }}">
            <div class="form-group col-md-4">
                <label class="section-title">Nama Lengkap</label>
                @if (!empty($user->pegawai->nama_lengkap))
                    <input type="text" class="form-control" name="nama_lengkap" value="{{ $user->pegawai->nama_lengkap ?? '' }}">
                @else
                    <input type="text" class="form-control" name="nama_lengkap" value="{{ $user->nama ?? '' }}">
                @endif
            </div>
            <div class="form-group col-md-4">
                <label class="section-title">Nama Panggilan</label>
                <input type="text" class="form-control" name="nama_panggilan" value="{{ $user->pegawai->nama_panggilan ?? '' }}">
            </div>
            <div class="form-group col-md-4">
                <label class="section-title">NIK</label>
                <input type="text" class="form-control" name="nik" value="{{ $user->pegawai->nik ?? '' }}">
            </div>
            <div class="form-group col-md-4">
                <label class="section-title">No KTP</label>
                <input type="text" class="form-control" name="no_ktp" value="{{ $user->pegawai->no_ktp ?? '' }}">
            </div>
            <div class="form-group col-md-4">
                <label class="section-title">Jenis Kelamin</label>
                <x-select class="select2" name="jenis_kelamin" :default="'-- Pilih Jenis Kelamin --'" :options="[ 1 => 'Laki - Laki', 2 => 'Perempuan']" :value=" $user->pegawai->jenis_kelamin ?? '' " />
            </div>
            <div class="form-group col-md-4">
                <label class="section-title">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" value="{{ $user->pegawai->tempat_lahir ?? '' }}">
            </div>
            <div class="form-group col-md-4">
                <label class="section-title">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="{{ $user->pegawai->alamat ?? '' }}">
            </div>
            <div class="form-group col-md-4">
                <label class="section-title">Tanggal Lahir</label>
                <input type="text" class="form-control datepicker" id="datepicker" name="tanggal_lahir" value="{{ $user->pegawai->tanggal_lahir ?? '' }}">
            </div>
            <div class="form-group col-md-4">
                <label class="section-title">Pengawas</label>
                <x-select class="select2" name="is_pengawas" :default="'-- Pilih Apakah User Pengawas --'" :options="[1 => 'Ya', 2 => 'Tidak']" :value=" $user->pegawai->is_pengawas ?? '' " />
            </div>
            <div class="form-group col-md-8">
                <label for="" class="section-title">Foto Profile</label>
                <input type="file" class="dropify" id="foto" name="foto" @if(!empty($user->pegawai) && $user->pegawai->foto != '') data-default-file="{{ asset("public/storage/".$user->pegawai->foto) }}" @endif >
            </div>
        </div>
            <h5>Data Lengkap Pengawas</h5>
            <div class="row" id="data_pengawas" style="display: none">
                <input type="hidden" name="user_id" value="{{ $user->id ?? '' }}">
                <div class="form-group col-md-4">
                    <label class="section-title">jabatan</label>
                    <input type="text" class="form-control" name="jabatan" value="{{ $pengawas->jabatan ?? '' }}">
                </div>
                <div class="form-group col-md-4">
                    <label class="section-title">Target Kelompok</label>
                    <x-select class="select2" name="kelompok_target" :default="'-- Pilih Target Kelompok --'" :options="$list_target" :value=" $pengawas->kelompok_target ?? '' " />
                </div>
                <div class="form-group col-md-4">
                    <label class="section-title">Sektor</label>
                    <x-select class="select2" name="sektor_id" :default="'-- Pilih Sektor dan Sub Sektor --'" :options="$list_sektor" :value=" $pengawas->sektor_id ?? '' " />
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
    init_form_element()
    init_form_user({{ $user->id ?? '' }})

    $('#is_pengawas').change(function () {
        var value = $(this).val();
        if(value === '1'){
            $('#data_pengawas').show();
        }else if(value === '2'){
            $('#data_pengawas').hide();
        }else{
            $('#data_pengawas').hide();
        }
    });

    init_form_pengawas({{ $user->pegawai->is_pengawas ?? '' }})
</script>