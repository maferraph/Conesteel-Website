   <?
   include_once('includes/conversor.php');
   include_once ( "./includes/global.php" );

   if ($_POST['sel_unidade_temperatura']) $_SESSION['temperatura'] = $_POST['sel_unidade_temperatura'];
   if ($_POST['sel_unidade_pressao'])     $_SESSION['pressao']     = $_POST['sel_unidade_pressao'];

   if ($_POST['sel_material'])            $_SESSION['material']    = $_POST['sel_material'];
   if ($_POST['sel_material2'])           $_SESSION['material2']   = $_POST['sel_material2'];
   if ($_POST['sel_classe'])              $_SESSION['classe']      = $_POST['sel_classe'];
   if ($_POST['sel_temperatura'])         $_SESSION['temperatura2']= $_POST['sel_temperatura'];
   if ($_POST['txt_pressao'])             $_SESSION['pressao2']    = $_POST['txt_pressao'];

   if ($_POST['sel_material']=="nada")            $_SESSION['material']    = "";
   if ($_POST['sel_material2']=="nada")           $_SESSION['material2']    = "";
   if ($_POST['sel_classe']=="nada")              $_SESSION['classe']      = "";
   if ($_POST['sel_temperatura']=="nada")         $_SESSION['temperatura2']= "";
   if ($_POST['sel_pressao']=="nada")             $_SESSION['pressao2']= "";

   
   if (!$_SESSION['temperatura'])  $_SESSION['temperatura'] = "Fahrenheit";
   if (!$_SESSION['pressao'])      $_SESSION['pressao']     = "pound-force/sq.inch";
   
   if ($_GET['tipo']) {
   
   if ($_GET['tipo']==1) {  $_SESSION['tipo'] =1;  }

   if ($_GET['tipo']==2) {  $_SESSION['tipo'] =2; }

   }
   
   function Transforma_temp1($valor)  {

   $temp   = ToSI_Temp("$valor", "Fahrenheit");
   $temp   = FromSI_Temp($temp, $_SESSION['temperatura']);
   $temp   = round($temp);
   
   if ($temp =="0")
   echo "";
   else
   echo $temp;

   }
   
   function Transforma_press1($valor)  {

   $press   = ToSI_Press("$valor", "pound-force/sq.inch");
   $press   = FromSI_Press($press, $_SESSION['pressao']);
   $press   = round($press);

   if ($press =="0")
   echo "";
   else
   echo $press;

   }
   
   function Transforma_press2($valor)  {

   $press   = FromSI_Press("$valor", "pound-force/sq.inch");
   $press   = ToSI_Press($press, $_SESSION['pressao']);
   $press   = round($press);

   return $press;

   }
   ?>

<table><tr><td style="height:5"></td></tr></table>

<table border="0" cellpadding="0" cellspacing="0" width="570">
  <tr>
   <td><img src="imagens/meio/spacer.gif" width="570" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td><img name="tabela3_r1_c1" src="imagens/meio/pressao_tb.jpg" width="570" height="52" border="0" id="tabela3_r1_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="34" border="0" alt="" /></td>
  </tr>
  <tr>
   <td background="imagens/meio/fundo_tb1.jpg">



<center>

 <table><tr><td style="height:5"></td></tr></table>
 
<table border="0" cellpadding="0" cellspacing="0" width="565">
<tr><td bgcolor="f9f9f9" align="center">
<img src="imagens/icona.jpg" border="0"> <a class="texto2">As informações contidas na tabela e nos gráficos tem como objetivo dar ao usuário uma idéia de qual material da <b>válvula</b> utilizar em sua aplicação, levando em consideração a temperatura e a pressão sofrida.</a><br><br>


<img src="imagens/icona.jpg" border="0"> <a class="texto2">É impossível fornecer informações precisas sem o conhecimento de todas as condições de sua aplicação. Não estamos levando em consideração a</a> <a href="?pag=corrosao" class="aba">corrosão</a> <a class="texto2">, fadiga, impurezas, contaminação e etc.</a><br><br>

