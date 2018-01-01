@extends('admin.layouts.default')

@section('csss')
@parent
<!-- //use custom css here -->
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('assets/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@stop

@section('javascript')
@parent
<!-- //use custom js / javascript here -->
<!-- datatables -->
<script src="{{ asset('assets/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
	$(function () {
		var table =  $('#tabelkategori1').DataTable({
			'paging'      : true,
			'lengthChange': false,
			'searching'   : true,
			'ordering'    : true,
			'info'        : true,
			'autoWidth'   : false,
			"fnDrawCallback": function ( oSettings ) {
				/* Need to redo the counters if filtered or sorted */
				if ( oSettings.bSorted || oSettings.bFiltered )
				{
					for ( var i=0, iLen=oSettings.aiDisplay.length ; i<iLen ; i++ )
					{
						$('td:eq(0)', oSettings.aoData[ oSettings.aiDisplay[i] ].nTr ).html( i+1 );
					}
				}
			},
			"columnDefs": [
			{
				"targets": [ 1 ],
				"visible": false,
				"searchable": false
			},
			]
		})
		$('#tabelkategori1 tbody').on( 'click', 'td.action .edit', function () {
			var id = $(this).data("id");
			window.location.href = "/admin/barang/kategori/kategori1/"+id;
		} );
		$('#tabelkategori1 tbody').on( 'click', 'td.action .hapus', function () {
			var id = $(this).data("id");
			var token = $(this).data("token");
			$.ajax({
				url: '/admin/barang/kategori/kategori1/delete',
				type: 'POST',
				data: {_token:token , "id_kategori1" : id },
				dataType: 'JSON',
				success: function(result) {
					
					if (result.success == 'true') {
						alert('Data Berhasil Di Hapus');
						window.location.href = "/admin/barang/kategori/kategori1";
					}else{
						alert('gagal delete');
					}
				}
			});
		} );
	})
</script>
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
		<form id="formkategori1" class="form-horizontal" action="{{ url('admin/barang/kategori/kategori1') }}" method="POST">
			{{ csrf_field() }}
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
		<div class="box-body">
			<div class="col-sm-12">
				<table id="tabelkategori1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Id</th>
							<th>Kode Kategori</th>
							<th>Nama Kategori</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($listskat1 as $list)
						<tr>
							<td>1</td>
							<td>{{ $list->id }}</td>
							<td>{{ $list->kode_kategori1 }}</td>
							<td>{{ $list->nama_kategori1 }}</td>
							<td class="action center">
								<button data-id="{{ $list->id }}" class="edit btn btn-warning btn-flat btn-xs"><i class="fa fa-pencil-square-o"></i> Edit</button> | 
								<button data-id="{{ $list->id }}" data-token="{{ csrf_token() }}" class="hapus btn btn-danger btn-flat btn-xs"><i class="fa fa-trash-o"></i> Hapus</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.col_sm_12 right -->
		</div><!-- /.box-body -->
		<div class="box-footer">
		</div>
		<!-- /.box-footer -->
	</div>
	<!-- /.box -->
</div>
@stop
