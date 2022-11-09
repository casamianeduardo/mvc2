<?php

require_once "Product.php";//Todo lo que tienes definido en product, s utilizable gracias al require
                            //para las vistas usar require, para las clases require_once
class Controller
{
    function __construct()
    {
        //const vacio
    }

    /* funcion que:
    - recoge todos los productos
    - llama a vista de inventario
    */
    public function home(){
        $products = Product::all();//para acceder a cosas estaticas y constantes se accede con  ::
        require "views/home.php";
    }


    /* funcion que:
            - mostrar un producto en particular, el id como parametro
            - llamar vista de un producto en concreto.
    */
    public function show(){

        $id = $_GET["id"];
        $product = Product::find($id);  //el $id vendra de start.php
        require "views/show.php";

    }
    
}//fin de clase
