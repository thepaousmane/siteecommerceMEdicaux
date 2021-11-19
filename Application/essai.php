<?php
session_start(); 
require_once('db_class.php');
$DB=new DB();
 if(isset($_GET['del']))
	 {
	  $panier->del($_GET['del']);
	}?>
<!doctype html>
 <html lang="fr">
  <head>           
	<meta charset="UTF-8">
  </head>
  <body>
<p> Vous n'avez rien commandé pour le moment</p>
<?php
	if(isset($_GET['id'])){
		"SELECT * FROM products WHERE id =".$_GET['id'];
	}
	else echo"nono";
	if(!isset($_SESSION['panier'])){
		$_SESSION['panier']=array();//dans panier_class.php
	}
if(isset($_GET['id'])){	
	$q=$DB->query('select id from products where id=:id' , array('id'=>$_GET['id']));
	if(empty($q))
		{
	 	 die("ce produit n'existe pas");
		}
	$_SESSION['panier'][$q[0]->id]=1;
}else{
		die("pas de produit");
	}
	
	?>
	<?php
		$ids=array_keys($_SESSION['panier']);
		$products=$DB->query('select * from products where id IN('.implode(',',$ids).')');
		foreach($products as $product):
		?>
<?php endforeach; ?>
grand total : <span>5758</span>
  </body>
</html>
 
 
 
 
 
 <?php
session_start(); 
?>
<!doctype html>
 <html lang="fr">
  <head>           
	<meta charset="UTF-8">
  </head>
  <body>
<p> Vous n'avez rien commandé pour le moment</p>
<?php
	if(isset($_SESSION['pro1']))
	{
		?>
		<p><img src="1.jpeg" name="pro1" width="80" height="80"/></p>
			<a class="plain" href="panier.php?sup1=xxx">
				<input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" type="submit" value="supprimer">
			</a>
			<?php
	}
		if(isset($_GET['sup1']))
		{
			 unlink("panier/1.jpeg");
		}
		if(isset($_SESSION['pro2']))
		{ ?>
			<p><img src="2.jpeg" name="pro1" alt="example cafe" width="80" height="80"/></p>
		<?php
		}
		if(isset($_SESSION['pro8']))
		{?>
			<p><img src="11.jpeg" name="pro1" alt="example cafe" width="80" height="80"/></p>
		<?php
		}
		?>
  </body>
 </html>
 if ($suppPanier=="SUPPRIMER")
{
	$article=$_GET['article'];
	for ($i=0;$i<count($liste);$i++)
		{
		if($article==$liste[$i][0])
			array_splice($liste,$i,1);
		//suppression de l'articlez
		}
	$_SESSION['liste']=$liste;//mAj de la liste
}

 $input = array( "red" , "green" , "blue" , "yellow" ); 





<div id="conteneur">
		<div id="conteneur1">
			image 
		</div>
		<div id="conteneur2">
			prix 
		</div>
		<div id="conteneur3">
			supprimer
		</div>
		<div id="conteneur4">
			<img src="1.jpeg" name="pro1" alt="example cafe" width="80" height="80"/>
		</div>
		<div id="conteneur5">
			prix
		</div>
		<div id="conteneur6">
			<p onclick="supprimer();">imagesupprimer</p>
		</div>
	</div>
	<script>
     function supprimer()
     {   
        ladiv = document.getElementById("conteneur");
        ladiv.innerHTML="";
    }
</script>


