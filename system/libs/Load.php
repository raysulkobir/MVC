<?php

    class Load{
        public function view($fileName, $data = [])
        {
            include "app/views/$fileName.php";

            if (!empty($data)) {
                extract($data);
            }
        }


        public function model($modelName){
            include "app/Models/$modelName.php";
            return new $modelName();
        }

        public function validation($modelName){
            include "app/validation/$modelName.php";
            return new $modelName();
        }
    }