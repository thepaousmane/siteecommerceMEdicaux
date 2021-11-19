<?php
session_start(); 
?>
<?php 
$varss=session_id();
echo $varss;
?>

<html>
<head>
	<script src="jquery.js"></script>

	<script src="essjs.js"></script>

</head>
<meta charset='utf-8'>
<link rel="stylesheet" href="cssdraps.css" />
<title>les draps</title>
	<body>	
<div class="onu1 reveal">
	<img src="capt2.2.png" alt="example cafe" width="3" height="1"/>
</div>
		
		 <p>salutoto</p>
		 <?php
		 echo "Deja emprzddddddddddddddddddddddddddddddddddddddddddddddddunte";

			  // echo"<table>";
			  // echo"<tr>";
			  // echo"<td>";
		 // }
		// $bdd1=new PDO("mysql:host=127.0.0.1;dbname=test","");
	    // $q=$bdd1->prepare('select * from products'.$varss.' ');
	   // $q->execute();
		// $data=$q->fetch();
		// if($q->fetchColumn()>0) ?????????????????????????

		for($_SESSION['pp']=1;$_SESSION['pp']<=9;$_SESSION['pp']++)
		{
				$_SESSION['qp']=$_SESSION['pp'];
				$bdd1=new PDO("mysql:host=127.0.0.1;dbname=test","");
				$q=$bdd1->prepare('SELECT stock_prod from produitsclient'.$varss.' WHERE id_cl ='.$_SESSION['qp']);
				$q->execute();
				$data=$q->fetch();

				$q2=$bdd1->prepare('SELECT stock from products WHERE id ='.$_SESSION['qp']);
				$q2->execute();
				$data2=$q2->fetch();
				
			if(($data['stock_prod']==0))//&&($data2['stock']==0))
			{
				//-------------Ne pas supprimer l'article de la base de donnée----------------
				// $q2=$bdd1->prepare('DELETE from produitsclient'.$varss.' WHERE id_cl ='.$_SESSION['qp']);
				// $q2->execute();
				// $data2=$q->fetch();
				unset($_SESSION['qp']);
			}
			else
			{ 
				$i=$_SESSION['qp'];
				// echo $i;
				?>
				<a href="produit.php?id<?php echo $_SESSION['qp']; ?>=<?php echo $_SESSION['qp']; ?>"><img src="<?php echo $_SESSION['qp']; ?>.jpeg" name="id1" width="350" height="400"/></a>
	<?php 	
			// echo"</td>";
			// echo"</tr>";
			// echo"</table>";	
			}
		} 
if(isset($_SESSION['i']))
{	
	if(isset($_SESSION['idx'.$_SESSION['i']]))
	{
		echo"une variable de session existdsdsde";
		unset($_SESSION['idx'.$_SESSION['i']]);		
	}
	//echo'la variable $ session z est égal à : '.$_SESSION['z'];
}
else
{
	echo"";
}
?>	
</body>
</html>