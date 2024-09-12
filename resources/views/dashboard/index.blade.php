@extends('layout.navTop')

@push('css')
<style>
    .responsive-text {
        font-size: calc(1.25rem + 1vw);
    }
    
    @media (max-width: 576px) { /* Extra small devices (portrait phones) */
        .responsive-text {
            font-size: 1rem;
        }
    }

    @media (min-width: 576px) and (max-width: 768px) { /* Small devices (landscape phones) */
        .responsive-text {
            font-size: 1.25rem;
        }
    }

    @media (min-width: 768px) { /* Medium devices (tablets) and larger */
        .responsive-text {
            font-size: calc(1.25rem + 0.5vw);
        }
    }
</style>
@endpush

@section('content')
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
            <div class="card card-slider m-md-5" style="border-radius: 10px; padding: 0%;">
                <div class="card-body p-2">
                    <img src="{{asset('public/slider/slide1.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="carousel-item" data-interval="2000">
            <div class="card card-slider m-md-5" style="border-radius: 10px; padding: 0%;">
                <div class="card-body p-2">
                    <img src="{{asset('public/slider/slide2.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card card-slider m-md-5" style="border-radius: 10px; padding: 0%;">
                <div class="card-body p-2">
                    <img src="{{asset('public/slider/slide3.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-md-3 col-sm-4 col-4">
            <a href="{{ route('dash.show', 1) }}" class="text-dark">
                <div class="card" style="background-color:rgb(255, 248, 146); border-radius: 50%; margin: 0px 0px 10px 0px">
                    <div class="card body text-center m-md-4 m-3" style="background-color:rgb(226, 210, 119); border-radius: 50%">
                        <img src="{{ asset('public/img/dash_menu_1_3d.png') }}" class="img-fluid" width="100%" alt="">
                    </div>
                </div>
                <div class="text-center mb-4">
                    <h2 class="text-dark responsive-text">Questioning</h2>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-4">
            <a href="{{ route('dash.show', 2) }}" class="text-dark">
                <div class="card" style="background-color:rgb(255, 248, 146); border-radius: 50%; margin: 0px 0px 10px 0px">
                    <div class="card body text-center m-md-4 m-3" style="background-color:rgb(226, 210, 119); border-radius: 50%">
                        <img src="{{ asset('public/img/dash_menu_2_3d.png') }}" class="img-fluid" width="90%" alt="">
                    </div>
                </div>
                <div class="text-center mb-4">
                    <h2 class="text-dark responsive-text">ESR Corner</h2>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-4">
            <a href="{{ route('dash.show', 1) }}" class="text-dark">
                <div class="card" style="background-color:rgb(255, 248, 146); border-radius: 50%; margin: 0px 0px 10px 0px">
                    <div class="card body text-center m-md-4 m-3" style="background-color:rgb(226, 210, 119); border-radius: 50%">
                        <img src="{{ asset('public/img/dash_menu_7_3d.png') }}" class="img-fluid" width="95%" alt="">
                    </div>
                </div>
                <div class="text-center mb-4">
                    <h2 class="text-dark responsive-text">Health Corner</h2>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-4">
            <a href="{{ route('reportDash') }}" class="text-dark">
                <div class="card" style="background-color:rgb(255, 248, 146); border-radius: 50%; margin: 0px 0px 10px 0px">
                    <div class="card body text-center m-md-4 m-3" style="background-color:rgb(226, 210, 119); border-radius: 50%">
                        <img src="{{ asset('public/img/dash_menu_3_3d.png') }}" class="img-fluid" width="100%" alt="">
                    </div>
                </div>
                <div class="text-center mb-4">
                    <h2 class="text-dark responsive-text">Report</h2>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-4">
            <a href="{{ route('dash.show', 4) }}" class="text-dark">
                <div class="card" style="background-color:rgb(255, 248, 146); border-radius: 50%; margin: 0px 0px 10px 0px">
                    <div class="card body text-center m-md-4 m-3" style="background-color:rgb(226, 210, 119); border-radius: 50%">
                        <img src="{{ asset('public/img/dash_menu_4_3d.png') }}" class="img-fluid" width="100%" alt="">
                    </div>
                </div>
                <div class="text-center mb-4">
                    <h2 class="text-dark responsive-text">Settings</h2>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-4">
            <a href="{{ route('dash.show', 5) }}" class="text-dark">
                <div class="card" style="background-color:rgb(255, 248, 146); border-radius: 50%; margin: 0px 0px 10px 0px">
                    <div class="card body text-center m-md-4 m-3" style="background-color:rgb(226, 210, 119); border-radius: 50%">
                        <img src="{{ asset('public/img/dash_menu_5_3d.png') }}" class="img-fluid" width="80%" alt="" >
                    </div>
                </div>
                <div class="text-center mb-4">
                    <h2 class="text-dark responsive-text">AZAM</h2>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
    
@push('js')
<script>
    $('.carousel').carousel()
</script>
@endpush