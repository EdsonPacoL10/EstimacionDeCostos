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
  <a href="LDC.php" class="btn btn-primary">LDC</a>
  <a href="PUNTO_FUSION.php" class="btn btn-primary active" aria-current="page">Punto Fusion</a>
</div>
<center><h1>PUNTO DE FUSION</h1></center>

<p>La técnica de medición del tamaño en punto-función consiste en asignar una cantidad de "puntos" a una aplicación informática según la complejidad de los datos que maneja y de los procesos que realiza sobre ellos. Siempre tratando de considerarlo desde el punto de vista del usuario</p>
<form method="GET" action="PUNTO_FUSION.php">

<center><h2>CUESTIONARIO PUNTO FUSION</h2></center>
<table class="table table-dark table-striped">
	<thead>
		<tr>
			<th>PREGUNTA</th>
			<th>RESPUESTA</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1. ¿El sistema requiere respaldo y recuperación confiables?</td>
			<td><input min="0" max="5" type="number" name="r1" class="form-control" placeholder="Resp."required></td>
		</tr>
		<tr>
			<td>2. ¿Se requieren comunicaciones de datos especializadas para transferir información hacia o desde la aplicación? </td>
			<td><input min="0" max="5"  type="number" name="r2" class="form-control" placeholder="Resp."required></td>
		</tr>
		<tr>
			<td>3. ¿Existen funciones de procesamiento distribuidas? </td>
			<td><input min="0" max="5"  type="number" name="r3" class="form-control" placeholder="Resp."required></td>
		</tr>
		<tr>
			<td>4. ¿El desempeño es crucial? </td>
			<td><input min="0" max="5"  type="number" name="r4" class="form-control" placeholder="Resp."required></td>
		</tr>
		<tr>
			<td>5. ¿El sistema correrá en un entorno operativo existente enormemente utilizado? </td>
			<td><input min="0" max="5"  type="number" name="r5" class="form-control" placeholder="Resp."required></td>
		</tr>
		<tr>
			<td>6. ¿El sistema requiere entrada de datos en línea? </td>
			<td><input min="0" max="5"  type="number" name="r6" class="form-control" placeholder="Resp."required></td>
		</tr>
		<tr>
			<td>7. ¿La entrada de datos en línea requiere que la transacción de entrada se construya sobre múltiples pantallas u operaciones? </td>
			<td><input min="0" max="5"  type="number" name="r7" class="form-control" placeholder="Resp."required></td>
		</tr>
		<tr>
			<td>8. ¿Los ALI se actualizan en línea? </td>
			<td><input min="0" max="5"  type="number" name="r8" class="form-control" placeholder="Resp."required></td>
		</tr>
		<tr>
			<td>9. ¿Las entradas, salidas, archivos o consultas son complejos? </td>
			<td><input min="0" max="5"  type="number" name="r9" class="form-control" placeholder="Resp."required></td>
		</tr>
		<tr>
			<td>10. ¿El procesamiento interno es complejo?  </td>
			<td><input  min="0" max="5"  type="number" name="r10" class="form-control" placeholder="Resp."required></td>
		</tr>
		<tr>
			<td>11. ¿El código se diseña para ser reutilizable?  </td>
			<td><input min="0" max="5"  type="number" name="r11" class="form-control" placeholder="Resp."required></td>
		</tr>
		<tr>
		<td>12. ¿La conversión y la instalación se incluyen en el diseño?  </td>
			<td><input min="0" max="5"  type="number" name="r12" class="form-control" placeholder="Resp."required></td>
		</tr>
		<tr>
			<td>13. ¿El sistema se diseña para instalaciones múltiples en diferentes organizaciones?   </td>
			<td><input min="0" max="5"  type="number" name="r13" class="form-control" placeholder="Resp."required></td>
		</tr>
		<tr>
			<td>14. ¿La aplicación se diseña para facilitar el cambio y su uso por parte del usuario?  </td>
			<td><input min="0" max="5"  type="number" name="r14" class="form-control" placeholder="Resp."required></td>
		</tr>

	</tbody>
</table>
<center><h2>PROCESO DE CALIFICACION</h2></center>
<center>
<table class="table table-dark table-striped">

	<thead>
		<tr>
			<th>SIN INFLUENCIA</th>
			<th>INCIDENCIA</th>
			<th>MODERADO</th>
			<th>MEDIO</th>
			<th>SIGNIFICATIVO</th>
			<th>ESENCIAL</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><center>0</center></td>
			<td><center>1</center></td>
			<td><center>2</center></td>
			<td><center>3</center></td>
			<td><center>4</center></td>
			<td><center>5</center></td>
			
		</tr>
		
	</tbody>
</table>
</center>

