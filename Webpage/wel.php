<?php session_start();?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
       <?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>