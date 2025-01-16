<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <form action="index.php" method="get">
        <label for="nombre">donne moi nombre !!</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
        if (isset($_GET['nombre'])) {
            if ($_GET['nombre'] % 2 == 0) {
                echo 'Le nombre est pair';
            } 
            else {
                echo 'Le nombre est impair';
            }
        }
    ?>