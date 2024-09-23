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
        <div class="breadcrumb-item active"><a href="{{ route('sistem.index') }}">Sistem</a></div>
        <div class="breadcrumb-item">Management Users</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Data User</h4>
        <a id="add_data" onclick="info_user()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>
        <a id="discard_data" onclick="discard_info_user()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-arrow-alt-circle-left"style='font-size:30px; padding-top:5px'></i></a>

    </div>
    <div class="card-body">
        <div class="card" id="user_info"></div>
        <div class="card" id="card_user">
            <div class="card-header">
                <h4>List Users</h4>
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
            <div class="card-body p-0" id="user_table"></div>
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

        let $search_form = $('#search_form'),
            $user_table = $('#user_table'),
            $user_info = $('#user_info'),
            $card_user = $('#card_user'),
            $discard_data = $('#discard_data'),
            _token = '{{ csrf_token() }}';
        
        $discard_data.hide();
        
        let init_user = () => {
            $user_info.html('');
            $card_user.show();
            $discard_data.hide();
            $('#add_data').show();
            search_user();
        }

        let info_user = (id = '') => {
            let url = "{{ route($active_route) }}";
            url += (id === '' ? '/create' : ('/' + id + '/edit'));

            $.get(url, (result) => {
                $user_info.html(result);
                $card_user.hide();
                $discard_data.show();
                $('#add_data').hide();
            }).fail((xhr) => {
                $user_table.html(xhr.responseText);
            });
        }

        let discard_info_user = () => {
            $user_info.html('');
            $discard_data.hide();
            $('#add_data').show();
            $card_user.show();
        }

        let init_form_user = (id = '') =>{
            let $form_user = $('#form_user'),
                $button_submit_user = $('#button_submit_user');
                $form_user.submit((e) => {
                    e.preventDefault();
                    let dataForm = new FormData($form_user.get(0));
                    let url = '{{ route($active_route) }}';
                    if (id !== '') {
                        url += ('/' + id);
                        dataForm.append('_method', 'PUT');
                    }
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: dataForm,
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: (response) => {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Data Safety Talk has been saved.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                init_user(  );
                            });
                        },
                        error: (xhr) => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                                footer: xhr.responseText
                            });
                        }
                    });
                });
        }

        $search_form.submit((e) => {
            e.preventDefault();
            search_user();
        });

        let select_page = 1;
        $search_form = $('#search_form')
        search_user = (page = 1) => {
            $user_table.html('Loading ...');
            if (page.toString() === '+1') select_page++;
            else if (page.toString() === '-1') select_page--;
            else select_page = page;

            let data = getFormData($search_form);
            data.paginate = 10;
            $.post("{{ route('sistem.user.search') }}?page=" + select_page, data, (result) => {
                $user_table.html(result);
            }).fail((xhr) => {
                $user_table.html(xhr.responseText);
            });
        }
        
        search_user();

        let init_form_pengawas = ( id = '' ) => {
            if (id == '1') {
                $('#data_pengawas').show();
            } else {
                $('#data_pengawas').hide();
            }
        }


    </script>
@endpush