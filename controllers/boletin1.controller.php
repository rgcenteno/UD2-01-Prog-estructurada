<?php
$data['titulo'] = "Boletín 01";
/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */
$data['ej01_div_titulo'] = "Ejercicio 01";
$ej01_numero = 10;
$ej01_resultado = $ej01_numero**2;
$data['ej01_textoresultado'] = "<p>El cuadrado del número ".$ej01_numero." es ".$ej01_resultado."</p>";


/*
 * Ejercicio 2
 */
$data['ej02_div_titulo'] = "Ejercicio 02";
$ej02_precio_hora = 25;
$ej02_horas_trabajadas = 40;
$data['ej02_textoresultado'] = sprintf("El precio hora es %.2f €, se han trabajado %.2f horas por lo que se pagarán %.2f €.", $ej02_precio_hora, $ej02_horas_trabajadas, $ej02_horas_trabajadas*$ej02_precio_hora);


/*
 * Ejercicio 3
 */
$data['ej03_div_titulo'] = "Ejercicio 03";
$base = 25;
$altura = 30;
$data['ej03_area'] = $base * $altura;
$data['ej03_perimetro'] = 2 * $base + 2 * $altura;

/*
 * Ejercicio 4
 */
$data['ej04_div_titulo'] = "Ejercicio 04";
$nombre = "Pepe Fernández Pérez";
$edad = 20;
$nota_media = 6.25;
$data['ej04_textoresultado'] = "<p>Alumno: $nombre</p><p>Edad: $edad</p><p>Nota media: $nota_media</p>";

/*
 * Ejercicio 5
 */
$data['ej05_div_titulo'] = "Ejercicio 05";
$precio_tb = 50;
$precio_ta = 100;
$noches_ta = 3;
$noches_tb = 5;
$data['ej05_textoresultado'] = sprintf("El usuario ha estado %d noches en TB a razón de %.2f precio/noche, %d noches en TA a razón de %.2f precio/noche con un importe total de %.2f", $noches_tb, $precio_tb, $noches_ta, $precio_ta, ($noches_ta * $precio_ta + $noches_tb * $precio_tb));

/*
 * Ejercicio 6
 */

$data['ej06_div_titulo'] = "Ejercicio 06";
$radio = 40;
$area = $radio**2 * pi();
$perimetro = 2 * pi() * $radio;
$data['ej06_textoresultado'] = sprintf("<p>Radio: %.2f</p><p>Área: %.2f</p><p>Perímetro: %.2f</p>", $radio, $area, $perimetro);

/*
 * Ejercicio 7
 */

$data['ej07_div_titulo'] = "Ejercicio 07";
$kmh = 120;
$ms = $kmh / 3.6;
$data['ej07_textoresultado'] = sprintf("<p>La velocidad de: <strong>%.2fKm/h</strong> equivale a <strong>%.2fm/s</strong>.</p>", $kmh, $ms);

/*
 * Ejercicio 8
 */
$data['ej08_div_titulo'] = "Ejercicio 08";
$valor = 853;
$centenas = intval($valor / 100);
$decenas = intval(($valor % 100) / 10);
$unidades = $valor % 10;

$data["ej08_textoresultado"] = "El número $valor está formado por $centenas centenas, $decenas decenas y $unidades unidades.";


/*
 * Ejercicio 9 
 */
$data['ej09_div_titulo'] = "Ejercicio 09";
$data["ej09_entrada"] = " Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt augue tristique, consequat velit in, pellentesque nisi. Vestibulum vitae finibus tellus, vel interdum sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sit amet hendrerit ipsum, non luctus lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse ut diam velit. Morbi molestie mattis ultricies. Ut aliquam ipsum neque, a bibendum tortor elementum non. Curabitur et orci condimentum, fringilla felis id, iaculis quam. Aliquam nec dignissim mauris, ut condimentum ipsum. Curabitur eu congue orci. Proin sodales tincidunt tellus gravida ultrices. In sapien neque, condimentum vel tincidunt eget, fermentum in ipsum. Aenean viverra ex nibh. Ut ut arcu eros. Morbi quis mattis ante, vel tempus massa.";
$data["ej09_palabras"] = str_word_count($data["ej09_entrada"]);
$data["ej09_caracteres"] = strlen($data["ej09_entrada"]);

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/boletin01.view.php';
include 'views/templates/footer.php';