<?php
session_start();

?>
<?php
$varss=session_id();
//$_SESSION['pp']=1;
?>
<head>
<!-- 
<script type="text/javascript">
    function URLCouranteSansParametres()
	 {
	  $urlCourante=$_SERVER["REQUEST_URI"];
	  $urlGet = explode("?",$urlCourante);
	  return  $urlGet[0];
	}
	URLCouranteSansParametres();
	</script>
 -->
</head>
<html>
	<meta charset='utf-8'>
	<!-- <link rel="stylesheet" href="css.css" /> -->
	<title>Vos produits</title> 
	<body>
	  <script type="text/javascript">
history.pushState(null, null, "<?php //echo $_SERVER["REQUEST_URI"]; ?>");
window.addEventListener("popstate", function(event) {
window.location.assign("http://localhost/sitemario/draps/site%20-%20Copie.php");
});
</script> 
	<div id="cadre2">
	<div id="deuxieme">
				<div class="quatrieme">
					<a class="plain" href="draps.php"><input style="font-size: 21px;" class="champsbout1" type="submit" value="draps"> </a>	
				</div>
				<div class="troisieme">
					<a class="plain" href="babliche.php"><input style="font-size: 21px;" class="champsbout1" type="submit" value="babliche"> </a>
				</div>
				<div class="cinquieme">
					<a class="plain" href="cocogimgimbre.php"><input style="font-size: 21px;" class="champsbout1" type="submit" value="cocogimgimbre" > </a>	
				</div>
				<div class="sixieme">
					<a class="plain" href="poulet.php"><input style="font-size: 21px;" class="champsbout1" type="submit" value="poulet" > </a>	
				</div>				
				<div class="septieme">
					<a class="plain" href="poulet.php"><input style="font-size: 19px;" class="champsbout1" type="submit" value="A propos de" > </a>	
				</div>
				<nav>
				<ul>
					<li class="deroulant"><a href="#">Contacts &ensp;</a>
						<ul class="sous"></br></br>
							<li>Orange : 775372803</li>
							<li>Expresso : 102582536</li>
							<li>Tigo : 766593598</li>
						</ul>
						</li>
				</ul>
				</nav>
			</div>
		<h1 align="center"><u>Les différentes catégories de produits</u></h1> 
		<div class="d1"><img src="0.jpeg" alt="example cafe" width="150" height="100"/></div>
		<div class="d2"><img src="1.jpeg" alt="example cafe" width="150" height="100"/></div>
		<div class="d3"><img src="3.jpeg" alt="example cafe" width="150" height="100"/></div>
		<div id="cadre3">
		<div class="texte">
			<p>faites vos livraisons ou réservations à travers tout le Dakar</p>
		</div>
		</div>
			<div id="lesimages">
				<div class="d11"><a href="drapnouv.php" ><img src="0.jpeg" alt="example cafe" width="250" height="200"/></div></a>
				<div class="d22"><img src="1.jpeg" alt="example cafe" width="250" height="200"/></div>
				<div class="d33"><img src="2.jpeg" alt="example cafe" width="250" height="200"/></div>
				<div class="d44"><a href="panier.php"><img src="imaliv.jpg" alt="example cafe" width="30" height="30"/></div></a>
			</div>
			</br></br></br></br></br></br></br></br>
		</div>
<?php 
// if()
// for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
// 			{
// 				if(isset($_SESSION['idx'.$_SESSION['i']])&&(empty($_SESSION['idy'.$_SESSION['i']])))
// 				{

