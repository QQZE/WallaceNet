<?php session_start(); include('../../Super_Globals.php'); ?>
<?php
if(isset($_POST['submit'])){
  if(!(empty($_POST['Password']))) {
    $Password = $_POST['Password'];}
  if(!(empty($_POST['NewPassword']))) {
    $NewPassword = $_POST['NewPassword'];}
  if(!(empty($_POST['NewPasswordValidation']))) {
    $NewPasswordValidation = $_POST['NewPasswordValidation'];}
  $conn = mysqli_connect("localhost", "rq3n576y_admin", "PeSTeCaDiTDeM", "rq3n576y_wallacenet");
  $db = mysqli_select_db($conn, "rq3n576y_wallacenet");
  if($Password === $_SESSION['PasswordVar'] && $NewPassword === $NewPasswordValidation) {
    mysqli_query($conn,"UPDATE users SET Password = '$NewPassword' WHERE Password = '$Password'");
  } elseif ($Password != $_SESSION['PasswordVar']) {
    echo '<script type="text/javascript">alert("'.$errors['InvalidPassword'].'"); window.location.href = "settings.php";</script>';
  } elseif ($NewPassword != $NewPasswordValidation) {
    echo '<script type="text/javascript">alert("'.$errors['NewPasswordMatch'].'"); window.location.href = "settings.php";</script>';
  } else {
      echo '<script type="text/javascript">alert("'.$errors['UknownError'].'"); window.location.href = "settings.php";</script>';}
  mysqli_close($conn);
} ?>

  <DOCTYPE! html>
  <head>
  <title>Reset password</title>
  <link rel="stylesheet" type="text/css" href="../innershell.css"/>
  <link rel="stylesheet" type="text/css" href="../../main.css"/>
  </head>
  <body style="text-align:center;">
    <header><a href="../../entrance.php" class="interactive-logo">Wallace Net</a></header>
    <h2>Successfully updated password!</h2><br><br>
    <h2><a href='../../entrance.php'>return to entrance</a></h2>
    <footer><p>&nbsp Created by 080664648 © 2019</p></footer>
  </body>
