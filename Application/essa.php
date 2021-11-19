<html>
<head>
  <meta charset="UTF-8" />
  <body>
  <?php echo header ("Refresh: 0;URL=panier.php"); ?>

<?php
$i=$_POST['i'];
$reponse = $bdd->query("DELETE FROM products WHERE id =".$i); ?>
</body>
</html>




