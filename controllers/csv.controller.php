<?php
$_customJs = array("vendor/datatables/jquery.dataTables.min.js", "vendor/datatables/dataTables.bootstrap4.min.js", "assets/pages/js/csv.view.js");
$registros = loadCsvData('poblacion_pontevedra.csv');
$data['csv_titulo'] = "Carga de un CSV";
$data['csv_div_titulo'] = "Datos del fichero";
$data['registros'] = $registros;

include 'views/templates/header.php';
include 'views/csv.view.php';
include 'views/templates/footer.php';

function loadCsvData(string $fileName) : array{
    $csvFile = file($fileName);
    $data = [];
    foreach ($csvFile as $line) {
        $data[] = str_getcsv($line, ';');
    }
    return $data;
}