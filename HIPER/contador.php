<html>
<head>
<title>Painel Admin Tela priv8 - Atualizado por By_Dr.tech</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body,td,th {
	color: #FF0000;
	font-family: Verdana;
	font-size: 12px;
}
body {
	background-color: #CCCCCC;
}
.style1 {
	font-size: 15px;
	font-weight: bold;
}
.style2 {
	font-size: 12px;
	color: #FF0000;
}
.style3 {
	font-size: 15px;
	color: #000000;
}
.style4 {color: #000000}
.style5 {font-size: 15px; font-weight: bold; color: #000000; }
.style8 {font-size: 24px; font-weight: bold; }
.style9 {color: #CCCCCC}
.style11 {color: #FF0000}
.style12 {color: #FFFFFF}
.style15 {color: #FFFFFF; font-size: 20px; }
-->
</style><body link="#FF0000" vlink="#FF0000" alink="#FF0000">
<center>
  <table width="476" border="0">
    <tr>
      <td width="470" bgcolor="#000000"><div align="center"><span class="style15"> CONTADOR PRIV8 - :<span class="style11">By_Dr.tech</span></span> </div></td>
    </tr>
  </table>
  <p><span class="style5">CONTADOR DE INFECTS OU CLIQUES<br>
    </span><span class="style3">(dependendo do que voc&ecirc; trampa)</span><span class="style1">    <br>  
    <span class="style2">==========================================================</span><br>
    </span><br>
    <span class="style4">VOC&Ecirc; POSSUI<span class="style9">-</span> </span>
    </h1>
    <span class="style8">
    <?php
 $caminho = "contador.txt";//nome do arquivo que vai guardar  os visitantes
  $arquivo = fopen($caminho, "r");//abre o arquivo
  $total = fgets($arquivo,1024); //pega o numero de visitas
  fclose($arquivo);//fecha o arquivo
  $x = $total;
  echo "" . $x;//mostra na tela o numero de visitantes
?>
    </span>                        <span class="style4">INFECTS OU CLIQUES.</span> <br>
    <br>
    <br>
    <br>
  <span class="style4"><strong>obs:</strong> A P&Aacute;GINA FICA ATUALIZANDO AUTOMATICAMENTE EM 60 SEGUNDOS. </span></p>
  <table width="568" border="0">
    <tr>
      <td bgcolor="#000000"><div align="center"><span class="style12">CONTADOR v2.0 - DESENVOLDI POR<span class="style11">By_Dr.tech</span></span></div></td>
    </tr>
  </table>
  <p><br>
  </p>
  <meta http-equiv='Refresh' content='60'; URL='contador.php'>
</center>
</body>
</head>
</html>
