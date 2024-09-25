<div class="form-group col-md-12">
    <div class="container mt-4">
        <div class="text-center mb-4">
            <h3>BBSQ - Preventive Maintenance</h3>
            <p>Form 050/PRUS-MFP-MLK3-006</p>
        </div>
    
        <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">
    
        <div class="row pl-1">
            <strong><label class="form-label">{{ $list_options['title'] }}</label></strong>
        </div>

        <hr style="height:2px;border:none;color:#7c7c7c;background-color:#7c7c7c;">

        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <td class="bg-info text-white" style="width: 1%; white-space: nowrap;">No</td>
                    <th class="bg-info" style="width: 50%; white-space: nowrap;"></th>
                    <th class="text-center text-white bg-success">Ya(Good)</th>
                    <th class="text-center text-white bg-danger">Tidak(Bad)</th>
                    <th class="text-center text-white bg-danger">NA</th>
                </tr>
                @php($no = 1)
                @foreach ($list_options['options'] as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->pertanyaan }}</td>
                        <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                            <label style="display: block; width: 100%;">
                                <label style="display: block; width: 100%;">
                                    <input type="radio" name="observasi_{{ $item->menu }}_{{ $item->identifier }}" value="1" @if(isset($checklist['observasi_'.$item->identifier]) && $checklist['observasi_'.$item->identifier] == 1) checked @endif>
                                </label>
                            </label>
                        </td>
                        <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                            <label style="display: block; width: 100%;">
                                <label style="display: block; width: 100%;">
                                    <input type="radio" name="observasi_{{ $item->menu }}_{{ $item->identifier }}" value="2" @if(isset($checklist['observasi_'.$item->identifier]) && $checklist['observasi_'.$item->identifier] == 2) checked @endif>
                                </label>
                            </label>
                        </td>
                        <td class="text-center" style="vertical-align: middle; cursor: pointer;">
                            <label style="display: block; width: 100%;">
                                <label style="display: block; width: 100%;">
                                    <input type="radio" name="observasi_{{ $item->menu }}_{{ $item->identifier }}" value="3" @if(isset($checklist['observasi_'.$item->identifier]) && $checklist['observasi_'.$item->identifier] == 2) checked @endif>
                                </label>
                            </label>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>