<?php
    class Animal{
        //properties
        protected $name;
        protected $legs = 2;
        protected $cold_blooded = 'false';

        function __construct($name){
            $this->name = $name;
        }

        function set_name($name){
            $this->name = $name;
        }

        function set_legs($legs){
            $this->legs = $legs;
        }

        function get_name(){
            return $this->name;
        }

        function get_legs(){
            return $this->legs;
        }

        function get_blood(){
            return $this->cold_blooded;
        }
    }
?>