<?php

$servername = "127.0.0.1";
$username = "root";
$password = "Ankur11032@";
$db = "grocery1";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>