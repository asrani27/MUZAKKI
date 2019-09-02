@extends('layouts.back.master')

@section('content')
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4>
    {{-- <i class="icon fa fa-info"></i>  --}}
    SELAMAT DATANG DI APLIKASI DPPKB Amuntai</h4>
  Silahkan Gunakan Menu Yang ada di sebelah kiri untuk mengelola aplikasi.
</div>
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$peserta}}</h3>

              <p>JUMLAH PESERTA</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('peserta')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <h3>{{$ibuhamil}}<sup style="font-size: 20px"></sup></h3>

              <p>JUMLAH IBU HAMIL</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('ibuhamil')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <h3>{{$bayi}}</h3>

              <p>JUMLAH BAYI LAHIR</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          <a href="{{route('bayi')}}" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Pdf</h3>

              <p>LAPORAN</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
          <a href="{{route('laporan')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
</div>
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$transaksi}}</h3>

              <p>JUMLAH PENGGUNA KB</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('peserta')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
</div>
@endsection