<?php
	if(isset($_SESSION['pro1']))
	{?>
		<div id="conteneurx1">
		<p id ="p1">
			<table border="1">
				<tr>
					<th>Image</th>
					<th>Prix</th>
					<th>Suppréssion</th>
				</tr>
				<tr>
					<td>
						<img src="1.jpeg" name="pro1" alt="example cafe" width="80" height="80"/>
					</td>
					<td>
						7000f
					</td>
					<td>
				    </td>
				</tr>
			</table>
			</p>
		 <button type="button" onclick="supprimer();">suppxx12 !</button>
			</div>
			<script>
			     function supprimer()
			     {   
			        ladiv = document.getElementById("conteneurx1");
			        ladiv.innerHTML="";
			    }
			</script>
			<p>



<?php
				if(isset($_SESSION['pro2']))
				{?>
				<div id="conteneurx2">
					<p id ="p2">
					<table border="1">
						<tr>
							<th>Image</th>
							<th>Prix</th>
							<th>Suppréssion</th>
						</tr>
						<tr>
							<td>
								<img src="2.jpeg" name="pro1" alt="example cafe" width="80" height="80"/>
							</td>
							<td>
								7000f
							</td>
							<td>
						        <button type="button" onclick="supprimer();">supp p22c !</button>
						    </td>
						</tr>
					</table>
					</p>
				</div>
			<script>
			     function supprimer()
			     {   
			        ladiv = document.getElementById("conteneurx2");
			        ladiv.innerHTML="";
			    }
			</script>
				<?php
				}
				if(isset($_SESSION['pro3']))
				{?>
					<p id ="p3">
						<table border="1">
							<tr>
								<th>Image</th>
								<th>Prix</th>
								<th>Suppréssion</th>
							</tr>
							<tr>
								<td>
									<img src="3.jpeg" name="pro1" alt="example cafe" width="80" height="80"/>
								</td>
								<td>
									7000f
								</td>
								<td>
							        <button type="button" onclick="supp();">supp p2 !</button>
							    </td>
							</tr>
						</table>
					</p>				
				<?php
				}
				if(isset($_SESSION['pro4']))
				{?>
					<p id ="p4">
						<table border="1">
							<tr>
								<th>Image</th>
								<th>Prix</th>
								<th>Suppréssion</th>
							</tr>
							<tr>
								<td>
									<img src="4.jpeg" name="pro1" alt="example cafe" width="80" height="80"/>
								</td>
								<td>
									7000f
								</td>
								<td>
							        <button type="button" onclick="supp();">supp p2 !</button>
							    </td>
							</tr>
						</table>
						</p>				<?php
				}
				if(isset($_SESSION['pro5']))
				{?>
				<p id ="p5">
					<table border="1">
						<tr>
							<th>Image</th>
							<th>Prix</th>
							<th>Suppréssion</th>
						</tr>
						<tr>
							<td>
								<img src="5.jpeg" name="pro1" alt="example cafe" width="80" height="80"/>
							</td>
							<td>
								7000f
							</td>
							<td>
						        <button type="button" onclick="supp();">supp p2 !</button>
						    </td>
						</tr>
					</table>
					</p>		
				<?php
				}
				if(isset($_SESSION['pro6']))
				{?>
					<p id ="p6">
						<table border="1">
							<tr>
								<th>Image</th>
								<th>Prix</th>
								<th>Suppréssion</th>
							</tr>
							<tr>
								<td>
									<img src="6.jpeg" name="pro1" alt="example cafe" width="80" height="80"/>
								</td>
								<td>
									7000f
								</td>
								<td>
							        <button type="button" onclick="supp();">supp p2 !</button>
							    </td>
							</tr>
						</table>
						</p>				<?php
				}
				if(isset($_SESSION['pro7']))
				{?>
					<p id ="p7">
						<table border="1">
							<tr>
								<th>Image</th>
								<th>Prix</th>
								<th>Suppréssion</th>
							</tr>
							<tr>
								<td>
									<img src="7.jpeg" name="pro1" alt="example cafe" width="80" height="80"/>
								</td>
								<td>
									7000f
								</td>
								<td>
							        <button type="button" onclick="supp();">supp p2 !</button>
							    </td>
							</tr>
						</table>
						</p>				<?php
				}
				if(isset($_SESSION['pro8']))
				{?>
					<p id ="p8">
						<table border="1">
							<tr>
								<th>Image</th>
								<th>Prix</th>
								<th>Suppréssion</th>
							</tr>
							<tr>
								<td>
									<img src="8.jpeg" name="pro1" alt="example cafe" width="80" height="80"/>
								</td>
								<td>
									7000f
								</td>
								<td>
							        <button type="button" onclick="supp();">supp p2 !</button>
							    </td>
							</tr>
						</table>
						</p>				<?php
				}
				if(isset($_SESSION['pro9']))
				{?>
					<p id ="p9">
						<table border="1">
							<tr>
								<th>Image</th>
								<th>Prix</th>
								<th>Suppréssion</th>
							</tr>
							<tr>
								<td>
									<img src="9.jpeg" name="pro1" alt="example cafe" width="80" height="80"/>
								</td>
								<td>
									7000f
								</td>
								<td>
							        <button type="button" onclick="supp();">supp p2 !</button>
							    </td>
							</tr>
						</table>
						</p>				
						<?php
				}
				?>
		<script>
		function supp()
			{
			p123.remove()
			//document.getElementByTagName('p123')[0].innerHTML=''
			/*p2.remove()
			p3.remove()
			p4.remove()
			p5.remove()
			p6.remove()
			p7.remove()
			p8.remove()
			p9.remove()*/

			}
		</script>
		
	



	  <?php //dans produit.php
	  /*$q=$bdd->query('select * from products');
		$q->execute();
		$q->bindColumn(1, $id);// je pense y'a pas klk chose ki peut recuperer la proprieté genre fetch
	while($q->fetch())
				{*/?>


						<?php if(isset($_SESSION['id'.$_SESSION['i']]))
	{?>
		<div id="conteneurx2">
				<table border="1">
					<tr>
						<th>Image</th>
						<th>Prix</th>
						<th>Suppréssion</th>
					</tr>




								?>
					<tr>
						<td>
						<img src="<?php echo $_SESSION['id'.$_SESSION['i']]; ?>.jpeg" name="id" alt="example cafe" width="350" height="400"/>
						</td>
						<td>
							7000f
						</td>
						<td>
					        <button type="button" onclick="supprimer(nbre=true);">supp p22c !</button>
					    </td>
					</tr>
					<?php
							}
						}
					?>
				</table>
			</div>
		<?php } ?>





		<?php
            if(isset($_GET['id']))
            {
                $_SESSION['pro1']=$_GET['id'];
            ?>
            <p><img src="1.jpeg" name="pro1" alt="example cafe" width="350" height="400"/></p>
        <?php
            }
            if(isset($_GET['pro2']))
            {
                $_SESSION['pro2']=$_GET['pro2'];
            ?>
            <p><img src="2.jpeg" name="pro1" alt="example cafe" width="350" height="400"/></p>
        <?php 
            }
            if(isset($_GET['pro3']))
            {
                $_SESSION['pro3']=$_GET['pro3'];
            ?>
            <p><img src="3.jpeg" name="pro1" alt="example cafe" width="350" height="400"/></p>
        <?php
            }
            if(isset($_GET['pro4']))
            {
                $_SESSION['pro4']=$_GET['pro4'];

            ?>
            <p><img src="4.jpeg" name="pro1" alt="example cafe" width="350" height="400"/></p>
        <?php
            }
            if(isset($_GET['pro5']))
            {
                $_SESSION['pro5']=$_GET['pro5'];

            ?>
            <p><img src="6.jpeg" name="pro1" alt="example cafe" width="350" height="400"/></p>
        <?php
            }
            if(isset($_GET['pro6']))
            {
                $_SESSION['pro6']=$_GET['pro6'];

            ?>
            <p><img src="7.jpeg" name="pro1" alt="example cafe" width="350" height="400"/></p>
        <?php
            }
            if(isset($_GET['pro7']))
            {
                $_SESSION['pro7']=$_GET['pro7'];

            ?>
            <p><img src="8.jpeg" name="pro1" alt="example cafe" width="350" height="400"/></p>
        <?php
            }
            if(isset($_GET['pro8']))
            {
                $_SESSION['pro8']=$_GET['pro8'];
                //file_get_contents('11.jpeg', FILE_BINARY);
            ?>
            <p><img src="11.jpeg" name="pro1" alt="example cafe" width="350" height="400"/></p>
        <?php
            }
            if(isset($_GET['pro9']))
            {
                $_SESSION['pro9']=$_GET['pro9'];

            ?>
            <p><img src="12.jpeg" name="pro1" alt="example cafe" width="350" height="400"/></p>
        <?php
            }
            ?>






 	<div id="conteneurx2"></br>
		<?php
for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
	{
		if(empty($_SESSION['id'.$_SESSION['i']]))
		{ 
	      echo"Votre panier est vide veuillez selectionnez un produit";	
		}
				else
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
				<tbody>
				<?php  
						//*99*4#
						for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
						{
							if(isset($_SESSION['id'.$_SESSION['i']]))
							{$_SESSION['cpt']++;
								?>
					<tr>
						<td>
						<img src="<?php echo $_SESSION['id'.$_SESSION['i']]; ?>.jpeg" name="id" alt="example cafe" width="350" height="400"/>
						</td>
						<td>
							7000f
						</td>
						<td>
					        <button type="button" onclick="supprimerLigne(this.parentNode.rowIndex);">supp p22c !</button>
					    </td>
					</tr>
					
					<?php
						}
						echo $_SESSION['cpt'];
					}
					?>
					</tbody>
				</table>
					<?php
				}
				break;
						}?>
			</div>




				<a href="panier.php?idi=<?php echo $_SESSION['id'.$_SESSION['p']]; ?>">
</a>