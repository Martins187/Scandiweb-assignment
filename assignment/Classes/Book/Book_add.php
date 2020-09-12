<?php
    class Book extends conct{
        private $name;
        private $price;
        private $weight;

        public function __construct($name, $price, $weight){
            $this->name = $name;
            $this->price = $price;
            $this->weight = $weight;
        }
        public function addBook(){
            $add ="INSERT INTO book (`NAME`, `PRICE`, `WEIGHT`) 
            VALUES ('$this->name', '$this->price', '$this->weight')";
        
        if (mysqli_query($this->connect(), $add)) {
            // header("Refresh: 0");
            echo '<div style = "margin: 15px; font-size: 20px; font-weight: 600; color: green;">Record added successfully!<div>';
        }
        else{
           echo "Error creating a record: " . mysqli_error($conn);
         }
    
        }
    }
?>