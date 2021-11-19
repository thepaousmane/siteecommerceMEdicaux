

<?php
session_start(); 
?>


<html>
<meta charset='utf-8'>
<link rel="stylesheet" href="cssdraps.css" />
<title>les draps</title>
	<body>		
		 <p>salutoto</p>
		 <?php

			  echo"<table>";
			  echo"<tr>";
			  echo"<td>";
		  // }
		for($_SESSION['p']=1;$_SESSION['p']<=9;$_SESSION['p']++)
		{
			$bdd1=new PDO("mysql:host=127.0.0.1;dbname=test","");
			$q=$bdd1->prepare('select stock from products where id = '.$_SESSION['p']);
			$q->execute();
			$data=$q->fetch();
			echo'le stock du produit est de : '.$data['stock'];
			if($data['stock']<=0)
			{
				unset($_SESSION['p']);
			}
		}
		  ?>
			 <p><a href="produit.php?id1=1"><img src="1.jpeg" name="id1" alt="example cafe" width="350" height="400"/></p></a>
		<?php
			echo"</td>";
			echo"<td>";
		?>
			<p><a href="produit.php?id2=2"><img src="2.jpeg" name="id2" alt="example cafe" width="350" height="400"/></p></a>
		<?php
			echo"</td>";
			echo"<td>";
		?>
			<p><a href="produit.php?id3=3"><img src="3.jpeg" name="id3" alt="example cafe" width="350" height="400"/></p></a>
		<?php
			echo"</td>";
			echo"</tr>";
			echo"</table>";
			echo"<table>";
			echo"<tr>";
			echo"<td>";
			echo"</br>";
			echo"</br>";
		  ?>
			<p><a href="produit.php?id4=4"><img src="4.jpeg" name="id" alt="example cafe" width="350" height="400"/></p></a>
		<?php
			echo"</td>";
			echo"<td>";
			echo"</br>";
			echo"</br>";
		?>
			<p><a href="produit.php?id5=5"><img src="5.jpeg" name="id" alt="example cafe" width="350" height="400"/></p></a>
			<?php
			echo"</td>";
			echo"<td>";
			echo"</br>";
			echo"</br>";
			?>
			<p><a href="produit.php?id6=6"><img src="6.jpeg" name="id" alt="example cafe" width="350" height="400"/></p></a>
			<?php
			echo"</td>";
			echo"</tr>";
			echo"</table>";
			echo"<table>";
			echo"<tr>";
			echo"<td>";
			echo"</br>";
			echo"</br>";
		  ?>
		  <p><a href="produit.php?id7=7"><img src="7.jpeg" name="id" alt="example cafe" width="350" height="400"/></p></a>
		<?php
			echo"</td>";
			echo"<td>";
			echo"</br>";
			echo"</br>";
		?>
		<p><a href="produit.php?id8=8"><img src="8.jpeg" name="id" alt="example cafe" width="350" height="400"/></p></a>
		<?php
			echo"</td>";
			echo"<td>";
			echo"</br>";
			echo"</br>";
		?>	
		<p><a href="produit.php?id9=9"><img src="9.jpeg" name="id" alt="example cafe" width="350" height="400"/></p></a>
			<?php
			echo"</td>";
			echo"</tr>";
			echo"</table>";
			echo"</br>";
			echo"</br>";		
			?>
			<div id="conteneurdefil">
				<div class ="ajustdefil">
					<a class="plain" href="draps.php"><input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;"  type="submit" value="Page suivante" style="font-family: 'cac_champagneregular', Arial, serif; font-family: 'cac_champagneregular', Arial, serif;"> </a>	
				</div>
			</div>
			</br>
			</br>
			</br>
			<?php
			/*for($_SESSION['i']=1;$_SESSION['i']<=9;$_SESSION['i']++)
			{
				if(isset($_GET['id'.$_SESSION['i']]))
				{
					$_SESSION['id'.$_SESSION['i']]=$_GET['id'.$_SESSION['i']];
				}
			}*/
			
$varss=session_id();
echo $varss;
if(isset($_SESSION['idx'.$_SESSION['i']]))
{
	echo"une variable de session existdsdsde";
	unset($_SESSION['idx'.$_SESSION['i']]);		
}
echo'la variable $ session z est égal à : '.$_SESSION['z'];

?>
	</body>
</html>