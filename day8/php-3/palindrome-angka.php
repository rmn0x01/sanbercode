<?php

function palindrome_angka($angka) {
  $palindrome = false;
  while($palindrome == false){
    //increment angka
    $angka++;
    //typecast ke string
    $str_angka = (string)$angka;
    if(strlen($str_angka)==1){ //single digit checker
      $palindrome = true;
    } else if ($str_angka == strrev($str_angka)){ //palindrome checker
      $palindrome = true;
    }
  } 
  echo $str_angka; 
}

// TEST CASES
echo palindrome_angka(8); // 9
echo "<br>";
echo palindrome_angka(10); // 11
echo "<br>";
echo palindrome_angka(117); // 121
echo "<br>";
echo palindrome_angka(175); // 181
echo "<br>";
echo palindrome_angka(1000); // 1001

?>