<img src="imagens/icona.jpg" border="0"> <a class="texto2">Portanto as informações apresentadas aqui devem ser utilizadas sempre com a devida preocupação para não se cometer enganos que fatalmente podem incorrer em sérios prejuízos.</a><br><br>

<img src="imagens/icona.jpg" border="0"> <a class="texto2">Para uma escolha definitiva é importante consultar as normas referentes aos materiais de que compõe a válvula, ou entrar em contato conosco.</a><br><br>



<a name="lb_unidades"><img src="imagens/unidades.gif" border="0"></a>
<table><tr><td style="height:5"></td></tr></table>
<img src="imagens/icona.jpg" border="0"> <a class="texto2">Escolha as unidades de sua preferência antes de consultar a tabela e os gráficos:</a>
<form name="unidades"  method="post" action="?pag=pressao#lb_unidades">
<table border="0" cellpadding="0" cellspacing="0" width="565">
<tr>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Temperatura:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">
<select name="sel_unidade_temperatura" style="width:155">
<option value=""></option>
<option value="<?=$_SESSION['temperatura']?>" selected><?=$_SESSION['temperatura']?></option>
<option value="Celsius">Celsius</option>
<option value="Fahrenheit">Fahrenheit</option>
<option value="Kelvin">Kelvin</option>
<option value="Rankine">Rankine</option>
<option value="Réaumure">Réaumure</option>

</select>
</td>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Pressão:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">

