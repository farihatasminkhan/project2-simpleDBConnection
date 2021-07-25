<!DOCTYPE html>
<html> 
<head>
    <title>Simple Covid-19 Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
    <div id="frm">
        <h3>Simple Covid-19 Registration Form</h3>
        <form action="process_registration_form_data.php" method="POST">
            <p>
                <lable>Name:</lable>
                <input type ="text" id="name" name="name" />
            </p>
            <p>
                <lable>National ID Card: </lable>
                <input type ="text" id="nid" name="nid" />
            </p>
            <p>
                <label for="">Age: </label>
                <input type="text" id="age" name="age">

            </p>
    <p>
        <input type ="submit" id="btn" value="Login" />
    </p>
        </form>

    </div>

</body>
</html>