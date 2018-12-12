<!doctype html> 
<html>
  <head> 
  <meta charset="utf-8">
  </head> 
	<body>
		<form  method="POST" action="index.php">
		<input type="text" id="saisie" name="saisie">		
		<input type="submit" id="valider" name="valider">
		</form>
<?php

/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */

echo "<img src='script-captchas.php' alt='captchas' />";

?>
  	</body>
</html>
