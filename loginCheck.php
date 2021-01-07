<?php include("config.php");

$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);


$query = "SELECT * FROM sql12385564.member where username = '".$username."' and password = '".$password."'";
$result = mysqli_query($conn, $query);

echo $result;


?>