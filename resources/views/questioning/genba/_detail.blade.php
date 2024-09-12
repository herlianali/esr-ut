<h1>Cek Data Form {{$title}}</h1>
<div class="table-responsive p-0">
    <table class="table table-striped col-lg-12 col-md-12 col-sm-2 col-2">
        <tbody>
            <tr>
                <td class="pr-0 col-1">1.</td>
                <td class="col-lg-6 col-md-6 col-sm-1 col-1">Tanggal Pelaksanaan Genba</td>
                <td class="">: {{ $genba->tanggal ?? '-' }}</td>
            </tr>
            <tr>
                <td class="pr-0 col-1">2. </td>
                <td class="">Area Genba</td>
                <td class="">: {{ $genba->area ?? '-' }}</td>
            </tr>
            <tr>
                <td class="pr-0 col-1">3. </td>
                <td class="">Lokasi Pelaksanaan</td>
                <td class="">: {{ $genba->lokasi ?? '-' }}</td>
            </tr>
            <tr>
                <td class="pr-0 col-1">4. </td>
                <td class="">Nama Pengawas</td>
                <td class="">: {{ $genba->nama_pengawas ?? '-' }}</td>
            </tr>
            <tr>
                <td class="pr-0 col-1">5. </td>
                <td class="">Deskripsi Temuan / Deviasi TINDAKAN Tidak Aman</td>
                <td class="">: {{ $genba->deskripsi_tindakan ?? '-' }}</td>
            </tr>
            <tr>
                <td class="pr-0 col-1">6. </td>
                <td class="">Kategori Temuan / Deviasi TINDAKAN Tidak Aman</td>
                <td class="">: {{ $genba->kategori_tindakan ?? '-' }}</td>
            </tr>
            <tr>
                <td class="pr-0 col-1">7. </td>
                <td class="">Usulan Tindakan / Rekomendasi Perbaikan atas TINDAKAN Tidak Aman</td>
                <td class="">: {{ $genba->usulan_tindakan ?? '-' }}</td>
            </tr>
            <tr>
                <td class="pr-0 col-1">8. </td>
                <td class="">Foto Temuan TINDAKAN Tidak Aman (jika ada)</td>
                <td class="">: 
                    <img data-bs-toggle="modal" data-bs-target="imageDetai" src="{{ asset('public/storage').'/'.$genba->foto_tindakan ?? '-' }}" class="img-thumbnail" data-image="{{ asset('public/storage').'/'.$genba->foto_tindakan ?? '-' }}" alt="" width="30%">
                </td>
            </tr>
            <tr>
                <td class="pr-0 col-1">9. </td>
                <td class="">Apa Follow Up Yang Sudah Anda Lakukan atas TINDAKAN Tidak Aman ?</td>
                <td class="">: {{ $genba->follow_up_tindakan ?? '-' }}</td>
            </tr>
            <tr>
                <td class="pr-0 col-1">10. </td>
                <td class="">Deskripsi Temuan / Deviasi KONDISI Tidak Aman</td>
                <td class="">: {{ $genba->deskripsi_kondisi ?? '-' }}</td>
            </tr>
            <tr>
                <td class="pr-0 col-1">11. </td>
                <td class="">Kategori Temuan / Deviasi KONDISI Tidak Aman</td>
                <td class="">: {{ $genba->kategori_kondisi ?? '-' }}</td>
            </tr>
            <tr>
                <td class="pr-0 col-1">12. </td>
                <td class="">Usulan Tindakan / Rekomendasi Perbaikan atas KONDISI Tidak Aman</td>
                <td class="">: {{ $genba->usulan_kondisi ?? '-' }}</td>
            </tr>
            <tr>
                <td class="pr-0 col-1">13. </td>
                <td class="">Foto Temuan KONDISI Tidak Aman (jika ada)</td>
                <td class=""> :
                    <img data-bs-toggle="modal" data-bs-target="imageDetai" src="{{ asset('public/storage').'/'.$genba->foto_kondisi }}" class="img-thumbnail" data-image="{{ asset('public/storage').'/'.$genba->foto_kondisi }}" alt="" width="30%"> 
                </td>
            </tr>
            <tr>
                <td class="pr-0 col-1">14. </td>
                <td class="">Apa Follow Up Yang Sudah Anda Lakukan atas KONDISI Tidak Aman ?</td>
                <td class="">: {{ $genba->follow_up_kondisi ?? '-' }}</td>
            </tr>
            <tr>
                <td class="pr-0 col-1">15. </td>
                <td class="">Keikutsertaan Genba Management</td>
                <td class="">: {{ $genba->keikutsertaan ?? '-' }}</td>
            </tr>
            <tr>
                <td class="pr-0 col-1">16. </td>
                <td class="">Penyelenggara Genba</td>
                <td class="">: {{ $genba->penyelenggara ?? '-' }}</td>
            </tr>
            <tr>
                <td class="pr-0 col-1">17. </td>
                <td class="">Dokumentasi Keikutsertaan Genba (additional)</td>
                <td class="">: 
                    <img data-bs-toggle="modal" data-bs-target="imageDetai" src="{{ asset('public/storage').'/'.$genba->dokumentasi }}" class="img-thumbnail" data-image="{{ asset('public/storage').'/'.$genba->dokumentasi }}" alt="" width="30%">
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="row justify-content-between">
    <a class="btn btn-warning mr-1" href="{{ route('questioning.genba.edit',$genba->id) }}">Ubah Data</a>
    <a class="btn btn-success" href="{{ route('questioning.genba.index') }}">Selesai</a>
</div>