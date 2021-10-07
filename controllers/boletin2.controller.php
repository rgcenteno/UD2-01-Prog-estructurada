<?php
define('SEGUNDOS_DIA', 24 * 3600);
define('SEGUNDOS_HORA', 3600);
define('SEGUNDOS_MINUTO', 60);

/*
 * Ejercicio 01
 */
$data['ej01_div_titulo'] = "Ejercicio 01";
$ej01_numero = 12;
$ej01_divisor = 3;
$ej01_resultado = $ej01_numero % $ej01_divisor == 0 ? "" : " no";
$data['ej01_textoresultado'] = "<p>El número $ej01_numero $ej01_resultado es divisible por $ej01_divisor.</p>";

/*
 * Ejercicio02
 */
$data['ej02_div_titulo'] = "Ejercicio 02";
$numero1 = -16;
$numero2 = -18;
$numero3 = -20;

$mayor = cualMayor($numero1, $numero2, $numero3);

$data['ej02_textoresultado'] = str_replace(" ".$mayor, "<strong> $mayor</strong>", "El mayor es $numero1, $numero2, $numero3");

/*
 * Ejercicio 3
 */
$data['ej03_div_titulo'] = "Ejercicio 03";
$totalSegundos = 264265;
$stringFinal = "$totalSegundos equivalen a:";
if($totalSegundos >= SEGUNDOS_DIA){
    $dias = intval($totalSegundos / SEGUNDOS_DIA);
    $stringFinal .= " $dias días";
}
$segundosRestantes = $totalSegundos % SEGUNDOS_DIA;
if($segundosRestantes >= SEGUNDOS_HORA){
    $horas = intval($segundosRestantes / SEGUNDOS_HORA);
    $stringFinal .= " $horas horas";
}
$segundosRestantes = $totalSegundos % SEGUNDOS_HORA;
if($segundosRestantes >= SEGUNDOS_HORA){
    $minutos = intval($segundosRestantes / SEGUNDOS_MINUTO);
    $stringFinal .= " $minutos minutos";
}
$segundosRestantes = $totalSegundos % SEGUNDOS_MINUTO;
if($segundosRestantes > 0){
    $stringFinal .= " $segundosRestantes segundos";
}
$data['ej03_textoresultado'] = $stringFinal;
/**
 * 
 * @param int $a
 * @param int $b
 * @param int $c
 * @return int
 */
function cualMayor(int $a, int $b, int $c) : int{
    if($a >= $b){
        if($a >= $c){
            return $a;
        }
        else{
            return $c;
        }
    }
    else{
        if($b >= $c){
            return $b;
        }
        else{
            return $c;
        }
    }
}

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/boletin02.view.php';
include 'views/templates/footer.php';
