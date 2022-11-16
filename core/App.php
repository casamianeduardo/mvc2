<?php
namespace Core;

/*

    -Si la url no especifica ningun controlador (recurso) => asigno
    uno por defecto => home
    -Si la url no especifica ningun metodo => asigno por defecto : index

    /recurso/accion/parametros
*/
class App{
    function __construct()
    {
        //http://mvc.local/product/show =>  http://mvc.local/index.php?url=product/show
        if(isset($_GET["url"]) && !empty($_GET["url"])){
            $url = $_GET["url"];
        }else{
            $url = "home";
        }
        ///product/show -> product: recurso ; show: accion; 5: parametro
        $arguments = explode('/', trim($url,'/'));//explode separa una cadena en trozos(la url)//trim te quita las barras del principio o final de la subcadenas.
        $controllerName = array_shift($arguments); //product ;  ProductController
        $controllerName =ucwords($controllerName) . "Controller"; //tiene el nombre de controlador 
        if(count($arguments)){
            $method = array_shift($arguments); //tiene la accion, (el metodo del controlador)
        }else{//si no hay metodo en la url, por defecto index
            $method = "index";
        }

        //voy a cargar el controlador. ProductController.php
        $file = "../app/controllers/$controllerName" . ".php";
        if(file_exists($file)){
            require_once $file;//si el fichero existe lo cargo
        }else{
            http_response_code(404);//si no error 404 y un mensaje "no encontrado"
            die("No encontrado");
        }

        //existe el metodo en el controlador ?
        $controllerObject = new $controllerName;//objeto de la clase ProductController
        if(method_exists($controllerObject,$method)){
            $controllerObject->$method($arguments);//si el metodo existe -> lo invoco
        }else{
            http_response_code(404);
            die("No encontrado");
        }


    }//fin_construct

}//fin app