<h1>Cek Data Form {{$title}}</h1>
<div class="table-responsive">
    <table class="table table-striped table-bordered" style="width: auto; table-layout: auto;">
        <tbody>
            <tr>
                <td >1.</td>
                <td >Tanggal Pengisian BBSQ Non Service</td>
                <td >:</td>
                <td >
                    {{ $bbsq_non_service->tanggal ?? '-' }}
                </td>
            </tr>
            <tr>
                <td >2. </td>
                <td >Nama Pengawas</td>
                <td >:</td>
                <td > {{ $bbsq_non_service->nama_pengawas ?? '-' }}</td>
            </tr>
            <tr>
                <td >3. </td>
                <td >Nama Karyawan Yang Diobservasi</td>
                <td >:</td>
                <td > {{ $bbsq_non_service->nama_karyawan ?? '-' }}</td>
            </tr>
            <tr>
                <td >4. </td>
                <td >Jabatan Karyawan Yang Diobservasi</td>
                <td >:</td>
                <td > {{ $bbsq_non_service->jabatan_karyawan ?? '-' }}</td>
            </tr>
            <tr>
                <td >5. </td>
                <td >Perusahaan Karyawan Yang Diobservasi</td>
                <td >:</td>
                <td > {{ $bbsq_non_service->perusahaan_karyawan ?? '-' }}</td>
            </tr>
            <tr>
                <td >6. </td>
                <td >Jenis Pekerjaan Yang Sedang Dilakukan</td>
                <td >:</td>
                <td > {{ $bbsq_non_service->jenis_pekerjaan ?? '-' }}</td>
            </tr>
            <tr>
                <td >7. </td>
                <td >Lokasi / Area Kerja</td>
                <td >:</td>
                <td > {{ $bbsq_non_service->lokasi ?? '-' }}</td>
            </tr>
            <tr>
                <td >8. </td>
                <td >A. Prosedur</td>
                <td >:</td>
                <td >
                    <table class="table table-bordered">
                        <tr>
                            <td class="bg-info text-white ">No</td>
                            <th class="bg-info text-white ">Checklist</th>
                            <th class="text-center text-white bg-info ">Answer</th>
                        </tr>
                        @php($no = 1)
                        @foreach ($option_prosedur as $item)
                            <tr>
                                <td class="">{{ $no++ }}</td>
                                <td class="">{{ $item->pertanyaan }}</td>
                                <td class="text-center ">
                                    @if($prosedur['prosedur_'.$item->identifier] == 1)
                                        <span class="badge badge-pill text-white bg-success">Ya</span>
                                    @elseif($prosedur['prosedur_'.$item->identifier] == 2)
                                        <span class="badge badge-pill text-white bg-danger">Tidak</span>
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
                <td >9. </td>
                <td >B. Alat Peralatan</td>
                <td >:</td>
                <td >
                    <table class="table table-bordered">
                        <tr>
                            <td class="bg-info text-white ">No</td>
                            <th class="bg-info text-white ">Checklist</th>
                            <th class="text-center text-white bg-info ">Answer</th>
                        </tr>
                        @php($no = 1)
                        @foreach ($option_alat_peralatan as $item)
                            <tr>
                                <td class="">{{ $no++ }}</td>
                                <td class="">{{ $item->pertanyaan }}</td>
                                <td class="text-center ">
                                    @if($peralatan['peralatan_'.$item->identifier] == 1)
                                        <span class="badge badge-pill text-white bg-success">Ya</span>
                                    @elseif($peralatan['peralatan_'.$item->identifier] == 2)
                                        <span class="badge badge-pill text-white bg-danger">Tidak</span>
                                    @elseif($peralatan['peralatan_'.$item->identifier] == 3)
                                        <span class="badge badge-pill text-white bg-secondary">N/A</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
            <tr>
                <td >10. </td>
                <td >C. Lingkungan Kerja</td>
                <td >:</td>
                <td >
                    <table class="table table-bordered">
                        <tr>
                            <td class="bg-info text-white ">No</td>
                            <th class="bg-info text-white ">Checklist</th>
                            <th class="text-center text-white bg-info ">Answer</th>
                        </tr>
                        @php($no = 1)
                        @foreach ($option_lingkungan_kerja as $item)
                            <tr>
                                <td class="">{{ $no++ }}</td>
                                <td class="">{{ $item->pertanyaan }}</td>
                                <td class="text-center ">
                                    @if($lingkungan_kerja['lingkungan_kerja_'.$item->identifier] == 1)
                                        <span class="badge badge-pill text-white bg-success">Ya</span>
                                    @elseif($lingkungan_kerja['lingkungan_kerja_'.$item->identifier] == 2)
                                        <span class="badge badge-pill text-white bg-danger">Tidak</span>
                                    @elseif($lingkungan_kerja['lingkungan_kerja_'.$item->identifier] == 3)
                                        <span class="badge badge-pill text-white bg-secondary">N/A</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
            <tr>
                <td >11. </td>
                <td >D. Karyawan</td>
                <td >:</td>
                <td >
                    <table class="table table-bordered">
                        <tr>
                            <td class="bg-info text-white ">No</td>
                            <th class="bg-info text-white ">Checklist</th>
                            <th class="text-center text-white bg-info ">Answer</th>
                        </tr>
                        @php($no = 1)
                        @foreach ($option_karyawan as $item)
                            <tr>
                                <td class="">{{ $no++ }}</td>
                                <td class="">{{ $item->pertanyaan }}</td>
                                <td class="text-center ">
                                    @if($karyawan['karyawan_'.$item->identifier] == 1)
                                        <span class="badge badge-pill text-white bg-success">Ya</span>
                                    @elseif($karyawan['karyawan_'.$item->identifier] == 2)
                                        <span class="badge badge-pill text-white bg-danger">Tidak</span>
                                    @elseif($karyawan['karyawan_'.$item->identifier] == 3)
                                        <span class="badge badge-pill text-white bg-secondary">N/A</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
            <tr>
                <td >12. </td>
                <td >TINDAKAN Tidak Aman yang ditemukan ?</td>
                <td >:</td>
                <td > {{ $bbsq_non_service->tta_temuan ?? '-' }}</td>
            </tr>
            <tr>
                <td >13. </td>
                <td >Kategori  Deviasi TINDAKAN Tidak Aman</td>
                <td >:</td>
                <td > {{ $bbsq_non_service->kategori_deviasi_tta ?? '-' }}</td>
            </tr>
            <tr>
                <td >14. </td>
                <td >Follow up atas TINDAKAN Tidak Aman</td>
                <td >:</td>
                <td > {{ $bbsq_non_service->folowup_tta ?? '-' }}</td>
            </tr>
            <tr>
                <td >15. </td>
                <td >KONDISI Tidak Aman yang ditemukan</td>
                <td >:</td>
                <td > {{ $bbsq_non_service->kta_temuan ?? '-' }}</td>
            </tr>
            <tr>
                <td >16. </td>
                <td >Kategori  Deviasi KONDISI Tidak Aman</td>
                <td >:</td>
                <td > {{ $bbsq_non_service->kategori_deviasi_kta ?? '-' }}</td>
            </tr>
            <tr>
                <td >17. </td>
                <td >Follow up atas KONDISI Tidak Aman</td>
                <td >:</td>
                <td > {{ $bbsq_non_service->folowup_kta ?? '-' }}</td>
            </tr>
            <tr>
                <td >18. </td>
                <td >Kontrol Tambahan yang dilakukan (jika ada)</td>
                <td >:</td>
                <td > {{ $bbsq_non_service->kontrol_tambahan ?? '-' }}</td>
            </tr>

        </tbody>
    </table>
</div>
<div class="row justify-content-between">
    <a class="btn btn-warning mr-1" href="{{ route('questioning.bbsq_non_service.edit',$bbsq_non_service->id) }}">Ubah Data</a>
    <a class="btn btn-success" href="{{ route('questioning.bbsq_non_service.index') }}">Selesai</a>
</div>

