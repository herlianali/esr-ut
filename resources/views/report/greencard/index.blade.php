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
            <div class="card" id="greencard_info"></div>
            <div class="card" id="card_greencard">
                <div class="card-header">
                    <h4 class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Questioning Result</h4>

                    <div class="card-header-form" id="greencard_search">
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

                    {{-- dropdown list --}}
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#" onclick="search_greencard()">Questioning Result</a>
                        <a class="dropdown-item" href="#" onclick="search_plan_greencard()">Greencard Plan</a>
                    </div>
                </div>
                {{-- <div class="container-fluid">
                    <div class="row">
                        <button class="btn btn-success btn-sm m-2">Questioning Result <i class="far fa-check-circle"></i></button>
                        <button class="btn btn-primary btn-sm m-2">Plan <i class="far fa-dot-circle"></i></button>
                    </div>
                </div> --}}
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
                                <div class="form-group col-lg-3 col-12">
                                    <label class="section-title">Dept/Sektor</label>
                                    <x-select class="select2" name="sektor" :default="'-- Pilih Dept Karyawan --'" :options="$list_sektor1" />
                                </div>
                                <div class="form-group col-lg-1 col-12 d-flex align-items-end">
                                    <button class="btn btn-success mb-1" type="submit">Set Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive table-bordered" id="greencard_table"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('modals')
    <div class="modal fade bs-example-modal-lg show" tabindex="-1" id="modal_detail">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0">Penolakan Penugasan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form_penolakan">
                        @csrf
                        <input type="hidden" name="penugasan_id" >
                        <input type="hidden" name="is_aktif" value="2">
                        <div class="text-right">
                            <button type="submit" class="btn btn-success">Kirim Penolakan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endpush
    
@push('js')
<script>

    let $search_form = $('#search_form'),
        $greencard_table = $('#greencard_table'),
        $form_filter = $('#form_filter'),
        _token = '{{ csrf_token() }}';

    $('#navigation').hide();
    $('.datepicker').datepicker({
        format: "MM yyyy",
        minViewMode: 1,
        autoclose: true
    });

    $('.dropdown-item').click(function (e) {
      e.preventDefault();
      var selectedText = $(this).text();
      $('#dropdownMenuButton').text(selectedText);
    });

    let open_greencard_modal = (id = '') => {
        $('#modal_pegawai').modal('show');
        console.log("modal")
    }

    $form_filter.submit((e) => {
        e.preventDefault();
        search_greencard();
    });

    let select_page = 1;
    $form_filter = $('#form_filter');
    
    search_greencard = (page = 1) => {
        $greencard_table.html('Loading ...');
        if (page.toString() === '+1') select_page++;
        else if (page.toString() === '-1') select_page--;
        else select_page = page;

        let data = getFormData($form_filter);
        data.paginate = 10;
        $.post("{{ route('report.green_card.search') }}?page=" + select_page, data, (result) => {
            $greencard_table.html(result);
        }).fail((xhr) => {
            $greencard_table.html(xhr.responseText);
        });
    }
        
    search_greencard();

    search_plan_greencard = (page = 1) => {
        $greencard_table.html('Loading ...');
        if (page.toString() === '+1') select_page++;
        else if (page.toString() === '-1') select_page--;
        else select_page = page;

        let data = getFormData($form_filter);
        data.paginate = 10;
        $.post("{{ route('report.green_card.plan') }}?page=" + select_page, data, (result) => {
            $greencard_table.html(result);
        }).fail((xhr) => {
            $greencard_table.html(xhr.responseText);
        });
    }

</script>
@endpush