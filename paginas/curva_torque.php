<?

include_once('includes/conversor.php');

if ($_POST['unidade']=="") $_POST['unidade']="newton/metro";

function Transforma_Torque($valor, $unidade) {
$valor     = ToSI_Tor($valor, "newton/metro");
$resultado = FromSI_Tor($valor, $unidade);
$resultado = abrevia2($resultado, 8);
$resultado = str_replace(".", ",", $resultado);
echo $resultado;
}


?>

<table><tr><td style="height:5"></td></tr></table>

<table border="0" cellpadding="0" cellspacing="0" width="570">
  <tr>
   <td><img src="imagens/meio/spacer.gif" width="570" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td><img name="tabela3_r1_c1" src="imagens/curva_tb.jpg" width="570" height="52" border="0" id="tabela3_r1_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="34" border="0" alt="" /></td>
  </tr>
  <tr>
   <td background="imagens/meio/fundo_tb1.jpg">
   


   <center>

   <table>
   <tr><td style="width:110" align="center" valign="center">
   <img src="imagens/curva_torque.gif" border="0">
   </td><td>
   <a class="texto3"> 	Veja a relação entre o deslocamento de acionamento e fechamento da válvula com o torque aplicado.</a>
   </td></tr>
   </table>
   <br>

<img src="imagens/tit_dados.gif" width="565" height="21" border="0"><br><br>

<form name="torque"  method="post" action="?pag=curva_torque#resultado">
<table border="0">
<tr>
<td><a class="formulario">Válvula:</a></td>
<td><select name="valvula"><option value="Gaveta">Gaveta</option></select></td>
</tr>
<tr><td heigt="10"></td></tr>
<tr>
<td><a class="formulario">Bitola:</a></td>
<td>
<select name="bitola">
<option value="1">1/2"</option>
<option value="2" <?if ($_POST['bitola']=="2") echo "selected";?>>3/4"</option>
<option value="3" <?if ($_POST['bitola']=="3") echo "selected";?>>1"</option>
<option value="4" <?if ($_POST['bitola']=="4") echo "selected";?>>1.1/2"</option>
<option value="5" <?if ($_POST['bitola']=="5") echo "selected";?>>2"</option>
</select>
</td>
</tr>
<tr><td heigt="10"></td></tr>
<tr>
<td><a class="formulario">Pressão:</a></td>
<td>
<select name="pressao">
<option>Sem Pressão</option>
<option <?if ($_POST['pressao']=="Com Pressão") echo "selected";?>>Com Pressão</option>
</select>
</td>
</tr>
<tr><td heigt="10"></td></tr>
<tr>
<td><a class="formulario" name="lb_unidades">Unidade:</a></td>
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
<option value="newton/metro" <?if(!$_POST['unidade']) echo "selected";?>>newton/metro</option>
<option value="onça/pé">onça/pé</option>
<option value="onça/polegada">onça/polegada</option>
<option value="libra/pé">libra/pé</option>
<option value="poundal/foot">poundal/foot</option>
<option value="libra/polegada">libra/polegada</option>

</select>


</td>
</tr>
<tr>
<td bgcolor="#F1F1F1" colspan="2" align="center" height="40"><input type="submit" value="Mostrar Tabela e Gráfico"></td>
</tr>
</table>
</form>
<br>

<?
if ($_POST['bitola']==1) $bitola='1/2"';
if ($_POST['bitola']==2) $bitola='3/4"';
if ($_POST['bitola']==3) $bitola='1"';
if ($_POST['bitola']==4) $bitola='1.1/2"';
if ($_POST['bitola']==5) $bitola='2"';

?>


