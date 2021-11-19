<?php
define('DEBUG', true);
$data['titulo'] = "Plantilla formulario";
$data["div_titulo"] = "Formulario";

//Comprobamos si se ha enviado el formulario y si es así, lo procesamos
if(isset($_POST['boton_enviar'])){
    $data['errors'] = checkForm($_POST);
    $data['sanitized'] = sanitizeInput($_POST);
    if(count($data['errors']) == 0){
        //Hago el trabajo que tenga que hacer
        
    }    
}


function checkForm($_input) : array{
    $_errors = array(); //Creamos el array donde almacenaremos los errores
    /* Validación de un campo username que sólo permite caracteres numéricos y letras. Longitud mínima 3 y máxima 15
     * Para la validación usamos una expresión regular que nos comprueba si se cumple
     */    
    if(preg_match("/^[A-Za-z0-9]{3,15}$/", $_input['username']) === 0){
        $_errors['username'] = "Sólo se permiten nombres formados por números y letras de tamaño comprendido entre 3 y 15";
    }
    /*
     * Validamos un email. Sólo se permite un email.
     */
    if(!filter_var($_input['email'], FILTER_VALIDATE_EMAIL)){
        $_errors['email'] = "Debe insertar un mail válido";
    }
    /*
     * Validamos una URL.
     */
    if(!filter_var($_input['website'], FILTER_VALIDATE_URL)){
        $_errors['website'] = "Debe insertar una URL válida";
    }
    /*
     * Validamos un campo numérico entero. Si fuese decimal usaríamos FILTER_VALIDATE_FLOAT
     */
    if(!filter_var($_input['numero'], FILTER_VALIDATE_INT)){
        $_errors['numero'] = "Inserte un número entero";
    }
    /*
     * Validación de campo sobre mí. Permitimos todo tipo de caracteres pero no lo vamos a mostrar como HTML si no como texto. Aquí no haríamos nada más que comprobar que
     * se ha insertado algún texto
     */
    if(strlen($_input['sobre_mi']) == 0){
        $_errors['sobre_mi'] = "Inserte algún comentario en este campo";
    }
    
    /*
     * Suponemos que tenemos un select provincias con values permitidos 1, 2, 3, 4. Sólo tenemos que comprobar que el valor recibido es uno de ellos si no mostramos error.
     */
    $_valores_permitidos = array("1", "2", "3", "4");
    if(!in_array($_input['provincia'], $_valores_permitidos)){
        $_errors['provincia'] = "Seleccione una de las cuatro provincias";
    }
    
    /*
     * Tenemos varios checkbox llamados ofertas. Los checkboxes pueden tener valores de letras entre a y c. Es necesario que al menos se haya elegido un checkbox
     * El checkbox es un tipo especial, si no se marca ninguno, el campo no aparece en el array $_GET o $_POST por eso hacemos un isset
     */
    $_valores_checkbox = array("a", "b", "c");
    if(!isset($_input['opcions']) || count($_input['opcions']) == 0){
        $_errors['opcions'] = "Marque al menos un checkbox";
    }
    else{
        foreach($_input['opcions'] as $check){
            if(!in_array($check, $_valores_checkbox)){            
                $_errors['opcions'] = "Se ha seleccionado un valor no permitido";            
            }
        }
    }
    return $_errors;
}

/**
 * Función que devuelve un array con los mismos campos que recibimos y que se puede imprimir de forma segura en HTML
 * @param array $_input Array de entrada (usualmente $_GET, $_POST)
 * @return array Array sanitizado
 */
function sanitizeInput(array $_input) : array{
    $_res = array();
    foreach($_input as $campo => $valor){
        if(!is_array($valor)){
            $_res[$campo] = filter_var($valor, FILTER_SANITIZE_SPECIAL_CHARS);
        }
        else{
            $_res[$campo] = filter_var_array($valor, FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }
    return $_res;
} 

include 'views/templates/header.php';
include 'views/formulario-simple.view.php';
include 'views/templates/footer.php';