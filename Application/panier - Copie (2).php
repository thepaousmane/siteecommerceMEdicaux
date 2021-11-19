<?php
session_start(); 
$bdd=new PDO("mysql:host=127.0.0.1;dbname=test","");
$_SESSION['cpt']=0;
//session_destroy($_SESSION['id'.$_SESSION['i']]);
?>
<!doctype html>
 <html lang="fr">
  <head>           
	<meta charset="UTF-8">
	<link rel="stylesheet" href="csspanier.css" />
  </head>
  <body>
	<div id="conteneurx2"></br>
	<?php
		/*$_SESSION['tableau']=array();
		for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
		{
			if(isset($_SESSION['id'.$_SESSION['i']]))
			{
				//$_SESSION['i']=$_SESSION['id'.$_SESSION['i']];
				$_SESSION['tableau'][]=$_SESSION['id'.$_SESSION['i']];
			}
		}
		var_dump($_SESSION['tableau']);
		 //$reponse = $bdd->query('select * FROM products');
			// $etat = $reponse->rowCount();
		if(count($_SESSION['tableau'])==0)
			{
				echo"votre panier est vide veuillez selectionnez un produit";
				  echo header ("Refresh: 3;URL=site - Copie.php"); 
			}*/
for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
	{//if(mysql_num_rows($requete)==0) {
		if(isset($_SESSION['id'.$_SESSION['i']]))
		{
			?>												
			<table id="tableau" border>
				<tr>
					<th>Image</th>
					<th>Prix</th>
					<th>Suppréssion</th>
				</tr>
			<?php  
			} 
		break;
		}
for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
	{
		if(isset($_SESSION['id'.$_SESSION['i']])&&(empty($_GET['idi'])))
		{  
				 $q=$bdd->prepare('select * from products where id ='.$_SESSION['id'.$_SESSION['i']]);
				 $q->execute();
			//$q->bindColumn(1,$_SESSION['id'.$_SESSION['i']]);

				while($q->fetch())//fetch renvoie une ligne il faut faire de tel sorte qu'on peut le supprimer
				{?>
				  <tr>
						<td>
						<img src="<?php echo $_SESSION['id'.$_SESSION['i']]; ?>.jpeg" name="id" alt="example cafe" width="250" height="200"/>
						</td>
						<td>
							7000f
						</td>
						<td>
						<a href="esso.php?idi=<?php echo $_SESSION['id'.$_SESSION['i']]; ?>">
					        <input type="button" onclick="deleteRow(this)" value="supp p22c"/>
					     </a>
						</td>
					</tr>
			<?php	}
		}

/* faire un boucle qui parcours les $_GET['idi'] et si un en existe faire l'instruction suivante : */

	/*	if(isset($_GET['idi'])&&($_SESSION['i']==$_GET['idi']))
			{
			// echo $reponse;
				//unset($_SESSION['id'.$_SESSION['i']]);	
				//	$_SESSION['o']=$_GET['idi'];
				//cool ça suppprime bien!!! maintenant on doit inserer à nouveau ce produit si le client clique dpuis la page draps ce produit qui a été supprimer et ce dernier sera donc reinserer à nvo dans la bdd
				//si on fait un autre for avant le if la page va se charger puis on clique à nouveau sur supprimer pour supprimer l'article
			}	*/

	}
			 ?>	
	</table>
</div>
<p>le code est bon on doit juste faire de sorte que c'est l'internaute lui même qui insere les données dans la bdd</p>
<p>notre bleme pour le moment c'est le 0 pour résoudre ce bleme on peut mettre 1=>lenomdelavariable ou on met à 0 le boucle($_SESSION['i'])</p>
  </body>
</html>
