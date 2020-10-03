<?php
    include 'Classes/AddObject.php';
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
    <button name = "button" class="dropdown-item" value = "1">DVD</button>
    <button name = "button" class="dropdown-item" value = "2">BOOK</button>
    <button name = "button" class="dropdown-item" value = "3">FURNITURE</button>
  </div>
</div>

  <?php include 'cases.php';?>
  
</body>
</html>