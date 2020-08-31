<!DOCTYPE html>
<?php
        include ('login.php');
        // include ('process.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.5.1.js"></script>
</head>
<body>

    <a href="process.php">Product add</a>
    <form name = "form1" action="Product_list.php" method = "post">
    <input class = "ievade" type = "submit" name = "submit1" value = "delete selected">
    <br>
    <br>
    
    <?php
		$sqql = "SELECT * FROM logins;";
		$result = mysqli_query($conn, $sqql);
        $resultCheck = mysqli_num_rows($result);

        
		if ($resultCheck > 0){

            echo '<div class = "large">';
			while($row = mysqli_fetch_array($result)){
                
                echo '<div class = bloks>';
                echo'<button class = "button">x</button>';
                ?>
                <input type = "checkbox" name = "num[]" value = "<?php echo $row["id"];?>"/>
                <div id = "<?php echo $row["id"]; ?>" class = "bloks2">
                <?php
                echo $row['id'] . "<br><br>";
				echo $row['username'] . "<br><br>";
                echo $row['password'] . "<br><br>";
                echo "</div>";
                echo'</div>';
            }
            
            echo "</div>";
        }
	?>
    </form>
    <?php

        if(isset($_POST["submit1"])){
            
            $box = $_POST['num'];

            foreach($box as $value){
                $sql = "DELETE FROM logins WHERE id= $value";
                
            }
            if (mysqli_query($conn, $sql)) {
                 header("Refresh: 0");
                echo "Record deleted successfully";
              } else {
                echo "Error deleting record: " . mysqli_error($conn);
              }

            // while (list ($key,$val) = @each($box)){
            //     mysqli_query($link,'delete from logins where id=$val');
            // }
        }

    ?>
    <script>
        $(document).ready(function(){
            $("#<?php echo $row["id"];?>").(function(){
                 $("<?php echo $row["id"]; ?>").hide();
            })
        })
    </script>
</body>
</html>