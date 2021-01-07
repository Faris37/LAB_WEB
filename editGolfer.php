<?php include ("config.php");
   $id = $_GET['id']; 

   $sql = "SELECT golfer , score , par , net , scoreround , netround FROM golf where id = '".$id."'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {  
            $golfer = $row['golfer'];
            $score = $row['score'];
            $par = $row['par'];
            $net = $row['net'];
            $scoreround = $row['scoreround'];
            $netround = $row['netround'];
        }
    }
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
<form action="editGolferCheck.php?id=<?php echo $id ?>" method="POST">
    <table >
        <tr>
            <th>
                Golfer
            <th>
            <td>
                <input type="text" id="golfer" name="golfer" value="<?php echo $golfer ?>" >
            </td>
        </tr>
        <tr>
            <th>
                Score
            <th>
            <td>
                <input type="text" id="score" name="score" value="<?php echo $score ?>" >   
            </td>
        </tr>
        <tr>
            <th>
                Par
            <th>
            <td>
                <input type="text" id="par" name="par" value="<?php echo $par ?>" >   
            </td>
        </tr>
        <tr>
            <th>
                Net
            <th>
            <td>
                <input type="text" id="net" name="net" value="<?php echo $net ?>" >   
            </td>
        </tr>
        <tr>
            <th>
                Score Round
            <th>
            <td>
                <input type="text" id="scoreround" name="scoreround" value="<?php echo $scoreround ?>" >   
            </td>
        </tr>
        <tr>
            <th>
                Net Round
            <th>
            <td>
                <input type="text" id="netround" name="netround" value="<?php echo $netround ?>" >   
            </td>
        </tr>
        <tr>
            <th> <button type="submit"  name="submit">Submit</button> 
            </th>
        </tr>
    </table>
</form>
</article>

<hr style="width: 100%; height: 2px;">
<footer>
  <p>Copyright &#169; <a href="mailto:farisizwanfauzi@gmail.com">farisizwanfauzi@gmail.com</a></p>
</footer>

</body>
</html>