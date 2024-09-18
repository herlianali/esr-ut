@extends('layout.app')

@push('css')

@endpush

@section('menu')
  @php($menu = '4')
@endsection

@section('content')
<div class="section-header">
    <h1>Pengawas</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Employee</a></div>
        <div class="breadcrumb-item">Pengawas</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Data Pengawas</h4>
        <a id="add_data" onclick="info_pengawas()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>
        <a id="discard_data" onclick="discard_info_pengawas()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-arrow-alt-circle-left"style='font-size:30px; padding-top:5px'></i></a>

    </div>
    <div class="card-body">
        <div class="card" id="pengawas_info"></div>
        <div class="card" id="card_pengawas">
            <div class="card-header">
                <h4>List Pengawas</h4>
                <div class="card-header-form" id="pengawas_search">
                    <form id="search_form">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" name="kelompok_target" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body p-0" id="pengawas_table"></div>
        </div>
    </div>
</div>
<form class="modal-part" id="edit_form">
    <div class="form-group">
      <label>pengawas name</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-envelope"></i>
          </div>
        </div>
        <input type="text" class="form-control" placeholder="Email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label>Password</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-lock"></i>
          </div>
        </div>
        <input type="password" class="form-control" placeholder="Password" name="password">
      </div>
    </div>
    <div class="form-group mb-0">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
        <label class="custom-control-label" for="remember-me">Remember Me</label>
      </div>
    </div>
</form>
@endsection

@push('js')
    <script>
        init_form_element();

        let $search_form = $('#search_form'),
            $pengawas_table = $('#pengawas_table'),
            $pengawas_info = $('#pengawas_info'),
            $card_pengawas = $('#card_pengawas'),
            $discard_data = $('#discard_data'),
            _token = '{{ csrf_token() }}';
        
        $discard_data.hide();
        
        let init_pengawas = () => {
            $pengawas_info.html('');
            $card_pengawas.show();
            $discard_data.hide();
            search_pengawas();
        }

        let info_pengawas = (id = '') => {
            let url = "{{ route($active_route) }}";
            url += (id === '' ? '/create' : ('/' + id + '/edit'));

            $.get(url, (result) => {
                $pengawas_info.html(result);
                $card_pengawas.hide();
                $discard_data.show();
                $('#add_data').hide();
            }).fail((xhr) => {
                $pengawas_table.html(xhr.responseText);
            });
        }

        let discard_info_pengawas = () => {
            $pengawas_info.html('');
            $discard_data.hide();
            $('#add_data').show();
            $card_pengawas.show();
        }

        let init_form_pengawas = (id = '') =>{
            let $form_pengawas = $('#form_pengawas'),
                $button_submit_pengawas = $('#button_submit_pengawas');
                $form_pengawas.submit((e) => {
                    e.preventDefault();

                    let data = getFormData($form_pengawas);
                    let url = '{{ route($active_route) }}';
                    if (id !== '') {
                        url += ('/' + id);
                        data._method = 'put';
                    }
                    $.post(url, data, () => {
                        init_pengawas();
                    }).fail((xhr) => {
                        error_handle(xhr.responseText);
                        console.log(xhr.responseText);
                    })
                })
        }

        $search_form.submit((e) => {
            e.preventDefault();
            search_pengawas();
        });

        let select_page = 1;
            $search_form = $('#search_form')
            search_pengawas = (page = 1) => {
                $pengawas_table.html('Loading ...');
                if (page.toString() === '+1') select_page++;
                else if (page.toString() === '-1') select_page--;
                else select_page = page;

                let data = getFormData($search_form);
                data.paginate = 10;
                $.post("{{ route('sistem.pengawas.search') }}?page=" + select_page, data, (result) => {
                    $pengawas_table.html(result);
                }).fail((xhr) => {
                    $pengawas_table.html(xhr.responseText);
                });
            }   
        
        search_pengawas();

    </script>
@endpush