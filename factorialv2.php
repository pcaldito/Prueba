<html>
<head>
    <meta name="author" content="Pablo">
    <meta charset="utf-8">
    <?php 
        $factoriales = [];
        for ($i = 1; $i <= 5; $i++) {
            $fact = 1; 
            for ($j = 1; $j <= $i; $j++) {
                $fact *= $j; 
            }
            $factoriales[$i] = $fact; 
        }
    ?>
</head>
<body>
    <h1>Factorial</h1>
    <p>El factorial del 1 al 5 es:</p>
    <table border="1">
        <thead>
			<th colspan=2>TABLA DE FACTORIALES DEL 1 AL 10</th>
            <tr>
                <th>Número</th>
                <th>Factorial</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($factoriales as $number => $factorial) {
                    echo "<tr><td>$number</td><td>$factorial</td></tr>";
                }
            ?>
			<td colspan=2><b>Nombre del alumno</b>: Pablo Caldito Gomez</td>
        </tbody>
    </table>
</body>
</html>
