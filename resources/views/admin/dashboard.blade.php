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
<!-- iCheck 1.0.1 -->
<script src="{{ asset('assets/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('assets/select2/dist/js/select2.full.min.js') }}"></script>
<script type="text/javascript">
	$(function () {
		var table =  $('#tabelkerjaan').DataTable({
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
	    //Initialize Select2 Elements
	    $(".status").select2({
	    	placeholder: "Select a Status",
	    	allowClear: true
	    });
	    $('#tabelkerjaan tbody').on( 'click', 'td', function () {
	    	$('#idedit').val( table.cell( this,1 ).data() );
	    	$('#juduledit').val( table.cell( this,2 ).data() );
	    	$('#isiedit').val( table.cell( this,3 ).data() );
	    	$('#statusedit').val(table.cell( this,4 ).data()).trigger('change');
	    } );
	})
</script>
@stop

<!-- title website -->
@section('title', 'Dashboard')

<!-- set menu sidebar active -->
@section('menu', 'adminDashboard')

<!-- //pageheader content -->
@section('pageheader', 'Dashboard')
<!-- //subpageheader contente -->
@section('subpageheader', 'Sub Dashboard')
<!-- //breadcrumb -->
@section('breadcrumb')
@parent

@stop
<!-- //main content -->
@section('content')
<div class="col-sm-12">
	<!-- list pekerjaan -->
	<!-- belum dikerjakan -->
	<div class="col-md-3">
		<!-- Horizontal Form -->
		<div class="box box-info">
			<div class="box-header with-border">
				<h4 class="box-title">Belum Dikerjakan</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="col-md-12">
					<div class="belum">
						@foreach ($lists as $list)
						@if ($list->status == 'belum')
						<div class="callout callout-danger" id="{{ $list->id }}">
							<p>{{ $list->judul }}</p>
						</div>
						@endif
						@endforeach
					</div><!-- class list -->
				</div><!-- /.col_sm_3 left -->
			</div><!-- /.box-body -->
			<div class="box-footer">
			</div>
			<!-- /.box-footer -->
		</div>
		<!-- /.box -->
	</div>

	<!-- sedang di kerjakan -->
	<div class="col-md-3">
		<!-- Horizontal Form -->
		<div class="box box-info">
			<div class="box-header with-border">
				<h4 class="box-title">Sedang Dikerjakan</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="col-md-12">
					<div class="sedang">
						@foreach ($lists as $list)
						@if ($list->status == 'sedang')
						<div class="callout callout-warning" id="{{ $list->id }}">
							<p>{{ $list->judul }}</p>
						</div>
						@endif
						@endforeach
					</div><!-- class list -->
				</div><!-- /.col_sm_3 left -->
			</div><!-- /.box-body -->
			<div class="box-footer">
			</div>
			<!-- /.box-footer -->
		</div>
		<!-- /.box -->
	</div>

	<!-- review di kerjakan -->
	<div class="col-md-3">
		<!-- Horizontal Form -->
		<div class="box box-info">
			<div class="box-header with-border">
				<h4 class="box-title">Review</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="col-md-12">
					<div class="review">
						@foreach ($lists as $list)
						@if ($list->status == 'review')
						<div class="callout callout-info" id="{{ $list->id }}">
							<p>{{ $list->judul }}</p>
						</div>
						@endif
						@endforeach
					</div><!-- class list -->
				</div><!-- /.col_sm_3 left -->
			</div><!-- /.box-body -->
			<div class="box-footer">
			</div>
			<!-- /.box-footer -->
		</div>
		<!-- /.box -->
	</div>

	<!-- selese di kerjakan -->
	<div class="col-md-3">
		<!-- Horizontal Form -->
		<div class="box box-info">
			<div class="box-header with-border">
				<h4 class="box-title">Selese Dikerjakan</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="col-md-12">
					<div class="selese">
						@foreach ($lists as $list)
						@if ($list->status == 'selese')
						<div class="callout callout-success" id="{{ $list->id }}">
							<p>{{ $list->judul }}</p>
						</div>
						@endif
						@endforeach
					</div><!-- class list -->
				</div><!-- /.col_sm_3 left -->
			</div><!-- /.box-body -->
			<div class="box-footer">
			</div>
			<!-- /.box-footer -->
		</div>
		<!-- /.box -->
	</div>
</div>
<!-- input kerjaan -->
<div class="col-md-6">
	<!-- Horizontal Form -->
	<div class="box box-info">
		<div class="box-header with-border">
			<h4 class="box-title">Input Pekerjaan</h4>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form class="form-horizontal" action="{{ url('admin/todo/store') }}" method="POST">
			{{ csrf_field() }}
			
			<div class="box-body">
				<div class="col-md-12">
					<div class="form-group">
						<label for="judul" class="col-sm-4 control-label">Judul List</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="judul" name="judul" placeholder="Judul List">
						</div>
					</div>
					<div class="form-group">
						<label for="isi" class="col-sm-4 control-label">Isi Pekerjaan</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="isi" name="isi" placeholder="Isi Pekerjaan">
						</div>
					</div>
				</div><!-- /.col_sm_12 left -->
			</div><!-- /.box-body -->
			<div class="box-footer">
				<button type="reset" class="btn btn-default">BATAL</button>
				<button type="submit" class="btn btn-info pull-right">SIMPAN</button>
			</div>
			<!-- /.box-footer -->
		</form>
		<!-- end form -->
	</div>
	<!-- /.box -->
</div>
<!-- ubah status kerjaan -->
<div class="col-md-6">
	<!-- Horizontal Form -->
	<div class="box box-info">
		<div class="box-header with-border">
			<h4 class="box-title">Ubah Status Pekerjaan</h4>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form class="form-horizontal" action="{{ url('admin/todo/edit') }}" method="POST">
			{{ csrf_field() }}
			<input type="hidden" id="idedit" name="idedit">
			<div class="box-body">
				<div class="col-md-12">
					<div class="form-group">
						<label for="judul" class="col-sm-4 control-label">Judul List</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="juduledit" name="juduledit" placeholder="Judul List">
						</div>
					</div>
					<div class="form-group">
						<label for="isi" class="col-sm-4 control-label">Isi Pekerjaan</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="isiedit" name="isiedit" placeholder="Isi Pekerjaan">
						</div>
					</div>
					<div class="form-group">
						<label for="status" class="col-sm-4 control-label">Status</label>
						<div class="col-sm-8">
							<select class="form-control status" name="statusedit" id="statusedit" style="width: 100%;">
								<option></option>
								<option value="belum">Belum di Kerjakan</option>
								<option value="sedang">Sedang di Kerjakan</option>
								<option value="review">Sedang di Review</option>
								<option value="selese">Sudah Selese</option>
							</select>
						</div>
					</div>
				</div><!-- /.col_sm_12 left -->
			</div><!-- /.box-body -->
			<div class="box-footer">
				<button type="reset" class="btn btn-default">BATAL</button>
				<button type="submit" class="btn btn-info pull-right">SIMPAN</button>
			</div>
			<!-- /.box-footer -->
		</form>
		<!-- end form -->
	</div>
	<!-- /.box -->
</div>
<!-- daftar kerjaan -->
<div class="col-md-12">
	<!-- Horizontal Form -->
	<div class="box box-info">
		<div class="box-header with-border">
			<h4 class="box-title">Daftar Pekerjaan</h4>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<div class="box-body">
			<div class="col-md-12">
				<table id="tabelkerjaan" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Id</th>
							<th>Judul</th>
							<th>Isi</th>
							<th>Status</th>
							<th>Update</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($lists as $list)
						<tr>
							<td>1</td>
							<td>{{ $list->id }}</td>
							<td>{{ $list->judul }}</td>
							<td>{{ $list->isi }}</td>
							<td>{{ $list->status }}</td>
							<td>{{ $list->updated_at }}</td>
							<td><button class="btn btn-block btn-success btn-flat btn-xs">EDIT</button></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.col_sm_12 left -->
		</div><!-- /.box-body -->
		<div class="box-footer">
		</div>
		<!-- /.box-footer -->
		<!-- end form -->
	</div>
	<!-- /.box -->
</div>
@stop
