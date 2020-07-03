<?php
    $peso=$_POST["peso"];
    $altura=$_POST["altura"];
    $IMC=$peso/($altura*$altura);
    if ($IMC <= 18.4) {
      echo("<br>");
      echo("Su indice de masa corporal es ".$IMC);
      echo("<br>");
      echo("Tienes insuficiencia de peso");
    } else if ($IMC >= 18.5 && $IMC <= 24.9 ) {
        echo("<br>");
        echo("Su indice de masa corporal es ".$IMC);
        echo("<br>");
        echo("Tienes peso normal");
    } else if ($IMC >= 25 && $IMC <= 29.9 ) {
        echo("<br>");
        echo("Su indice de masa corporal es ".$IMC);
        echo("<br>");
        echo("Tienes Sobrepeso");
    } else if ($IMC >= 30 && $IMC <= 34.9 ) {
        echo("<br>");
        echo("Su indice de masa corporal es ".$IMC);
        echo("<br>");
        echo("Tienes obesidad tipo 1");
    } else if ($IMC >= 35 && $IMC <= 39.9 ) {
        echo("<br>");
        echo("Su indice de masa corporal es ".$IMC);
        echo("<br>");
        echo("Tienes obesidad tipo 2");
    } else {
        echo("<br>");
        echo("Su indice de masa corporal es ".$IMC);
        echo("<br>");
        echo("Tienes obesidad tipo3");
    }
?>