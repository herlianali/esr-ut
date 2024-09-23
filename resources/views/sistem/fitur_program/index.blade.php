@extends('layout.app')

@push('css')

@endpush

@section('menu')
  @php($menu = '4')
@endsection

@section('content')
<div class="section-header">
    <h1>Sistem</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Sistem</a></div>
        <div class="breadcrumb-item">{{ $title }}</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3>{{ $title }}</h3>
        <a id="add_data" onclick="info_fitur()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>
        <a id="discard_data" onclick="discard_info_fitur()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-arrow-alt-circle-left"style='font-size:30px; padding-top:5px'></i></a>

    </div>
    <div class="card-body">
        <div class="card" id="fitur_info"></div>
        <div class="card" id="card_fiture">
            <div class="card-header">
                <h4>List {{ $title }}</h4>
                <div class="card-header-form" id="users_search">
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
            <div class="card-body p-0" id="fitur_table"></div>
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
        init_form_element();

        let $search_form = $('#search_form'),
            $fitur_table = $('#fitur_table'),
            $fitur_info = $('#fitur_info'),
            $card_fiture = $('#card_fiture'),
            $discard_data = $('#discard_data'),
            _token = '{{ csrf_token() }}';
        
        $discard_data.hide();
        
        let init_fitur = () => {
            $fitur_info.html('');
            $('#add_data').show();
            $card_fiture.show();
            $discard_data.hide();
            search_fitur();
        }

        let info_fitur = (id = '') => {
            let url = "{{ route($active_route) }}";
            url += (id === '' ? '/create' : ('/' + id + '/edit'));

            $.get(url, (result) => {
                $fitur_info.html(result);
                $card_fiture.hide();
                $discard_data.show();
                $('#add_data').hide();
            }).fail((xhr) => {
                $fitur_table.html(xhr.responseText);
            });
        }

        let discard_info_fitur = () => {
            $fitur_info.html('');
            $discard_data.hide();
            $('#add_data').show();
            $card_fiture.show();
        }

        let init_form_fitur = (id = '') =>{
            let $form_fitur = $('#form_fitur'),
                $button_submit_fitur = $('#button_submit_fitur');
                $form_fitur.submit((e) => {
                    e.preventDefault();

                    let data = getFormData($form_fitur);
                    let url = '{{ route($active_route) }}';
                    if (id !== '') {
                        url += ('/' + id);
                        data._method = 'put';
                    }
                    $.post(url, data, () => {
                        init_fitur();
                    }).fail((xhr) => {
                        error_handle(xhr.responseText);
                        console.log(xhr.responseText);
                    })
                })
        }

        $search_form.submit((e) => {
            e.preventDefault();
            search_fitur();
        });

        let select_page = 1;
        $search_form = $('#search_form')
        search_fitur = (page = 1) => {
            $fitur_table.html('Loading ...');
            if (page.toString() === '+1') select_page++;
            else if (page.toString() === '-1') select_page--;
            else select_page = page;

            let data = getFormData($search_form);
            data.paginate = 10;
            $.post("{{ route('sistem.fitur.search') }}?page=" + select_page, data, (result) => {
                $fitur_table.html(result);
            }).fail((xhr) => {
                $fitur_table.html(xhr.responseText);
            });
        }
        
        search_fitur();

    </script>
@endpush