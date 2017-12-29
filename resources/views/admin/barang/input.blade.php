@extends('admin.layouts.default')

@section('csss')
@parent
<!-- //use custom css here -->
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('assets/iCheck/all.css') }}">
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('assets/select2/dist/css/select2.min.css') }}">
<!-- Dropify -->
<link rel="stylesheet" href="{{ asset('assets/dropify/dist/css/dropify.min.css') }}">
@stop

@section('javascript')
@parent
<!-- //use custom js / javascript here -->
<!-- iCheck 1.0.1 -->
<script src="{{ asset('assets/iCheck/icheck.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('assets/select2/dist/js/select2.full.min.js') }}"></script>
<!-- Dropify -->
<script src="{{ asset('assets/dropify/dist/js/dropify.min.js') }}"></script>
<!-- CK Editor -->
<script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
//iCheck for checkbox and radio inputs
$('input[type="radio"].minimal').iCheck({
	checkboxClass: 'icheckbox_minimal-blue',
	radioClass   : 'iradio_minimal-blue'
});
//Initialize Select2 Elements
$(".select_kategori1").select2({
	placeholder: "Select a Kategori 1",
	allowClear: true
});
$(".select_kategori2").select2({
	placeholder: "Select a Kategori 2",
	allowClear: true
});
$(".select_kategori3").select2({
	placeholder: "Select a Kategori 3",
	allowClear: true
});
$(".select_type").select2({
	placeholder: "Select Type",
	allowClear: true
});
$(".select_sup").select2({
	placeholder: "Select a Suplyer",
	allowClear: true
});

//Initialize Dropify Elements
$('.dropify').dropify();

 // Replace the <textarea id="deskripsi1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('deskripsi')

</script>
@stop

<!-- title website -->
@section('title', 'Input Barang')

<!-- //pageheader content -->
@section('pageheader', 'Barang')

<!-- //subpageheader contente -->
@section('subpageheader', 'Input Data Barang')

<!-- //breadcrumb -->
@section('breadcrumb')
@parent
<li><a href="{{ url('admin/barang') }}"><i class="fa fa-shopping-basket"></i> Barang</a></li>
<li class="active">Input Data Barang</li>
@stop

