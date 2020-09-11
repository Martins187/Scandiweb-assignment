<?php
include 'Classes/Connection.php';
include 'Classes/Dvd/Dvd_data.php';
include 'Classes/Dvd/ViewDvd.php';
include 'Classes/Book/Book_data.php';
include 'Classes/Book/ViewBook.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<h1>Product list</h1>
<a href="product_add.php">Product add</a>
<form name = "form1" action="list_products.php" method = "post">
    <input class = "ievade" type = "submit" name = "submit1" value = "delete selected">
    <br>
    <br>
    <div class = "first">
        <div class = "large">
        <?php
        $dvds = new ViewDvd();
        $dvds->showAllDvd();

        $books = new ViewBook();
        $books->showAllBook();

        if(isset($_POST["submit1"])){
            
            $dvds->deleteDvd();
            $books->deleteBook();
        }
        ?>
        </div>
    </div>
   
</form>
<div>Ca</div>
</body>
</html>