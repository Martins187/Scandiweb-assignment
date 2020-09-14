<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class ViewDvd extends DvdData{
       
        public function showAllDvd(){
            $datas = $this->getAllDvd();
            if($datas != 0){
                foreach($datas as $data){
                    echo '<div class = bloks style = "background-color: rgb(186, 202, 245);">';
                    ?>
                    <div id = "<?php echo $data["SKU"]; ?>" class = "bloks2">
                    <?php
                        echo "SKU: DV".$data['SKU']."<br>";
                        echo "NAME: ".$data['NAME']."<br>";
                        echo "PRICE: ".$data['PRICE']."$<br>";
                        echo "SIZE: ".$data['SIZE']." MB<br><br>";
                        echo "</div>";?>
                     <input type = "checkbox" class = "button" name = "numD[]" value = "<?php echo $data["SKU"];?>"/>
                     <?php
                     echo'</div>';  
                  }
            }
        }
        public function deleteDvd(){
            if(isset($_POST['numD'])){
                $box = $_POST['numD'];
                $conn = $this->connect();

                foreach($box as $key=>$value){
                    $del = "DELETE FROM dvd WHERE SKU= $value";
                    if (mysqli_query($conn, $del)) {
                        // header("Refresh: 0");
                    }
                    else{
                    echo "Error deleting record: " . mysqli_error($conn);
                    }
                }
            }
            
        
    }
    }
?>

</body>
</html>