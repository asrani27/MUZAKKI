@extends('layouts.back.master')

@section('content')
<div class="row">
  <div class="col-md-6">
    <button type="button" class="btn bg-purple add-agama"><i class="fa fa-plus"></i> Tambah</button><br /><br />
  </div>
</div>
      <div class="box box-purple">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Agama</th>
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
                        <td>
                            <button type="button" class="btn btn-xs btn-success edit-agama"  data-id="{{$dt->id}}" data-nama="{{$dt->nama}}"><i class="fa fa-edit"></i> </button>
                            <a href={{url("agama/delete/{$dt->id}")}} class="btn btn-xs btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data Ini..?');"><i class="fa fa-trash"></i> </a>
                        </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
      </div>

  <div class="modal fade" id="addAgama">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Agama </h4>
          </div>
          <div class="modal-body">
              <form class="form-horizontal" method="post" action={{route('simpanagama')}}>
                  {{ csrf_field() }}
                  <div class="form-group">
                      <label class="col-sm-3 control-label">Nama Agama</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="addnama" name="nama">
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

  <div class="modal fade" id="editAgama">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Agama </h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action={{route('editagama')}}>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Agama</label>
                        <div class="col-sm-9">     
                          <input type="hidden" class="form-control" id="idedit" name="idedit">
                          <input type="text" class="form-control" id="nama" name="nama">
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
<script type="text/javascript">

$(document).ready(function() {
  $(document).on('click', '.add-agama', function() {
      document.getElementById("addnama").value = "";
      $('#addAgama').modal('show');
      document.getElementById("addnama").value = "";
  });

  $(document).on('click', '.edit-agama', function() {
    $('#idedit').val($(this).data('id'));
    $('#nama').val($(this).data('nama'));
    $('#editAgama').modal('show');
  });
});
</script>

@endpush
