<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <form action="index.php" method="post">
        <label for="hauteur">hauteur</label>
        <input type="text" name="hauteur" id="hauteur">
        <label for="nombre">largeur</label>
        <input type="text" name="largeur" id="largeur">
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
if (isset($_POST['hauteur']) && isset($_POST['largeur'])) {
    if ($_POST['hauteur'] == 5 && $_POST['largeur'] == 10) {
        echo("       /\       ");
        echo("      /  \      ");
        echo("     /    \     ");
        echo("    /______\    ");
        echo("   |        |   ");
        echo("   |  ____  |   ");
        echo("   | |    | |   ");
        echo("   | |____| |   ");
        echo("   |________|   ");
    }
}
?>