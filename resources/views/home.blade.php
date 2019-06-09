@extends('layouts.back.master')

@section('content')
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>45</h3>

              <p>TOTAL AGENDA</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('totalAgenda')}}" class="small-box-footer">Print PDF <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <h3>56<sup style="font-size: 20px"></sup></h3>

              <p>AGENDA HARI INI</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('agendaToday')}}" class="small-box-footer">Print PDF <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <h3>23</h3>

              <p>AGENDA BULAN INI</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          <a href="{{route('agendaMonth')}}" class="small-box-footer">Print PDF <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Pdf</h3>

              <p>LAPORAN AGENDA</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
          <a href="{{route('pdf')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
      </div>
      <div class="box box-primary">
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Foto</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Jam</th>
                      <th>Dari</th>
                      <th>Keperluan</th>
                      <th>Telp</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <?php
                    $no = 1;
                    ?>
                    <tbody>
                    </tbody>
                  </table>
                </div>
      </div>
@endsection
