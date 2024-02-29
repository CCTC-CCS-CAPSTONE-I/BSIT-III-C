<?php 
$servername="localhost";
$username="u461943529_canteen_card";
$password="Canteen_Card2";
$database="u461943529_canteen_card";

$conn= new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
}
else{
    echo "";
}
?>
