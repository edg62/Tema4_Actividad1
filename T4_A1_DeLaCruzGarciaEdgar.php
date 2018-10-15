<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Actividad 1</title>
	</head>

	<body>
		<?php 
			function promedioGeneral($v){
				$prom = 0;
				$num = 0;
				foreach ($v as $key => $value) {
					for ($i=0; $i < sizeof($value); $i++) { 
						$prom = $prom + $value[$i];
						$num ++;
					}
				}

				$prom = $prom / $num;
				echo "El promedio general es de: " . $prom . "<br>";
			}

			function promedioAlumno($v){
				foreach ($v as $key => $value) {
					$prom = 0;
					$num = 0;
					for ($i=0; $i < sizeof($value); $i++) { 
						$prom = $prom + $value[$i];
						$num ++;
					}
					$prom = $prom / $num;
					echo $key."==>".$prom."<br>";
				}
			}

			function promedioMateria($v){
				$num = $m1 = $m2 = $m3 = $m4 = $m5 = $m6 = 0;

				foreach ($v as $key => $value) {
					for ($i=0; $i < sizeof($value); $i++) { 
						if ($i == 0) {
							$m1 = $m1 + $value[$i];
						}if ($i == 1) {
							$m2 = $m2 + $value[$i];
						}if ($i == 2) {
							$m3 = $m3 + $value[$i];
						}if ($i == 3) {
							$m4 = $m4 + $value[$i];
						}if ($i == 4) {
							$m5 = $m5 + $value[$i];
						}if ($i == 5) {
							$m6 = $m6 + $value[$i];
						}

						$num ++;
					}
				}
				echo"<br>Promedio materia 1: ".$m1 / $num;
				echo"<br>Promedio materia 2: ".$m2 / $num;
				echo"<br>Promedio materia 3: ".$m3 / $num;
				echo"<br>Promedio materia 4: ".$m4 / $num;
				echo"<br>Promedio materia 5: ".$m5 / $num;
				echo"<br>Promedio materia 6: ".$m6 / $num;
			}

			function mejorPromedioAlumno($v){
				$clave="";
				$valor=0;

				foreach ($v as $key => $value) {
					$prom = 0;
					$num = 0;
					for ($i=0; $i < sizeof($value); $i++) { 
						$prom = $prom + $value[$i];
						$num ++;
					}
					$prom = $prom / $num;

					if ($prom > $valor) {
						$valor = $prom;
						$clave = $key;
					}
				}

				echo "El mejor promendio es: ".$key."==>".$prom."<br>";
			}

			function promedioEnsima($v){
				$prom = 0;
				$num = 0;
				foreach ($v as $key => $value) {
					for ($i=0; $i < sizeof($value); $i++) { 
						$prom = $prom + $value[$i];
						$num ++;
					}
				}
				$prom = $prom / $num;

				echo "Los Alumnos que estan por encima de la media son:" . "<br><br>";
				foreach ($v as $key => $value) {
					$prom2 = 0;
					$num2 = 0;
					for ($i=0; $i < sizeof($value); $i++) { 
						$prom2 = $prom2 + $value[$i];
						$num2 ++;
					}
					$prom2 = $prom2 / $num2;

					if ($prom2 > $prom) {
						echo $key." Esta por encima de la media general con: ".$prom2."<br>";
					}
					
				}
			}
		 ?>

		 <?php 
		 	$alumnos = array('Luis Gerardo' => $Calificaciones = array(100,100,100,100,100,100),
							 'Deisy' => $Calificaciones=array(71,72,73,85,93,100),
							 'Lucero' => $Calificaciones=array(97,100,75,73,84,87),
							 'Juan' => $Calificaciones=array(82,76,71,96,71,87),
							 'Vivi' => $Calificaciones=array(85,80,90,82,78,96),
							 'Jessy' => $Calificaciones=array(85,80,90,78,85,96),
							 'Lore' => $Calificaciones=array(85,80,90,72,76,84),
							 'Luis' => $Calificaciones=array(85,80,90,100,78,62),
							 'Marichelo' => $Calificaciones=array(85,80,90,74,93,85),
							 'Pris' => $Calificaciones=array(85,80,90,74,85,96));

		 	promedioGeneral($alumnos);
		 	echo"<hr>";
		 	echo"Promedio de cada alumno <br><br>";
		 	promedioAlumno($alumnos);
		 	echo"<hr>";
		 	echo"Promedio por materia <br>";
		 	promedioMateria($alumnos);
		 	echo"<hr>";
		 	mejorPromedioAlumno($alumnos);
		 	echo"<hr>";
		 	promedioEnsima($alumnos);
		  ?>
	</body>
</html>