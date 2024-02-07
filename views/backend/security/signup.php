<?php
include '../../../header.php';

/* if(isset($_POST["pseudonyme"], $_POST["mot_de_passe"]){
	
}
*/

?>

	<body>
  
    <h1>Inscription</h1>

	<form action="signup.php" method="post">
		<input type="text" name="pseudonyme" placeholder="Pseudonyme"><br>
		<input type="password" name="mot_de_passe" placeholder="Mot de passe"><br>
		<input type="submit" name="envoyer" value="Envoyer">
	</form>
	</body>
</html>

