@extends('layout.app')

@push('css')
@endpush

@section('menu')
    {{-- @php($menu = $id) --}}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total User</h4>
                </div>
                <div class="card-body">
                    {{ $data['total_user'] }} Orang
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Pengawas</h4>
                </div>
                <div class="card-body">
                    {{ $data['total_pengawas'] }} Orang
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="far fa-file"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Sektor</h4>
                </div>
                <div class="card-body">
                    {{ $data['total_sektor'] }} Lokasi
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-circle"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Online Users</h4>
                </div>
                <div class="card-body">
                    {{ $data['total_aktif_user'] }} Users
                </div>
            </div>
        </div>
    </div>                  
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-12">
        <div class="card">
            <div class="card-header">
            <h4>Total User Perlevel</h4>
            </div>
            <div class="card-body">
                @foreach ($data['user_level_result'] as $value)
                    <div class="mb-4">
                        <div class="text-small float-right font-weight-bold text-muted">{{ $value['total_user'] }}</div>
                        <div class="font-weight-bold mb-1">{{ $value['nama'] }}</div>
                        <div class="progress" data-height="3">
                            <div class="progress-bar" role="progressbar" data-width="{{ $value['persentase'] }}" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>                          
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
    
@push('js')
@endpush