<?php
session_start(); 
?>
<?php
$varss=session_id();
?>
<head>
	
</head>
<html>
	<body>
<?php echo header ("Refresh: 20;URL=panier.php");
$bdd=new PDO("mysql:host=127.0.0.1;dbname=test","");
if(isset($_GET['idi']))
{
	$var=$_GET['idi'];

	$sql3=$bdd->prepare("SELECT stock from products where id =".$var." ");
	$sql3->execute();
	$data=$sql3->fetch();

	$nu=NULL;
	$stck=$data['stock'];

	$sql = "UPDATE produitsclient".$varss." SET numero_art=?, nbre_prod=?, stock_prod=? WHERE id_cl=?";
 	$bdd->prepare($sql)->execute([$nu,'0', $stck, $var]);
	echo"produit supprimé du panier";

}
	if(isset($_GET['ids']))
	{
		unset($_GET['ids']);
	}
	echo header ("Refresh: 2;URL=panier.php");
?>
	</body>
</html>





h1 /* Utilisation de la police qu'on vient de définir sur les titres */
{
letter-spacing: 0px;
word-spacing:0px;
/*text-decoration: blink;*/
font-family: 'cac_champagneregular', Arial, serif;
}

h2
{
font-family: 'cac_champagneregular', Arial, serif;
text-decoration: blink;
}
.champsbout1
{
border: 0px solid black;
}

.champsbout1:hover
{
color: #E2C499;
text-decoration:underline;
}
#deuxieme{
/* font-family: 'cac_champagneregular', Arial, serif; */
/* display : list-item; */
/* display:inline; */
/* list-style-position:outside; */
/* list-style-type:circle; */
}
#deuxieme .quatrieme{
width: 0px;
height: 0px;
position: relative;
top: 0%;
left: 41%;	
}
#deuxieme .troisieme{
width: 0px;
height: 0px;
position: relative;
top: 0%;         
left: 32.5%;
}
#deuxieme .cinquieme{
width: 0px;
height: 0px;
position: relative;
top: 0%;        
left: 17.5%;
}
#deuxieme .sixieme{
width: 0px;
height: 0px;
position: relative;
top: 0%;        
left: 10.8%;
}
#deuxieme .septieme{
width: 0px;
height: 0px;
position: relative;
top: 0%;        
right: 35.8%;
}

nav ul{
    list-style-type: none;
}

nav ul li{
    /* float: left; */
    width: 10%;
    /* text-align: center; */
    position: relative;
	left: -5px;
	top: -21px;
}
nav ul::after{
    content: "";
    display: block;
    clear: both;
}

nav a{
    display: block;
    text-decoration: none;
    color: black;
    border-bottom: 2px solid transparent;
    padding: 10px 0px;
}

nav a:hover{
    color: gold;
    border-bottom: 2px solid gold;
}
.sous{
    display: none;
    box-shadow: 0px 1px 2px #CCC;
    background-color: white;
    position: relative;
    width: 100%;
    /* z-index: 500%; */
}
nav > ul li:hover .sous{
    display: block;
}
.sous li{
    float: left;
    width: 100%;
    margin-left: -25%;
	margin-right: 0%;
}
.sous a{
    padding: 10px;
    border-bottom: none;
}
.sous a:hover{
    border-bottom: none;
    background-color: RGBa(200,200,200,0.1);
}
.deroulant > a::after{
    content:" ▼";
    font-size: 12px;
}


body 
{
background-color: #c0b9ab; /* #FFFFCC background-color*/
}
#cadre2
{
width: 1013px;
height: 940px;
background-color:#e7e1db;
border: 1.2px solid black;
position: absolute;
top: 1.8%;       
left: 15%;
}
#cadre3
{
width: 570px;
height: 60px;
background-color: #CCCCFF;
border: 1.7px solid black;
position: relative;
top: -13%;       
left: 0%;
}
.texte
{
 padding-top: 0px;
 padding-right: 30px;
 padding-left: 20px;
 padding-bottom: 30px;
}

p
{
font-size: 20px;
text-shadow: 2px 2px 4px #E2C499;
font-family: 'cac_champagneregular', Arial, serif;
font-family: 'cac_champagneregular', Arial, serif;
}

.plain {
/* font-family: 'cac_champagneregular', Arial, serif; */
/* font-size: 20px; */
/* width: 500px; */
/* height: 500px; */
/* position: relative; */
/* top: 50%;        */
/* left: 0%; */
/* text-decoration: none; */
}

/* classer les images */
div{
    background-color:;
    margin: 0 auto 0px auto;
    border:;
	
   }
.d1:hover{
    animation-play-state: paused;
}
.d2:hover{
    animation-play-state: paused;
}
.d3:hover{
    animation-play-state: paused;
}
.d1{
	
    animation-name: taille1;
    animation-duration: 3s;
    animation-timing-function: linear;
	animation-iteration-count: infinite;
	margin-top: 25px;
    left: 100px;
    margin-right: 450px;
	position: relative;
	top: -3px;
}
.d2{
    animation-name: taille2;
    animation-duration: 3s;
    animation-timing-function: linear;
	
	animation-iteration-count: infinite;
	margin-top: 25px;
	left:100px;
	margin-right: 580px;
	position: relative;
	top:-127px;
}
.d3{
    animation-name: taille3;
    animation-duration: 3s;
    animation-timing-function: linear;
	animation-iteration-count: infinite;
	margin-top: 25px;
	left:170px;
	margin-right: 580px;
	position: relative;
	top: -250px;
}
/*.d1
	{
	 transform: rotate(45deg);
	}
	*/

@keyframes taille1{
    from{width: 70%;}
    50%{width: 50%;}
    to{width: 70%;}
}
@keyframes taille2{
    from{width: 30%;}
    50%{width: 20%;}
    to{width: 30%;}
}
@keyframes taille3{
    from{width: 10%;}
    50%{width: 5%;}
    to{width: 10%;}
}

.d11
{
	position: absolute;
top: 70%;       
left: 1%;
}

.d22
{
	position: absolute;
top: 70%;       
left: 21%;
}

.d33
{
	position: absolute;
top: 70%;       
left: 41%;
}
.d44
{
	position: absolute;
top: 0%;       
left: 25.5%;
}


















