<?php
$voyelles = ["a", "e", "i", "o", "u", "y"];
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait.";
$dic = [
    "consonnes" => 0,
    "voyelles" => 0
];
for ($i = 0; $i < strlen($str); $i++) {
    if(in_array($str[$i], $voyelles)) {
        $dic["voyelles"]++;
        var_dump($dic);
    } else {
        $dic["consonnes"]++;
        var_dump($dic);

    }
}

?>