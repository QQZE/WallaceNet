<?php session_start(); include('../Super_Globals.php'); ?>
<?php
$UserID = $_SESSION['UserIDVar'];
$Newsubject = "";
if(isset($_POST['submit'])){
  if(strlen($_POST['newsubject']) > 15) {
    echo '<script type="text/javascript">alert("'.$errors['LongSubjectName'].'"); window.location.href = "newsubject.html";</script>';
  } else if(!(empty($_POST['newsubject']))) {
    $Newsubject = $_POST['newsubject'];}
    if(!(empty($_POST['url1']))) {
      $URL1 = $_POST['url1'];
    } else {
      $URL1 = Null;}
    if(!(empty($_POST['url2']))) {
      $URL2 = $_POST['url2'];
    } else {
      $URL2 = Null;}
    if(!(empty($_POST['url3']))) {
      $URL3 = $_POST['url3'];
    } else {
      $URL3 = Null;}
    if(!(empty($_POST['url4']))) {
      $URL4 = $_POST['url4'];
    } else {
      $URL4 = Null;}
    if(!(empty($_POST['url5']))) {
      $URL5 = $_POST['url5'];
    } else {
      $URL5 = Null;}
    $conn = mysqli_connect("localhost", "rq3n576y_admin", "PeSTeCaDiTDeM", "rq3n576y_wallacenet");
    $db = mysqli_select_db($conn, "rq3n576y_wallacenet");
    mysqli_query($conn,"INSERT INTO links (Subject, URL, UserID) VALUES ('$Newsubject','$URL1','$UserID'),('$Newsubject','$URL2','$UserID'),('$Newsubject','$URL3','$UserID'),('$Newsubject','$URL4','$UserID'),('$Newsubject','$URL5','$UserID')");
    mysqli_close($conn);} ?>

<DOCTYPE! html>
<head>
  <title>New subject</title>
  <link rel="stylesheet" type="text/css" href="innershell.css"/>
  <link rel="stylesheet" type="text/css" href="../main.css"/>
</head>
<body>
  <header><a href="../entrance.php" class="interactive-logo">Wallace Net</a></header>
  <h2>Subject succesfully added</h2><br><br>
  <h2><a href='../entrance.php'>Please log in again to use update</a></h2>
  <footer><p>&nbsp  Created by 080664648 © 2019</p></footer>
</body>