<!-- //main content -->
@section('content')
<!-- right column -->
<div class="col-md-12">
	<!-- Horizontal Form -->
	<div class="box box-info">
		<div class="box-header with-border">
			<h4 class="box-title">INPUT DATA BARANG</h4>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form class="form-horizontal">
			<div class="box-body">
				<div class="col-md-6">
					<div class="form-group">
						<label for="kode_kategori1" class="col-sm-4 control-label">Kategori 1</label>
						<div class="col-sm-8">
							<select class="form-control select_kategori1" name="kode_kategori1" id="kode_kategori1" style="width: 100%;">
								<option></option>
								<option>Alabama</option>
								<option>Alaska</option>
								<option>California</option>
								<option>Delaware</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Washington</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="kode_kategori2" class="col-sm-4 control-label">Kategori 2</label>
						<div class="col-sm-8">
							<select class="form-control select_kategori2" name="kode_kategori2" id="kode_kategori2" style="width: 100%;" data-placeholder="Select a Kategori 2">
								<option></option>
								<option>Alabama</option>
								<option>Alaska</option>
								<option>California</option>
								<option>Delaware</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Washington</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="kode_kategori3" class="col-sm-4 control-label">Kategori 1</label>
						<div class="col-sm-8">
							<select class="form-control select_kategori3" name="kode_kategori3" id="kode_kategori3" style="width: 100%;" data-placeholder="Select a Kategori 3">
								<option></option>
								<option>Alabama</option>
								<option>Alaska</option>
								<option>California</option>
								<option>Delaware</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Washington</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="kode_barang" class="col-sm-4 control-label">Kode Barang</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Kode Barang">
						</div>
					</div>
					<div class="form-group">
						<label for="nama_barang" class="col-sm-4 control-label">Nama Barang</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
						</div>
					</div>
					<div class="form-group">
						<label for="kemasan" class="col-sm-4 control-label">Kemasan</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="kemasan" name="kemasan" placeholder="Kemasan Terkecil">
						</div>
					</div>
					<div class="form-group">
						<label for="hpp" class="col-sm-4 control-label">Hpp</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="hpp" name="hpp" placeholder="Harga Beli Terakhir">
						</div>
					</div>
					<!-- PPN -->
					<div class="form-group">
						<label for="hpp" class="col-sm-4 control-label">PPN</label>
						<div class="col-sm-8">
							<label>
								<input type="radio" id="ppn" name="ppn" class="minimal" checked>
								Tidak
							</label>
							<label>
								<input type="radio" id="ppn" name="ppn" class="minimal">
								Ya
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="hpp_stl_ppn" class="col-sm-4 control-label">Hpp Setelah PPN</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="hpp_stl_ppn" name="hpp_stl_ppn" placeholder="Harga Beli Terakhir Setelah PPN">
						</div>
					</div>
					<div class="form-group">
						<label for="margin" class="col-sm-4 control-label">Margin(%)</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="margin" name="margin" placeholder="Margin">
						</div>
					</div>
					<div class="form-group">
						<label for="harga_jual" class="col-sm-4 control-label">Harga Jual</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="harga_jual" name="harga_jual" placeholder="Harga Jual">
						</div>
					</div>
					<div class="form-group">
						<label for="diskon" class="col-sm-4 control-label">Diskon(%)</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="diskon" name="diskon" placeholder="Diskon Jual">
						</div>
					</div>
					<div class="form-group">
						<label for="harga_konsumen" class="col-sm-4 control-label">Harga Konsumen</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="harga_konsumen" name="harga_konsumen" placeholder="Harga Jual Konsumen">
						</div>
					</div>
					<div class="form-group">
						<label for="kode_sup" class="col-sm-4 control-label">Suplyer</label>
						<div class="col-sm-8">
							<select class="form-control select_sup" name="kode_sup" id="kode_sup" style="width: 100%;" data-placeholder="Select a Suplyer">
								<option></option>
								<option>Alabama</option>
								<option>Alaska</option>
								<option>California</option>
								<option>Delaware</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Washington</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="type" class="col-sm-4 control-label">Type</label>
						<div class="col-sm-8">
							<select class="form-control select_type" id="type" name="type[]" multiple="multiple" style="width: 100%;" data-placeholder="Select a Type">
								<option></option>
								<option>Alabama</option>
								<option>Alaska</option>
								<option>California</option>
								<option>Delaware</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Washington</option>
							</select>
						</div>
					</div>
					<!-- Kondisi -->
					<div class="form-group">
						<label for="kondisi" class="col-sm-4 control-label">Kondisi</label>
						<div class="col-sm-8">
							<label>
								<input type="radio" id="kondisi" name="kondisi" class="minimal" checked>
								Baru
							</label>
							<label>
								<input type="radio" id="kondisi" name="kondisi" class="minimal">
								Bekas
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="berat" class="col-sm-4 control-label">Berat(Gram)</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="berat" name="berat" placeholder="Berat (Gram)">
						</div>
					</div>
					<div class="form-group">
						<label for="stok_minimal" class="col-sm-4 control-label">Stok Minimal</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="stok_minimal" name="stok_minimal" placeholder="Stok Minimal">
						</div>
					</div>
					<div class="form-group">
						<label for="barcode" class="col-sm-4 control-label">Barcode</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="barcode" name="barcode" placeholder="Barcode">
						</div>
					</div>
					<div class="form-group">
						<label for="qrcode" class="col-sm-4 control-label">Qrcode</label>

						<div class="col-sm-8">
							<input type="text" class="form-control" id="qrcode" name="qrcode" placeholder="Qrcode">
						</div>
					</div>
					
				</div><!-- /.col_sm_6 left -->

				<div class="col-md-6">
					<div class="form-group">						
						<div class="col-sm-12">
							<label for="gambar" class="control-label col-sm-12" style="padding-top:0px;padding-bottom: 15px;">Upload Gambar</label>
							<div class="col-sm-12">
								<div class="col-sm-6">
									<input type="file" name="gambar1" class="form-control dropify" />
								</div>
								<div class="col-sm-6">
									<input type="file" name="gambar2" class="form-control dropify" />
								</div>
							</div>
							<div class="col-sm-12" style="margin-top: 10px;">
								<div class="col-sm-6">
									<input type="file" name="gambar3" class="form-control dropify" />
								</div>
								<div class="col-sm-6">
									<input type="file" name="gambar4" class="form-control dropify" />
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label for="video" class="control-label">Video</label>
							<div class="input-group input-group-sm">
								<input type="text" class="form-control">
								<span class="input-group-btn">
									<button type="button" class="btn btn-info btn-flat">View</button>
								</span>
							</div>
						</div>
						<!--
						<div class="col-sm-12" style="margin-top: 20px;">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
							</div>
						</div>-->
					</div>
				</div><!-- /.col_sm_6 right -->
				<div class="col-sm-12">
					<div class="form-group">						
						<div class="col-sm-12">
							<label for="deskripsi" class="control-label" style="padding-top:0px;padding-bottom: 15px;">Deskripsi Barang</label>
							<textarea id="deskripsi" name="deskripsi" class="form-control" rows="10" cols="80">
								Deskripsi Lengkap Barang
							</textarea>
						</div>
					</div>
				</div><!-- /.col_sm_12 right -->
			</div><!-- /.box-body -->
			<div class="box-footer">
				<button type="reset" class="btn btn-default">BATAL</button>
				<button type="submit" class="btn btn-info pull-right">SIMPAN</button>
			</div>
			<!-- /.box-footer -->
		</form>
	</div>
	<!-- /.box -->
	@stop
