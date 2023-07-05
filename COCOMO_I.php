
<!DOCTYPE html>
<html lang="es">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
</head>
<body>

<div class="container">
    <div class="btn-group">
  <a href="COCOMO_I.php" class="btn btn-primary active" aria-current="page">Cocomo I</a>
  <a href="COSMIC.php" class="btn btn-primary">Cosmic</a>
  <a href="LDC.php" class="btn btn-primary">LDC</a>
  <a href="PUNTO_FUSION.php" class="btn btn-primary">Punto Fusion</a>
</div>

<center><h1>COCOMO 1</h1></center>
<p>es un modelo matemático de base empírica utilizado para estimación de costos de software.</p>
<form method="GET" action="COCOMO_I.php">
 


 
 <div class="mb-3">
      <label for="titulo" name="titulo" class="form-label">FD E/S</label>
      <input type="number" name="entrada" class="form-control" placeholder="Dar el valor del numero de entrada y salida del sistema" required>
    </div>
<h2>FORMULA DE CANTIDAD DE LINEAS DE CODIGO</h2>
<h3>L = 100 * FD E/S</h3>
<p>DONDE:</p>
<p>L = Cantidad de lineas de codigo que tendra el sistema</p>
<p>FD E/S = Flujo de entrada + flujo de salida en el sistema</p>
<p>NOTA: Este dato se puede sacar desde un diagrama de caso de uso del sistema</p>
<div class="mb-3">
      <label for="titulo" name ="titulo"class="form-label">COSTO HONORARIO</label>
      <input type="number" name="costo"  class="form-control" placeholder="Dar el costo de los honorarios que tiene" required>
    </div>
<input value="Calcular" type="submit" />
<button class="btn btn-primary" type="button" disabled>
  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  Calculando...
</button>


</div>
</form>

<?php
if(isset($_GET['entrada'])&& isset($_GET['costo'])){
$entrada=$_GET['entrada'];
$costo=$_GET['costo'];
echo "<h4>Cantidad de lineas de codigo</h4>";
$valor = 100;
$FD = $entrada;
$L=$valor*$FD;
$ML=$L/1000;
echo "<h5>Cantidad de lineas de codigo :.".$L."</h5>";
echo "<h5>trabajando con  :.".$ML." miles de lineas de codigo</h5>";
echo "<h4>ESTIMACION DE ESFUERZO</h4>";
$ex=1.05;
$po = pow($ML,$ex);
$E=3.2*$po;
echo "<h5>Estimacion de esfuerzo es  :.".$E."redondeo ".round($E)."Personas/mes</h5>";
echo "<h4>ESTIMACION DE TIEMPO DE DESARROLLO</h4>";
$ex1=0.38;
$po1=pow($E,$ex1);
$TD = 2.5*$po1;
echo "<h5>Estimacion del tiempo de desarrollo del sistema :.".$TD." redondeo :. ".round($TD)." Meses</h5>";
echo "<h4>ESTIMACION DE PERSONAL NECESARIO</h4>";
$PN = $E/$TD;
echo "<h5>El personal necesario es :.".$L." redondeo:. ".round($PN)." Personas</h5>";
echo "<h4>ESTIMACION DE PRODUCTIVIDAD</h4>";
$P = $L/$E;
echo "<h5>Estimacion de productividad :.".$P." Instrucciones/Personas mes</h5>";
echo "<h4>ESTIMACION DE COSTO</h4>";
$C = $E*$costo;
echo "<h5>Estimacion del costo :.".$C." Mensuales en Bs.</h5>";
}
  ?>

<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
