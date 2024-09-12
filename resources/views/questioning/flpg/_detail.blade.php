<h1>Cek Data Form {{$title}}</h1>
<div class="table-responsive p-0">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td class="col-6">Tanggal Inspeksi / Sidak</td>
                <td>:</td>
                <td class="col-6">{{ format_date($flpg->tanggal) ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Nama Pengawas</td>
                <td>:</td>
                <td class="">{{ $flpg->nama_pengawas ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Lokasi Pelaksanaan Inspeksi / Sidak Sarana</td>
                <td>:</td>
                <td class="">{{ $flpg->lokasi_inspeksi ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Nomor Lambang Unit Yang Dilakukan Inspeksi / Sidak Sarana</td>
                <td>:</td>
                <td class="">{{ $flpg->nomor_lambung ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Checklist Inspeksi Sarana / Kendaraan</td>
                <td>:</td>
                <td class="">{{ $flpg->checklist_inspeksi ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">A. Kondisi Kendaraan</td>
                <td>:</td>
                <td class="">
                    <table class="table table-bordered">
                        <tr>
                            <td class="bg-info text-white" style="width: 1%; white-space: nowrap;">No</td>
                            <th class="bg-info text-white">Questioning</th>
                            <th class="text-center text-white bg-info">Normal</th>
                        </tr>
                        @php($no = 1)
                        @foreach ($options_kondisi_kendaraan as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td style="width: 1%; white-space: nowrap;">{{ $item->pertanyaan }}</td>
                                <td class="text-center">
                                    @if($kondisi['kondisi_kendaraan_'.$item->identifier] == 1)
                                        <span class="badge badge-pill text-white bg-success">Normal</span>
                                    @elseif($kondisi['kondisi_kendaraan_'.$item->identifier] == 2)
                                        <span class="badge badge-pill text-white bg-danger">Tidak Normal</span>
                                    @elseif($kondisi['kondisi_kendaraan_'.$item->identifier] == 3)
                                        <span class="badge badge-pill text-white bg-secondary">N/A</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>