<?php
define('S_POST', 'sanitized_post');
$data['titulo'] = "Plantilla formulario";
$data["div_titulo"] = "Formulario";

$_customJs = array("vendor/summernote/summernote-bs4.min.js", "assets/pages/js/formulario.view.js");

//Por comodidad creamos arrays para las variables que se pueden recibir por post y son arrays
$data[S_POST]['selectmultiple'] = array();
$data[S_POST]['opcions'] = array();

//Comprobamos si se ha enviado el formulario y si es así, lo procesamos
if(isset($_POST['submit'])){
    $data['formSent'] = TRUE;
    $data['post'] = $_POST;
    $data[] = array();
    $data[S_POST]['textarea'] = filter_var($_POST['textarea'], FILTER_SANITIZE_STRING);
    $data[S_POST]['nombre'] = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    
    $data[S_POST]['selectnormal'] = filter_var($_POST['selectnormal'], FILTER_VALIDATE_INT) ? $_POST['selectnormal'] : NULL;
        
    if(is_array($_POST['selectmultiple'])){        
        foreach($_POST['selectmultiple'] as $selected){
            if(filter_var($selected, FILTER_VALIDATE_INT) !== false){
                array_push($data[S_POST]['selectmultiple'], $selected);
            }            
        }
    }
    
    if(is_array($_POST['opcions'])){
        foreach($_POST['opcions'] as $selected){       
            //Los valores sabemos que son strings sin HTML
            array_push($data[S_POST]['opcions'], filter_var($selected, FILTER_SANITIZE_STRING));                        
        }
    }
        
    
    $data[S_POST]['email'] = (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) ? $_POST['email'] : NULL;
    
    //Limpiamos el HTML con el plugin http://htmlpurifier.org/
    $config = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);
    $data[S_POST]['summernote'] = $purifier->purify($_POST['summernote']);
    
    
}

include 'views/templates/header.php';
include 'views/formulario.view.php';
include 'views/templates/footer.php';