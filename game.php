<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Het spel</title>
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="main">
		<div class="mid">
			<?php
			
			$mistakesCount = 0;
			if(isset($_POST['button'])){
				if($_POST['button'] != 'reset'){
					$lastCharacter   = $_POST['button'];
					if(isset($_COOKIE['characters'])){
						$characters = $_COOKIE['characters'] . ',' . $_POST['button'];
					} else {
						$characters = $_POST['button'];
					}
					setcookie('characters' , $characters , time() + (86400 * 10) );
					header("Location: game.php");
				} else {
					setcookie("woord", "", time() - 3600); 
					setcookie("characters", "", time() - 3600); 
					setcookie("mistakes", "", time() - 3600); 
					header("Location: ./");
				}
			}
			

			if (!isset($_COOKIE['characters'])) {
				$_COOKIE['characters'] = " ";
			}
			$woordKarakters = str_split($_COOKIE['woord']);
			$keuzeKarakters = explode(",", $_COOKIE['characters']);

			$won = true;
			foreach ($woordKarakters as $woordKarakter) {
				$keuzeCorrect = false;
				foreach ($keuzeKarakters as $keuzeKarakter) {
					if($woordKarakter === $keuzeKarakter){
						$keuzeCorrect = true;
					}
                }
                echo "<div id='streep'>";
				if($keuzeCorrect){
					echo($woordKarakter);
				} else {
					echo('_ ');
					$won = false;
                }
                echo "</div>";
                
			}
			foreach ($keuzeKarakters as $keuzeKarakter) {
				$keuzeCorrect = false;
				foreach ($woordKarakters as $woordKarakter) {
					if($woordKarakter === $keuzeKarakter){
						$keuzeCorrect = true;
					}
				}
				
				if(!$keuzeCorrect){
					$mistakesCount++;
				}
			}
			$lose = false;
			if($mistakesCount === 9){
				$lose = true;
			}
			
			if($won){
				echo '<h1 class="end-text">You won!</h1><br><img src="win.png" alt="" class="endimg">';
			}elseif($lose){
				echo "<br>" . "<h1 class='end-text'>You lost <img src='loss.gif' alt='' class='endimg'></h1>";
				echo "<p id='correctword'>The correct word was<br>" . $_COOKIE['woord']. "</p>";
			}
			?>
			<br>
			<br>
			<br>
			<form action="game.php" method="post">

			<?php 
				$alphabet = range("a","z");
				foreach ($alphabet as $value) {
					$display = true;
					foreach ($keuzeKarakters as $keuzeKarakter) {
						if ($value === $keuzeKarakter) {
							$display = false;
						}
					}
					if ($won or $lose) {
						$display = false;
					}

					if ($display){
						echo('<button type="submit" name="button" value="' . $value . '" class="letter-open">' . $value . '</button>');
					} else {
						echo('<button type="submit" name="button" value="' . $value . '" disabled class="letter-closed">' . $value . '</button>');
					}
					
				}
			?>

				<br><button type="submit" name="button" value="reset" class="reset-btn">reset</button>
			</form>

			<h1>Gebruikte letters:</h1><p>
			<?php
				foreach ($keuzeKarakters as $keuzeKarakter) {
					echo($keuzeKarakter . ' , ');
				}
			?>
			</p>
		</div>
		<div class="bottom">
			<?php
			
				if($mistakesCount === 0){
					echo('<img id="dood" src="glagje1.png">');
				} if($mistakesCount === 1) {
					echo('<img id="dood" src="glagje2.png">');	
				} if($mistakesCount === 2) {
					echo('<img id="dood" src="glagje3.png">');	
				} if($mistakesCount === 3) {
					echo('<img id="dood" src="glagje4.png">');	
				} if($mistakesCount === 4) {
					echo('<img id="dood" src="glagje5.png">');	
				} if($mistakesCount === 5) {
					echo('<img id="dood" src="glagje6.png">');	
				} if($mistakesCount === 6) {
					echo('<img id="dood" src="glagje7.png">');	
				} if($mistakesCount === 7) {
					echo('<img id="dood" src="glagje8.png">');	
				} if($mistakesCount === 8) {
					echo('<img id="dood" src="glagje9.png">');	
				} if($mistakesCount === 9) {
					echo('<img id="dood" src="glagje10.png">');
				}
			?>
		</div>
	</div>

	</body>
</html>