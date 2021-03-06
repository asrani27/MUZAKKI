@extends('layouts.back.master')
@push('add_css')

  <!-- daterange picker -->
  <link rel="stylesheet" href="{{url('LTE/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{url('LTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{url('LTE/plugins/iCheck/all.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{url('LTE/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{url('LTE/plugins/timepicker/bootstrap-timepicker.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{url('LTE/bower_components/select2/dist/css/select2.min.css')}}">

@endpush
@section('content')
<div class="box box-primary">
<form class="form-horizontal" action="{{route('cekibuhamil')}}" method="POST">
            {{ csrf_field() }}
          <div class="box-body">
            <br />
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Pilih NIK</label>
                <div class="col-sm-10">
                  <select id="agama" class="form-control select2" style="width: 100%;" name="nik" required>
                      @foreach ($ibuhamil as $ag)
                        <option value="{{$ag->nik}}">{{$ag->nik}} / {{$ag->nama}}</option>
                      @endforeach
                  </select>
                </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-sm btn-primary">Cek Riwayat</button>
          </div>
          <!-- /.box-footer -->
        </form>
</div>

@if($jmldata == 0)
@else
<div class="box box-purple">
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Kewarganegaraan</th>
            <th>Alamat</th>
            <th>Petugas</th>
          </tr>
         </thead>
             <?php
             $no = 1;
             ?>
          <tbody>
            @foreach ($data as $dt)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$dt->nik}}</td>
                <td>{{$dt->nama}}</td>
                <td>{{\Carbon\Carbon::parse($dt->tgl_lahir)->format('d M Y')}}</td>
                <td>{{$dt->kewarganegaraan}}</td>
                <td>{{$dt->alamat}}</td>
                <td>{{$dt->pegawai->nama}}</td>
              </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endif
@endsection


@push('add_js')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<!-- Page script -->
<script>
        $(function () {
          //Initialize Select2 Elements
          $('.select2').select2()
      
          //Date picker
          $('#datepicker').datepicker({
            autoclose: true
          })
          $('#datepicker2').datepicker({
            autoclose: true
          })
      
          //Timepicker
          $('.timepicker').timepicker({
            showInputs: false,
            showMeridian: false     
          })
        })
</script>
<script>
          function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
             if (charCode > 31 && (charCode < 48 || charCode > 57))
       
              return false;
            return true;
          }
</script>
@endpush


