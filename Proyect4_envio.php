<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section >
		<form method="post" action="Proyect4.php">
		    <select name="categoria">
				<p>Selecciona su categoria</p>
				<option value="1">Categoria 1</option>
				<option value="2">Categoria 2</option>
				<option value="3">Categoria 3</option>
				<option value="4">Categoria 4</option>
			</select><br>
			<p>Ingrese su sueldo</p>
				<input type="text" name="sueldo">
				<input type="submit" name="salario">
		</form>

		<?php
           echo "El sueldo total es" .$total . " pesos"
		?>

		


	</section>

</body>
</html>