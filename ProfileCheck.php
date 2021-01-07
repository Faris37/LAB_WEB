<?php include ("config.php");

session_start();

$id = $_SESSION["id"] ;

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['SEX'];

$sql = "UPDATE member set name = '$name' , email = '$email' , phone = '$phone' , gender = '$gender' where id = '$id' ";
$result = mysqli_query($conn, $sql);

if($result)
{
    echo "<script>
    alert('Member Successfully Updated');
    window.location.href='updateProfile.php';  
    </script>";
}
else
{
    echo "<script>
	alert('Member Failed To Update');
	window.location.href='updateProfile.php';  
	</script>";
}
    

?>