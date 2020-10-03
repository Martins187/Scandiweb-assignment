<?php
include_once 'includes.php';
switch(true){
   case (isset($_POST)):
        $dvd = new Dvd();
        $dvd->dvdForm();
        break;
   case isset($_POST['2']):
        echo bookForm();
        break;
    case isset($_POST['3']):
        echo fnForm();
        break;
    default:
        echo 'Choose the item!';
}

?>