<?php

//When new object is created and fuction connect() is called, conncection to the mysql database is made.

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