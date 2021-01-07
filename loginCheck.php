<?php include ("config.php");

$username = $_POST['username'];
$password = $_POST['password'];


$query = "select id from sql12385564.member where username = '".$username."' and password = '".$password."'";
$result = mysqli_query($conn, $query);



if($result != "")
   { 
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {  
        $id = $row['id'];
        }
    }

    echo "<script>
	alert('Logged In');
	window.location.href='mainmenu.php?id=$id';  
    </script>";

   }
   
   else
   {

    echo "<script>
	alert('No Username or Password matched');
	window.location.href='https://golferb031920011.herokuapp.com';  
	</script>";

   }
	  
?>
