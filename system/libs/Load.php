<?php

    class Load{
        public function view($fileName, $folderName = null, $data = [])
        {
            if ($folderName !== null) {
                include "app/views/$folderName/$fileName.php";
            } else {
                include "app/views/$fileName.php";
            }

            if (!empty($data)) {
                extract($data);
            }
        }


        public function model($modelName){
            include "app/Models/$modelName.php";
            return new $modelName();
        }
    }