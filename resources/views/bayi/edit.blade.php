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
<form class="form-horizontal" action="{{route('editbayi', $data->id)}}" method="POST">
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
                        <input type="text" class="form-control pull-right" name="tgl_lahir" id="datepicker" value="{{ Carbon\Carbon::parse($data->tanggal)->format('m/d/Y') }}">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Hari Lahir</label>
                <div class="col-sm-10">
                  <select class="form-control select2" style="width: 100%;" name="hari">
                        @if($data->hari == 'senin')
                          <option value="senin" selected>Senin</option>
                          <option value="selasa">Selasa</option>
                          <option value="rabu">Rabu</option>
                          <option value="kamis">Kamis</option>
                          <option value="jumat">Jumat</option>
                          <option value="sabtu">Sabtu</option>
                          <option value="minggu">Minggu</option>
                        @elseif($data->hari == 'selasa')
                          <option value="senin">Senin</option>
                          <option value="selasa" selected>Selasa</option>
                          <option value="rabu">Rabu</option>
                          <option value="kamis">Kamis</option>
                          <option value="jumat">Jumat</option>
                          <option value="sabtu">Sabtu</option>
                          <option value="minggu">Minggu</option>
                        @elseif($data->hari == 'rabu')
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu" selected>Rabu</option>
                        <option value="kamis">Kamis</option>
                        <option value="jumat">Jumat</option>
                        <option value="sabtu">Sabtu</option>
                        <option value="minggu">Minggu</option>
                        @elseif($data->hari == 'kamis')
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                        <option value="kamis" selected>Kamis</option>
                        <option value="jumat">Jumat</option>
                        <option value="sabtu">Sabtu</option>
                        <option value="minggu">Minggu</option>
                        @elseif($data->hari == 'jumat')
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                        <option value="kamis">Kamis</option>
                        <option value="jumat" selected>Jumat</option>
                        <option value="sabtu">Sabtu</option>
                        <option value="minggu">Minggu</option>
                        @elseif($data->hari == 'sabtu')
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                        <option value="kamis">Kamis</option>
                        <option value="jumat">Jumat</option>
                        <option value="sabtu" selected>Sabtu</option>
                        <option value="minggu">Minggu</option>
                        @elseif($data->hari == 'minggu')
                        <option value="senin" >Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                        <option value="kamis">Kamis</option>
                        <option value="jumat">Jumat</option>
                        <option value="sabtu">Sabtu</option>
                        <option value="minggu" selected>Minggu</option>
                        @endif
                  </select>
                </div>
            </div>

            <div class="bootstrap-timepicker">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jam Lahir</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                        <input type="text" class="form-control timepicker" name="waktu" value="{{$data->waktu}}">
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
                <input type="text" class="form-control" name="tempat" required value="{{$data->tempat}}">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <select class="form-control select2" style="width: 100%;" name="jkel">
                    @if($data->jkel == 'L')
                        <option value="L" selected>Laki-laki</option>
                        <option value="P">Peremuan</option>
                    @else
                        <option value="L">Laki-laki</option>
                        <option value="P" selected>Peremuan</option>
                    @endif
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Anak Ke</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="anak_ke"  value="{{$data->anak_ke}}" required onkeypress="return hanyaAngka(event)">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Lahir</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="jenis_lahir" required  value="{{$data->jenis_lahir}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Kewarganegaraan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="kewarganegaraan" required  value="{{$data->kewarganegaraan}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">NIK Ibu</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nik_ibu" required onkeypress="return hanyaAngka(event)"  value="{{$data->nik_ibu}}">
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-2 control-label">Nama Ibu</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_ibu" required  value="{{$data->nama_ibu}}">
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


