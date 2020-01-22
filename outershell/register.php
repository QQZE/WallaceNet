<?php
    include('../Super_Globals.php');

    if(!empty($_POST['Username']))
    {
        $Username = $_POST['Username'];
    }
    else
    {
        echo '<script type="text/javascript">alert("'.$errors['NoUsernameInput'].'"); window.location.href = "register.html";</script>';
    }

    if(!empty($_POST['FirstName']))
    {
        $FirstName = $_POST['FirstName'];
    }
    else
    {
        $FirstName = NULL;
    }

    if(!empty($_POST['Password']))
    {
        $Password = $_POST['Password'];
    }
    else
    {
        echo '<script type="text/javascript">alert("'.$errors['NoPasswordInput'].'"); window.location.href = "register.html";</script>';
    }

    if(!empty($_POST['School']))
    {
        $School = $_POST['School'];
    }
    else
    {
        $School = "Other";
    }

$conn = mysqli_connect('localhost', 'rq3n576y_admin', 'PeSTeCaDiTDeM', 'rq3n576y_wallacenet');

if(!$conn)
{
    die("connection Failed: ".mysqli_connect_error());
}

$select = mysqli_query($conn, "SELECT * FROM users WHERE Username='$Username'");
$rows = mysqli_num_rows($select);

if($rows > 0){
    echo '<script type="text/javascript">alert("'.$errors['UsernameTaken'].'"); window.location.href = "register.html";</script>';
} else {
    $insert = "INSERT INTO users (Username, FirstName, School, Password) VALUES ('$Username','$FirstName','$School','$Password')";
    mysqli_query($conn, $insert);
}

mysqli_close($conn);

?>

<DOCTYPE! html>
    <head>
        <title>Wallace Net - Details</title>
    <link href="outershell.css" type="text/css" rel="stylesheet">
    <link href="../main.css" rel="stylesheet" type="text/css">
    <style>
        body{
            background-color: darkblue;
        }
        h1{
            color: ivory;
            font-family: Harvard;
        }
        </style>
    </head>
    <body>
        <a href="../entrance.php" class="interactive-logo">Wallace Net</a>
        <h1>Succesfully Registered</h1>
        <a href="../entrance.php" class="link">return to log in page</a>
        <footer><p>&nbsp Created by 080664648 © 2019</p></footer>
    </body>
