<!DOCTYPE html>
<html lang="en">
<head>
    
	<meta charset="utf-8">	
	
	<script type="text/javascript" src="banner/funcionesJS.js"></script>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Punto 3</title>
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

    <h1>Calculadora De Tu Edad.</h1>
    <h4>Los Campos Con El Signo * Son Requeridos.</h4>
    <form method="POST" action="">
        <table>
            <tr>
                <td>
                    * Fecha de Nacimiento:
                </td>
                <td>
                    <input type="date" name="Fecha_Nac" require>
                </td>
            </tr>
            <tr>
                <td>
                    * Fecha Actual:
                </td>
                <td>
                    <input type="date" name="Fecha_Actual" require>
                </td>
             </tr>
             <tr>
                 <td align="center"> Edad:</td>
                 <td align="center">     

                 </td>
             </tr>
        </table>
        <p>
            <input type="submit" name="button" value="CALCULAR">
        </p>
        <p>&nbsp;</p>
    </form>
    <?php
            $FechaValidacion = $_POST['Fecha_Actual'];
            $FechaNac = $_POST['Fecha_Nac'];

            $Edad = strtotime ($FechaValidacion) - strtotime($FechaNac);
            $diferencia_años = intval($Edad/60/60/24/365.25);       
            echo $diferencia_años;

        ?>
</body>
</html>

