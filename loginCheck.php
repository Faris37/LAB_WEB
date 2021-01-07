<?php include('config.php');

// Escape user inputs for security
$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

// Attempt insert query execution
$sql = "SELECT * FROM sql12385564.member where username = '".$username."' and password = '".$password."'";
$result = mysqli_query($conn, $sql);
if($result != false){
    
    echo $username;
    echo $password;
    echo $sql;
	/*echo "<script>
	alert('Login Successfully');
	window.location.href='http://localhost/CIMS/login.php';  
	</script>";*/
	//header("location: welcome.php");
} else{

   echo "<script>
	alert('No member with the username or password match');
	window.location.href='https://golferb031920011.herokuapp.com/index.php';  
	</script>";
}
 
// Close connection
mysqli_close($conn);
?>