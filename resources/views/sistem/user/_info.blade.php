<form action="" method="">
    <div class="row">
        <h4>User Akun</h4>
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
        <div class="form-group col-md-4">
          <label class="section-title">Level User</label>
          <select class="form-control select2" name="user_level_id">
            {{-- @foreach ($user_level as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach --}}
                <option value="2">PJO</option>
                <option value="3">Officer</option>
                <option value="4">Head Office</option>
                <option value="5">Supervisor</option>
                <option value="6">Leader</option>
                <option value="7">Mitra</option>
          </select>
        </div>
        <div class="form-group col-md-4">
            <label class="section-title">Jenis TTD Surat</label>
            <select class="form-control select2">
                <option value="1">Surat TTD Site Manager/PJO</option>
                <option value="2">Surat TTD Dept Head</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label class="section-title">Perihal</label>
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <label class="section-title">Tujuan</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group col-md-4">
            <label class="section-title">Status</label>
            <select class="form-control select2">
              <option>Complate</option>
              <option>On Process</option>
              <option>Pending</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="" class="section-title">File</label>
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