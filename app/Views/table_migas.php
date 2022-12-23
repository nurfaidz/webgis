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
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card m-b-30">
					

					<div class="card-body" id="datafasilitas">
						<table id="example" class="table table-bordered table-hover">
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
									<th>Sumber</th>
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
									<td><?=$f->sumber;?></td>
									<!-- <td>
										<justify>

											<a href="/admin_table_migas/=?"><button class="btn btn-primary "
													id="detail" data-toggle="modal" data-target="#modalDetail"></a>
											Detail</a>
									</td> -->
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