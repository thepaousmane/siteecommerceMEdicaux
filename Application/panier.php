<?php
session_start(); 
//session_destroy($_SESSION['id'.$_SESSION['i']]);
?>
<?php
$varss=session_id();
$_SESSION['tableaup']=array();
?>

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
	unset($_GET['ids']);
	}

	//if(mysql_num_rows($requete)==0) {
	$bdd2=new PDO("mysql:host=127.0.0.1;dbname=test","");
	$sql=$bdd2->prepare("SELECT * from produitsclient".$varss." where numero_art IS NOT NULL");	
	$sql->execute();  
	if($sql->fetchColumn()>0)
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
				$qq=$bdd->prepare('select * from produitsclient'.$varss.' where numero_art IS NOT NULL');
				$qq->execute();
				$_SESSION['som']=0;
		     while($donnee=$qq->fetch())
					{
						$req=$bdd->prepare('select stock from products where id ='.$donnee['numero_art']. '');
						$req->execute();
						$var=$donnee['numero_art'];
						$data=$req->fetch();
						if($data['stock']>0)
						{
							?>
						  <tr>
								<td>
								<img src="<?php echo $donnee['numero_art']; ?>.jpeg" name="id" alt="example cafe" width="250" height="200"/>
								</td>
								<td>
									<?php echo $donnee['price_prod']; ?>
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
								 <a href="esso.php?idi=<?php echo $donnee['id_cl']; ?>">
							        <input type="button" onclick="deleteRow(this)" value="supp p22c"/>
							     </a>
								</td>
						</tr>
					<?php
							$_SESSION['som']=$_SESSION['som']+($donnee['price_prod']*$donnee['nbre_prod']);
							if(isset($_SESSION['reponse']))
							{
								$_SESSION['som']= $_SESSION['som']-$_SESSION['reponse'];
								echo"sdddddddddddddddddddd qqqqqqqqqqqqqqqqqqqqqqqqqqqqqq";
							}
							//echo $donnee['price'];
						}
						else
						{
							for($o=0;$o<=17;$o++)
							{ 
								if($donnee['numero_art']==$o)
								{
									echo"cool".$o;
									$_SESSION['opp']=$donnee['numero_art'];
									$_SESSION['tableaup'][]=$_SESSION['opp'];
									
									$stck=0;
									$nu=NULL;
									$sql = "UPDATE produitsclient".$varss." SET numero_art=?, nbre_prod=?, stock_prod=? WHERE id_cl=?";
 									$bdd->prepare($sql)->execute([$nu,'0', $stck, $o]);
								}
							}
						  echo header ("Refresh: 0;URL=headerpanier.php");
						}

						?>
						<?php
					}
						//$_SESSION['price']=$donnee['price'];
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