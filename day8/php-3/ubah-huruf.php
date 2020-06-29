<?php
function ubah_huruf($string){
    $result ='';
    for($i=0;$i<strlen($string);$i++){
        $ch = $string[$i];
        $next_ch = ++$ch; 
        if (strlen($next_ch) > 1) { //bablas Z balik A
            $next_ch = $next_ch[0];
        }
        $result .= $next_ch;
    }
    echo $result;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu
echo "<br>";
?>