<?php

namespace App\Http\Controllers\Questioning;

use App\Http\Controllers\Controller;
use App\Services\Questioning\AuditAPDServices;
use App\Services\Sistem\FiturProgramServices;
use App\Services\Sistem\PengawasServices;
use Illuminate\Http\Request;

class AuditAPDController extends Controller
{
    protected $auditApd;
    public function __construct(
            AuditAPDServices $auditApd, 
            PengawasServices $pengawasServices, 
            FiturProgramServices $fiturProgramServices
        )
    {
        $this->middleware('auth');
        $this->auditApd = $auditApd;
        view()->share([
            'title'             => 'Audit APD',
            'active_route'      => 'questioning.audit_apd.index',
            'fitur'             => $fiturProgramServices->searchFiturProgram(['parent_kode' => '01']),
            'list_pengawas'     => $pengawasServices->listNamaPengawas(),
            'list_perusahaan'   => $auditApd->listPerusahaan(),
            'options_audit'     => $auditApd->optionChecklist(),
        ]);
    }
    
    public function index()
    {
        return view('questioning.audit_apd.add');
    }
    public function create()
    {
        return view('questioning.audit_apd._info');
    }

    public function show($id)
    {
        $audit_apd = $this->auditApd->getOne($id);
        $checklist = json_decode($audit_apd->checklist_audit, true);
        return view('questioning.audit_apd._detail', compact('audit_apd', 'checklist'));
    }

    public function edit($id)
    {
        $audit_apd = $this->auditApd->getOne($id);
        $checklist = json_decode($audit_apd->checklist_audit, true);
        return view('questioning.audit_apd.add', compact('audit_apd', 'checklist'));
    }
    
    public function store(Request $request)
    {
        $request->merge([
            'tanggal' => unformat_date($request->tanggal), 
            'jumlah_karyawan_audit' => (int)$request->jumlah_karyawan_audit,
            'jumlah_karyawan_deviasi' => (int)$request->jumlah_karyawan_deviasi,
            'is_deviasi' => (int)$request->is_deviasi,
            'is_audit' => (int)$request->is_audit,
        ]);
        return $this->auditApd->createAuditApd($request->all());
    }

    public function update(Request $request, $id)
    {
        $request->merge([
            'tanggal' => unformat_date($request->tanggal), 
            'jumlah_karyawan_audit' => (int)$request->jumlah_karyawan_audit,
            'jumlah_karyawan_deviasi' => (int)$request->jumlah_karyawan_deviasi,
            'is_deviasi' => (int)$request->is_deviasi,
            'is_audit' => (int)$request->is_audit,
        ]);
        return $this->auditApd->updateAuditApd($request->all(), $id);
    }
}
