<?php
$_customJs = array("vendor/datatables/jquery.dataTables.min.js", "vendor/datatables/dataTables.bootstrap4.min.js", "assets/pages/js/tablas.view.js");

$data = array();
$data['titulo'] = "Carga de un CSV";
$data['div_titulo'] = "Datos del fichero";
$data['js'] = $_customJs;

include 'views/templates/header.php';
include 'views/tablas.view.php';
include 'views/templates/footer.php';