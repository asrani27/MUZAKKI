@extends('layouts.back.master')

@section('content')
<div class="row">
  <div class="col-md-6">
    <a href="{{route('tambahpegawai')}}" type="button" class="btn bg-purple"><i class="fa fa-plus"></i> Tambah</a><br /><br />
  </div>
</div>
<div class="box box-purple">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>J Kelamin</th>
          <th>Jabatan</th>
          <th>Telp</th>
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
              <td>{{$dt->nik}}</td>
              <td>{{$dt->nama}}</td>
              <td>{{$dt->jkel}}</td>
              <td>{{$dt->jabatan->nama}}</td>
              <td>{{$dt->telp}}</td>
              <td>
                <a href={{url("pegawai/edit/{$dt->id}")}} class="btn btn-xs btn-success"><i class="fa fa-edit"></i> </a>
                <a href={{url("pegawai/delete/{$dt->id}")}} class="btn btn-xs btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data Ini..?');"><i class="fa fa-trash"></i> </a>
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection