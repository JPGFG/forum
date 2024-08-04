<?php
// connect.php
$server = '127.0.0.1';
$username = 'root';
$password = 'Gyardsof4zero!';
$database = 'forum';

$conn = mysqli_connect($server, $username, $password, $database);

//check connection
if (!$conn){
    exit('Error: could not establish databse connection');
}

//select database
if (!mysqli_select_db($conn, $database)) {
    exit('Error: could not select the database');
}