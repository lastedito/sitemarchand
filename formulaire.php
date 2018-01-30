<!DOCTYPE html>
<html>
<head>
	<title>Inscription à la Newsletter</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
    <link rel="stylesheet" href="css/formulaire.css" />
	<link rel="icon" type="image/ico" href="images/mafavicon.ico" />

</head>

<body>

	<form name="formulaire1" action="mailto:" method="post" enctype="text/plain" class="form1" action="...">
	<h1 class="formulaire">Inscription à la lettre d'information</h1>
	<fieldset class="left">
					<b class="l1"><i>Coordonées</i></b>
					<label class="l1"><p class="l1">Nom</p></label><input name="name" type="text" size="26" class="l1"/>
					<label class="l1"><p class="l1">Prénom</p></label><input name="prenom" type="text" size="26" class="l1"/>
					<label class="l1"><p class="l1">Adresse</p><p>(Numéro et rue)</p></label><input name="adresse" type="text" size="26" class="l1"/>
					<label class="l1"><p class="l1">Ville</p><p>(Ville et code postal)</p></label><input name="ville" type="text" size="26" class="l1"/>
					<label class="l1"><p class="l1">Téléphone</p></label><input name="telephone" type="text" size="26" class="l1"/>
	</fieldset>
	
	<fieldset>
	<b class="l2"><i>S'inscrire à la lettre d'information</i></br></b>
			<label class="l2"><p class="l2">Confirmer l'inscription:</p></label>
			<input name="Check1" type="checkbox" checked="checked" value="Choix 1">Je souhaite recevoir la lettre d'information</br>
			<input name="Check2" type="checkbox" value="Choix 2">J'accepte de recevoir des offres de partenaire
		<label class="l2"><p class="l2">Format de la lettre:</p></label>
			<input name="offres" type="radio" checked="checked" value="oui" />Format HTML (recommandé)</br>
			<input name="offres" type="radio" value="oui" />Format texte Brut</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			<input type="submit" value="S'inscrire">
	</fieldset>
	</form>
</body>

</html>