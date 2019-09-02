@extends('layouts.back.master')

@section('content')
<div class="row">
  <div class="col-md-6">
    <a href="{{route('tambahibuhamil')}}" type="button" class="btn bg-purple"><i class="fa fa-plus"></i> Tambah</a><br /><br />
  </div>
</div>
<div class="box box-purple">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>NIK</th>
          <th>Nama Ibu</th>
          <th>Nama Ayah</th>
          <th>Pekerjaan Ibu</th>
          <th>Pekerjaan Ayah</th>
          <th>Tanggal Lahir</th>
          <th>Kewarganegaraan</th>
          <th>Alamat</th>
          <th>Petugas</th>
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
              <td>{{$dt->nama_ayah}}</td>
              <td>{{$dt->pekerjaan}}</td>
              <td>{{$dt->pekerjaan_ayah}}</td>
              <td>{{\Carbon\Carbon::parse($dt->tgl_lahir)->format('d M Y')}}</td>
              <td>{{$dt->kewarganegaraan}}</td>
              <td>{{$dt->alamat}}</td>
              <td>{{$dt->pegawai->nama}}</td>
              <td>
                <a href={{url("ibuhamil/edit/{$dt->id}")}} class="btn btn-xs btn-success"><i class="fa fa-edit"></i> </a>
                <a href={{url("ibuhamil/delete/{$dt->id}")}} class="btn btn-xs btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data Ini..?');"><i class="fa fa-trash"></i> </a>
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection