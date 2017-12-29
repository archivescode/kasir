@extends('admin.layouts.default')

@section('csss')
@parent
<!-- //use custom css here -->
@stop

@section('javascript')
@parent
<!-- //use custom js / javascript here -->
<script type="text/javascript">

</script>
@stop

<!-- title website -->
@section('title', 'Template')

<!-- //pageheader content -->
@section('pageheader', 'Template')

<!-- //subpageheader contente -->
@section('subpageheader', 'Template Kosong')

<!-- //breadcrumb -->
@section('breadcrumb')
@parent
<li><a href="{{ url('admin/template') }}"><i class="fa fa-shopping-basket"></i> Template</a></li>
<li class="active">Template Kosong</li>
@stop

<!-- //main content -->
@section('content')
<!-- right column -->
<div class="col-md-12">
	<!-- Horizontal Form -->
	<div class="box box-info">
		<div class="box-header with-border">
			<h4 class="box-title">Template Kosong</h4>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form class="form-horizontal">
			<div class="box-body">
				<div class="col-md-6">
					
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
	<!-- Detail -->
	<div class="box box-info">
		<div class="box-header with-border">
			<h4 class="box-title">DAFTAR TEMPLATE</h4>
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
				<button type="submit" class="btn btn-info pull-right">EXCELL</button>
			</div>
			<!-- /.box-footer -->
		</form>
	</div>
	<!-- /.box -->
	@stop
