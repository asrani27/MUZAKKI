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
<form class="form-horizontal" action="{{route('simpanbayi')}}" method="POST">
            {{ csrf_field() }}
          <div class="box-body">
            <br />
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" name="tgl_lahir" id="datepicker" value="{{ Carbon\Carbon::today()->format('m/d/Y') }}">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Hari Lahir</label>
                <div class="col-sm-10">
                  <select class="form-control select2" style="width: 100%;" name="hari">
                          <option value="senin">Senin</option>
                          <option value="selasa">Selasa</option>
                          <option value="rabu">Rabu</option>
                          <option value="kamis">Kamis</option>
                          <option value="jumat">Jumat</option>
                          <option value="sabtu">Sabtu</option>
                          <option value="minggu">Minggu</option>
                  </select>
                </div>
            </div>

            <div class="bootstrap-timepicker">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jam Lahir</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control timepicker" name="waktu" >
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tempat</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="tempat" required>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <select class="form-control select2" style="width: 100%;" name="jkel">
                          <option value="L">Laki-laki</option>
                          <option value="P">Peremuan</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Anak Ke</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="anak_ke" required onkeypress="return hanyaAngka(event)">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Lahir</label>
                <div class="col-sm-10">
                  <select class="form-control select2" style="width: 100%;" name="jenis_lahir" required>
                          <option value="Tunggal">Tunggal</option>
                          <option value="Kembar">Kembar</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Kewarganegaraan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="kewarganegaraan" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">NIK Ibu</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nik_ibu" required onkeypress="return hanyaAngka(event)">
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Nama Ibu</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_ibu" required>
                </div>
            </div>

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
             <a href={{url('/bayi')}} class="btn btn-sm btn-danger">Kembali</a>
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


