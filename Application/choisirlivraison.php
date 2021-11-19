<html>
  <body>
	<meta charset ='utf-8' />
	<link rel="stylesheet" href="css_choisir.css" />
 		<h2><u> Votre produit à domicile</u></h2>
		<div id="conteneurlivrai">
			<form>
				<fieldset>
					<legend style="font-family: 'cac_champagneregular', Arial, serif; font-size: 20px; ">Livraison</legend>
							<p>Entrer votre numéro de télephone svp : <input type="number" size="20" name="numbercall" required placeholder="Tél" /> </BR>
							Entrer votre adresse de domicile svp : <input type="text" size="20" name="adresse" required placeholder="adressedomicile" /> </BR>
							Date de livraison </br>		
								<input type="radio" name="pay1" />Payer en espece Aprés réception du marchandise</br>
							<input type="radio" name="liv2" />Payer par banque</br>
							<div class="livdirec1">
						<p>	Faites une livraison directe</br>
							<input type="radio" name="liv1" />	Aujourd’hui(avant 22h)</p>
						</div>
						<div class ="ajustsubmit">
							<input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;"  type="submit" value="valider ici"/>
						</div>
						<div class="livdirec2">
			<p>ou une reservation avant la date de livraison</br>
			<input type="radio" name="pay1" />Reserver au bout de trois jours avant livraison==> payez 1500f </br>
			Entrer une date : <input type="text" size="20" name="adresse"  placeholder="datelivraison" /> </BR>
			<input type="radio" name="pay1" />Reserver au bout d'une semaine avant livraison==> payez 3000f</br>
			Entrer une date : <input type="text" size="20" name="adresse"  placeholder="datelivraison" /> </BR></p>
		</div>
						</p>						
				</fieldset>
			</form>
		</div>
	</body>
</html>


