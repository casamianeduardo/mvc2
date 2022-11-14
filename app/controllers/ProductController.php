<?php
    require_once "../Product.php";

class ProductController
{
    function __construct()
    {
        //echo "<br>Constructor clase ProductController";
    }//fin constructor

    function index(){
        //echo "<br>Dentro de index de ProductController";
        $products = Product::all();//para acceder a cosas estaticas y constantes se accede con  ::
        require "../app/views/product.php";
    }//fin _index

    function show(){
        //echo "<br>sho product controller";
        $id = $_GET["id"];
        $product = Product::find($id);
        require "views/showproduct.php";

    }//fin show


}