<?php
    require_once('Duplas.php');
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];

    $duplas = new Duplas($numero1, $numero2);
    $iguales = $duplas->sonIguales();
    $multiplo = $duplas->esMultiplo();
    $pares = $duplas ->sonPares();
   

 echo $iguales;
 echo $multiplo;
 echo $pares;

    
?>