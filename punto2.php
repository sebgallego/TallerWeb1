<!DOCTYPE html>

<head>

	<meta charset="utf-8">	
	
	<script type="text/javascript" src="banner/funcionesJS.js"></script>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body  onLoad="banner()">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    	
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">TallerWeb1</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active">
        <a class="nav-link" href="http://localhost/Ejemplo1/index.php">PUNTO 1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Ejemplo1/punto2.php">PUNTO 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Ejemplo1/punto3.php">PUNTO 3</a>
      </li>
     
      </ul>
    
  </div>
</nav><br>   

<header id="encabezado" >

		
		</hgroup>
		<img id="banner" src="" name="banner"  align="right"></img>
	</header> 

<div id="cuerpo">

	
 <section id="contenido">

	<article class="hentry">

		<header class="entry-header">
			<h1 class="entry-title">
				Formulario Del Bodytech Para Tu Peso
			</h1>
<figure >
	
		</header>

		<div>
<form action="index.php" method="post">
<table>
<tr>Formulario Para Calcular El Indice De Masa Corporal(IMC)</tr>
<br><tr><td>PESO:</td><td><input type="text" name="peso" required=""></input></td></tr></br>
	<tr><td>ESTATURA:</td><td><input type="text" name="estatura" required=""></input></td></tr>
	<tr><td><input type="submit" value="calcular"></input></td></tr>
</table>
	
</form>

<?php 
$imc=0;
$peso = isset($_POST["peso"]) ? $_POST["peso"]:null;
$estatura = isset($_POST["estatura"]) ? $_POST["estatura"]:null;
if ($estatura !=0) {
	$imc = $peso/pow($estatura, 2);

echo "Su indice de masa corporal es: ".round($imc,2)."<br>";

if ($imc < 18) { 
	echo "Peso bajo. Necesario valorar signos de desnutrición";
}
elseif ($imc >= 18 && $imc <= 24.9) {
	echo "Normal";
}
elseif ($imc >= 25 && $imc <= 26.9) {
	echo "Sobrepeso";
}
elseif ($imc == 27) {
	echo "Obesidad";
}
elseif ($imc >= 27 && $imc <= 29.9) {
	echo "Obesidad grado I. Riesgo relativo alto para desarrollar enfermedades cardiovasculares";
}
elseif ($imc >= 30 && $imc <= 39.9 ) {
	echo " Obesidad grado II. Riesgo relativo muy alto para el desarrollo de enfermedades cardiovasculares";
}
elseif ($imc >= 40) {
	echo "Obesidad grado III Extrema o Mórbida. Riesgo relativo extremadamente alto para el desarrollo de enfermedades cardiovasculares";
}
}


?>
		</div> 
		
	</article>

	
	
</section>




</body>
</html>