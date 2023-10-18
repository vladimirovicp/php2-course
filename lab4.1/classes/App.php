<?php

class App{
    public function __invoke(){
        $controller = new Controller();
        $action = $_GET['action'] ?? 'index';

        if (isset( $action ) && !empty($action)) {
            try{
                $controller->{$action}();
            }catch(Error $er){
                echo "<h1>404</h1>";
                die;
            }
        }
    }
}