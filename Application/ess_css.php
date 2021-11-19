<!DOCTYPE html>
<html>
    <head>
        <title>Diaporama</title>
        <meta charset="utf-8">
<style type="text/css">
/*.d1{
    width: 576px;
    height: 432px;
    margin: 50px auto;
    box-shadow: 0px 15px 10px -5px #777;
    background-color: #EDEDED;
    background-size: contain;
    animation: fondu 5s ease-in-out infinite both;
}*/
.d2{
    width: 100%;
    height: 0px;
    padding-top: 75%;
    box-shadow: 0px 15px 10px 5px #777;
    background-color: #EDEDED;
    background-size: 100% 100%;
    animation: fondu 5s ease-in-out infinite both;
}
.conteneur{
    max-width: 576px;
    margin: 50px auto;
}
.d2:hover{
	animation-play-state: paused;
}
@keyframes fondu{
    0%{background-image: url("1.jpeg");}
    33%{background-image: url("2.jpeg");} 
 100%{background-image: url("3.jpeg");}
/* 100%{background-image: url("4.jpeg");}
*/}

</style>	        


    </head>  
 <body>
<div class="d1"></div>
 <div class="conteneur">
  <div class="d2"></div>
</div>
  </div>
 </body> 
</html>


