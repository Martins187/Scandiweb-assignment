<!DOCTYPE html>
<?php include 'Classes/Connection.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product add</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- link above must be deleted if i do not use bootstrap -->
</head>
<body>
<p></p>
<form action = "process.php" method = "POST">

Name :<input type="text" name="fname"><br>
Price :<input type="password" name="pass">
<input type= "submit" name = "submit" value = "Create">
</form>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
<?php

include ('login.php');
// include ('Product_list.php');

$userName = $_POST['fname'];
$userPassword = $_POST['pass'];


if (!$_POST['submit']){
   echo "All fields are required!";
}
else{
   
   $sql = "INSERT into logins (username, password)
   values ('$userName', '$userPassword')";
   

   if(mysqli_query($conn,$sql)){
     echo "Data creation successful!";
     echo $userID;
     
   }
   else{
	   echo "Something went wrong!";
   }
   echo $num;

}
?>
<br>
<a href="Product_list.php">Product list</a>

</body>
</html>