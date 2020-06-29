<?php
function tentukan_deret_aritmatika($arr) {
    $aritmatika = true;
    $index = 0;
    while($aritmatika && $index<(count($arr)-2)){
        if (($arr[$index+1] - $arr[$index]) != ($arr[$index+2]-$arr[$index+1])){
            $aritmatika = false;
        }
        $index++;
    }
    if($aritmatika){
        echo "true";
    } else {
        echo "false";
    }
    
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo "<br>";
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo "<br>";
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo "<br>";
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo "<br>";
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
echo "<br>";
?>