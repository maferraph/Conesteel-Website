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
   <a class="texto3"> 	 Se��o dedicada a calcular a perda de carga de uma v�lvula. Basta informar os dados da v�lvula (tipo, classe e bitola) e a vaz�o.</a>
   </td></tr>
   </table>

    <table><tr><td style="height:5"></td></tr></table>

<table border="0" cellpadding="0" cellspacing="0" width="565">
<tr><td bgcolor="f9f9f9" align="center">
<img src="imagens/icona.jpg" border="0"> <a class="texto2">Os valores c�lculados s�o aproximados da realidade e n�o exatos, pois dependem de diversas vari�veis que podem alterar seu valor no decorrer do tempo de utiliza��o do material, como por exemplo mudan�a de temperatura ou press�o do fluido, rugosidade do material e etc...</a><br><br>
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
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;V�lvula:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">

<select name="sel_valvula" style="width:155">
<option value=""></option>
<option value="gaveta"  <?if ($_POST['sel_valvula'] == "gaveta") echo "selected";?> >V�lvula Gaveta</option>
<option value="globo"  <?if ($_POST['sel_valvula'] == "globo") echo "selected";?> >V�lvula Globo</option>
<option value="pistao" <?if ($_POST['sel_valvula'] == "pistao") echo "selected";?> >V�lvula Reten��o Pist�o</option>
<option value="portinhola" <?if ($_POST['sel_valvula'] == "portinhola") echo "selected";?> >V�lvula Reten��o Portinhola</option>
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
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Vaz�o:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155"><input type="text" name="txt_vazao" value="<?=$_POST['txt_vazao']?>"></td>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Unidade:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">

<select name="sel_unidade_vazao">
<option value="<?=$_POST['sel_unidade_vazao']?>"><?=$_POST['sel_unidade_vazao']?></option>
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
<option value="metro c�bico/segundo" <?if (!$_POST['sel_unidade_vazao']) echo "selected";?>>metro c�bico/segundo</option>
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
</td>
<td bgcolor="f9f9f9" align="right" style="height:50; width:50"></td>
</tr>


<tr>
<td colspan="5" bgcolor="f9f9f9" style="height:30" align="center"><a class="destaque">&nbsp; *Escolha abaixo o fluido, caso n�o selecionar, utilizaremos a �gua para calcular. Se quiser, escolha a unidade de press�o para a resposta.</a></td>
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
   <option<? if ($_POST['sel_fluido']==$res_fluido['ID']) echo " selected ";?> value="<?=$res_fluido['ID']?>" style="color:#004F9D"><?=$fluido?> � <?=$temp?>�C</option>

   <?   }    ?>

   </select>




</td>
<td bgcolor="f9f9f9" style="height:30; width:105" align="center"><a class="formulario">&nbsp;Unidade de Press�o:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">


<select name="sel_unidade_pressao">
<option value="<?=$_POST['sel_unidade_pressao']?>"><?=$_POST['sel_unidade_pressao']?></option>
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
<option value="newton/metro quadrado" <? if (!$_POST['sel_unidade_pressao']) echo "selected"; ?>>newton/metro quadrado</option>
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

echo "<a class=\"con2\">Ops! Voc� n�o selecionou a v�lvula!</a></td>";


} else if(!$classe) {

echo "<a class=\"con2\">Ops! Voc� n�o selecionou a classe!</a></td>";

} else if(!$bitola) {

echo "<a class=\"con2\">Ops! Voc� n�o selecionou a bitola!</a></td>";

} else if(!$vazao) {

echo "<a class=\"con2\">Ops! Voc� n�o digitou a vaz�o!</a></td>";

} else if((($classe=="1500") && (($valvula=="gaveta") || ($valvula=="globo") || ($valvula=="pistao"))) && (($bitola!="1/2") || ($bitola!="3/4") || ($bitola!="1") || ($bitola!="1.1/2"))) {

echo "<a class=\"con2\">A v�lvula que voc� escolheu n�o corresponde com a classe!</a></td>";

} else if(($classe!="800") && ($valvula=="portinhola")) {

echo "<a class=\"con2\">A v�lvula que voc� escolheu n�o corresponde com a classe!</a></td>";


} else if((($classe=="1500") && ($valvula=="gaveta")) && (($bitola!="1/2") || ($bitola!="3/4") || ($bitola!="1"))) {

echo "<a class=\"con2\">A v�lvula que voc� escolheu n�o corresponde com a classe!</a></td>";

} else if((($classe=="1500") && (($valvula=="pistao") || ($valvula=="globo"))) && (($bitola!="1/2") || ($bitola!="3/4") || ($bitola!="1") || ($bitola!="1.1/2"))) {

echo "<a class=\"con2\">A v�lvula que voc� escolheu n�o corresponde com a classe!</a></td>";

} else if((($bitola=="1/4") || ($bitola=="3/8")) && ($valvula=="portinhola")) {

echo "<a class=\"con2\">A v�lvula que voc� escolheu n�o corresponde com a classe!</a></td>";

} else {

if (!$_POST['sel_fluido']) {

echo "<a class=\"destaque\">Voc� n�o selecionou o fluido, por isso foi utilizado a �gua � 20�C para fazer o c�lculo!</a><br><br>";

}

echo "<a class=\"con\">";

echo "Densidade: ".($densidade * 1000)." Kg/m�<br><br>";

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
