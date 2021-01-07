<?php include ("config.php");
    
    session_start();

    $id = $_SESSION["id"] ;

    $sql = "SELECT id , golfer , score , par , net , scoreround , netround FROM golf";
    $result = mysqli_query($conn, $sql);

    if($result != false)
   {
	$total = mysqli_num_rows($result);
   }
   
   else
	   $total = 0;

?>

<html><head>
<title>Golfer</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
<hr style="width: 100%; height: 2px;">
</header>

<nav>
<a href="mainmenu.php">HOME</a>
<a href="profile.php">VIEW PROFILE</a>
<a href="updateProfile.php">UPDATE PROFILE</a>
<a href="golfer.php">GOLFER</a>
<a href="logout.php">LOGOUT</a>
</nav>

<article>
<center>
<a href="addGolfer.php">Add Golfer</a>
</center>
</article>

<article>
   <table style="text-align: left; border: 1px solid black; border-spacing: 5px;">
    
    <?php
        $a = 0;
        if ($total > 0 ){
        for($a = 1 ; $a <= $total ; $a++){
         $row = mysqli_fetch_array($result);
         ?>
        <tr >
        <th>
            Golfer
        </th>
        
        <td>
            <?php echo $row["golfer"] ; ?>
        </td>
    </tr>
    <tr>
        <th>
            Score
        </th>
        <td>
            <?php echo $row["score"] ; ?>
        </td>
    </tr>
    <tr>
        <th>
            Par
        </th>
    <td>
        <?php echo $row["par"] ; ?>
    </td>
    </tr>
    <tr>
        <th>
            Net
        </th>
    <td>
        <?php echo $row["net"] ; ?>
    </td>
    </tr>
    <tr>
        <th>
            Score Round
        </th>
    <td>
        <?php echo $row["scoreround"] ; ?>
    </td>
    </tr>
    <tr>
        <th>
            Net Round
        </th>
    <td>
        <?php echo $row["netround"] ; ?>
    </td>
    </tr>
    <tr>
        <th>
            Update
        </th>
    <td>
        <a href="editGolfer.php?id=<?php echo $row["id"] ; ?>">Edit</a>
        <a href="deleteGolfer.php?id=<?php echo $row["id"] ; ?>">Delete</a>
    </td>
    </tr>
    <tr>
        <td>
            __________________________
        </td>
    </tr>
    <?php
    }
    };
    ?> 
    

    </table>
</article>

<hr style="width: 100%; height: 2px;">
<footer>
  <p>Copyright &#169; <a href="mailto:farisizwanfauzi@gmail.com">farisizwanfauzi@gmail.com</a></p>
</footer>

</body></html>