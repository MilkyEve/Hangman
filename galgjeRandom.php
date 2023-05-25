<?php
  $woorden = [
    "consider" ,"minute" ,"accord" ,"evident" ,"practice" ,"intend" ,"concern" ,"commit" ,"issue" ,"approach" ,"establish" ,"utter" ,"conduct" ,"engage" ,"obtain" ,"scarce" ,"policy" ,"straight" ,"stock" ,"apparent" ,"property" ,"fancy" ,"concept" ,"court" ,"appoint" ,"passage" ,"vain" ,"instance" ,"coast" ,"project" ,"commission" ,"constant" ,"circumstances" ,"constitute" ,"level" ,"affect" ,"institute" ,"render" ,"appeal" ,"generate" ,"theory" ,"range" ,"campaign"     
  ];

  $rand_keys = array_rand($woorden);
    setcookie('woord' , $woorden[$rand_keys] , time() + (86400 * 10) );
    //echo $woorden[$rand_keys];
    header("Location: game.php");
    ?>
