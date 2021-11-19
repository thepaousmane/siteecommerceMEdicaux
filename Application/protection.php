<?php
session_start(); 
?>
<?php 
$varss=session_id();
echo $varss;
?>

<html>
<meta charset='utf-8'>
<link rel="stylesheet" href="cssdraps.css" />
<title>les draps</title>
	<body>		
		 <p>salutoto</p>


<?php
		for($_SESSION['pp']=10;$_SESSION['pp']<=17;$_SESSION['pp']++)
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
?>	</body>
</html>