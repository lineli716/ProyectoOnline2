<?php
    function Autoload ($class)
    {
        if(is_file('Controller/'.$class.'.Controller.php'))
        {
            include ('Controller/'.$class.'.Controller.php');
        }
        else if(is_file('Framework/Smarty/'.$class.'.class.php'))
        {
            include ('Framework/Smarty/'.$class.'.class.php');
        }
        else if(is_file('model/'.$class.'.model.php'))
        {
            include ('model/'.$class.'.model.php');
        }
        else if(is_file('Libreria/'.$class.'.Lib.php'))
        {
            include ('Libreria/'.$class.'.Lib.php');
        }
  
    }
    spl_autoload_register('Autoload');

?>