<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class ViewFn extends FnData{
       
        public function showAllFn(){
            $datas = $this->getAllFn();
            if($datas != 0){
                foreach($datas as $data){
                    echo '<div class = bloks style = "background-color: rgb(255, 213, 179);">';
                    ?>
                    <div id = "<?php echo $data["SKU"]; ?>" class = "bloks2">
                    <?php
                        echo "SKU: FN".$data['SKU']."<br>";
                        echo "NAME: ".$data['NAME']."<br>";
                        echo "PRICE: ".$data['PRICE']."$<br>";
                        echo "D-S: ".$data['DIMENSIONS']."<br><br>";
                        echo "</div>";?>
                     <input type = "checkbox" class = "button" name = "numF[]" value = "<?php echo $data["SKU"];?>"/>
                     <?php
                     echo'</div>';  
                  }
            }
        }
        public function deleteFn(){
            if(isset($_POST['numF'])){
                $box = $_POST['numF'];
                $conn = $this->connect();

                foreach($box as $key=>$value){
                    $del = "DELETE FROM furniture WHERE SKU= $value";
                    if (!mysqli_query($conn, $del)) {
                        echo "Error deleting furniture record: " . mysqli_error($conn);
                    }
                    
                }
            }
            
        
    }
    }
?>

</body>
</html>