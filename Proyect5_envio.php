<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section >
		<form method="post" action="Proyect5.php">
			<label>	Obtener area del terreno</label>
			<br>
			<p>Ingrese Base de la figuta</p>
			<input type="text" name="Base"><br>
			<p>Ingrese Altura del lado C</p>
			<input type="text" name="Altura">
			<input type="submit" value="Generar area de la figura">

			
		</form>

		<?php
		echo "El area de la figura es ".$total." metros cuadrados"

		?>


	</section>

</body>
</html>