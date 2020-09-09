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
            // header("Refresh: 0");
           echo "Record added successfully";
        }
        else{
           echo "Error creating a record: " . mysqli_error($conn);
         }
    
        }
    }
?>