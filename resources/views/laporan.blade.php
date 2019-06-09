@extends('layouts.back.master')

@push('add_css')

@endpush

@section('content')
<form class="form-horizontal">

  <!-- /.box- ORGANISASI -->
  <div class="box box-solid">
    <div class="box-header bg-red-gradient">
      <h3 class="box-title">LAPORAN DATA PEGAWAI</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-danger btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="" style="margin-right: 5px;" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
        </div>
    </div>
        <!-- /.box-header -->
    <div class="box-body">
        <a href=# class="btn btn-sm bg-purple"><i class="fa fa-print"></i> PRINT </a> 
    </div>
  </div>

  <!-- /.box- DATA ADMINISTRASI -->
  <div class="box box-solid">
      <div class="box-header bg-maroon-gradient">
        <h3 class="box-title">LAPORAN DATA PESERTA</h3>
          <div class="box-tools pull-right">
              <button type="button" class="btn bg-maroon btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="" style="margin-right: 5px;" data-original-title="Collapse">
                    <i class="fa fa-minus"></i></button>
          </div>
      </div>
          <!-- /.box-header -->
      <div class="box-body">
        <a href=# class="btn btn-sm bg-purple"><i class="fa fa-print"></i> PRINT </a> 
      </div>  
  </div>
  
  <!-- /.box- PEMBENTUKAN -->
  <div class="box box-solid">
    <div class="box-header bg-purple-gradient">
      <h3 class="box-title">LAPORAN DATA ALAT</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn bg-purple btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="" style="margin-right: 5px;" data-original-title="Collapse">
                      <i class="fa fa-minus"></i></button>
        </div>
    </div>
            <!-- /.box-header -->
    <div class="box-body">
        <a href=# class="btn btn-sm bg-purple"><i class="fa fa-print"></i> PRINT </a>      
    </div>  
  </div> 

  <!-- /.box- LANDASAN HUKUM -->
  <div class="box box-solid">
    <div class="box-header bg-green-gradient">
      <h3 class="box-title">LAPORAN DATA JENIS</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-success btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="" style="margin-right: 5px;" data-original-title="Collapse">
                      <i class="fa fa-minus"></i></button>
        </div>
    </div>
            <!-- /.box-header -->
    <div class="box-body">
        <a href=# class="btn btn-sm bg-purple"><i class="fa fa-print"></i> PRINT </a>      
    </div>  
  </div>

  <!-- /.box- LANDASAN HUKUM -->
  <div class="box box-solid">
    <div class="box-header bg-light-blue-gradient">
      <h3 class="box-title">LAPORAN DATA IBU HAMIL</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="" style="margin-right: 5px;" data-original-title="Collapse">
                      <i class="fa fa-minus"></i></button>
        </div>
    </div>
            <!-- /.box-header -->
    <div class="box-body">
        <a href=# class="btn btn-sm bg-purple"><i class="fa fa-print"></i> PRINT </a>  
    </div>  
  </div>

  <!-- /.box- PAJAK -->
  <div class="box box-solid">
    <div class="box-header bg-yellow-gradient">
      <h3 class="box-title">LAPORAN DATA TRANSAKSI</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn bg-yellow btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="" style="margin-right: 5px;" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
        </div>
    </div>
        <!-- /.box-header -->
    <div class="box-body">
        <a href=# class="btn btn-sm bg-purple"><i class="fa fa-print"></i> PRINT </a> 
    </div>  
  </div>

  <!-- /.box- LAMBANG -->
  <div class="box box-solid">
    <div class="box-header bg-red-gradient">
      <h3 class="box-title">LAPORAN DATA BAYI LAHIR</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-danger btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="" style="margin-right: 5px;" data-original-title="Collapse">
                  <i class="fa fa-minus"></i></button>
        </div>
    </div>
        <!-- /.box-header -->
    <div class="box-body">
        <a href=# class="btn btn-sm bg-purple"><i class="fa fa-print"></i> PRINT </a> 
    </div>  
  </div>

  <!-- /.box- DATA ADMINISTRASI -->
  <div class="box box-solid">
      <div class="box-header bg-maroon-gradient">
        <h3 class="box-title">LAPORAN KARTU KB</h3>
          <div class="box-tools pull-right">
              <button type="button" class="btn bg-maroon btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="" style="margin-right: 5px;" data-original-title="Collapse">
                    <i class="fa fa-minus"></i></button>
          </div>
      </div>
          <!-- /.box-header -->
      <div class="box-body">
        <a href=# class="btn btn-sm bg-purple"><i class="fa fa-print"></i> PRINT </a> 
      </div>  
  </div>
  
  <!-- /.box- PEMBENTUKAN -->
  <div class="box box-solid">
    <div class="box-header bg-purple-gradient">
      <h3 class="box-title">LAPORAN PENYULUH KECAMATAN</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn bg-purple btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="" style="margin-right: 5px;" data-original-title="Collapse">
                      <i class="fa fa-minus"></i></button>
        </div>
    </div>
            <!-- /.box-header -->
    <div class="box-body">
        <a href=# class="btn btn-sm bg-purple"><i class="fa fa-print"></i> PRINT </a>      
    </div>  
  </div> 

  <!-- /.box- LANDASAN HUKUM -->
  <div class="box box-solid">
    <div class="box-header bg-green-gradient">
      <h3 class="box-title">LAPORAN PEGAWAI DI KECAMATAN</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-success btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="" style="margin-right: 5px;" data-original-title="Collapse">
                      <i class="fa fa-minus"></i></button>
        </div>
    </div>
            <!-- /.box-header -->
    <div class="box-body">
        <a href=# class="btn btn-sm bg-purple"><i class="fa fa-print"></i> PRINT </a>      
    </div>  
  </div>  
</form>
@endsection

@push('add_js')
<!-- bootstrap datepicker -->
<script src="{{url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script>
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
</script>
@endpush    