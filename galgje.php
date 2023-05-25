<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>opties</title>
     <link rel="stylesheet" type="text/css" href="galgje.css">
  </head>
    <body>

    <img id="muisKaas"src="hangmanDead.png" alt="kaasje">
        
    <div id="index">
        <h1>Galgje</h1>
        <h2>YO WELKE VERSIE WIL JE?</h2>
    </div>

    <div>
        <form action="galgjeRandom.php" method="post">
            <button  type="submit" name="random">Wij hebben een mooi woord voor je!</button>
        </form>
        <form action="galgjeUser.php" method="post">
            <button type="submit" name="user" >Lekker zelf een woord kiezen!</button>
        </form>
    </div>

  </body>
</html>