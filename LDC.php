
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
  <a href="COCOMO_I.php" class="btn btn-primary ">Cocomo I</a>
  <a href="COSMIC.php" class="btn btn-primary">Cosmic</a>
  <a href="LDC.php" class="btn btn-primary active" aria-current="page">LDC</a>
  <a href="PUNTO_FUSION.php" class="btn btn-primary">Punto Fusion</a>
</div>
<center><h1>LDC</h1></center>
<p>Este es un tipo de metrica orientado al tamaño, siendo una medida directa del software</p>
<form method="GET" action="LDC.php">
 <div>
    <p>el valor de LDC (lineas de codigo lo puede sacar usando un herrmienta como ser punto de fusion)</p>
 <div class="mb-3">
      <label for="titulo" name="titulo" class="form-label">DAR VALOR LDC</label>
      <input type="number" name="LDC" class="form-control" placeholder="VALOR DE LDC" required>
    </div>

<center>
    <h2>TABLA DE VALORES DE LA METRICA LCD</h2>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th ><center>Proyecto</center></th>
            <th ><center>LDC</center></th>
            <th ><center>Esfuerzo</center></th>
            <th ><center>Bs.(Miles)</center></th>
            <th ><center>Paginas De Documento</center></th>
            <th ><center>Errores</center></th>
            <th ><center>Defecto</center></th>
        <th ><center>Personas</center></th>

    </thead>
    <tbody>
        <tr>
                <td ><center>Alfa</center></td>
                <td ><center>12.100</center></td>
                <td ><center>24</center></td>
                <td ><center>168</center></td>
                <td ><center>365</center></td>
                <td ><center>134</center></td>
                <td ><center>29</center></td>
                <td ><center>3</center></td>
        </tr>
         <tr>
                <td ><center>Beta</center></td>
                <td ><center>27.200</center></td>
                <td ><center>62</center></td>
                <td ><center>440</center></td>
                <td ><center>1.224</center></td>
                <td ><center>321</center></td>
                <td ><center>86</center></td>
                <td ><center>5</center></td>
        </tr>
       
        <tr>
                <td ><center>Gama</center></td>
                <td ><center>20.200</center></td>
                <td ><center>43</center></td>
                <td ><center>314</center></td>
                <td ><center>1.050</center></td>
                <td ><center>256</center></td>
                <td ><center>64</center></td>
                <td ><center>6</center></td>
        </tr>
       </tbody>
      </table>

</center>
<br>

<div class="mb-3">
      <label for="titulo" name ="titulo"class="form-label">COSTO HONORARIO</label>
      <input type="number" name="costo"  class="form-control" placeholder="Dar honorarios" required>
    </div>
</div>

<div class="mb-3">
      <label for="titulo" name ="titulo"class="form-label">NUMERO DE PAGINAS DE DOCUMENTACION</label>
      <input type="number" name="PAG"  class="form-control" placeholder="Nº PAGINAS" required>
    </div>
</div>
<input value="Calcular" type="submit" />
<button class="btn btn-primary" type="button" disabled>
  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  Calculando...
</button>
</form>

<?php
if(isset($_GET['LDC'])&& isset($_GET['costo'])&& isset($_GET['PAG'])){
$LDC=$_GET['LDC'];
$costo=$_GET['costo'];
$PAG=$_GET['PAG'];
$PRO=$LDC/24;
$ERROR=134/$LDC;
$DEFECTO=29/$LDC;
$COSTO_LDC=$costo/$LDC;
$PAGMIL=$PAG/1000;
$DOCUMENTO=365/$PAGMIL;

}
  ?>

<center>
<table class="table table-dark table-striped" >
    <thead>
        <tr>
            <th colspan="3"><center>RESULTADOS DE PUNTO DE FUNCION COSMIC</center></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> LDC (lineas de codigo)   </td>
            <td>
            <?php if (isset($_GET['LDC'])) {echo $LDC;} ?>
            </td>
            <td> Dato ingresado  </td>
        </tr>       
    </tbody>
     <tbody>
        <tr>
            <td> PRODUCTIVIDAD ==>  LDC/ESFUERZO   </td>
            <td>
            <?php if (isset($PRO)) {  echo $PRO; }?>
            </td>
            <td> LDC (linas de codigo) por persona mes   </td>
        </tr>       
    </tbody>
    <tbody>
        <tr>
            <td> CALIDAD ==> N° ERRORES/LDC  </td>
            <td>
            <?php if (isset($ERROR)) {echo $ERROR;} ?>
            </td>
            <td> Calidad de errores   </td>
        </tr>       
    </tbody>
    <tbody>
        <tr>
            <td> CALIDAD ==> N° DEFECTOS/LDC  </td>
            <td>
            <?php if (isset($DEFECTO)) {echo $DEFECTO; }?>
            </td>
            <td> Calidad de defecto   </td>
        </tr>       
    </tbody>
    
    <tbody>
        <tr>
            <td> COSTO LDC ==> COSTO/LDC  </td>
            <td>
            <?php if (isset($COSTO_LDC)) {echo $COSTO_LDC;} ?>
            </td>
            <td>  Bolivianos la linea de codigo  </td>
        </tr>       
    </tbody>
    
    <tbody>
        <tr>
            <td> DOCUMENTACION ==> PAGINAS/ML  </td>
            <td>
            <?php  if (isset($DOCUMENTO)) { echo $DOCUMENTO;} ?>
            </td>
            <td>  <?phpif (isset($DOCUMENTO)) { echo round($DOCUMENTO);} ?> Paginas Documentadas  </td>
        </tr>       
    </tbody>
    

      
</table>

</center>
</div>

</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
