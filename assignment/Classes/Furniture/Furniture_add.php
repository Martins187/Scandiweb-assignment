<?php
    class Furniture extends conct{
        private $name;
        private $price;
        private $dimensions;

        public function __construct($name,$price,$height,$width,$length){
            $this->name = $name;
            $this->price = $price;
            $this->dimensions = $height.'m/ '.$width.'m/ '.$length.'m';
            
        }
        public function addFn(){
            $add ="INSERT INTO furniture (`NAME`, `PRICE`, `DIMENSIONS`) 
            VALUES ('$this->name', '$this->price', '$this->dimensions')";
        $conn = $this->connect();
        if (mysqli_query($conn, $add)) {
            // header("Refresh: 0");
            echo '<div style = "margin: 15px; font-size: 20px; font-weight: 600; color: green;">Record added successfully!<div>';
        }
        else{
           echo "Error creating a record: " . mysqli_error($conn);
         }
    
        }
    }
?>