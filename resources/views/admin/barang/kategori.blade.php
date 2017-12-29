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
@section('title', 'Dashboard Kategori')

<!-- //pageheader content -->
@section('pageheader', 'Kategori')

<!-- //subpageheader contente -->
@section('subpageheader', 'Data Kategori')

<!-- //breadcrumb -->
@section('breadcrumb')
@parent
<li><a href="{{ url('admin/barang') }}"><i class="fa fa-shopping-basket"></i> Barang</a></li>
<li class="active">Kategori</li>
@stop

<!-- //main content -->
@section('content')
<!-- right column -->
<div class="col-md-12">
	<!-- Horizontal Form -->
	<div class="box box-info">
		<div class="box-header with-border">
			<h4 class="box-title">Data Kategori</h4>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<div class="col-md-12">

			</div><!-- /.col_sm_12 left -->
		</div><!-- /.box-body -->
	</div>
	<!-- /.box -->
	@stop
