<table><tr><td style="height:5"></td></tr></table>

<table border="0" cellpadding="0" cellspacing="0" width="570">
  <tr>
   <td><img src="imagens/meio/spacer.gif" width="570" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td><img name="tabela3_r1_c1" src="imagens/meio/corrosao_tb.jpg" width="570" height="52" border="0" id="tabela3_r1_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="34" border="0" alt="" /></td>
  </tr>
  <tr>
   <td background="imagens/meio/fundo_tb1.jpg">
   


<center>

 <table><tr><td style="height:5"></td></tr></table>

<table border="0" cellpadding="0" cellspacing="0" width="495">
<tr><td bgcolor="#f1f1f1" align="center">
<a class="texto2"><img src="imagens/icona.jpg" border="0"> As informações contidas nesta tabela tem como objetivo dar ao usuário uma idéia do comportamento dos fluidos em contato com diversos tipos de materiais. <br><br>

<a class="texto2"><img src="imagens/icona.jpg" border="0"> É impossível numa simples tabulação fornecer informações precisas, pois para isso é preciso que se conheça todas as condições específicas para cada aplicação, tais como as variações de temperatura, pressão, concentração, velocidade, impurezas, contaminação, graus de aeração e fadiga, etc. <br><br>
<a class="texto2"><img src="imagens/icona.jpg" border="0"> Portanto esta tabela deve ser utilizada sempre com a devida preocupação para não se cometer enganos que fatalmente podem incorrer em sérios prejuízos.<br><br>
<a class="texto2"><img src="imagens/icona.jpg" border="0"> Para uma escolha definitiva é importante consultar as normas referentes aos materiais de que compõe a válvula e que estejam em contato direto com o fluido.</a>
</td></tr>
</table>

<table><tr><td style="height:5"></td></tr></table>

<img src="imagens/legenda.jpg" border="0"><br>

<table><tr><td style="height:5"></td></tr></table>

<table border="0" cellpadding="0" cellspacing="0" width="495">
<tr><td bgcolor="#f1f1f1" align="center">
<a class="texto2"><img src="imagens/icona.jpg" border="0"> Você pode filtrar as informações selecionando abaixo apenas o fluido que deseja e/ou pelos resultados dos materiais.<br><strong>* </strong>T = TODOS</a>
</td></tr>
</table>

<table><tr><td style="height:5"></td></tr></table>

