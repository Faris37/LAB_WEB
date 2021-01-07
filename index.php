<?php include ("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover; }
        .wrapper{ width: 350px; padding: 20px; margin: auto; background-color: white; margin-top: 50px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login Golfer</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="loginCheck.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo ''; ?>">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            New User? <a href="register.php">Register Now</a>
        </form>
    </div>    
</body>
</html>
