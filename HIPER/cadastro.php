<?php
    // Obtendo n�mero de visitas
    $txt = "contador.txt";
    $arquivo = fopen($txt,"r");
    $visitas   = fgets($arquivo,1024);
    fclose($arquivo);

    // Atualizando n�mero de visitas
    $arquivo = fopen($txt,"r+");
    $visitas = $visitas + 1;
    fwrite($arquivo,$visitas);
    fclose($arquivo);

 
header("Location: index2.html");
   
?>

