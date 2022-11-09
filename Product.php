<?php
//fichero que simula el modelo con datos(bbdd)
    class Product{
        const PRODUCTS = [
            array(1,'Cortacesped'),
            array(2,'Pizarra'),
            array(3,'Billar'),
            array(4,'Dardos'),
        ];

        function __construct(){}//constructor vacio

            //DEVUELVE TODOS LOS PRODUCTOS
            public static function all()
            {
                return Product::PRODUCTS;
            }

            //DEVOLVER UN PRODUCTO EN PARTICULAR
            public static function find($id)
            {

                return Product::PRODUCTS[$id-1];// el menos1 es porque la posicion primera de un array es la 0
            }




        

    }//fin clase