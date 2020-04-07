<!DOCTYPE html>
	<html>
		<head>
			<title>Nos bureaux</title>
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
			<div align="center">
				<form id="bureauxform" action="bureaux.php" method="post" align="center">Veuillez choisir votre province pour connaitre nos bureaux les plus proches:<br>
					<select name="province" size="1">
						<optgroup label="Wallonie">Wallonie</optgroup>
							<option value="Liège">Liège</option>
							<option value="Namur">Namur</option>
							<option value="Luxembourg">Luxembourg</option>
							<option value="Hainaut">Hainaut</option>
							<option value="Brabant Wallon">Brabant Wallon</option>
						<optgroup label="Bruxelles">Bruxelles</optgroup>
							<option value="Bruxelles">Bruxelles</option>
						<optgroup label="Flandre">Flandre</optgroup>
							<option value="Flandre">Flandre</option>
					</select><br>
					<input type="submit" name="valider" value="Afficher les bureaux" id="bureaux">
					<br><br>
				</form>
			</div>
			<div id="switch">
			<?php
			if (isset($_POST["valider"])) {
				$province = $_POST["province"];
				switch ($province) {
				   	case "Liège" :
				   		echo "<p class='listebureaux'><b>HEC Liege Courtier Rocourt</b><br>
					   			Rue de la Pantoufle 12<br>
					   			4000 Rocourt <br>
					   			Tél : 04/271/00/34<br>
					   			<br></p>

				   			<p class='listebureaux'><b>HEC Liege Courtier Visé</b><br>
					   			Rue du College 48<br>
					   			4602 Visé <br>
					   			Tél : 04/256/56/12<br>
					   			<br></p>

				   			<p class='listebureaux'><b>HEC Liege Courtier Saint-Vith</b><br>
					   			Prümer Straße 33<br>
					   			4780 Saint Vith<br>
					   			Tél : 04/245/05/74<br>
					   			<br></p>";
				   		break;

			   		case "Namur" :
			   			echo "<p class='listebureaux'><b>HEC Liege Courtier Namur</b><br>
			   					Rue des Brasseurs 67<br>
			   					5000 Namur<br>
								Tél : 05/265/78/87<br>
								<br></p>

			   					<p class='listebureaux'><b>HEC Liege Courtier Courrière</b><br>
			   					Rue de Poilvache 83<br>
			   					5336 Courrière <br>
			   					Tél : 05/276/09/01<br>
			   					<br></p>";
			   			break;

			   		case "Luxembourg" :
			   			echo "<p class='listebureaux'><b>HEC Liege Courtier Luxembourg</b><br>
					   			Rue de l'Alhambra 41<br>
					   			6662 Houffalize<br>
					   			Tél : 08/217/29/09<br>
					   			<br></p>";
					   	break;

			   		case "Hainaut" : 
			   			echo "<p class='listebureaux'><b>HEC Liege Courtier Hainaut</b><br>
					   			Avenue Brahman 171<br>
					   			7011 Mons<br>
					   			Tél: 01/298/20/18<br>
					   			<br></p>";
			   			break;

			   		case "Brabant Wallon" :
			   			echo "<p class='listebureaux'><b>HEC Liege Courtier Brabant Wallon</b><br>
					   			Rue de l'Oreca 89<br>
					   			1300 Wavre<br>
					   			Tél : 03/231/29/76<br>
					   			<br></p>";
			   			break;

			   		case "Bruxelles" :
			   			echo "<p class='listebureaux'><b>HEC Liege Courtier Bruxelles</b><br>
					   			Avenue de l'Estampage 1<br>
					   			1000 Bruxelles<br>
					   			Tél : 02/342/78/78<br>
					   			<br></p>

					   		<p class='listebureaux'><b>HEC Liege Courtier Bruxelles</b><br>
					   			Avenue de l'Aéroport<br>
					   			1100 Zaventem<br>
					   			Tél : 02/299/78/78<br>
					   			<br></p>";
			   			break;

			   		case "Flandre" :
			   			echo "<p class='listebureaux'><b>HEC Liege Courtier Flandre</b><br>
					   			Zonelijkstraat 78<br>
					   			9800 Antwerp<br>
					   			Tel : 08/267/12/01<br>
					   			<br></p>";
			   			break;

					default:   	
				   		break;
				}
		   	}
			?>
			</div>
			<br><br><br>
			<form action="bureaux.php" method="POST">
				<input type="submit" id="contacterbureaux" name="afficher" value="Je d&eacute;sire contacter le bureau le plus proche de chez moi">
			</form>

			<?php
			if (isset($_POST["afficher"])) {
			$afficher = $_POST["afficher"];
			if (isset($_POST["afficher"])) {

				echo "
					<p><h3>Vous pouvez nous joindre en utilisant le formulaire de contact ci-dessous</h3></p><br>
					<div class=formulaire>
						<form>
							Nom:
							<input type=text name=nom>
							<br><br>
							Prénom:
							<input type=text name=pr&acute;nom>
							<br><br>
							Date de naissance:<br>
							<input type=Date name=date>
							<br><br>
							Email:
							<input type=text name=email>
							<br><br>
							Téléphone:
							<input type=text name=tel>
							<br><br>
							Province:
							<select name=province size=1>
								<optgroup label=Wallonie>Wallonie</optgroup>
									<option value=Liège>Liège</option>
									<option value=Namur>Namur</option>
									<option value=Luxembourg>Luxembourg</option>
									<option value=Hainaut>Hainaut</option>
									<option value=Brabant Wallon>Brabant Wallon</option>
									<option value=Allemagne>Allemagne</option>
									<option value=Autriche>Autriche</option>
								<optgroup label=Bruxelles>Bruxelles</optgroup>
									<option value=Bruxelles>Bruxelles</option>
								<optgroup label=Flandre>Flandre</optgroup>
									<option value=Flandre>Flandre</option>
							</select><br><br>
							<textarea name=Remarques rows=15 cols=90>Objet de votre demande</textarea><br><br><br><br>
							<input type=submit value=Envoyer>
						</form>";
					}
				}
						?>
					</div>
		</main>
			<footer>
				<p class="copyright">Copyright&copy; - HEC LIEGE COURTIER®</p>
			</footer>
	</body>
</html>