<center><h2>FACTOR DE PONDERACION</h2></center>
<table class="table table-dark table-striped">

	
	<thead>
		<tr>

			<th ><center>VALOR DOMINIO DE INFORMACION</center></th>
			<th ><center>CONTEO</center> </th>
			<th ><center> SIMPLE </center></th>
			<th ><center> PROMEDIO </center></th>
			<th ><center> COMPLEJO </center></th>
			<th ><center> TOTAL </center></th>
			
		</tr>
	</thead>
	
	<tbody>
		<tr>
			<td>Entradas externas (EE)</td>
			<td><input min="0" max="500" type="number" name="entrada" class="form-control" placeholder="Resp."required></td>
			<td><center>4</center></td>
			<td><center>4</center></td>
			<td><center>6</center></td>
			<td><input min="0" max="5000" type="number" name="t1" class="form-control" placeholder="Resp."required></td>
			
		</tr>
		<tr>
			<td>Salidas externas (SE)</td>
			<td><input min="0" max="500" type="number" name="entrada" class="form-control" placeholder="Resp."required></td>
			<td><center>4</center></td>
			<td><center>4</center></td>
			<td><center>6</center></td>
			<td><input min="0" max="5000" type="number" name="t2" class="form-control" placeholder="Resp."required></td>
			
		</tr>
		<tr>
			<td>Consultas externas (CE)</td>
			<td><input min="0" max="500" type="number" name="entrada" class="form-control" placeholder="Resp."required></td>
			<td><center>4</center></td>
			<td><center>4</center></td>
			<td><center>6</center></td>
			<td><input min="0" max="5000" type="number" name="t3" class="form-control" placeholder="Resp."required></td>
			
		</tr>
		<tr>
			<td>Archivos logicos internos (ALI)</td>
			<td><input min="0" max="500" type="number" name="entrada" class="form-control" placeholder="Resp."required></td>
			<td><center>4</center></td>
			<td><center>4</center></td>
			<td><center>6</center></td>
			<td><input min="0" max="5000" type="number" name="t4" class="form-control" placeholder="Resp."required></td>
			
		</tr>
		<tr>
			<td>Archivos de interfaz externos (AIE)</td>
			<td><input min="0" max="500" type="number" name="entrada" class="form-control" placeholder="Resp."required></td>
			<td><center>4</center></td>
			<td><center>4</center></td>
			<td><center>6</center></td>
			<td><input min="0" max="5000" type="number" name="t5" class="form-control" placeholder="Resp."required></td>
			
		</tr>
		
	</tbody>
</table>
<input value="Calcular" type="submit" />
<button class="btn btn-primary" type="button" disabled>
  <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
  Calculando...
</button>
</div>
</form>
<?php
if(isset($_GET['r1'])
&& isset($_GET['r2'])
&& isset($_GET['r3'])
&& isset($_GET['r4'])
&& isset($_GET['r5'])
&& isset($_GET['r6'])
&& isset($_GET['r7'])
&& isset($_GET['r8'])
&& isset($_GET['r9'])
&& isset($_GET['r10'])
&& isset($_GET['r11'])
&& isset($_GET['r12'])
&& isset($_GET['r13'])
&& isset($_GET['r14'])
&& isset($_GET['t1'])
&& isset($_GET['t2'])
&& isset($_GET['t3'])
&& isset($_GET['t4'])
&& isset($_GET['t5'])
){
$r1=$_GET['r1'];
$r2=$_GET['r2'];
$r3=$_GET['r3'];
$r4=$_GET['r4'];
$r5=$_GET['r5'];
$r6=$_GET['r6'];
$r7=$_GET['r7'];
$r8=$_GET['r8'];
$r9=$_GET['r9'];
$r10=$_GET['r10'];
$r11=$_GET['r11'];
$r12=$_GET['r12'];
$r13=$_GET['r13'];
$r14=$_GET['r14'];
$t1=$_GET['t1'];
$t2=$_GET['t2'];
$t3=$_GET['t3'];
$t4=$_GET['t4'];
$t5=$_GET['t5'];

$sr=$r1+$r2+$r3+$r4+$r5+$r6+$r7+$r8+$r9+$r10+$r11+$r12+$r13+$r14;
$st=$t1+$t2+$t3+$t4+$t5;
echo "<h4>SUMA DEL VALOR DE LAS RESPUESTAS</h4>";
echo "<h5>FACTOR DE AJUSTE:. ".$sr." (FA)</h5>";
echo "<h4>SUMA DEL FACTOR DE PODERACION</h4>";
echo "<h5>Punto de fucion no ajustado:. ".$st." (PFNA)</h5>";
echo "<h4>AJUSTANDO PUNTO DE FUCION</h4>";
echo "<p>PFA = PFNA * (0.65+0.1* FA)</p>";
$pfa=$st*(0.65+0.01*$sr);
echo "<h5>FACTOR DE AJUSTE:.".$pfa." redondeando :. ".round($pfa)." </h5>";
echo "<h4>PERSONAS/HORAS</h4>";
$HP=1/8;
echo "<h5>calculando 1 persona sobre 8 horas de trabajo es:. ".$HP."</h5>";
echo "<h4>CALCULO DE ESFUERZO HORAS/PERSONAS</h4>";
$ES=$pfa/$HP;
echo "<h5>".$ES." Horas / Personas</h5>";
echo "<h4></h4>";

}  ?>

<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
