<?php

namespace Database\Seeders;

use App\Models\FiturProgram;
use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SistemSeeder extends Seeder
{
    public function run()
    {
        UserLevel::insert(array(
            ['nama' => 'Super Admin'],
            ['nama' => 'PJO'],
            ['nama' => 'Officer'],
            ['nama' => 'Head Office'],
            ['nama' => 'Suppervisor'],
            ['nama' => 'Leader'],
            ['nama' => 'Mitra'],
        ));

        User::create([
            'user_level_id' => 1,
            'nama' => 'superadmin',
            'email' => 'admin.esr@ut.com',
            'password' => Hash::make('Admin@1122')
        // ],[
            // 'user_level_id' => 7,
            // 'nama' => 'mitra',
            // 'email' => 'mitra.esr@ut.com',
            // 'password' => Hash::make('Mitra@1122')
        ]);

        FiturProgram::insert(array(
            ['nama' => 'Questioning', 'kode' => '01', 'parent_kode' => '#', 'url' => null],
            ['nama' => 'Green Card', 'kode' => '01.01', 'parent_kode' => '01', 'url' => null],
            ['nama' => 'Genba', 'kode' => '01.02', 'parent_kode' => '01', 'url' => null],
            ['nama' => 'BBSQ Service', 'kode' => '01.03', 'parent_kode' => '01', 'url' => null],
            ['nama' => 'BBSQ Non Service', 'kode' => '01.04', 'parent_kode' => '01', 'url' => null],
            ['nama' => 'Personal Contact', 'kode' => '01.05', 'parent_kode' => '01', 'url' => null],
            ['nama' => 'Safety Talk', 'kode' => '01.06', 'parent_kode' => '01', 'url' => null],
            ['nama' => 'JSA', 'kode' => '01.07', 'parent_kode' => '01', 'url' => null],
            ['nama' => 'P5M', 'kode' => '01.08', 'parent_kode' => '01', 'url' => null],
            ['nama' => 'Inspeksi / Sidak Sarana', 'kode' => '01.09', 'parent_kode' => '01', 'url' => null],
            ['nama' => 'Audit APD', 'kode' => '01.10', 'parent_kode' => '01', 'url' => null],
            ['nama' => 'Inspeksi Tools', 'kode' => '01.11', 'parent_kode' => '01', 'url' => null],
            ['nama' => 'Housekeeping', 'kode' => '01.12', 'parent_kode' => '01', 'url' => null],
            ['nama' => 'SCML', 'kode' => '01.13', 'parent_kode' => '01', 'url' => null],
            ['nama' => 'ESR Corner', 'kode' => '02', 'parent_kode' => '#', 'url' => null],
            ['nama' => 'Sapa ESR', 'kode' => '02.01', 'parent_kode' => '02', 'url' => null],
            ['nama' => 'Monitoring COF', 'kode' => '02.01.01', 'parent_kode' => '02.01', 'url' => null],
            ['nama' => 'Monitoring lapangan', 'kode' => '02.01.02', 'parent_kode' => '02.01', 'url' => null],
            ['nama' => 'Monitoring PERMIT', 'kode' => '02.01.03', 'parent_kode' => '02.01', 'url' => null],
            ['nama' => 'Rekap Link & Email Support', 'kode' => '02.01.04', 'parent_kode' => '02.01', 'url' => null],
            ['nama' => 'Monitoring Program SDA', 'kode' => '02.01.05', 'parent_kode' => '02.01', 'url' => null],
            ['nama' => 'Rekap Dokumen KPLH', 'kode' => '02.02', 'parent_kode' => '02', 'url' => null],
            ['nama' => 'Persyaratan SIM-T', 'kode' => '02.02.01', 'parent_kode' => '02.02', 'url' => null],
            ['nama' => 'Persyaratan Ijin Masuk', 'kode' => '02.02.02', 'parent_kode' => '02.02', 'url' => null],
            ['nama' => 'Adaro', 'kode' => '02.02.02.01', 'parent_kode' => '02.02.02', 'url' => null],
            ['nama' => 'Balangan Coal', 'kode' => '02.02.02.02', 'parent_kode' => '02.02.02', 'url' => null],
            ['nama' => 'Persyaratan Perubahan Permit', 'kode' => '02.02.03', 'parent_kode' => '02.02', 'url' => null],
            ['nama' => 'Dokumen SOP', 'kode' => '02.02.04', 'parent_kode' => '02.02', 'url' => null],
            ['nama' => 'Internal', 'kode' => '02.02.04.01', 'parent_kode' => '02.02.04', 'url' => null],
            ['nama' => 'External', 'kode' => '02.02.04.01', 'parent_kode' => '02.02.04', 'url' => null],
            ['nama' => 'ESR Update', 'kode' => '02.03', 'parent_kode' => '02', 'url' => null],
            ['nama' => 'Materi Safety Talk', 'kode' => '02.03.01', 'parent_kode' => '02.03', 'url' => null],
            ['nama' => 'Materi Campaign KPLH', 'kode' => '02.03.02', 'parent_kode' => '02.03', 'url' => null],
            ['nama' => 'Rekap Buletin ESG', 'kode' => '02.03.03', 'parent_kode' => '02.03', 'url' => null],
            ['nama' => 'Roster Cuti', 'kode' => '02.03.04', 'parent_kode' => '02.03', 'url' => null],
            ['nama' => 'Surat', 'kode' => '02.04', 'parent_kode' => '02', 'url' => null],
            ['nama' => 'Inventaris', 'kode' => '02.05', 'parent_kode' => '02', 'url' => null],
            ['nama' => 'APD', 'kode' => '02.05.01', 'parent_kode' => '02.05', 'url' => null],
            ['nama' => 'Health Corner', 'kode' => '03', 'parent_kode' => '#', 'url' => null],
            ['nama' => 'Report', 'kode' => '04', 'parent_kode' => '#', 'url' => null],
            ['nama' => 'Summary 13 PW', 'kode' => '04.01', 'parent_kode' => '04', 'url' => null],
            ['nama' => 'Follow Up Ganba', 'kode' => '04.02', 'parent_kode' => '04', 'url' => null],
            ['nama' => 'Employee', 'kode' => '05', 'parent_kode' => '#', 'url' => null],
            ['nama' => 'Management User', 'kode' => '05.01', 'parent_kode' => '05', 'url' => null],
            ['nama' => 'Management Menu', 'kode' => '05.02', 'parent_kode' => '05', 'url' => null],
            ['nama' => 'Management Hak Akses', 'kode' => '05.03', 'parent_kode' => '05', 'url' => null],
            ['nama' => 'Management Project', 'kode' => '05.04', 'parent_kode' => '05', 'url' => null],
            ['nama' => 'Azam', 'kode' => '06', 'parent_kode' => '#', 'url' => null],
        ));
    }
}