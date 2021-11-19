<?php 
session_start();
?>
<?php
$varss=session_id();
date_default_timezone_set('Africa/Dakar');
$date = date('H:i:s');
$bdd2=new PDO("mysql:host=127.0.0.1;dbname=test","");
$varss=session_id();

 ?>
<html>
  <body>
<?php  	 //echo header ("Refresh: 1;URL=header.php");
?>
  	<head>
  		<script>
		function verifMail(champ)
			{
			   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,4}\.[a-z]{2,4}$/;
			   if(!regex.test(champ.value))
			   {
			      surligne(champ, true);
			      return false;
			   }
			   else
			   {
			      surligne(champ, false);
			      return true;
			   }
			}
  		</script>
  	</head>
	<meta charset ='utf-8' />
	<link rel="stylesheet" href="css_choisir.css" />
 		<h2><u> Votre produit à domicile</u></h2>
		<div id="conteneurlivrai">
			<form method="POST" action="choisirlivraisons.php">
				<fieldset>
					<legend style="font-family: 'cac_champagneregular', Arial, serif; font-size: 20px; ">Livraison</legend>		
							Numéro de télephone svp  <input type="tel" size="20" name="number"  required pattern="[0-9]{9}" /> </BR>
							adresse mail <?php echo"&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp "; ?>	 
							<input type="email" size="20" name="email" required placeholder="mail@serveur.com" size="30" onblur="verifMail(this)"/> </BR>
							Adresse de domicile svp  <?php echo"&nbsp"; ?>  <input type="text" size="25" name="adresse" required placeholder="Dakar/Ville/commmune/ 97/B"/> </BR>
							<p>vous allez payer aprés réception du produit</p>
						<p>mode de livraison</p>
						<p>
			<form>
		<div class="livdirec1">
					<?php
						if($date>22) 
						{ ?>
							livraison express demain à partir de 8h de matin</br>
							<input type="radio" id="1" name="liv1" value="express" >produit livrer le plus vite possible (payer 2000F)</br>
				  <?php }
						else
						{
					?>
								Faites une livraison express</br>
							<input type="radio" id="1" name="liv1" value="express" >produit livrer le plus vite possible (payer 2000F)</br>
				  <?php }
					if($date>20)
					{
				 ?>
						Demain avant 22h</br>
						<input type="radio" id="2" name="liv1" value="avant_22h" >Demain avant 22h (payer 1000f)</br>
				<?php
					}
					else
					{ 
				?>
							livraison avant 22h</br>
						<input type="radio" id="2" name="liv1" value="avant_22h" >Aujourd’hui avant 22h (payer 1000f)</br>
			<?php 	}
			 ?>	
						<input type="radio" id="3" name="liv1" value="2j_plutard" >Livraison 2 jours aprés la commande (Pas de frais)</br>
						
		</div>
						<div class ="ajustsubmit">
							<input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;"  type="submit" value="valider ici" onclick="verifBoutonsRadio()"/>
						</div>
				</form>
				</p>						
				</fieldset>
			</form>

			<?php
echo "Total : ".$_SESSION['som']." Fr";
	// $qq=$bdd->prepare('select * from produitsclient'.$varss.' where numero_art IS NOT NULL');
	// 			$qq->execute();
	// 				$_SESSION['som']=0;
	// 	     while($donnee=$qq->fetch())

	// $sql2=$bdd2->prepare("UPDATE products SET stock=stock-1 WHERE numero_art =".$nbre." ");
	// $sql2->execute();
 ?>
<script type="text/javascript">
function verifBoutonsRadio()
{ 
	for(i=1; i<=3; i++)
	{
 		if(document.getElementById(i).checked)		
 		{ 
			return true; 
			alert('coooooo');
			// Si on a trouvé une valeur, inutile de continuer
		}
	}
	// Si on arrive ici, c'est qu'aucune case n'est cochée
	alert('Veuillez aussi choisir la mode de livraison!');
	return false;
}
</script>


 <?php
 if(isset($_POST['liv1']))
 {
 $liv1=$_POST['liv1'];
 }
 if(isset($_POST['email']))
{
 	$email=$_POST['email'];
}
 if(isset($_POST['number']))
{
 	$tel=$_POST['number'];
} 
if(isset($_POST['adresse']))
{
	$adresse=$_POST['adresse'];
}






if((isset($_POST['liv1']))&&(isset($_POST['email']))&&(isset($_POST['number']))&&(isset($_POST['adresse'])) )
{
	 $_SESSION['tableau']=array();


		$req2=$bdd2->prepare("select * from produitsclient".$varss." where numero_art is not null");
		$req2->execute();
		while($data=$req2->fetch())
		{
			$req=$bdd2->prepare('select stock from products where id ='.$data['numero_art']. '');
			$req->execute();
			$donnee=$req->fetch();
			if($donnee['stock']>0)
			{	
				$nbre=$data['numero_art'];

				// $req2=$bdd2->prepare("UPDATE produitsclient".$varss." SET tel=".$_POST['number'].", livraison=".$_POST['liv1'].", email=".$_POST['email'].", adresse=".$_POST['adresse'] ."
				//  WHERE numero_art = ".$nbre." ");
				$sql = "UPDATE produitsclient".$varss." SET tel=?, mail=?, adresse=?, livraison=? WHERE numero_art=?";
			 	$bdd2->prepare($sql)->execute([$tel, $email, $adresse, $liv1, $nbre]);
			}
			else
			{
				for($o=0;$o<=17;$o++)
				{ 
					if($data['numero_art']==$o)
					{
						echo"cool".$o;
						$_SESSION['op']=$data['numero_art'];
						$_SESSION['tableau'][]=$_SESSION['op'];			
						
						$stck=0;
						$nu=NULL;
						$sql = "UPDATE produitsclient".$varss." SET numero_art=?, nbre_prod=?, stock_prod=? WHERE id_cl=?";
						$bdd2->prepare($sql)->execute([$nu,'0', $stck, $o]);

						$rqq=$bdd2->prepare('select price from products where id ='.$data['numero_art']. '');
						$rqq->execute();
						$done=$rqq->fetch();
						$_SESSION['som']=$_SESSION['som']-$done['price'];

		 
					}
				}
			// var_dump($_SESSION['tableau']);
			echo header ("Refresh: 2;URL=header.php");
			}
	}	
	?>
<?php
}
   	// 	$req=$bdd2->prepare("
    //     INSERT INTO produitsclient".$varss."(tel,mail,adresse,livraison)
    //     VALUES (:tel, :mail, :adresse, :livraison) select numero_art from produitsclient".$varss." where numero_art=$nbre
    // ");
    // $req->execute(array(
    //                     ':tel' => $_POST['number'],
    //                     ':mail' => $_POST['email'],
    //                     ':adresse' => $_POST['adresse'],
    //                     ':livraison' => $_POST['liv1']
    //                 ));
?>
	</body>
</html>
