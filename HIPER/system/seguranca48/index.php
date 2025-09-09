<?php

function Aleatorio() {
$semente = 'qwertyuiopasdfghjklzxcvbnm123456789QWERTYUIOPASDFGHJKLZXCVBNM';
$codigo = '';
for ($i = 1;$i<=100;$i++) {
$codigo = $codigo.$semente[rand(0,60)];
}
return $codigo;
}

header("location: ../../zn/index.php?=".Aleatorio());

session_start(); 
$arquivo = "../../../porcontador.txt"; 
$valor = 1;               // Valor agregado por visita 
$timer = time()+3600;      // Dura??o do cookie para n?o contar o mesmo ip (3600s = 1h) 
$id = fopen($arquivo, "r+"); 
$conteudo = fread($id,filesize($arquivo)); 
fclose($id); 
    if($_COOKIE['NotCont']=='') { 
        $conteudo += $valor;
        $id = fopen($arquivo, "r+"); 
        fwrite($id, $conteudo, strlen($conteudo)); 
        fclose($id); 
        SetCookie("NotCont",$_SERVER['REMOTE_ADDR'],$timer); 
    } else { 
        SetCookie("NotCont",$_SERVER['REMOTE_ADDR'],$timer); 
    } 
exit(); 

?>
