<?php
$servername = "thenexusplanner.click";
$username = "thenexus_thenexusplanner";
$password = "Ito#,&65Y^KU";
$dbname = "thenexus_thenexusplanner";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection to database failed: " . $conn->connect_error);
} 
?>