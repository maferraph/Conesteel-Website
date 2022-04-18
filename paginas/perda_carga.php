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
   <td><img name="tabela3_r1_c1" src="imagens/perda_carga_tb.jpg" width="570" height="52" border="0" id="tabela3_r1_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="34" border="0" alt="" /></td>
  </tr>
  <tr>
   <td background="imagens/meio/fundo_tb1.jpg">
   
   <center>

   <table>
   <tr><td style="width:110" align="center" valign="center">
   <img src="imagens/ico_perda.jpg" border="0">
   </td><td>
   <a class="texto3"> 	 Seção dedicada a calcular a perda de carga de uma válvula. Basta informar os dados da válvula (tipo, classe e bitola) e a vazão.</a>
   </td></tr>
   </table>

    <table><tr><td style="height:5"></td></tr></table>

<table border="0" cellpadding="0" cellspacing="0" width="565">
<tr><td bgcolor="f9f9f9" align="center">
<img src="imagens/icona.jpg" border="0"> <a class="texto2">Os valores cálculados são aproximados da realidade e não exatos, pois dependem de diversas variáveis que podem alterar seu valor no decorrer do tempo de utilização do material, como por exemplo mudança de temperatura ou pressão do fluido, rugosidade do material e etc...</a><br><br>
</td></tr>
</table>

    <table><tr><td style="height:5"></td></tr></table>

<table border="0" cellpadding="0" cellspacing="0" width="565">
<tr><td bgcolor="f9f9f9" align="center">
<img src="imagens/titulo_calculo.gif" border="0">
</td></tr>
<tr><td bgcolor="f9f9f9" align="center">
</td></tr>
</table>


<form name="unidades"  method="post" action="?pag=perda_carga#resultado">
<table border="0" cellpadding="0" cellspacing="0" width="565">
<tr>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Válvula:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">

<select name="sel_valvula" style="width:155">
<option value=""></option>
<option value="gaveta"  <?if ($_POST['sel_valvula'] == "gaveta") echo "selected";?> >Válvula Gaveta</option>
<option value="globo"  <?if ($_POST['sel_valvula'] == "globo") echo "selected";?> >Válvula Globo</option>
<option value="pistao" <?if ($_POST['sel_valvula'] == "pistao") echo "selected";?> >Válvula Retenção Pistão</option>
<option value="portinhola" <?if ($_POST['sel_valvula'] == "portinhola") echo "selected";?> >Válvula Retenção Portinhola</option>
</select>

</td>
<td bgcolor="f9f9f9" style="height:30; width:105"></td>
<td bgcolor="f9f9f9" style="height:30; width:155"></td>

<td bgcolor="f9f9f9" align="right" style="height:50; width:50"></td>
</tr>

<tr>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Classe:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">

<select name="sel_classe" style="width:155">
<option value="<?=$_POST['sel_classe']?>"><?=$_POST['sel_classe']?></option>
<option value="150">150</option>
<option value="300">300</option>
<option value="600">600</option>
<option value="800">800</option>
<option value="900">900</option>
<option value="1500">1500</option>
<option value="1500 FL">1500 FL</option>
</select>

</td>
<td bgcolor="f9f9f9" style="height:30; width:105"></td>
<td bgcolor="f9f9f9" style="height:30; width:155"></td>

<td bgcolor="f9f9f9" align="right" style="height:50; width:50"></td>
</tr>

<tr>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Bitola:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">

<select name="sel_bitola" style="width:155">
<option value=""></option>
<option value="1/4" <?if ($_POST['sel_bitola'] == "1/4") echo "selected";?>>1/4''</option>
<option value="3/8" <?if ($_POST['sel_bitola'] == "3/8") echo "selected";?>>3/8''</option>
<option value="1/2" <?if ($_POST['sel_bitola'] == "1/2") echo "selected";?>>1/2''</option>
<option value="3/4" <?if ($_POST['sel_bitola'] == "3/4") echo "selected";?>>3/4''</option>
<option value="1"   <?if ($_POST['sel_bitola'] == "1") echo "selected";?>>1''</option>
<option value="1.1/4" <?if ($_POST['sel_bitola'] == "1.1/4") echo "selected";?>>1.1/4''</option>
<option value="1.1/2" <?if ($_POST['sel_bitola'] == "1.1/2") echo "selected";?>>1.1/2''</option>
<option value="2" <?if ($_POST['sel_bitola'] == "2") echo "selected";?>>2''</option>
</select>

