<html>
<meta charset='utf-8'>
<link rel="stylesheet" href="cssdraps.css" />
<title>les draps</title>
	<body>
		 <p>salutoto</p>
		 <p><img src="1.jpeg" alt="example cafe" width="350" height="400"/></p>  
		 <div id="conteneur">
				<div class="premier">
					<a class="plain" href="commandedraps.php"><input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" class="champsbout1" type="submit" value="Commander" style="font-family: 'cac_champagneregular', Arial, serif; font-family: 'cac_champagneregular', Arial, serif;"> </a>	
				</div>
		</div>
	</body>
</html>



<html>
<head>
  <title>commande draps</title>
</head>
<meta charset='utf-8'>
<link rel="stylesheet" href="cssdraps.css" />
<title>les draps</title>
	<body>
		 <p><img src="1.jpeg" alt="example cafe" width="700" height="480"/></p> 
		 <form width="0" height="0">//je ne peux pas diminuer la longueur ni la largeur
			<fieldset>
				<legend>Vos données</legend>
					Entrer votre numéro de télephone svp<input type="number" size="20" name="numbercall" required /> </BR>
					Souhaitez vous la livraison ou la réservation </br>
					<div id="horizontalement">
					<form>
						<input type="radio" name="livraison" value="coco" />Livraison
						<input type="radio" name="réservation" value="coco" />Réservation
					</form>
					</div>
					<div id="positionner">
						<input type="submit" name="soumission" value="alider ici" />
					</div>
			</fieldset>
		</form>
	</body>
</html>








.plain 
{
	font-family: 'cac_champagneregular', Arial, serif;
	font-size: 20px;
	width: 0px;
	height: 0px;
	position: relative;
	top: 0%;
	left: 0%;
   text-decoration: none;
}

#conteneur
{	 
	/*pour le mettre horizontalement c'est le suivant*/
	  font-family: 'cac_champagneregular', Arial, serif;
	  display : list-item;
	  display:inline;
	  list-style-position:outside;
	 /* margin-right:px;*/
		list-style-type:circle;
}
	
}
#conteneur .lien1
{
	width: 0px;
	height: 0px;
	position: relative;
	top: 70%;         
	left: 15%;
}
#conteneur .lien2
{
	width: 0px;
	height: 0px;
	position: relative;
	top: 70%;         
	left: 5%;
}




<div id="conteneur">
					<div class="lien1">
						<a class="plain" href="choisirlivraison.php"><input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" class="champsbout1" type="submit" value="Livraison" style="font-family: 'cac_champagneregular', Arial, serif; font-family: 'cac_champagneregular', Arial, serif;"> </a>	
					</div>
					<div class="lien2">
						<a class="plain" href="choisirreservation.php"><input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" class="champsbout1" type="submit" value="reservation" style="font-family: 'cac_champagneregular', Arial, serif; font-family: 'cac_champagneregular', Arial, serif;"> </a>	
					</div>







<html>
<meta charset='utf-8'>
<link rel="stylesheet" href="cssdraps.css" />
<title>les draps</title>
	<body>
		 <p>salutoto</p>
		 <p><img src="1.jpeg" alt="example cafe" width="350" height="400"/></p>  
		 <div id="conteneurdraps">
				<div class="drap1">
					<a class="plain" href="commandedraps.php"><input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" class="champsbout1" type="submit" value="Commander" style="font-family: 'cac_champagneregular', Arial, serif; font-family: 'cac_champagneregular', Arial, serif;"> </a>	
				</div>
		</div>
	</body>
</html>





body 
{
	background-color: #F1F1F2;
}
p
{
	font-size: 20px;
    text-shadow: 2px 2px 4px #E2C499;
	font-family: 'cac_champagneregular', Arial, serif;
	font-family: 'cac_champagneregular', Arial, serif;
}

#conteneurreserv
{
	 width: 840px;
	 height :315px;
     border: 5px solid #777;
     border-radius: 15px;
     /*height: 600px;*/
     margin-top: 25px;/*deplace mm le bloc .deuxieme*/
     margin-left: 180px;/*deplace le bloc pemier grace au deux suivantes instructions a et b */
     position: absolute;/*instruction a*/
     top: 55px;/*instruction b*/
}	 

h2
{
	  font-family: 'cac_champagneregular', Arial, serif;
}

#conteneurreserv.ajustsubmitreserv
{
	width: 0px;
		height: 0px;
		position: relative;
		top: 70%;        
		left: 40%;
}




