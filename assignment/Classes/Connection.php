<?php
    class conct{
        private $servername;
        private $username;
        private $password;
        private $dbname;

        protected function connect(){
            $this->servername = "localhost";
            $this->username = "Martins";
            $this->password = "Kiochader123";
            $this->dbname = "product_list";
        
            $conn = new mysqli($this->servername, $this->username,
            $this->password, $this->dbname);

            return $conn;
        }
    }
?>