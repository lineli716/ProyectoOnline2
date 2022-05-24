<?php
    class Products
    {
        public $con;
        public function __construct()
        {
            $this->con=new Conexion();
            session_start();
        }

        public function CrearProducto( $Nombre, $Descripcion, $Precio, $Cantidad)
        {







 ?>           