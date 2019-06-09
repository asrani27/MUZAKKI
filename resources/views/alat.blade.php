@extends('layouts.back.master')

@section('content')
<div class="row">
  <div class="col-md-6">
    <button type="button" class="btn bg-purple add-alat"><i class="fa fa-plus"></i> Tambah</button><br /><br />
  </div>
</div>
      <div class="box box-purple">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Alat</th>
                      <th>Jumlah</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <?php
                    $no = 1;
                    ?>
                    <tbody>
                      @foreach ($data as $dt)
                        <tr>
                        <td>{{$no++}}</td>
                        <td>{{$dt->nama}}</td>
                        <td>{{$dt->jumlah}}</td>
                        <td>
                            <button type="button" class="btn btn-xs btn-success edit-alat"  data-id="{{$dt->id}}" data-nama="{{$dt->nama}}" data-jumlah="{{$dt->jumlah}}"><i class="fa fa-edit"></i> </button>
                            <a href={{url("alat/delete/{$dt->id}")}} class="btn btn-xs btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data Ini..?');"><i class="fa fa-trash"></i> </a>
                        </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
  </div>

  <div class="modal fade" id="addAlat">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Alat </h4>
          </div>
          <div class="modal-body">
              <form class="form-horizontal" method="post" action={{route('simpanalat')}}>
                  {{ csrf_field() }}
                  <div class="form-group">
                      <label class="col-sm-3 control-label">Nama Alat</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="addnama" name="nama">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-3 control-label">Jumlah</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="addjumlah" name="jumlah" onkeypress="return hanyaAngka(event)" maxlength="5">
                      </div>
                  </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="editAlat">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Alat </h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action={{route('editalat')}}>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Jenis</label>
                        <div class="col-sm-9">     
                          <input type="hidden" class="form-control" id="idedit" name="idedit">
                          <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Jumlah</label>
                        <div class="col-sm-9">     
                          <input type="text" class="form-control" id="jumlah" name="jumlah" onkeypress="return hanyaAngka(event)" maxlength="5">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
  </div>
@endsection

@push('add_js')
<script>
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))

      return false;
    return true;
  }
</script>
<script type="text/javascript">

$(document).ready(function() {
  $(document).on('click', '.add-alat', function() {
      document.getElementById("addnama").value = "";
      document.getElementById("addjumlah").value = "";
      $('#addAlat').modal('show');
      document.getElementById("addnama").value = "";
      document.getElementById("addjumlah").value = "";
  });

  $(document).on('click', '.edit-alat', function() {
    $('#idedit').val($(this).data('id'));
    $('#nama').val($(this).data('nama'));
    $('#jumlah').val($(this).data('jumlah'));
    $('#editAlat').modal('show');
  });
});
</script>

@endpush
