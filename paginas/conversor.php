<?

include_once('includes/conversor.php');

?>

<table><tr><td style="height:5"></td></tr></table>

<table border="0" cellpadding="0" cellspacing="0" width="570">
  <tr>
   <td><img src="imagens/meio/spacer.gif" width="570" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td><img name="tabela4_r1_c1" src="imagens/meio/tabela4_r1_c1.jpg" width="570" height="77" border="0" id="tabela4_r1_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="77" border="0" alt="" /></td>
  </tr>
  <tr>
   <td background="imagens/meio/tabela4_r2_c1.jpg">

   <table><tr><td style="height:10"></td></tr></table>
   <table><tr><td style="width:120" bgcolor="#F5F5F5">
   
   <table>

   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=area">�rea</a></td>
   </tr>
   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=comprimento">Comprimento</a></td>
   </tr>
   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=densidade">Densidade</a></td>
   </tr>
   
   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=energia">Energia</a></td>
   </tr>
   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=forca">For�a</a></td>
   </tr>

   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=massa">Massa</a></td>
   </tr>
   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=potencia">Pot�ncia</a></td>
   </tr>
   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=pressao">Press�o</a></td>
   </tr>
   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=temperatura">Temperatura</a></td>
   </tr>
   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=torque">Torque</a></td>
   </tr>
   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=fluido">Vaz�o</a></td>
   </tr>
   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=velocidade">Velocidade</a></td>
   </tr>
   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=volume">Volume</a></td>
   </tr>
   
   </table>

   </td>

   <td style="width:448">
   
   <? if ($_GET['tipo']=='') { ?>
   
   <table border="0" width="100%">
   <tr>
   <td><img src="imagens/seta_azul.gif" border="0"></td>
   <td aling="center"><a class="con">Escolha uma Grandeza</a></td>
   </tr>
   </table>
   
   <? } ?>
   
   
   
   
<? if ($_GET['tipo']=='massa') { ?>

<center>
<table style="90%">
<form action="?pag=conversor&tipo=massa" method="post">
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Massa:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">
<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="carat (metric)">carat (metric)</option>
<option value="Earth mass">Earth mass</option>
<option value="gr�o">gr�o</option>
<option value="grama [g]">grama [g]</option>
<option value="hudredweight (long)">hudredweight (long)</option>
<option value="hudredweight (short)">hudredweight (short)</option>
<option value="quilograma [kg]">quilograma [kg]</option>
<option value="on�a (avoirdupois)">on�a (avoirdupois)</option>
<option value="on�a (troy)">on�a (troy)</option>
<option value="libra (avoirdupois)">libra (avoirdupois)</option>
<option value="libra (troy)">libra (troy)</option>
<option value="Solar mass">Solar mass</option>
<option value="slug (g-pound)">slug (g-pound)</option>
<option value="stone">stone</option>
<option value="ton (UK or long)">ton (UK or long)</option>
<option value="ton (US or short)">ton (US or short)</option>
<option value="tonelada">tonelada</option>
</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="carat (metric)">carat (metric)</option>
<option value="Earth mass">Earth mass</option>
<option value="gr�o">gr�o</option>
<option value="grama [g]">grama [g]</option>
<option value="hudredweight (long)">hudredweight (long)</option>
<option value="hudredweight (short)">hudredweight (short)</option>
<option value="quilograma [kg]">quilograma [kg]</option>
<option value="on�a (avoirdupois)">on�a (avoirdupois)</option>
<option value="on�a (troy)">on�a (troy)</option>
<option value="libra (avoirdupois)">libra (avoirdupois)</option>
<option value="libra (troy)">libra (troy)</option>
<option value="Solar mass">Solar mass</option>
<option value="slug (g-pound)">slug (g-pound)</option>
<option value="stone">stone</option>
<option value="ton (UK or long)">ton (UK or long)</option>
<option value="ton (US or short)">ton (US or short)</option>
<option value="tonelada">tonelada</option>
</select>
</td></tr>

<tr><td colspan="2" bgcolor="#F9F9F9" style="height:30" align="center">
<input type="submit" value="Converter">
</td></tr>

<tr><td colspan="2" bgcolor="#F5F5F5" style="height:30" align="center">

<?
$valorconv  = ToSI_Mass($_POST['valor'], $_POST['unidade']);
$valorconv2 = FromSI_Mass($valorconv, $_POST['unidade2']);

if ($_POST['valor'] == '') {  ?>
<a class="con2">Digite um valor!</a>  <?
} else {
?>
<a class="con2"><?=$_POST['valor']?> </a><a class="con"><?=$_POST['unidade']?></a>
<a class="con3"> = </a>
<a class="con2"><?=$valorconv2?> </a><a class="con"><?=$_POST['unidade2']?></a>
<? } ?>


</td></tr>
</form>
</table>

<?

}

?>




<? if ($_GET['tipo']=='area') { ?>

<center>
<table style="90%">
<form action="?pag=conversor&tipo=area" method="post">
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de �rea:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">
<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="acre">acre</option>
<option value="are">are</option>
<option value="circular inch">circular inch</option>
<option value="hectare">hectare</option>
<option value="hide">hide</option>
<option value="rood">rood</option>
<option value="cent�metro quadrado">cent�metro quadrado</option>
<option value="p� quadrado">p� quadrado</option>
<option value="p� quadrado (US survey)">p� quadrado (US survey)</option>
<option value="polegada quadrada">polegada quadrada</option>
<option value="quil�metro quadrado">quil�metro quadrado</option>
<option value="metro quadrado">metro quadrado</option>
<option value="milha quadrada">milha quadrada</option>
<option value="mil�metro quadrado">mil�metro quadrado</option>
<option value="square (of timber)">square (of timber)</option>
<option value="square rods (or poles)">square rods (or poles)</option>
<option value="jarda quadrada">jarda quadrada</option>
<option value="township">township</option>
</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="acre">acre</option>
<option value="are">are</option>
<option value="circular inch">circular inch</option>
<option value="hectare">hectare</option>
<option value="hide">hide</option>
<option value="rood">rood</option>
<option value="cent�metro quadrado">cent�metro quadrado</option>
<option value="p� quadrado">p� quadrado</option>
<option value="p� quadrado (US survey)">p� quadrado (US survey)</option>
<option value="polegada quadrada">polegada quadrada</option>
<option value="quil�metro quadrado">quil�metro quadrado</option>
<option value="metro quadrado">metro quadrado</option>
<option value="milha quadrada">milha quadrada</option>
<option value="mil�metro quadrado">mil�metro quadrado</option>
<option value="square (of timber)">square (of timber)</option>
<option value="square rods (or poles)">square rods (or poles)</option>
<option value="jarda quadrada">jarda quadrada</option>
<option value="township">township</option>
</select>
</td></tr>

<tr><td colspan="2" bgcolor="#F9F9F9" style="height:30" align="center">
<input type="submit" value="Converter">
</td></tr>

<tr><td colspan="2" bgcolor="#F5F5F5" style="height:30" align="center">

<?

$valorconv  = ToSI_Area($_POST['valor'], $_POST['unidade']);
$valorconv2 = FromSI_Area($valorconv, $_POST['unidade2']);



if ($_POST['valor'] == '') {  ?>
<a class="con2">Digite um valor!</a>  <?
} else {
?>
<a class="con2"><?=$_POST['valor']?> </a><a class="con"><?=$_POST['unidade']?></a>
<a class="con3"> = </a>
<a class="con2"><?=$valorconv2?> </a><a class="con"><?=$_POST['unidade2']?></a>
<? } ?>

</td></tr>
</form>
</table>

<?

}

?>



