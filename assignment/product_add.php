<!DOCTYPE html>
<?php include 'Classes/Connection.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product add</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<h1>Product add</h1>
<form action = "process.php" method = "POST">

Name :<input type="text" name="fname"><br>
Price :<input type="password" name="pass">
<input type= "submit" name = "submit" value = "Create">
</form>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Choose the item
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">DVD</a>
    <a class="dropdown-item" href="#">BOOK</a>
    <a class="dropdown-item" href="#">FURNITURE</a>
  </div>
</div>
<?php

// include ('login.php');
// // include ('Product_list.php');

// $userName = $_POST['fname'];
// $userPassword = $_POST['pass'];


// if (!$_POST['submit']){
//    echo "All fields are required!";
// }
// else{
   
//    $sql = "INSERT into logins (username, password)
//    values ('$userName', '$userPassword')";
   

//    if(mysqli_query($conn,$sql)){
//      echo "Data creation successful!";
//      echo $userID;
     
//    }
//    else{
// 	   echo "Something went wrong!";
//    }
//    echo $num;

// }
// ?>
// <br>
// <a href="Product_list.php">Product list</a>

</body>
</html>