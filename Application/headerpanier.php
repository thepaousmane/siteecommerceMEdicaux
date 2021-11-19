<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Dialog - Modal message</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog-message" ).dialog({
      modal: true,
      buttons: {
        Ok: function() 
        {
          $( this ).dialog( "close" );
        }
      }
    });
  } );
  </script>
</head>
<body>
 
<div id="dialog-message" title="Download complete">
  <p>
    <form action="panier.php">
  <?php 
	for($i=0;$i<=17;$i++)
	{ 
		if(isset($_SESSION['tableaup']["$i"]))
		{
		 echo $_SESSION['tableaup']["$i"];
	?>
  <img src="<?php echo $_SESSION['tableaup'][$i]; ?>.jpeg" alt="Placeholder Image" width="250" height="200" />
	  le produit pas dispo
	<?php 
	 // echo header ("Refresh: 4;URL=choisirlivraisons.php");
		}
	}
	      var_dump($_SESSION['tableaup']);
?>
<input type="submit" value="ok"/>
  </p>
</div>
 
</body>
</html>