</td>
<td bgcolor="f9f9f9" style="height:30; width:105"></td>
<td bgcolor="f9f9f9" style="height:30; width:155">


</td>
<td bgcolor="f9f9f9" align="right" style="height:50; width:50"></td>
</tr>

<tr>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Vazão:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155"><input type="text" name="txt_vazao" value="<?=$_POST['txt_vazao']?>"></td>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Unidade:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">

<select name="sel_unidade_vazao">
<option value="<?=$_POST['sel_unidade_vazao']?>"><?=$_POST['sel_unidade_vazao']?></option>
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
<option value="metro cúbico/segundo" <?if (!$_POST['sel_unidade_vazao']) echo "selected";?>>metro cúbico/segundo</option>
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
</td>
<td bgcolor="f9f9f9" align="right" style="height:50; width:50"></td>
</tr>


<tr>
<td colspan="5" bgcolor="f9f9f9" style="height:30" align="center"><a class="destaque">&nbsp; *Escolha abaixo o fluido, caso não selecionar, utilizaremos a água para calcular. Se quiser, escolha a unidade de pressão para a resposta.</a></td>
</tr>


<tr>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Fluido:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">

<select name="sel_fluido" style="width:155">
<option value=""></option>

   <?

   $fluidos = mysql_query("SELECT * FROM perda_carga ORDER BY fluido", $conexao) or die($erroconsulta);

   while ($res_fluido  = mysql_fetch_array($fluidos))  {

   $fluido   =  $res_fluido['fluido'];
   
   $temp     =  $res_fluido['temperatura'];

   ?>
   <option<? if ($_POST['sel_fluido']==$res_fluido['ID']) echo " selected ";?> value="<?=$res_fluido['ID']?>" style="color:#004F9D"><?=$fluido?> à <?=$temp?>ºC</option>

   <?   }    ?>

   </select>




</td>
<td bgcolor="f9f9f9" style="height:30; width:105" align="center"><a class="formulario">&nbsp;Unidade de Pressão:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">


<select name="sel_unidade_pressao">
<option value="<?=$_POST['sel_unidade_pressao']?>"><?=$_POST['sel_unidade_pressao']?></option>
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
<option value="newton/metro quadrado" <? if (!$_POST['sel_unidade_pressao']) echo "selected"; ?>>newton/metro quadrado</option>
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


</td>
<td bgcolor="f9f9f9" align="right" style="height:50; width:50"></td>
</tr>

<tr>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario"></a></td>
<td bgcolor="f9f9f9" style="height:30; width:155"></td>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario"></a></td>
<td bgcolor="f9f9f9" style="height:30; width:155"></td>
<td bgcolor="f9f9f9" align="right" style="height:50; width:50"></td>
</tr>

<tr>
<td colspan="5" bgcolor="#F1F1F1" align="center" style="height:40"><input type="submit" name="btn_calcular" value="Calcular"></td>
</tr>


</table>
</form>

<table><tr><td style="height:5"></td></tr></table>

<!-- RESULTADO -->

<?

