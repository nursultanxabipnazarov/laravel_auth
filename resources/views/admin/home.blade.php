@extends('admin.layaut')


@section('title','DASHBOARD')
@section('content')

<div class="row">
    <div class="col-xl-3 col-lg-6">
      <div class="card">
        <div class="card-bg">
          <div class="p-t-20 d-flex justify-content-between">
            <div class="col">
              <h6 class="mb-0">New Booking</h6>
              <span class="font-weight-bold mb-0 font-20">1,562</span>
            </div>
            <i class="fas fa-address-card card-icon col-orange font-30 p-r-30"></i>
          </div>
          <canvas id="cardChart1" height="80"></canvas>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6">
      <div class="card">
        <div class="card-bg">
          <div class="p-t-20 d-flex justify-content-between">
            <div class="col">
              <h6 class="mb-0">New Customers</h6>
              <span class="font-weight-bold mb-0 font-20">895</span>
            </div>
            <i class="fas fa-diagnoses card-icon col-green font-30 p-r-30"></i>
          </div>
          <canvas id="cardChart2" height="80"></canvas>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6">
      <div class="card">
        <div class="card-bg">
          <div class="p-t-20 d-flex justify-content-between">
            <div class="col">
              <h6 class="mb-0">Growth</h6>
              <span class="font-weight-bold mb-0 font-20">+22.58%</span>
            </div>
            <i class="fas fa-chart-bar card-icon col-indigo font-30 p-r-30"></i>
          </div>
          <canvas id="cardChart3" height="80"></canvas>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6">
      <div class="card">
        <div class="card-bg">
          <div class="p-t-20 d-flex justify-content-between">
            <div class="col">
              <h6 class="mb-0">Revenue</h6>
              <span class="font-weight-bold mb-0 font-20">$2,687</span>
            </div>
            <i class="fas fa-hand-holding-usd card-icon col-cyan font-30 p-r-30"></i>
          </div>
          <canvas id="cardChart4" height="80"></canvas>
        </div>
      </div>
    </div>
  </div>
    
@endsection