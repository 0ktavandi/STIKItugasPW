<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "date";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Error desc ".mysqli_connect_error());
}
//echo "Connected successfully";

?>
