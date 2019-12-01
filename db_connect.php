<?php
$host = "localhost";
$db_name = "ppk";
$username = "root";
$password = "123";
 
try{
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
	$conn = mysqli_connect($host,$username,$password,$db_name);
}
 
catch(PDOException $exception){
    //to handle connection error
    echo "Connection error: " . $exception->getMessage();
}
?>