<?php
//"includes.php"contains links to all the necessary php files.
  include 'includes.php';
?>
<!DOCTYPE html>
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
    
    <!-- This file conatins JQuery functions which make system display the relavant window. -->
    <script src="buttons.js"></script>

</head>
<body>
 <div class = "title1">
  <div class = "title2" style = "color: black">
    <a class = "link"  style = "color: black" href="product_add.php"><h1>Product add</h1></a>
  </div>
  <div class = "title2">
    <a class = "link" href="list_products.php"><h1>Product list</h1></a>
  </div>
 </div>

<!-- Using Bootstrap to display three possible item options -->
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

<!-- All the input for a new item(object) will be received through this form -->
<form id = "product_form" style = "margin: 10px" action = "product_add.php" method = "POST">

<!-- "Name" and "Price" fields will be required regardless of the item chosen -->
<div style="width:210px">
  Name :<input class = "inputStyle" type="text" name="fname">
  <br>
  Price :<input class = "inputStyle" type="text" name="fprice">
  <br>
</div>

<!-- Depending on the chosen item, the related window( one of these three below) will be displayed-->
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

<!-- This file contains logical statements which make system decide to which 
of three tables in the database should the information be added -->
  <?php include 'adding_process.php';?>
  
</body>
</html>