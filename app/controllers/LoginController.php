<?php
class LoginController
{
    function __construct()
    {
        echo "<br>Constructor clase LoginController";
    }//fin constructor

    function index(){
        echo "<br>Dentro de index de LoginController";
        //$products = Product::all();//para acceder a cosas estaticas y constantes se accede con  ::
        //require "views/home.php";
    }//fin _index

    function show(){
        echo "<br>Dentro de show de HomeController";
        //$product = Product::find($id);
        //require "views/show.php";

    }//fin show


}