<select name="sel_unidade_pressao" style="width:155">
<option value=""></option>
<option value="<?=$_SESSION['pressao']?>" selected>
<?if ($_SESSION['pressao']=="pound-force/sq.inch") echo "(PSIG) pound-force/sq.inch"; else echo $_SESSION['pressao'];?>
</option>
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
<option value="pound-force/sq.inch">(PSIG) pound-force/sq.inch</option>
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
<td bgcolor="f9f9f9" align="right" style="height:50; width:50"><input type="submit" name="enviar1" value="OK"></td>
</tr>
</table>
</form>
</td></tr>
</table>


 <table><tr><td style="height:5"></td></tr></table>
 

   <table style="width:570px">

   <tr>
   <td colspan="2" style="width:180px" background="imagens/fundo_titulo.jpg"" align="center"><a class="titulo_branco2">Consultar por:</a></td>
   <td colspan="2" bgcolor="#F1F1F1" align="center"><a class="titulo_branco2">

   <table border="0"">
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=pressao&tipo=1#busca1">Material x Classe</a></td>
   </tr>
   </table>

   </td>
      <td colspan="2" bgcolor="#F1F1F1" align="center"><a class="titulo_branco2">

   <table border="0"">
   <tr>
   <td><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="mais2" href="?pag=pressao&tipo=2#busca2">Temperatura x Pressão</a></td>
   </tr>
   </table>

   </td>
   </tr>

   </table>
   
    <table><tr><td style="height:5"></td></tr></table>




 <? if ($_SESSION['tipo']==1) {

 $_SESSION['busca'] = 0;

 ?>

<table border="0" cellpadding="0" cellspacing="0" width="565">
<tr><td bgcolor="f9f9f9" align="center">
<a name="busca1">
<img src="imagens/material_classe.gif" border="0"></a>
<table><tr><td style="height:5"></td></tr></table>
<img src="imagens/icona.jpg" border="0"> <a class="texto2">Se você já sabe o material e a classe da válvula que necessita para a sua aplicação, faça uma busca para exibir a tabela com os valores de "temperatura x pressão" e os seus gráficos.</a>
<form name="pressao"  method="post" action="?pag=pressao#resultado">
<table border="0" cellpadding="0" cellspacing="0" width="565">
<tr>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Material:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">
<select name="sel_material" style="width:155">
<option value="nada"></option>
<option value="<?=$_SESSION['material']?>" selected><?=$_SESSION['material']?></option>
<option value="A 105">A 105</option>
<option value="A 182 Gr. F1">A 182 Gr. F1</option>
<option value="A 182 Gr. F11">A 182 Gr. F11</option>
<option value="A 182 Gr. F2">A 182 Gr. F2</option>
<option value="A 182 Gr. F21">A 182 Gr. F21</option>
<option value="A 182 Gr. F22">A 182 Gr. F22</option>
<option value="A 182 Gr. F304">A 182 Gr. F304</option>
<option value="A 182 Gr. F304H">A 182 Gr. F304H</option>
<option value="A 182 Gr. F304L">A 182 Gr. F304L</option>
<option value="A 182 Gr. F316">A 182 Gr. F316</option>
<option value="A 182 Gr. F316H">A 182 Gr. F316H</option>
<option value="A 182 Gr. F316L">A 182 Gr. F316L</option>
<option value="A 182 Gr. F321">A 182 Gr. F321</option>
<option value="A 182 Gr. F321H">A 182 Gr. F321H</option>
<option value="A 182 Gr. F347">A 182 Gr. F347</option>
<option value="A 182 Gr. F347H">A 182 Gr. F347H</option>
<option value="A 182 Gr. F44">A 182 Gr. F44</option>
<option value="A 182 Gr. F5">A 182 Gr. F5</option>
<option value="A 182 Gr. F53">A 182 Gr. F53</option>
<option value="A 182 Gr. F5a">A 182 Gr. F5a</option>
<option value="A 182 Gr. F9">A 182 Gr. F9</option>
<option value="A 350 Gr. LF1">A 350 Gr. LF1</option>
<option value="A 350 Gr. LF2">A 350 Gr. LF2</option>
<option value="A 350 Gr. LF2">A 350 Gr. LF3</option>
</select>
</td>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Classe:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">
<select name="sel_classe" style="width:155">
<option value="nada"></option>
<option value="<?=$_SESSION['classe']?>" selected><?=$_SESSION['classe']?></option>
<option value="150">150</option>
<option value="300">300</option>
<option value="600">600</option>
<option value="800">800</option>
<option value="900">900</option>
<option value="1500">1500</option>
<option value="2500">2500</option>
<option value="4500">4500</option>
</select>

</td>
<td bgcolor="f9f9f9" align="right" style="height:50; width:50"><input type="submit" name="enviar2" value="OK"></td>
</tr>
</table>
</form>
</td></tr>
</table>
<table><tr><td style="height:5"></td></tr></table>

<? } ?>

 <? if ($_SESSION['tipo']==2) {

 $_SESSION['busca'] = 0;

 ?>
 
<table border="0" cellpadding="0" cellspacing="0" width="565">
<tr><td bgcolor="f9f9f9" align="center">
<a name="busca2">
<img src="imagens/temp_press.gif" border="0"></a>
<table><tr><td style="height:5"></td></tr></table>
<img src="imagens/icona.jpg" border="0"> <a class="texto2">Caso você tenha dúvida de qual material e classe da válvula utilizar em sua aplicação, faça uma busca utilizando o formulário abaixo:</a>

<table><tr><td style="height:5"></td></tr></table>

<form name="pressao2"  method="post" action="?pag=pressao#resultado">
<table border="0" cellpadding="0" cellspacing="0" width="565">


<tr>
<td bgcolor="f9f9f9" style="width:105"></td>
<td bgcolor="f9f9f9" style="width:155">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?=$_SESSION['temperatura']?>)</a></td>
</tr>
</table>

</td>
<td bgcolor="f9f9f9" style="width:105"></td>
<td bgcolor="f9f9f9" style="width:155">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?if ($_SESSION['pressao']=="pound-force/sq.inch") echo "PSIG"; else echo $_SESSION['pressao'];?>)</a></td>
</tr>
</table>

</td>
<td bgcolor="f9f9f9" style="width:50"></td>
</tr>



