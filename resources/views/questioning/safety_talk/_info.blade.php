<form id="form_safety_talk" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-md-6 col-sm-12">
            <label class="section-title">Tanggal Pelaksanaan Safety Talk</label>
            <input type="text" class="form-control datepicker" name="tanggal" value="{{ $safety_talk->tanggal ?? '' }}">
        </div>
        <div class="form-group col-md-6 col-sm-12">
            <label class="section-title">Nama Pengawas</label>
            <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Nama Pengawas --'" :options=" $list_pengawas " :value=" $safety_talk->nama_pengawas ?? '' "/>
        </div>
        <div class="form-group col-md-6 col-sm-12">
            <label class="section-title">Lokasi Pelaksanaan Safety Talk</label>
            <x-select class="select2" name="lokasi" :default="'-- Pilih Lokasi --'" :options=" $list_lokasi " :value=" $safety_talk->lokasi ?? '' "/>
        </div>
        <div class="form-group col-md-6 col-sm-12">
            <label class="section-title">Nama Pemateri Safety Talk</label>
            <input type="text" class="form-control" name="nama_pemateri" value="{{ $safety_talk->nama_pemateri ?? '' }}">
        </div>
        <div class="form-group col-md-6 col-sm-12">
            <label class="section-title">Judul Matei Safety Talk</label>
            <input type="text" class="form-control" name="judul" value="{{ $safety_talk->judul ?? '' }}">
        </div>
        
        <div class="form-group col-md-6 col-sm-12">
            <label class="section-title">Penyelenggara Safety Talk</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="penyelenggara" id="penyenleggara1" value="1" @if($safety_talk->penyelenggara === 1) checked @endif>
                <label class="form-check-label" for="penyenleggara1">
                    Internal UT
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="penyelenggara" id="penyenleggara2" value="2" @if($safety_talk->penyelenggara === 2) checked @endif>
                <label class="form-check-label" for="penyenleggara2">
                    Eksternal Customer
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="penyelenggara" id="penyenleggara3" value="3" @if($safety_talk->penyelenggara === 3) checked @endif>
                <label class="form-check-label" for="penyenleggara3">
                    Mandiri Mitra Kerja
                </label>
            </div>
        </div>
        <div class="form-group col-md-6 col-sm-12">
            <label for="" class="section-title">Dokumentasi (additional)</label>
            <input type="file" class="dropify" id="dokumentasi" name="dokumentasi">
        </div>
    </div>
    <hr>
    <div class="card-footer text-right">
        <button class="btn btn-primary mr-1" type="submit" id="save_button">Save</button>
        <button class="btn btn-secondary " type="reset">Reset</button>
    </div>
</form>

<script>
</script>
