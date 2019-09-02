@extends('layouts.back.master')

@section('content')
<div class="box box-purple">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Peserta</th>
          <th>Jan</th>
          <th>Feb</th>
          <th>Mar</th>
          <th>Apr</th>
          <th>Mei</th>
          <th>Jun</th>
          <th>Jul</th>
          <th>Agust</th>
          <th>Sept</th>
          <th>Okt</th>
          <th>Nov</th>
          <th>Des</th>
          <th>Status</th>
        </tr>
       </thead>
           <?php
           $no = 1;
           ?>
        <tbody>
          @foreach ($data as $dt)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$dt->nama_peserta}}</td>
              <td>{{$dt->jan}}</td>
              <td>{{$dt->feb}}</td>
              <td>{{$dt->mar}}</td>
              <td>{{$dt->apr}}</td>
              <td>{{$dt->may}}</td>
              <td>{{$dt->jun}}</td>
              <td>{{$dt->jul}}</td>
              <td>{{$dt->aug}}</td>
              <td>{{$dt->sep}}</td>
              <td>{{$dt->okt}}</td>
              <td>{{$dt->nov}}</td>
              <td>{{$dt->des}}</td>
              <td>{{$dt->status}}</td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection