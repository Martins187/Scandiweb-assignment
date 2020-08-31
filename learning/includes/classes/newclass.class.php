<?php

class NewClass {

    //Properties and methods go here
    public $info = "This is some info!";
}
class Person{
   public $name;
   public $eyeColor;
   public $age;

   
   public function __construct($name,$eyeColor,$age){
    $this->name = $name;
    $this->eyeColor = $eyeColor;
    $this->age = $age;
   }
   
   public function getName(){
       return $this->name;
   }
}

class Pet{
    public function owner(){
        $a = "Hi there!";
        return $a;
    }
    // public function owner(){
    //     $a = $this->first;
    //     return $a;
}

// $object = new NewClass;

// var_dump($object);
 