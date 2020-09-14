<?php
include 'Classes/Connection.php';
include 'Classes/Dvd/Dvd_data.php';
include 'Classes/Dvd/ViewDvd.php';
include 'Classes/Book/Book_data.php';
include 'Classes/Book/ViewBook.php';
include 'Classes/Furniture/Furniture_data.php';
include 'Classes/Furniture/ViewFurniture.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<div class = "title1">
  <div class = "title2">
    <a class = "link" href="product_add.php"><h1>Product add</h1></a>
  </div>
  <div class = "title2">
    <a class = "link" style = "color: black" href="list_products.php"><h1>Product list</h1></a>
  </div>
 </div>
<form name = "form1" action="list_products.php" method = "post">
    <input style = "margin: 10px" class="ievade btn btn-secondary" type = "submit" name = "submit1" value = "delete selected">
    <br>
    <br>
    <div class = "first">
        <div class = "large">
        <?php
        $dvds = new ViewDvd();
        $dvds->showAllDvd();

        $books = new ViewBook();
        $books->showAllBook();

        $furn = new ViewFn();
        $furn->showAllFn();

        if(isset($_POST["submit1"])){
            
            $dvds->deleteDvd();
            $books->deleteBook();
            $furn->deleteFn();
            ?>
            <meta http-equiv = "refresh" content = '0.1'>
            <?php   
        }
        ?>
        </div>
    </div>
</form>
</body>
</html>