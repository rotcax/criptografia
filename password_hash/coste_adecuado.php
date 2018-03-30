<style type="text/css">
	*{margin:4px}
	body{
		margin:50px 5%;
		background:#DDD;
		font-family: arial;
	}
	.main{
		display: table;
		margin: auto;
	}
	input{
		width:auto;
	}
	h1{
		text-align: center;
	}
</style>

<a href="test.html"><-volver</a>
<br>

<?php
	
	$timeTarget = 0.05; //50 milisegundos
	$coste = 8;

	do{

		$coste++;

		$inicio = microtime(true);

		password_hash("test", PASSWORD_BCRYPT, ["cost" => $coste]);

		$fin = microtime(true);

	}while(($fin-$inicio) < $timeTarget);

	echo "Coste apropiado encontrado: $coste";
?>

<!--Este código evaluará el servidor para determinar el coste permitido. Se establecerá el mayor coste posible sin disminuir demasiando la velocidad del servidor. 8-10 es una buena referencia, y más es bueno si los servidores son suficientemente rápidos. El código que sigue tiene como objetivo un tramo de ≤ 50 milisegundos, que es una buena referencia para sistemas con registros interactivos.-->