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
	<title>Simulateur de crédit hypothécaire</title>
	<link rel="stylesheet" type="text/css" href="./css/style_hypo.css"/>
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
			<h2 align="center">SIMULATEUR DE CRÉDIT HYPOTHÉCAIRE</h2><br>
				<form action="simulateur_credit_hypo.php" method="post" align="center">
					<h4>Montant:</h4>
					<input type="number" name="montant"><br>
					<h4>Taux et durée:</h4>
					<select name="taux" value="taux">
						<option name= "nul" value="nul">Choisissez un taux d'intérêt et une durée</option>
						<option name= "10" value="10">Taux annuel fixe 10 ans: 1,3%</option>
						<option name= "15" value="15">Taux annuel fixe 15 ans: 1,7%</option>
						<option name= "20" value="20">Taux annuel fixe 20 ans: 1,9%</option>
						<option name= "25" value="25">Taux annuel fixe 25 ans: 2,1%</option>
						<option name= "30" value="30">Taux annuel fixe 30 ans: 3,1%</option>
					</select><br><br>
					<input type="submit" name="valider" value="G&eacute;n&eacute;rer le tableau d'amortissement">
					<input type="submit" name="Reset" value="R&eacute;initialiser">
				</form><br>

				<?php
					if (isset($_POST["valider"])) {
							if ($_POST["montant"] != null && $_POST["taux"] != "nul") {
								$montant = $_POST["montant"];
								$tauxchoisi = $_POST["taux"];
		
							 	switch ($tauxchoisi) {

							 		case "10":
							 			$tx = 1.3;
										$duree = 120;
								 		
										break;

									case "15":
										$tx = 1.7;
										$duree = 180;
										break;

									case "20":
										$tx = 1.9;
										$duree = 240;
										break;

									case "25":
										$tx = 2.1;
										$duree = 300;
										break;

									case "30":
										$tx = 3.1;
										$duree = 360;
										break;

									default:
										echo '<br><br>';
										echo "Vous n'avez pas choisi de taux d'intérêt!";
							 	}

							 			$mensualite = ($montant * ($tx/100)/12)/(1-(1+($tx/100)/12)**-$duree);
										$somme_rem = $mensualite * $duree;
										$interets = $somme_rem - $montant;	
										$interets = number_format($interets, 2, ',', '.');
										$somme_rem = number_format($somme_rem, 2, ',', '.');
										$annuite = round($mensualite * 12,2);

							 		echo "Retrouvez ci-dessous les données de votre simulation:<br><br>
											<table class=formresultats align=center>
												<td>Montant emprunté:</td>
												<td><b>$montant</b>€</td></tr>
												<td>Taux:</td>
												<td><b>$tx</b>%</td></tr>
												<td>Durée:</td>
												<td><b>$duree mois</b></td></tr>
												<td>Mensualité:</td>
												<td><b>";
												echo round($mensualite, 2);
												echo "</b>€</td></tr>
												<td>Annuité:</td>
												<td><b>$annuite</b>€</td></tr>
												<td>Intérêts:</td>
												<td><b>$interets</b>€</td></tr>
												<td>Montant total à rembourser:</td>
												<td><b>$somme_rem</b>€</td></tr>
											</table><br><br>";
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
						<?php
							if (isset($_POST["valider"])) {
								if ($_POST["montant"] != null && $_POST["taux"] != "nul") {
									$num_versement = 0;
									$srd = array();
									$srd[] = $montant;
									$i = 0;
									$j = 0;
									$a = 0;
								echo '<div class = "tab_amort">
										<table border="1px">
											<tr  class= "cel">
												<td width=120>N° versement</td>
												<td width=170>Mensualit&eacute;</td>
												<td width=160>Int&eacute;r&ecirc;ts</td>
												<td width=160>Capital</td>
												<td width=170>Solde restant d&ucirc;</td>
											</tr>';

									while ($num_versement < $duree) {
										$interets = $srd[$j] * (($tx)/100/12);
										$capital = $mensualite - $interets;

										if (($i ) % 12 == 0) {
											++$a;
											echo '<tr><td colspan =5 id="rowannee"><b>Année </b><b>';
											echo $a;
											echo '</b></tr>';
										} else {
											echo '<tr>';
										}
										
										echo '<td>';
										echo ++$num_versement;
										
										echo '</td>';

										echo '<td>';
										echo round($mensualite,2);
										echo ' €';
										echo '</td>';

										echo '<td>';
										echo round($interets,2);
										echo ' €';
										++$j;
										echo '</td>';

										echo '<td>';
										
										echo round($capital,2);
										echo ' €';
										echo '</td>';

										echo '<td>';
										$srd[] = $srd[$i] - $capital;
										echo round($srd[++$i],2);
										echo ' €';
										echo '</td>';
										
										echo '</tr>';
									}
								}
							}
						?>
					</table>
				</div>
			</main>
			</div>
		<footer>
			<p class="copyright">Copyright&copy; - HEC LIEGE COURTIER®</p>
		</footer>
	</body>
</html>