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
        <a id="add_data" onclick="info_sektor()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>
        <a id="discard_data" onclick="discard_info_sektor()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-arrow-alt-circle-left"style='font-size:30px; padding-top:5px'></i></a>

    </div>
    <div class="card-body">
        <div class="card" id="sektor_info"></div>
        <div class="card" id="card_sektor">
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
            <div class="card-body p-0" id="sektor_table"></div>
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
            $sektor_table = $('#sektor_table'),
            $sektor_info = $('#sektor_info'),
            $card_sektor = $('#card_sektor'),
            $discard_data = $('#discard_data'),
            _token = '{{ csrf_token() }}';
        
        $discard_data.hide();
        
        let init_sektor = () => {
            $sektor_info.html('');
            $card_sektor.show();
            $discard_data.hide();
            search_sektor();
        }

        let info_sektor = (id = '') => {
            let url = "{{ route($active_route) }}";
            url += (id === '' ? '/create' : ('/' + id + '/edit'));

            $.get(url, (result) => {
                $sektor_info.html(result);
                $card_sektor.hide();
                $discard_data.show();
                $('#add_data').hide();
            }).fail((xhr) => {
                $sektor_table.html(xhr.responseText);
            });
        }

        let discard_info_sektor = () => {
            $sektor_info.html('');
            $discard_data.hide();
            $('#add_data').show();
            $card_sektor.show();
        }

        let init_form_sektor = (id = '') =>{
            let $form_sektor = $('#form_sektor'),
                $button_submit_sektor = $('#button_submit_sektor');
                $form_sektor.submit((e) => {
                    e.preventDefault();

                    let data = getFormData($form_sektor);
                    let url = '{{ route($active_route) }}';
                    if (id !== '') {
                        url += ('/' + id);
                        data._method = 'put';
                    }
                    $.post(url, data, () => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Data User Level has been saved.',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            init_sektor();
                        });
                    }).fail((xhr) => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                            footer: 'call admin to fixing this!'
                            // footer: xhr.responseText
                        });
                    })
                })
        }

        let confirm_delete = (id) => {
            Swal.fire({
                title: 'Anda yakin ?',
                text: "Anda akan menghapus data yg dipilih",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.value === true) {
                    delete_sektor(id);
                }
            })
        }

        let delete_sektor = (id) => {
            let data = {_token: '{{ csrf_token() }}', _method: 'DELETE', id};
            $.post("{{ url('sistem/sektor') }}/"+id, data, () => {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Data User Level has been deleted.',
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => {
                    search_sektor();
                });
            }).fail((xhr) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: 'call admin to fixing this!'
                    // footer: xhr.responseText
                });
            });
        }

        $search_form.submit((e) => {
            e.preventDefault();
            search_sektor();
        });

        let select_page = 1;
        $search_form = $('#search_form')
        search_sektor = (page = 1) => {
            $sektor_table.html('Loading ...');
            if (page.toString() === '+1') select_page++;
            else if (page.toString() === '-1') select_page--;
            else select_page = page;

            let data = getFormData($search_form);
            data.paginate = 10;
            $.post("{{ route('sistem.sektor.search') }}?page=" + select_page, data, (result) => {
                $sektor_table.html(result);
            }).fail((xhr) => {
                $sektor_table.html(xhr.responseText);
            });
        }
        
        search_sektor();

    </script>
@endpush