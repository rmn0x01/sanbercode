<?php
    require('animal.php');
    require('frog.php');
    require('ape.php');

    echo 'SOAL 1<br>';
    $sheep = new Animal("shaun");
    echo "Name: ".$sheep->get_name();
    echo '<br>';
    echo "Legs count: ".$sheep->get_legs();
    echo '<br>';
    echo "Cold blooded? ".$sheep->get_blood();
    echo '<br><br>';
    
    echo 'SOAL 2<br>';
    $sungokong = new Ape("kera sakti");
    $sungokong->yell(); // "Auooo"
    echo '<br>';
    echo "Name: ".$sungokong->get_name();
    echo '<br>';
    echo "Legs count: ".$sungokong->get_legs();
    echo '<br>';
    echo "Cold blooded? ".$sungokong->get_blood();
    echo '<br><br>';


    $kodok = new Frog("buduk");
    $kodok->jump() ; // "hop hop"
    echo '<br>';
    echo "Name: ".$kodok->get_name();
    echo '<br>';
    echo "Legs count: ".$kodok->get_legs();
    echo '<br>';
    echo "Cold blooded? ".$kodok->get_blood();
    echo '<br><br>';
?>