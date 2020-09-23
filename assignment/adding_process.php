<?php
if(isset($_POST['submit1'])){

    //Gives the warning if Name and Price fields are left empty  
    if(empty($_POST['fname']) || empty($_POST['fprice'])){
      echo 'Empty Name or price field!';
    }
    else{
        //As Name and Price fields are filled, variables with the information
        //from these fields can be created.
        $name = $_POST['fname'];
        $price = $_POST['fprice']; 
      
        //Notifiying user if all the all the parameter fields are empty
      if(empty($_POST['fweight']) && empty($_POST['fsize']) && (empty($_POST['fheight']) && empty($_POST['fwidth']) && empty($_POST['flength']))){
        echo 'Parameter field/fields are also required!';
      }
        
        //Creating a new object and adding it to the related table in the database depending on which input fields were left empty.
        //Objects are created and added to database with add[item type or its abbreviation]() function which can be found in 
        //Classes/[item type]/View[item type].php
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
    //After a page reload this will be printed.
    echo '<div style = "margin: 15px; font-size: 20px; font-weight: 600; color: red;">All fields are required!<div>';
  }
?>