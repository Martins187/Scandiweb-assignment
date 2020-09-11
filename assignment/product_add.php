<?php
  include 'Classes/Connection.php';
  include 'Classes/Dvd/Dvd_data.php';
  include 'Classes/Dvd/ViewDvd.php';
  include 'Classes/Dvd/Dvd_add.php';
  include 'Classes/Book/Book_data.php';
  include 'Classes/Book/ViewBook.php';
  include 'Classes/Book/Book_add.php';
  include 'Classes/Furniture/Furniture_data.php';
  include 'Classes/Furniture/ViewFurniture.php';
  include 'Classes/Furniture/Furniture_add.php';
?>

<!DOCTYPE html>
<?php //include 'Classes/Connection.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product add</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<h1>Product add</h1>

<div style = "margin: 15px" class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Choose the item
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <button class="dropdown-item" id = "buttonD">DVD</button>
    <button class="dropdown-item" id = "buttonB">BOOK</button>
    <button class="dropdown-item" id = "buttonF">FURNITURE</button>
  </div>
</div>

<form id = "product_form" style = "margin: 10px" action = "product_add.php" method = "POST">
<div style="width:210px">
Name :<input class = "inputStyle" type="text" name="fname">
<br>
Price :<input class = "inputStyle" type="text" name="fprice">
<br>
</div>
<div class = "largeWindow">
  <div class = "window" id = "windowD">
    Size :<input class = "inputStyle" type="text" name="fsize">
    <div class = "smallerWindow">
      <p class = "warning">Important!</p>
      <p class = "warningText">DVD size input must be in mb!</p>
    </div>
  </div>
  <div class = "window" id = "windowB">
    Weight :<input class = "inputStyle" type="text" name="fweight">
    <div class = "smallerWindow">
      <p class = "warning">Important!</p>
      <p class = "warningText">Weight of the book must be in kg!</p>
    </div>
  </div>
  <div class = "window" id = "windowF">
    Height :<input class = "inputStyle" type="text" name="fheight">
    Width :<input class = "inputStyle" type="text" name="fwidth">
    Length :<input class = "inputStyle" type="text" name="flength">
    <div class = "smallerWindow">
      <p class = "warning">Important!</p>
      <p class = "warningText">All three measures must be enetred in meters!</p>
    </div>
  </div>
</div>
<input style = "margin: 10px" type= "submit" name = "submit1">
</form>

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
      echo 'All fields are required!';
    }
  ?>
 <script>
 $(document).ready(function(){
    $("#windowD").hide();
    $("#windowB").hide();
    $("#windowF").hide();
  
  $("#buttonD").click(function(){
    $("#windowD").show();
    $("#windowB").hide();
    $("#windowF").hide();
    $("#dropdownMenuButton").html("DVD");
    document.getElementById('product_form').reset();
    
  })
  $("#buttonB").click(function(){
    $("#windowB").show();
    $("#windowD").hide();
    $("#windowF").hide();
    $("#dropdownMenuButton").html("BOOK");
    document.getElementById('product_form').reset();
  })
  $("#buttonF").click(function(){
    $("#windowF").show();
    $("#windowB").hide();
    $("#windowD").hide();
    $("#dropdownMenuButton").html("FURNITURE");
    document.getElementById('product_form').reset();
  })

  
 })
 </script>
 <br>
 <a href="list_products.php">Product list</a>
 
</body>
</html>