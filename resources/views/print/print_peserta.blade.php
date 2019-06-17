<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>DINAS PENGENDALI PENDUDUK DAN KE</title>
<style type="text/css">
.auto-style1 {
	text-align: center;
}
.auto-style2 {
	border-color: #000000;
	border-width: 0;
}
.auto-style3 {
	text-align: center;
	border-style: solid;
	border-width: 1px;
	background-color: #CECEC9;
}
.auto-style7 {
	border-style: solid;
	border-width: 1px;
}
</style>
</head>

<body>

<h2 class="auto-style1">DINAS PENGENDALI PENDUDUK DAN KELUARGA BERENCANA<br />
KABUPATEN HULU SUNGAI UTARA</h2>
<hr />
<p class="auto-style1"><strong>Laporan Data Peserta</strong></p>
<table align="left" cellpadding="3" cellspacing="0" class="auto-style2" style="width: 100%">
	<tr>
		<td class="auto-style3"><strong>No</strong></td>
		<td class="auto-style3"><strong>Nama Peserta</strong></td>
		<td class="auto-style3"><strong>Nama Pasangan</strong></td>
		<td class="auto-style3"><strong>Tgl Lahir</strong></td>
		<td class="auto-style3"><strong>umur</strong></td>
		<td class="auto-style3"><strong>Tgl Daftar</strong></td>
	</tr>
	<?php
	$no =1;
	?>
	@foreach ($data as $item)
	<tr>
		<td class="auto-style7">{{$no++}}</td>
		<td class="auto-style7">{{$item->nama_peserta}}</td>
		<td class="auto-style7">{{$item->nama_pasangan}}</td>
		<td class="auto-style7">{{$item->tgl_lahir}}</td>
		<td class="auto-style7">{{$item->umur}}</td>
		<td class="auto-style7">{{$item->tgl_daftar}}</td>
	</tr>
	@endforeach
	
</table>

</body>
<script>
	$( document ).ready(function() {
		  window.print();
	});
</script>

</html>
