@extends('layout.navTop')

@push('css')
<style>
    h2 { font-size: calc(1em + 1vw); }
</style>
@endpush

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-lg-2 col-md-2 col-sm-6 col-6">
            <div class="card">
                <div class="card body text-center pt-2">
                    <a href="{{ route('dash.show', 1) }}">
                        <img src="{{ asset('img/dash_menu_1.png') }}" class="img-fluid"  alt="">
                        <h2>Questioning</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-6">
            <div class="card">
                <div class="card body text-center pt-2">
                    <a href="{{ route('dash.show', 2) }}">
                        <img src="{{ asset('img/dash_menu_2.png') }}" class="img-fluid"  alt="">
                        <h2 class="pt-3">ESR Corner</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-2 col-md-2 col-sm-6 col-6">
            <div class="card">
                <div class="card body text-center pt-2">
                    <a href="{{ route('reportDash') }}">
                        <img src="{{ asset('img/dash_menu_3.png') }}" class="img-fluid"  alt="">
                        <h2 class="pt-2">Report</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-6">
            <div class="card">
                <div class="card body text-center pt-2">
                    <a href="{{ route('dash.show', 4) }}">
                        <img src="{{ asset('img/dash_menu_4.png') }}" class="img-fluid"  alt="">
                        <h2>Employee</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 col-6">
            <div class="card">
                <div class="card body text-center pt-2">
                    <a href="{{ route('dash.show', 5) }}">
                        <img src="{{ asset('img/dash_menu_5.png') }}" class="img-fluid"  alt="">
                        <h2 class="pt-3">AZAM</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
    
@push('js')
@endpush