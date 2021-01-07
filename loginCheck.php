<?php 
include ("config.php");

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT id FROM member where username = '".$username."' and password = '".$password."'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {  
         $id = $row['id'];
    }
}
else
    $id = "";

    if($id != "")
    {
        echo "<script>
	    alert('Logged In');
	    window.location.href='mainmenu.php?id=$id';  
        </script>";

   }
   
   else
   {

    echo "<script>
	alert('No Username or Password matched');
	window.location.href='index.php';  
	</script>";

   }
	  
?>