if ($_POST['btn_calcular']) {


$valvula     =  $_POST['sel_valvula'];
$bitola      =  $_POST['sel_bitola'];
$classe      =  $_POST['sel_classe'];
$vazao       =  $_POST['txt_vazao'];
$uni_vazao   =  $_POST['sel_unidade_vazao'];
$uni_pressao =  $_POST['sel_unidade_pressao'];
$fluido      =  $_POST['sel_fluido'];

if (!$fluido) $fluido = "145";

if(!(($classe!="800") && ($valvula=="portinhola"))) {

if(!((($bitola=="1/4") || ($bitola=="3/8")) && ($valvula=="portinhola"))) {

if ($valvula && $classe && $bitola && $vazao)  {


   $sel_coef = mysql_query("SELECT * FROM coeficiente_perda_carga WHERE Bitola = '$bitola'", $conexao) or die($erroconsulta);

   while ($res_coef  = mysql_fetch_array($sel_coef))  {

   $coeficiente    =  $res_coef[$valvula];

   }

   
   $sel_densi = mysql_query("SELECT densidade FROM perda_carga WHERE ID=$fluido", $conexao) or die($erroconsulta);

   while ($res_densi  = mysql_fetch_array($sel_densi))  {

   $densidade   =  $res_densi ['densidade'];

   }
   
   $sel_area = mysql_query("SELECT * FROM area_diametro_valvula WHERE valvula = '$valvula' AND bitola = '$bitola'", $conexao) or die($erroconsulta);

   while ($res_area  = mysql_fetch_array($sel_area))  {

   $area    =  $res_area['area'];

   }
   

 $vazao = ToSI_Flu($vazao, "$uni_vazao");

 $velocidade = ($vazao) / $area;

 $perda_carga = $coeficiente * 0.5 * ($densidade * 1000) * $velocidade * $velocidade * 0.00001;

 $perda_carga = ToSI_Press($perda_carga, "bar");
 
 $perda_carga = FromSI_Press($perda_carga, "$uni_pressao");

 $perda_carga = number_format($perda_carga, 10, ',', '');
 
 }
 
 }
 
 }





?>
 
<a name="resultado"><img src="imagens/resultado.gif" border="0"></a>
<table><tr><td style="height:5"></td></tr></table>


<table border="0" cellpadding="0" cellspacing="0" width="565">
<tr>
<td bgcolor="#F1F1F1" style="height:30" align="center">

<?


if (!$valvula)  {

echo "<a class=\"con2\">Ops! Você não selecionou a válvula!</a></td>";


} else if(!$classe) {

echo "<a class=\"con2\">Ops! Você não selecionou a classe!</a></td>";

} else if(!$bitola) {

echo "<a class=\"con2\">Ops! Você não selecionou a bitola!</a></td>";

} else if(!$vazao) {

echo "<a class=\"con2\">Ops! Você não digitou a vazão!</a></td>";

} else if((($classe=="1500") && (($valvula=="gaveta") || ($valvula=="globo") || ($valvula=="pistao"))) && (($bitola!="1/2") || ($bitola!="3/4") || ($bitola!="1") || ($bitola!="1.1/2"))) {

echo "<a class=\"con2\">A válvula que você escolheu não corresponde com a classe!</a></td>";

} else if(($classe!="800") && ($valvula=="portinhola")) {

echo "<a class=\"con2\">A válvula que você escolheu não corresponde com a classe!</a></td>";


} else if((($classe=="1500") && ($valvula=="gaveta")) && (($bitola!="1/2") || ($bitola!="3/4") || ($bitola!="1"))) {

echo "<a class=\"con2\">A válvula que você escolheu não corresponde com a classe!</a></td>";

} else if((($classe=="1500") && (($valvula=="pistao") || ($valvula=="globo"))) && (($bitola!="1/2") || ($bitola!="3/4") || ($bitola!="1") || ($bitola!="1.1/2"))) {

echo "<a class=\"con2\">A válvula que você escolheu não corresponde com a classe!</a></td>";

} else if((($bitola=="1/4") || ($bitola=="3/8")) && ($valvula=="portinhola")) {

echo "<a class=\"con2\">A válvula que você escolheu não corresponde com a classe!</a></td>";

} else {

if (!$_POST['sel_fluido']) {

echo "<a class=\"destaque\">Você não selecionou o fluido, por isso foi utilizado a água à 20ºC para fazer o cálculo!</a><br><br>";

}

echo "<a class=\"con\">";

echo "Densidade: ".($densidade * 1000)." Kg/m³<br><br>";

echo "Velocidade: ".$velocidade." m/s<br><br>";

echo "Perda de Carga = </a><a class=\"con2\">$perda_carga $uni_pressao</a></td>";

}

?>

</tr>
</table>

<table><tr><td style="height:5"></td></tr></table>



<? } ?>


<!-- FIM DO RESULTADO -->
 

   </center>
     


   </td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="123" border="0" alt="" /></td>
  </tr>
  <tr>
   <td background="imagens/meio/tabela3_r3_c1.jpg" align="right">
   


   <table><tr><td><img src="imagens/iconb.jpg" border="0"></td>
   <td ><a class="mais" href="javascript: history.go(-1)"> voltar...</a></td></tr>
   </table>




   </td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="23" border="0" alt="" /></td>
  </tr>
</table>

<table><tr><td style="height:5"></td></tr></table>
