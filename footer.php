<!-- Load JS scripts -->

</body>
<footer>
	<div>
		<img src="<?php echo ROOT_URL; ?>/src/images/LS_logo_blanc.webp">
		<p>LS'Art © 2024</p>
	</div>
	<div>
		<h5>Plan du site</h5>
		<a href="/">Accueil</a>
		<a href="/views/frontend/evenements.php">Évènements</a>
		<a href="/">Blog</a>
		<a href="/">À propos</a>
		<a href="/">Recherche</a>
		<a href="/views/frontend/connexion.php">Connexion</a>
	</div>
	<div>
		<a href="#">Légal</a>
		<a href="#">Gestion des cookies</a>
		<a href="#">Mention légales</a>
		<a href="#">Gestion de vos données</a>
	</div>
	<div>
		<h5>Nous suivre</h5>
		<p>S'abonner à la Newsletter</p>
		<a href="<?php echo ROOT_URL; ?>/views/frontend/contact.php"><button class="buttonfooter">Nous contacter</button></a>
	</div>

</footer>

<script>
	function popUpInscription() {
		let pop_up_inscription = document.getElementById("pop-up-inscription");
		pop_up_inscription.classList.remove("hidden");
	}

	function popUpInscriptionClose() {
		let pop_up_inscription = document.getElementById("pop-up-inscription");
		pop_up_inscription.classList.add("hidden");
	}
</script>

</html>