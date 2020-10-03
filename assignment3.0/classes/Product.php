<?php

    abstract class Product{

        private $name;
        private $price;
        private $attribute;

        function __construct($name, $price, $attribute) {

            $this->name = $name;
            $this->price = $price;
            $this->attributes = $attributes;
        }

        function get_name() {

            return $this->name;
        }

        function get_price() {

            return $this->price;
        }

        function get_attributes() {

            return $this->attributes;
        }

        function set_name($name) {

            $this->name = $name;
        }

        function set_price($price) {

            $this->price = $price;
        }

        function set_attributes($attributes) {
            
            $this->attributes = $attributes;
        }



    }
?>