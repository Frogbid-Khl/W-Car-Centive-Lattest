<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "carcentive_update";
    private $domain = "W-Fiverr-Carcentive-Admin/";
    private $from_email='';
    private $conn;

    function __construct() {
        if($_SERVER['SERVER_NAME']=="carcentive.com"||$_SERVER['SERVER_NAME']=="www.carcentive.com"){
            $this->host = "localhost";
            $this->user = "ugda6t7vlbg3u";
            $this->password = "@gbz2et_gf$@";
            $this->database = "dbn6jp0qc1bhev";
        }

        $this->conn = $this->connectDB();
    }

    function connectDB() {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }

    function checkValue($value) {
        $value=mysqli_real_escape_string($this->conn, $value);
        return $value;
    }

    function selectQuery($query) {
        $result = mysqli_query($this->conn,$query);
        while($row=mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }

    function insertQuery($query) {
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    function updateQuery($query) {
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    function from_email(){
        return $this->from_email;
    }

    function domain(){
        return $this->domain;
    }

    function numRows($query) {
        $result  = mysqli_query($this->conn,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}
?>