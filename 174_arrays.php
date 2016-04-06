<?php

    $myArray = array("pizza", "chocolate", "coffee" );

    //echo $myArray mostraria só a palavra array
    print_r($myArray); //mostra as keys e os values

    echo"<br/><br/>";

    echo $myArray[2]; //acessa só o coffee

    echo"<br/><br/>";

    echo "I'm still going!";


    echo"<br/><br/>";

    $anotherArray[0]="pizza";
    $anotherArray[1]="yogurt";

    print_r($anotherArray);

    echo"<br/><br/>";

    $thirdArray = array (

        "France" => "French", //the key and the value
        "USA" => "English",
        "Brazil" => "Portuguese"
    );

    print_r($thirdArray); //a key nao é mais um numero

    echo"<br/><br/>";

    $anotherArray[]="salad";

    print_r($anotherArray); // colocou no final da lista

    echo"<br/><br/>";

    unset($thirdArray["USA"]); //tirei do array

    print_r($thirdArray);

    echo"<br/><br/>";

    $name="Outro nome";

    unset($name);

    echo $name;
 ?>
