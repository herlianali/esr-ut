<?php

namespace App\Services;

use App\Models\UserLevel;
use App\Models\UserLog;
use App\Services\Services;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\PengawasServices;
use App\Services\Sistem\SektorServices;
use App\Services\Sistem\UserLevelServices;
use App\Services\Sistem\UserServices;

class DashServices extends Services 
{
    protected $userServices, $userLevelServices, $pengawasServices, $sektorService, $fiturProgramServices;
    public function __construct(
        UserServices $userServices,
        UserLevelServices $userLevelServices,
        PengawasServices $pengawasServices,
        SektorServices $sektorService,
        FiturProgramServices $fiturProgramServices,
    )
    {
        $this->userServices = $userServices;
        $this->userLevelServices = $userLevelServices;
        $this->pengawasServices = $pengawasServices;
        $this->sektorService = $sektorService;
        $this->fiturProgramServices = $fiturProgramServices;

    }

    public function dashSistem()
    {
        $user_level_result = [];
        $user_level = UserLevel::select('id', 'nama')->get();
        $total_user = $this->userServices->searchUser(['count' => 1]);
        foreach ($user_level as $value) {
            $total_user_level = $this->userServices->searchUser(['user_level_id' => $value->id, 'count' => 1]);
            $persentase = $total_user > 0 ? ($total_user_level / $total_user) * 100 : 0;
            $user_level_result[] = [
                'nama'          => $value->nama,
                'total_user'    => $total_user_level,
                'persentase'    => $persentase
            ];
        }

        $data = [
            'total_user' => $total_user,
            'total_pengawas' => $this->pengawasServices->searchPengawas(['count' => 1]),
            'total_sektor' => $this->sektorService->searchSektor(['count' => 1]),
            'total_aktif_user' => UserLog::where('url', 'login')->count(),
            'user_level_result' => $user_level_result,
        ];

        return $data;

    }


}