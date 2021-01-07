<?php include("config.php");

// Escape user inputs for security
$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

// Attempt insert query execution
$sql = "SELECT * FROM sql12385564.member where username = '".$username."' and password = '".$password."'";
$result = mysqli_query($conn, $sql);

echo $result;

// Close connection
mysqli_close($conn);
?>