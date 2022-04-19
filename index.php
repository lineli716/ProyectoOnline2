<?php
    include "Autoload.php";
    if(isset($_GET['Controller']) && isset($_GET['Method']))
    {
        $controller=$_GET['Controller'];
        $method=$_GET['Method'];
    }
    else
    {
        $controller="PaginaPrincipal";
        $method="Inicio";
    }

    if(class_exists($controller) && method_exists($controller, $method))
    {
        $class=new $controller();
        $class->$method();
    }
    else
    {
        echo "clase o metodo no existe";
    }

?>