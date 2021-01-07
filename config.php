<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12385564";
$password = "kJeCJSBhwh";
$dbname = "sql12385564";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>