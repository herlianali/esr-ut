@extends('layout.navTop')

@push('css')
<style>
    .table-container {
        display: flex;
        overflow-x: auto; /* Allows horizontal scrolling for the whole container */
        width: 100%;
    }

    .fixed-column {
        flex: 0 0 auto; /* Fixed width for the left column */
        background-color: #f8f9fa; /* Optional: Background color */
        border-right: 1px solid #dee2e6; /* Border between the fixed and scrollable sections */
        z-index: 1; /* Ensures the fixed column stays on top */
    }

    .scrollable-column {
        overflow-x: auto; /* Enables horizontal scrolling for the right side */
        width: 100%;
    }

    .scrollable-column table {
        min-width: 100%; /* Ensure the table takes full width */
    }

    @media (max-width: 768px) {
        .fixed-column {
            display: none; /* Hide the fixed column on smaller screens */
        }
        .scrollable-column {
            width: 100%; /* Expand the scrollable column to full width on mobile */
        }
    }

    @media (min-width: 768px) and (max-width: 990px) {
        .table-container {
            display: flex;
            overflow-x: auto; /* Allows horizontal scrolling for the whole container */
            width: 100%;
        }

        .fixed-column {
            flex: 0 0 auto; /* Fixed width for the left column */
            background-color: #f8f9fa; /* Optional: Background color */
            border-right: 1px solid #dee2e6; /* Border between the fixed and scrollable sections */
            z-index: 1; /* Ensures the fixed column stays on top */
        }

        .scrollable-column {
            overflow-x: auto; /* Enables horizontal scrolling for the right side */
            width: 100%;
        }

        .scrollable-column table {
            min-width: 100%; /* Ensure the table takes full width */
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
            <div class="card" id="summary_info"></div>
            <div class="card" id="card_summary">
                <div class="card-header">
                    <h4>{{ $title }}</h4>
                    <div class="card-header-form" id="summary_search">
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
                <div class="table-responsive" id="summary_table"></div>
            </div>
        </div>
    </div>
</div>
@endsection
    
@push('js')
<script>
    let $search_form = $('#search_form'),
        $summary_table = $('#summary_table'),
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
        search_summary();
    });

    let select_page = 1;
        $search_form = $('#search_form'),
        $form_filter = $('#form_filter')
        search_summary = (page = 1) => {
            $summary_table.html('Loading ...');
            if (page.toString() === '+1') select_page++;
            else if (page.toString() === '-1') select_page--;
            else select_page = page;

            let data = getFormData($form_filter);
            data.paginate = 10;
            $.post("{{ route('report.summary.search') }}?page=" + select_page, data, (result) => {
                $summary_table.html(result);
            }).fail((xhr) => {
                $summary_table.html(xhr.responseText);
            });
        }
        
    search_summary();
</script>
@endpush