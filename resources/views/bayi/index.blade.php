@extends('layouts.back.master')

@section('content')
<div class="row">
  <div class="col-md-6">
    <a href="{{route('tambahbayi')}}" type="button" class="btn bg-purple"><i class="fa fa-plus"></i> Tambah</a><br /><br />
  </div>
</div>
<div class="box box-purple">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Tgl Lahir</th>
          <th>Hari</th>
          <th>Jam</th>
          <th>Tempat</th>
          <th>J Kelamin</th>
          <th>Anak Ke</th>
          <th>Jenis Lahir</th>
          <th>Nama Ibu</th>
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
              <td>{{\Carbon\Carbon::parse($dt->tanggal)->format('d M Y')}}</td>
              <td>{{$dt->hari}}</td>
              <td>{{$dt->waktu}}</td>
              <td>{{$dt->tempat}}</td>
              <td>{{$dt->jkel}}</td>
              <td>{{$dt->anak_ke}}</td>
              <td>{{$dt->jenis_lahir}}</td>
              <td>{{$dt->nama_ibu}}</td>
              <td>
                <a href={{url("bayi/edit/{$dt->id}")}} class="btn btn-xs btn-success"><i class="fa fa-edit"></i> </a>
                <a href={{url("bayi/delete/{$dt->id}")}} class="btn btn-xs btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data Ini..?');"><i class="fa fa-trash"></i> </a>
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection