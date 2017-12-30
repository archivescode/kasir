@extends('admin.layouts.default')

@section('csss')
@parent
<!-- //use custom css here -->
@stop

@section('javascript')
@parent
<!-- //use custom js / javascript here -->

@stop

<!-- title website -->
@section('title', 'Kategori 1')

<!-- set menu sidebar active -->
@section('menu', 'kategori1')

<!-- //pageheader content -->
@section('pageheader', 'Kategori 1')

<!-- //subpageheader contente -->
@section('subpageheader', 'Data Kategori 1')

<!-- //breadcrumb -->
@section('breadcrumb')
@parent
<li><a href="{{ url('admin/barang') }}"><i class="fa fa-shopping-basket"></i> Barang</a></li>
<li><a href="{{ url('admin/barang/kategori') }}"><i class="fa fa-shopping-basket"></i> Kategori</a></li>
<li class="active">Kategori 1</li>
@stop

<!-- //main content -->
@section('content')
<!-- top column -->
<div class="col-md-6">
	<!-- Horizontal Form -->
	<div class="box box-info">
		<div class="box-header with-border">
			<h4 class="box-title">Input Kategori 1</h4>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form class="form-horizontal">
			<div class="box-body">
				<div class="col-md-12">
					<div class="form-group">
						<label for="kode_kategori1" class="col-sm-4 control-label">Kode Kategori 1</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="kode_kategori1" name="kode_kategori1" placeholder="Kode Kategori">
						</div>
					</div>
					<div class="form-group">
						<label for="nama_kategori1" class="col-sm-4 control-label">Nama Kategori 1</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="nama_kategori1" name="nama_kategori1" placeholder="Nama Kategori">
						</div>
					</div>
				</div><!-- /.col_sm_6 left -->
			</div><!-- /.box-body -->
			<div class="box-footer">
				<button type="reset" class="btn btn-default">BATAL</button>
				<button type="submit" class="btn btn-info pull-right">SIMPAN</button>
			</div>
			<!-- /.box-footer -->
		</form>
	</div>
	<!-- /.box -->
</div>
<div class="col-sm-12">
	<!-- Detail -->
	<div class="box box-info">
		<div class="box-header with-border">
			<h4 class="box-title">Daftar Kategori 1</h4>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form class="form-horizontal">
			<div class="box-body">
				<div class="col-sm-12">

				</div><!-- /.col_sm_12 right -->
			</div><!-- /.box-body -->
			<div class="box-footer">
				<button type="reset" class="btn btn-default">REFRESH</button>
				<button type="submit" class="btn btn-info pull-right">EXCEL</button>
			</div>
			<!-- /.box-footer -->
		</form>
	</div>
	<!-- /.box -->
</div>
	@stop
