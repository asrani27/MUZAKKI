@extends('layouts.back.master')

@section('content')
<div class="row">
  <div class="col-md-6">
    <a href="{{route('tambahpeserta')}}" type="button" class="btn bg-purple"><i class="fa fa-plus"></i> Tambah</a><br /><br />
  </div>
</div>
<div class="box box-purple">
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>No Kwitansi</th>
          <th>Tgl Transaksi</th>
          <th>Nama Peserta</th>
          <th>Nama Pegawai</th>
          <th>Jenis</th>
          <th>Alat</th>
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
              <td>{{$dt->no_kw}}</td>
              <td>{{$dt->tgl}}</td>
              <td>{{$dt->peserta}}</td>
              <td>{{$dt->pegawai}}</td>
              <td>{{$dt->jenis}}</td>
              <td>{{$dt->alat}}</td>
              <td>
                <a href={{url("peserta/edit/{$dt->id}")}} class="btn btn-xs btn-success"><i class="fa fa-edit"></i> </a>
                <a href={{url("peserta/delete/{$dt->id}")}} class="btn btn-xs btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data Ini..?');"><i class="fa fa-trash"></i> </a>
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection