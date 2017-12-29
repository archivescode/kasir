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
    <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'adminDashboard') class="active"  @endif >
      <a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
    </li>
    <!-- Barang -->
    <li class="treeview @if (!empty($__env->yieldContent('menu')) && ($__env->yieldContent('menu') === 'inputBarang' || $__env->yieldContent('menu') === 'daftarBarang' || $__env->yieldContent('menu') === 'kategori1' || $__env->yieldContent('menu') === 'kategori2' || $__env->yieldContent('menu') === 'kategori3')) menu-open @endif">
      <a href="{{ url('admin/barang') }}"><i class="fa fa-shopping-basket"></i> <span>Barang</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" @if (!empty($__env->yieldContent('menu')) && ($__env->yieldContent('menu') === 'inputBarang' || $__env->yieldContent('menu') === 'daftarBarang' || $__env->yieldContent('menu') === 'kategori1' || $__env->yieldContent('menu') === 'kategori2' || $__env->yieldContent('menu') === 'kategori3')) style="display:block;" @endif>

        <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'inputBarang') class="active" @endif>
          <a href="{{ url('admin/barang/input') }}"><i class="fa fa-circle-o"></i> Input Barang</a>
        </li>

        <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'daftarBarang') class="active" @endif>
          <a href="{{ url('admin/barang/daftar') }}"><i class="fa fa-circle-o"></i> Daftar Barang</a>
        </li>

        <li class="treeview @if (!empty($__env->yieldContent('menu')) && ($__env->yieldContent('menu') === 'kategori1' || $__env->yieldContent('menu') === 'kategori2' || $__env->yieldContent('menu') === 'kategori3')) menu-open @endif">
          <a href="{{ url('admin/barang/kategori') }}"><i class="fa fa-circle-o"></i> Kategori
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" @if (!empty($__env->yieldContent('menu')) && ($__env->yieldContent('menu') === 'kategori1' || $__env->yieldContent('menu') === 'kategori2' || $__env->yieldContent('menu') === 'kategori3')) style="display:block;"      @endif>
            <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'kategori1') class="active" @endif>
              <a href="{{ url('admin/barang/kategori1') }}"><i class="fa fa-circle-o"></i> Kategori 1</a>
            </li>
            <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'kategori2') class="active" @endif>
              <a href="{{ url('admin/barang/kategori2') }}"><i class="fa fa-circle-o"></i> Kategori 2</a>
            </li>
            <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'kategori3') class="active" @endif>
              <a href="{{ url('admin/barang/kategori3') }}"><i class="fa fa-circle-o"></i> Kategori 3</a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <!-- Pembelian -->
    <li
    class="treeview @if (!empty($__env->yieldContent('menu')) && ($__env->yieldContent('menu') === 'inputPembelian' || $__env->yieldContent('menu') === 'daftarPembelian')) menu-open @endif">
    <a href="{{ url('admin/pembelian') }}"><i class="fa fa-shopping-basket"></i> <span>Pembelian</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'inputPembelian') class="active" @endif>
        <a href="{{ url('admin/pembelian/input') }}"><i class="fa fa-circle-o"></i> Input Pembelian</a>
      </li>
      <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'daftarPembelian') class="active" @endif>
        <a href="{{ url('admin/pembelian/daftar') }}"><i class="fa fa-circle-o"></i> Daftar Pembelian</a>
      </li>
    </ul>
  </li>

  <!-- Penjualan -->
  <li
  class="treeview @if (!empty($__env->yieldContent('menu')) && ($__env->yieldContent('menu') === 'inputPenjualan' || $__env->yieldContent('menu') === 'daftarPenjualan')) menu-open @endif">
  <a href="{{ url('admin/penjualan') }}"><i class="fa fa-shopping-basket"></i> <span>Penjualan</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'inputPenjualan') class="active" @endif>
      <a href="{{ url('admin/penjualan/input') }}"><i class="fa fa-circle-o"></i> Input Penjualan</a>
    </li>
    <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'daftarPenjualan') class="active" @endif>
      <a href="{{ url('admin/penjualan/daftar') }}"><i class="fa fa-circle-o"></i> Daftar Penjualan</a>
    </li>
  </ul>
</li>

<!-- Pelanggan -->
<li
class="treeview @if (!empty($__env->yieldContent('menu')) && ($__env->yieldContent('menu') === 'inputPelanggan' || $__env->yieldContent('menu') === 'daftarPelanggan')) menu-open @endif">
<a href="{{ url('admin/pelanggan') }}"><i class="fa fa-shopping-basket"></i> <span>Pelanggan</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
  <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'inputPelanggan') class="active" @endif>
    <a href="{{ url('admin/pelanggan/input') }}"><i class="fa fa-circle-o"></i> Input Pelanggan</a>
  </li>
  <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'daftarPelanggan') class="active" @endif>
    <a href="{{ url('admin/pelanggan/daftar') }}"><i class="fa fa-circle-o"></i> Daftar Pelanggan</a>
  </li>
</ul>
</li>

<!-- Suplyer -->
<li
class="treeview @if (!empty($__env->yieldContent('menu')) && ($__env->yieldContent('menu') === 'inputSuplyer' || $__env->yieldContent('menu') === 'daftarSuplyer')) menu-open @endif">
<a href="{{ url('admin/suplyer') }}"><i class="fa fa-shopping-basket"></i> <span>Suplyer</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
  <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'inputSuplyer') class="active" @endif>
    <a href="{{ url('admin/suplyer/input') }}"><i class="fa fa-circle-o"></i> Input Suplyer</a>
  </li>
  <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'daftarSuplyer') class="active" @endif>
    <a href="{{ url('admin/suplyer/daftar') }}"><i class="fa fa-circle-o"></i> Daftar Suplyer</a>
  </li>
</ul>
</li>

<!-- Karyawan -->
<li
class="treeview @if (!empty($__env->yieldContent('menu')) && ($__env->yieldContent('menu') === 'inputKaryawan' || $__env->yieldContent('menu') === 'daftarKaryawan')) menu-open @endif">
<a href="{{ url('admin/karyawan') }}"><i class="fa fa-shopping-basket"></i> <span>Karyawan</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
  <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'inputKaryawan') class="active" @endif>
    <a href="{{ url('admin/karyawan/input') }}"><i class="fa fa-circle-o"></i> Input Karyawan</a>
  </li>
  <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'daftarKaryawan') class="active" @endif>
    <a href="{{ url('admin/karyawan/daftar') }}"><i class="fa fa-circle-o"></i> Daftar Karyawan</a>
  </li>
</ul>
</li>

<!-- Stok -->
<li
class="treeview @if (!empty($__env->yieldContent('menu')) && ($__env->yieldContent('menu') === 'simulasiStok' || $__env->yieldContent('menu') === 'daftarStok')) menu-open @endif">
<a href="{{ url('admin/stok') }}"><i class="fa fa-shopping-basket"></i> <span>Stok</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
  <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'simulasiStok') class="active" @endif>
    <a href="{{ url('admin/stok/simulasi') }}"><i class="fa fa-circle-o"></i> Simulasi Stok</a>
  </li>
  <li @if (!empty($__env->yieldContent('menu')) && $__env->yieldContent('menu') === 'daftarStok') class="active" @endif>
    <a href="{{ url('admin/stok/daftar') }}"><i class="fa fa-circle-o"></i> Daftar Stok</a>
  </li>
</ul>
</li>

</ul>
<!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
