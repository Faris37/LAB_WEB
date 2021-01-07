<?php include ("config.php");

$id = $_GET['id'];


$sql = "delete from golf  where id = '$id'";
$result = mysqli_query($conn, $sql);

if($result)
{
    echo "<script>
    alert('Golfer Successfully Deleted');
    window.location.href='golfer.php';  
    </script>";
}
else
{
    echo "<script>
	alert('Golfer Failed To Delete');
	window.location.href='golfer.php';  
	</script>";
}
 

?>