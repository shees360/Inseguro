<?php
$servername = 'localhost'; 
$username = 'root';
$password = '';
$database = 'inseguro_v1.0';

$connect = new mysqli($servername, $username, $password, $database);
/* connect to database */

if($connect ->connect_error){
    die ("Unable to connect to database" . $connect ->connect_error); 
}
else{
    echo("Connected Successfully");
}
?>