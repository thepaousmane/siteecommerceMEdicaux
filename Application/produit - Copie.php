<?php
//-----------------------note----------
//si on achete directement le produit dans ce cas le produit ne doit pas figurer dans la table de l'utilisateur 
session_start(); 
?>
<html>
<head>
<script type="text/javascript">
  function verifconfirmation()
  	{ 
       alert("le produit a été ajouté dans le panier !");
	    document.location.href="site - Copie.php"; 
	    return true;
    }
</script>	
</head>
	<body>
	<link rel="stylesheet" href="cssdraps.css" />
		<?php
		$varss=session_id();
		echo $varss;
		$_SESSION['i']=0;
		//$_SESSION['id'.$_SESSION['i']]=0;
		?>
 <?php
		for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
			{
				if(isset($_GET['id'.$_SESSION['i']])) 
				{
					//$_SESSION['id'.$_SESSION['i']]=$_GET['id'.$_SESSION['i']];
				$_GET['idx'.$_SESSION['i']]=$_GET['id'.$_SESSION['i']];

				?>
					<p><img src="<?php echo $_GET['id'.$_SESSION['i']]; ?>.jpeg" name="id" alt="example cafe" width="350" height="400"/>
							<div class ="ajustcontach"><?php /*BLEME RESOLU===========================>>>>>>>> on doit juste faire un lien sur ajouter au panier et dire : si la variable du lien existe alors executer ce qui est dans la fonction javascript 

							*/ ?>
							<a href="site - Copie.php?vaaro=1">
								<input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" type="button" value="Ajouter au panier"  onclick="verifconfirmation();">
							</a>
						   </div>
						 <div class ="ajustacha"><?php /*bouton submit*/ ?>
							<a class="plain" href="choisirlivraison.php">
								<input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" type="submit" value="Acheter" >
							</a>
						</div>	
						</div></br>
			<?php    
				}
			 }
    ?>
	</body>
</html>

































<?php
session_start(); 
?>
<head>
	<script type="text/javascript">
  function verifconfirmation()
  { 
       alert("le produit a été ajouté dans le panier !");
	    document.location.href="produit.php"; 
          return true;
  }
    </script>
   <!--  <script type="text/javascript">
    	if(verifconfirmation()==true)
    		alert("kkkkkkkkkkkkkkk");
    	else
    		alert("nononononononononon");
    </script> -->
</head>
<html>
	<body>
	<link rel="stylesheet" href="cssdraps.css" />
		<?php
		$varss=session_id();
		echo $varss;
		$_SESSION['i']=0;
		//$_SESSION['id'.$_SESSION['i']]=0;
		for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
			{
				if((isset($_GET['id'.$_SESSION['i']]))&&(empty($_SESSION['xxxx'])))
				{
					$_SESSION['xxxx']=25;
				 	echo"sdfdsfsdfsdfsdfsdfdsf";
					try
		   				{
							$bdd1=new PDO("mysql:host=127.0.0.1;dbname=test","");
							$bdd1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$sql = "create TABLE produitsclient".$varss."(
		   				  id_cl INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		   				 numero_art INT(10) UNSIGNED NOT NULL,
		   				 nbre_prod int(10) default 0)";
		   				  $bdd1->exec($sql);
		   				}catch(PDOException $e){
		              echo "Erreur : " . $e->getMessage();
		            }
				}
			}
			$bddd=new PDO("mysql:host=127.0.0.1;dbname=test","");
		 for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
			{
				if(isset($_GET['id'.$_SESSION['i']])&&(empty($_SESSION['id'.$_SESSION['i']])))
				{

					$_SESSION['id'.$_SESSION['i']]=$_GET['id'.$_SESSION['i']];//******LA VARIABLE VIENT D'EXISTER DEH********
					 $nbre=$_SESSION['id'.$_SESSION['i']];
					
					   //----------------------CODE SQL-------------------------------------------------------------------
					
                        $sql_cl2 =$bddd->prepare("INSERT INTO produitsclient".$varss."(numero_art) values(?)");
                        $sql_cl2->bindParam(':numero_art', $nbre);
						$sql_cl2->execute(array($nbre));
						echo'le produit est ajouté dans le panier';
				} 
				if(isset($_GET['id'.$_SESSION['i']])&&(isset($_SESSION['id'.$_SESSION['i']]))) 
				{
					$nbre=$_SESSION['id'.$_SESSION['i']];
					$bdd2=new PDO("mysql:host=127.0.0.1;dbname=test","");
					$sql=$bdd2->prepare("UPDATE produitsclient".$varss." SET nbre_prod=nbre_prod + 1 WHERE numero_art =".$nbre." ");	
					$sql->execute(); 
				?>
					<p><img src="<?php echo $_SESSION['id'.$_SESSION['i']]; ?>.jpeg" name="id" alt="example cafe" width="350" height="400"/>
							<div class ="ajustcontach"><?php /*bouton submit*/ ?>
							<a href="site - Copie.php?vaaro=1">
								<input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" type="button" value="Ajouter au panier"  onclick="verifconfirmation();">
							</a>
						   </div>
						 <div class ="ajustacha"><?php /*bouton submit*/ ?>
							<a class="plain" href="choisirlivraison.php">
								<input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" type="submit" value="Acheter" >
							</a>
						</div>	
						</div></br>
			<?php    
				}
			 }
			?>
	</body>
