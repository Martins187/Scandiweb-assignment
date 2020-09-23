<?php
    class Dvd extends conct{
        private $name;
        private $price;
        private $size;

        public function __construct($name,$price,$size){
            $this->name = $name;
            $this->price = $price;
            $this->size = $size;
        }
        public function addDvd(){
            $add ="INSERT INTO dvd (`NAME`, `PRICE`, `SIZE`) 
            VALUES ('$this->name', '$this->price', '$this->size')";
        
            if (mysqli_query($this->connect(), $add)) {
                echo '<div style = "margin: 15px; font-size: 20px; font-weight: 600; color: green;">Record added successfully!<div>';
            }
            else{
            echo "Error creating a record: " . mysqli_error($conn);
            }
        }
    }
?>