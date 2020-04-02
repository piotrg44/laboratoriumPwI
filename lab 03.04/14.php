<?php
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];

    $wynik = $number1 + $number2;
    $napis = "$number1 + $number2 = ";	
    echo($napis. $wynik);

    echo("<br>");

    $wynik = $number1 - $number2;
    $napis = "$number1 - $number2 = ";	
    echo($napis. $wynik);

     echo("<br>");

    $wynik = $number1 * $number2;
    $napis = "$number1 * $number2 = ";	
    echo($napis. $wynik);

    echo("<br>");

    if ($number2 == 0) {
    	echo("Nie dziel przez 0!!!");
    }else{
    	    $wynik = $number1 / $number2;
    $napis = "$number1 / $number2 = ";	
    echo($napis. $wynik);
    }



?>