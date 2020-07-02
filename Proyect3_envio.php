<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section >
		<form method="post" action="Proyect3.php">
			<label>Captura el radio y la altura del triangulo</label>
			<br>
			<p>Ingrese aqui el radio del circulo</p>
			<input type="text" name="Radio"><br>
			<p>Ingrese aqui el la altura del triangulo</p>
			<input type="text" name="Altura">
			<input type="submit" value="Generar area de la figura">

			
		</form>

		<?php
		echo "El area de la figura es ".$total." metros cuadrados"

		?>


	</section>

</body>
</html>