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
<form class="form-horizontal" action="{{route('simpantransaksi')}}" method="POST">
            {{ csrf_field() }}
          <div class="box-body">
            <br />
            <div class="form-group">
              <label class="col-sm-2 control-label">No Kwitansi</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" name="no_kw" value="{{$no_kw}}" readonly>
              </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal Transaksi</label>
                <div class="col-sm-10">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" name="tgl" id="datepicker" value="{{ Carbon\Carbon::today()->format('m/d/Y') }}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Nama Peserta</label>
                <div class="col-sm-10">
                  <select id="peserta" class="form-control select2" style="width: 100%;" name="peserta_id" required>
                      @foreach ($peserta as $ag)
                        <option value="{{$ag->id}}">{{$ag->nama_peserta}}</option>
                      @endforeach
                  </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Nama Pegawai</label>
                <div class="col-sm-10">
                  <select id="pegawai" class="form-control select2" style="width: 100%;" name="pegawai_id" required>
                      @foreach ($pegawai as $ag)
                        <option value="{{$ag->id}}">{{$ag->nama}}</option>
                      @endforeach
                  </select>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Jenis</label>
                <div class="col-sm-10">
                  <select id="jenis" class="form-control select2" style="width: 100%;" name="jenis_id" required>
                      @foreach ($jenis as $ag)
                        <option value="{{$ag->id}}">{{$ag->nama}}</option>
                      @endforeach
                  </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Alat</label>
                <div class="col-sm-10">
                  <select id="alat" class="form-control select2" style="width: 100%;" name="alat_id" required>
                      @foreach ($alat as $ag)
                        <option value="{{$ag->id}}">{{$ag->nama}}</option>
                      @endforeach
                  </select>
                </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
             <a href={{url('/transaksi')}} class="btn btn-sm btn-danger">Kembali</a>
          </div>
          <!-- /.box-footer -->
        </form>
</div>
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


