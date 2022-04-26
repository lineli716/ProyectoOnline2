<?php
    class Direccion
    {
        public $smarty;

        public function __construct()
        {
            $this->smarty=new Smarty();
        }

        public function Inicio()
        {
            $this->smarty->display('PaginaPrincipal.tpl');
        }
        public function Productos()
        {
            $this->smarty->display('Cuerpo/Productos.tpl');
        }

        public function Contacto()
        {
            $this->smarty->display('Cuerpo/Contacto.tpl');
        }

        public function Nosotros()
        {
            $this->smarty->display('Cuerpo/Nosotros.tpl');
        }


    }
?>