</html>













<?php
//-----------------------note----------
//si on achete directement le produit dans ce cas le produit ne doit pas figurer dans la table de l'utilisateur 

session_start(); 
?>
<head>
	<script type="text/javascript">
  function verifconfirmation()
  { 
       alert("le produit a été ajouté dans le panier !");
	    document.location.href="site - Copie.php"; 
          return true;
  }
    </script>
</head>
<html>
	<body>
	<link rel="stylesheet" href="cssdraps.css" />
		<?php
		$varss=session_id();
		echo $varss;
		$_SESSION['i']=0;
		//$_SESSION['id'.$_SESSION['i']]=0;
		for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
			{
				if((isset($_GET['id'.$_SESSION['i']]))&&(empty($_SESSION['xxxx'])))
				{
					$_SESSION['xxxx']=25;
				 	echo"sdfdsfsdfsdfsdfsdfdsf";
					try
		   				{
							$bdd1=new PDO("mysql:host=127.0.0.1;dbname=test","");
							$bdd1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$sql = "create TABLE produitsclient".$varss."(
		   				  id_cl INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		   				 numero_art INT(10) UNSIGNED NOT NULL,
		   				 nbre_prod int(10) default 0)";
		   				  $bdd1->exec($sql);
		   				}catch(PDOException $e){
		              echo "Erreur : " . $e->getMessage();
		            }
				}
			}
			$bddd=new PDO("mysql:host=127.0.0.1;dbname=test","");
		 for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
			{
				if(isset($_GET['id'.$_SESSION['i']])&&(empty($_SESSION['id'.$_SESSION['i']])))
				{

					$_SESSION['id'.$_SESSION['i']]=$_GET['id'.$_SESSION['i']];//******LA VARIABLE VIENT D'EXISTER DEH********
					 $nbre=$_SESSION['id'.$_SESSION['i']];
					
					   //----------------------CODE SQL-------------------------------------------------------------------
					
                        $sql_cl2 =$bddd->prepare("INSERT INTO produitsclient".$varss."(numero_art) values(?)");
                        $sql_cl2->bindParam(':numero_art', $nbre);
						$sql_cl2->execute(array($nbre));
						echo'le produit est ajouté dans le panier';
				} 
				if(isset($_GET['id'.$_SESSION['i']])&&(isset($_SESSION['id'.$_SESSION['i']]))) 
				{
					$nbre=$_SESSION['id'.$_SESSION['i']];
					$bdd2=new PDO("mysql:host=127.0.0.1;dbname=test","");
					$sql=$bdd2->prepare("UPDATE produitsclient".$varss." SET nbre_prod=nbre_prod + 1 WHERE numero_art =".$nbre." ");	
					$sql->execute(); 
				?>
					<p><img src="<?php echo $_SESSION['id'.$_SESSION['i']]; ?>.jpeg" name="id" alt="example cafe" width="350" height="400"/>
							<div class ="ajustcontach"><?php /*bouton submit*/ ?>
							<a href="site - Copie.php?vaaro=1">
								<input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" type="button" value="Ajouter au panier"  onclick="verifconfirmation();">
							</a>
						   </div>
						 <div class ="ajustacha"><?php /*bouton submit*/ ?>
							<a class="plain" href="choisirlivraison.php">
								<input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" type="submit" value="Acheter" >
							</a>
						</div>	
						</div></br>
		<?php    
			}
		 
		 }
			?>
	</body>
