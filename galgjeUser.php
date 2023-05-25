<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User</title>
     <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>What word would you like to play?</h1>
        <form  action="#" method="post">
        <input type="text" name="woord" class="text-input"><br><Br>
    <button type="submit" name="button" class="start-btn">Start game</button>

<?php
if (isset($_POST['woord'])) {
$choice = strtolower($_POST['woord']);
setcookie('woord' , $choice , time() + (86400 * 10) );
header("Location: game.php");
}
?>

</form>
  </body>
</html>