@extends('layout.navTop')

@push('css')
<style>
    table, th, tr {
        border: 1px solid grey;
    }

    td {
        border: 1px solid grey;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .select2-container--default .select2-selection--single {
        border: none;
        background: none;
        appearance: none;
        padding: 0 !important;
        font-size: inherit;
        width: auto;
        box-shadow: none;
    }

    .select2-selection__rendered {
        padding: 0 !important;
        font-size: inherit;
        font-weight: 1000;
    }

    .select2-selection__arrow {
        display: none;
    }

    .transparant-input {
        width: 100px;
        border: none;
    }

    @media (min-width: 768px) {
        .title {
            max-width: 17%;
        }
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>{{ $title }}</h4>
        </div>
        <div class="card-body">
            <div class="card" id="plan_target_info"></div>
            <div class="card" id="card_plan_target">
                <div class="card-header">
                    <h4 class="col-md-3 title px-0 col-12">{{ $title }} 13PW Tahun : </h4>
                    <x-select class="select2 col-md-6 px-0 col-12" name="tahun" :default="date('Y')" :options="list_tahun()"/>
                </div>
                <div id="accordion">
                    <div class="accordion">
                        <div class="accordion-header bg-info text-white text-center" role="button" data-toggle="collapse" data-target="#panel-filter">
                            <h4>Fillter</h4>
                        </div>
                        <form id="form_filter">
                            @csrf
                            <div class="form-row container accordion-body collapse" id="panel-filter" data-parent="#accordion">
                                <div class="form-group col-lg-2 col-12">
                                    <label class="section-title">Bulan</label>
                                    <input type="text" class="form-control datepicker" name="mount" value="{{ date('F Y') }}">
                                </div>
                                <div class="form-group col-lg-1 col-12 d-flex align-items-end">
                                    <button class="btn btn-success mb-1">Set Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="plan_target_table"></div>
            </div>
        </div>
    </div>
</div>
@endsection
    
@push('js')
<script>
    init_form_element()
    
    $('#tahun').change(function() {
        console.log($('#tahun').val());
    });

    
    let $search_form = $('#search_form'),
        $plan_target_table = $('#plan_target_table'),
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
        search_plan_target();
    });

    let select_page = 1;
        $search_form = $('#search_form'),
        $form_filter = $('#form_filter')
        search_plan_target = (page = 1) => {
            $plan_target_table.html('Loading ...');
            if (page.toString() === '+1') select_page++;
            else if (page.toString() === '-1') select_page--;
            else select_page = page;

            let data = getFormData($form_filter);
            data.paginate = 10;
            $.post("{{ route('report.plan_target.search') }}?page=" + select_page, data, (result) => {
                $plan_target_table.html(result);
            }).fail((xhr) => {
                $plan_target_table.html(xhr.responseText);
            });
        }
        
    search_plan_target();
</script>
@endpush