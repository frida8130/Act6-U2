<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 3 de Frida Sanchez</h3>
				<article class="articulos">	
					<figure>
						<img src="img/Ejem3.PNG" alt="">
					</figure>
					<h4>P3 Resultado del codigo</h4>
					<?php
						include "p6_sanchez_43_php /eje3.php" ;
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p>
					Devuelve parte de un string definido por los parámetros  $cadena.
					El parámetro  $cadena indica la posición del carácter desde la cual 
					se comenzará la extracción, por ejemplo en 'Aprendiendo a Programar en PHP',
			         el carácter en 1 es A, en 1 es P, etc.Si  $cadena es negativo se comienza desde 
					 el final del string.
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>