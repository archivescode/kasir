<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{ asset('assets/adminlte/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Sarono</p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
    </div>
  </form>
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">Menu</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <!-- Barang -->
    <li class="treeview">
      <a href="{{ url('admin/barang') }}"><i class="fa fa-shopping-basket"></i> <span>Barang</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('admin/barang/input') }}">Input Barang</a></li>
        <li><a href="{{ url('admin/barang/daftar') }}">Daftar Barang</a></li>
      </ul>
    </li>
    <!-- Pembelian -->
    <li class="treeview">
      <a href="{{ url('admin/pembelian') }}"><i class="fa fa-shopping-basket"></i> <span>Pembelian</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('admin/pembelian/input') }}">Input Pembelian</a></li>
        <li><a href="{{ url('admin/pembelian/daftar') }}">Daftar Pembelian</a></li>
      </ul>
    </li>

    <!-- Penjualan -->
    <li class="treeview">
      <a href="{{ url('admin/penjualan') }}"><i class="fa fa-shopping-basket"></i> <span>Penjualan</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('admin/penjualan/input') }}">Input Penjualan</a></li>
        <li><a href="{{ url('admin/penjualan/daftar') }}">Daftar Penjualan</a></li>
      </ul>
    </li>

    <!-- Pelanggan -->
    <li class="treeview">
      <a href="{{ url('admin/pelanggan') }}"><i class="fa fa-shopping-basket"></i> <span>Pelanggan</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('admin/pelanggan/input') }}">Input Pelanggan</a></li>
        <li><a href="{{ url('admin/pelanggan/daftar') }}">Daftar Pelanggan</a></li>
      </ul>
    </li>

    <!-- Suplyer -->
    <li class="treeview">
      <a href="{{ url('admin/suplyer') }}"><i class="fa fa-shopping-basket"></i> <span>Suplyer</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('admin/suplyer/input') }}">Input Suplyer</a></li>
        <li><a href="{{ url('admin/suplyer/daftar') }}">Daftar Suplyer</a></li>
      </ul>
    </li>

    <!-- Karyawan -->
    <li class="treeview">
      <a href="{{ url('admin/karyawan') }}"><i class="fa fa-shopping-basket"></i> <span>Karyawan</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('admin/karyawan/input') }}">Input Karyawan</a></li>
        <li><a href="{{ url('admin/karyawan/daftar') }}">Daftar Karyawan</a></li>
      </ul>
    </li>

  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
