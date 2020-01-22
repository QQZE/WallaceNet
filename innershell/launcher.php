<?php
session_start();
?>
<?php $subject = $_SESSION['subjects'];
$subject_to_json=json_encode((array)$subject);
$school = $_SESSION['SchoolVar'];
if ($school == "Wallace High School") {
    $logo = '<img class="schoollogo" src="../wallacehigh.png">';
} else if ($school == "Stirling High School") {
    $logo = '<img class="schoollogo" src="../stirlinghigh.png">';
} else if ($school == "Saint Modans High School") {
    $logo = '<img class="schoollogo" src="../stmodans.png">'; }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Wallace Net - Home</title>
        <link rel="stylesheet" type="text/css" href="innershell.css"/>
        <link rel="stylesheet" type="text/css" href="../main.css"/>
    </head>
    <body onload="newsubject()">
        <header><a href="../entrance.php" class="interactive-logo">Wallace Net</a><class id= "logo"><?php if (!empty($logo)){echo $logo;} ?></class></header>
        <p class="welcome">
        Welcome back, <?php if(empty($_SESSION['FirstNameVar'])){echo $_SESSION['UsernameVar'];} else {echo $_SESSION['FirstNameVar'];} ?>
        </p>
        <p class="date">Date:
            <script> document.write(new Date().toLocaleDateString()); </script></p>
        <div class="grid">
            <div id="grid-container1">
              <h1><?php echo $_SESSION['subjects'][0]; ?></h1>
                <div id="links1"><div id="text1">
                  <a target="_blank" href="<?php echo $_SESSION['links'][0];?>">Link 1</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][1];?>">Link 2</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][2];?>">Link 3</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][3];?>">Link 4</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][4];?>">Link 5</a></div>
                </div>
            </div>
            <div id="grid-container2">
              <h1><?php echo $_SESSION['subjects'][1]; ?></h1>
                <div id="links2"><div id="text2">
                  <a target="_blank" href="<?php echo $_SESSION['links'][5];?>">Link 1</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][6];?>">Link 2</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][7];?>">Link 3</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][8];?>">Link 4</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][9];?>">Link 5</a></div>
                </div>
            </div>
            <div id="grid-container3">
              <h1><?php echo $_SESSION['subjects'][2]; ?></h1>
                <div id="links3"><div id="text3">
                  <a target="_blank" href="<?php echo $_SESSION['links'][10];?>">Link 1</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][11];?>">Link 2</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][12];?>">Link 3</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][13];?>">Link 4</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][14];?>">Link 5</a></div>
                </div>
            </div>
            <div id="grid-container4">
              <h1><?php echo $_SESSION['subjects'][3]; ?></h1>
                <div id="links4"><div id="text4">
                  <a target="_blank" href="<?php echo $_SESSION['links'][15];?>">Link 1</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][16];?>">Link 2</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][17];?>">Link 3</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][18];?>">Link 4</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][19];?>">Link 5</a></div>
                </div>
            </div>
            <div id="grid-container5">
              <h1><?php echo $_SESSION['subjects'][4]; ?></h1>
                <div id="links5"><div id="text5">
                  <a target="_blank" href="<?php echo $_SESSION['links'][20];?>">Link 1</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][21];?>">Link 2</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][22];?>">Link 3</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][23];?>">Link 4</a><br>
                  <a target="_blank" href="<?php echo $_SESSION['links'][24];?>">Link 5</a></div>
                </div>
            </div>
            <div id="addsubject">
              <h1><a href="newsubject.html">Add new subject</a></h1>
            </div>
        </div>
        <!-- footer -->
        <footer><p>&nbsp  Created by 080664648 © 2019
                </p>
            <a href="settings/settings.php"> <img class="settings" src="settings/settingsWheel.png"/> </a>
            </footer>
            <script>
            function newsubject() {
                var fromPHP=<?php echo $subject_to_json; ?>;
                for (i=0; i<5; i++) {
                    var subject = fromPHP[i];
                    if (subject == '') {
                        x = i + 1;
                        document.getElementById('grid-container'+ x).style.display = "none";}}
                var container5 = document.getElementById("grid-container5");
                var isVisible = window.getComputedStyle(container5).getPropertyValue("display");
                if (isVisible == "block") {
                  var rem = document.getElementById('addsubject');
                  rem.remove();}}
            </script>
    </body>
</html>
