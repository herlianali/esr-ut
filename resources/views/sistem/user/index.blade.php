@extends('layout.app')

@push('css')
@endpush

@section('menu')
  @php($menu = '4')
@endsection

@section('content')
<div class="section-header">
    <h1>Users</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Employee</a></div>
        <div class="breadcrumb-item">Users</div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Data User</h4>
        <a id="add_data" onclick="add_data()" class="btn btn-icon btn-lg" style="margin-left: auto"><i class="fas fa-plus-circle" style='font-size:30px; padding-top:5px'></i></a>

    </div>
    <div class="card-body">
        <div class="card" id="user_info"></div>
        <div class="card" id="user_data">
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
    // init_form_element();
    $user_data = $('#user_data');

    let selected_page = 1;
    $search_form = $('#search_form');
    $user_table = $('#user_table');
    search_user = (page = 1) => {
      if (page.toString() === '+1') selected_page++;
      else if (page.toString() === '-1') selected_page--;
      else selected_page = page;
      
      let data = getFormData($search_form);
      console.log(data);
      data.paginate = 10;
      $.post("{{ route('employee.user.search') }}?page=" + selected_page, data, (result) => {
        $user_table.html(result);
      }).fail((xhr) => {
        $user_table.html(xhr.responseText);
      });
    }

    search_user();

    $search_form.submit((e) => {
      e.preventDefault();
      search_user();
    })
    
    $user_info = $('#user_info');
    $user_info.hide();
    add_data = () => {
      let data = { token: '{{ csrf_token() }}'};
      $.get("{{ route('employee.user.create') }}", data, (result) => {
        $('#add_data').hide();
        $user_data.hide();
        $user_info.html(result);
        $user_info.show();
      }).fail((xhr) => {
        $user_info.html(xhr.responseText);
        $user_info.show();
      });
    }

    edit_user = (id) => {
      let data = {_token: '{{ csrf_token() }}', id};
      $.post("{{ route('employee.user.edit) }}", data, (result) => {
        $user_info.html(result);
        $user_info.show();
      }).fail((xhr) => {
        $user_info.html(xhr.responseText);
        $user_info.show();
      });
    }

  </script>
@endpush