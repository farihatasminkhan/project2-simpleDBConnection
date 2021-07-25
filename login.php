<!DOCTYPE html>
<html> 
<head>
    <tittle>Login Page</tittle>
    <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
    <div id="frm">
        <form action="process.php" method="POST">
    <p>
        <lable>Username:</lable>
        <input type ="text" id="uname" name="uname" />
    </p>
    <p>
        <lable>Password:</lable>
        <input type ="password" id="passwd" name="passwd" />
    </p>
    <p>
        <input type ="submit" id="btn" value="Login" />
    </p>
        </form>

    </div>

</body>
</html>