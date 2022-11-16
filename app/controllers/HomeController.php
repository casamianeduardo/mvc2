<?php
namespace App\Controllers;

class HomeController
{
    function __construct()
    {
        echo "<br>Constructor clase HomeController";
    }//fin constructor

    function index(){
        $products = \Product::all();//para acceder a cosas estaticas y constantes se accede con  ::
        require "../app/views/home.php";
    }//fin _index

    function show(){
        //echo "<br>Dentro de show de HomeController";
        $id = $_GET["id"];
        $product = \Product::find($id);
        require "../app/views/show.php";

    }//fin show


}