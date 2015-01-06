<?php
// controla las llamadas a los controladores y los metodos
class Bootstrap
{
    public static function run(Request $peticion)
    {
        $controller = $peticion->getControlador() . 'Controller';
        $rutaControlador = ROOT . 'controllers' . DS . $controller . '.php';
        $metodo = $peticion->getMetodo();
        $args = $peticion->getArgs();
        
        if(is_readable($rutaControlador)){
            // si el controlador es valido y escribible
            require_once $rutaControlador;
            $controller = new $controller;
            
            if(is_callable(array($controller, $metodo))){
                // si el metodo es llamable
                $metodo = $peticion->getMetodo();
            }
            else{
                $metodo = 'index';
            }
            
            if(isset($args)){
                call_user_func_array(array($controller, $metodo), $args);
            }
            else{
                call_user_func(array($controller, $metodo));
            }
            
            // si el controlador no es valido ni escribible
        } else {  ?>
            
            <h1>No encontrado</h1>
        <?php 
           
        }
    }
}


?>