<a name="filtrar"><img src="imagens/filtro.jpg" border="0"></a>

   <table border="0" cellpadding="0" cellspacing="0" width="495">
   <form name="corrosao"  method="post" action="?pag=corrosao#filtrar">
   <tr>
   <td width="150">
   <select style="width:180" name="fluido">
   <option value=""></option>
   <option <? if ($_POST['fluido']=="") echo " selected ";?> value="">Todos</option>
   
   <?
   
   $fluidos = mysql_query("SELECT * FROM tabela_corrosao", $conexao) or die($erroconsulta);

   while ($res_fluido  = mysql_fetch_array($fluidos))  {

   $fluido   =  $res_fluido['fluido'];
   
   ?>
   <option<? if ($_POST['fluido']==$res_fluido['ID']) echo " selected ";?> value="<?=$res_fluido['ID']?>" style="color:#004F9D"><?=$fluido?></option>
   
   <?   }    ?>
   
   </select></td>


   <td width="35" >
   <select style="width:35" name="aco_carbono">
   <option value=""></option>
   <option <? if ($_POST['aco_carbono']=="")  echo "selected ";?>value="">T</option>
   <option <? if ($_POST['aco_carbono']=="A") echo "selected ";?>value="A" style="color:green">A</option>
   <option <? if ($_POST['aco_carbono']=="B") echo "selected ";?>value="B" style="color:#FF8951">B</option>
   <option <? if ($_POST['aco_carbono']=="C") echo "selected ";?>value="C" style="color:red">C</option>
   <option <? if ($_POST['aco_carbono']=="-") echo "selected ";?>value="-">-</option>
   </select></td>
   <td width="35" >
   <select style="width:35" name="aco_inoxidavel_304">
   <option value=""></option>
   <option <? if ($_POST['aco_inoxidavel_304']=="")  echo "selected ";?>value="">T</option>
   <option <? if ($_POST['aco_inoxidavel_304']=="A") echo "selected ";?>value="A" style="color:green">A</option>
   <option <? if ($_POST['aco_inoxidavel_304']=="B") echo "selected ";?>value="B" style="color:#FF8951">B</option>
   <option <? if ($_POST['aco_inoxidavel_304']=="C") echo "selected ";?>value="C" style="color:red">C</option>
   <option <? if ($_POST['aco_inoxidavel_304']=="-") echo "selected ";?>value="-">-</option>
   </select></td>
   <td width="34" >
   <select style="width:35" name="aco_inoxidavel_316">
   <option value=""></option>
   <option <? if ($_POST['aco_inoxidavel_316']=="")  echo "selected ";?>value="">T</option>
   <option <? if ($_POST['aco_inoxidavel_316']=="A") echo "selected ";?>value="A" style="color:green">A</option>
   <option <? if ($_POST['aco_inoxidavel_316']=="B") echo "selected ";?>value="B" style="color:#FF8951">B</option>
   <option <? if ($_POST['aco_inoxidavel_316']=="C") echo "selected ";?>value="C" style="color:red">C</option>
   <option <? if ($_POST['aco_inoxidavel_316']=="-") echo "selected ";?>value="-">-</option>
   </select></td>
   <td width="36" >
   <select style="width:35" name="aco_inoxidavel_410">
   <option value=""></option>
   <option <? if ($_POST['aco_inoxidavel_410']=="")  echo "selected ";?>value="">T</option>
   <option <? if ($_POST['aco_inoxidavel_410']=="A") echo "selected ";?>value="A" style="color:green">A</option>
   <option <? if ($_POST['aco_inoxidavel_410']=="B") echo "selected ";?>value="B" style="color:#FF8951">B</option>
   <option <? if ($_POST['aco_inoxidavel_410']=="C") echo "selected ";?>value="C" style="color:red">C</option>
   <option <? if ($_POST['aco_inoxidavel_410']=="-") echo "selected ";?>value="-">-</option>
   </select></td>
   <td width="34" >
   <select style="width:35" name="bronze">
   <option value=""></option>
   <option <? if ($_POST['bronze']=="")  echo "selected ";?>value="">T</option>
   <option <? if ($_POST['bronze']=="A") echo "selected ";?>value="A" style="color:green">A</option>
   <option <? if ($_POST['bronze']=="B") echo "selected ";?>value="B" style="color:#FF8951">B</option>
   <option <? if ($_POST['bronze']=="C") echo "selected ";?>value="C" style="color:red">C</option>
   <option <? if ($_POST['bronze']=="-") echo "selected ";?>value="-">-</option>
   </select></td>
   <td width="36" >
   <select style="width:35" name="ferro_fundido">
   <option value=""></option>
   <option <? if ($_POST['ferro_fundido']=="")  echo "selected ";?>value="">T</option>
   <option <? if ($_POST['ferro_fundido']=="A") echo "selected ";?>value="A" style="color:green">A</option>
   <option <? if ($_POST['ferro_fundido']=="B") echo "selected ";?>value="B" style="color:#FF8951">B</option>
   <option <? if ($_POST['ferro_fundido']=="C") echo "selected ";?>value="C" style="color:red">C</option>
   <option <? if ($_POST['ferro_fundido']=="-") echo "selected ";?>value="-">-</option>
   </select></td>
   <td width="35" >
   <select style="width:35" name="buna_n">
   <option value=""></option>
   <option <? if ($_POST['buna_n']=="")  echo "selected ";?>value="">T</option>
   <option <? if ($_POST['buna_n']=="A") echo "selected ";?>value="A" style="color:green">A</option>
   <option <? if ($_POST['buna_n']=="B") echo "selected ";?>value="B" style="color:#FF8951">B</option>
   <option <? if ($_POST['buna_n']=="C") echo "selected ";?>value="C" style="color:red">C</option>
   <option <? if ($_POST['buna_n']=="-") echo "selected ";?>value="-">-</option>
   </select></td>
   <td width="35" >
   <select style="width:35" name="neopreme">
   <option value=""></option>
   <option <? if ($_POST['neopreme']=="")  echo "selected ";?>value="">T</option>
   <option <? if ($_POST['neopreme']=="A") echo "selected ";?>value="A" style="color:green">A</option>
   <option <? if ($_POST['neopreme']=="B") echo "selected ";?>value="B" style="color:#FF8951">B</option>
   <option <? if ($_POST['neopreme']=="C") echo "selected ";?>value="C" style="color:red">C</option>
   <option <? if ($_POST['neopreme']=="-") echo "selected ";?>value="-">-</option>
   </select></td>
   <td width="35" >
   <select style="width:35" name="teflon">
   <option value=""></option>
   <option <? if ($_POST['teflon']=="")  echo "selected ";?>value="">T</option>
   <option <? if ($_POST['teflon']=="A") echo "selected ";?>value="A" style="color:green">A</option>
   <option <? if ($_POST['teflon']=="B") echo "selected ";?>value="B" style="color:#FF8951">B</option>
   <option <? if ($_POST['teflon']=="C") echo "selected ";?>value="C" style="color:red">C</option>
   <option <? if ($_POST['teflon']=="-") echo "selected ";?>value="-">-</option>
   </select></td>
   </tr>

   <tr>
   <td colspan="10" align="center" bgcolor="#E8F3FF" style="height:30"><input type="submit" name="enviar" value="Filtrar"><td>
   </tr>
   </form>
   </table>
   
   <table><tr><td style="height:5"></td></tr></table>


