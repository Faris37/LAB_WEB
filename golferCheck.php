<?php include ("config.php");

$golfer = $_POST['golfer'];
$score = $_POST['score'];
$par = $_POST['par'];
$net = $_POST['net'];
$scoreround = $_POST['scoreround'];
$netround = $_POST['netround'];

$sql = "INSERT INTO golf(golfer,score,par,net,scoreround,netround) values('$golfer','$score','$par','$net','$scoreround','$netround')";
$result = mysqli_query($conn, $sql);



if($result)
{
    echo "<script>
    alert('Golfer Successfully Added');
    window.location.href='golfer.php';  
    </script>";
}
else
{
    echo "<script>
	alert('Golfer Failed To Add');
	window.location.href='addGolfer.php';  
	</script>";
}
  

?>