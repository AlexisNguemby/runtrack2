<?php
$voy = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
$str = "I'm sorry Dave I'm afraid I can't do that";
for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], $voy)) {
        echo $str[$i];
    }
}
?>