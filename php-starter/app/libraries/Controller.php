<?php
    /*  this is the base controller
    * this loads the model and views
    */

    class Controller {
        // Load model
        public function model($models){
            //require model file
            require_once '../app/models/'.$models.'.php';
            // Instantiate model
            return new $models();
        }
        //Load view
        public function view($view, $data = []){
            //check for the view file
            if(file_exists('../app/views/'.$view.'.php')){
                //require the file
                require_once '../app/views/'.$view.'.php';
            } else {
                die("view doesnt exist");
            }

        }

    }



?>