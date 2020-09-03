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
            foreach($datas as $data){
              echo '<div class = bloks>';
              ?>
              <div id = "<?php echo $data["SKU"]; ?>" class = "bloks2 ">
              <?php
               echo "SKU: BK".$data['SKU']."<br>";
               echo "NAME: ".$data['NAME']."<br>";
               echo "PRICE: ".$data['PRICE']."$<br>";
               echo "WEIGHT: ".$data['WEIGHT']." KG";
               echo "</div>";?>
               <input type = "checkbox" class = "button" name = "numBook[]" value = "<?php echo $data["SKU"];?>"/>
               <?php
               echo'</div>';  
            }

        }
        public function deleteBook(){
            
                $box = $_POST['numBook'];
                $conn = $this->connect();

                foreach($box as $value){
                    $del = "DELETE FROM book WHERE SKU= $value";
                    
                }
                if (mysqli_query($conn, $del)) {
                    header("Refresh: 0");
                   echo "Record deleted successfully";
                }
                else{
                   echo "Error deleting record: " . mysqli_error($conn);
                 }
            
        }
    }
?>

</body>
</html>