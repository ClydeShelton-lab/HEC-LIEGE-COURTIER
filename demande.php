<!DOCTYPE html>
	<html>
		<head>
			<title>Demande de devis</title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="./css/style1.css"/>
		</head>
	<body>
		<div class="all">
		<header>
			<a href="./accueil.php"><img id="logo" src="./multimedia/logo.png"></a>
		</header>
		<main>
			<div class="liens">
				 	<a href="./accueil.php">Accueil</a>
				 	<a href="./produits.php">Nos produits</a>
				 	<a href="./partenaires.php">Nos partenaires</a>
				 	<a href="./bureaux.php">Nos bureaux</a>
				 	<a href="./equipe.php">Notre &eacutequipe</a>
				 	<a href="./event.php">Nos &eacute;v&egrave;nements</a>
				 	<a href="./demande.php">Demande de devis</a>
				 	<a href="./simulateur_credit_accueil.php">Simulateurs de crédit</a><br>
			</div>

			<h3 align="center">Un devis 100% gratuit ? C'est par ici !</h3><br>
			<div class="formulaire">
				<form>
					Nom:
					<input type="text" name="nom">
					<br><br>
					Prénom:
					<input type="text" name="pr&acute;nom">
					<br><br>
					Date de naissance:<br>
					<input type="Date" name="date">
					<br><br>
					Email:
					<input type="email" name="email">
					<br><br>
					Quel produit vous intéresse ?
					<select name="produit" size="1">
						<optgroup label="Crédit">Crédit</optgroup>
							<option value="Crédit personnel : 5,95% TAEG">Crédit personnel : 5,95% TAEG</option>
							<option value="Crédit auto : 1,09% TAEG">Crédit auto : 1,09% TAEG</option>
							<option value="Crédit rénovation : 3,99% TAEG">Crédit rénovation : 3,99% TAEG</option>
							<option value="Crédit regroupement : 6,95% TAEG">Crédit regroupement : 6,95% TAEG</option>
						<optgroup label="Crédit hypothécaire">Crédit hypothécaire</optgroup>
							<option value="Taux annuel fixe 10 ans : 1,3% TAEG">Taux annuel fixe 10 ans : 1,3% TAEG</option>
							<option value="Taux annuel fixe 15 ans : 1,7% TAEG">Taux annuel fixe 15 ans : 1,7% TAEG</option>
							<option value="Taux annuel fixe 20 ans : 1,9% TAEG">Taux annuel fixe 20 ans : 1,9% TAEG</option>
							<option value="Taux annuel fixe 25 ans : 2,1% TAEG">Taux annuel fixe 25 ans : 2,1% TAEG</option>
							<option value="Taux annuel fixe 30 ans : 3,1% TAEG">Taux annuel fixe 30 ans : 3,1% TAEG</option>
					</select><br><br>
					<textarea name="Remarques" rows="15" cols="90">Veuillez détailler votre demande (délais, revenus,...)</textarea><br>
					<input type="submit" value="Envoyer" id="submitdevis">
				</form>
			</div>
		</main>
	</div>
		<footer>
			<p class="copyright">Copyright&copy; - HEC LIEGE COURTIER®</p>
		</footer>	
	</body>
</html>