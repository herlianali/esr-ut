<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\List_;

class Greencard extends Model
{
    use HasFactory;
    
    const LIST_PERUSAHAAN = ['BP', 'HMU', 'KAMAJU', 'HARYONO', 'NAJ', 'NIKMAT', 'TPP', 'TRAC', 'UT', 'UTR', 'OTHER'];
    const LIST_SEKTOR_1 = ['ADM', 'ADVISOR', 'PART ADARO', 'PART TJG', 'PSCE', 'SVC BUMA', 'SVC FMC SCANIA', 'SVC FMC SIS MIA4', 'SVC NFMC SIS MIA4', 'SVC TERITORY', 'TC', 'BP', 'HMU', 'KAMAJU', 'NAJ', 'NIKMAT', 'TPP', 'TAC', 'UT', 'UTR' ];
    const LIST_SEKTOR_2 = ['ADM', 'PART ADARO', 'PART TJG', 'SVC BUSERT', 'SVC SIS KM 35B', 'SVC SIS MIA 4', 'TC', 'BP', 'HMU', 'KAMAJU', 'NAJ', 'NIKMAT', 'TPP', 'TRAC', 'UT', 'UTR', 'Area Customer', 'Other'];
    const LIST_DEVIASI = ['Prosedur', 'APD / Alat Keselamatan', 'Alat & Peralatan Kerja', 'Fasilitas', 'House Keeping', 'Lingkungan', 'kesehatan'];
    
    protected $table = "green_card";
    protected $fillable = [
        'tanggal',
        'jabatan',
        'pengawas',
        'nama_pengawas',
        'non_pengawas',
        'nama_lengkap',
        'nrp',
        'perusahaan',
        'sektor',
        'laporan_bahaya',
        'lokasi_bahaya',
        'detail_lokasi',
        'sektor_bahaya',
        'tindakan',
        'ketegori_deviasi',
        'kategori_temuan',
        'kta_lanjut1',
        'kontribusi',
        'kta_lanjut2',
        'penjelasan',
        'tindakan_perbaikan',
        'usulan_tindakan',
        'foto',
        'is_perbaikan'
    ];
}