<tr>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Temperatura:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">
<select name="sel_temperatura" style="width:155">
<option value="nada">Indiferente<option>
<option value="<?$_SESSION['temperatura2']?>" <?if($_SESSION['temperatura2']!="") echo "selected";?>><?if ($_SESSION['temperatura2']=="-20 to 100") { Transforma_temp1(-20);?> até <?Transforma_temp1(100); } else { Transforma_temp1($_SESSION['temperatura2']); }?></option>
<option value="-20 to 100">
<?Transforma_temp1(-20);?> até <?Transforma_temp1(100);?></option>
<option value="200"><?Transforma_temp1(200);?></option>
<option value="300"><?Transforma_temp1(300);?></option>
<option value="500"><?Transforma_temp1(500);?></option>
<option value="600"><?Transforma_temp1(600);?></option>
<option value="650"><?Transforma_temp1(650);?></option>
<option value="700"><?Transforma_temp1(700);?></option>
<option value="750"><?Transforma_temp1(750);?></option>
<option value="800"><?Transforma_temp1(800);?></option>
<option value="850"><?Transforma_temp1(850);?></option>
<option value="900"><?Transforma_temp1(900);?></option>
<option value="950"><?Transforma_temp1(950);?></option>
<option value="1000"><?Transforma_temp1(1000);?></option>
<option value="1050"><?Transforma_temp1(1050);?></option>
<option value="1100"><?Transforma_temp1(1100);?></option>
<option value="1150"><?Transforma_temp1(1150);?></option>
<option value="1200"><?Transforma_temp1(1200);?></option>
<option value="1250"><?Transforma_temp1(1250);?></option>
<option value="1300"><?Transforma_temp1(1300);?></option>
<option value="1350"><?Transforma_temp1(1350);?></option>
<option value="1400"><?Transforma_temp1(1400);?></option>
<option value="1450"><?Transforma_temp1(1450);?></option>
<option value="1500"><?Transforma_temp1(1500);?></option>
</select>
</td>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Pressão:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">
<input type="text" name="txt_pressao" style="width:155" value="<?if ($_POST['enviar1']) echo Transforma_press1($_SESSION['pressao2']); else echo $_SESSION['pressao2'];?>">
</td>
<td bgcolor="f9f9f9" align="right" style="height:30; width:50"><input type="submit" name="enviar3" value="OK"></td>
</tr>
<tr>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;Material:&nbsp;</a></td>
<td bgcolor="f9f9f9" style="height:30; width:155">
<select name="sel_material2" style="width:155">
<option value="nada"></option>
<option value="<?=$_SESSION['material2']?>" selected><?=$_SESSION['material2']?></option>
<option value="A 105">A 105</option>
<option value="A 182 Gr. F1">A 182 Gr. F1</option>
<option value="A 182 Gr. F11">A 182 Gr. F11</option>
<option value="A 182 Gr. F2">A 182 Gr. F2</option>
<option value="A 182 Gr. F21">A 182 Gr. F21</option>
<option value="A 182 Gr. F22">A 182 Gr. F22</option>
<option value="A 182 Gr. F304">A 182 Gr. F304</option>
<option value="A 182 Gr. F304H">A 182 Gr. F304H</option>
<option value="A 182 Gr. F304L">A 182 Gr. F304L</option>
<option value="A 182 Gr. F316">A 182 Gr. F316</option>
<option value="A 182 Gr. F316H">A 182 Gr. F316H</option>
<option value="A 182 Gr. F316L">A 182 Gr. F316L</option>
<option value="A 182 Gr. F321">A 182 Gr. F321</option>
<option value="A 182 Gr. F321H">A 182 Gr. F321H</option>
<option value="A 182 Gr. F347">A 182 Gr. F347</option>
<option value="A 182 Gr. F347H">A 182 Gr. F347H</option>
<option value="A 182 Gr. F44">A 182 Gr. F44</option>
<option value="A 182 Gr. F5">A 182 Gr. F5</option>
<option value="A 182 Gr. F53">A 182 Gr. F53</option>
<option value="A 182 Gr. F5a">A 182 Gr. F5a</option>
<option value="A 182 Gr. F9">A 182 Gr. F9</option>
<option value="A 350 Gr. LF1">A 350 Gr. LF1</option>
<option value="A 350 Gr. LF2">A 350 Gr. LF2</option>
<option value="A 350 Gr. LF2">A 350 Gr. LF3</option>
</select>
</td>
<td bgcolor="f9f9f9" style="height:30; width:105"><a class="formulario">&nbsp;*(Opcional)&nbsp;</a></td>
</tr>
</table>
</form>
</td></tr>
</table>
<table><tr><td style="height:10"></td></tr></table>

