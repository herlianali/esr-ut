<div class="table-responsive">
    <table class="table table-striped table-md">
        <thead>
            <tr>
                <th>No</th>
                <th>User level</th>
                <th>Akses Menu</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (method_exists($user_level, 'links'))
                @php
                    $user_level = $user_level ?? null;
                    $no = (($user_level->currentPage()-1) * $user_level->perPage()) + 1
                @endphp
            @else
                @php($no = 1)
            @endif
            @foreach ($user_level as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                        <button id="menu1" class="btn btn-sm btn-warning m-2">Questioning</button><br>
                        <button id="menu2" class="btn btn-sm btn-danger m-2">ESR Corner</button><br>
                        <button id="menu3" class="btn btn-sm btn-success m-2">Health Corner</button><br>
                        <button id="menu4" class="btn btn-sm btn-info m-2">Report</button><br>
                        <button id="menu5" class="btn btn-sm btn-secondary m-2">Settings</button><br>
                        <button id="menu6" class="btn btn-sm btn-primary m-2">Azam</button><br>
                    </td>
                    <td>
                        <p class="muted">
                            Keterangan Tentang Role Ini Adalah ...
                        </p>
                    </td>
                    <td>
                        <div class="row">
                            <button id="edit" onclick="info_hak_akses({{ $item->id}})" class="btn btn-sm m-1 btn-success">Edit</button>
                            <a href="javascript:void(0)" class="btn btn-sm m-1 btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal-part" id="menu_form1">
    <div class="modal-body">
        <label for="">1. Green Card</label><br>
        <label for="">2. Genba</label><br>
        <label for="">3. BBSQ Service</label><br>
        <label for="">4. BBSQ Non Service</label><br>
        <label for="">5. Personal Contact</label><br>
        <label for="">6. Safety Talk</label><br>
        <label for="">7. JSA</label><br>
        <label for="">8. P5M</label><br>
        <label for="">9. Inspeksi / Sidak Sarana</label><br>
        <label for="">10. Audit APD</label><br>
        <label for="">11. Inspeksi Tools</label><br>
        <label for="">12. Housekeeping</label><br>
        <label for="">13. SCML</label><br>
    </div>
</div>
<div class="modal-part" id="menu_form2">
    <div class="modal-body">
        <label for="">1. SAPA ESR</label><br>
        <label for="">'-> Monitoring COF</label><br>
        <label for="">'-> Monitoring Lapangan</label><br>
        <label for="">'-> Monitoring Permit</label><br>
        <label for="">'-> Rekap Link & email support</label><br>
        <label for="">'-> Monitoring Program SDA</label><br>
        <label for="">2. Rekap Dokumen KPLH</label><br>
        <label for="">'-> Persyaratan SIM-T</label><br>
        <label for="">'-> Persyaratan Ijin Masuk Adaro</label><br>
        <label for="">'-> Persyaratan Ijin Masuk Balangan Coal</label><br>
        <label for="">3. ESR Update</label><br>
        <label for="">'-> Materi Safety Talk</label><br>
        <label for="">'-> Materi Campaign KPLH</label><br>
        <label for="">'-> Rekap Buletin ESG</label><br>
        <label for="">4. Surat</label><br>
        <label for="">5. Inventaris</label><br>
    </div>
</div>
<div class="modal-part" id="menu_form3">
    <div class="modal-body">
        <label for="">1. Monitoring MCU</label><br>
    </div>
</div>
<div class="modal-part" id="menu_form4">
    <div class="modal-body">
        <label for="">1. Report All Questioning</label><br>
        <label for="">2. Summary 13 PW </label><br>
        <label for="">3. Follow Up Genba</label><br>
    </div>
</div>
<div class="modal-part" id="menu_form5">
    <div class="modal-body">
        <label for="">1. Manage User</label><br>
        <label for="">2. Manage Hak Akses</label><br>
        <label for="">3. Manage Menu</label><br>
    </div>
</div>
<div class="modal-part" id="menu_form6">
    <div class="modal-body">
        <label for="">1. AZAM Dashboard</label><br>
    </div>
</div>

  
@if(method_exists($user_level, 'links'))
    {{ $user_level->links('vendor.pagination.custom', ['function' => 'search_user_level']) }}
@endif

<script>
    $("#menu1").fireModal({
        title: 'List Menu Access',
        body: $("#menu_form1"),
        footerClass: 'bg-whitesmoke',
        autoFocus: false,
        buttons: [
            {
                text: 'Tutup',
                submit: true,
                class: 'btn btn-danger btn-shadow',
                handler: function(modal) {
                }
            }
        ]
    });
    $("#menu2").fireModal({
        title: 'List Menu Access',
        body: $("#menu_form2"),
        footerClass: 'bg-whitesmoke',
        autoFocus: false,
        buttons: [
            {
                text: 'Tutup',
                submit: true,
                class: 'btn btn-danger btn-shadow',
                handler: function(modal) {
                }
            }
        ]
    });
    $("#menu3").fireModal({
        title: 'List Menu Access',
        body: $("#menu_form3"),
        footerClass: 'bg-whitesmoke',
        autoFocus: false,
        buttons: [
            {
                text: 'Tutup',
                submit: true,
                class: 'btn btn-danger btn-shadow',
                handler: function(modal) {
                }
            }
        ]
    });
    $("#menu4").fireModal({
        title: 'List Menu Access',
        body: $("#menu_form4"),
        footerClass: 'bg-whitesmoke',
        autoFocus: false,
        buttons: [
            {
                text: 'Tutup',
                submit: true,
                class: 'btn btn-danger btn-shadow',
                handler: function(modal) {
                }
            }
        ]
    });
    $("#menu5").fireModal({
        title: 'List Menu Access',
        body: $("#menu_form5"),
        footerClass: 'bg-whitesmoke',
        autoFocus: false,
        buttons: [
            {
                text: 'Tutup',
                submit: true,
                class: 'btn btn-danger btn-shadow',
                handler: function(modal) {
                }
            }
        ]
    });
    $("#menu6").fireModal({
        title: 'List Menu Access',
        body: $("#menu_form6"),
        footerClass: 'bg-whitesmoke',
        autoFocus: false,
        buttons: [
            {
                text: 'Tutup',
                submit: true,
                class: 'btn btn-danger btn-shadow',
                handler: function(modal) {
                }
            }
        ]
    });
</script>