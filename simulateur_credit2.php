<?php

if (isset($_POST["valider"])) {
	if (!isset($_COOKIE['count']))
	    {
	        $cookie = 1;
	        setcookie("count", $cookie);
	    }
	    else
	    {
	        $cookie = ++$_COOKIE['count'];
	        setcookie("count", $cookie);
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simulateur de crédit 2</title>
	<link rel="stylesheet" type="text/css" href="./css/style_simulateurs.css"/>
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
			<br>
		<div class = "form" align="center">
			<h2 align="center" style="color:red;text-decoration: underline;">SIMULATEUR DE CRÉDIT</h2>	
				<form action="simulateur_credit2.php" method="post">
					<h4>Mensualit&eacute;:</h4>
					<input type="number" step="any" name="mensualite">
					<h4>Taux:</h4>
					<select name="taux" value="taux">
						<option name= "nul" value="nul">Choisissez un taux</option>
						<option name= "pers" value="pers">Crédit personnel : 5,95% TAEG</option>
						<option name= "renov" value="renov">Crédit rénovation : 3,99% TAEG</option>
						<option name= "auto" value="auto">Crédit auto : 1,00% TAEG</option>
						<option name= "regroup" value="regroup">Crédit de regroupement : 6,95% TAEG</option>
						<br>
					</select>
					<h4>Dur&eacute;e (en mois):</h4>
					<input type="number" name="duree"><br><br>
					<input type="submit" name="valider" value="Calculer le montant que je peux emprunter">
					<input type="submit" name="Reset" value="R&eacute;initialiser">
				</form>
			<br>
			<div class = "PHP">
				<?php
					if (isset($_POST["valider"])) {
							if ($_POST["mensualite"] != null && $_POST["duree"] != null) {
								if ($_POST["taux"] != "nul") {
									$mensualite = $_POST["mensualite"];
									$duree = $_POST["duree"];
									$tauxchoisi = $_POST["taux"];
									$somme_rem = $mensualite * $duree;
			
								 	switch ($tauxchoisi) {

								 		case "pers":
								 			$tx = 5.95;
											break;

										case "renov":
											$tx = 3.99;
											break;

										case "auto":
											$tx = 1.09;
											break;

										case "regroup":
											$tx = 6.95;
											break;
								 	}

								 	$montant = round(($somme_rem/ (($duree*(($tx/100)/12))/(1-(1+(($tx/100)/12))**-$duree))),0);
									$interets = $somme_rem - $montant;
									$montant = number_format($montant, 0, ',', '.');
									$interets = number_format($interets, 2, ',', '.');
									$somme_rem = number_format($somme_rem, 2, ',', '.');

									echo "<table class=formresultats align=center>
												<td>Mensualité:</td>
												<td><b>$mensualite</b>€</td></tr>
												<td>Taux:</td>
												<td><b>$tx</b>%</td></tr>
												<td>Durée:</td>
												<td><b>$duree mois</b></td></tr>
												<td>Montant empruntable:</td>
												<td><b>$montant</b>€</td></tr>
												<td>Intérêts:</td>
												<td><b>$interets</b>€</td></tr>
												<td>Montant total à rembourser:</td>
												<td><b>$somme_rem</b>€</td></tr>
												</table>";
								} else {
									echo "Vous n'avez pas choisi un taux d'intérêt!";
								}
					 		} else {
					 			echo "Vous n'avez pas fourni toutes les données nécessaires !";
					 		}
					 		if ($cookie == 5) {
									header("location: demande.php");
									$cookie = 0;
									setcookie("count", $cookie);
								}	
					}
				?>
			</div>
		</div>
	</div>
	</main>
	</body>
	<footer>
			<p class="copyright">Copyright&copy; - HEC LIEGE COURTIER®</p>
	</footer>
</html>