<? if (($_POST['valvula']=="Gaveta") &&  ($_POST['bitola']==1) &&  ($_POST['pressao']=="Sem Pressão")) { ?>

<a name="resultado"><img src="imagens/resultado.gif" border="0"></a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0" width="494">
  <tr>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="480" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="3"><img name="graf_torq_r1_c1" src="imagens/graf_torq_r1_c1.jpg" width="494" height="48" border="0" id="graf_torq_r1_c1" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="48" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="graf_torq_r2_c1" src="imagens/graf_torq_r2_c1.jpg" width="7" height="32" border="0" id="graf_torq_r2_c1" alt="" /></td>
   <td background="imagens/meio_grafico.jpg" width="480" height="25">


   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <? $janela = popup("paginas/grafico_torque.php?valv=".$_POST['valvula']."&bito=".$_POST['bitola']."&pres=".$_POST['pressao']."&uni=".$_POST['unidade']."", "1000", "610")?>
   <a <?=$janela?> class="mais2" href="#2">Ver Gráfico da Válvula <?echo $_POST["valvula"];?> de <?=$bitola?> <?echo $_POST["pressao"];?></a></td>
   </tr></table>


   </td>
   <td rowspan="2"><img name="graf_torq_r2_c3" src="imagens/graf_torq_r2_c3.jpg" width="7" height="32" border="0" id="graf_torq_r2_c3" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="25" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="graf_torq_r3_c2" src="imagens/graf_torq_r3_c2.jpg" width="480" height="7" border="0" id="graf_torq_r3_c2" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="7" border="0" alt="" /></td>
  </tr>
</table>
<br>

<a class="con">Válvula Gaveta - 1/2" - Sem Pressão:</a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0">
<tr style="height:30">
<td align="center" width="190"></a></td>
<td align="center" width="30">&nbsp;&nbsp;</td>
<td align="center" width="190" align="center">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?echo $_POST['unidade'];?>)</a></td>
</tr>
</table>
</a></td>
</tr>
</table>

   <table border="1" cellpadding="3" cellspacing="0">
   <tr><td>
   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">

   <tr style="height:30">
   <td align="center" width="190"><a class="con"><img src="imagens/descricao.jpg"></a></td>
   <td align="center" width="10">&nbsp;&nbsp;</td>
   <td align="center" width="190"><a class="con"><img src="imagens/torque.jpg"></a></td>
   </tr>

   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("30",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("23",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>7 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Contra Vedação</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("15",$_POST["unidade"]);?></a</td>
   </tr>
      <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("12.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>7 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("30",$_POST["unidade"]);?></a</td>
   </tr>
   </table>
   </td></tr>
   </table>
   
   <? } ?>
   
   
<? if (($_POST['valvula']=="Gaveta") &&  ($_POST['bitola']==1) &&  ($_POST['pressao']=="Com Pressão")) { ?>

<a name="resultado"><img src="imagens/resultado.gif" border="0"></a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0" width="494">
  <tr>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="480" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="3"><img name="graf_torq_r1_c1" src="imagens/graf_torq_r1_c1.jpg" width="494" height="48" border="0" id="graf_torq_r1_c1" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="48" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="graf_torq_r2_c1" src="imagens/graf_torq_r2_c1.jpg" width="7" height="32" border="0" id="graf_torq_r2_c1" alt="" /></td>
   <td background="imagens/meio_grafico.jpg" width="480" height="25">


   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <? $janela = popup("paginas/grafico_torque.php?valv=".$_POST['valvula']."&bito=".$_POST['bitola']."&pres=".$_POST['pressao']."&uni=".$_POST['unidade']."", "1000", "610")?>
   <a <?=$janela?> class="mais2" href="#2">Ver Gráfico da Válvula <?echo $_POST["valvula"];?> de <?=$bitola?> <?echo $_POST["pressao"];?></a></td>
   </tr></table>


   </td>
   <td rowspan="2"><img name="graf_torq_r2_c3" src="imagens/graf_torq_r2_c3.jpg" width="7" height="32" border="0" id="graf_torq_r2_c3" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="25" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="graf_torq_r3_c2" src="imagens/graf_torq_r3_c2.jpg" width="480" height="7" border="0" id="graf_torq_r3_c2" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="7" border="0" alt="" /></td>
  </tr>
</table>
<br>

<a class="con">Válvula Gaveta - 1/2" - Com Pressão:</a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0">
<tr style="height:30">
<td align="center" width="190"></a></td>
<td align="center" width="30">&nbsp;&nbsp;</td>
<td align="center" width="190" align="center">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?echo $_POST['unidade'];?>)</a></td>
</tr>
</table>
</a></td>
</tr>
</table>

   <table border="1" cellpadding="3" cellspacing="0">
   <tr><td>
   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">

   <tr style="height:30">
   <td align="center" width="190"><a class="con"><img src="imagens/descricao.jpg"></a></td>
   <td align="center" width="10">&nbsp;&nbsp;</td>
   <td align="center" width="190"><a class="con"><img src="imagens/torque.jpg"></a></td>
   </tr>

   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("30",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("24",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>7 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Contra Vedação</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("15",$_POST["unidade"]);?></a</td>
   </tr>
      <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("13",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>7 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("30",$_POST["unidade"]);?></a</td>
   </tr>
   </table>
   </td></tr>
   </table>

   <? } ?>
   
   
<? if (($_POST['valvula']=="Gaveta") &&  ($_POST['bitola']==2) &&  ($_POST['pressao']=="Com Pressão")) { ?>

<a name="resultado"><img src="imagens/resultado.gif" border="0"></a>
<br><br>


<table border="0" cellpadding="0" cellspacing="0" width="494">
  <tr>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="480" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="3"><img name="graf_torq_r1_c1" src="imagens/graf_torq_r1_c1.jpg" width="494" height="48" border="0" id="graf_torq_r1_c1" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="48" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="graf_torq_r2_c1" src="imagens/graf_torq_r2_c1.jpg" width="7" height="32" border="0" id="graf_torq_r2_c1" alt="" /></td>
   <td background="imagens/meio_grafico.jpg" width="480" height="25">


   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <? $janela = popup("paginas/grafico_torque.php?valv=".$_POST['valvula']."&bito=".$_POST['bitola']."&pres=".$_POST['pressao']."&uni=".$_POST['unidade']."", "1000", "610")?>
   <a <?=$janela?> class="mais2" href="#2">Ver Gráfico da Válvula <?echo $_POST["valvula"];?> de <?=$bitola?> <?echo $_POST["pressao"];?></a></td>
   </tr></table>


   </td>
   <td rowspan="2"><img name="graf_torq_r2_c3" src="imagens/graf_torq_r2_c3.jpg" width="7" height="32" border="0" id="graf_torq_r2_c3" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="25" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="graf_torq_r3_c2" src="imagens/graf_torq_r3_c2.jpg" width="480" height="7" border="0" id="graf_torq_r3_c2" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="7" border="0" alt="" /></td>
  </tr>
</table>
<br>

<a class="con">Válvula Gaveta - 3/4" - Com Pressão:</a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0">
<tr style="height:30">
<td align="center" width="190"></a></td>
<td align="center" width="30">&nbsp;&nbsp;</td>
<td align="center" width="190" align="center">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?echo $_POST['unidade'];?>)</a></td>
</tr>
</table>
</a></td>
</tr>
</table>


   <table border="1" cellpadding="3" cellspacing="0">
   <tr><td>
   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">

   <tr style="height:30">
   <td align="center" width="190"><a class="con"><img src="imagens/descricao.jpg"></a></td>
   <td align="center" width="10">&nbsp;&nbsp;</td>
   <td align="center" width="190"><a class="con"><img src="imagens/torque.jpg"></a></td>
   </tr>

   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("30",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("23.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>9 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Contra Vedação</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("15",$_POST["unidade"]);?></a</td>
   </tr>
      <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("13",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>9 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("30",$_POST["unidade"]);?></a</td>
   </tr>
   </table>
   </td></tr>
   </table>

   <? } ?>
   
   
<? if (($_POST['valvula']=="Gaveta") &&  ($_POST['bitola']==2) &&  ($_POST['pressao']=="Sem Pressão")) { ?>

<a name="resultado"><img src="imagens/resultado.gif" border="0"></a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0" width="494">
  <tr>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="480" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="3"><img name="graf_torq_r1_c1" src="imagens/graf_torq_r1_c1.jpg" width="494" height="48" border="0" id="graf_torq_r1_c1" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="48" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="graf_torq_r2_c1" src="imagens/graf_torq_r2_c1.jpg" width="7" height="32" border="0" id="graf_torq_r2_c1" alt="" /></td>
   <td background="imagens/meio_grafico.jpg" width="480" height="25">


   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <? $janela = popup("paginas/grafico_torque.php?valv=".$_POST['valvula']."&bito=".$_POST['bitola']."&pres=".$_POST['pressao']."&uni=".$_POST['unidade']."", "1000", "610")?>
   <a <?=$janela?> class="mais2" href="#2">Ver Gráfico da Válvula <?echo $_POST["valvula"];?> de <?=$bitola?> <?echo $_POST["pressao"];?></a></td>
   </tr></table>


   </td>
   <td rowspan="2"><img name="graf_torq_r2_c3" src="imagens/graf_torq_r2_c3.jpg" width="7" height="32" border="0" id="graf_torq_r2_c3" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="25" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="graf_torq_r3_c2" src="imagens/graf_torq_r3_c2.jpg" width="480" height="7" border="0" id="graf_torq_r3_c2" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="7" border="0" alt="" /></td>
  </tr>
</table>
<br>

<a class="con">Válvula Gaveta - 3/4" - Sem Pressão:</a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0">
<tr style="height:30">
<td align="center" width="190"></a></td>
<td align="center" width="30">&nbsp;&nbsp;</td>
<td align="center" width="190" align="center">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?echo $_POST['unidade'];?>)</a></td>
</tr>
</table>
</a></td>
</tr>
</table>

   <table border="1" cellpadding="3" cellspacing="0">
   <tr><td>
   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">

   <tr style="height:30">
   <td align="center" width="190"><a class="con"><img src="imagens/descricao.jpg"></a></td>
   <td align="center" width="10">&nbsp;&nbsp;</td>
   <td align="center" width="190"><a class="con"><img src="imagens/torque.jpg"></a></td>
   </tr>

   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("30",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("24",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>9 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Contra Vedação</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("15",$_POST["unidade"]);?></a</td>
   </tr>
      <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("13",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>9 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("2.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("30",$_POST["unidade"]);?></a</td>
   </tr>
   </table>
   </td></tr>
   </table>

   <? } ?>
   
<? if (($_POST['valvula']=="Gaveta") &&  ($_POST['bitola']==3) &&  ($_POST['pressao']=="Sem Pressão")) { ?>

<a name="resultado"><img src="imagens/resultado.gif" border="0"></a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0" width="494">
  <tr>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="480" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="3"><img name="graf_torq_r1_c1" src="imagens/graf_torq_r1_c1.jpg" width="494" height="48" border="0" id="graf_torq_r1_c1" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="48" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="graf_torq_r2_c1" src="imagens/graf_torq_r2_c1.jpg" width="7" height="32" border="0" id="graf_torq_r2_c1" alt="" /></td>
   <td background="imagens/meio_grafico.jpg" width="480" height="25">


   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <? $janela = popup("paginas/grafico_torque.php?valv=".$_POST['valvula']."&bito=".$_POST['bitola']."&pres=".$_POST['pressao']."&uni=".$_POST['unidade']."", "1000", "610")?>
   <a <?=$janela?> class="mais2" href="#2">Ver Gráfico da Válvula <?echo $_POST["valvula"];?> de <?=$bitola?> <?echo $_POST["pressao"];?></a></td>
   </tr></table>


   </td>
   <td rowspan="2"><img name="graf_torq_r2_c3" src="imagens/graf_torq_r2_c3.jpg" width="7" height="32" border="0" id="graf_torq_r2_c3" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="25" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="graf_torq_r3_c2" src="imagens/graf_torq_r3_c2.jpg" width="480" height="7" border="0" id="graf_torq_r3_c2" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="7" border="0" alt="" /></td>
  </tr>
</table>
<br>

<a class="con">Válvula Gaveta - 1" - Sem Pressão:</a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0">
<tr style="height:30">
<td align="center" width="190"></a></td>
<td align="center" width="30">&nbsp;&nbsp;</td>
<td align="center" width="190" align="center">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?echo $_POST['unidade'];?>)</a></td>
</tr>
</table>
</a></td>
</tr>
</table>

   <table border="1" cellpadding="3" cellspacing="0">
   <tr><td>
   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">

   <tr style="height:30">
   <td align="center" width="190"><a class="con"><img src="imagens/descricao.jpg"></a></td>
   <td align="center" width="10">&nbsp;&nbsp;</td>
   <td align="center" width="190"><a class="con"><img src="imagens/torque.jpg"></a></td>
   </tr>

   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("50",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("38",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>10 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>11 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Contra Vedação</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("25",$_POST["unidade"]);?></a</td>
   </tr>
      <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("19",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>10 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>11 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("50",$_POST["unidade"]);?></a</td>
   </tr>
   </table>
   </td></tr>
   </table>

   <? } ?>
   
<? if (($_POST['valvula']=="Gaveta") &&  ($_POST['bitola']==3) &&  ($_POST['pressao']=="Com Pressão")) { ?>

<a name="resultado"><img src="imagens/resultado.gif" border="0"></a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0" width="494">
  <tr>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="480" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="3"><img name="graf_torq_r1_c1" src="imagens/graf_torq_r1_c1.jpg" width="494" height="48" border="0" id="graf_torq_r1_c1" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="48" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="graf_torq_r2_c1" src="imagens/graf_torq_r2_c1.jpg" width="7" height="32" border="0" id="graf_torq_r2_c1" alt="" /></td>
   <td background="imagens/meio_grafico.jpg" width="480" height="25">


   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <? $janela = popup("paginas/grafico_torque.php?valv=".$_POST['valvula']."&bito=".$_POST['bitola']."&pres=".$_POST['pressao']."&uni=".$_POST['unidade']."", "1000", "610")?>
   <a <?=$janela?> class="mais2" href="#2">Ver Gráfico da Válvula <?echo $_POST["valvula"];?> de <?=$bitola?> <?echo $_POST["pressao"];?></a></td>
   </tr></table>


   </td>
   <td rowspan="2"><img name="graf_torq_r2_c3" src="imagens/graf_torq_r2_c3.jpg" width="7" height="32" border="0" id="graf_torq_r2_c3" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="25" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="graf_torq_r3_c2" src="imagens/graf_torq_r3_c2.jpg" width="480" height="7" border="0" id="graf_torq_r3_c2" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="7" border="0" alt="" /></td>
  </tr>
</table>
<br>

<a class="con">Válvula Gaveta - 1" - Com Pressão:</a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0">
<tr style="height:30">
<td align="center" width="190"></a></td>
<td align="center" width="30">&nbsp;&nbsp;</td>
<td align="center" width="190" align="center">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?echo $_POST['unidade'];?>)</a></td>
</tr>
</table>
</a></td>
</tr>
</table>

   <table border="1" cellpadding="3" cellspacing="0">
   <tr><td>
   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">

   <tr style="height:30">
   <td align="center" width="190"><a class="con"><img src="imagens/descricao.jpg"></a></td>
   <td align="center" width="10">&nbsp;&nbsp;</td>
   <td align="center" width="190"><a class="con"><img src="imagens/torque.jpg"></a></td>
   </tr>

   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("50",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("38.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>10 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>11 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Contra Vedação</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("25",$_POST["unidade"]);?></a</td>
   </tr>
      <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("21.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>10 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>11 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("50",$_POST["unidade"]);?></a</td>
   </tr>
   </table>
   </td></tr>
   </table>

   <? } ?>
   
   <? if (($_POST['valvula']=="Gaveta") &&  ($_POST['bitola']==4) &&  ($_POST['pressao']=="Sem Pressão")) { ?>

<a name="resultado"><img src="imagens/resultado.gif" border="0"></a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0" width="494">
  <tr>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="480" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="3"><img name="graf_torq_r1_c1" src="imagens/graf_torq_r1_c1.jpg" width="494" height="48" border="0" id="graf_torq_r1_c1" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="48" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="graf_torq_r2_c1" src="imagens/graf_torq_r2_c1.jpg" width="7" height="32" border="0" id="graf_torq_r2_c1" alt="" /></td>
   <td background="imagens/meio_grafico.jpg" width="480" height="25">


   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <? $janela = popup("paginas/grafico_torque.php?valv=".$_POST['valvula']."&bito=".$_POST['bitola']."&pres=".$_POST['pressao']."&uni=".$_POST['unidade']."", "1000", "610")?>
   <a <?=$janela?> class="mais2" href="#2">Ver Gráfico da Válvula <?echo $_POST["valvula"];?> de <?=$bitola?> <?echo $_POST["pressao"];?></a></td>
   </tr></table>


   </td>
   <td rowspan="2"><img name="graf_torq_r2_c3" src="imagens/graf_torq_r2_c3.jpg" width="7" height="32" border="0" id="graf_torq_r2_c3" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="25" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="graf_torq_r3_c2" src="imagens/graf_torq_r3_c2.jpg" width="480" height="7" border="0" id="graf_torq_r3_c2" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="7" border="0" alt="" /></td>
  </tr>
</table>
<br>

<a class="con">Válvula Gaveta - 1.1/2" - Sem Pressão:</a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0">
<tr style="height:30">
<td align="center" width="190"></a></td>
<td align="center" width="30">&nbsp;&nbsp;</td>
<td align="center" width="190" align="center">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?echo $_POST['unidade'];?>)</a></td>
</tr>
</table>
</a></td>
</tr>
</table>

   <table border="1" cellpadding="3" cellspacing="0">
   <tr><td>
   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">

   <tr style="height:30">
   <td align="center" width="190"><a class="con"><img src="imagens/descricao.jpg"></a></td>
   <td align="center" width="10">&nbsp;&nbsp;</td>
   <td align="center" width="190"><a class="con"><img src="imagens/torque.jpg"></a></td>
   </tr>

   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("80",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("70",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>10 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>11 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("3.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Contra Vedação</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("30",$_POST["unidade"]);?></a</td>
   </tr>
      <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("24",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("5.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("5",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("5",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>10 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>11 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("80",$_POST["unidade"]);?></a</td>
   </tr>
   </table>
   </td></tr>
   </table>

   <? } ?>
   
   
   
   <? if (($_POST['valvula']=="Gaveta") &&  ($_POST['bitola']==4) &&  ($_POST['pressao']=="Com Pressão")) { ?>

<a name="resultado"><img src="imagens/resultado.gif" border="0"></a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0" width="494">
  <tr>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="480" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="3"><img name="graf_torq_r1_c1" src="imagens/graf_torq_r1_c1.jpg" width="494" height="48" border="0" id="graf_torq_r1_c1" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="48" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="graf_torq_r2_c1" src="imagens/graf_torq_r2_c1.jpg" width="7" height="32" border="0" id="graf_torq_r2_c1" alt="" /></td>
   <td background="imagens/meio_grafico.jpg" width="480" height="25">


   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <? $janela = popup("paginas/grafico_torque.php?valv=".$_POST['valvula']."&bito=".$_POST['bitola']."&pres=".$_POST['pressao']."&uni=".$_POST['unidade']."", "1000", "610")?>
   <a <?=$janela?> class="mais2" href="#2">Ver Gráfico da Válvula <?echo $_POST["valvula"];?> de <?=$bitola?> <?echo $_POST["pressao"];?></a></td>
   </tr></table>


   </td>
   <td rowspan="2"><img name="graf_torq_r2_c3" src="imagens/graf_torq_r2_c3.jpg" width="7" height="32" border="0" id="graf_torq_r2_c3" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="25" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="graf_torq_r3_c2" src="imagens/graf_torq_r3_c2.jpg" width="480" height="7" border="0" id="graf_torq_r3_c2" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="7" border="0" alt="" /></td>
  </tr>
</table>
<br>

<a class="con">Válvula Gaveta - 1.1/2" - Com Pressão:</a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0">
<tr style="height:30">
<td align="center" width="190"></a></td>
<td align="center" width="30">&nbsp;&nbsp;</td>
<td align="center" width="190" align="center">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?echo $_POST['unidade'];?>)</a></td>
</tr>
</table>
</a></td>
</tr>
</table>

   <table border="1" cellpadding="3" cellspacing="0">
   <tr><td>
   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">

   <tr style="height:30">
   <td align="center" width="190"><a class="con"><img src="imagens/descricao.jpg"></a></td>
   <td align="center" width="10">&nbsp;&nbsp;</td>
   <td align="center" width="190"><a class="con"><img src="imagens/torque.jpg"></a></td>
   </tr>

   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("80",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("75",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("9.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("9.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("9.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("9.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>10 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("9.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>11 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("9.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Contra Vedação</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("30",$_POST["unidade"]);?></a</td>
   </tr>
      <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("25.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("15.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("16",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("16.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("16.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>10 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("17",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>11 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("17.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("80",$_POST["unidade"]);?></a</td>
   </tr>
   </table>
   </td></tr>
   </table>

   <? } ?>
   

<? if (($_POST['valvula']=="Gaveta") &&  ($_POST['bitola']==5) &&  ($_POST['pressao']=="Sem Pressão")) { ?>

<a name="resultado"><img src="imagens/resultado.gif" border="0"></a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0" width="494">
  <tr>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="480" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="3"><img name="graf_torq_r1_c1" src="imagens/graf_torq_r1_c1.jpg" width="494" height="48" border="0" id="graf_torq_r1_c1" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="48" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="graf_torq_r2_c1" src="imagens/graf_torq_r2_c1.jpg" width="7" height="32" border="0" id="graf_torq_r2_c1" alt="" /></td>
   <td background="imagens/meio_grafico.jpg" width="480" height="25">


   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <? $janela = popup("paginas/grafico_torque.php?valv=".$_POST['valvula']."&bito=".$_POST['bitola']."&pres=".$_POST['pressao']."&uni=".$_POST['unidade']."", "1000", "610")?>
   <a <?=$janela?> class="mais2" href="#2">Ver Gráfico da Válvula <?echo $_POST["valvula"];?> de <?=$bitola?> <?echo $_POST["pressao"];?></a></td>
   </tr></table>


   </td>
   <td rowspan="2"><img name="graf_torq_r2_c3" src="imagens/graf_torq_r2_c3.jpg" width="7" height="32" border="0" id="graf_torq_r2_c3" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="25" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="graf_torq_r3_c2" src="imagens/graf_torq_r3_c2.jpg" width="480" height="7" border="0" id="graf_torq_r3_c2" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="7" border="0" alt="" /></td>
  </tr>
</table>
<br>

<a class="con">Válvula Gaveta - 2" - Sem Pressão:</a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0">
<tr style="height:30">
<td align="center" width="190"></a></td>
<td align="center" width="30">&nbsp;&nbsp;</td>
<td align="center" width="190" align="center">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?echo $_POST['unidade'];?>)</a></td>
</tr>
</table>
</a></td>
</tr>
</table>

   <table border="1" cellpadding="3" cellspacing="0">
   <tr><td>
   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">

   <tr style="height:30">
   <td align="center" width="190"><a class="con"><img src="imagens/descricao.jpg"></a></td>
   <td align="center" width="10">&nbsp;&nbsp;</td>
   <td align="center" width="190"><a class="con"><img src="imagens/torque.jpg"></a></td>
   </tr>

   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("80",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("70",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>10 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>12 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>13 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("4.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Contra Vedação</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("30",$_POST["unidade"]);?></a</td>
   </tr>
      <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("23.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("6.3",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>10 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("5.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>12 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("5.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>13 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("5.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("80",$_POST["unidade"]);?></a</td>
   </tr>
   </table>
   </td></tr>
   </table>

   <? } ?>
   
   
   <? if (($_POST['valvula']=="Gaveta") &&  ($_POST['bitola']==5) &&  ($_POST['pressao']=="Com Pressão")) { ?>

<a name="resultado"><img src="imagens/resultado.gif" border="0"></a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0" width="494">
  <tr>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="480" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="3"><img name="graf_torq_r1_c1" src="imagens/graf_torq_r1_c1.jpg" width="494" height="48" border="0" id="graf_torq_r1_c1" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="48" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="graf_torq_r2_c1" src="imagens/graf_torq_r2_c1.jpg" width="7" height="32" border="0" id="graf_torq_r2_c1" alt="" /></td>
   <td background="imagens/meio_grafico.jpg" width="480" height="25">


   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <? $janela = popup("paginas/grafico_torque.php?valv=".$_POST['valvula']."&bito=".$_POST['bitola']."&pres=".$_POST['pressao']."&uni=".$_POST['unidade']."", "1000", "610")?>
   <a <?=$janela?> class="mais2" href="#2">Ver Gráfico da Válvula <?echo $_POST["valvula"];?> de <?=$bitola?> <?echo $_POST["pressao"];?></a></td>
   </tr></table>


   </td>
   <td rowspan="2"><img name="graf_torq_r2_c3" src="imagens/graf_torq_r2_c3.jpg" width="7" height="32" border="0" id="graf_torq_r2_c3" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="25" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="graf_torq_r3_c2" src="imagens/graf_torq_r3_c2.jpg" width="480" height="7" border="0" id="graf_torq_r3_c2" alt="" /></td>
   <td><img src="imagens/spacer.gif" width="1" height="7" border="0" alt="" /></td>
  </tr>
</table>
<br>

<a class="con">Válvula Gaveta - 2" - Com Pressão:</a>
<br><br>

<table border="0" cellpadding="0" cellspacing="0">
<tr style="height:30">
<td align="center" width="190"></a></td>
<td align="center" width="30">&nbsp;&nbsp;</td>
<td align="center" width="190" align="center">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?echo $_POST['unidade'];?>)</a></td>
</tr>
</table>
</a></td>
</tr>
</table>

   <table border="1" cellpadding="3" cellspacing="0">
   <tr><td>
   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">

   <tr style="height:30">
   <td align="center" width="190"><a class="con"><img src="imagens/descricao.jpg"></a></td>
   <td align="center" width="10">&nbsp;&nbsp;</td>
   <td align="center" width="190"><a class="con"><img src="imagens/torque.jpg"></a></td>
   </tr>

   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("80",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("75",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("7",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("7",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("7",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("7",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>10 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("7",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>12 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("7",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>13 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("7",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Contra Vedação</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("30",$_POST["unidade"]);?></a</td>
   </tr>
      <tr>
   <td align="center" height="25"><a class="menu"><strong>Crack Open</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("24.6",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>2 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("19",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>4 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("19",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>6 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("19",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>8 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("19",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>10 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("19",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>12 Voltas</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("19",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>13 Voltas e 1/2</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("19",$_POST["unidade"]);?></a</td>
   </tr>
   <tr>
   <tr>
   <td align="center" height="25"><a class="menu"><strong>Fechamento</strong></a></td>
   <td align="center" width="10"></td>
   <td align="center"><a class="menu"><? Transforma_Torque("80",$_POST["unidade"]);?></a</td>
   </tr>
   </table>
   </td></tr>
   </table>

   <? } ?>



   
   <br>
   <a class="texto1">OBS: Os dados apresentados foram obtidos através de testes práticos especificamente para as válvulas da Conesteel de (1/2" a 2").</a><br><br>
   <table><tr><td style="height:5"></td></tr></table>

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
