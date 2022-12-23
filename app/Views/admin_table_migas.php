<?= $this->extend('home/adminindex'); ?>
<?= $this->section('admincontent'); ?>

<head>


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
<!-- datatable -->

<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Data Tabel Migas</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="gis">Home</a></li>
					<li class="breadcrumb-item active">Data Tabel Migas</li>
				</ol>
			</div>
		</div>
	</div>
</section>


<section class="content">
	<div class="container" >
		<div class="row" >
			<div class="col-12">
				<div class="card m-b-30" >
					<div class="col-sm-5" >
						<br>
						<!-- <a href=""><button class="btn btn-primary mb-3" id="#tambahModal" data-toggle="modal" data-target="#tambahModal"></a> Tambah Data Fasilitas</a>   -->
						<!-- <a href="/createtablemigas" class="btn btn-primary mb-3">Tambah Data Migas</a> -->
						<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal-">Tambah Data Migas</button> -->
						
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah Data Migas</button>
						
						
						<?php if(session()->getFlashdata('pesan')) :  ?>
						<div class="alert-succes" role="alert">
							<?= session()->getFlashdata('pesan');?>
						</div>

						<?php  endif;?>
						
					</div>

					<div class="card-body" id="datafasilitas">
						<table id="example" class="table table-bordered table-hover ">
							<!-- <table class="table table-sm table-striped" > -->
							<thead>
								<tr>
									<th>No</th>
									<th>Sumur</th>
									<th>Koordinat</th>
									<th>Jenis</th>
									<th>Operator</th>
									<!-- <th>Lisensi</th> -->
									<th>Status</th>
									<th>Kedalaman</th>
									
									<th>Actions</th>
									<!-- <th>Actions</th> -->
								</tr>
							</thead>
							<tbody>
								<?php $no=1  ?>
								<?php foreach ($fasilitas as $f) : ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?=$f->nama;?></td>
									<td><?=$f->koordinat;?></td>
									<td><?=$f->jenis;?></td>
									<td><?=$f->operator;?></td>
									<!-- <td><?=$f->lisensi;?></td> -->
									<td><?=$f->status;?></td>
									<td><?=$f->kedalaman;?></td>
									
									<td>
										<justify>
										<!-- <a href="/admin_table_migas/edit/=? <?php $f->id ?>"><button class="btn btn-primary  text-align: center;" id="edit" data-toggle="modal"></a> Edit</a> -->
										<!-- <a href="#" class="btn btn-primary btn-sm btn-edit" data-id="<?= $f->id;?>">Edit</a> -->
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal-<?php echo $f->id ?>">Detail</button>
										<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal-<?php echo $f->id ?>">Tambah</button> -->
										<a link class="btn btn-danger"  href="/deleteMigas?id=<?= $f->id ?>">Delete</a>
									</td>
								</tr>
								<?php ?>
								<?php endforeach ?>
							</tbody>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<style>

.card-body tr th{
    background: #35A9DB;
    color: #f2f2f2;
    font-weight: normal;
}
 
.card-body, th, td {
   
    border: #f2f2f2;
	
}
 
.card-body tr:hover {
    background-color: #f5f5f5;
}
 
.card-body tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>

<!-- modal tambah -->
<?php foreach ($fasilitas as $f) : ?>
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel">tambah</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<form action="/insertMigas" method="GET">
				<?php csrf_field(); ?>
			<div class="modal-body">
				<!-- <p>One fine body&hellip;</p> -->
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Koordinat</label>
					<div class="col-sm-10">
						<input class="form-control" type="hidden" value="<?= $f->id ?>" name="id">
						<!-- <label id="kordinat" class="koordinat"><?php $f->id ?></label> -->
						<input class="form-control" type="text" value="" id="koordinat" name="koordinat">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="" id="nama" name="nama">
						<!-- <label id="nama">koordinat</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Jenis</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="" id="jenis" name="jenis">
						<!-- <label id="jenis">koordinat</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Operator</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="" id="operator" name="operator">
						<!-- <label id="operator">koordinat</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Lisensi</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="" id="lisensi" name="lisensi">
						<!-- <label id="lisensi">koordinat</label> -->
					</div>
				</div>
				<!-- <div class="form-group row ">
					<label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="" id="status" name="status">
						
					</div>
				</div> -->
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="" id="status" name="status">
						<!-- <label id="status">koordinat</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Kedalaman</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="" id="kedalaman" name="kedalaman">
						<!-- <label id="kedalaman">koordinat</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Sumber</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="" id="sumber" name="sumber">
						<!-- <label id="sumber">koordinat</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Gambar</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="" id="gambar" name="gambar">
						<!-- <label id="gambar">koordinat</label> -->
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
<?php foreach ($fasilitas as $f) : ?>
<div class="modal fade" id="editModal-<?php echo $f->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel">Edit</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<form action="/updateMigas" method="GET">
				<?php csrf_field(); ?>
			<div class="modal-body">
				<!-- <p>One fine body&hellip;</p> -->
				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Koordinat</label>
					<div class="col-sm-10">
						<input class="form-control" type="hidden" value="<?= $f->id ?>" name="id">
						<!-- <label id="kordinat" class="koordinat"><?php $f->id ?></label> -->
						<input class="form-control" type="text" value="<?= $f->koordinat ?>" id="koordinat" name="koordinat">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="<?= $f->nama ?>" id="nama" name="nama">
						<!-- <label id="nama">koordinat</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Jenis</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="<?= $f->jenis ?>" id="jenis" name="jenis">
						<!-- <label id="jenis">koordinat</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Operator</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="<?= $f->operator ?>" id="operator" name="operator">
						<!-- <label id="operator">koordinat</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Lisensi</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="<?= $f->lisensi ?>" id="lisensi" name="lisensi">
						<!-- <label id="lisensi">koordinat</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="<?= $f->status ?>" id="status" name="status">
						<!-- <label id="status">koordinat</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Kedalaman</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="<?= $f->kedalaman ?>" id="kedalaman" name="kedalaman">
						<!-- <label id="kedalaman">koordinat</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Sumber</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="<?= $f->sumber ?>" id="sumber" name="sumber">
						<!-- <label id="sumber">koordinat</label> -->
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Gambar</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" value="<?= $f->gambar ?>" id="gambar" name="gambar">
						<!-- <label id="gambar">koordinat</label> -->
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