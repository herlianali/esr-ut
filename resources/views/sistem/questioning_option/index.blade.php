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
        <div class="breadcrumb-item">Management {{ $title }}</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Data {{ $title }}</h4>
        <a id="add_data" onclick="info_questioning_option()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>
        <a id="discard_data" onclick="discard_info_questioning_option()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-arrow-alt-circle-left"style='font-size:30px; padding-top:5px'></i></a>

    </div>
    <div class="card-body">
        <div id="questioning_option_info"></div>
        <div class="card" id="card_questioning_option">
            <div class="card-header">
                <h4>List {{ $title }}</h4>
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
            <div class="card-body p-0" id="questioning_option_table"></div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        // init_form_element();

        let $search_form = $('#search_form'),
            $questioning_option_table = $('#questioning_option_table'),
            $questioning_option_info = $('#questioning_option_info'),
            $card_questioning_option = $('#card_questioning_option'),
            $discard_data = $('#discard_data'),
            _token = '{{ csrf_token() }}';
        
        $discard_data.hide();
        
        let init_questioning_option = () => {
            $questioning_option_info.html('');
            $card_questioning_option.show();
            $discard_data.hide();
            search_questioning_option();
        }

        let info_questioning_option = (id = '') => {
            let url = "{{ route($active_route) }}";
            url += (id === '' ? '/create' : ('/' + id + '/edit'));

            $.get(url, (result) => {
                $questioning_option_info.html(result);
                $card_questioning_option.hide();
                $discard_data.show();
                $('#add_data').hide();
            }).fail((xhr) => {
                $questioning_option_table.html(xhr.responseText);
            });
        }

        let discard_info_questioning_option = () => {
            $questioning_option_info.html('');
            $discard_data.hide();
            $('#add_data').show();
            $card_questioning_option.show();
        }

        let info_form_questioning_option = (id = '') =>{
            let $form_questioning_option = $('#form_questioning_option'),
                $button_submit_questioning_option = $('#button_submit_questioning_option');
                $form_questioning_option.submit((e) => {
                    e.preventDefault();

                    let data = getFormData($form_questioning_option);
                    let url = '{{ route($active_route) }}';
                    if (id !== '') {
                        url += ('/' + id);
                        data._method = 'put';
                    }
                    $.post(url, data, () => {
                        init_questioning_option();
                    }).fail((xhr) => {
                        error_handle(xhr.responseText);
                        console.log(xhr.responseText);
                    })
                })
        }

        $search_form.submit((e) => {
            e.preventDefault();
            search_questioning_option();
        });

        let select_page = 1;
        $search_form = $('#search_form')
        search_questioning_option = (page = 1) => {
            $questioning_option_table.html('Loading ...');
            if (page.toString() === '+1') select_page++;
            else if (page.toString() === '-1') select_page--;
            else select_page = page;

            let data = getFormData($search_form);
            data.paginate = 10;
            $.post("{{ route('sistem.questioning_option.search') }}?page=" + select_page, data, (result) => {
                $questioning_option_table.html(result);
            }).fail((xhr) => {
                $questioning_option_table.html(xhr.responseText);
            });
        }
        
        search_questioning_option();

    </script>
@endpush