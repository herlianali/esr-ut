<?php

namespace App\Services;

use App\Services\Questioning\AuditAPDServices;
use App\Services\Questioning\BbsqNonServiceServices;
use App\Services\Questioning\BbsqServiceServices;
use App\Services\Questioning\FlpgServices;
use App\Services\Questioning\GenbaServices;
use App\Services\Questioning\GreencardServices;
use App\Services\Questioning\HousekeepingServices;
use App\Services\Questioning\InspeksiSaranaServices;
use App\Services\Questioning\InspeksiToolsServices;
use App\Services\Questioning\JSAServices;
use App\Services\Questioning\P5MServices;
use App\Services\Questioning\PersonalContactServices;
use App\Services\Questioning\PlanServices;
use App\Services\Questioning\SafetyTalkServices;
use App\Services\Questioning\SCMLServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class PegawaiServices extends Services 
{
    protected $greencardServices,
              $genbaServices,
              $bbsqServiceServices,
              $bbsqNonServiceServices,
              $personalContactServices,
              $safetyTalkServices,
              $jSAServices,
              $p5MServices,
              $flpgServices,
              $inspeksiSaranaServices,
              $inspeksiToolsServices,
              $auditAPDServices,
              $housekeepingServices,
              $planServices,
              $sCMLServices,
              $pengawasServices;
    public function __construct(
            GreencardServices $greencardServices,
            GenbaServices $genbaServices,
            BbsqServiceServices $bbsqServiceServices,
            BbsqNonServiceServices $bbsqNonServiceServices,
            PersonalContactServices $personalContactServices,
            SafetyTalkServices $safetyTalkServices,
            JSAServices $jSAServices,
            P5MServices $p5MServices,
            FlpgServices $flpgServices,
            InspeksiSaranaServices $inspeksiSaranaServices,
            InspeksiToolsServices $inspeksiToolsServices,
            AuditAPDServices $auditAPDServices,
            HousekeepingServices $housekeepingServices,
            PlanServices $planServices,
            SCMLServices $sCMLServices,
            PengawasServices $pengawasServices,
        )
    {
        $this->greencardServices = $greencardServices;
        $this->genbaServices = $genbaServices;
        $this->bbsqServiceServices = $bbsqServiceServices;
        $this->bbsqNonServiceServices = $bbsqNonServiceServices;
        $this->personalContactServices = $personalContactServices;
        $this->safetyTalkServices = $safetyTalkServices;
        $this->jSAServices = $jSAServices;
        $this->p5MServices = $p5MServices;
        $this->flpgServices = $flpgServices;
        $this->inspeksiSaranaServices = $inspeksiSaranaServices;
        $this->inspeksiToolsServices = $inspeksiToolsServices;
        $this->auditAPDServices = $auditAPDServices;
        $this->housekeepingServices = $housekeepingServices;
        $this->planServices = $planServices;
        $this->sCMLServices = $sCMLServices;
        $this->pengawasServices = $pengawasServices;
    }

    public function getSummaryReport()
    {
        $this->greencardServices->searchGreencard([]);
        // $this->genbaServices->searchGenba([]);
        // $this->bbsqServiceServices->searchBbsqService([]);
        // $this->bbsqNonServiceServices->sea;
        // $this->personalContactServices->se;
        // $this->safetyTalkServices->se;
        // $this->jSAServices->se;
        // $this->p5MServices->se;
        // $this->flpgServices->se;
        // $this->inspeksiSaranaServices->se;
        // $this->inspeksiToolsServices->se;
        // $this->auditAPDServices->se;
        // $this->housekeepingServices->se;
        // $this->planServices->se;
        // $this->sCMLServices->se;
    }

}