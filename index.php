<!doctype html> 
<html>
  <head> 
  <meta charset="utf-8">
  </head> 
	<body>
<?php

/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */

echo "<img src='script-captchas.php' alt='captchas' />";

?>
		<form  method="POST" action="index.php">
		<label for="saisie">Veuillez saisir le code de sécurité</label>
		<input type="text" id="saisie" name="saisie">		
		<input type="submit" id="valider" name="valider">
		</form>
  	</body>
</html>
