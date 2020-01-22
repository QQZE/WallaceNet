<?php session_start();
$subject = $_SESSION['subjects'];
$subject_to_json=json_encode((array)$subject);?>
<!DOCTYPE html>
<head>
  <title>Wallace Net - Settings</title>
  <link rel="stylesheet" type="text/css" href="../innershell.css"/>
  <link rel="stylesheet" type="text/css" href="../../main.css"/>
  <script>
    function load() {
      var fromPHP=<?php echo $subject_to_json; ?>;
      for (i=0; i<5; i++) {
          var subject = fromPHP[i];
          if (subject == '') {
              x = i + 1;
              document.getElementById('input'+ x).style.display = "none";}}}
    function resetpassword() {
      var x = document.getElementById("ResetPassword");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";}}
    function deleteuser() {
      var x = document.getElementById("DeleteUser");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";}}
    function editinfo() {
      var x = document.getElementById("EditInfo");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";}}
    function deletesubject(x) {
      var con = confirm("Are you sure you want to delete this subject?");
      if (con == true) {
        var subjects = <?php echo $subject_to_json; ?>;
        var subject = subjects[x];
        var subject = "";
      }
    }
  </script>
</head>
<body style="text-align:center;" onload="load()">
  <header><a href="../../entrance.php" class="interactive-logo">Wallace Net</a></header>
  <h2><u>Settings</u></h2>
    <button onclick="resetpassword()">Reset Password</button>
    <div id="ResetPassword">
      <form method="post" action="resetpassword.php">
        <input name="Password" type="password" placeholder="Old password" required/><br><br>
        <input name="NewPassword" type="password" placeholder="New password" required/><br><br>
        <input name="NewPasswordValidation" type="password" placeholder="Retype new password" required/><br><br>
        <button name="submit">Submit</button>
      </form>
    </div><br>
    <button onclick="deleteuser()";>Delete User</button>
    <div id="DeleteUser">
      <form method="post" action="delete.php">
        <input name="Password" type="password" placeholder="Password" required/><br><br>
        <button name="submit">Submit</button>
      </form>
    </div><br>
    <button onclick="editinfo()";>Edit Information</button>
    <div id="EditInfo">
      <form method="post" action="edit.php">
        <input name="FirstName" type="text" placeholder="Name"/><br><br>
        <div id ="input1"><input name="Subject1" type="text" placeholder="<?php echo $_SESSION['subjects'][0]; ?>"/><button id="delete" onclick = "deletesubject(0)"><img src="../../delete.png"/></button><br><br></div>
        <div id ="input2"><input name="Subject2" type="text" placeholder="<?php echo $_SESSION['subjects'][1]; ?>"/><button id="delete" onclick = "deletesubject(1)"><img src="../../delete.png"/></button><br><br></div>
        <div id ="input3"><input name="Subject3" type="text" placeholder="<?php echo $_SESSION['subjects'][2]; ?>"/><button id="delete" onclick = "deletesubject(2)"><img src="../../delete.png"/></button><br><br></div>
        <div id ="input4"><input name="Subject4" type="text" placeholder="<?php echo $_SESSION['subjects'][3]; ?>"/><button id="delete" onclick = "deletesubject(3)"><img src="../../delete.png"/></button><br><br></div>
        <div id ="input5"><input name="Subject5" type="text" placeholder="<?php echo $_SESSION['subjects'][4]; ?>"/><button id="delete" onclick = "deletesubject(4)"><img src="../../delete.png"/></button><br><br></div>
        <button name="submit">Submit</button>
      </form>
    </div><br>
    <a href=../launcher.php><h1>Back to launcher</h1></a>
  <footer><p>&nbsp Created by 080664648 © 2019</p></footer>
</body>
