<?php

    $test ="I'm a variable";
    $test2 = " Me too!";
    $number = 75;
    // $2test = 21; dá erro
    $name="Lari";
    $a="name";

    echo $$a; //aqui aparece o nome Lari
    echo $a; //aqui aparece só a palavra name

    echo "My name is $name";
    echo "My name is ".$name;


    echo $number/3;

    echo $test.$test2;

 ?>
