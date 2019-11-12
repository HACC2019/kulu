<?php
$dBServername = "localhost";
$dBUsername = "rkishida";
$dBPassword = "qwerASDF12#$";
$dBName = "m_loginsystem";

// Create connection
$conn = mysql_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection

 $conn = new PDO("mysql:host=$dBServername;dbname=$dBName", $dBUsername, $dBPassword);    
    // set the PDO error mode to exception    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    
 }
 

 
 
 ?>
