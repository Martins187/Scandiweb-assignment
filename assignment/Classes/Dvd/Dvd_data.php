<?php
    class DvdData extends conct{
       
        protected function getAllDvd(){
           $sql = "SELECT * FROM dvd";
        //    $result = mysqli_query($conn,$sql);
           $result = $this->connect()->query($sql);
           $numRows = $result->num_rows;
           if($numRows > 0){
               while($row = $result->fetch_assoc()){
                   $data[] = $row;
               }
               return $data;
           }
           else{
            return '0';
           }
        }
    }
?>