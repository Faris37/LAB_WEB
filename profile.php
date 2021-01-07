<?php include ("config.php");
   
    $id = $_GET['id'];
    
    $query = "select name,email,phone,gender from sql12385564.member where id = '".$id."'";
    $result = mysqli_query($conn, $query);
    
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
<a href="updateProfile.php?id=<?php echo $id?>">UPDATE PROFILE</a>
<a href="golfer.php">GOLFER</a>
<a href="index.php">LOGOUT</a>
</nav>

<article>
<div class="wrapper">
        <h2> Member Profile</h2>
        <form action="" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value= "<?php echo $name ?>" readonly>
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email ?>" readonly>
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $phone ?>" readonly>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="text" name="username" class="form-control" value="<?php echo $gender ?>" readonly>
                <span class="help-block"></span>
            </div>
        </form>
    </div>  
</article>
<hr style="width: 100%; height: 2px;">
<footer>
  <p>Copyright &#169; <a href="mailto:farisizwanfauzi@gmail.com">farisizwanfauzi@gmail.com</a></p>
</footer>

</body>
</html>