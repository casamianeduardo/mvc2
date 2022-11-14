<?php

class HomeController
{
    function __construct()
    {
        echo "<br>Constructor clase HomeController";
    }//fin constructor

    function index(){
        //$products = Product::all();//para acceder a cosas estaticas y constantes se accede con  ::
        require "../app/views/home.php";
    }//fin _index

    function show(){
        echo "<br>Dentro de show de HomeController";
        //$product = Product::find($id);
        //require "views/show.php";

    }//fin show


}