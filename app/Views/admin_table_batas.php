<?= $this->extend('home/adminindex'); ?>
<?= $this->section('admincontent'); ?>


<head>

	<link rel="stylesheet" href=" https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" />
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- DataTables -->
	<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
		type="text/css" />
	<link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet"
		type="text/css" />
	<!-- Responsive datatable examples -->
	<link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet"
		type="text/css" />

	<link rel="stylesheet" href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="assets/css/icons.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>DataTabel</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="admingis">Home</a></li>
					<li class="breadcrumb-item active">table_batas</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="content">
	<div class="container">
		<div class="1row">
			<div class="col-12">
				<div class="card">
					<div class="col-sm-5">
						<br>
					
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal2">Tambah Data Batas</button>
						<?php if(session()->getFlashdata('pesan')) :  ?>
						<div class="alert-succes" role="alert">
							<?= session()->getFlashdata('pesan');?>
						</div>
						<?php  endif;?>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Desa</th>
										<th>Kelurahan</th>
										<th>Koordinat</th>
										<th>Gambar</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1 ?>
									<?php foreach ($batas as $b) : ?>
									<tr>
										<td><?php echo $i ?></td>
										<td><?=$b->desa;?></td>
										<td><?=$b->kelurahan;?></td>
										<td> <span class="d-inline-block text-truncate" style="max-width: 150px;"><?=$b->koordinat;?></span></td>
										<td><span class="d-inline-block text-truncate" style="max-width: 150px;"><?=$b->gambar;?></td>
										<td>
										<justify>
										<!-- <a href="/admin_table_batas/edit/=? <?php $b->id ?>"><button class="btn btn-primary  text-align: center;" id="edit" data-toggle="modal"></a> Edit</a> -->
										<!-- <a href="#" class="btn btn-primary btn-sm btn-edit" data-id="<?= $b->id;?>">Edit</a> -->
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal2-<?php echo $b->id ?>">Edit</button>
										<a link class="btn btn-danger"  href="/deleteBatas?id=<?= $b->id ?>">Delete</a>
									</td>
									</tr>
									<?php  $i++ ?>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<style>
.card-body {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    
    border: 1px solid #f2f5f7;
}
 
.card-body tr th{
    background: #35A9DB;
    color: #444;
    font-weight: normal;
}
 
.card-body, th, td {
    padding: 8px 20px;
    border: #444;
	
}
 
.card-body tr:hover {
    background-color: #f5f5f5;
}
 
.card-body tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>

<!-- modal tambah -->
<?php foreach ($batas as $b) : ?>
<div class="modal fade" id="tambahModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel">tambah</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="/insertBatas" method="GET">
				<?php csrf_field(); ?>
			<div class="modal-body">
				<!-- <p>One fine body&hellip;</p> -->
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Desa</label>
					<div class="col-sm-10">
						<input class="form-control" type="hidden" value="" name="desa">
						
						<input class="form-control" type="text" value="" id="desa" name="desa">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Kelurahan</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="" id="kelurahan" name="kelurahan">
						
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Koordinat</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="" id="koordinat" name="koordinat">
					
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Gambar</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="" id="gambar" name="gambar">
						
					</div>
				</div>
			</div>
			
			
			<div class="modal-footer">
					<input type="submit" class="btn btn-success" id="btn_insert_data" value="Tambah"></input>
				
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</form>
		</div>
	</div>
</div>
<?php endforeach ?>
<!-- end tambah -->

<!-- modal edit -->
<?php foreach ($batas as $b) : ?>
<div class="modal fade" id="editModal2-<?php echo $b->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel">Edit</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<form action="/updateBatas" method="GET">
				<?php csrf_field(); ?>
			<div class="modal-body">
				<!-- <p>One fine body&hellip;</p> -->
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Desa</label>
					<div class="col-sm-10">
						<input class="form-control" type="hidden" value="<?= $b->id ?>" name="id">
						<!-- <label id="kordinat" class="desa"><?php $b->id ?></label> -->
						<input class="form-control" type="text" value="<?= $b->desa ?>" id="desa" name="desa">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Kelurahan</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="<?= $b->kelurahan ?>" id="kelurahan" name="kelurahan">
						<!-- <label id="nama">desa</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Koordinat</label>
					<div class="col-sm-10">
						<input class="form-control" type="longtext" value="<?= $b->koordinat ?>" id="koordinat" name="koordinat">
						<!-- <label id="jenis">koordinat</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Gambar</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="<?= $b->gambar ?>" id="gambar" name="gambar">
						<!-- <label id="jenis">gambar</label> -->
					</div>
				</div>
			</div>
			
			
			<div class="modal-footer">
					<input type="submit" class="btn btn-success" id="btn_update_data" value="Update"></input>
					<input type="submit" class="btn btn-danger" id="btn_delete_data" value="Delete"></input>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</form>
		</div>
	</div>
</div>
<?php endforeach ?>


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!-- Required datatable js -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables/jszip.min.js"></script>
<script src="assets/plugins/datatables/pdfmake.min.js"></script>
<script src="assets/plugins/datatables/vfs_fonts.js"></script>
<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables/buttons.print.min.js"></script>
<script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/pages/datatables.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>






<script type="text/javascript">
	$(document).ready(function () {
		$('#example').DataTable({
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
		});
	});
</script>




<?= $this->endSection(); ?>