<? } ?>

<?

  if ($_POST['enviar1']) {

  //$table     = mysql_query($_SESSION['table'], $conexao) or die($erroconsulta);
  //$table2    = mysql_query($_SESSION['table2'], $conexao) or die($erroconsulta);
  //$table3    = mysql_query($_SESSION['table3'], $conexao) or die($erroconsulta);
  //$grafico   = mysql_query($_SESSION['grafico'], $conexao) or die($erroconsulta);
  //$res_quant = mysql_num_rows($table);

  }

  if ($_POST['enviar2']) {
  $sel_material = $_SESSION['material'];
  $sel_classe   = $_SESSION['classe'];



  if ($sel_material) {


  $query2="material LIKE '%$sel_material%'";
  $limit     = 'limit 8';
  $limitgraf = 'limit 1';
  }
  
  if (!$sel_material) {
  $query2="";
  $limit = '';
  $limitgraf = '';
  }



  if ($sel_classe)  $query1="classe='$sel_classe'"; else $query1="";
  if (($sel_material!="") && ($sel_classe!=""))  $and1="AND"; else $and1="";

  $table   =  mysql_query("SELECT * FROM pressao_trabalho WHERE $query2 $and1 $query1", $conexao) or die($erroconsulta);
  $table2 =  mysql_query("SELECT DISTINCT material, classe FROM pressao_trabalho WHERE $query2 $and1 $query1 $limit", $conexao) or die($erroconsulta);
  $grafico =  mysql_query("SELECT DISTINCT material FROM pressao_trabalho WHERE $query2 $and1 $query1 $limitgraf", $conexao) or die($erroconsulta);
  $_SESSION['table'] =   "SELECT * FROM pressao_trabalho WHERE $query2 $and1 $query1";
  $_SESSION['table2'] = "SELECT DISTINCT material, classe FROM pressao_trabalho WHERE $query2 $and1 $query1 $limit";
  $_SESSION['grafico'] = "SELECT DISTINCT material FROM pressao_trabalho WHERE $query2 $and1 $query1 $limitgraf";

  $res_quant = mysql_num_rows($table);
  $_SESSION['busca']=1;

  }

  if ($_POST['enviar3']) {

  $sel_temeperatura = $_SESSION['temperatura2'];
  $sel_material     =  $_SESSION['material2'];
  $txt_pressao      = Transforma_press2($_SESSION['pressao2']);


  if ($sel_temeperatura) $query1="temperatura >= '$sel_temeperatura'"; else  $query1="";
  if ($txt_pressao)      $query2="pressao>='$txt_pressao'"; else $query2="";
  if (($sel_temeperatura!="") && ($txt_pressao!=""))  $and1="AND"; else $and1="";
  if ($sel_material)     $query3 = "material LIKE '%".$_SESSION['material2']."%'"; else $query3="";
  if ((($sel_temeperatura!="") || ($txt_pressao!="")) && ($sel_material!=""))  $and2="AND"; else $and2="";
  if ($sel_material!="") $limit1 = "limit 1"; else   $limit1 ="";
  

  $table   =  mysql_query("SELECT * FROM pressao_trabalho WHERE $query1 $and1 $query2 limit 1", $conexao) or die($erroconsulta);
  $table2  =  mysql_query("SELECT DISTINCT material FROM pressao_trabalho WHERE $query1 $and1 $query2 $and2 $query3 $limit1", $conexao) or die($erroconsulta);
  $grafico =  mysql_query("SELECT DISTINCT material FROM pressao_trabalho WHERE $query1 $and1 $query2", $conexao) or die($erroconsulta);
  $_SESSION['table'] =   "SELECT * FROM pressao_trabalho WHERE $query1 $and1 $query2 limit 1";
  $_SESSION['table2'] =  "SELECT DISTINCT material FROM pressao_trabalho WHERE $query1 $and1 $query2 limit 1";

  $res_quant = mysql_num_rows($table);
  $_SESSION['busca']=2;
  }



