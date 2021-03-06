<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <center><img src="{{url('LTE/logo.png')}}" class="img" widht="60px" height="60px" alt="User Image"></center>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU UTAMA</li>
      
      @if(Auth::user()->username == 'pimpinan')
      <li><a href="{{route('laporan')}}"><i class="fa fa-file"></i> Laporan</a></li>
      <li><a href="{{route('logout')}}"><i class="fa fa-close"></i> Logout</a></li>
      @else
      <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{route('peserta')}}"><i class="fa fa-users"></i> Peserta</a></li>
      <li><a href="{{route('rutin')}}"><i class="fa fa-users"></i> Rutin/NonRutin</a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-toggle-down"></i>
          <span>Master Data</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('agama')}}"><i class="fa fa-circle"></i> Agama</a></li>
          <li><a href="{{route('kecamatan')}}"><i class="fa fa-circle"></i> Kecamatan</a></li>
          <li><a href="{{route('jenis')}}"><i class="fa fa-circle"></i> Jenis</a></li>
          <li><a href="{{route('alat')}}"><i class="fa fa-circle"></i> Alat</a></li>
          <li><a href="{{route('pegawai')}}"><i class="fa fa-circle"></i>Pegawai</a></li>
          <li><a href="{{route('jabatan')}}"><i class="fa fa-circle"></i> Jabatan</a></li> </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-toggle-down"></i>
          <span>Transaksi</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('transaksi')}}"><i class="fa fa-circle"></i> Transaksi</a></li>
          <li><a href="{{route('ibuhamil')}}"><i class="fa fa-circle"></i> Ibu Hamil</a></li>
          <li><a href="{{route('bayi')}}"><i class="fa fa-circle"></i> Bayi lahir</a></li>
          <li><a href="{{route('penyuluhan')}}"><i class="fa fa-circle"></i> Penyuluhan</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-toggle-down"></i>
          <span>History/Riwayat</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('riwayatpasien')}}"><i class="fa fa-circle"></i> Peserta/Pasien</a></li>
          <li><a href="{{route('riwayatibuhamil')}}"><i class="fa fa-circle"></i> Ibu Hamil</a></li>
        </ul>
      </li>
      <li><a href="{{route('laporan')}}"><i class="fa fa-file"></i> Laporan</a></li>
      <li><a href="{{route('user')}}"><i class="fa fa-user"></i> Account</a></li>
      <li><a href="{{route('logout')}}"><i class="fa fa-close"></i> Logout</a></li>
      @endif
    </ul>
  </section> 
  <!-- /.sidebar -->
</aside>