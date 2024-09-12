<h1>Cek Data Form {{$title}}</h1>
<div class="table-responsive p-0">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td class="col-6">Tanggal Inspeksi / Sidak</td>
                <td>:</td>
                <td class="col-6">{{ format_date($inspeksi_sarana->tanggal) ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Nama Pengawas</td>
                <td>:</td>
                <td class="">{{ $inspeksi_sarana->nama_pengawas ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Lokasi Pelaksanaan Inspeksi / Sidak Sarana</td>
                <td>:</td>
                <td class="">{{ $inspeksi_sarana->lokasi_inspeksi ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Nomor Lambang Unit Yang Dilakukan Inspeksi / Sidak Sarana</td>
                <td>:</td>
                <td class="">{{ $inspeksi_sarana->nomor_lambung ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Checklist Inspeksi Sarana / Kendaraan</td>
                <td>:</td>
                <td class="">{{ $inspeksi_sarana->checklist_inspeksi ?? '-' }}</td>
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
            <tr>
                <td class="">Catatan deviasi dari item KONDISI KENDARAAN</td>
                <td>:</td>
                <td class="">{{ $inspeksi_sarana->catatan_kondisi_kendaraan ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">B. Driver dan Penumpang</td>
                <td>:</td>
                <td class="">
                    <table class="table table-bordered">
                        <tr>
                            <td class="bg-info text-white" style="width: 1%; white-space: nowrap;">No</td>
                            <th class="bg-info text-white">Questioning</th>
                            <th class="text-center text-white bg-info">Normal</th>
                        </tr>
                        @php($no = 1)
                        @foreach ($options_driver as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td style="width: 1%; white-space: nowrap;">{{ $item->pertanyaan }}</td>
                                <td class="text-center">
                                    @if($driver['driver_'.$item->identifier] == 1)
                                        <span class="badge badge-pill text-white bg-success">Normal</span>
                                    @elseif($driver['driver_'.$item->identifier] == 2)
                                        <span class="badge badge-pill text-white bg-danger">Tidak Normal</span>
                                    @elseif($driver['driver_'.$item->identifier] == 3)
                                        <span class="badge badge-pill text-white bg-secondary">N/A</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
            <tr>
                <td class="">Catatan deviasi dari item DRIVER & PENUMPANG</td>
                <td>:</td>
                <td class="">{{ $inspeksi_sarana->catatan_penumpang ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">C. Prosedur & Standar</td>
                <td>:</td>
                <td class="">
                    <table class="table table-bordered">
                        <tr>
                            <td class="bg-info text-white" style="width: 1%; white-space: nowrap;">No</td>
                            <th class="bg-info text-white">Questioning</th>
                            <th class="text-center text-white bg-info">Normal</th>
                        </tr>
                        @php($no = 1)
                        @foreach ($options_prosedur as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td style="width: 1%; white-space: nowrap;">{{ $item->pertanyaan }}</td>
                                <td class="text-center">
                                    @if($prosedur['prosedur_'.$item->identifier] == 1)
                                        <span class="badge badge-pill text-white bg-success">Normal</span>
                                    @elseif($prosedur['prosedur_'.$item->identifier] == 2)
                                        <span class="badge badge-pill text-white bg-danger">Tidak Normal</span>
                                    @elseif($prosedur['prosedur_'.$item->identifier] == 3)
                                        <span class="badge badge-pill text-white bg-secondary">N/A</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
            <tr>
                <td class="">Catatan deviasi dari item PROSEDUR & STANDAR</td>
                <td>:</td>
                <td class="">{{ $inspeksi_sarana->catatan_prosedur ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Pengawas telah memberikan feedback kepada karyawan, dan akan melakukan follow up atas deviasi-deviasi yang ditemukan</td>
                <td>:</td>
                <td class="">{{ $inspeksi_sarana->is_feedback ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">Catatan Khusus(Jika ada)</td>
                <td>:</td>
                <td class="">{{ $inspeksi_sarana->catatan_khusus ?? '-' }}</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="row justify-content-between">
    <a class="btn btn-warning mr-1" href="{{ route('questioning.inspeksi_sarana.edit',$inspeksi_sarana->id) }}">Ubah Data</a>
    <a class="btn btn-success" href="{{ route('questioning.inspeksi_sarana.index') }}">Selesai</a>
</div>

<script>
    
</script>