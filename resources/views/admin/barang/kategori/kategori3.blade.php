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
		var table =  $('#tabelkategori3').DataTable({
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
		$('#tabelkategori3 tbody').on( 'click', 'td.action .edit', function () {
			var id = $(this).data("id");
			window.location.href = "/admin/barang/kategori/kategori3/"+id;
		} );
		$('#tabelkategori3 tbody').on( 'click', 'td.action .hapus', function () {
			var id = $(this).data("id");
			var token = $(this).data("token");
			var kode = $(this).data("kode");
			var nama = $(this).data("nama");
			$("#modal-hapus").attr({
				'data-modaltoken' : token,
				'data-modalid' : id,
			});
			$(".modal-kode").text(kode);
			$(".modal-nama").text(nama);
		} );
		$("#modal-hapus").on('click', function() {
			var id = $(this).data("modalid");
			var token = $(this).data("modaltoken");
			$.ajax({
				url: '/admin/barang/kategori/kategori3/delete',
				type: 'POST',
				data: {_token:token , "id_kategori3" : id },
				dataType: 'JSON',
				success: function(result) {
					
					if (result.success == 'true') {
						$('#modal-danger').modal('toggle');						
						window.location.href = "/admin/barang/kategori/kategori3";
						alert('Data Berhasil Di Hapus');
					}else{
						alert('gagal delete');
					}
				}
			});
		});
		$(".select_kategori2").select2({
			placeholder: "Select a Kategori 2",
			allowClear: true
		});
	})
</script>
@stop

<!-- title website -->
@section('title', 'Kategori 3')

<!-- set menu sidebar active -->
@section('menu', 'kategori3')

<!-- //pageheader content -->
@section('pageheader', 'Kategori 3')

<!-- //subpageheader contente -->
@section('subpageheader', 'Data Kategori 3')

<!-- //breadcrumb -->
@section('breadcrumb')
@parent
<li><a href="{{ url('admin/barang') }}"><i class="fa fa-shopping-basket"></i> Barang</a></li>
<li><a href="{{ url('admin/barang/kategori') }}"><i class="fa fa-shopping-basket"></i> Kategori</a></li>
<li class="active">Kategori 3</li>
@stop

<!-- //main content -->
@section('content')
<!-- top column -->
<div class="col-md-6">
	<!-- Horizontal Form -->
	<div class="box box-info">
		<div class="box-header with-border">
			<h4 class="box-title">Input Kategori 3</h4>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form id="formkategori3" class="form-horizontal" action="{{ url('admin/barang/kategori/kategori3') }}" method="POST">
			{{ csrf_field() }}
			<div class="box-body">
				<div class="col-md-12">
					<div class="form-group">
						<label for="kode_kategori3" class="col-sm-4 control-label">Kode Kategori 3</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="kode_kategori3" name="kode_kategori3" placeholder="Kode Kategori">
						</div>
					</div>
					<div class="form-group">
						<label for="nama_kategori3" class="col-sm-4 control-label">Nama Kategori 3</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="nama_kategori3" name="nama_kategori3" placeholder="Nama Kategori">
						</div>
					</div>
					<div class="form-group">
						<label for="id_kategori2" class="col-sm-4 control-label">Pilih Kategori 1</label>
						<div class="col-sm-8">
							<select class="form-control select_kategori2" name="id_kategori2" id="id_kategori2" style="width: 100%;" data-placeholder="Select a Kategori 2">
								<option></option>
								@foreach ($listskat2 as $list2)
								<option value="{{ $list2->id }}">{{ $list2->kode_kategori2 }} | {{ $list2->nama_kategori2 }}</option>
								@endforeach
							</select>
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
			<h4 class="box-title">Daftar Kategori 3</h4>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<div class="col-sm-12">
				<table id="tabelkategori3" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Id</th>
							<th>Nama Kategori 1</th>
							<th>Nama Kategori 2</th>
							<th>Kode Kategori 3</th>
							<th>Nama Kategori 3</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($listskat2 as $list3)
						<tr>
							<td>1</td>
							<td>{{ $list3->id }}</td>
							<td>{{ $list3->nama_kategori1 }}</td>
							<td>{{ $list3->nama_kategori2 }}</td>
							<td>{{ $list3->kode_kategori3 }}</td>
							<td>{{ $list3->nama_kategori3 }}</td>
							<td class="action center">
								<button data-id="{{ $list3->id }}" class="edit btn btn-warning btn-flat btn-xs"><i class="fa fa-pencil-square-o"></i> Edit</button> | 
								<button 
									data-id="{{ $list3->id }}" 
									data-token="{{ csrf_token() }}" 
									data-kode="{{ $list3->kode_kategori3 }}" 
									data-nama="{{ $list3->nama_kategori3 }}" 
									class="hapus btn btn-danger btn-flat btn-xs" 
									data-toggle="modal" 
									data-target="#modal-danger"
								><i class="fa fa-trash-o"></i> Hapus</button>
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
<div class="modal modal-danger fade" id="modal-danger">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Konfirmasi Hapus Kategori 3</h4>
				</div>
				<div class="modal-body">
					<h1>Apakah anda yakin akan menghapus: </h1>
					<h4 class="modal-kode"></h2>
					<h4 class="modal-nama"></h2>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
					<button type="button" id="modal-hapus" class="btn btn-outline"><i class="fa fa-trash-o"></i> Hapus</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	@stop