if(empty($_SESSION['xxo']))
{
	$bdd1=new PDO("mysql:host=127.0.0.1;dbname=test","");
//	echo $_SESSION['idx'.$_SESSION['i']];
	$_SESSION['xxo']=25;
 	//echo"sdfdsfsdfsdfsdfsdfdsf";
	try
	{
		$bdd1=new PDO("mysql:host=127.0.0.1;dbname=test","");
		$bdd1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "create TABLE produitsclient".$varss."(
		id_cl INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		numero_art INT(10) NULL,
		nbre_prod int(10) default 0,
		price_prod int(10) default 0,
		stock_prod int(10) default 0,
		tel int(10) NULL,
		mail varchar(40) NULL,
		adresse varchar(40) NULL,
		livraison varchar(25) NULL
)";
	  $bdd1->exec($sql);
	}catch(PDOException $e)
		{
 		echo "Erreur : " . $e->getMessage();
	    }
	for($i=1;$i<=9;$i++)
	{
		$sql3=$bdd1->prepare("SELECT stock, price from products where id =".$i." ");
		$sql3->execute();
		$data=$sql3->fetch();
		
		$prx=$data['price'];
		$stck=$data['stock'];
		
		$bdd2=new PDO("mysql:host=127.0.0.1;dbname=test","");
		$sql_cl4=$bdd2->prepare("INSERT INTO produitsclient".$varss."(price_prod, stock_prod) values(?, ?)");
        $sql_cl4->bindParam(':price_prod', $prx);
        $sql_cl4->bindParam(':stock_prod', $stck);

		$sql_cl4->execute(array($prx, $stck));
	}
}

	if(isset($_POST['varoo']))
	{

		$bddd=new PDO("mysql:host=127.0.0.1;dbname=test","");
		 for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
			{
				if(isset($_SESSION['idx'.$_SESSION['i']])&&(empty($_SESSION['idy'.$_SESSION['i']])))
				{		
					$_SESSION['idy'.$_SESSION['i']]=($_SESSION['idx'.$_SESSION['i']]);
					 $nbre=$_SESSION['idy'.$_SESSION['i']];
					 echo $nbre;

					   //----------------------CODE SQL-------------------------------------------------------------------
					   //UPDATE Users SET weight = 160, desiredWeight = 145 WHERE id = 1;

                        // $sql_cl2 =$bddd->prepare("INSERT INTO produitsclient".$varss."(numero_art) values(?) where id_cl=".$nbre." ");
                        $sql_cl2 =$bddd->prepare("UPDATE produitsclient".$varss." SET numero_art =".$nbre." WHERE id_cl = ".$nbre." ");
						$sql_cl2->execute();  

						echo'le produit est ajouté dans le panier';

						// $sql3 =$bddd->prepare("SELECT stock from products where id =".$nbre." ");
						// $sql3->execute();
						// $data=$sql3->fetch();

						// $stck=$data['stock'];

						// $sql_cl4 =$bddd->prepare("INSERT INTO produitsclient".$varss."(stock_prod) values(?)");
      //                   $sql_cl4->bindParam(':stock_prod', $stck);
						// $sql_cl4->execute(array($stck));

				} 

				
				if(isset($_SESSION['idx'.$_SESSION['i']])&&(isset($_SESSION['idy'.$_SESSION['i']]))) 
				{
					$nbre=$_SESSION['idy'.$_SESSION['i']];
				
				echo $_SESSION['idy'.$_SESSION['i']];
					$bdd2=new PDO("mysql:host=127.0.0.1;dbname=test","");
					$sql=$bdd2->prepare("SELECT numero_art from produitsclient".$varss." WHERE numero_art =".$nbre." ");	
					$sql->execute();  
					if($sql->fetchColumn()>0)
					{
						echo"existe dhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh";
						$nbre=$_SESSION['idy'.$_SESSION['i']];
						$bdd2=new PDO("mysql:host=127.0.0.1;dbname=test","");
						$sql=$bdd2->prepare("UPDATE produitsclient".$varss." SET nbre_prod=nbre_prod + 1 WHERE numero_art =".$nbre." ");	
						$sql->execute(); 

						$bddx=new PDO("mysql:host=127.0.0.1;dbname=test","");
						$sql2=$bddx->prepare("UPDATE produitsclient".$varss." SET stock_prod=stock_prod - 1 WHERE numero_art =".$nbre." ");
						$sql2->execute(); 
					} 
					else
					{
						echo"existe pas dhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh";

						$sql = "UPDATE produitsclient".$varss." SET numero_art=? WHERE id_cl=?";
 						$bdd->prepare($sql)->execute([$nbre, $nbre]);

						// $sql_cl2 =$bdd2->prepare("INSERT INTO produitsclient".$varss."(numero_art) values(?) where id_cl=".$nbre." ");
      					//  $sql_cl2->bindParam(':numero_art', $nbre);
						// $sql_cl2->execute(array($nbre));



						// $sql3 =$bdd2->prepare("SELECT stock from products where id =".$nbre." ");
						// $sql3->execute();
						// $data=$sql3->fetch();

						// $stck=$data['stock'];

						// $sql_cl4 =$bdd2->prepare("INSERT INTO produitsclient".$varss."(stock_prod) values(?)");
      					//$sql_cl4->bindParam(':stock_prod', $stck);
						// $sql_cl4->execute(array($stck));

						//$nbre=$_SESSION['idy'.$_SESSION['i']];
						$sql=$bdd2->prepare("UPDATE produitsclient".$varss." SET nbre_prod=nbre_prod + 1 WHERE numero_art =".$nbre." ");	
						$sql->execute(); 

						$sql2=$bdd2->prepare("UPDATE produitsclient".$varss." SET stock_prod=stock_prod - 1 WHERE numero_art =".$nbre." ");
						$sql2->execute();  
					}
					unset($_SESSION['idx'.$_SESSION['i']]);		
				}
			}
		}
		?> 
	</body>
