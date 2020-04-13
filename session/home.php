<!DOCTYPE html>
<?php
  session_start();
  if(isset($_SESSION['user']))
    $loggedin=True;
  else
    $loggedin=False;
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- To display if logged in or not -->
    <p>Logged in : <?php echo $loggedin ?></p>

    <!-- login link will be present if $loggedin==False -->
    <?php if(!$loggedin) { ?>
      <a href="login.html">login</a>
    <?php } ?>


  </body>
</html>