<table border="0" cellpadding="0" cellspacing="0" width="501">

  <tr>
   <td><img src="imagens/corrosao/spacer.gif" width="181" height="1" border="0" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="35" height="1"  border="0" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="35" height="1"  border="0" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="34" height="1"  border="0" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="36" height="1"  border="0" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="34" height="1"  border="0" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="36" height="1"  border="0" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="35" height="1"  border="0" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="35" height="1"  border="0" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="35" height="1"  border="0" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="5" height="1"   border="0" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="1" height="1"   border="0" alt="" /></td>
  </tr>

   <tr>
   <td colspan="11"><img name="corrosao_r1_c1" src="imagens/corrosao/corrosao_r1_c1.jpg" width="501" height="136" border="0" id="corrosao_r1_c1" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="1" height="136" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="11"><img name="corrosao_r2_c1" src="imagens/corrosao/corrosao_r2_c1.jpg" width="501" height="5" border="0" id="corrosao_r2_c1" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="1" height="5" border="0" alt="" /></td>
  </tr>


<?

if ($_POST['enviar']) {

$selwhere = "WHERE 1";

if ($_POST['fluido'])            $selwhere = $selwhere." AND ID='".$_POST['fluido']."'";
if ($_POST['aco_carbono'] != "") $selwhere = $selwhere." AND aco_carbono='".$_POST['aco_carbono']."'";
if ($_POST['aco_inoxidavel_304'])$selwhere = $selwhere." AND aco_inoxidavel_304='".$_POST['aco_inoxidavel_304']."'";
if ($_POST['aco_inoxidavel_316'])$selwhere = $selwhere." AND aco_inoxidavel_316='".$_POST['aco_inoxidavel_316']."'";
if ($_POST['aco_inoxidavel_410'])$selwhere = $selwhere." AND aco_inoxidavel_316='".$_POST['aco_inoxidavel_410']."'";
if ($_POST['bronze'])            $selwhere = $selwhere." AND bronze='".$_POST['bronze']."'";
if ($_POST['ferro_fundido'])     $selwhere = $selwhere." AND ferro_fundido='".$_POST['ferro_fundido']."'";
if ($_POST['buna_n'])            $selwhere = $selwhere." AND buna_n='".$_POST['buna_n']."'";
if ($_POST['neopreme'])          $selwhere = $selwhere." AND neopreme='".$_POST['neopreme']."'";
if ($_POST['teflon'])            $selwhere = $selwhere." AND teflon='".$_POST['teflon']."'";

}