<? if ($_GET['tipo']=='fluido') { ?>

<center>
<table style="90%">
<form action="?pag=conversor&tipo=fluido" method="post">
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Vaz�o:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">
<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="p� acre/dia">p� acre/dia</option>
<option value="p� acre/hora">p� acre/hora</option>
<option value="p� acre/minuto">p� acre/minuto</option>
<option value="p� acre/segundo">p� acre/segundo</option>
<option value="p� acre/dia [exame]">p� acre/dia [exame]</option>
<option value="p� acre/hora [exame]">p� acre/hora [exame]</option>
<option value="p� acre/minuto [exame]">p� acre/minuto [exame]</option>
<option value="p� acre/segundo">p� acre/segundo</option>
<option value="polegada acre/dia">polegada acre/dia</option>
<option value="polegada acre/hora">polegada acre/hora</option>
<option value="polegada acre/hora">polegada acre/hora </option>
<option value="polegada acre/segundo">polegada acre/segundo</option>
<option value="polegada acre/dia [exame]">polegada acre/dia [exame]</option>
<option value="polegada acre/hora [exame]">polegada acre/hora [exame]</option>
<option value="polegada acre/minuto [exame]">polegada acre/minuto [exame]</option>
<option value="polegada acre/segundo [exame]">polegada acre/segundo [exame]</option>
<option value="barril/dia [petr�leo]">barril/dia [petr�leo]</option>
<option value="barril/hora [petr�leo]">barril/hora [petr�leo]</option>
<option value="barril/minuto [petr�leo]">barril/minuto [petr�leo]</option>
<option value="barril/segundo [petr�leo]">barril/segundo [petr�leo]</option>
<option value="barril/dia [UK]">barril/dia [UK]</option>
<option value="barrle/hora [UK]">barrle/hora [UK]</option>
<option value="barril/minuto [UK]">barril/minuto [UK]</option>
<option value="barril/segundo [UK]">barril/segundo [UK]</option>
<option value="barril/dia [US]">barril/dia [US]</option>
<option value="barril/hora [US]">barril/hora [US]</option>
<option value="barril/minuto [US]">barril/minuto [US]</option>
<option value="barril/segundo [US]">barril/segundo [US]</option>
<option value="barril/dia [US beer/wine]">barril/dia [US beer/wine]</option>
<option value="barril/hora [US beer/wine]">barril/hora [US beer/wine]</option>
<option value="barril/minuto [US beer/wine]">barril/minuto [US beer/wine]</option>
<option value="barril/segundo [US beer/wine]">barril/segundo [US beer/wine]</option>
<option value="bilh�o p� c�bico /dia">bilh�o p� c�bico /dia</option>
<option value="bilh�o p� c�bico /hora">bilh�o p� c�bico /hora</option>
<option value="bilh�o p� c�bico /minuto">bilh�o p� c�bico /minuto</option>
<option value="bilh�o p� c�bico /segundo">bilh�o p� c�bico /segundo</option>
<option value="centilitro/dia">centilitro/dia</option>
<option value="centilitro/hora">centilitro/hora</option>
<option value="centilitro/minuto">centilitro/minuto</option>
<option value="centilitro/segundo">centilitro/segundo</option>
<option value="cubem/dia">cubem/dia</option>
<option value="cubem/hora">cubem/hora</option>
<option value="cubem/minuto">cubem/minuto</option>
<option value="cubem/segundo">cubem/segundo</option>
<option value="centimetro c�bico/dia">centimetro c�bico/dia</option>
<option value="centimetro c�bico/hora">centimetro c�bico/hora</option>
<option value="centimetro c�bico/minuto">centimetro c�bico/minuto</option>
<option value="centimetro c�bico/segundo">centimetro c�bico/segundo</option>
<option value="dec�metro c�bico/dia">dec�metro c�bico/dia</option>
<option value="dec�metro c�bico/hora">dec�metro c�bico/hora</option>
<option value="dec�metro c�bico/minuto">dec�metro c�bico/minuto</option>
<option value="dec�metro c�bico/segundo">dec�metro c�bico/segundo</option>
<option value="decametro c�bico/dia">decametro c�bico/dia</option>
<option value="decametro c�bico/hora">decametro c�bico/hora</option>
<option value="decametro c�bico/minuto">decametro c�bico/minuto</option>
<option value="decametro c�bico/segundo">decametro c�bico/segundo</option>
<option value="p� c�bico/dia">p� c�bico/dia</option>
<option value="p� c�bico/hora">p� c�bico/hora</option>
<option value="p� c�bico/minuto">p� c�bico/minuto</option>
<option value="p� c�bico/segundo">p� c�bico/segundo</option>
<option value="polegada c�bica/dia">polegada c�bica/dia</option>
<option value="polegada c�bica/hora">polegada c�bica/hora</option>
<option value="polegada c�bica/minuto">polegada c�bica/minuto</option>
<option value="polegada c�bica/segundo">polegada c�bica/segundo</option>
<option value="quilometro c�bico/dia">quilometro c�bico/dia</option>
<option value="quilometro c�bico/hora">quilometro c�bico/hora</option>
<option value="quilometro c�bico/minuto">quilometro c�bico/minuto</option>
<option value="quilometro c�bico/segundo">quilometro c�bico/segundo</option>
<option value="metro c�bico/dia">metro c�bico/dia</option>
<option value="metro c�bico/hora">metro c�bico/hora</option>
<option value="metro c�bico/minuto">metro c�bico/minuto</option>
<option value="metro c�bico/segundo">metro c�bico/segundo</option>
<option value="milha c�bica/dia">milha c�bica/dia</option>
<option value="milha c�bica/hora">milha c�bica/hora</option>
<option value="milha c�bica/minuto">milha c�bica/minuto</option>
<option value="milha c�bica/segundo">milha c�bica/segundo</option>
<option value="mil�metro c�bico/dia">mil�metro c�bico/dia</option>
<option value="mil�metro c�bico/hora">mil�metro c�bico/hora</option>
<option value="mil�metro c�bico/minuto">mil�metro c�bico/minuto</option>
<option value="mil�metro c�bico/segundo">mil�metro c�bico/segundo</option>
<option value="jarda c�bica/dia">jarda c�bica/dia</option>
<option value="jarda c�bica/hora">jarda c�bica/hora</option>
<option value="jarda c�bica/minuto">jarda c�bica/minuto</option>
<option value="jarda c�bica/segundo">jarda c�bica/segundo</option>
<option value="cusec">cusec</option>
<option value="decilitro/dia">decilitro/dia</option>
<option value="decilitro/hora">decilitro/hora</option>
<option value="decilitro/minuto">decilitro/minuto</option>
<option value="decilitro/segundo">decilitro/segundo</option>
<option value="decalitro/dia">decalitro/dia</option>
<option value="decalitro/hora">decalitro/hora</option>
<option value="decalitro/minuto">decalitro/minuto</option>
<option value="decalitro/segundo">decalitro/segundo</option>
<option value="gal�o/dia [UK]">gal�o/dia [UK]</option>
<option value="gal�o/hora [UK]">gal�o/hora [UK]</option>
<option value="gal�o/minuto [UK]">gal�o/minuto [UK]</option>
<option value="gal�o/segundo [UK]">gal�o/segundo [UK]</option>
<option value="gal�o/dia [US]">gal�o/dia [US]</option>
<option value="gal�o/hora [US]">gal�o/hora [US]</option>
<option value="gal�o/minuto [US]">gal�o/minuto [US]</option>
<option value="gal�o/segundo [US]">gal�o/segundo [US]</option>
<option value="hectare metro/dia">hectare metro/dia</option>
<option value="hectare metro/hora">hectare metro/hora</option>
<option value="hectare metro/minuto">hectare metro/minuto</option>
<option value="hectare metro/segundo">hectare metro/segundo</option>
<option value="hectalitro/dia">hectalitro/dia</option>
<option value="hectalitro/hora">hectalitro/hora</option>
<option value="hectalitro/minuto">hectalitro/minuto</option>
<option value="hectalitro/segundo">hectalitro/segundo</option>
<option value="quilolitro/dia">quilolitro/dia</option>
<option value="quilolitro/hora">quilolitro/hora</option>
<option value="quilolitro/minuto">quilolitro/minuto</option>
<option value="quilolitro/segundo">quilolitro/segundo</option>
<option value="lambda/dia">lambda/dia</option>
<option value="lambda/hora">lambda/hora</option>
<option value="lambda/minuto">lambda/minuto</option>
<option value="lambda/segundo">lambda/segundo</option>
<option value="litro/dia">litro/dia</option>
<option value="litro/hora">litro/hora</option>
<option value="litro/minuto">litro/minuto</option>
<option value="litro/segundo">litro/segundo</option>
<option value="mil�metro/dia">mil�metro/dia</option>
<option value="mil�metro/hora">mil�metro/hora</option>
<option value="mil�metro/minuto">mil�metro/minuto</option>
<option value="mil�metro/segundo">mil�metro/segundo</option>
<option value="milh�o p� acre/dia">milh�o p� acre/dia</option>
<option value="milh�o p� acre/hora">milh�o p� acre/hora</option>
<option value="milh�o p� acre/minuto">milh�o p� acre/minuto</option>
<option value="milh�o p� acre/segundo">milh�o p� acre/segundo</option>
<option value="milh�o p� c�bico/dia">milh�o p� c�bico/dia</option>
<option value="milh�o p� c�bico/hora">milh�o p� c�bico/hora</option>
<option value="milh�o p� c�bico/minuto">milh�o p� c�bico/minuto</option>
<option value="milh�o p� c�bico/segundo">milh�o p� c�bico/segundo</option>
<option value="milh�o gal�o/dia [UK]">milh�o gal�o/dia [UK]</option>
<option value="milh�o gal�o/hora [UK]">milh�o gal�o/hora [UK]</option>
<option value="milh�o gal�o/minuto [UK]">milh�o gal�o/minuto [UK]</option>
<option value="milh�o gal�o/segundo [UK]">milh�o gal�o/segundo [UK]</option>
<option value="milh�o gal�o/dia [US]">milh�o gal�o/dia [US]</option>
<option value="milh�o gal�o/hora [US]">milh�o gal�o/hora [US]</option>
<option value="milh�o gal�o/minuto [US]">milh�o gal�o/minuto [US]</option>
<option value="milh�o gal�o/segundo [US]">milh�o gal�o/segundo [US]</option>
<option value="polegada (mina) [AZ, CA, OR]">polegada (mina) [AZ, CA, OR]</option>
<option value="polegada (mina) [CO]">polegada (mina) [CO]</option>
<option value="polegada (mina) [ID, WA, NM]">polegada (mina) [ID, WA, NM]</option>
<option value="on�a/dia [UK]">on�a/dia [UK]</option>
<option value="on�a/hora [UK]">on�a/hora [UK]</option>
<option value="on�a/minuto [UK]">on�a/minuto [UK]</option>
<option value="on�a/segundo [UK]">on�a/segundo [UK]</option>
<option value="on�a/dia [US]">on�a/dia [US]</option>
<option value="on�a/hora [US]">on�a/hora [US]</option>
<option value="on�a/minuto [US]">on�a/minuto [US]</option>
<option value="on�a/segundo [US]">on�a/segundo [US</option>
<option value="petrograd standard/dia">petrograd standard/dia</option>
<option value="petrograd standard/hora">petrograd standard/hora</option>
<option value="petrograd standard/minuto">petrograd standard/minuto</option>
<option value="petrograd standard/segundo">petrograd standard/segundo</option>
<option value="stere/dia">stere/dia</option>
<option value="stere/hora">stere/hora</option>
<option value="stere/minuto">stere/minuto</option>
<option value="stere/segundo">stere/segundo</option>
<option value="mil p� c�bico/dia">mil p� c�bico/dia</option>
<option value="mil p� c�bico/hora">mil p� c�bico/hora</option>
<option value="mil p� c�bico/minuto">mil p� c�bico/minuto</option>
<option value="mil p� c�bico/segundo">mil p� c�bico/segundo</option>
<option value="trilh�o p� c�bico/dia">trilh�o p� c�bico/dia</option>
<option value="trilh�o p� c�bico/hora">trilh�o p� c�bico/hora</option>
<option value="trilh�o p� c�bico/minuto">trilh�o p� c�bico/minuto</option>
<option value="trilh�o p� c�bico/segundo">trilh�o p� c�bico/segundo</option>
</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="p� acre/dia">p� acre/dia</option>
<option value="p� acre/hora">p� acre/hora</option>
<option value="p� acre/minuto">p� acre/minuto</option>
<option value="p� acre/segundo">p� acre/segundo</option>
<option value="p� acre/dia [exame]">p� acre/dia [exame]</option>
<option value="p� acre/hora [exame]">p� acre/hora [exame]</option>
<option value="p� acre/minuto [exame]">p� acre/minuto [exame]</option>
<option value="p� acre/segundo">p� acre/segundo</option>
<option value="polegada acre/dia">polegada acre/dia</option>
<option value="polegada acre/hora">polegada acre/hora</option>
<option value="polegada acre/hora">polegada acre/hora </option>
<option value="polegada acre/segundo">polegada acre/segundo</option>
<option value="polegada acre/dia [exame]">polegada acre/dia [exame]</option>
<option value="polegada acre/hora [exame]">polegada acre/hora [exame]</option>
<option value="polegada acre/minuto [exame]">polegada acre/minuto [exame]</option>
<option value="polegada acre/segundo [exame]">polegada acre/segundo [exame]</option>
<option value="barril/dia [petr�leo]">barril/dia [petr�leo]</option>
<option value="barril/hora [petr�leo]">barril/hora [petr�leo]</option>
<option value="barril/minuto [petr�leo]">barril/minuto [petr�leo]</option>
<option value="barril/segundo [petr�leo]">barril/segundo [petr�leo]</option>
<option value="barril/dia [UK]">barril/dia [UK]</option>
<option value="barrle/hora [UK]">barrle/hora [UK]</option>
<option value="barril/minuto [UK]">barril/minuto [UK]</option>
<option value="barril/segundo [UK]">barril/segundo [UK]</option>
<option value="barril/dia [US]">barril/dia [US]</option>
<option value="barril/hora [US]">barril/hora [US]</option>
<option value="barril/minuto [US]">barril/minuto [US]</option>
<option value="barril/segundo [US]">barril/segundo [US]</option>
<option value="barril/dia [US beer/wine]">barril/dia [US beer/wine]</option>
<option value="barril/hora [US beer/wine]">barril/hora [US beer/wine]</option>
<option value="barril/minuto [US beer/wine]">barril/minuto [US beer/wine]</option>
<option value="barril/segundo [US beer/wine]">barril/segundo [US beer/wine]</option>
<option value="bilh�o p� c�bico /dia">bilh�o p� c�bico /dia</option>
<option value="bilh�o p� c�bico /hora">bilh�o p� c�bico /hora</option>
<option value="bilh�o p� c�bico /minuto">bilh�o p� c�bico /minuto</option>
<option value="bilh�o p� c�bico /segundo">bilh�o p� c�bico /segundo</option>
<option value="centilitro/dia">centilitro/dia</option>
<option value="centilitro/hora">centilitro/hora</option>
<option value="centilitro/minuto">centilitro/minuto</option>
<option value="centilitro/segundo">centilitro/segundo</option>
<option value="cubem/dia">cubem/dia</option>
<option value="cubem/hora">cubem/hora</option>
<option value="cubem/minuto">cubem/minuto</option>
<option value="cubem/segundo">cubem/segundo</option>
<option value="centimetro c�bico/dia">centimetro c�bico/dia</option>
<option value="centimetro c�bico/hora">centimetro c�bico/hora</option>
<option value="centimetro c�bico/minuto">centimetro c�bico/minuto</option>
<option value="centimetro c�bico/segundo">centimetro c�bico/segundo</option>
<option value="dec�metro c�bico/dia">dec�metro c�bico/dia</option>
<option value="dec�metro c�bico/hora">dec�metro c�bico/hora</option>
<option value="dec�metro c�bico/minuto">dec�metro c�bico/minuto</option>
<option value="dec�metro c�bico/segundo">dec�metro c�bico/segundo</option>
<option value="decametro c�bico/dia">decametro c�bico/dia</option>
<option value="decametro c�bico/hora">decametro c�bico/hora</option>
<option value="decametro c�bico/minuto">decametro c�bico/minuto</option>
<option value="decametro c�bico/segundo">decametro c�bico/segundo</option>
<option value="p� c�bico/dia">p� c�bico/dia</option>
<option value="p� c�bico/hora">p� c�bico/hora</option>
<option value="p� c�bico/minuto">p� c�bico/minuto</option>
<option value="p� c�bico/segundo">p� c�bico/segundo</option>
<option value="polegada c�bica/dia">polegada c�bica/dia</option>
<option value="polegada c�bica/hora">polegada c�bica/hora</option>
<option value="polegada c�bica/minuto">polegada c�bica/minuto</option>
<option value="polegada c�bica/segundo">polegada c�bica/segundo</option>
<option value="quilometro c�bico/dia">quilometro c�bico/dia</option>
<option value="quilometro c�bico/hora">quilometro c�bico/hora</option>
<option value="quilometro c�bico/minuto">quilometro c�bico/minuto</option>
<option value="quilometro c�bico/segundo">quilometro c�bico/segundo</option>
<option value="metro c�bico/dia">metro c�bico/dia</option>
<option value="metro c�bico/hora">metro c�bico/hora</option>
<option value="metro c�bico/minuto">metro c�bico/minuto</option>
<option value="metro c�bico/segundo">metro c�bico/segundo</option>
<option value="milha c�bica/dia">milha c�bica/dia</option>
<option value="milha c�bica/hora">milha c�bica/hora</option>
<option value="milha c�bica/minuto">milha c�bica/minuto</option>
<option value="milha c�bica/segundo">milha c�bica/segundo</option>
<option value="mil�metro c�bico/dia">mil�metro c�bico/dia</option>
<option value="mil�metro c�bico/hora">mil�metro c�bico/hora</option>
<option value="mil�metro c�bico/minuto">mil�metro c�bico/minuto</option>
<option value="mil�metro c�bico/segundo">mil�metro c�bico/segundo</option>
<option value="jarda c�bica/dia">jarda c�bica/dia</option>
<option value="jarda c�bica/hora">jarda c�bica/hora</option>
<option value="jarda c�bica/minuto">jarda c�bica/minuto</option>
<option value="jarda c�bica/segundo">jarda c�bica/segundo</option>
<option value="cusec">cusec</option>
<option value="decilitro/dia">decilitro/dia</option>
<option value="decilitro/hora">decilitro/hora</option>
<option value="decilitro/minuto">decilitro/minuto</option>
<option value="decilitro/segundo">decilitro/segundo</option>
<option value="decalitro/dia">decalitro/dia</option>
<option value="decalitro/hora">decalitro/hora</option>
<option value="decalitro/minuto">decalitro/minuto</option>
<option value="decalitro/segundo">decalitro/segundo</option>
<option value="gal�o/dia [UK]">gal�o/dia [UK]</option>
<option value="gal�o/hora [UK]">gal�o/hora [UK]</option>
<option value="gal�o/minuto [UK]">gal�o/minuto [UK]</option>
<option value="gal�o/segundo [UK]">gal�o/segundo [UK]</option>
<option value="gal�o/dia [US]">gal�o/dia [US]</option>
<option value="gal�o/hora [US]">gal�o/hora [US]</option>
<option value="gal�o/minuto [US]">gal�o/minuto [US]</option>
<option value="gal�o/segundo [US]">gal�o/segundo [US]</option>
<option value="hectare metro/dia">hectare metro/dia</option>
<option value="hectare metro/hora">hectare metro/hora</option>
<option value="hectare metro/minuto">hectare metro/minuto</option>
<option value="hectare metro/segundo">hectare metro/segundo</option>
<option value="hectalitro/dia">hectalitro/dia</option>
<option value="hectalitro/hora">hectalitro/hora</option>
<option value="hectalitro/minuto">hectalitro/minuto</option>
<option value="hectalitro/segundo">hectalitro/segundo</option>
<option value="quilolitro/dia">quilolitro/dia</option>
<option value="quilolitro/hora">quilolitro/hora</option>
<option value="quilolitro/minuto">quilolitro/minuto</option>
<option value="quilolitro/segundo">quilolitro/segundo</option>
<option value="lambda/dia">lambda/dia</option>
<option value="lambda/hora">lambda/hora</option>
<option value="lambda/minuto">lambda/minuto</option>
<option value="lambda/segundo">lambda/segundo</option>
<option value="litro/dia">litro/dia</option>
<option value="litro/hora">litro/hora</option>
<option value="litro/minuto">litro/minuto</option>
<option value="litro/segundo">litro/segundo</option>
<option value="mil�metro/dia">mil�metro/dia</option>
<option value="mil�metro/hora">mil�metro/hora</option>
<option value="mil�metro/minuto">mil�metro/minuto</option>
<option value="mil�metro/segundo">mil�metro/segundo</option>
<option value="milh�o p� acre/dia">milh�o p� acre/dia</option>
<option value="milh�o p� acre/hora">milh�o p� acre/hora</option>
<option value="milh�o p� acre/minuto">milh�o p� acre/minuto</option>
<option value="milh�o p� acre/segundo">milh�o p� acre/segundo</option>
<option value="milh�o p� c�bico/dia">milh�o p� c�bico/dia</option>
<option value="milh�o p� c�bico/hora">milh�o p� c�bico/hora</option>
<option value="milh�o p� c�bico/minuto">milh�o p� c�bico/minuto</option>
<option value="milh�o p� c�bico/segundo">milh�o p� c�bico/segundo</option>
<option value="milh�o gal�o/dia [UK]">milh�o gal�o/dia [UK]</option>
<option value="milh�o gal�o/hora [UK]">milh�o gal�o/hora [UK]</option>
<option value="milh�o gal�o/minuto [UK]">milh�o gal�o/minuto [UK]</option>
<option value="milh�o gal�o/segundo [UK]">milh�o gal�o/segundo [UK]</option>
<option value="milh�o gal�o/dia [US]">milh�o gal�o/dia [US]</option>
<option value="milh�o gal�o/hora [US]">milh�o gal�o/hora [US]</option>
<option value="milh�o gal�o/minuto [US]">milh�o gal�o/minuto [US]</option>
<option value="milh�o gal�o/segundo [US]">milh�o gal�o/segundo [US]</option>
<option value="polegada (mina) [AZ, CA, OR]">polegada (mina) [AZ, CA, OR]</option>
<option value="polegada (mina) [CO]">polegada (mina) [CO]</option>
<option value="polegada (mina) [ID, WA, NM]">polegada (mina) [ID, WA, NM]</option>
<option value="on�a/dia [UK]">on�a/dia [UK]</option>
<option value="on�a/hora [UK]">on�a/hora [UK]</option>
<option value="on�a/minuto [UK]">on�a/minuto [UK]</option>
<option value="on�a/segundo [UK]">on�a/segundo [UK]</option>
<option value="on�a/dia [US]">on�a/dia [US]</option>
<option value="on�a/hora [US]">on�a/hora [US]</option>
<option value="on�a/minuto [US]">on�a/minuto [US]</option>
<option value="on�a/segundo [US]">on�a/segundo [US</option>
<option value="petrograd standard/dia">petrograd standard/dia</option>
<option value="petrograd standard/hora">petrograd standard/hora</option>
<option value="petrograd standard/minuto">petrograd standard/minuto</option>
<option value="petrograd standard/segundo">petrograd standard/segundo</option>
<option value="stere/dia">stere/dia</option>
<option value="stere/hora">stere/hora</option>
<option value="stere/minuto">stere/minuto</option>
<option value="stere/segundo">stere/segundo</option>
<option value="mil p� c�bico/dia">mil p� c�bico/dia</option>
<option value="mil p� c�bico/hora">mil p� c�bico/hora</option>
<option value="mil p� c�bico/minuto">mil p� c�bico/minuto</option>
<option value="mil p� c�bico/segundo">mil p� c�bico/segundo</option>
<option value="trilh�o p� c�bico/dia">trilh�o p� c�bico/dia</option>
<option value="trilh�o p� c�bico/hora">trilh�o p� c�bico/hora</option>
<option value="trilh�o p� c�bico/minuto">trilh�o p� c�bico/minuto</option>
<option value="trilh�o p� c�bico/segundo">trilh�o p� c�bico/segundo</option>
</select>
</td></tr>

<tr><td colspan="2" bgcolor="#F9F9F9" style="height:30" align="center">
<input type="submit" value="Converter">
</td></tr>

<tr><td colspan="2" bgcolor="#F5F5F5" style="height:30" align="center">

<?

$valorconv  = ToSI_Flu($_POST['valor'], $_POST['unidade']);
$valorconv2 = FromSI_Flu($valorconv, $_POST['unidade2']);



if ($_POST['valor'] == '') {  ?>
<a class="con2">Digite um valor!</a>  <?
} else {
?>
<a class="con2"><?=$_POST['valor']?> </a><a class="con"><?=$_POST['unidade']?></a>
<a class="con3"> = </a>
<a class="con2"><?=$valorconv2?> </a><a class="con"><?=$_POST['unidade2']?></a>
<? } ?>

</td></tr>
</form>
</table>

<?

}

?>





<? if ($_GET['tipo']=='comprimento') { ?>

<center>
<table style="90%">
<form action="?pag=conversor&tipo=comprimento" method="post">
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Comprimento:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">
<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="�ngstr�m [�]">�ngstr�m [�]</option>
<option value="astronomical unit [AU]">astronomical unit [AU]</option>
<option value="barleycorn">barleycorn</option>
<option value="cable">cable</option>
<option value="cent�metro [cm]">cent�metro [cm]</option>
<option value="chain (surveyors')">chain (surveyors')</option>
<option value="dec�metro [dm]">dec�metro [dm]</option>
<option value="ells (UK)">ells (UK)</option>
<option value="ems (pica)">ems (pica)</option>
<option value="bra�a">bra�a</option>
<option value="p� (UK e US)">p� (UK e US)</option>
<option value="p� (US survey)">p� (US survey)</option>
<option value="furlong">furlong</option>
<option value="hand">hand</option>
<option value="hect�metro [hm]">hect�metro [hm]</option>
<option value="polegada">polegada</option>
<option value="quil�metro [km]">quil�metro [km]</option>
<option value="anos luz">anos luz</option>
<option value="metro [m]">metro [m]</option>
<option value="micrometro">micrometro</option>
<option value="milha (UK e US)">milha (UK e US)</option>
<option value="milha (nautical)">milha (nautical)</option>
<option value="mil�metro [mm]">mil�metro [mm]</option>
<option value="nan�metro">nan�metro</option>
<option value="parsec">parsec</option>
<option value="picometro">picometro</option>
<option value="jarda">jarda</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="�ngstr�m [�]">�ngstr�m [�]</option>
<option value="astronomical unit [AU]">astronomical unit [AU]</option>
<option value="barleycorn">barleycorn</option>
<option value="cable">cable</option>
<option value="cent�metro [cm]">cent�metro [cm]</option>
<option value="dec�metro [dm]">dec�metro [dm]</option>
<option value="ells (UK)">ells (UK)</option>
<option value="ems (pica)">ems (pica)</option>
<option value="bra�a">bra�a</option>
<option value="p� (UK e US)">p� (UK e US)</option>
<option value="p� (US survey)">p� (US survey)</option>
<option value="furlong">furlong</option>
<option value="hand">hand</option>
<option value="hect�metro [hm]">hect�metro [hm]</option>
<option value="polegada">polegada</option>
<option value="quil�metro [km]">quil�metro [km]</option>
<option value="anos luz">anos luz</option>
<option value="metro [m]">metro [m]</option>
<option value="micrometro">micrometro</option>
<option value="milha (UK e US)">milha (UK e US)</option>
<option value="milha (nautical)">milha (nautical)</option>
<option value="mil�metro [mm]">mil�metro [mm]</option>
<option value="nan�metro">nan�metro</option>
<option value="parsec">parsec</option>
<option value="picometro">picometro</option>
<option value="jarda">jarda</option>
</select>
</td></tr>

<tr><td colspan="2" bgcolor="#F9F9F9" style="height:30" align="center">
<input type="submit" value="Converter">
</td></tr>

<tr><td colspan="2" bgcolor="#F5F5F5" style="height:30" align="center">

<?

$valorconv  = ToSI_Dist($_POST['valor'], $_POST['unidade']);
$valorconv2 = FromSI_Dist($valorconv, $_POST['unidade2']);



if ($_POST['valor'] == '') {  ?>
<a class="con2">Digite um valor!</a>  <?
} else {
?>
<a class="con2"><?=$_POST['valor']?> </a><a class="con"><?=$_POST['unidade']?></a>
<a class="con3"> = </a>
<a class="con2"><?=$valorconv2?> </a><a class="con"><?=$_POST['unidade2']?></a>
<? } ?>

</td></tr>
</form>
</table>

<?

}

?>






<? if ($_GET['tipo']=='forca') { ?>

<center>
<table style="90%">
<form action="?pag=conversor&tipo=forca" method="post">
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de For�a:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">

<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="dyne">dyne</option>
<option value="quilograma for�a">quilograma for�a</option>
<option value="quilonewton [kN]">quilonewton [kN]</option>
<option value="kip">kip</option>
<option value="meganewton [MN]">meganewton [MN]</option>
<option value="newton [N]">newton [N]</option>
<option value="libra for�a">libra for�a</option>
<option value="poundal">poundal</option>
<option value="sthene (=kN)">sthene (=kN)</option>
<option value="tonelada for�a">tonelada for�a</option>
<option value="ton force (UK)">ton force (UK)</option>
<option value="ton force (US)">ton force (US)</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="dyne">dyne</option>
<option value="quilograma for�a">quilograma for�a</option>
<option value="quilonewton [kN]">quilonewton [kN]</option>
<option value="kip">kip</option>
<option value="meganewton [MN]">meganewton [MN]</option>
<option value="newton [N]">newton [N]</option>
<option value="libra for�a">libra for�a</option>
<option value="poundal">poundal</option>
<option value="sthene (=kN)">sthene (=kN)</option>
<option value="tonelada for�a">tonelada for�a</option>
<option value="ton force (UK)">ton force (UK)</option>
<option value="ton force (US)">ton force (US)</option>
</select>
</td></tr>

<tr><td colspan="2" bgcolor="#F9F9F9" style="height:30" align="center">
<input type="submit" value="Converter">
</td></tr>

<tr><td colspan="2" bgcolor="#F5F5F5" style="height:30" align="center">

<?

$valorconv  = ToSI_Forca($_POST['valor'], $_POST['unidade']);
$valorconv2 = FromSI_Forca($valorconv, $_POST['unidade2']);



if ($_POST['valor'] == '') {  ?>
<a class="con2">Digite um valor!</a>  <?
} else {
?>
<a class="con2"><?=$_POST['valor']?> </a><a class="con"><?=$_POST['unidade']?></a>
<a class="con3"> = </a>
<a class="con2"><?=$valorconv2?> </a><a class="con"><?=$_POST['unidade2']?></a>
<? } ?>

</td></tr>
</form>
</table>

<?

}

?>








<? if ($_GET['tipo']=='densidade') { ?>

<center>
<table style="90%">
<form action="?pag=conversor&tipo=densidade" method="post">
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Densidade:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">

<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="gr�o/gal�o (UK)">gr�o/gal�o (UK)</option>
<option value="gr�o/gal�o (US)">gr�o/gal�o (US)</option>
<option value="grama/cent�metro c�bico">grama/cent�metro c�bico</option>
<option value="grama/litro">grama/litro</option>
<option value="grama/mililitro">grama/mililitro</option>
<option value="quilograma/metro c�bico">quilograma/metro c�bico</option>
<option value="quilograma/litro">quilograma/litro</option>
<option value="megagrama/metro c�bico">megagrama/metro c�bico</option>
<option value="miligrama/mililitro">miligrama/mililitro</option>
<option value="miligrama/litro">miligrama/litro</option>
<option value="on�a/polegada c�bica">on�a/polegada c�bica</option>
<option value="on�a/gal�o (UK)">on�a/gal�o (UK)</option>
<option value="on�a/gal�o (US)">on�a/gal�o (US)</option>
<option value="libra/polegada c�bica">libra/polegada c�bica</option>
<option value="libra/p� c�bico">libra/p� c�bico</option>
<option value="libra/gal�o (UK)">libra/gal�o (UK)</option>
<option value="libra/gal�o (US)">libra/gal�o (US)</option>
<option value="slug/cubic foot">slug/cubic foot</option>
<option value="tonelada/metro c�bico">tonelada/metro c�bico</option>
<option value="ton (UK)/cubic yard">ton (UK)/cubic yard</option>
<option value="ton (US)/cubic yard">ton (US)/cubic yard</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="gr�o/gal�o (UK)">gr�o/gal�o (UK)</option>
<option value="gr�o/gal�o (US)">gr�o/gal�o (US)</option>
<option value="grama/cent�metro c�bico">grama/cent�metro c�bico</option>
<option value="grama/litro">grama/litro</option>
<option value="grama/mililitro">grama/mililitro</option>
<option value="quilograma/metro c�bico">quilograma/metro c�bico</option>
<option value="quilograma/litro">quilograma/litro</option>
<option value="megagrama/metro c�bico">megagrama/metro c�bico</option>
<option value="miligrama/mililitro">miligrama/mililitro</option>
<option value="miligrama/litro">miligrama/litro</option>
<option value="on�a/polegada c�bica">on�a/polegada c�bica</option>
<option value="on�a/gal�o (UK)">on�a/gal�o (UK)</option>
<option value="on�a/gal�o (US)">on�a/gal�o (US)</option>
<option value="libra/polegada c�bica">libra/polegada c�bica</option>
<option value="libra/p� c�bico">libra/p� c�bico</option>
<option value="libra/gal�o (UK)">libra/gal�o (UK)</option>
<option value="libra/gal�o (US)">libra/gal�o (US)</option>
<option value="slug/cubic foot">slug/cubic foot</option>
<option value="tonelada/metro c�bico">tonelada/metro c�bico</option>
<option value="ton (UK)/cubic yard">ton (UK)/cubic yard</option>
<option value="ton (US)/cubic yard">ton (US)/cubic yard</option>
</select>
</td></tr>

<tr><td colspan="2" bgcolor="#F9F9F9" style="height:30" align="center">
<input type="submit" value="Converter">
</td></tr>

<tr><td colspan="2" bgcolor="#F5F5F5" style="height:30" align="center">

<?

$valorconv  = ToSI_Den($_POST['valor'], $_POST['unidade']);
$valorconv2 = FromSI_Den($valorconv, $_POST['unidade2']);



if ($_POST['valor'] == '') {  ?>
<a class="con2">Digite um valor!</a>  <?
} else {
?>
<a class="con2"><?=$_POST['valor']?> </a><a class="con"><?=$_POST['unidade']?></a>
<a class="con3"> = </a>
<a class="con2"><?=$valorconv2?> </a><a class="con"><?=$_POST['unidade2']?></a>
<? } ?>

</td></tr>
</form>
</table>

<?

}

?>






<? if ($_GET['tipo']=='energia') { ?>

<center>
<table style="90%">
<form action="?pag=conversor&tipo=energia" method="post">
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Energia:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">

<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="Btu (IT)">Btu (IT)</option>
<option value="Btu (th)">Btu (th)</option>
<option value="Btu (mean)">Btu (mean)</option>
<option value="caloria (IT)">caloria (IT)</option>
<option value="caloria (th)">caloria (th)</option>
<option value="caloria (mean)">caloria (mean)</option>
<option value="caloria (15C)">caloria (15C)</option>
<option value="caloria (20C)">caloria (20C)</option>
<option value="caloria (food)">caloria (food)</option>
<option value="centigrade heat unit">centigrade heat unit</option>
<option value="electron volt (eV)">electron volt (eV)</option>
<option value="erg">erg</option>
<option value="foot pound-force">foot pound-force</option>
<option value="foot poundal">foot poundal</option>
<option value="gigajoule [GJ]">gigajoule [GJ]</option>
<option value="horsepower hour">horsepower hour</option>
<option value="joule [J]">joule [J]</option>
<option value="quilocaloria (IT)">quilocaloria (IT)</option>
<option value="quilocaloria (th)">quilocaloria (th)</option>
<option value="quilograma-for�a metro">quilograma-for�a metro</option>
<option value="quilojoule [kJ]">quilojoule [kJ]</option>
<option value="quilowatt hora [kWh]">quilowatt hora [kWh]</option>
<option value="megajoule [MJ]">megajoule [MJ]</option>
<option value="newton metro [Nm]">newton metro [Nm]</option>
<option value="therm">therm</option>
<option value="watt segundo [Ws]">watt segundo [Ws]</option>
<option value="watt hora [Wh]">watt hora [Wh]</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="Btu (IT)">Btu (IT)</option>
<option value="Btu (th)">Btu (th)</option>
<option value="Btu (mean)">Btu (mean)</option>
<option value="caloria (IT)">caloria (IT)</option>
<option value="caloria (th)">caloria (th)</option>
<option value="caloria (mean)">caloria (mean)</option>
<option value="caloria (15C)">caloria (15C)</option>
<option value="caloria (20C)">caloria (20C)</option>
<option value="caloria (food)">caloria (food)</option>
<option value="centigrade heat unit">centigrade heat unit</option>
<option value="electron volt (eV)">electron volt (eV)</option>
<option value="erg">erg</option>
<option value="foot pound-force">foot pound-force</option>
<option value="foot poundal">foot poundal</option>
<option value="gigajoule [GJ]">gigajoule [GJ]</option>
<option value="horsepower hour">horsepower hour</option>
<option value="joule [J]">joule [J]</option>
<option value="quilocaloria (IT)">quilocaloria (IT)</option>
<option value="quilocaloria (th)">quilocaloria (th)</option>
<option value="quilograma-for�a metro">quilograma-for�a metro</option>
<option value="quilojoule [kJ]">quilojoule [kJ]</option>
<option value="quilowatt hora [kWh]">quilowatt hora [kWh]</option>
<option value="megajoule [MJ]">megajoule [MJ]</option>
<option value="newton metro [Nm]">newton metro [Nm]</option>
<option value="therm">therm</option>
<option value="watt segundo [Ws]">watt segundo [Ws]</option>
<option value="watt hora [Wh]">watt hora [Wh]</option>
</select>
</td></tr>

<tr><td colspan="2" bgcolor="#F9F9F9" style="height:30" align="center">
<input type="submit" value="Converter">
</td></tr>

<tr><td colspan="2" bgcolor="#F5F5F5" style="height:30" align="center">

<?

$valorconv  = ToSI_Ene($_POST['valor'], $_POST['unidade']);
$valorconv2 = FromSI_Ene($valorconv, $_POST['unidade2']);



if ($_POST['valor'] == '') {  ?>
<a class="con2">Digite um valor!</a>  <?
} else {
?>
<a class="con2"><?=$_POST['valor']?> </a><a class="con"><?=$_POST['unidade']?></a>
<a class="con3"> = </a>
<a class="con2"><?=$valorconv2?> </a><a class="con"><?=$_POST['unidade2']?></a>
<? } ?>

</td></tr>
</form>
</table>

<?

}

?>




<? if ($_GET['tipo']=='velocidade') { ?>

<center>
<table style="90%">
<form action="?pag=conversor&tipo=velocidade" method="post">
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Velocidade:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">

<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="cent�metro/minuto">cent�metro/minuto</option>
<option value="cent�metro/segundo">cent�metro/segundo</option>
<option value="p�/hora">p�/hora</option>
<option value="p�/minuto">p�/minuto</option>
<option value="p�/segundo">p�/segundo</option>
<option value="polegada/minuto">polegada/minuto</option>
<option value="polegada/segundo">polegada/segundo</option>
<option value="quil�metro/hora">quil�metro/hora</option>
<option value="quil�metro/segundo">quil�metro/segundo</option>
<option value="n�">n�</option>
<option value="Mach number (ISA/SL)">Mach number (ISA/SL)</option>
<option value="metro/hora">metro/hora</option>
<option value="metro/minuto">metro/minuto</option>
<option value="metro/segundo">metro/segundo</option>
<option value="milha/hora">milha/hora</option>
<option value="milha/minuto">milha/minuto</option>
<option value="milha/segundo">milha/segundo</option>
<option value="speed of light">speed of light</option>
<option value="jarda/hora">jarda/hora</option>
<option value="jarda/minuto">jarda/minuto</option>
<option value="jarda/segundo">jarda/segundo</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="cent�metro/minuto">cent�metro/minuto</option>
<option value="cent�metro/segundo">cent�metro/segundo</option>
<option value="p�/hora">p�/hora</option>
<option value="p�/minuto">p�/minuto</option>
<option value="p�/segundo">p�/segundo</option>
<option value="polegada/minuto">polegada/minuto</option>
<option value="polegada/segundo">polegada/segundo</option>
<option value="quil�metro/hora">quil�metro/hora</option>
<option value="quil�metro/segundo">quil�metro/segundo</option>
<option value="n�">n�</option>
<option value="Mach number (ISA/SL)">Mach number (ISA/SL)</option>
<option value="metro/hora">metro/hora</option>
<option value="metro/minuto">metro/minuto</option>
<option value="metro/segundo">metro/segundo</option>
<option value="milha/hora">milha/hora</option>
<option value="milha/minuto">milha/minuto</option>
<option value="milha/segundo">milha/segundo</option>
<option value="speed of light">speed of light</option>
<option value="jarda/hora">jarda/hora</option>
<option value="jarda/minuto">jarda/minuto</option>
<option value="jarda/segundo">jarda/segundo</option>
</select>
</td></tr>

<tr><td colspan="2" bgcolor="#F9F9F9" style="height:30" align="center">
<input type="submit" value="Converter">
</td></tr>

<tr><td colspan="2" bgcolor="#F5F5F5" style="height:30" align="center">

<?

$valorconv  = ToSI_Velo($_POST['valor'], $_POST['unidade']);
$valorconv2 = FromSI_Velo($valorconv, $_POST['unidade2']);



if ($_POST['valor'] == '') {  ?>
<a class="con2">Digite um valor!</a>  <?
} else {
?>
<a class="con2"><?=$_POST['valor']?> </a><a class="con"><?=$_POST['unidade']?></a>
<a class="con3"> = </a>
<a class="con2"><?=$valorconv2?> </a><a class="con"><?=$_POST['unidade2']?></a>
<? } ?>

</td></tr>
</form>
</table>

<?

}

?>




<? if ($_GET['tipo']=='potencia') { ?>

<center>
<table style="90%">
<form action="?pag=conversor&tipo=potencia" method="post">
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Pot�ncia:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">

<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="Btu/hora">Btu/hora</option>
<option value="Btu/minuto">Btu/minuto</option>
<option value="Btu/segundo">Btu/segundo</option>
<option value="caloria(th)/hora">caloria(th)/hora</option>
<option value="caloria(th)/minuto">caloria(th)/minuto</option>
<option value="caloria(th)/segundo">caloria(th)/segundo </option>
<option value="foot pound-force/minute">foot pound-force/minute</option>
<option value="foot pound-force/second">foot pound-force/second</option>
<option value="gigawatt [GW]">gigawatt [GW]</option>
<option value="horsepower (electric)">horsepower (electric)</option>
<option value="horsepower (metric)">horsepower (metric)</option>
<option value="watt [W]">watt [W]</option>
<option value="joule/hora">joule/hora</option>
<option value="joule/minuto">joule/minuto</option>
<option value="joule/segundo">joule/segundo</option>
<option value="quilocaloria(th)/hora">quilocaloria(th)/hora</option>
<option value="quilocaloria(th)/minuto">quilocaloria(th)/minuto</option>
<option value="quilograma-for�a metro/hora">quilograma-for�a metro/hora </option>
<option value="quilograma-for�a metro/minuto">quilograma-for�a metro/minuto</option>
<option value="quilowatt [kW]">quilowatt [kW]</option>
<option value="megawatt [MW]">megawatt [MW]</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="Btu/hora">Btu/hora</option>
<option value="Btu/minuto">Btu/minuto</option>
<option value="Btu/segundo">Btu/segundo</option>
<option value="caloria(th)/hora">caloria(th)/hora</option>
<option value="caloria(th)/minuto">caloria(th)/minuto</option>
<option value="caloria(th)/segundo">caloria(th)/segundo </option>
<option value="foot pound-force/minute">foot pound-force/minute</option>
<option value="foot pound-force/second">foot pound-force/second</option>
<option value="gigawatt [GW]">gigawatt [GW]</option>
<option value="horsepower (electric)">horsepower (electric)</option>
<option value="horsepower (metric)">horsepower (metric)</option>
<option value="watt [W]">watt [W]</option>
<option value="joule/hora">joule/hora</option>
<option value="joule/minuto">joule/minuto</option>
<option value="joule/segundo">joule/segundo</option>
<option value="quilocaloria(th)/hora">quilocaloria(th)/hora</option>
<option value="quilocaloria(th)/minuto">quilocaloria(th)/minuto</option>
<option value="quilograma-for�a metro/hora">quilograma-for�a metro/hora </option>
<option value="quilograma-for�a metro/minuto">quilograma-for�a metro/minuto</option>
<option value="quilowatt [kW]">quilowatt [kW]</option>
<option value="megawatt [MW]">megawatt [MW]</option>
</select>
</td></tr>

<tr><td colspan="2" bgcolor="#F9F9F9" style="height:30" align="center">
<input type="submit" value="Converter">
</td></tr>

<tr><td colspan="2" bgcolor="#F5F5F5" style="height:30" align="center">

<?

$valorconv  = ToSI_Poten($_POST['valor'], $_POST['unidade']);
$valorconv2 = FromSI_Poten($valorconv, $_POST['unidade2']);



if ($_POST['valor'] == '') {  ?>
<a class="con2">Digite um valor!</a>  <?
} else {
?>
<a class="con2"><?=$_POST['valor']?> </a><a class="con"><?=$_POST['unidade']?></a>
<a class="con3"> = </a>
<a class="con2"><?=$valorconv2?> </a><a class="con"><?=$_POST['unidade2']?></a>
<? } ?>

</td></tr>
</form>
</table>

<?

}

?>





<? if ($_GET['tipo']=='pressao') { ?>

<center>
<table style="90%">
<form action="?pag=conversor&tipo=pressao" method="post">
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Press�o:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">

<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="atmosphere">atmosphere</option>
<option value="bar">bar</option>
<option value="cent�metro de merc�rio">cent�metro de merc�rio</option>
<option value="centimeter water">centimeter water</option>
<option value="feet of water">feet of water</option>
<option value="hectopascal [hPa]">hectopascal [hPa]</option>
<option value="inch of water">inch of water</option>
<option value="polegada de merc�rio">polegada de merc�rio</option>
<option value="quilograma-for�a/cent�metro quadrado">quilograma-for�a/cent�metro quadrado</option>
<option value="quilograma-for�a/metro quadrado">quilograma-for�a/metro quadrado</option>
<option value="quilopascal [kPa]">quilopascal [kPa]</option>
<option value="kip/sq.inch">kip/sq.inch</option>
<option value="meganewton/metro quadrado">meganewton/metro quadrado</option>
<option value="meter of water">meter of water</option>
<option value="milibar">milibar</option>
<option value="mil�metro de merc�rio">mil�metro de merc�rio</option>
<option value="millimeter of water">millimeter of water</option>
<option value="newton/cent�metro quadrado">newton/cent�metro quadrado</option>
<option value="newton/metro quadrado">newton/metro quadrado</option>
<option value="newton/mil�metro quadrado">newton/mil�metro quadrado</option>
<option value="pascal [Pa]">pascal [Pa]</option>
<option value="pound-force/sq.foot">pound-force/sq.foot</option>
<option value="pound-force/sq.inch">pound-force/sq.inch</option>
<option value="poundal/sq.foot">poundal/sq.foot </option>
<option value="ton (UK)-force/sq.foot">ton (UK)-force/sq.foot</option>
<option value="ton (UK)-force/sq.inch">ton (UK)-force/sq.inch</option>
<option value="ton (US)-force/sq.foot">on (US)-force/sq.foot</option>
<option value="ton (US)-force/sq.inch">ton (US)-force/sq.inch</option>
<option value="tonelada-for�a/cent�metro quadrado">tonelada-for�a/cent�metro quadrado</option>
<option value="tonelada-for�a/metro quadrado">tonelada-for�a/metro quadrado</option>
<option value="torricelli (torr)">torricelli (torr)</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="atmosphere">atmosphere</option>
<option value="bar">bar</option>
<option value="cent�metro de merc�rio">cent�metro de merc�rio</option>
<option value="centimeter water">centimeter water</option>
<option value="feet of water">feet of water</option>
<option value="hectopascal [hPa]">hectopascal [hPa]</option>
<option value="inch of water">inch of water</option>
<option value="polegada de merc�rio">polegada de merc�rio</option>
<option value="quilograma-for�a/cent�metro quadrado">quilograma-for�a/cent�metro quadrado</option>
<option value="quilograma-for�a/metro quadrado">quilograma-for�a/metro quadrado</option>
<option value="quilopascal [kPa]">quilopascal [kPa]</option>
<option value="kip/sq.inch">kip/sq.inch</option>
<option value="meganewton/metro quadrado">meganewton/metro quadrado</option>
<option value="meter of water">meter of water</option>
<option value="milibar">milibar</option>
<option value="mil�metro de merc�rio">mil�metro de merc�rio</option>
<option value="millimeter of water">millimeter of water</option>
<option value="newton/cent�metro quadrado">newton/cent�metro quadrado</option>
<option value="newton/metro quadrado">newton/metro quadrado</option>
<option value="newton/mil�metro quadrado">newton/mil�metro quadrado</option>
<option value="pascal [Pa]">pascal [Pa]</option>
<option value="pound-force/sq.foot">pound-force/sq.foot</option>
<option value="pound-force/sq.inch">pound-force/sq.inch</option>
<option value="poundal/sq.foot">poundal/sq.foot </option>
<option value="ton (UK)-force/sq.foot">ton (UK)-force/sq.foot</option>
<option value="ton (UK)-force/sq.inch">ton (UK)-force/sq.inch</option>
<option value="ton (US)-force/sq.foot">on (US)-force/sq.foot</option>
<option value="ton (US)-force/sq.inch">ton (US)-force/sq.inch</option>
<option value="tonelada-for�a/cent�metro quadrado">tonelada-for�a/cent�metro quadrado</option>
<option value="tonelada-for�a/metro quadrado">tonelada-for�a/metro quadrado</option>
<option value="torricelli (torr)">torricelli (torr)</option>
</select>
</td></tr>

<tr><td colspan="2" bgcolor="#F9F9F9" style="height:30" align="center">
<input type="submit" value="Converter">
</td></tr>

<tr><td colspan="2" bgcolor="#F5F5F5" style="height:30" align="center">

<?

$valorconv  = ToSI_Press($_POST['valor'], $_POST['unidade']);
$valorconv2 = FromSI_Press($valorconv, $_POST['unidade2']);



if ($_POST['valor'] == '') {  ?>
<a class="con2">Digite um valor!</a>  <?
} else {
?>
<a class="con2"><?=$_POST['valor']?> </a><a class="con"><?=$_POST['unidade']?></a>
<a class="con3"> = </a>
<a class="con2"><?=$valorconv2?> </a><a class="con"><?=$_POST['unidade2']?></a>
<? } ?>

</td></tr>
</form>
</table>

<?

}

?>




<? if ($_GET['tipo']=='temperatura') { ?>

<center>
<table style="90%">
<form action="?pag=conversor&tipo=temperatura" method="post">
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Temperatura:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">

<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="Celsius">Celsius</option>
<option value="Fahrenheit">Fahrenheit</option>
<option value="Kelvin">Kelvin</option>
<option value="Rankine">Rankine</option>
<option value="R�aumure">R�aumure</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="Celsius">Celsius</option>
<option value="Fahrenheit">Fahrenheit</option>
<option value="Kelvin">Kelvin</option>
<option value="Rankine">Rankine</option>
<option value="R�aumure">R�aumure</option>
</select>
</td></tr>

<tr><td colspan="2" bgcolor="#F9F9F9" style="height:30" align="center">
<input type="submit" value="Converter">
</td></tr>

<tr><td colspan="2" bgcolor="#F5F5F5" style="height:30" align="center">

<?

$valorconv  = ToSI_Temp($_POST['valor'], $_POST['unidade']);
$valorconv2 = FromSI_Temp($valorconv, $_POST['unidade2']);



if ($_POST['valor'] == '') {  ?>
<a class="con2">Digite um valor!</a>  <?
} else {
?>
<a class="con2"><?=$_POST['valor']?> </a><a class="con"><?=$_POST['unidade']?></a>
<a class="con3"> = </a>
<a class="con2"><?=$valorconv2?> </a><a class="con"><?=$_POST['unidade2']?></a>
<? } ?>

</td></tr>
</form>
</table>

<?

}

?>




<? if ($_GET['tipo']=='torque') { ?>

<center>
<table style="90%">
<form action="?pag=conversor&tipo=torque" method="post">
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Torque:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">

<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="dyne/cent�metro">dyne/cent�metro</option>
<option value="grama/cent�metro">grama/cent�metro</option>
<option value="quilograma/cent�metro">quilograma/cent�metro</option>
<option value="quilograma/metro">quilograma/metro</option>
<option value="quilonewton/metro">quilonewton/metro</option>
<option value="kilopond/metro">kilopond/metro</option>
<option value="meganewton/metro">meganewton/metro</option>
<option value="micronewton/metro">micronewton/metro</option>
<option value="milinewton/metro">milinewton/metro</option>
<option value="newton/centimetro">newton/centimetro</option>
<option value="newton/metro">newton/metro </option>
<option value="on�a/p�">on�a/p�</option>
<option value="on�a/polegada">on�a/polegada</option>
<option value="libra/p�">libra/p�</option>
<option value="poundal/foot">poundal/foot</option>
<option value="libra/polegada">libra/polegada</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="dyne/cent�metro">dyne/cent�metro</option>
<option value="grama/cent�metro">grama/cent�metro</option>
<option value="quilograma/cent�metro">quilograma/cent�metro</option>
<option value="quilograma/metro">quilograma/metro</option>
<option value="quilonewton/metro">quilonewton/metro</option>
<option value="kilopond/metro">kilopond/metro</option>
<option value="meganewton/metro">meganewton/metro</option>
<option value="micronewton/metro">micronewton/metro</option>
<option value="milinewton/metro">milinewton/metro</option>
<option value="newton/centimetro">newton/centimetro</option>
<option value="newton/metro">newton/metro </option>
<option value="on�a/p�">on�a/p�</option>
<option value="on�a/polegada">on�a/polegada</option>
<option value="libra/p�">libra/p�</option>
<option value="poundal/foot">poundal/foot</option>
<option value="libra/polegada">libra/polegada</option>
</select>
</td></tr>

<tr><td colspan="2" bgcolor="#F9F9F9" style="height:30" align="center">
<input type="submit" value="Converter">
</td></tr>

<tr><td colspan="2" bgcolor="#F5F5F5" style="height:30" align="center">

<?

$valorconv  = ToSI_Tor($_POST['valor'], $_POST['unidade']);
$valorconv2 = FromSI_Tor($valorconv, $_POST['unidade2']);



if ($_POST['valor'] == '') {  ?>
<a class="con2">Digite um valor!</a>  <?
} else {
?>
<a class="con2"><?=$_POST['valor']?> </a><a class="con"><?=$_POST['unidade']?></a>
<a class="con3"> = </a>
<a class="con2"><?=$valorconv2?> </a><a class="con"><?=$_POST['unidade2']?></a>
<? } ?>

</td></tr>
</form>
</table>

<?

}

?>


<? if ($_GET['tipo']=='volume') { ?>

<center>
<table style="90%">
<form action="?pag=conversor&tipo=volume" method="post">
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Volume:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">

<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="barrel (oil)">barrel (oil)</option>
<option value="bushel (UK)">bushel (UK)</option>
<option value="bushel (US)">bushel (US)</option>
<option value="centilitro [cl]">centilitro [cl]</option>
<option value="cent�metro c�bico">cent�metro c�bico</option>
<option value="dec�metro c�bico">dec�metro c�bico</option>
<option value="dec�metro c�bico">dec�metro c�bico</option>
<option value="p� c�bico">p� c�bico</option>
<option value="polegada c�bica">polegada c�bica</option>
<option value="metro c�bico">metro c�bico</option>
<option value="mil�metro c�bico">mil�metro c�bico</option>
<option value="jarda c�bica">jarda c�bica</option>
<option value="decilitro [dl]">decilitro [dl]</option>
<option value="fluid once (UK)">fluid once (UK)</option>
<option value="fluid once (US)">fluid once (US)</option>
<option value="gal�o (UK)">gal�o (UK)</option>
<option value="gallon, dry (US)">gallon, dry (US)</option>
<option value="gallon, liquid (US)">gallon, liquid (US)</option>
<option value="litro (l ou L)">litro (l ou L)</option>
<option value="litro (1901-1964)">litro (1901-1964)</option>
<option value="mililitro [ml]">mililitro [ml]</option>
<option value="pint (UK)">pint (UK)</option>
<option value="pint, dry (US)">pint, dry (US)</option>
<option value="pint, liquid (US)">pint, liquid (US)</option>
<option value="quart (UK)">quart (UK)</option>
<option value="quart, dry (US)">quart, dry (US)</option>
<option value="quart, liquid (US)">quart, liquid (US)</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="barrel (oil)">barrel (oil)</option>
<option value="bushel (UK)">bushel (UK)</option>
<option value="bushel (US)">bushel (US)</option>
<option value="centilitro [cl]">centilitro [cl]</option>
<option value="cent�metro c�bico">cent�metro c�bico</option>
<option value="dec�metro c�bico">dec�metro c�bico</option>
<option value="dec�metro c�bico">dec�metro c�bico</option>
<option value="p� c�bico">p� c�bico</option>
<option value="polegada c�bica">polegada c�bica</option>
<option value="metro c�bico">metro c�bico</option>
<option value="mil�metro c�bico">mil�metro c�bico</option>
<option value="jarda c�bica">jarda c�bica</option>
<option value="decilitro [dl]">decilitro [dl]</option>
<option value="fluid once (UK)">fluid once (UK)</option>
<option value="fluid once (US)">fluid once (US)</option>
<option value="gal�o (UK)">gal�o (UK)</option>
<option value="gallon, dry (US)">gallon, dry (US)</option>
<option value="gallon, liquid (US)">gallon, liquid (US)</option>
<option value="litro (l ou L)">litro (l ou L)</option>
<option value="litro (1901-1964)">litro (1901-1964)</option>
<option value="mililitro [ml]">mililitro [ml]</option>
<option value="pint (UK)">pint (UK)</option>
<option value="pint, dry (US)">pint, dry (US)</option>
<option value="pint, liquid (US)">pint, liquid (US)</option>
<option value="quart (UK)">quart (UK)</option>
<option value="quart, dry (US)">quart, dry (US)</option>
<option value="quart, liquid (US)">quart, liquid (US)</option>
</select>
</td></tr>

<tr><td colspan="2" bgcolor="#F9F9F9" style="height:30" align="center">
<input type="submit" value="Converter">
</td></tr>

<tr><td colspan="2" bgcolor="#F5F5F5" style="height:30" align="center">

<?

$valorconv  = ToSI_Vol($_POST['valor'], $_POST['unidade']);
$valorconv2 = FromSI_Vol($valorconv, $_POST['unidade2']);



if ($_POST['valor'] == '') {  ?>
<a class="con2">Digite um valor!</a>  <?
} else {
?>
<a class="con2"><?=$_POST['valor']?> </a><a class="con"><?=$_POST['unidade']?></a>
<a class="con3"> = </a>
<a class="con2"><?=$valorconv2?> </a><a class="con"><?=$_POST['unidade2']?></a>
<? } ?>

</td></tr>
</form>
</table>

<?

}

?>


<? if ($_GET['tipo']=='volume') { ?>



<? } ?>








</center>







</td>
   </tr>
   </table>



   </td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="98" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="tabela4_r3_c1" src="imagens/meio/tabela4_r3_c1.jpg" width="570"  border="0" id="tabela4_r3_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="10" border="0" alt="" /></td>
  </tr>
</table>
<table><tr><td style="height:10"></td></tr></table>
