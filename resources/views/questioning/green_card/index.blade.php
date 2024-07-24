@extends('layout.navTop')

@push('css')
<style>
    .table:not(.table-bordered) {
        
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h1>Greencard Report</h1>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="border: 10px">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Kelompok Jabatan</th>
                                <th>Nama Pengawas</th>
                                <th>Nama Lengkap</th>
                                <th>NRP</th>
                                <th>Perusahaan</th>
                                <th>Dept/Sektor</th>
                                <th>Lokasi Ditemukan Bahaya</th>
                                <th>Detail Lokasi Ditemukanya Bahaya</th>
                                <th>Dept/ Sektor Ditemukannya Bahaya</th>
                                <th>Tindakan atau Kondisi Bahaya Yang Ditemukan</th>
                                <th>Kategori Temuan</th>
                                <th>Apakah KTA (Kondisi tidak aman) yang ditemukan, ada kontribusi dari TTA (Tindakan tidak aman) ?</th>
                                <th>Jelaskan TTA yang berkontribusi terhadap adanya temuan KTA tersebut !</th>
                                <th>Usulan Tindakan Perbaikan Dari TTA/KTA yang ditemukan !</th>
                                <th>Foto Temuan (additional)</th>
                                <th>Apakah usulan tindakan perbaikan atas temuan telah dilakukan perbaikan sendiri ?</th>
                                <th>Email Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>3/1/2022</td>
                                <td>Pengawas/ Target 13 PW</td>
                                <td>MULYANI</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Hauling Road</td>
                                <td>Area waitingline didepan office UT Risa</td>
                                <td>PART ADARO</td>
                                <td>Area waitingline tdk rata dan tergenang air</td>
                                <td>KTA (Kondisi Tidak Aman)</td>
                                <td>Tidak</td>
                                <td></td>
                                <td>Instruksikan segera d perbaiki</td>
                                <td></td>
                                <td>Tidak, karena bukan kompetensi saya/ bukan area kerja saya (dept lain atau cusomer)</td>
                                <td>Lingkungan</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    
@push('js')
@endpush