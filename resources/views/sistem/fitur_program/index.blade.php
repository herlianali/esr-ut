@extends('layout.app')

@push('css')
    <link href="{{ asset('stisla/assets/modules/jstree/jstree.bundle.css?v=7.0.9') }}" rel="stylesheet" type="text/css" />
    @php($menu = '4')
@endpush

@section('content')
<div class="section-header">
    <h1>Fitur</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Employee</a></div>
        <div class="breadcrumb-item">Fitur</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Data Fitur</h4>
        <a href="#" onclick="add_data()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>

    </div>
    <div class="card-body">
        <div class="card" id=""></div>
        <div class="card">
            <div class="card-header">
                <h4>List Menu</h4>
                <div class="card-header-form" id="users_search">
                    <form id="search_form">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" prefix="search_" name="nama" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body p-0 table-responsive col-sm-12 col-12">              
              <table class="table bg-main">
                <tr>
                  <td class="bg-light">
                    <div id="fitur_program_table">
                      <div id="tree_view_fitur_program" class="tree-demo mb-5" style="overflow-x: scroll;"></div>
                    </div>
                  </td>
                  <td class="bg-light"></td>
                </tr>
              </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
  <script src="{{ asset('stisla/assets/modules/jstree/jstree.bundle.js?v=7.0.9') }}"></script>
  <script>
    // init_form_element();
    $search_nama = $('#search_nama')

    $fitur_program_table = $('#fitur_program_table');
    divTree = $("#tree_view_fitur_program");
    divTree.jstree({
        core: {
            themes: { responsive: false },
            check_callback: true,
            data: [],
        },
        types: {
            default: {
                icon: "fa fa-folder text-primary"
            },
        },
        plugins: ["types", "search"],
        "search" : { "show_only_matches" : true }
    }).on("refresh.jstree", function () {
        $(this).jstree("open_all");
    }).on("select_node.jstree", function (e, data) {
        on_click_tree_view_fitur_program(data.node.original);
    });
    let to = true;
    $search_nama.keyup(function () {
        if(to) clearTimeout(to);
        to = setTimeout(function () {
            divTree.jstree(true).search($search_nama.val());
        }, 250);
    });
    function search_fitur_program() {
        $.post("{{ route('employee.fitur.search') }}", {
            _token: '{{ csrf_token() }}', ajax: true
        }, function (result) {
            divTree.jstree(true).settings.core.data = result;
            divTree.jstree(true).refresh(true);
        }).fail(function (xhr) {
            console.log(xhr.responseText);
        });
    }

    search_fitur_program();

    $fitur_program_info = $('#fitur_program_info');
    $fitur_program_info.hide();
    add_new = () => {
        let data = {_token: '{{ csrf_token() }}'};
        $.post("{{ route('employee.fitur.create') }}", data, (result) => {
            $fitur_program_info.html(result);
            $fitur_program_info.show();
        }).fail((xhr) => {
            $fitur_program_info.html(xhr.responseText);
            $fitur_program_info.show();
        });
    }

    edit_fitur_program = (id) => {
        let data = {_token: '{{ csrf_token() }}', id};
        $.post("{{ route('employee.fitur.create') }}", data, (result) => {
            $fitur_program_info.html(result);
            $fitur_program_info.show();
        }).fail((xhr) => {
            $fitur_program_info.html(xhr.responseText);
            $fitur_program_info.show();
        });
    }

    clear_form = () => {
        $fitur_program_info.html('');
        $fitur_program_info.hide();
    }

    add_child = (kode) => {
        let data = {_token: '{{ csrf_token() }}', parent_kode: kode};
        $.post("{{ route('employee.fitur.create') }}", data, (result) => {
            $fitur_program_info.html(result);
            $fitur_program_info.show();
        }).fail((xhr) => {
            $fitur_program_info.html(xhr.responseText);
            $fitur_program_info.show();
        });
    }
    on_click_tree_view_fitur_program = (data) => {
        edit_fitur_program(data.id);
    }
  </script>
@endpush