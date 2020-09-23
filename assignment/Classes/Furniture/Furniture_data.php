<?php
    class FnData extends conct{
       
        protected function getAllFn(){
           $sql = "SELECT * FROM furniture";
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