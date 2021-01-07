<?php include ("config.php");

$id = $_GET['id'];



$golfer = $_POST['golfer'];
$score = $_POST['score'];
$par = $_POST['par'];
$net = $_POST['net'];
$scoreround = $_POST['scoreround'];
$netround = $_POST['netround'];

$sql = "Update golf set golfer = '$golfer', score = '$score' , par = '$par' , net = '$net' , scoreround = '$scoreround' , netround = '$netround' where id = '$id'";
$result = mysqli_query($conn, $sql);



if($result)
{
    echo "<script>
    alert('Golfer Successfully Updated');
    window.location.href='golfer.php';  
    </script>";
}
else
{
    echo "<script>
	alert('Golfer Failed To Update');
	window.location.href='golfer.php';  
	</script>";
}
 

?>