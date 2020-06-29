<?php

function papan_catur($angka) {
for($i=0;$i<$angka;$i++){
    if($i%2==0){
        echo str_repeat("# ",$angka);
    } else {
        echo "&nbsp;";
        echo str_repeat("# ",$angka-1);
    }
    echo "<br>";
}
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */
echo "<br>";
echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/
echo "<br>";
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
echo "<br>";