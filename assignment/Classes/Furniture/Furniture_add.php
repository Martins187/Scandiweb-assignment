<?php
    class Furniture extends conct{
        private $name;
        private $price;
        private $height;
        private $width;
        private $length;

        public function __construct($name,$price,$height,$width,$length){
            $this->name = $name;
            $this->price = $price;
            $this->size = $height;
            $this->size = $width;
            $this->size = $length;
        }
        public function addFn(){
            $add ="INSERT INTO furniture (`NAME`, `PRICE`, `HEIGHT`, `WIDTH`, `LENGTH`) 
            VALUES ('$this->name', '$this->price', '$this->height', '$this->width', '$this->length')";
        
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