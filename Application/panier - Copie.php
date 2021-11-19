
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
	<script>
    	/*function deleteRow(r) 
    	{
		  var i = r.parentNode.parentNode.rowIndex;
		  document.getElementById("tableau").deleteRow(i);
		   var allParas = document.getElementsByTagName('tr');
			var num = allParas.length;
		   if(num==1)
		       	{
		           document.getElementById("tableau").deleteTHead();	
				} 
				//<?php $i ?>=i;
var xhr = new XMLHttpRequest();
xhr.open("POST", "esso.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("i=" + escape(i));
		}/* faire un boucle qui parcours les $_GET['idi'] et si un en existe faire l'instruction suivante : */
	</script>
  </head>
  <body>
	<script type="text/javascript">
	/*	for(int i=0;i<9;i++)
		{
			nbre+i=false;
		}*/
	</script>
		<div id="conteneurx2"></br>
		<?php
		$_SESSION['tableau']=array();
		for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
		{
			if(isset($_SESSION['id'.$_SESSION['i']]))
			{
				$_SESSION['i']=$_SESSION['id'.$_SESSION['i']];
				$_SESSION['tableau'][]=$_SESSION['id'.$_SESSION['i']];
			}
		}
		var_dump($_SESSION['tableau']);
		 //$reponse = $bdd->query('select * FROM products');
			// $etat = $reponse->rowCount();
for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
	{//if(mysql_num_rows($requete)==0) {
		if(isset($_SESSION['id'.$_SESSION['i']])&&count($_SESSION['tableau'])!=0)
		{
			?>												
			<table id="tableau" border>
			<thead>
				<tr>
					<th>Image</th>
					<th>Prix</th>
					<th>Suppréssion</th>
				</tr>
			</thead>
			<?php  break;
			} 
			//if(isset($_SESSION['o']))
			//	unset($_SESSION['o']);
		}
		if(count($_SESSION['tableau'])==0)
			{
				echo"votre panier est vide veuillez selectionnez un produit";
				  echo header ("Refresh: 3;URL=site - Copie.php"); 
			}
for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
	{
		if(isset($_SESSION['id'.$_SESSION['i']])&&(empty($_GET['idi'])))
		{  
				 $q=$bdd->query('select * from products where id ='.$_SESSION['id'.$_SESSION['i']]);
				$q->execute();
				$q->bindColumn(1, $_SESSION['id'.$_SESSION['i']]);
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

		if(isset($_GET['idi'])&&($_SESSION['i']==$_GET['idi']))
			{
			// echo $reponse;
				//unset($_SESSION['id'.$_SESSION['i']]);	
				//	$_SESSION['o']=$_GET['idi'];
				//cool ça suppprime bien!!! maintenant on doit inserer à nouveau ce produit si le client clique dpuis la page draps ce produit qui a été supprimer et ce dernier sera donc reinserer à nvo dans la bdd
				//si on fait un autre for avant le if la page va se charger puis on clique à nouveau sur supprimer pour supprimer l'article
			}	

	}
			 ?>	
	</table>
</div>
<p>le code est bon on doit juste faire de sorte que c'est l'internaute lui même qui insere les données dans la bdd</p>
<p>notre bleme pour le moment c'est le 0 pour résoudre ce bleme on peut mettre 1=>lenomdelavariable ou on met à 0 le boucle($_SESSION['i'])</p>
  </body>
</html>











<?php
session_start(); 
//session_destroy($_SESSION['id'.$_SESSION['i']]);
$varss=session_id();
?>
<!doctype html>
 <html lang="fr">
  <head>           
  	 <script type="text/javascript">
history.pushState(null, null, "<?php //echo $_SERVER["REQUEST_URI"]; ?>");
window.addEventListener("popstate", function(event) {
window.location.assign("http://localhost/sitemario/draps/site%20-%20Copie.php");
});
</script> 
	<meta charset="UTF-8">
	<link rel="stylesheet" href="csspanier.css" />
  </head>
  <body>
	<div id="conteneurx2"></br>
<?php
	if(isset($_GET['ids']))
	{
		$bdd2=new PDO("mysql:host=127.0.0.1;dbname=test","");
		$sql=$bdd2->prepare("SELECT nbre_prod from produitsclient".$varss." WHERE numero_art =".$_GET['ids'] ." ");	
		$sql->execute();  
		$data=$sql->fetch();
		// echo $data['nbre_prod'];
		if($data['nbre_prod']>=2)
		{
			// $bdd2=new PDO("mysql:host=127.0.0.1;dbname=test","");
			$sql2=$bdd2->prepare("UPDATE produitsclient".$varss." SET nbre_prod=nbre_prod-1 WHERE numero_art =".$_GET['ids'] ." ");	
			$sql2->execute();

			$sql3=$bdd2->prepare("UPDATE produitsclient".$varss." SET stock_prod =stock_prod + 1 WHERE id =".$_GET['ids'] ." ");
			$sql3->execute(); 
		} 
		else
		{?>
			
			<script type="text/javascript">
				alert('nombre de produit est inférieur à 2');
			</script>
		<?php }
		// break;
	}

	//if(mysql_num_rows($requete)==0) {
	$bdd2=new PDO("mysql:host=127.0.0.1;dbname=test","");
	$sql=$bdd2->prepare("SELECT * from produitsclient".$varss."");	
	$sql->execute();  
	if($sql->fetchColumn ()>0)
	{
		$bdd1=new PDO("mysql:host=127.0.0.1;dbname=test","");
		 $q=$bdd1->prepare('select * from produitsclient'.$varss);
						 $q->execute();
						while($q->fetch())
					{?>												
					<table id="tableau" border>
						<tr>
							<th>Image</th>
							<th>Prix</th>
							<th>Nombre de commande du produit</th>
							<th>dimunuer de 1 le nombre de commande du produit</th>
							<th>Suppréssion</th>
						</tr>
					<?php  
					break;
					}
				$bdd=new PDO("mysql:host=127.0.0.1;dbname=test","");
				$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$qq=$bdd->prepare('select * from products p1 INNER JOIN produitsclient'.$varss.' p2 on p1.id=p2.id_cl');
				$qq->execute();
					$_SESSION['som']=0;
		     while($donnee=$qq->fetch())
						{?>
						  <tr>
								<td>
								<img src="<?php echo $donnee['numero_art']; ?>.jpeg" name="id" alt="example cafe" width="250" height="200"/>
								</td>
								<td>
									<?php echo $donnee['price']; ?>
								</td>
								<td>
									<?php echo $donnee['nbre_prod']; ?>
								</td>
								<td>
									<a href="panier.php?ids=<?php echo $donnee['numero_art']; ?>">
							      		  <input type="button" value="diminuer"/>
							       	</a>
								</td>
								<td>
								 <a href="esso.php?idi=<?php echo $donnee['id']; ?>">
							        <input type="button" onclick="deleteRow(this)" value="supp p22c"/>
							     </a>
								</td>
						</tr>

					<?php
							$_SESSION['som']=$_SESSION['som']+$donnee['price'];
							if(isset($_SESSION['reponse']))
							{
								$_SESSION['som']= $_SESSION['som']-$_SESSION['reponse'];
								echo"sdddddddddddddddddddd";
							}
							//echo $donnee['price'];
						}
						// $_SESSION['price']=$donnee['price'];
					?>
			</table>
		</div>
		<a href="choisirlivraisons.php">
					<input type="submit" value="Acheter">
		</a>
	<?php

	echo"Total : ".$_SESSION['som']."F";
 }
	else
	echo"votre panier est vide veuillez selectionnez des produits";
?>

  </body>
</html>