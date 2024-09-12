<h1>Cek Data Form {{$title}}</h1>
<div class="table-responsive">
    <table class="table table-striped table-bordered" style="width: auto; table-layout: auto;">
        <tbody>
            <tr>
                <td >1.</td>
                <td >Tanggal Inspeksi / Sidak</td>
                <td >:</td>
                <td >
                    {{ $audit_apd->tanggal ?? '-' }}
                </td>
            </tr>
            <tr>
                <td >2. </td>
                <td >Nama Pengawas</td>
                <td >:</td>
                <td > {{ $audit_apd->nama_pengawas ?? '-' }}</td>
            </tr>
            <tr>
                <td >3. </td>
                <td >MIA Lokasi Pelaksanaan Inspeksi / Sidak APD</td>
                <td >:</td>
                <td > {{ $audit_apd->mialokasi ?? '-' }}</td>
            </tr>
            <tr>
                <td >4. </td>
                <td >Checklist Audit APD</td>
                <td >:</td>
                <td >
                    <table class="table table-bordered">
                        <tr>
                            <td class="bg-info text-white ">No</td>
                            <th class="bg-info text-white ">Checklist</th>
                            <th class="text-center text-white bg-info ">Answer</th>
                        </tr>
                        @php($no = 1)
                        @foreach ($options_audit as $item)
                            <tr>
                                <td class="">{{ $no++ }}</td>
                                <td class="">{{ $item->pertanyaan }}</td>
                                <td class="text-center ">
                                    @if($checklist['checklist_'.$item->identifier] == 1)
                                        <span class="badge badge-pill text-white bg-success">Lengkap</span>
                                    @elseif($checklist['checklist_'.$item->identifier] == 2)
                                        <span class="badge badge-pill text-white bg-danger">Tidak Lengkap</span>
                                    @elseif($checklist['checklist_'.$item->identifier] == 3)
                                        <span class="badge badge-pill text-white bg-secondary">N/A</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
            <tr>
                <td >5. </td>
                <td >Jumlah Karyawan Yang Diaudit (Berapa Orang)</td>
                <td >:</td>
                <td > {{ $audit_apd->jumlah_karyawan_audit ?? '-' }}</td>
            </tr>
            <tr>
                <td >6. </td>
                <td >Apakah ada deviasi dari hasil audit APD?</td>
                <td >:</td>
                <td > {{ $audit_apd->is_deviasi ?? '-' }}</td>
            </tr>
            <tr>
                <td >7. </td>
                <td >Deviasi</td>
                <td >:</td>
                <td > {{ $audit_apd->deviasi ?? '-' }}</td>
            </tr>
            <tr>
                <td >8. </td>
                <td >Jumlah Karyawan Yang Ditemukan Diviasi (Berapa Orang)</td>
                <td >:</td>
                <td > {{ $audit_apd->jumlah_karyawan_deviasi ?? '-' }}</td>
            </tr>
            <tr>
                <td >9. </td>
                <td >Detail Temuan</td>
                <td >:</td>
                <td > {{ $audit_apd->detail_temuan ?? '-' }}</td>
            </tr>
            <tr>
                <td >10. </td>
                <td >Nama Karyawan yang Ditemukan Deviasi</td>
                <td >:</td>
                <td > {{ $audit_apd->nama_karyawan ?? '-' }}</td>
            </tr>
            <tr>
                <td >11. </td>
                <td >Jabatan Karyawan Yang Ditemukan Deviasi</td>
                <td >:</td>
                <td > {{ $audit_apd->jabatan_karyawan ?? '-' }}</td>
            </tr>
            <tr>
                <td >12. </td>
                <td >Perusahaan Karyawan Yang Ditemukan Deviasi</td>
                <td >:</td>
                <td > {{ $audit_apd->perusahaan ?? '-' }}</td>
            </tr>
            <tr>
                <td >13. </td>
                <td >Validasi</td>
                <td >:</td>
                <td > {{ $audit_apd->validasi ?? '-' }}</td>
            </tr>
            <tr>
                <td >14. </td>
                <td >Pengawas telah melakukan audit APD dengan sebenarnya, dan telah memberikan feedback kepada karyawan yang ditemukan deviasi, serta akan melakukan follow up atas deviasi-deviasi yang ditemukan</td>
                <td >:</td>
                <td > {{ $audit_apd->is_audit ?? '-' }}</td>
            </tr>
            <tr>
                <td class="">15. </td>
                <td class="">Catatan Khusus (Jika Ada)</td>
                <td class="">:</td>
                <td class="wrapped-text"> {{ $audit_apd->catatan_khusus ?? '-' }}</td>
            </tr>

        </tbody>
    </table>
</div>
<div class="row justify-content-between">
    <a class="btn btn-warning mr-1" href="{{ route('questioning.audit_apd.edit',$audit_apd->id) }}">Ubah Data</a>
    <a class="btn btn-success" href="{{ route('questioning.audit_apd.index') }}">Selesai</a>
</div>

