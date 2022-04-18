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
   <td><a class="mais2" href="?pag=conversor&tipo=area">Área</a></td>
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
   <td><a class="mais2" href="?pag=conversor&tipo=forca">Força</a></td>
   </tr>

   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=massa">Massa</a></td>
   </tr>
   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=potencia">Potência</a></td>
   </tr>
   
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=conversor&tipo=pressao">Pressão</a></td>
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
   <td><a class="mais2" href="?pag=conversor&tipo=fluido">Vazão</a></td>
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
<option value="grão">grão</option>
<option value="grama [g]">grama [g]</option>
<option value="hudredweight (long)">hudredweight (long)</option>
<option value="hudredweight (short)">hudredweight (short)</option>
<option value="quilograma [kg]">quilograma [kg]</option>
<option value="onça (avoirdupois)">onça (avoirdupois)</option>
<option value="onça (troy)">onça (troy)</option>
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
<option value="grão">grão</option>
<option value="grama [g]">grama [g]</option>
<option value="hudredweight (long)">hudredweight (long)</option>
<option value="hudredweight (short)">hudredweight (short)</option>
<option value="quilograma [kg]">quilograma [kg]</option>
<option value="onça (avoirdupois)">onça (avoirdupois)</option>
<option value="onça (troy)">onça (troy)</option>
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
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Área:</a></td></tr>
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
<option value="centímetro quadrado">centímetro quadrado</option>
<option value="pé quadrado">pé quadrado</option>
<option value="pé quadrado (US survey)">pé quadrado (US survey)</option>
<option value="polegada quadrada">polegada quadrada</option>
<option value="quilômetro quadrado">quilômetro quadrado</option>
<option value="metro quadrado">metro quadrado</option>
<option value="milha quadrada">milha quadrada</option>
<option value="milímetro quadrado">milímetro quadrado</option>
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
<option value="centímetro quadrado">centímetro quadrado</option>
<option value="pé quadrado">pé quadrado</option>
<option value="pé quadrado (US survey)">pé quadrado (US survey)</option>
<option value="polegada quadrada">polegada quadrada</option>
<option value="quilômetro quadrado">quilômetro quadrado</option>
<option value="metro quadrado">metro quadrado</option>
<option value="milha quadrada">milha quadrada</option>
<option value="milímetro quadrado">milímetro quadrado</option>
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
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Vazão:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">
<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="pé acre/dia">pé acre/dia</option>
<option value="pé acre/hora">pé acre/hora</option>
<option value="pé acre/minuto">pé acre/minuto</option>
<option value="pé acre/segundo">pé acre/segundo</option>
<option value="pé acre/dia [exame]">pé acre/dia [exame]</option>
<option value="pé acre/hora [exame]">pé acre/hora [exame]</option>
<option value="pé acre/minuto [exame]">pé acre/minuto [exame]</option>
<option value="pé acre/segundo">pé acre/segundo</option>
<option value="polegada acre/dia">polegada acre/dia</option>
<option value="polegada acre/hora">polegada acre/hora</option>
<option value="polegada acre/hora">polegada acre/hora </option>
<option value="polegada acre/segundo">polegada acre/segundo</option>
<option value="polegada acre/dia [exame]">polegada acre/dia [exame]</option>
<option value="polegada acre/hora [exame]">polegada acre/hora [exame]</option>
<option value="polegada acre/minuto [exame]">polegada acre/minuto [exame]</option>
<option value="polegada acre/segundo [exame]">polegada acre/segundo [exame]</option>
<option value="barril/dia [petróleo]">barril/dia [petróleo]</option>
<option value="barril/hora [petróleo]">barril/hora [petróleo]</option>
<option value="barril/minuto [petróleo]">barril/minuto [petróleo]</option>
<option value="barril/segundo [petróleo]">barril/segundo [petróleo]</option>
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
<option value="bilhão pé cúbico /dia">bilhão pé cúbico /dia</option>
<option value="bilhão pé cúbico /hora">bilhão pé cúbico /hora</option>
<option value="bilhão pé cúbico /minuto">bilhão pé cúbico /minuto</option>
<option value="bilhão pé cúbico /segundo">bilhão pé cúbico /segundo</option>
<option value="centilitro/dia">centilitro/dia</option>
<option value="centilitro/hora">centilitro/hora</option>
<option value="centilitro/minuto">centilitro/minuto</option>
<option value="centilitro/segundo">centilitro/segundo</option>
<option value="cubem/dia">cubem/dia</option>
<option value="cubem/hora">cubem/hora</option>
<option value="cubem/minuto">cubem/minuto</option>
<option value="cubem/segundo">cubem/segundo</option>
<option value="centimetro cúbico/dia">centimetro cúbico/dia</option>
<option value="centimetro cúbico/hora">centimetro cúbico/hora</option>
<option value="centimetro cúbico/minuto">centimetro cúbico/minuto</option>
<option value="centimetro cúbico/segundo">centimetro cúbico/segundo</option>
<option value="decímetro cúbico/dia">decímetro cúbico/dia</option>
<option value="decímetro cúbico/hora">decímetro cúbico/hora</option>
<option value="decímetro cúbico/minuto">decímetro cúbico/minuto</option>
<option value="decímetro cúbico/segundo">decímetro cúbico/segundo</option>
<option value="decametro cúbico/dia">decametro cúbico/dia</option>
<option value="decametro cúbico/hora">decametro cúbico/hora</option>
<option value="decametro cúbico/minuto">decametro cúbico/minuto</option>
<option value="decametro cúbico/segundo">decametro cúbico/segundo</option>
<option value="pé cúbico/dia">pé cúbico/dia</option>
<option value="pé cúbico/hora">pé cúbico/hora</option>
<option value="pé cúbico/minuto">pé cúbico/minuto</option>
<option value="pé cúbico/segundo">pé cúbico/segundo</option>
<option value="polegada cúbica/dia">polegada cúbica/dia</option>
<option value="polegada cúbica/hora">polegada cúbica/hora</option>
<option value="polegada cúbica/minuto">polegada cúbica/minuto</option>
<option value="polegada cúbica/segundo">polegada cúbica/segundo</option>
<option value="quilometro cúbico/dia">quilometro cúbico/dia</option>
<option value="quilometro cúbico/hora">quilometro cúbico/hora</option>
<option value="quilometro cúbico/minuto">quilometro cúbico/minuto</option>
<option value="quilometro cúbico/segundo">quilometro cúbico/segundo</option>
<option value="metro cúbico/dia">metro cúbico/dia</option>
<option value="metro cúbico/hora">metro cúbico/hora</option>
<option value="metro cúbico/minuto">metro cúbico/minuto</option>
<option value="metro cúbico/segundo">metro cúbico/segundo</option>
<option value="milha cúbica/dia">milha cúbica/dia</option>
<option value="milha cúbica/hora">milha cúbica/hora</option>
<option value="milha cúbica/minuto">milha cúbica/minuto</option>
<option value="milha cúbica/segundo">milha cúbica/segundo</option>
<option value="milímetro cúbico/dia">milímetro cúbico/dia</option>
<option value="milímetro cúbico/hora">milímetro cúbico/hora</option>
<option value="milímetro cúbico/minuto">milímetro cúbico/minuto</option>
<option value="milímetro cúbico/segundo">milímetro cúbico/segundo</option>
<option value="jarda cúbica/dia">jarda cúbica/dia</option>
<option value="jarda cúbica/hora">jarda cúbica/hora</option>
<option value="jarda cúbica/minuto">jarda cúbica/minuto</option>
<option value="jarda cúbica/segundo">jarda cúbica/segundo</option>
<option value="cusec">cusec</option>
<option value="decilitro/dia">decilitro/dia</option>
<option value="decilitro/hora">decilitro/hora</option>
<option value="decilitro/minuto">decilitro/minuto</option>
<option value="decilitro/segundo">decilitro/segundo</option>
<option value="decalitro/dia">decalitro/dia</option>
<option value="decalitro/hora">decalitro/hora</option>
<option value="decalitro/minuto">decalitro/minuto</option>
<option value="decalitro/segundo">decalitro/segundo</option>
<option value="galão/dia [UK]">galão/dia [UK]</option>
<option value="galão/hora [UK]">galão/hora [UK]</option>
<option value="galão/minuto [UK]">galão/minuto [UK]</option>
<option value="galão/segundo [UK]">galão/segundo [UK]</option>
<option value="galão/dia [US]">galão/dia [US]</option>
<option value="galão/hora [US]">galão/hora [US]</option>
<option value="galão/minuto [US]">galão/minuto [US]</option>
<option value="galão/segundo [US]">galão/segundo [US]</option>
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
<option value="milímetro/dia">milímetro/dia</option>
<option value="milímetro/hora">milímetro/hora</option>
<option value="milímetro/minuto">milímetro/minuto</option>
<option value="milímetro/segundo">milímetro/segundo</option>
<option value="milhão pé acre/dia">milhão pé acre/dia</option>
<option value="milhão pé acre/hora">milhão pé acre/hora</option>
<option value="milhão pé acre/minuto">milhão pé acre/minuto</option>
<option value="milhão pé acre/segundo">milhão pé acre/segundo</option>
<option value="milhão pé cúbico/dia">milhão pé cúbico/dia</option>
<option value="milhão pé cúbico/hora">milhão pé cúbico/hora</option>
<option value="milhão pé cúbico/minuto">milhão pé cúbico/minuto</option>
<option value="milhão pé cúbico/segundo">milhão pé cúbico/segundo</option>
<option value="milhão galão/dia [UK]">milhão galão/dia [UK]</option>
<option value="milhão galão/hora [UK]">milhão galão/hora [UK]</option>
<option value="milhão galão/minuto [UK]">milhão galão/minuto [UK]</option>
<option value="milhão galão/segundo [UK]">milhão galão/segundo [UK]</option>
<option value="milhão galão/dia [US]">milhão galão/dia [US]</option>
<option value="milhão galão/hora [US]">milhão galão/hora [US]</option>
<option value="milhão galão/minuto [US]">milhão galão/minuto [US]</option>
<option value="milhão galão/segundo [US]">milhão galão/segundo [US]</option>
<option value="polegada (mina) [AZ, CA, OR]">polegada (mina) [AZ, CA, OR]</option>
<option value="polegada (mina) [CO]">polegada (mina) [CO]</option>
<option value="polegada (mina) [ID, WA, NM]">polegada (mina) [ID, WA, NM]</option>
<option value="onça/dia [UK]">onça/dia [UK]</option>
<option value="onça/hora [UK]">onça/hora [UK]</option>
<option value="onça/minuto [UK]">onça/minuto [UK]</option>
<option value="onça/segundo [UK]">onça/segundo [UK]</option>
<option value="onça/dia [US]">onça/dia [US]</option>
<option value="onça/hora [US]">onça/hora [US]</option>
<option value="onça/minuto [US]">onça/minuto [US]</option>
<option value="onça/segundo [US]">onça/segundo [US</option>
<option value="petrograd standard/dia">petrograd standard/dia</option>
<option value="petrograd standard/hora">petrograd standard/hora</option>
<option value="petrograd standard/minuto">petrograd standard/minuto</option>
<option value="petrograd standard/segundo">petrograd standard/segundo</option>
<option value="stere/dia">stere/dia</option>
<option value="stere/hora">stere/hora</option>
<option value="stere/minuto">stere/minuto</option>
<option value="stere/segundo">stere/segundo</option>
<option value="mil pé cúbico/dia">mil pé cúbico/dia</option>
<option value="mil pé cúbico/hora">mil pé cúbico/hora</option>
<option value="mil pé cúbico/minuto">mil pé cúbico/minuto</option>
<option value="mil pé cúbico/segundo">mil pé cúbico/segundo</option>
<option value="trilhão pé cúbico/dia">trilhão pé cúbico/dia</option>
<option value="trilhão pé cúbico/hora">trilhão pé cúbico/hora</option>
<option value="trilhão pé cúbico/minuto">trilhão pé cúbico/minuto</option>
<option value="trilhão pé cúbico/segundo">trilhão pé cúbico/segundo</option>
</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="pé acre/dia">pé acre/dia</option>
<option value="pé acre/hora">pé acre/hora</option>
<option value="pé acre/minuto">pé acre/minuto</option>
<option value="pé acre/segundo">pé acre/segundo</option>
<option value="pé acre/dia [exame]">pé acre/dia [exame]</option>
<option value="pé acre/hora [exame]">pé acre/hora [exame]</option>
<option value="pé acre/minuto [exame]">pé acre/minuto [exame]</option>
<option value="pé acre/segundo">pé acre/segundo</option>
<option value="polegada acre/dia">polegada acre/dia</option>
<option value="polegada acre/hora">polegada acre/hora</option>
<option value="polegada acre/hora">polegada acre/hora </option>
<option value="polegada acre/segundo">polegada acre/segundo</option>
<option value="polegada acre/dia [exame]">polegada acre/dia [exame]</option>
<option value="polegada acre/hora [exame]">polegada acre/hora [exame]</option>
<option value="polegada acre/minuto [exame]">polegada acre/minuto [exame]</option>
<option value="polegada acre/segundo [exame]">polegada acre/segundo [exame]</option>
<option value="barril/dia [petróleo]">barril/dia [petróleo]</option>
<option value="barril/hora [petróleo]">barril/hora [petróleo]</option>
<option value="barril/minuto [petróleo]">barril/minuto [petróleo]</option>
<option value="barril/segundo [petróleo]">barril/segundo [petróleo]</option>
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
<option value="bilhão pé cúbico /dia">bilhão pé cúbico /dia</option>
<option value="bilhão pé cúbico /hora">bilhão pé cúbico /hora</option>
<option value="bilhão pé cúbico /minuto">bilhão pé cúbico /minuto</option>
<option value="bilhão pé cúbico /segundo">bilhão pé cúbico /segundo</option>
<option value="centilitro/dia">centilitro/dia</option>
<option value="centilitro/hora">centilitro/hora</option>
<option value="centilitro/minuto">centilitro/minuto</option>
<option value="centilitro/segundo">centilitro/segundo</option>
<option value="cubem/dia">cubem/dia</option>
<option value="cubem/hora">cubem/hora</option>
<option value="cubem/minuto">cubem/minuto</option>
<option value="cubem/segundo">cubem/segundo</option>
<option value="centimetro cúbico/dia">centimetro cúbico/dia</option>
<option value="centimetro cúbico/hora">centimetro cúbico/hora</option>
<option value="centimetro cúbico/minuto">centimetro cúbico/minuto</option>
<option value="centimetro cúbico/segundo">centimetro cúbico/segundo</option>
<option value="decímetro cúbico/dia">decímetro cúbico/dia</option>
<option value="decímetro cúbico/hora">decímetro cúbico/hora</option>
<option value="decímetro cúbico/minuto">decímetro cúbico/minuto</option>
<option value="decímetro cúbico/segundo">decímetro cúbico/segundo</option>
<option value="decametro cúbico/dia">decametro cúbico/dia</option>
<option value="decametro cúbico/hora">decametro cúbico/hora</option>
<option value="decametro cúbico/minuto">decametro cúbico/minuto</option>
<option value="decametro cúbico/segundo">decametro cúbico/segundo</option>
<option value="pé cúbico/dia">pé cúbico/dia</option>
<option value="pé cúbico/hora">pé cúbico/hora</option>
<option value="pé cúbico/minuto">pé cúbico/minuto</option>
<option value="pé cúbico/segundo">pé cúbico/segundo</option>
<option value="polegada cúbica/dia">polegada cúbica/dia</option>
<option value="polegada cúbica/hora">polegada cúbica/hora</option>
<option value="polegada cúbica/minuto">polegada cúbica/minuto</option>
<option value="polegada cúbica/segundo">polegada cúbica/segundo</option>
<option value="quilometro cúbico/dia">quilometro cúbico/dia</option>
<option value="quilometro cúbico/hora">quilometro cúbico/hora</option>
<option value="quilometro cúbico/minuto">quilometro cúbico/minuto</option>
<option value="quilometro cúbico/segundo">quilometro cúbico/segundo</option>
<option value="metro cúbico/dia">metro cúbico/dia</option>
<option value="metro cúbico/hora">metro cúbico/hora</option>
<option value="metro cúbico/minuto">metro cúbico/minuto</option>
<option value="metro cúbico/segundo">metro cúbico/segundo</option>
<option value="milha cúbica/dia">milha cúbica/dia</option>
<option value="milha cúbica/hora">milha cúbica/hora</option>
<option value="milha cúbica/minuto">milha cúbica/minuto</option>
<option value="milha cúbica/segundo">milha cúbica/segundo</option>
<option value="milímetro cúbico/dia">milímetro cúbico/dia</option>
<option value="milímetro cúbico/hora">milímetro cúbico/hora</option>
<option value="milímetro cúbico/minuto">milímetro cúbico/minuto</option>
<option value="milímetro cúbico/segundo">milímetro cúbico/segundo</option>
<option value="jarda cúbica/dia">jarda cúbica/dia</option>
<option value="jarda cúbica/hora">jarda cúbica/hora</option>
<option value="jarda cúbica/minuto">jarda cúbica/minuto</option>
<option value="jarda cúbica/segundo">jarda cúbica/segundo</option>
<option value="cusec">cusec</option>
<option value="decilitro/dia">decilitro/dia</option>
<option value="decilitro/hora">decilitro/hora</option>
<option value="decilitro/minuto">decilitro/minuto</option>
<option value="decilitro/segundo">decilitro/segundo</option>
<option value="decalitro/dia">decalitro/dia</option>
<option value="decalitro/hora">decalitro/hora</option>
<option value="decalitro/minuto">decalitro/minuto</option>
<option value="decalitro/segundo">decalitro/segundo</option>
<option value="galão/dia [UK]">galão/dia [UK]</option>
<option value="galão/hora [UK]">galão/hora [UK]</option>
<option value="galão/minuto [UK]">galão/minuto [UK]</option>
<option value="galão/segundo [UK]">galão/segundo [UK]</option>
<option value="galão/dia [US]">galão/dia [US]</option>
<option value="galão/hora [US]">galão/hora [US]</option>
<option value="galão/minuto [US]">galão/minuto [US]</option>
<option value="galão/segundo [US]">galão/segundo [US]</option>
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
<option value="milímetro/dia">milímetro/dia</option>
<option value="milímetro/hora">milímetro/hora</option>
<option value="milímetro/minuto">milímetro/minuto</option>
<option value="milímetro/segundo">milímetro/segundo</option>
<option value="milhão pé acre/dia">milhão pé acre/dia</option>
<option value="milhão pé acre/hora">milhão pé acre/hora</option>
<option value="milhão pé acre/minuto">milhão pé acre/minuto</option>
<option value="milhão pé acre/segundo">milhão pé acre/segundo</option>
<option value="milhão pé cúbico/dia">milhão pé cúbico/dia</option>
<option value="milhão pé cúbico/hora">milhão pé cúbico/hora</option>
<option value="milhão pé cúbico/minuto">milhão pé cúbico/minuto</option>
<option value="milhão pé cúbico/segundo">milhão pé cúbico/segundo</option>
<option value="milhão galão/dia [UK]">milhão galão/dia [UK]</option>
<option value="milhão galão/hora [UK]">milhão galão/hora [UK]</option>
<option value="milhão galão/minuto [UK]">milhão galão/minuto [UK]</option>
<option value="milhão galão/segundo [UK]">milhão galão/segundo [UK]</option>
<option value="milhão galão/dia [US]">milhão galão/dia [US]</option>
<option value="milhão galão/hora [US]">milhão galão/hora [US]</option>
<option value="milhão galão/minuto [US]">milhão galão/minuto [US]</option>
<option value="milhão galão/segundo [US]">milhão galão/segundo [US]</option>
<option value="polegada (mina) [AZ, CA, OR]">polegada (mina) [AZ, CA, OR]</option>
<option value="polegada (mina) [CO]">polegada (mina) [CO]</option>
<option value="polegada (mina) [ID, WA, NM]">polegada (mina) [ID, WA, NM]</option>
<option value="onça/dia [UK]">onça/dia [UK]</option>
<option value="onça/hora [UK]">onça/hora [UK]</option>
<option value="onça/minuto [UK]">onça/minuto [UK]</option>
<option value="onça/segundo [UK]">onça/segundo [UK]</option>
<option value="onça/dia [US]">onça/dia [US]</option>
<option value="onça/hora [US]">onça/hora [US]</option>
<option value="onça/minuto [US]">onça/minuto [US]</option>
<option value="onça/segundo [US]">onça/segundo [US</option>
<option value="petrograd standard/dia">petrograd standard/dia</option>
<option value="petrograd standard/hora">petrograd standard/hora</option>
<option value="petrograd standard/minuto">petrograd standard/minuto</option>
<option value="petrograd standard/segundo">petrograd standard/segundo</option>
<option value="stere/dia">stere/dia</option>
<option value="stere/hora">stere/hora</option>
<option value="stere/minuto">stere/minuto</option>
<option value="stere/segundo">stere/segundo</option>
<option value="mil pé cúbico/dia">mil pé cúbico/dia</option>
<option value="mil pé cúbico/hora">mil pé cúbico/hora</option>
<option value="mil pé cúbico/minuto">mil pé cúbico/minuto</option>
<option value="mil pé cúbico/segundo">mil pé cúbico/segundo</option>
<option value="trilhão pé cúbico/dia">trilhão pé cúbico/dia</option>
<option value="trilhão pé cúbico/hora">trilhão pé cúbico/hora</option>
<option value="trilhão pé cúbico/minuto">trilhão pé cúbico/minuto</option>
<option value="trilhão pé cúbico/segundo">trilhão pé cúbico/segundo</option>
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
<option value="ångström [Å]">ångström [Å]</option>
<option value="astronomical unit [AU]">astronomical unit [AU]</option>
<option value="barleycorn">barleycorn</option>
<option value="cable">cable</option>
<option value="centímetro [cm]">centímetro [cm]</option>
<option value="chain (surveyors')">chain (surveyors')</option>
<option value="decímetro [dm]">decímetro [dm]</option>
<option value="ells (UK)">ells (UK)</option>
<option value="ems (pica)">ems (pica)</option>
<option value="braça">braça</option>
<option value="pé (UK e US)">pé (UK e US)</option>
<option value="pé (US survey)">pé (US survey)</option>
<option value="furlong">furlong</option>
<option value="hand">hand</option>
<option value="hectômetro [hm]">hectômetro [hm]</option>
<option value="polegada">polegada</option>
<option value="quilômetro [km]">quilômetro [km]</option>
<option value="anos luz">anos luz</option>
<option value="metro [m]">metro [m]</option>
<option value="micrometro">micrometro</option>
<option value="milha (UK e US)">milha (UK e US)</option>
<option value="milha (nautical)">milha (nautical)</option>
<option value="milímetro [mm]">milímetro [mm]</option>
<option value="nanômetro">nanômetro</option>
<option value="parsec">parsec</option>
<option value="picometro">picometro</option>
<option value="jarda">jarda</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="ångström [Å]">ångström [Å]</option>
<option value="astronomical unit [AU]">astronomical unit [AU]</option>
<option value="barleycorn">barleycorn</option>
<option value="cable">cable</option>
<option value="centímetro [cm]">centímetro [cm]</option>
<option value="decímetro [dm]">decímetro [dm]</option>
<option value="ells (UK)">ells (UK)</option>
<option value="ems (pica)">ems (pica)</option>
<option value="braça">braça</option>
<option value="pé (UK e US)">pé (UK e US)</option>
<option value="pé (US survey)">pé (US survey)</option>
<option value="furlong">furlong</option>
<option value="hand">hand</option>
<option value="hectômetro [hm]">hectômetro [hm]</option>
<option value="polegada">polegada</option>
<option value="quilômetro [km]">quilômetro [km]</option>
<option value="anos luz">anos luz</option>
<option value="metro [m]">metro [m]</option>
<option value="micrometro">micrometro</option>
<option value="milha (UK e US)">milha (UK e US)</option>
<option value="milha (nautical)">milha (nautical)</option>
<option value="milímetro [mm]">milímetro [mm]</option>
<option value="nanômetro">nanômetro</option>
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
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Força:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">

<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="dyne">dyne</option>
<option value="quilograma força">quilograma força</option>
<option value="quilonewton [kN]">quilonewton [kN]</option>
<option value="kip">kip</option>
<option value="meganewton [MN]">meganewton [MN]</option>
<option value="newton [N]">newton [N]</option>
<option value="libra força">libra força</option>
<option value="poundal">poundal</option>
<option value="sthene (=kN)">sthene (=kN)</option>
<option value="tonelada força">tonelada força</option>
<option value="ton force (UK)">ton force (UK)</option>
<option value="ton force (US)">ton force (US)</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="dyne">dyne</option>
<option value="quilograma força">quilograma força</option>
<option value="quilonewton [kN]">quilonewton [kN]</option>
<option value="kip">kip</option>
<option value="meganewton [MN]">meganewton [MN]</option>
<option value="newton [N]">newton [N]</option>
<option value="libra força">libra força</option>
<option value="poundal">poundal</option>
<option value="sthene (=kN)">sthene (=kN)</option>
<option value="tonelada força">tonelada força</option>
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
<option value="grão/galão (UK)">grão/galão (UK)</option>
<option value="grão/galão (US)">grão/galão (US)</option>
<option value="grama/centímetro cúbico">grama/centímetro cúbico</option>
<option value="grama/litro">grama/litro</option>
<option value="grama/mililitro">grama/mililitro</option>
<option value="quilograma/metro cúbico">quilograma/metro cúbico</option>
<option value="quilograma/litro">quilograma/litro</option>
<option value="megagrama/metro cúbico">megagrama/metro cúbico</option>
<option value="miligrama/mililitro">miligrama/mililitro</option>
<option value="miligrama/litro">miligrama/litro</option>
<option value="onça/polegada cúbica">onça/polegada cúbica</option>
<option value="onça/galão (UK)">onça/galão (UK)</option>
<option value="onça/galão (US)">onça/galão (US)</option>
<option value="libra/polegada cúbica">libra/polegada cúbica</option>
<option value="libra/pé cúbico">libra/pé cúbico</option>
<option value="libra/galão (UK)">libra/galão (UK)</option>
<option value="libra/galão (US)">libra/galão (US)</option>
<option value="slug/cubic foot">slug/cubic foot</option>
<option value="tonelada/metro cúbico">tonelada/metro cúbico</option>
<option value="ton (UK)/cubic yard">ton (UK)/cubic yard</option>
<option value="ton (US)/cubic yard">ton (US)/cubic yard</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="grão/galão (UK)">grão/galão (UK)</option>
<option value="grão/galão (US)">grão/galão (US)</option>
<option value="grama/centímetro cúbico">grama/centímetro cúbico</option>
<option value="grama/litro">grama/litro</option>
<option value="grama/mililitro">grama/mililitro</option>
<option value="quilograma/metro cúbico">quilograma/metro cúbico</option>
<option value="quilograma/litro">quilograma/litro</option>
<option value="megagrama/metro cúbico">megagrama/metro cúbico</option>
<option value="miligrama/mililitro">miligrama/mililitro</option>
<option value="miligrama/litro">miligrama/litro</option>
<option value="onça/polegada cúbica">onça/polegada cúbica</option>
<option value="onça/galão (UK)">onça/galão (UK)</option>
<option value="onça/galão (US)">onça/galão (US)</option>
<option value="libra/polegada cúbica">libra/polegada cúbica</option>
<option value="libra/pé cúbico">libra/pé cúbico</option>
<option value="libra/galão (UK)">libra/galão (UK)</option>
<option value="libra/galão (US)">libra/galão (US)</option>
<option value="slug/cubic foot">slug/cubic foot</option>
<option value="tonelada/metro cúbico">tonelada/metro cúbico</option>
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
<option value="quilograma-força metro">quilograma-força metro</option>
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
<option value="quilograma-força metro">quilograma-força metro</option>
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
<option value="centímetro/minuto">centímetro/minuto</option>
<option value="centímetro/segundo">centímetro/segundo</option>
<option value="pé/hora">pé/hora</option>
<option value="pé/minuto">pé/minuto</option>
<option value="pé/segundo">pé/segundo</option>
<option value="polegada/minuto">polegada/minuto</option>
<option value="polegada/segundo">polegada/segundo</option>
<option value="quilômetro/hora">quilômetro/hora</option>
<option value="quilômetro/segundo">quilômetro/segundo</option>
<option value="nó">nó</option>
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
<option value="centímetro/minuto">centímetro/minuto</option>
<option value="centímetro/segundo">centímetro/segundo</option>
<option value="pé/hora">pé/hora</option>
<option value="pé/minuto">pé/minuto</option>
<option value="pé/segundo">pé/segundo</option>
<option value="polegada/minuto">polegada/minuto</option>
<option value="polegada/segundo">polegada/segundo</option>
<option value="quilômetro/hora">quilômetro/hora</option>
<option value="quilômetro/segundo">quilômetro/segundo</option>
<option value="nó">nó</option>
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
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Potência:</a></td></tr>
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
<option value="quilograma-força metro/hora">quilograma-força metro/hora </option>
<option value="quilograma-força metro/minuto">quilograma-força metro/minuto</option>
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
<option value="quilograma-força metro/hora">quilograma-força metro/hora </option>
<option value="quilograma-força metro/minuto">quilograma-força metro/minuto</option>
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
<tr><td colspan="2" bgcolor="#676767" align="center"><a class="titulo2">Conversor de Pressão:</a></td></tr>
<tr><td colspan="2" bgcolor="#F5F5F5"><a class="con">De:</a></td></tr>
<tr><td style="width:120" bgcolor="#F5F5F5"><input name="valor" type="text" value="<?=$_POST['valor']?>"></td>

<td>
<select name="unidade">

<option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
<option value="atmosphere">atmosphere</option>
<option value="bar">bar</option>
<option value="centímetro de mercúrio">centímetro de mercúrio</option>
<option value="centimeter water">centimeter water</option>
<option value="feet of water">feet of water</option>
<option value="hectopascal [hPa]">hectopascal [hPa]</option>
<option value="inch of water">inch of water</option>
<option value="polegada de mercúrio">polegada de mercúrio</option>
<option value="quilograma-força/centímetro quadrado">quilograma-força/centímetro quadrado</option>
<option value="quilograma-força/metro quadrado">quilograma-força/metro quadrado</option>
<option value="quilopascal [kPa]">quilopascal [kPa]</option>
<option value="kip/sq.inch">kip/sq.inch</option>
<option value="meganewton/metro quadrado">meganewton/metro quadrado</option>
<option value="meter of water">meter of water</option>
<option value="milibar">milibar</option>
<option value="milímetro de mercúrio">milímetro de mercúrio</option>
<option value="millimeter of water">millimeter of water</option>
<option value="newton/centímetro quadrado">newton/centímetro quadrado</option>
<option value="newton/metro quadrado">newton/metro quadrado</option>
<option value="newton/milímetro quadrado">newton/milímetro quadrado</option>
<option value="pascal [Pa]">pascal [Pa]</option>
<option value="pound-force/sq.foot">pound-force/sq.foot</option>
<option value="pound-force/sq.inch">pound-force/sq.inch</option>
<option value="poundal/sq.foot">poundal/sq.foot </option>
<option value="ton (UK)-force/sq.foot">ton (UK)-force/sq.foot</option>
<option value="ton (UK)-force/sq.inch">ton (UK)-force/sq.inch</option>
<option value="ton (US)-force/sq.foot">on (US)-force/sq.foot</option>
<option value="ton (US)-force/sq.inch">ton (US)-force/sq.inch</option>
<option value="tonelada-força/centímetro quadrado">tonelada-força/centímetro quadrado</option>
<option value="tonelada-força/metro quadrado">tonelada-força/metro quadrado</option>
<option value="torricelli (torr)">torricelli (torr)</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="atmosphere">atmosphere</option>
<option value="bar">bar</option>
<option value="centímetro de mercúrio">centímetro de mercúrio</option>
<option value="centimeter water">centimeter water</option>
<option value="feet of water">feet of water</option>
<option value="hectopascal [hPa]">hectopascal [hPa]</option>
<option value="inch of water">inch of water</option>
<option value="polegada de mercúrio">polegada de mercúrio</option>
<option value="quilograma-força/centímetro quadrado">quilograma-força/centímetro quadrado</option>
<option value="quilograma-força/metro quadrado">quilograma-força/metro quadrado</option>
<option value="quilopascal [kPa]">quilopascal [kPa]</option>
<option value="kip/sq.inch">kip/sq.inch</option>
<option value="meganewton/metro quadrado">meganewton/metro quadrado</option>
<option value="meter of water">meter of water</option>
<option value="milibar">milibar</option>
<option value="milímetro de mercúrio">milímetro de mercúrio</option>
<option value="millimeter of water">millimeter of water</option>
<option value="newton/centímetro quadrado">newton/centímetro quadrado</option>
<option value="newton/metro quadrado">newton/metro quadrado</option>
<option value="newton/milímetro quadrado">newton/milímetro quadrado</option>
<option value="pascal [Pa]">pascal [Pa]</option>
<option value="pound-force/sq.foot">pound-force/sq.foot</option>
<option value="pound-force/sq.inch">pound-force/sq.inch</option>
<option value="poundal/sq.foot">poundal/sq.foot </option>
<option value="ton (UK)-force/sq.foot">ton (UK)-force/sq.foot</option>
<option value="ton (UK)-force/sq.inch">ton (UK)-force/sq.inch</option>
<option value="ton (US)-force/sq.foot">on (US)-force/sq.foot</option>
<option value="ton (US)-force/sq.inch">ton (US)-force/sq.inch</option>
<option value="tonelada-força/centímetro quadrado">tonelada-força/centímetro quadrado</option>
<option value="tonelada-força/metro quadrado">tonelada-força/metro quadrado</option>
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
<option value="Réaumure">Réaumure</option>

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
<option value="Réaumure">Réaumure</option>
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
<option value="dyne/centímetro">dyne/centímetro</option>
<option value="grama/centímetro">grama/centímetro</option>
<option value="quilograma/centímetro">quilograma/centímetro</option>
<option value="quilograma/metro">quilograma/metro</option>
<option value="quilonewton/metro">quilonewton/metro</option>
<option value="kilopond/metro">kilopond/metro</option>
<option value="meganewton/metro">meganewton/metro</option>
<option value="micronewton/metro">micronewton/metro</option>
<option value="milinewton/metro">milinewton/metro</option>
<option value="newton/centimetro">newton/centimetro</option>
<option value="newton/metro">newton/metro </option>
<option value="onça/pé">onça/pé</option>
<option value="onça/polegada">onça/polegada</option>
<option value="libra/pé">libra/pé</option>
<option value="poundal/foot">poundal/foot</option>
<option value="libra/polegada">libra/polegada</option>

</select>
</td></tr>

<tr><td style="width:120" bgcolor="#F5F5F5"><a class="con">Para:</a></td>

<td>
<select name="unidade2">
<option value="<?=$_POST['unidade2']?>"><?=$_POST['unidade2']?></option>
<option value="dyne/centímetro">dyne/centímetro</option>
<option value="grama/centímetro">grama/centímetro</option>
<option value="quilograma/centímetro">quilograma/centímetro</option>
<option value="quilograma/metro">quilograma/metro</option>
<option value="quilonewton/metro">quilonewton/metro</option>
<option value="kilopond/metro">kilopond/metro</option>
<option value="meganewton/metro">meganewton/metro</option>
<option value="micronewton/metro">micronewton/metro</option>
<option value="milinewton/metro">milinewton/metro</option>
<option value="newton/centimetro">newton/centimetro</option>
<option value="newton/metro">newton/metro </option>
<option value="onça/pé">onça/pé</option>
<option value="onça/polegada">onça/polegada</option>
<option value="libra/pé">libra/pé</option>
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
<option value="centímetro cúbico">centímetro cúbico</option>
<option value="decímetro cúbico">decímetro cúbico</option>
<option value="decâmetro cúbico">decâmetro cúbico</option>
<option value="pé cúbico">pé cúbico</option>
<option value="polegada cúbica">polegada cúbica</option>
<option value="metro cúbico">metro cúbico</option>
<option value="milímetro cúbico">milímetro cúbico</option>
<option value="jarda cúbica">jarda cúbica</option>
<option value="decilitro [dl]">decilitro [dl]</option>
<option value="fluid once (UK)">fluid once (UK)</option>
<option value="fluid once (US)">fluid once (US)</option>
<option value="galão (UK)">galão (UK)</option>
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
<option value="centímetro cúbico">centímetro cúbico</option>
<option value="decímetro cúbico">decímetro cúbico</option>
<option value="decâmetro cúbico">decâmetro cúbico</option>
<option value="pé cúbico">pé cúbico</option>
<option value="polegada cúbica">polegada cúbica</option>
<option value="metro cúbico">metro cúbico</option>
<option value="milímetro cúbico">milímetro cúbico</option>
<option value="jarda cúbica">jarda cúbica</option>
<option value="decilitro [dl]">decilitro [dl]</option>
<option value="fluid once (UK)">fluid once (UK)</option>
<option value="fluid once (US)">fluid once (US)</option>
<option value="galão (UK)">galão (UK)</option>
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
