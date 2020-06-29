<?php
function pasangan_terbesar($angka){
    $max = 0;
    $str_angka = (string)$angka;
    for($i=0;$i<strlen($str_angka)-1;$i++){
        $pasangan = (int)($str_angka[$i].$str_angka[$i+1]);
        if($pasangan>$max){
            $max = $pasangan;
        }
    }
    echo $max;
    echo "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>