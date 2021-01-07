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
        <form action="profileCheck.php?id=<?php echo $id?>" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email ?>">
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $phone ?>">
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label>Gender </label><br>
                <input type="radio" id="male" name="SEX" value="MALE" <?php echo ($gender=="MALE")?'checked':'' ?> required >
				<label for="male">Male</label><br>
				<input type="radio" id="female" name="SEX" value="FEMALE" <?php echo ($gender=="FEMALE")?'checked':'' ?> >
				<label for="male">Female</label><br>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div> 
        </form>
    </div>  
    </article>  
</body>
</html>