</html>



<?php
session_start();

?>
<?php
$varss=session_id();
//$_SESSION['pp']=1;
?>
<head>
<!-- 
<script type="text/javascript">
    function URLCouranteSansParametres()
	 {
	  $urlCourante=$_SERVER["REQUEST_URI"];
	  $urlGet = explode("?",$urlCourante);
	  return  $urlGet[0];
	}
	URLCouranteSansParametres();
	</script>
 -->
</head>
<html>
	<meta charset='utf-8'>
	<link rel="stylesheet" href="css.css" />
	<title>Vos produits</title> 
	<body>

	  <script type="text/javascript">
history.pushState(null, null, "<?php //echo $_SERVER["REQUEST_URI"]; ?>");
window.addEventListener("popstate", function(event) {
window.location.assign("http://localhost/sitemario/draps/site%20-%20Copie.php");
});
</script> 
	<div id="cadre2">
	<div id="deuxieme">
				<div class="quatrieme">
					<a class="plain" href="draps.php"><input style="font-size: 21px;" class="champsbout1" type="submit" value="draps"> </a>	
				</div>
				<div class="troisieme">
					<a class="plain" href="babliche.php"><input style="font-size: 21px;" class="champsbout1" type="submit" value="babliche"> </a>
				</div>
				<div class="cinquieme">
					<a class="plain" href="cocogimgimbre.php"><input style="font-size: 21px;" class="champsbout1" type="submit" value="cocogimgimbre" > </a>	
				</div>
				<div class="sixieme">
					<a class="plain" href="poulet.php"><input style="font-size: 21px;" class="champsbout1" type="submit" value="poulet" > </a>	
				</div>				
				<div class="septieme">
					<a class="plain" href="poulet.php"><input style="font-size: 19px;" class="champsbout1" type="submit" value="A propos de" > </a>	
				</div>
				<nav>
				<ul>
					<li class="deroulant"><a href="#">Contacts &ensp;</a>
						<ul class="sous"></br></br>
							<li>Orange : 775372803</li>
							<li>Expresso : 102582536</li>
							<li>Tigo : 766593598</li>
						</ul>
						</li>
				</ul>
				</nav>
			</div>
		<h1 align="center"><u>Nos produits</u></h1> 
		<div class="d1"><img src="0.jpeg" alt="example cafe" width="150" height="100"/></div>
		<div class="d2"><img src="1.jpeg" alt="example cafe" width="150" height="100"/></div>
		<div class="d3"><img src="3.jpeg" alt="example cafe" width="150" height="100"/></div>
		<div id="cadre3">
		<div class="texte">
			<p>faites vos livraisons ou réservations à travers tout le Dakar</p>
		</div>
		</div>
			<div id="lesimages">
				<div class="d11"><a href="drapnouv.php" ><img src="0.jpeg" alt="example cafe" width="250" height="200"/></div></a>
				<div class="d22"><img src="1.jpeg" alt="example cafe" width="250" height="200"/></div>
				<div class="d33"><img src="2.jpeg" alt="example cafe" width="250" height="200"/></div>
				<div class="d44"><a href="panier.php"><img src="imaliv.jpg" alt="example cafe" width="30" height="30"/></div></a>
			</div>
			</br></br></br></br></br></br></br></br>
		</div>
