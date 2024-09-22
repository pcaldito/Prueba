<html>
	<head>
		<meta name="author" content="Pablo">
		<meta charset="utf-8">
		<?php 
			$num = 3; 
			$cont = 1; 
			while ($num > 0) {
				$cont *= $num; 
				$num--; 
			}
		?>
	</head>
	<body>
		<h1>Factorial</h1>
		<p>El factorial de 3 es: <?php echo $cont; ?></p>
	</body>
</html>
