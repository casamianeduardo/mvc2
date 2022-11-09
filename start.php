<?php
//echo "<h2>Contenido PRIVADO</h2>";

//  /recurso/accion/parametro
    //recurso : controlador/es
    //accion : metodos del controlador/es .  controlador->show() , find()
    //parametros: find -> id de producto.

require_once "../Controller.php";

$app = new Controller();
//defino variable de peticion en la url 

//  1-recoger el metodo que pasan como parametro,y si no 
//especifican ningun metodo, cargar el metodo home
if(isset($_GET["method"])){
    $method = $_GET["method"];//show, find, create , update...
   
}else{
    $method = "home";
}

//  2-verificar que el metodo//acion introducido exixte y es valido.
if(method_exists($app,$method)){
    $app->$method();
}else{
    http_response_code(404);
    die("Metodo no encontrado");//exit;
}
