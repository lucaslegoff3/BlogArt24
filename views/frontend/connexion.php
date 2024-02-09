<?php
require_once '../../header.php';
sql_connect();

if ($_SERVER["REQUEST_METHOD"] === "POST"){
	$eMailMemb=$_POST["eMailMemb"];
	$mdp=$_POST["passMemb"];
	if(!empty($eMailMemb)){
		$checkeMailMemb = $bdd->prepare("SELECT * FROM MEMBRE WHERE eMailMemb = :eMailMemb");
        $checkeMailMemb->bindParam(":eMailMemb", $eMailMemb);
        $checkeMailMemb->execute();
        echo "BONJOUR!!";
		if ($checkeMailMemb->rowCount() > 0) {
            /*
            $mdpsecure = $checkeMailMemb->fetch()["password"];
			$mdpclient = sha1($mdp);*/
            $mdpclient=$mdp;
            $mdpsecure=$checkeMailMemb->fetch()["passMemb"];
            /*
			if ($souvenir) {
				$code = bin2hex(random_bytes(16));
				setcookie("souvenir", $code, time() + (30 * 24 * 60 * 60), "/");
				$cookie = $bdd->prepare("UPDATE inscription SET code_cookie = :code_cookie WHERE pseudoMemb = :pseudoMemb");
				$cookie->bindParam(":code_cookie", $code);
				$cookie->bindParam(":pseudoMemb", $pseudo);
				$cookie->execute();
			}*/
            if ($mdpclient==$mdpsecure) {
                $_SESSION['eMailMemb'] = $eMailMemb;
                header("Location: ../../");
                exit();
            } else {
                echo "Mot de passe incorrect.";
            }
		}else{
			$erreurMessage = "eMail manquant";
		}	
	}
}
?>
    <form action="connexion.php" class="formulaire" method="post">
        <div class="connect">
            <br>
            <H1>Connectez-vous</H1>
        </div>
        <hr>

        <div class="mail">
            <H2>E-Mail</H2>
            <input type="email" id="name" name="eMailMemb" required minlength="0" maxlength="" size="10" placeholder="Nom"/>
        </div>

        <div class="mdp">
            <H2>Mot de passe</H2>
            <input type="password" id="name" name="passMemb" required minlength="6" maxlength="25" size="10" placeholder="Mot de passe"/>
        </div>

        <div class="bouton_3">
            <p><input class="bouton" type="submit" value="Se connecter" /></p>
        </div>

        <div class="mdp_oublie">
            <img src="/src/images/Group_47.png">
            <a href="forgotpassword.php">Mot de passe oublié ?</a>
        </div>

        <Hr>

        <H3>Vous n'êtes pas encore inscrit ?</H3>
        <div class="inscription">
            <img src="/src/images/Group_47.png">
            <p><a href="inscription.php">Inscrivez-vous ici</a></p>
        </div>
    </form>

    <?php require_once '../../footer.php'; ?>