<?php

class App{
    public function __invoke(){
//        $model = new Model();
//        $controller = new Controller($model);
        $controller = new Controller();
//        $view = new View($controller, $model);

        $action = $_GET['action'];

        if (isset( $action ) && !empty($action)) {
            try{
                $controller->{$action}();
            }catch(Error $er){
                echo "<h1>404</h1>";
                die;
            }
        }
//        echo $view->render();
    }
}