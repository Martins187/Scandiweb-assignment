<?php
if(isset($_POST['submit1'])){
      
    if(empty($_POST['fname']) || empty($_POST['fprice'])){
      echo 'Empty Name or price field!';
    }
    else{
      $name = $_POST['fname'];
      $price = $_POST['fprice']; 
      $sbmt = ($_POST['submit1']);
      
      if(empty($_POST['fweight']) && empty($_POST['fsize']) && (empty($_POST['fheight']) && empty($_POST['fwidth']) && empty($_POST['flength']))){
        echo 'Parameter field/fields are also required!';
      }
      elseif(empty($_POST['fweight']) && (empty($_POST['fheight']) && empty($_POST['fwidth']) && empty($_POST['flength']))){
        $size = $_POST['fsize']; 
        $dvd = new Dvd($name, $price, $size);
        $dvd->addDvd();
      }
      elseif(empty($_POST['fsize']) && (empty($_POST['fheight']) && empty($_POST['fwidth']) && empty($_POST['flength']))){
        $weight = $_POST['fweight'];
        $book = new Book($name, $price, $weight);
        $book->addBook(); 
      }
      elseif(empty($_POST['fsize']) && empty($_POST['fweight'])){
        $height = $_POST['fheight'];
        $width = $_POST['fwidth'];
        $length = $_POST['flength'];
        $furniture = new Furniture($name, $price, $height, $width, $length);
        $furniture->addFn(); 
      }
    } 
  }
  else{
    echo '<div style = "margin: 15px; font-size: 20px; font-weight: 600; color: red;">All fields are required!<div>';
  }
?>