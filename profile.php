<?php include ("config.php");
    $id = $_GET['id'];

    $sql = "SELECT name , email , phone , gender FROM member where id = '".$id."'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {  
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $gender = $row['gender'];
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
<a href="mainmenu.php?id=<?php echo $id?>">HOME</a>
<a href="profile.php?id=<?php echo $id?>">VIEW PROFILE</a>
<a href="golfer.php?id=<?php echo $id?>">GOLFER</a>
<a href="index.php">LOGOUT</a>
</nav>

<article>
    <table style="text-align: left; border: 1px solid black; border-spacing: 5px;">
        <tr>
            <th>
                Name
            <th>
            <td>
                <?php echo $name ?>
            </td>
        </tr>
        <tr>
            <th>
                Email
            <th>
            <td>
                <?php echo $email ?>
            </td>
        </tr>
        <tr>
            <th>
                Phone
            <th>
            <td>
                <?php echo $phone ?>
            </td>
        </tr>
        <tr>
            <th>
                Gender
            <th>
            <td>
                <?php echo $gender ?>
            </td>
        </tr>
    </table>
</article>

<hr style="width: 100%; height: 2px;">
<footer>
  <p>Copyright &#169; <a href="mailto:farisizwanfauzi@gmail.com">farisizwanfauzi@gmail.com</a></p>
</footer>

</body></html>