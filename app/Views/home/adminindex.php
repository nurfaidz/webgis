<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIG PERTAMINA | SIG MIGAS</title>

    <!-- datatable -->
    <!-- <link rel="stylesheet" href="<?php base_url('') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php base_url('') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php base_url('') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> -->
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

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="<?=base_url()?>assets/leaflet.groupedlayercontrol.css" />
    <script src="<?=base_url()?>assets/leaflet.groupedlayercontrol.js"></script>

    <link rel="stylesheet" href="<?=base_url()?>assets/Control.MiniMap.css" />
    <script src="<?=base_url()?>assets/Control.MiniMap.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-controlgeocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <link rel="stylesheet"
        href="https://api.tiles.mapbox.com/mapbox.js/plugins/leafletlocatecontrol/v0.43.0/L.Control.Locate.css">
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leafletlocatecontrol/v0.43.0/L.Control.Locate.min.js">
    </script>

    <script type="text/javascript" src="<?=base_url()?>assets/Leaflet.Coordinates-0.1.5.min.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>assets/Leaflet.Coordinates-0.1.5.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="/public/assets/js/jquery.min.js"></script>

    <link rel="stylesheet" href=" https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css"/>

</head>
<style>
    #map {
      
        height: 550px;
        color: black;
    }
</style>

<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"
    style="background-color: #B0C4DE;">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/logoutama.png" alt="SIG PERTAMINA" height="60" width="60">
        </div>

        <!-- sidebar -->
        <?= $this->include('layout/adminsidebar'); ?>
        <!-- /sidebar -->

        <!-- header -->
        <?= $this->include('partial/adminheader'); ?>
        <!-- /header -->

        <div class="content-wrapper">
            <?= $this->renderSection('admincontent') ?>
        </div>


        <!-- Main Footer -->
        <?= $this->include('partial/adminfooter'); ?>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

        <script src="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"></script> -->


        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>

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
                $('#example').DataTable();
            });
        </script>


</body>


</html>