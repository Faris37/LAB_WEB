<?php include ("config.php");

$id = $_GET['id'];

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['SEX'];

$sql = "UPDATE sql12385564.member SET name = $name , email = $email , phone = $phone , gender = $gender where id = ".$id."";
$result = mysqli_query($conn, $sql);
	
	if ($result) 
	{
		echo "<script>window.alert ('Temu Janji Telah Dikemaskini.')</script>";
		echo "<script>window.location = 'profile.php'</script>";
    }

    else
        echo $sql;
     
?>
