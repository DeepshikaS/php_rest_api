<?php
    class Database{
   
        private $host = 'localhost';
        private $db_name = 'restapi';
        private $username = 'root';
        private $pwd = '';
        private $conn;

       
        public function connect(){
            $this->conn = null;

            try{
                $this->conn = new PDO('mysql:host='. $this->host . ';dbname='. $this->db_name, $this->username, $this->pwd);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            } catch(PDOException $e){
                echo 'connection error:' . $e->getMessage();
            }

            return $this->conn;
        }
    }