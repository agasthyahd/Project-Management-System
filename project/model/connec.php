

<?php
class Connection{
        protected $conn;
        public function Connection(){
                $servername="localhost";
                $username="root";
                $pswrd="root";
                $dbname="mysql";
                $this->conn=mysqli_connect($servername,$username,$pswrd,$dbname);
               // return $conn;
}}


                ?>