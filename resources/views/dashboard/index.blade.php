@extends('layout.navTop')

@push('css')
<style>
    h2 { font-size: calc(1em + 1vw); }
</style>
@endpush

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-md-3 col-sm-6 col-6 mx-auto ">
            <a href="{{ route('dash.show', 1) }}">
                <div class="card">
                    <div class="card body text-center pt-2">
                        <img src="{{ asset('img/dash_menu_1.png') }}" class="img-fluid"  alt="">
                        <h2>Questioning</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
            <a href="{{ route('dash.show', 2) }}">
                <div class="card">
                    <div class="card body text-center pt-2">
                        <img src="{{ asset('img/dash_menu_2.png') }}" class="img-fluid"  alt="">
                        <h2 class="pt-3">ESR Corner</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
            <a href="{{ route('dash.show', 1) }}">
                <div class="card">
                    <div class="card body text-center pt-2">
                        <img src="{{ asset('img/dash_menu_7.png') }}" class="img-fluid"  alt="">
                        <h2>Health Corner</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
            <a href="{{ route('reportDash') }}">
                <div class="card">
                    <div class="card body text-center pt-2">
                        <img src="{{ asset('img/dash_menu_3.png') }}" class="img-fluid"  alt="">
                        <h2 class="pt-2">Report</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
            <a href="{{ route('dash.show', 4) }}">
                <div class="card">
                    <div class="card body text-center pt-2">
                        <img src="{{ asset('img/dash_menu_4.png') }}" class="img-fluid"  alt="">
                        <h2>Employee</h2>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
            <a href="{{ route('dash.show', 5) }}">
                <div class="card">
                    <div class="card body text-center pt-2">
                        <img src="{{ asset('img/dash_menu_5.png') }}" class="img-fluid"  alt="">
                        <h2 class="pt-3">AZAM</h2>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
    
@push('js')
@endpush