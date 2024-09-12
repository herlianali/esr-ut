@extends('layout.navTop')

@push('css')
@endpush

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>{{ $title }}</h4>
        </div>
        <div class="card-body">
            <div class="card" id="cuti_info"></div>
            <div class="card" id="card_cuti">
                <div class="card-header">
                    <h4>{{ $title }}</h4>
                    <div class="card-header-form" id="cuti_search">
                        <form id="search_form">
                            @csrf
                            <div class="row">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="params" placeholder="search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="accordion">
                    <div class="accordion">
                        <div class="accordion-header bg-info text-white" role="button" data-toggle="collapse" data-target="#panel-filter">
                            <h4>Fillter</h4>
                        </div>
                        <form id="form_filter">
                            @csrf
                            <div class="form-row container accordion-body collapse" id="panel-filter" data-parent="#accordion">
                                <div class="form-group col-lg-2 col-12">
                                    <label class="section-title">Bulan</label>
                                    <input type="text" class="form-control datepicker" name="mount" value="{{ date('F Y') }}">
                                </div>
                                <div class="form-group col-lg-3 col-12">
                                    <label class="section-title">Nama Pengawas</label>
                                    <x-select class="select2" name="nama_pengawas" :default="'-- Pilih Pengawas --'" :options="$list_pengawas" />
                                </div>
                                <div class="form-group col-lg-1 col-12 d-flex align-items-end">
                                    <button class="btn btn-success mb-1">Set Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive" id="cuti_table"></div>
            </div>
        </div>
    </div>
</div>
@endsection
    
@push('js')
<script>
    let $search_form = $('#search_form'),
        $cuti_table = $('#cuti_table'),
        $form_filter = $('#form_filter'),
        _token = '{{ csrf_token() }}';

    $('#navigation').hide();
    $('.datepicker').datepicker({
        format: "MM yyyy",
        minViewMode: 1,
        autoclose: true
    });

    $form_filter.submit((e) => {
        e.preventDefault();
        search_cuti();
    });

    let select_page = 1;
        $search_form = $('#search_form'),
        $form_filter = $('#form_filter')
        search_cuti = (page = 1) => {
            $cuti_table.html('Loading ...');
            if (page.toString() === '+1') select_page++;
            else if (page.toString() === '-1') select_page--;
            else select_page = page;

            let data = getFormData($form_filter);
            data.paginate = 10;
            $.post("{{ route('report.cuti.search') }}?page=" + select_page, data, (result) => {
                $cuti_table.html(result);
            }).fail((xhr) => {
                $cuti_table.html(xhr.responseText);
            });
        }
        
    search_cuti();
</script>
@endpush