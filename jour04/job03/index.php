<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <form action="index.php" method="post">
        <label for="name">name</label>
        <input type="text" name="name" id="name">
        <label for="email">email</label>
        <input type="email" name="email" id="email">
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="submit">
    </form>
    
</body>
</html>


<?php

 echo $_POST["name"];
 echo $_POST["email"];
 echo $_POST["password"];
?>