if ($_SESSION['table']) {

if ($_SESSION['busca']==1) {

if ($res_quant > 0) {
?>


<a name="resultado"><img src="imagens/resultado.gif" border="0"></a>
<table><tr><td style="height:5"></td></tr></table>


  <table border="0" cellpadding="0" cellspacing="0" width="550">
  <tr>
   <td><img src="imagens/meio/spacer.gif" width="12" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="520" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="18" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="3"><img name="grafico_r1_c1" src="imagens/meio/grafico_r1_c1.jpg" width="550" height="48" border="0" id="grafico_r1_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="48" border="0" alt="" /></td>
  </tr>
  
  <? while ($res_grafico  = mysql_fetch_array($grafico))  {

  $mat_grafico = str_replace("; ", " | ", $res_grafico['material']);


  ?>
  
  <tr>
   <td><img name="grafico_r2_c1" src="imagens/meio/grafico_r2_c1.jpg" width="12" height="27" border="0" id="grafico_r2_c1" alt="" /></td>
   <td background="imagens/meio/fundo_grafico.jpg">
   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <? $janela = popup("paginas/grafico.php?mat=".$res_grafico['material']."&temp=".$_SESSION['temperatura']."&press=".$_SESSION['pressao']."", "760", "600")?>
   <a <?=$janela?> class="mais2" href="#2"><?=$mat_grafico?></a></td>
   </tr></table>
   </td>
   <td><img name="grafico_r2_c3" src="imagens/meio/grafico_r2_c3.jpg" width="18" height="27" border="0" id="grafico_r2_c3" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="27" border="0" alt="" /></td>
   </tr>

   <? }   ?>

  <tr>
   <td colspan="3"><img name="grafico_r3_c1" src="imagens/meio/grafico_r3_c1.jpg" width="550" height="5" border="0" id="grafico_r3_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="5" border="0" alt="" /></td>
  </tr>
</table>
<table><tr><td style="height:20"></td></tr></table>

   <? while ($res_table2  = mysql_fetch_array($table2))  {

   $material1   =  $res_table2['material'];
   $material1   =  str_replace("; ", " | ", $material1);

   ?>




<table border="0" cellpadding="0" cellspacing="0" width="569">
  <tr>
   <td><img src="imagens/meio/spacer.gif" width="77" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="203" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="2" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="5" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="137" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="57" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="87" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="8"><img name="tb_pressao_r1_c1" src="imagens/meio/tb_pressao_r1_c1.jpg" width="569" height="3" border="0" id="tb_pressao_r1_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="3" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="tb_pressao_r2_c1" src="imagens/meio/tb_pressao_r2_c1.jpg" width="77" height="32" border="0" id="tb_pressao_r2_c1" alt="" /></td>
   <td colspan="5" background="imagens/meio/material.jpg"><a class="texto2"><?=$material1?></a></td>
   <td rowspan="2"><img name="tb_pressao_r2_c7" src="imagens/meio/tb_pressao_r2_c7.jpg" width="57" height="32" border="0" id="tb_pressao_r2_c7" alt="" /></td>
   <td background="imagens/meio/classe.jpg"><a class="texto2"><?=$res_table2['classe']?></a></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="22" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="5"><img name="tb_pressao_r3_c2" src="imagens/meio/tb_pressao_r3_c2.jpg" width="348" height="10" border="0" id="tb_pressao_r3_c2" alt="" /></td>
   <td><img name="tb_pressao_r3_c8" src="imagens/meio/tb_pressao_r3_c8.jpg" width="87" height="10" border="0" id="tb_pressao_r3_c8" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="10" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="3" background="imagens/meio/tb_pressao_r4_c1.jpg">



<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:10"></td>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?=$_SESSION['temperatura']?>)</a></td>
</tr>
</table>





   </td>
   <td rowspan="2" colspan="2"><img name="tb_pressao_r4_c4" src="imagens/meio/tb_pressao_r4_c4.jpg" width="6" height="69" border="0" id="tb_pressao_r4_c4" alt="" /></td>
   <td colspan="3" background="imagens/meio/tb_pressao_r4_c6">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:10"></td>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?if ($_SESSION['pressao']=="pound-force/sq.inch") echo "PSIG"; else echo $_SESSION['pressao'];?>)</a></td>
</tr>
</table>


   </td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="22" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="3"><img name="tb_pressao_r5_c1" src="imagens/meio/tb_pressao_r5_c1.jpg" width="282" height="47" border="0" id="tb_pressao_r5_c1" alt="" /></td>
   <td colspan="3"><img name="tb_pressao_r5_c6" src="imagens/meio/tb_pressao_r5_c6.jpg" width="281" height="47" border="0" id="tb_pressao_r5_c6" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="47" border="0" alt="" /></td>
  </tr>



<?


$table3   =  mysql_query("SELECT * FROM pressao_trabalho WHERE material='".$res_table2['material']."' AND classe='".$res_table2['classe']."'" , $conexao) or die($erroconsulta);
//$_SESSION['table3'] = "SELECT * FROM pressao_trabalho WHERE material='".$res_table2['material']."' AND classe='".$res_table2['classe']."'";

while ($res_table3  = mysql_fetch_array($table3))  {



  $pressao1    =  $res_table3['pressao'];
  $temperatura1=  $res_table3['temperatura'];
  $temperatura1=  str_replace(" to ", " até ", $temperatura1);

?>

  <tr>
   <td colspan="2" background="imagens/meio/temp.jpg">

   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <a class="textop">


   <?
   if ($temperatura1 == "-20 até 100") {
   Transforma_temp1(-20);
   echo" até ";
   Transforma_temp1(100);
   } else {
   Transforma_temp1($temperatura1);
   }
   ?>
   
   
   </a></td>
   </tr></table>

   </td>
   <td colspan="2"><img name="tb_pressao_r6_c3" src="imagens/meio/tb_pressao_r6_c3.jpg" width="7" height="22" border="0" id="tb_pressao_r6_c3" alt="" /></td>
   <td colspan="4" background="imagens/meio/press.jpg">

   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <a class="textop">

   <?Transforma_press1($pressao1);?>
   </a></td>
   </tr></table>

   </td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="22" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="8"><img name="linha" src="imagens/meio/linha.jpg" width="569" height="9" border="0" id="linha" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="9" border="0" alt="" /></td>
  </tr>

    <? }  ?>

  <tr>
   <td colspan="8"><img name="fim" src="imagens/meio/fim.jpg" width="569" height="6" border="0" id="fim" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="6" border="0" alt="" /></td>
  </tr>
</table>

<table><tr><td style="height:5"></td></tr></table>





 <? } ?>
 



<table><tr><td style="height:20"></td></tr></table>








<?} else { ?>

<a class="con2">Nenhum resultado encontrado.</a>

<?

}

}


if ($_SESSION['busca']==2) {

if ($res_quant > 0) {
?>


<a name="resultado"><img src="imagens/resultado.gif" border="0"></a>
<table><tr><td style="height:5"></td></tr></table>

<table border="0" cellpadding="0" cellspacing="0" width="569">
<tr>
<td style="width:143px" align="center"><a class="texto2">*De acordo com a norma ASME B16.34</a></td>
</tr>
</table>
<table><tr><td style="height:5"></td></tr></table>

<table border="0" cellpadding="0" cellspacing="0" width="569">
<tr>
<td style="width:143px"></td>
<td style="width:142px">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?=$_SESSION['temperatura']?>)</a></td>
</tr>
</table>

</td>
<td style="width:142px"></td>
<td style="width:142px">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td style="width:20"><img src="imagens/seta_down.gif"></td>
<td><a class="aba" href="#lb_unidades">(<?if ($_SESSION['pressao']=="pound-force/sq.inch") echo "PSIG"; else echo $_SESSION['pressao'];?>)</a></td>
</tr>
</table>

</td>
</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" width="569">
  <tr>
   <td><img src="imagens/meio/spacer.gif" width="140" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="3" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="140" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="3" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="140" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="2" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="140" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="8"><img name="tbpressao_r1_c1" src="imagens/meio/tbpressao_r1_c1.jpg" width="569" height="38" border="0" id="tbpressao_r1_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="38" border="0" alt="" /></td>
  </tr>


 <? while ($res_busca2  = mysql_fetch_array($table2))  {


  if ($sel_temeperatura) $query1="temperatura >= '$sel_temeperatura'"; else  $query1="";
  if ($txt_pressao)      $query2="pressao>='$txt_pressao'"; else $query2="";
  if (($sel_temeperatura!="") && ($txt_pressao!=""))  $and1="AND"; else $and1="";
  if ($sel_material!="") $query3="material LIKE '%$sel_material%'"; else  $query3="";
  //if ((($sel_temeperatura!="") || ($txt_pressao!="")) && ($sel_material!=""))  $and2="AND"; else $and2="";


 $table_busca2   =  mysql_query("SELECT * FROM pressao_trabalho WHERE material = '".$res_busca2['material']."' AND $query1 $and1 $query2 limit 1", $conexao) or die($erroconsulta);

 while ($res2_busca2  = mysql_fetch_array($table_busca2))  {
 
  $pressao1    =  $res2_busca2['pressao'];
  $temperatura1=  $res2_busca2['temperatura'];
  $temperatura1=  str_replace(" to ", " até ", $temperatura1);
  $material1   =  $res2_busca2['material'];
  $material1   =  str_replace("; ", " | ", $material1);





 ?>


   <tr>
   <td background="imagens/meio/celula1.jpg">
   
   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <a class="textop">

   <?=$material1?>

   </a></td>
   </tr></table>


   </td>
   <td><img name="tbpressao_r2_c2" src="imagens/meio/tbpressao_r2_c2.jpg" width="3" height="25" border="0" id="tbpressao_r2_c2" alt="" /></td>
   <td background="imagens/meio/celula2.jpg">

   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <a class="textop">

   <? if ($temperatura1 == "-20 até 100") {
   Transforma_temp1(-20);
   echo" até ";
   Transforma_temp1(100);
   } else {
   Transforma_temp1($temperatura1);
   }
   ?>

   </a></td>
   </tr></table>


   </td>
   <td><img name="tbpressao_r2_c4" src="imagens/meio/tbpressao_r2_c4.jpg" width="3" height="25" border="0" id="tbpressao_r2_c4" alt="" /></td>
   <td background="imagens/meio/celula3.jpg">

   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <a class="textop">

   <?=$res2_busca2['classe']?>

   </a></td>
   </tr></table>

   </td>
   <td><img name="tbpressao_r2_c6" src="imagens/meio/tbpressao_r2_c6.jpg" width="2" height="25" border="0" id="tbpressao_r2_c6" alt="" /></td>
   <td background="imagens/meio/celula4.jpg">

   <table border="0">
   <tr>
   <td style="width:10" align="center"><img src="imagens/seta_blue.gif" border="0"></td>
   <td>
   <a class="textop">

    <?Transforma_press1($pressao1);?>

   </a></td>
   </tr></table>

   </td>
   <td><img name="tbpressao_r2_c8" src="imagens/meio/tbpressao_r2_c8.jpg" width="1" height="25" border="0" id="tbpressao_r2_c8" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="25" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="8"><img name="tbpressao_r3_c1" src="imagens/meio/tbpressao_r3_c1.jpg" width="569" height="7" border="0" id="tbpressao_r3_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="7" border="0" alt="" /></td>
  </tr>
  <? } } ?>



  <tr>
   <td colspan="8"><img name="tbpressao_r5_c1" src="imagens/meio/tbpressao_r5_c1.jpg" width="569" height="6" border="0" id="tbpressao_r5_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="6" border="0" alt="" /></td>
  </tr>
</table>








<? } else { ?>

<a class="con2">Nenhum resultado encontrado.</a>

<? }


}


} ?>

<table><tr><td style="height:5"></td></tr></table>
</center>


   </td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="123" border="0" alt="" /></td>
  </tr>
  <tr>
   <td background="imagens/meio/tabela3_r3_c1.jpg" align="right">



   <table><tr><td><img src="imagens/iconb.jpg" border="0"></td>
   <td ><a class="mais" href="?pag=suporte"> voltar...</a></td></tr>
   </table>




   </td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="23" border="0" alt="" /></td>
  </tr>
</table>

<table><tr><td style="height:5"></td></tr></table>
