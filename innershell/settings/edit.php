<?php session_start(); include('../../Super_Globals.php'); ?>
<?php
if(isset($_POST['submit'])){
    if(!(empty($_POST['FirstName']))) {
        $name = $_POST['FirstName'];
        $oldname = $_SESSION['FirstNameVar'];
    } else {
        $name = '';}
    if(!(empty($_POST['Subject1']))) {
        $subject1 = $_POST['Subject1'];
        $oldsubject1 = $_SESSION['subjects'][0];
    } else {
        $subject1 = '';}
    if(!(empty($_POST['Subject2']))) {
        $subject2 = $_POST['Subject2'];
        $oldsubject2 = $_SESSION['subjects'][1];
    } else {
        $subject2 = '';}
    if(!(empty($_POST['Subject3']))) {
        $subject3 = $_POST['Subject3'];
        $oldsubject3 = $_SESSION['subjects'][2];
    } else {
        $subject3 = '';}
    if(!(empty($_POST['Subject4']))) {
        $subject4 = $_POST['Subject4'];
        $oldsubject4 = $_SESSION['subjects'][3];
    } else {
        $subject4 = '';}
    if(!(empty($_POST['Subject5']))) {
        $subject5 = $_POST['Subject5'];
        $oldsubject5 = $_SESSION['subjects'][4];
    } else {
        $subject5 = '';}
    $conn = mysqli_connect("localhost", "rq3n576y_admin", "PeSTeCaDiTDeM", "rq3n576y_wallacenet");
    $db = mysqli_select_db($conn, "rq3n576y_wallacenet");
    if (!empty($subject1)) {
        mysqli_query($conn,"UPDATE links SET Subject = '$subject1' WHERE Subject = '$oldsubject1'");
    }
    if (!empty($subject2)) {
        mysqli_query($conn,"UPDATE links SET Subject = '$subject2' WHERE Subject = '$oldsubject2'");
    }
    if (!empty($subject3)) {
        mysqli_query($conn,"UPDATE links SET Subject = '$subject3' WHERE Subject = '$oldsubject3'");
    }
    if (!empty($subject4)) {
        mysqli_query($conn,"UPDATE links SET Subject = '$subject4' WHERE Subject = '$oldsubject4'");
    }
    if (!empty($subject5)) {
        mysqli_query($conn,"UPDATE links SET Subject = '$subject5' WHERE Subject = '$oldsubject5'");
    }
    if (!empty($name)) {
        mysqli_query($conn,"UPDATE users SET FirstName = '$name' WHERE FirstName = '$oldname'");
    }
    if (empty($name) && empty($subject1) && empty($subject2) && empty($subject3) && empty($subject4) && empty($subject5)) {
      echo '<script type="text/javascript">alert("'.$errors['NoInput'].'"); window.location.href = "settings.php";</script>';
    }
    mysqli_close($conn);
  }
?>
    <DOCTYPE! html>
    <head>
    <title>Reset password</title>
    <link rel="stylesheet" type="text/css" href="../innershell.css"/>
    <link rel="stylesheet" type="text/css" href="../../main.css"/>
    </head>
    <body style="text-align:center;">
      <header><a href="../../entrance.php" class="interactive-logo">Wallace Net</a></header>
      <h2>Succesfully updated</h2><br><br>
      <h2><a href='../../entrance.php'>Return to entrance</a></h2>
      <footer><p>&nbsp Created by 080664648 © 2019</p></footer>
    </body>
