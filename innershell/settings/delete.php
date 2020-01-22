<?php session_start(); include('../../Super_Globals.php'); ?>
<?php
$UserID = $_SESSION['UserIDVar'];
if(isset($_POST['submit'])){
  if(!(empty($_POST['Password']))) {
    $Password = $_POST['Password'];}
  $conn = mysqli_connect("localhost", "rq3n576y_admin", "PeSTeCaDiTDeM", "rq3n576y_wallacenet");
  $db = mysqli_select_db($conn, "rq3n576y_wallacenet");
  if($Password === $_SESSION['PasswordVar']) {
    mysqli_query($conn,"DELETE FROM users WHERE users.UserID = '$UserID'");
    }
  else {
    echo '<script type="text/javascript">alert("'.$errors['InvalidPassword'].'"); window.location.href = "settings.php";</script>';
  }
  mysqli_close($conn);
}
?>

<DOCTYPE! html>
<head>
  <title>Delete user</title>
  <link rel="stylesheet" type="text/css" href="../innershell.css"/>
  <link rel="stylesheet" type="text/css" href="../../main.css"/>
</head>
<body style="text-align:center;">
  <header><a href="../../entrance.php" class="interactive-logo">Wallace Net</a></header>
  <h2>Successfully removed account</h2><br><br>
  <h2><a href='../../entrance.php'>return to entrance</a></h2>
  <footer><p>&nbsp Created by 080664648 © 2019</p></footer>
</body>
