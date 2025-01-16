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
    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>password</th>
        </tr>
        <tr>
            <td><?php echo $_POST['name'] ?></td>
            <td><?php echo $_POST['email'] ?></td>
            <td><?php echo $_POST['password'] ?></td>
        </tr>
    </table>
</body>
</html>


<?php


 ?>