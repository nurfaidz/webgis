<?= $this->extend('home/index'); ?>
<?= $this->section('content'); ?>

<head>


	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- DataTables -->
	<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"type="text/css" />
	<link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet"type="text/css" />
	<!-- Responsive datatable examples -->
	<link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet"type="text/css" />

	<link rel="stylesheet" href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="assets/css/icons.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Data Tabel Batas </h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="gis">Home</a></li>
					<li class="breadcrumb-item active">Data Tabel Batas </li>
				</ol>
			</div>
		</div>
	</div>
</section>

	<section class="content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card">
						
						<div class="card-body">
							<table id="example" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Desa</th>
										<th>Kelurahan</th>
										<th>Koordinat</th>
										<th>Gambar</th>
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
    color: #f2f2f2;
    font-weight: normal;
}
 
.card-body, th, td {
    padding: 8px 20px;
    border: #f2f2f2;
	
}
 
.card-body tr:hover {
    background-color: #f5f5f5;
}
 
.card-body tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>
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