<?php
class Administrador
{
    public $Admin;
    public $smarty;
    public $direcciones;

    public function __construct()
    {
        $this->Admin=new Administradores();
        $this->smarty=new Smarty();
        $this->direcciones=new Direccion();
    }

    public function Productos()
    {
        
        $Nombre=$_POST['Nombre'];
        $Descripcion=$_POST['Descripcion'];
        $Precio=$_POST['Precio'];
        $Cantidad=$_POST['Cantidad'];
        
        $z=$this->Admin->CrearProducto($Nombre, $Descripcion, $Precio, $Cantidad);
        $this->direcciones->RegistroProducto();
    } 




?>