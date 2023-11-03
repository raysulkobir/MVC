<?php

    class Load{
        public function view($fileName, $data=[]){
            include "app/views/{$fileName}.php";
            if(true == $data){
                extract($data);
            }
            
        }

        public function model($modelName){
            include "app/Models/{$modelName}.php";
            return new $modelName();
        }
    }