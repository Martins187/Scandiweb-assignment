<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class ViewBook extends BookData{
       
        public function showAllBook(){
            
            $datas = $this->getAllBook();
            if ($datas != 0){
                foreach($datas as $data){
                    echo '<div class = bloks style = " background-color: rgb(193, 253, 186);">';
                    ?>
                    <div id = "<?php echo $data["SKU"]; ?>" class = "bloks2 ">
                    <?php
                        echo "SKU: BK".$data['SKU']."<br>";
                        echo "NAME: ".$data['NAME']."<br>";
                        echo "PRICE: ".$data['PRICE']."$<br>";
                        echo "WEIGHT: ".$data['WEIGHT']." KG<br><br>";
                        echo "</div>";?>
                     <input type = "checkbox" class = "button" name = "numB[]" value = "<?php echo $data["SKU"];?>"/>
                     <?php
                     echo'</div>';  
                }
            }

        }
        public function deleteBook(){
            if(isset($_POST['numB'])){
                $box = $_POST['numB'];
                $conn = $this->connect();

                foreach($box as $key=> $value){
                    $del = "DELETE FROM book WHERE SKU= $value";
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