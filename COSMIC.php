
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
  <a href="COSMIC.php" class="btn btn-primary active" aria-current="page">Cosmic</a>
  <a href="LDC.php" class="btn btn-primary">LDC</a>
  <a href="PUNTO_FUSION.php" class="btn btn-primary">Punto Fusion</a>
</div>
<center><h1>COSMIC</h1></center>
<p>es un modelo matemático de base empírica utilizado para estimación de costos de software.</p>
<form method="GET" action="COSMIC.php">
 <div>
<center>
<table class="table table-dark table-striped" >

    
    <thead>
        <tr>

            <th colspan="2"><center>INGRESO DE DATOS</center></th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>COSTO</td>
            <td><center><input type="number" name="costo" class="form-control" placeholder="Dar Honorarios" required></center></td>
            
        </tr>       
    </tbody>
      <tbody>
        <tr>
            <td>PF</td>
            <td><center><input  type="number" name="pf" class="form-control" placeholder="Nº de FUNCION" required></center></td>
            
        </tr>       
    </tbody>
      <tbody>
        <tr>
            <td>MLDC</td>
            <td><center><input  type="number" name="mldc" class="form-control" placeholder="Dar Valor en LDC" required></td>
            
        </tr>       
    </tbody>
</table>
</center>
</div>
 <?php 
        if(isset($_GET['costo'])
        && isset($_GET['pf'])
        && isset($_GET['mldc']))
        {
            $costo=$_GET['costo'];
            $pf=$_GET['pf'];
            $mldc=$_GET['mldc']/1000;
            $CPF=$costo/$pf;
            $CPS=$mldc*$CPF;
            $DP=$mldc/$pf;
            $costo_software=$CPS;
            $costo_en_dolar=$CPS*6.96;

        }
    ?>

 <div>
<center>
<table class="table table-dark table-striped" >
    <thead>
        <tr>
            <th ><center>RESULTADOS DE PUNTO DE FUNCION COSMIC</center></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> COSTO POR PUNTO DE FUNCION    CPF = COSTO/PF   </td>
        </tr>       
    </tbody>
      <tbody>
        <tr>
        <td>
         <?php if(isset($costo)){ echo "Costo por Punto de funcion  :. ".$CPF;} ?> 
        </td>
        </tr>       
    </tbody>
    <tbody>
        <tr>
            <td> COSTO DEL PROYECTO DEL SOFTWARE    CPS = LDC * CPF   </td>
        </tr>       
    </tbody>
      <tbody>
        <tr>
        <td>
         <?php if(isset($CPS)){ echo "Costo del proyecto del software :. ".$CPS;} ?> 
        </td>
        </tr>       
    </tbody>
    <tbody>
        <tr>
            <td> DURACION DEL PROYECTO    DP = MLCD/PF   </td>
        </tr>       
    </tbody>
      <tbody>
        <tr>
        <td>
         <?php if(isset($DP)){ echo "Duracion del proyecto :. ".$DP;} ?> 
        </td>
        </tr>       
    </tbody>
    <tbody>
        <tr>
            <td> COSTO DEL SOFTWARE   </td>
        </tr>       
    </tbody>
      <tbody>
        <tr>
        <td>
         <?php if(isset($costo_software)){ echo "costo de todo el software :. ".$costo_software;} ?> 
        </td>
        </tr>       
    </tbody>
    <tbody>
        <tr>
            <td> COSTO DEL SOFTWARE EN DOLARES   </td>
        </tr>       
    </tbody>
      <tbody>
        <tr>
        <td>
         <?php if(isset($costo_en_dolar)){ echo "costo de todo el software en dolares valuado en 6.96 :. ".$costo_en_dolar;} ?> 
        </td>
        </tr>       
    </tbody>
   </div>
<input value="Calcular" type="submit" />
<button class="btn btn-primary" type="button" disabled>
  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  Calculando...
</button>
</form>

<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</body>
</html>
