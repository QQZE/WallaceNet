<?php session_start(); include('Super_Globals.php'); ?>
<?php
if(isset($_POST['submit'])){
 if(empty($_POST['Username']) || empty($_POST['Password'])){
   echo '<script type="text/javascript">alert("'.$errors['NoInput'].'");</script>';
 }
 else
 {
 $Username=$_POST['Username'];
 $Password=$_POST['Password'];
 $conn = mysqli_connect("localhost", "rq3n576y_admin", "PeSTeCaDiTDeM", "rq3n576y_wallacenet");
 //Selecting Database
 $db = mysqli_select_db($conn, "rq3n576y_wallacenet");
 $query = mysqli_query($conn, "SELECT * FROM users WHERE Password='$Password' AND Username='$Username'");
 $rows = mysqli_num_rows($query);

 if($rows == 1){
   header("Location: ../innershell/launcher.php"); // Redirecting to other page
 }
 else
 {
   echo '<script type="text/javascript">alert("'.$errors['LoginInvalid'].'");</script>';
 }

 $datas = array();
 if (mysqli_num_rows($query) > 0) {
     while($row = mysqli_fetch_assoc($query)) {
         $datas[] = $row;
     }
 }

 foreach ($datas as $data) {
     $_SESSION['UsernameVar'] = $data['Username'];
     $_SESSION['FirstNameVar'] = $data['FirstName'];
     $_SESSION['PasswordVar'] = $data['Password'];
     $_SESSION['SchoolVar'] = $data['School'];
     $_SESSION['UserIDVar'] = $data['UserID'];
 }

 $UserID = $_SESSION['UserIDVar'];
 $linksquery = mysqli_query($conn, "SELECT * FROM links WHERE UserID = '$UserID'");
 $subjects = array();
 $links = array();
 if (mysqli_num_rows($linksquery) > 0) {
     while($row2 = mysqli_fetch_assoc($linksquery)) {
         $links[] = $row2['URL'];
         $subjects[] = $row2['Subject'];}
       }
$subjects = array_unique($subjects);
for($x = 0; $x<5; $x++ ) {
  if (empty($subjects[$x])) {
    array_splice($subjects, $x, 1);
    array_push($subjects,"");
  }}
 $_SESSION['links'] = $links;
 $_SESSION['subjects'] = $subjects;
 mysqli_close($conn); // Closing connection.
 }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Wallace Net</title>
        <script type="text/javascript" src="main.js"></script>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" type="text/css" href="outershell/outershell.css">
        <script>
            function register() {
                window.location.href = "outershell/register.html";}
        </script>
    </head>
    <body style="background-color: darkblue; text-align: center;">
            <h1 class="titletext">Wallace Net</h1>
            <form method="post" action="#">
            <input type="text" name="Username" placeholder="Username" required/> <br>
            <input type="password" name="Password" placeholder="Password" required/> <br><br>
            <button name="submit">Log in</button><br><br></form>
            <button class="register" onclick="register()">Register</button>
        <footer><p>&nbsp Created by Mikey © 2019</p></footer>
    </body>
</html>
