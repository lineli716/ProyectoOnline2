<?php
    include "Autoload.php";
    if(isset($_GET['controller']) && isset($_GET['method']))
    {
        $controller=$_GET['controller'];
        $method=$_GET['method'];
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