$lista = mysql_query("SELECT * FROM tabela_corrosao $selwhere", $conexao) or die($erroconsulta);
$lista_num = mysql_num_rows($lista);

if ($lista_num > 0) {
while ($corrosao  = mysql_fetch_array($lista))  {

$fluido                 =  $corrosao['fluido'];
$aco_carbono            =  $corrosao['aco_carbono'];
$aco_inoxidavel_304     =  $corrosao['aco_inoxidavel_304'];
$aco_inoxidavel_316     =  $corrosao['aco_inoxidavel_316'];
$aco_inoxidavel_410     =  $corrosao['aco_inoxidavel_410'];
$bronze                 =  $corrosao['bronze'];
$ferro_fundido          =  $corrosao['ferro_fundido'];
$buna_n                 =  $corrosao['buna_n'];
$neopreme               =  $corrosao['neopreme'];
$teflon                 =  $corrosao['teflon'];

if ($fluido == 'A') $fluido = '<img src="imagens/a.jpg" border="0">';
if ($fluido == 'B') $fluido = '<img src="imagens/b.jpg" border="0">';
if ($fluido == 'C') $fluido = '<img src="imagens/c.jpg" border="0">';
if ($fluido == '-') $fluido = '<img src="imagens/-.jpg" border="0">';

if ($aco_carbono == 'A') $aco_carbono = '<img src="imagens/a.jpg" border="0">';
if ($aco_carbono == 'B') $aco_carbono = '<img src="imagens/b.jpg" border="0">';
if ($aco_carbono == 'C') $aco_carbono = '<img src="imagens/c.jpg" border="0">';
if ($aco_carbono == '-') $aco_carbono = '<img src="imagens/-.jpg" border="0">';

if ($aco_inoxidavel_304 == 'A') $aco_inoxidavel_304 = '<img src="imagens/a.jpg" border="0">';
if ($aco_inoxidavel_304 == 'B') $aco_inoxidavel_304 = '<img src="imagens/b.jpg" border="0">';
if ($aco_inoxidavel_304 == 'C') $aco_inoxidavel_304 = '<img src="imagens/c.jpg" border="0">';
if ($aco_inoxidavel_304 == '-') $aco_inoxidavel_304 = '<img src="imagens/-.jpg" border="0">';

if ($aco_inoxidavel_316 == 'A') $aco_inoxidavel_316 = '<img src="imagens/a.jpg" border="0">';
if ($aco_inoxidavel_316 == 'B') $aco_inoxidavel_316 = '<img src="imagens/b.jpg" border="0">';
if ($aco_inoxidavel_316 == 'C') $aco_inoxidavel_316 = '<img src="imagens/c.jpg" border="0">';
if ($aco_inoxidavel_316 == '-') $aco_inoxidavel_316 = '<img src="imagens/-.jpg" border="0">';

if ($aco_inoxidavel_410 == 'A') $aco_inoxidavel_410 = '<img src="imagens/a.jpg" border="0">';
if ($aco_inoxidavel_410 == 'B') $aco_inoxidavel_410 = '<img src="imagens/b.jpg" border="0">';
if ($aco_inoxidavel_410 == 'C') $aco_inoxidavel_410 = '<img src="imagens/c.jpg" border="0">';
if ($aco_inoxidavel_410 == '-') $aco_inoxidavel_410 = '<img src="imagens/-.jpg" border="0">';

if ($bronze == 'A') $bronze = '<img src="imagens/a.jpg" border="0">';
if ($bronze == 'B') $bronze = '<img src="imagens/b.jpg" border="0">';
if ($bronze == 'C') $bronze = '<img src="imagens/c.jpg" border="0">';
if ($bronze == '-') $bronze = '<img src="imagens/-.jpg" border="0">';

if ($ferro_fundido  == 'A') $ferro_fundido  = '<img src="imagens/a.jpg" border="0">';
if ($ferro_fundido  == 'B') $ferro_fundido  = '<img src="imagens/b.jpg" border="0">';
if ($ferro_fundido  == 'C') $ferro_fundido  = '<img src="imagens/c.jpg" border="0">';
if ($ferro_fundido  == '-') $ferro_fundido  = '<img src="imagens/-.jpg" border="0">';

if ($buna_n  == 'A') $buna_n  = '<img src="imagens/a.jpg" border="0">';
if ($buna_n  == 'B') $buna_n  = '<img src="imagens/b.jpg" border="0">';
if ($buna_n  == 'C') $buna_n  = '<img src="imagens/c.jpg" border="0">';
if ($buna_n  == '-') $buna_n  = '<img src="imagens/-.jpg" border="0">';

if ($neopreme  == 'A') $neopreme  = '<img src="imagens/a.jpg" border="0">';
if ($neopreme  == 'B') $neopreme  = '<img src="imagens/b.jpg" border="0">';
if ($neopreme  == 'C') $neopreme  = '<img src="imagens/c.jpg" border="0">';
if ($neopreme  == '-') $neopreme  = '<img src="imagens/-.jpg" border="0">';

if ($teflon  == 'A') $teflon  = '<img src="imagens/a.jpg" border="0">';
if ($teflon  == 'B') $teflon  = '<img src="imagens/b.jpg" border="0">';
if ($teflon  == 'C') $teflon  = '<img src="imagens/c.jpg" border="0">';
if ($teflon  == '-') $teflon  = '<img src="imagens/-.jpg" border="0">';



?>
  

  
   <tr>
   <td background="imagens/corrosao/corrosao_r3_c1.jpg">
   <table><tr><td style="width=:7"></td><td style="width=:160"><a class="formulario"><?=$fluido?></a></td></tr></table>
   </td>
   <td background="imagens/corrosao/corrosao_r3_c2.jpg" align="center"><?=$aco_carbono?></td>
   <td background="imagens/corrosao/corrosao_r3_c3.jpg" align="center"><?=$aco_inoxidavel_304?></td>
   <td background="imagens/corrosao/corrosao_r3_c4.jpg" align="center"><?=$aco_inoxidavel_316?></td>
   <td background="imagens/corrosao/corrosao_r3_c5.jpg" align="center"><?=$aco_inoxidavel_410?></td>
   <td background="imagens/corrosao/corrosao_r3_c6.jpg" align="center"><?=$bronze?></td>
   <td background="imagens/corrosao/corrosao_r3_c7.jpg" align="center"><?=$ferro_fundido?></td>
   <td background="imagens/corrosao/corrosao_r3_c8.jpg" align="center"><?=$buna_n?></td>
   <td background="imagens/corrosao/corrosao_r3_c9.jpg" align="center"><?=$neopreme?></td>
   <td background="imagens/corrosao/corrosao_r3_c10.jpg" align="center"><?=$teflon?></td>
   <td><img name="corrosao_r3_c11" src="imagens/corrosao/corrosao_r3_c11.jpg" width="5" height="24" border="0" id="corrosao_r3_c11" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="1" height="24" border="0" alt="" /></td>
   </tr>

   <tr>
   <td colspan="11"><img name="corrosao_r4_c1" src="imagens/corrosao/corrosao_r4_c1.jpg" width="501" height="5" border="0" id="corrosao_r4_c1" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="1" height="5" border="0" alt="" /></td>
   </tr>
  
  <? } } else {?>
  
   <tr>
   <td colspan="11"><img name="corrosao_r4_c1" src="imagens/corrosao_nao.jpg" width="501" height="29" border="0" id="corrosao_r4_c1" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="1" height=29" border="0" alt="" /></td>
   </tr>
   
   <? } ?>

  <tr>
   <td colspan="11"><img name="corrosao_r5_c1" src="imagens/corrosao/corrosao_r5_c1.jpg" width="501" height="6" border="0" id="corrosao_r5_c1" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="1" height="6" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="11"><img name="corrosao_r6_c1" src="imagens/corrosao/corrosao_r6_c1.jpg" width="501" height="8" border="0" id="corrosao_r6_c1" alt="" /></td>
   <td><img src="imagens/corrosao/spacer.gif" width="1" height="8" border="0" alt="" /></td>
  </tr>
</table>
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
