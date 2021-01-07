<?php include ("config.php");
    
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
<form action="GolferCheck.php" method="POST">
    <table style="text-align: left; border: 1px solid black; border-spacing: 5px;">
        <tr>
            <th>
                Golfer
            <th>
            <td>
                <input type="text" id="golfer" name="golfer"  >
            </td>
        </tr>
        <tr>
            <th>
                Score
            <th>
            <td>
                <input type="text" id="score" name="score"  >   
            </td>
        </tr>
        <tr>
            <th>
                Par
            <th>
            <td>
                <input type="text" id="par" name="par"  >   
            </td>
        </tr>
        <tr>
            <th>
                Net
            <th>
            <td>
                <input type="text" id="net" name="net"  >   
            </td>
        </tr>
        <tr>
            <th>
                Score Round
            <th>
            <td>
                <input type="text" id="scoreround" name="scoreround"  >   
            </td>
        </tr>
        <tr>
            <th>
                Net Round
            <th>
            <td>
                <input type="text" id="netround" name="netround"  >   
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