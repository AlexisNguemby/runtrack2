<?php
$integer =  50;
$float =   1.14;
$string = "Hello, World!";
$boolean = true;
?>

<html>
<head>
    <title>php</title>
    <meta charset utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">

</head>
<body>
<header>
<table>
<tr>
    <th>type</th>
    <th>nom</th>
    <th>valeur</th>

</tr>

<tr>
    <td>integer</td>
    <td>integer</td>
    <td><?php echo $integer; ?></td>
    </tr>
    
    <tr>
    <td>float</td>
    <td>float</td>
    <td><?php echo $float; ?></td>
    </tr>
    
    <tr>
    <td>string</td>
    <td>string</td>
    <td><?php echo $string; ?></td>
    </tr>

    <tr>
    <td>boolean</td>
    <td>boolean</td>
    <td>true</td>
    </tr>

</table>
</header>




</body>

</html>

