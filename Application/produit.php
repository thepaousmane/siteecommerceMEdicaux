<?php
session_start(); 
 $_SESSION['z']=2;

for($_SESSION['i']=1;$_SESSION['i']<=17;$_SESSION['i']++)
	{
		if(isset($_GET['id'.$_SESSION['i']])) 
		{
			$_SESSION['o']=$_SESSION['i'];
			$_SESSION['idx'.$_SESSION['i']]=$_GET['id'.$_SESSION['i']];
			break;
			break;
		}
	}
?>
<html>
<head>
<script type="text/javascript">
  function verifconfirmation()
  	{ 
       alert("le produit a été ajouté dans le panier !");
	    // document.location.href="site - Copie.php"; 
	    // return true;
    }
</script>	
</head>
	<body>
	<link rel="stylesheet" href="cssdraps.css" />
		<?php
		$varss=session_id();
		echo $varss;
		// $_SESSION['i']=0;
		// $_SESSION['id'.$_SESSION['i']]=0;
		
		?>
 <?php
		// for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
		// 	{
		// 		if(isset($_GET['id'.$_SESSION['i']])) 
		// 		{
		// 			$_SESSION['o']=$_SESSION['i'];
		// 			$_SESSION['idx'.$_SESSION['i']]=$_GET['id'.$_SESSION['i']];
				?>
					 <p><img src="<?php echo $_SESSION['idx'.$_SESSION['i']]; ?>.jpeg" name="id" alt="example cafe" width="350" height="400"/>
						<div class ="ajustcontach">
				<?php    
				//  }
			 // }
    		$bdd1=new PDO("mysql:host=127.0.0.1;dbname=test","");
			$q=$bdd1->prepare('select stock from products where id = '.$_SESSION['o']);
			$q->execute();
			$data=$q->fetch();
			echo'le stock du produit est de : '.$data['stock'];
			if($data['stock']>0)
			{
		?>
				<form action="site - Copie.php" method="post">
					 <input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" type="submit" name="varoo" value="Ajouter au panier" onclick="verifconfirmation();">
				</form>
			   </div>
			 <div class ="ajustacha"><?php /*bouton submit*/ ?>
				<a class="plain" href="choisirlivraisons.php">
					<input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" type="submit" value="Acheter" >
				</a>
			</div>	
			</div></br>
	<?php 
			}
			else
			{
				echo"le stock de ce produit vient d'être épuiser par un client";
			 ?>
				<input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" type="button" value="Ajouter au panier" disabled="disabled">
				<input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" type="button" value="Acheter" disabled="disabled">
	 <?php }
	?>
	</body>
</html>
