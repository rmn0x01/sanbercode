<?php
function skor_terbesar($arr){
  $max_laravel = 0;
  $max_reactjs = 0;
  $max_reactnative = 0;
  $laravel = [];
  $reactjs = [];
  $reactnative = [];
  foreach($arr as $data){
    if (($data['kelas']=='laravel') && ($data['nilai']>$max_laravel)){
      $max_laravel = $data['nilai'];
      $laravel = $data;
    }
    if (($data['kelas']=='React JS') && ($data['nilai']>$max_reactjs)){
      $max_reactjs = $data['nilai'];
      $reactjs = $data;
    }
    if (($data['kelas']=='React Native') && ($data['nilai']>$max_reactnative)){
      $max_reactnative = $data['nilai'];
      $reactnative = $data;
    }
  }
  $result = array(
    "Laravel" => $laravel,
    "React Native" => $reactnative,
    "React JS" => $reactjs,
  );
  print_r($result);
}

// TEST CASES
// dari panitia tidak disediakan test case variabel skor, jadi dibuat sendiri
$skor = array(
  array(
    "nama" => "Aghnat",
    "kelas" => "laravel",
    "nilai" => 90,
  ),
  array(
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85,
  ),
  array(
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86,
  ),
  array(
    "nama" => "Abc",
    "kelas" => "laravel",
    "nilai" => 88,
  ),
  array(
    "nama" => "B",
    "kelas" => "React JS",
    "nilai" => 86,
  ),
);

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>