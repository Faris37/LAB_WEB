<?php include ("config.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['SEX'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "insert into member(name , email, phone, gender, username, password) values($name , $email, $phone, $gender, $username, $password)";
$result = mysqli_query($conn, $query);

if($result != "")
   {
    
    echo "<script>
	alert('Golfer Registered Successfully');
	window.location.href='index.php';  
	</script>";
   }
   
   else
     
?>
