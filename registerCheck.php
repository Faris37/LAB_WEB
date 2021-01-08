<?php include ("config.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['SEX'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO member(NAME,EMAIL,PHONE,GENDER,USERNAME,PASSWORD) values('$name','$email','$phone','$gender','$username','$password')";
$result = mysqli_query($conn, $sql);

echo mysqli_error($conn);

if($result)
{
    echo "<script>
    alert('Member Successfully Registered');
    window.location.href='index.php';  
    </script>";
}
else
{
    echo "<script>
	alert('Member Failed To Register');
	window.location.href='register.php';  
	</script>";
}
    

?>