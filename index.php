<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TallerWeb1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body >
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

<h1>Hacer Un Programa En PHP Que Permita Mostrar En Pantalla La
Suma, Resta, Multiplicación, De Dos Números Enteros Almacenados
En 2, Variables Diferentes.</h1>

<p>Numero 1 :  12</p>
<p>Numero 2 :  48</p>
    
</body>
</html>



<?php



        $numero1=12;
        $numero2=48;
        $totSuma;              
        $totResta;
      
        $totSuma = $numero1 + $numero2;
        echo("La Suma De Las Variables son: ".$totSuma. "<br />");
        $totResta = $numero2 - $numero1;    
        echo("La Resta De Las Variables son: ".$totResta."<br />");
        $totMulti = $numero1 * $numero2;
        echo("La Multiplicacion Total De Las Variables es: ".$totMulti."<br />");

?>
    
</body>
</html>
