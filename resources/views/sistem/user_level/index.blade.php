@extends('layout.app')

@push('css')
<style>
    @media (max-width: 575.98px) {
        .table-responsive table{
            min-width: 400px;
        }
    }
</style>
@endpush

@section('menu')
  @php($menu = '4')
@endsection

@section('content')
<div class="section-header">
    <h1>Sistem</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Sistem</a></div>
        <div class="breadcrumb-item">Management {{ $title }}</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Data {{ $title }}</h4>
        <a id="add_data" onclick="info_user_level()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>
        <a id="discard_data" onclick="discard_info_user_level()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-arrow-alt-circle-left"style='font-size:30px; padding-top:5px'></i></a>

    </div>
    <div class="card-body">
        <div class="card" id="user_level_info"></div>
        <div class="card" id="card_user_level">
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
            <div class="card-body p-0" id="user_level_table"></div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('public/stisla/assets/modules/tooltip.js') }}"></script>
    <script>
        init_form_element();

        let $search_form = $('#search_form'),
            $user_level_table = $('#user_level_table'),
            $user_level_info = $('#user_level_info'),
            $card_user_level = $('#card_user_level'),
            $discard_data = $('#discard_data'),
            _token = '{{ csrf_token() }}';
        
        $discard_data.hide();
        
        let init_user_level = () => {
            $user_level_info.html('');
            $card_user_level.show();
            $discard_data.hide();
            $('#add_data').show();
            search_user_level();
        }

        let info_user_level = (id = '') => {
            let url = "{{ route($active_route) }}";
            url += (id === '' ? '/create' : ('/' + id + '/edit'));

            $.get(url, (result) => {
                $user_level_info.html(result);
                $card_user_level.hide();
                $discard_data.show();
                $('#add_data').hide();
            }).fail((xhr) => {
                $user_level_table.html(xhr.responseText);
            });
        }

        let discard_info_user_level = () => {
            $user_level_info.html('');
            $discard_data.hide();
            $('#add_data').show();
            $card_user_level.show();
        }

        let init_form_user_level = (id = '') =>{
            let $form_user_level = $('#form_user_level'),
                $button_submit_user_level = $('#button_submit_user_level');
                $form_user_level.submit((e) => {
                    e.preventDefault();
                    let dataForm = new FormData($form_user_level.get(0));
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
                                text: 'Data User Level has been saved.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                init_user_level();
                            });
                        },
                        error: (xhr) => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                                footer: 'call admin to fixing this!'
                                // footer: xhr.responseText
                            });
                        }
                    });
                });
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
                    delete_user_level(id);
                }
            })
        }

        let delete_user_level = (id) => {
            let data = {_token: '{{ csrf_token() }}', _method: 'DELETE', id};
            $.post("{{ url('sistem/user_level') }}/"+id, data, () => {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Data User Level has been deleted.',
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => {
                    search_user_level();
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
            search_user_level();
        });

        let select_page = 1;
        $search_form = $('#search_form')
        search_user_level = (page = 1) => {
            $user_level_table.html('Loading ...');
            if (page.toString() === '+1') select_page++;
            else if (page.toString() === '-1') select_page--;
            else select_page = page;

            let data = getFormData($search_form);
            data.paginate = 10;
            $.post("{{ route('sistem.user_level.search') }}?page=" + select_page, data, (result) => {
                $user_level_table.html(result);
            }).fail((xhr) => {
                $user_level_table.html(xhr.responseText);
            });
        }
        
        search_user_level();

    </script>
@endpush