@extends('layout.app')

@push('css')
@endpush

@section('menu')
    @php($menu = $id)
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>MANAGEMENT</h4>
            </div>
            <div class="card-body">
                <canvas id="myChart2"></canvas>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>QA & PSCE</h4>
            </div>
            <div class="card-body">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>SUPERVISOR</h4>
            </div>
            <div class="card-body">
                {{-- <canvas id="myHorizontalBarChart"></canvas> --}}
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>DEPT HEAD</h4>
            </div>
            <div class="card-body">
                {{-- <canvas id="myHorizontalBarChart"></canvas> --}}
            </div>
        </div>
    </div>
</div>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>LEADER</h4>
        </div>
        <div class="card-body">
            {{-- <canvas id="myHorizontalBarChart"></canvas> --}}
        </div>
    </div>
</div>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>MITRA KERJA</h4>
        </div>
        <div class="card-body">
            {{-- <canvas id="myHorizontalBarChart"></canvas> --}}
        </div>
    </div>
</div>
@endsection
    
@push('js')
  <!-- JS Libraies -->
  <script src="{{ asset('stisla/assets/modules/chart.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('stisla/assets/js/page/modules-chartjs.js') }}"></script>
@endpush