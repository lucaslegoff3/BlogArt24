<!-- Load JS scripts -->

</body>
<footer>
	<div>
		<img src="<?php echo ROOT_URL; ?>/src/images/LS_logo_blanc.webp">
		<p>LS'Art © 2024</p>
	</div>	
	<div>
		<h5>Plan du site</h5>
		<p>Accueil</p>
		<p>Évènements</p>
		<p>Blog</p>
		<p>À propos</p>
		<p>Recherche</p>
		<p>Connexion</p>
	</div>
	<div>
		<h5>Légal</h5>
		<p>Gestion des cookies</p>
		<p>Mention légales</p>
		<p>Gestion de vos données</p>
	</div>
	<div>
		<h5>Nous suivre</h5>
		<p>S'abonner à la Newsletter</p>
		<a href="<?php echo ROOT_URL; ?>/views/frontend/contact.php"><button class="buttonfooter">Nous contacter</button></a>
	</div>

</footer>

<script>
	function popUpInscription(){
		let pop_up_inscription = document.getElementById("pop-up-inscription");
		pop_up_inscription.classList.remove("hidden");
	}

	function popUpInscriptionClose(){
		let pop_up_inscription = document.getElementById("pop-up-inscription");
		pop_up_inscription.classList.add("hidden");
	}
</script>

</html>