<!DOCTYPE html>
<html>
	
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
			}
			else{
				echo "Something went wrong!";
			}

		}
	?>
		


<head>
	<title>Create members</title>
</head>
<body>

	<form action = "process.php" method = "POST">
		
		Username :<input type="text" name="fname">
		Password :<input type="password" name="pass">
		<input type= "submit" name = "submit" value = "Create">
	</form>

	<a href="Product_list.php">Product list</a>

</body>
</html>