</html>

















<?php 

if(isset($_GET['varoo'])&&($_GET['varoo']==2))
{
	unset($_GET['varoo']);
	for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
	{
		if((isset($_SESSION['r']))&&(empty($_SESSION['xxxx'])))
		{		
			$_SESSION['xxxx']=25;

		 	echo"skjdhsndkufjdsnkfjsdfdsfsdfsdfsdfsdfdsfEFHHHHHHHHHHHHHHHHHHHHHHHHHHHHHdsssssssssssssssssssdsdHHHHHHHHHHHHHHHHHHHHJSHGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG";
			try
   				{
				$bdd1=new PDO("mysql:host=127.0.0.1;dbname=test","");
				$bdd1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "create TABLE produitsclient".$varss."(
   				id_cl INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   				numero_art INT(10) UNSIGNED NOT NULL,
   				nbre_prod int(10) default 0)";
   				  $bdd1->exec($sql);
   				}catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
		}
	}
		$bddd=new PDO("mysql:host=127.0.0.1;dbname=test","");
 for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
	{
		if(isset($_SESSION['r']))
		{
			if(($_SESSION['r']==$_SESSION['i'])&&(empty($_SESSION['id'.$_SESSION['i']])))// 1) ??????????????????????????????????????????
			{
				echo"<br>"; 
			echo"<br>";
			echo"<br>";
			echo $_SESSION['r'];
				 // echo"skjdhsndkufjdsnkfjsdfdsfsdfsdfsdfsdfdsfEFHHHHHHHHHHHHHHHHHHHHHHHHHHHHHdsssssssssssssssssssdsdHHHHHHHHHHHHHHHHHHHHJSHGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG";
//******LA VARIABLE VIENT D'EXISTER DEH********
				$_SESSION['id'.$_SESSION['i']]=$_SESSION['r'];
				 $nbre=$_SESSION['id'.$_SESSION['i']]; 
				
				   //----------------------CODE SQL-------------------------------------------------------------------
				
                    $sql_cl2 =$bddd->prepare("INSERT INTO produitsclient".$varss."(numero_art) values(?)");
                    $sql_cl2->bindParam(':numero_art', $nbre);
					$sql_cl2->execute(array($nbre));
					 // echo'le produit est ajouté dans le panier';
			} 
			if((isset($_SESSION['r'])==$_SESSION['i'])&&(isset($_SESSION['id'.$_SESSION['i']])))// 1) ?????????????????????????????????????????????????
																			//1) ????essayer de voire ce qui ne vas pas entre ces deux
			{
				$nbre=$_SESSION['id'.$_SESSION['i']];
				$bdd2=new PDO("mysql:host=127.0.0.1;dbname=test","");
				$sql=$bdd2->prepare("UPDATE produitsclient".$varss." SET nbre_prod=nbre_prod + 1 WHERE numero_art =".$nbre." ");	
				$sql->execute();     
			}
		}
	}
		unset($_SESSION['r']);
}
?>