<?php
    class Category{
        public function index(){
            return [
                "a" => "apple",
                "b" => "boll",
                 "c" => [
                    "d" => "doge",
                 ]
            ];
        }
    }