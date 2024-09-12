<div class="form-group col-md-12">
    <div class="container mt-4">
        <div class="text-center mb-4">
            <h3>{{$list_options['identifier']}}</h3>
            <p>Form no SHE/12/F-{{ $list_options['no_form'] }} - PT SIS</p>
        </div>
    
        <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
    
        <div class="row pl-1">
            <strong><label class="form-label">A. Process</label></strong>
        </div>

        <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">

        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <td class="bg-info text-white" style="width: 1%; white-space: nowrap;">No</td>
                    <th class="bg-info" style="width: 50%; white-space: nowrap;"></th>
                    <th class="text-center text-white bg-success">Dilakukan</th>
                    <th class="text-center text-white bg-danger">Tidak Dilakukan</th>
                </tr>
                @php($no = 1)
                @foreach ($list_options['process'] as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->pertanyaan }}</td>
                        <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                            <label style="display: block; width: 100%;">
                                <label style="display: block; width: 100%;">
                                    <input type="radio" name="process_{{ $item->menu }}_{{ $item->sub_identifier }}" value="1" @if(isset($checklist['process_'.$item->identifier]) && $checklist['process_'.$item->identifier] == 1) checked @endif>
                                </label>
                            </label>
                        </td>
                        <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                            <label style="display: block; width: 100%;">
                                <label style="display: block; width: 100%;">
                                    <input type="radio" name="process_{{ $item->menu }}_{{ $item->sub_identifier }}" value="2" @if(isset($checklist['process_'.$item->identifier]) && $checklist['process_'.$item->identifier] == 2) checked @endif>
                                </label>
                            </label>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
    
        <div class="row pl-1">
            <strong><label class="form-label">B. People Competence</label></strong>
        </div>

        <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <td class="bg-info text-white" style="width: 1%; white-space: nowrap;">No</td>
                    <th class="bg-info" style="width: 50%; white-space: nowrap;"></th>
                    <th class="text-center text-white bg-success">Dilakukan</th>
                    <th class="text-center text-white bg-danger">Tidak Dilakukan</th>
                </tr>
                @php($no = 1)
                @foreach ($list_options['people'] as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->pertanyaan }}</td>
                        <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                            <label style="display: block; width: 100%;">
                                <input type="radio" name="people_{{ $item->menu }}_{{ $item->sub_identifier }}" value="1" @if(isset($checklist['people_'.$item->identifier]) && $checklist['people_'.$item->identifier] == 1) checked @endif>
                            </label>
                        </td>
                        <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                            <label style="display: block; width: 100%;">
                                <input type="radio" name="people_{{ $item->menu }}_{{ $item->sub_identifier }}" value="2" @if(isset($checklist['people_'.$item->identifier]) && $checklist['people_'.$item->identifier] == 2) checked @endif>
                            </label>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">

        <div class="row pl-1">
            <strong><label class="form-label">C. Equipment & Tools</label></strong>
        </div>

        <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td class="bg-info text-white" style="width: 1%; white-space: nowrap;">No</td>
                        <th class="bg-info" style="width: 50%; white-space: nowrap;"></th>
                        <th class="text-center text-white bg-success">Dilakukan</th>
                        <th class="text-center text-white bg-danger">Tidak Dilakukan</th>
                    </tr>
                    @php($no = 1)
                    @foreach ($list_options['equipment'] as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->pertanyaan }}</td>
                            <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                                <label style="display: block; width: 100%;">
                                    <input type="radio" name="equipment_{{ $item->menu }}_{{ $item->sub_identifier }}" value="1" @if(isset($checklist['equipment_'.$item->identifier]) && $checklist['equipment_'.$item->identifier] == 1) checked @endif>
                                </label>
                            </td>
                            <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                                <label style="display: block; width: 100%;">
                                    <input type="radio" name="equipment_{{ $item->menu }}_{{ $item->sub_identifier }}" value="2" @if(isset($checklist['equipment_'.$item->identifier]) && $checklist['equipment_'.$item->identifier] == 2) checked @endif>
                                </label>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

        <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">

        <div class="row pl-1">
            <strong><label class="form-label">D. Supervision & Accountability</label></strong>
        </div>

        <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td class="bg-info text-white" style="width: 1%; white-space: nowrap;">No</td>
                        <th class="bg-info" style="width: 50%; white-space: nowrap;"></th>
                        <th class="text-center text-white bg-success">Dilakukan</th>
                        <th class="text-center text-white bg-danger">Tidak Dilakukan</th>
                    </tr>
                    @php($no = 1)
                    @foreach ($list_options['supervision'] as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->pertanyaan }}</td>
                            <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                                <label style="display: block; width: 100%;">
                                    <input type="radio" name="supervision_{{ $item->menu }}_{{ $item->sub_identifier }}" value="1" @if(isset($checklist['supervision_'.$item->identifier]) && $checklist['supervision_'.$item->identifier] == 1) checked @endif>
                                </label>
                            </td>
                            <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                                <label style="display: block; width: 100%;">
                                    <input type="radio" name="supervision_{{ $item->menu }}_{{ $item->sub_identifier }}" value="2" @if(isset($checklist['supervision_'.$item->identifier]) && $checklist['supervision_'.$item->identifier] == 2) checked @endif>
                                </label>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

        <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">

        <div class="row pl-1">
            <strong><label class="form-label">E. Keadaan Darurat</label></strong>
        </div>

        <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td class="bg-info text-white" style="width: 1%; white-space: nowrap;">No</td>
                        <th class="bg-info" style="width: 50%; white-space: nowrap;"></th>
                        <th class="text-center text-white bg-success">Dilakukan</th>
                        <th class="text-center text-white bg-danger">Tidak Dilakukan</th>
                    </tr>
                    @php($no = 1)
                    @foreach ($list_options['keadaan'] as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->pertanyaan }}</td>
                            <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                                <label style="display: block; width: 100%;">
                                    <input type="radio" name="keadaan_{{ $item->menu }}_{{ $item->sub_identifier }}" value="1" @if(isset($checklist['keadaan_'.$item->identifier]) && $checklist['keadaan_'.$item->identifier] == 1) checked @endif>
                                </label>
                            </td>
                            <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                                <label style="display: block; width: 100%;">
                                    <input type="radio" name="keadaan_{{ $item->menu }}_{{ $item->sub_identifier }}" value="2" @if(isset($checklist['keadaan_'.$item->identifier]) && $checklist['keadaan_'.$item->identifier] == 2) checked @endif>
                                </label>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

        <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">

        <div class="row pl-1">
            <strong><label class="form-label">F. Tindakan Disiplin</label></strong>
        </div>

        <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">

        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <td class="bg-info text-white" style="width: 1%; white-space: nowrap;">No</td>
                    <th class="bg-info" style="width: 50%; white-space: nowrap;"></th>
                    <th class="text-center text-white bg-success">Dilakukan</th>
                    <th class="text-center text-white bg-danger">Tidak Dilakukan</th>
                </tr>
                @php($no = 1)
                @foreach ($list_options['tindakan'] as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->pertanyaan }}</td>
                        <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                            <label style="display: block; width: 100%;">
                                <input type="radio" name="tindakan_{{ $item->menu }}_{{ $item->sub_identifier }}" value="1" @if(isset($checklist['tindakan_'.$item->identifier]) && $checklist['tindakan_'.$item->identifier] == 1) checked @endif>
                            </label>
                        </td>
                        <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                            <label style="display: block; width: 100%;">
                                <input type="radio" name="tindakan_{{ $item->menu }}_{{ $item->sub_identifier }}" value="2" @if(isset($checklist['tindakan_'.$item->identifier]) && $checklist['tindakan_'.$item->identifier] == 2) checked @endif>
                            </label>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="form-group">
            <label class="section-title">Catatan </label>
            <small class="form-text text-muted">Tuliskan deviasi-deviasi yang ditemukan pada item pemeriksaan di atas. Gunakan nomor urut jika ditemukan lebih dari 1 deviasi. Tulis "Tidak Ada Deviasi" jika tidak ditemukan deviasi.</small>
            <input type="text" class="form-control" name="catatan" value="">
        </div>

    </div>
</div>