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
        <h2>Register Golfer</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="RegisterCheck.php" method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="">
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="">
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="<?php echo ''; ?>">
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label>Gender </label><br>
                <input type="radio" id="male" name="SEX" value="MALE" required >
				<label for="male">Male</label><br>
				<input type="radio" id="female" name="SEX" value="FEMALE" >
				<label for="male">Female</label><br>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
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
        </form>
    </div>    
</body>
</html>
