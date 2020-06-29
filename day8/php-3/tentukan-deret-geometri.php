<?php
function tentukan_deret_geometri($arr) {
    $geometri = true;
    $index = 0;
    while($geometri && $index<(count($arr)-2)){
        if (($arr[$index+1]/$arr[$index]) != ($arr[$index+2]/$arr[$index+1])){
            $geometri = false;
        }
        $index++;
    }
    if($geometri){
        echo "true";
    } else {
        echo "false";
    }
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo "<br>";
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo "<br>";
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo "<br>";
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo "<br>";
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
echo "<br>";
?>