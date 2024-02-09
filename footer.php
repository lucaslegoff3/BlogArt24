<!-- Load JS scripts -->

</body>
<footer>
	<div>
		<img src="<?php echo ROOT_URL; ?>/src/images/LS_logo_blanc.webp">
		<p>LS'Art © 2024</p>
	</div>
	<div>
		<h5>Plan du site</h5>
		<p><a class="liens_footer" href="/">Accueil</a></p>
		<p><a class="liens_footer"  href="/views/frontend/evenements.php">Évènements</a></p>
		<p><a class="liens_footer"  href="/">Blog</a></p>
		<p><a class="liens_footer"  href="/">À propos</a></p>
		<p><a  class="liens_footer" href="/">Recherche</a></p>
		<p><a  class="liens_footer" href="/views/frontend/connexion.php">Connexion</a></p>
	</div>
	<div>
	<h5>Légal</h5>
	<p><a  class="liens_footer" href="#">Gestion des cookies</a></p>
	<p><a  class="liens_footer" href="#">Mention légales</a></p>
	<p><a  class="liens_footer" href="#">Gestion de vos données</a></p>
	</div>
	<div>
		<h5>Nous suivre</h5>
		<p><a  class="liens_footer" href="/views/frontend/newsletter.php">S'abonner à la Newsletter</a></p>
		<p><a href="<?php echo ROOT_URL; ?>/views/frontend/contact.php"><button class="buttonfooter">Nous contacter</button></a></p>
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

<style> 

a{
	color:white;
	text-decoration: none;
}

</style>


</html>