<?php 
if(empty($_SESSION['xxo']))
{
	$bdd1=new PDO("mysql:host=127.0.0.1;dbname=test","");

	$_SESSION['xxo']=25;
	try
	{
		$bdd1=new PDO("mysql:host=127.0.0.1;dbname=test","");
		$bdd1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "create TABLE produitsclient".$varss."(
		id_cl INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		numero_art INT(10) NULL,
		nbre_prod int(10) default 0,
		price_prod int(10) default 0,
		stock_prod int(10) default 0,
		tel int(10) NULL,
		mail varchar(40) NULL,
		adresse varchar(40) NULL,
		livraison varchar(25) NULL
)";
	  $bdd1->exec($sql);
	}catch(PDOException $e)
		{
 		echo "Erreur : " . $e->getMessage();
	    }
	for($i=1;$i<=17;$i++)
	{
		$sql3=$bdd1->prepare("SELECT stock, price from products where id =".$i." ");
		$sql3->execute();
		$data=$sql3->fetch();
		
		$prx=$data['price'];
		$stck=$data['stock'];
		
		$bdd2=new PDO("mysql:host=127.0.0.1;dbname=test","");
		$sql_cl4=$bdd2->prepare("INSERT INTO produitsclient".$varss."(price_prod, stock_prod) values(?, ?)");
        $sql_cl4->bindParam(':price_prod', $prx);
        $sql_cl4->bindParam(':stock_prod', $stck);

		$sql_cl4->execute(array($prx, $stck));
	}
}

	if(isset($_POST['varoo']))
	{
		$bddd=new PDO("mysql:host=127.0.0.1;dbname=test","");
		 for($_SESSION['i']=1;$_SESSION['i']<=17;$_SESSION['i']++)
			{
				if(isset($_SESSION['idx'.$_SESSION['i']])&&(empty($_SESSION['idy'.$_SESSION['i']])))
				{		
					$_SESSION['idy'.$_SESSION['i']]=($_SESSION['idx'.$_SESSION['i']]);
					 $nbre=$_SESSION['idy'.$_SESSION['i']];
					 echo $nbre;

                    $sql_cl2 =$bddd->prepare("UPDATE produitsclient".$varss." SET numero_art =".$nbre." WHERE id_cl = ".$nbre." ");
					$sql_cl2->execute();  
					echo'le produit est ajouté dans le panier';
				} 
				if(isset($_SESSION['idx'.$_SESSION['i']])&&(isset($_SESSION['idy'.$_SESSION['i']]))) 
				{
					$nbre=$_SESSION['idy'.$_SESSION['i']];
					echo $_SESSION['idy'.$_SESSION['i']];
					$bdd2=new PDO("mysql:host=127.0.0.1;dbname=test","");
					$sql=$bdd2->prepare("SELECT numero_art from produitsclient".$varss." WHERE numero_art =".$nbre." ");	
					$sql->execute();  
					if($sql->fetchColumn()<=0)
					{
						echo"existe pas dhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh";
						$sql = "UPDATE produitsclient".$varss." SET numero_art=? WHERE id_cl=?";
 						$bddd->prepare($sql)->execute([$nbre, $nbre]);
					} 
				$sql=$bdd2->prepare("UPDATE produitsclient".$varss." SET nbre_prod=nbre_prod + 1 WHERE numero_art =".$nbre." ");	
				$sql->execute(); 

				$sql2=$bdd2->prepare("UPDATE produitsclient".$varss." SET stock_prod=stock_prod - 1 WHERE numero_art =".$nbre." ");
				$sql2->execute();  
			}
				unset($_SESSION['idx'.$_SESSION['i']]);		
		}
	}
		?> 
	</body>
</html>
