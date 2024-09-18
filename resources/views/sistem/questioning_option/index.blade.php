@extends('layout.app')

@push('css')
@endpush

@section('menu')
  @php($menu = '4')
@endsection

@section('content')
<div class="section-header">
    <h1>Questioning</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">Employee</div>
        <div class="breadcrumb-item"><a href="#">Sistem</a></div>
        <div class="breadcrumb-item">Questioning Options</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Data Questioning</h4>
        <a id="add_data" onclick="info_questioning()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>
        <a id="discard_data" onclick="discard_info_questioning()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-arrow-alt-circle-left"style='font-size:30px; padding-top:5px'></i></a>

    </div>
    <div class="card-body">
        <div class="card" id="questioning_info"></div>
        <div class="card" id="card_questioning">
            <div class="card-header">
                <h4>List Questioning</h4>
                <div class="card-header-form" id="questionings_search">
                    <form id="search_form">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" name="nama" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body p-0" id="questioning_table"></div>
        </div>
    </div>
</div>
<form class="modal-part" id="edit_form">
    <div class="form-group">
      <label>Username</label>
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
        // init_form_element();

        let $search_form = $('#search_form'),
            $questioning_table = $('#questioning_table'),
            $questioning_info = $('#questioning_info'),
            $card_questioning = $('#card_questioning'),
            $discard_data = $('#discard_data'),
            _token = '{{ csrf_token() }}';
        
        $discard_data.hide();
        
        let init_questioning = () => {
            $questioning_info.html('');
            $card_questioning.show();
            $discard_data.hide();
            search_questioning();
        }

        let info_questioning = (id = '') => {
            let url = "{{ route($active_route) }}";
            url += (id === '' ? '/create' : ('/' + id + '/edit'));

            $.get(url, (result) => {
                $questioning_info.html(result);
                $card_questioning.hide();
                $discard_data.show();
                $('#add_data').hide();
            }).fail((xhr) => {
                $questioning_table.html(xhr.responseText);
            });
        }

        let discard_info_questioning = () => {
            $questioning_info.html('');
            $discard_data.hide();
            $('#add_data').show();
            $card_questioning.show();
        }

        let init_form_questioning = (id = '') =>{
            let $form_questioning = $('#form_questioning'),
                $button_submit_questioning = $('#button_submit_questioning');
                $form_questioning.submit((e) => {
                    e.preventDefault();

                    let data = getFormData($form_questioning);
                    let url = '{{ route($active_route) }}';
                    if (id !== '') {
                        url += ('/' + id);
                        data._method = 'put';
                    }
                    $.post(url, data, () => {
                        init_questioning();
                    }).fail((xhr) => {
                        error_handle(xhr.responseText);
                        console.log(xhr.responseText);
                    })
                })
        }

        $search_form.submit((e) => {
            e.preventDefault();
            search_questioning();
        });

        let select_page = 1;
        $search_form = $('#search_form')
        search_questioning = (page = 1) => {
            $questioning_table.html('Loading ...');
            if (page.toString() === '+1') select_page++;
            else if (page.toString() === '-1') select_page--;
            else select_page = page;

            let data = getFormData($search_form);
            data.paginate = 10;
            $.post("{{ route('employee.questioning.search') }}?page=" + select_page, data, (result) => {
                $questioning_table.html(result);
            }).fail((xhr) => {
                $questioning_table.html(xhr.responseText);
            });
        }
        
        search_questioning();

    </script>
@endpush