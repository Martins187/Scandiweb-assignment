<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- link above must be deleted if i do not use jquery -->
</head>

<p></p>
<form action = "process.php" method = "POST">

Username :<input type="text" name="fname">
Password :<input type="password" name="pass">
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div>
<input type= "submit" name = "submit" value = "Create">
</form>

<?php

include ('login.php');
// include ('Product_list.php');

$userName = $_POST['fname'];
$userPassword = $_POST['pass'];
$num;

if (!$_POST['submit']){
   echo "All fields are required!";
}
else{
   $userID = "LG".$num;
   $sql = "INSERT into logins (id, username, password)
   values ('$userID', '$userName', '$userPassword')";
   $num = $num + 1;


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