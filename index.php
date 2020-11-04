<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ConstruWeb</title>
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
			<h3>Mis tres Ejercicios de PHP</h3><br>
			<article class="serv1">
				<h4>¿Que es is_bool():? </h4>
				<p><br>
				Es un dato booleano el cual nos ayuda a detectar si es un
				valor verdadero o falso el is_bool nos ayduda a saber si es un tipo de 
				dato logioco.<br>
				•is_bool(): el valor es de tipo lógico (true o false).<br>
				•is_bool — Comprueba si una variable es de tipo booleano.
				</p><br>
				<h4>Conclusiones </h4> <br>
				<p>
			     Al entender este tipo de datos nos ayuda a  poder direfentes actividades ya
				 que al momento  de utilizar este tipo de dato nos ayuda a crear direntes acciones
				 las cuales son verdaderas o falsas y asi podemos crear diferentes cosas.
				</p>
				<figure>
				<img src="img/Booleans.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>¿Cómo ordenar un array en PHP?</h4>
				<p>
				Para ordenar un array disponemos de la función de PHP sort():
                 sort() ordena el array en orden ascendente, es decir, de menor a mayor ordenándolo por su valor. 
                  Vamos a ver los parámetros: array (obligatorio): Es el array que queremos ordenar.ordenarpor (opcional): 
				  Es el método de ordenación, dependiendo de los valores que haya en el array.
				</p><br>
				<h4>Conclusiones </h4>
				<p>
				Como conclusion yo pienso que nos ayuda mucho cuando queremos acomodar algo de forma
			    de menor a mayor,nos ayuda ya sea en numeros,palabras o algun conjunto de cosas,nos ayuda a
				 que se acomoden de una mejor forma.
				</p>
				<figure>
				<img src="img/array.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>¿Como se Extraer parte de una cadena?</h4> <br>
				<p>
				Para extraer parte de una cadena en PHP usaremos la función de PHP substr(),
				 indicando como primer parámetro la cadena de texto en la que
				  se realizará la búsqueda, y como segundo y tercer parámetros las 
				  posiciones inicial y final de la subcadena a extraer.
				</p><br>
				<h4>Conclusiones </h4>
				<p>
				Yo pienso que cuando usamos esta accion es para sietos casos,de mi punto de vista casi no
				se usa ya que a veces es poco cuando la utilizamos,pero asi mismo es divertido utilizar la,
				ya que podemos sustraer letras y es algo entretenido.
				</p>
				<figure>
				<img src="img/cadena.jpg" alt="">.
				</figure>
			</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>