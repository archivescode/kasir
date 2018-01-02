@extends('admin.layouts.default')

@section('csss')
@parent
<!-- //use custom css here -->
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('assets/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('assets/select2/dist/css/select2.min.css') }}">
@stop

@section('javascript')
@parent
<!-- //use custom js / javascript here -->
<!-- datatables -->
<script src="{{ asset('assets/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('assets/select2/dist/js/select2.full.min.js') }}"></script>
<script type="text/javascript">
	$(function () {
		$(".select_kategori1").select2({
			placeholder: "Select a Kategori 1",
		});
		$(".select_kategori1").val('{{ $kategoris2->id_kategori1 }}').trigger("change");
	})
</script>
@stop

<!-- title website -->
@section('title', 'Kategori 2')

<!-- set menu sidebar active -->
@section('menu', 'kategori2')

<!-- //pageheader content -->
@section('pageheader', 'Kategori 2')

<!-- //subpageheader contente -->
@section('subpageheader', 'Data Kategori 2')

<!-- //breadcrumb -->
@section('breadcrumb')
@parent
<li><a href="{{ url('admin/barang') }}"><i class="fa fa-shopping-basket"></i> Barang</a></li>
<li><a href="{{ url('admin/barang/kategori') }}"><i class="fa fa-shopping-basket"></i> Kategori</a></li>
<li class="active">Kategori 2</li>
@stop

<!-- //main content -->
@section('content')
<!-- top column -->
<div class="col-md-6">
	<!-- Horizontal Form -->
	<div class="box box-info">
		<div class="box-header with-border">
			<h4 class="box-title">Input Kategori 2</h4>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form id="formkategori2" class="form-horizontal" action="{{ url('admin/barang/kategori/kategori2/edit') }}" method="POST">
			{{ csrf_field() }}
			<input type="hidden" name="id_kategori2" id="id_kategori2" value="{{ $kategoris2->id }}">
			<div class="box-body">
				<div class="col-md-12">
					<div class="form-group">
						<label for="kode_kategori2" class="col-sm-4 control-label">Kode Kategori 2</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="kode_kategori2" name="kode_kategori2" placeholder="Kode Kategori" value="{{ $kategoris2->kode_kategori2 }}">
						</div>
					</div>
					<div class="form-group">
						<label for="nama_kategori2" class="col-sm-4 control-label">Nama Kategori 2</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="nama_kategori2" name="nama_kategori2" placeholder="Nama Kategori" value="{{ $kategoris2->nama_kategori2 }}">
						</div>
					</div>
					<div class="form-group">
						<label for="id_kategori1" class="col-sm-4 control-label">Pilih Kategori 1</label>
						<div class="col-sm-8">
							<select class="form-control select_kategori1" name="id_kategori1" id="id_kategori1" style="width: 100%;" data-placeholder="Select a Kategori 1">
								<option></option>
								@foreach ($listskat1 as $list1)
								<option value="{{ $list1->id }}">{{ $list1->kode_kategori1 }} | {{ $list1->nama_kategori1 }}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div><!-- /.col_sm_6 left -->
			</div><!-- /.box-body -->
			<div class="box-footer">
				<button type="reset" class="btn btn-default">BATAL</button>
				<button type="submit" class="btn btn-info pull-right">EDIT</button>
			</div>
			<!-- /.box-footer -->
		</form>
	</div>
	<!-- /.box -->
</div>
@stop
