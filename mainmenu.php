<?php include ("config.php");
    $id = $_GET['id'];
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
<a href="https://golferb031920011.herokuapp.com/profile.php?id=<?php echo $id?>">VIEW PROFILE</a>
<a href="golfer.php?id=<?php echo $id?>">GOLFER</a>
<a href="index.php">LOGOUT</a>
</nav>



<hr style="width: 100%; height: 2px;">
<footer>
  <p>Copyright &#169; <a href="mailto:farisizwanfauzi@gmail.com">farisizwanfauzi@gmail.com</a></p>
</footer>

</body></html>