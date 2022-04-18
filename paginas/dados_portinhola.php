<body onLoad="display_control('conteudo','show');display_control('preload','hide');" >

<style type="text/css" >
#preload {
    position: absolute;
    top: 500px;
    left: 34%;
    display: block;
    width: 300px;
    height: 40px;
    border: 1px solid #666666;
    background-color: #FFFFFF;
}
#preload p {
    text-align: center;
    color: #000000;
}
#pagina {
    display:block;
}
</style>

<script>
function display_control(div,state){

    if(state=='show'){
        document.getElementById(div).style.display = "block";
    } else {
        document.getElementById(div).style.display = "none";
    }

}
</script>


<?

include_once('includes/conversor.php');

if ($_POST['unidade']=="") $_POST['unidade']="milímetro [mm]";

function Transforma_Medida($valor, $unidade) {
$valor     = ToSI_Dist($valor, "milímetro [mm]");
$resultado = FromSI_Dist($valor, $unidade);
$resultado = abrevia2($resultado, 7);
$resultado = str_replace(".", ",", $resultado);


echo $resultado;
}


?>
<script language="javascript">

function ImagemSelecionada(imagem){
	var ImagemMostrar = imagem;
	document.getElementById("imagemmudar").src = "imagens/desenhos/"+ImagemMostrar+""
}

function ImagemSelecionadaDados(imagem){
	var ImagemMostrar = imagem;
	document.getElementById("dados").src = "imagens/abas/"+ImagemMostrar+""
}

function ImagemSelecionadaMonte(imagem){
	var ImagemMostrar = imagem;
	document.getElementById("monte").src = "imagens/abas/"+ImagemMostrar+""
}
function ImagemSelecionadaConhece(imagem){
	var ImagemMostrar = imagem;
	document.getElementById("conhece").src = "imagens/abas/"+ImagemMostrar+""
}
</script>

<table><tr><td style="height:10"></td></tr></table>

<img src="imagens/portinhola_tb.jpg" width="570" height="52" border="0">

<table><tr><td style="height:10"></td></tr></table>


<table border="0" cellpadding="0" cellspacing="0" width="570">
  <tr>
   <td><img src="imagens/abas/spacer.gif" width="110" height="1" border="0" alt="" /></td>
   <td><img src="imagens/abas/spacer.gif" width="6"   height="1" border="0" alt="" /></td>
   <td><img src="imagens/abas/spacer.gif" width="135" height="1" border="0" alt="" /></td>
   <td><img src="imagens/abas/spacer.gif" width="7"   height="1" border="0" alt="" /></td>
   <td><img src="imagens/abas/spacer.gif" width="170" height="1" border="0" alt="" /></td>
   <td><img src="imagens/abas/spacer.gif" width="142" height="1" border="0" alt="" /></td>
   <td><img src="imagens/abas/spacer.gif" width="1"   height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td><a href="?pag=conhecendo_portinhola" onMouseOver="ImagemSelecionadaConhece('aba_conhecendo2.gif')" onMouseOut="ImagemSelecionadaConhece('aba_conhecendo.gif')"><img name="aba_conhecendo" src="imagens/abas/aba_conhecendo.gif" width="110" height="35" border="0" id="conhece" alt="" /></a></td>
   <td><img name="aba1_r1_c2" src="imagens/abas/aba1_r1_c2.gif" width="6" height="35" border="0" id="aba1_r1_c2" alt="" /></td>
   <td><a href="#2"><img name="aba_dados" src="imagens/abas/aba_dados_sel.gif" width="135" height="35" border="0" id="dados" alt="" /></a></td>
   <td><img name="aba1_r1_c4" src="imagens/abas/aba1_r1_c4.gif" width="7" height="35" border="0" id="aba1_r1_c4" alt="" /></td>
   <td><a href="?pag=monte_valvula&val=portinhola" onMouseOver="ImagemSelecionadaMonte('aba_monte2.gif')" onMouseOut="ImagemSelecionadaMonte('aba_monte.gif')"><img name="aba_monte" src="imagens/abas/aba_monte.gif" width="170" height="35" border="0" id="monte" alt="" /></a></td>
   <td><img name="aba1_r1_c6" src="imagens/abas/aba1_r1_c6.gif" width="142" height="35" border="0" id="aba1_r1_c6" alt="" /></td>
   <td><img src="imagens/abas/spacer.gif" width="1" height="35" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="6"><img name="aba1_r2_c1" src="imagens/abas/aba1_r2_c1.gif" width="570" height="7" border="0" id="aba1_r2_c1" alt="" /></td>
   <td><img src="imagens/abas/spacer.gif" width="1" height="7" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="6" background="imagens/abas/meio.gif" width="570" height="8" border="0" id="meio" />


<table border="0" cellpadding="0" cellspacing="0" width="570">
<tr><td align="center"><a class="con5">&nbsp; Dados Técnicos da válvula retenção portinhola:</a></td></tr>
</table>


   <center>
   <br>
   <table border="0" style="width:100%">
   <tr>
   <td <?if($_GET['tipo']=="") { ?> style="width:100%"<? } else { ?> style="width:387" <?}?>>
   <center>

   <?

   if($_GET['tipo']=="roscada") {
   $con1="con1";
   $imagem_default='portinholaroscada.gif';
   $imagem1="portinholaroscada1-corpo.gif";
   $imagem2="portinholaroscada2-anel.gif";
   $imagem3="portinholaroscada3-pendulo.gif";
   $imagem4="portinholaroscada4-disco.gif";
   $imagem5="portinholaroscada5-porcadisco.gif";
   $imagem6="portinholaroscada6-pino.gif";
   $imagem7="portinholaroscada7-junta.gif";
   $imagem8="portinholaroscada8-tampa.gif";
   $imagem9="portinholaroscada9-porca.gif";
   $imagem10="portinholaroscada10-prisioneiros.gif";
   $imagem11="portinholaroscada11-plaqueta.gif";
   }else{ $con1="con";  }

   if($_GET['tipo']=="sw") {
   $con2="con1";
   $imagem_default='portinholasw.gif';
   $imagem1="portinholasw1-corpo.gif";
   $imagem2="portinholasw2-anel.gif";
   $imagem3="portinholasw3-pendulo.gif";
   $imagem4="portinholasw4-disco.gif";
   $imagem5="portinholasw5-porcadisco.gif";
   $imagem6="portinholasw6-pino.gif";
   $imagem7="portinholasw7-junta.gif";
   $imagem8="portinholasw8-tampa.gif";
   $imagem9="portinholasw9-porcas.gif";
   $imagem10="portinholasw10-prisioneiros.gif";
   $imagem11="portinholasw11-plaqueta.gif";
   }else{ $con2="con";  }

   ?>

   <a class="<?=$con1?>" href="?pag=dados_portinhola&tipo=roscada" name="valv">NPT</a> <a class="texto1">|</a>
   <a class="<?=$con2?>" href="?pag=dados_portinhola&tipo=sw#valv">SW</a>



   <?if($_GET['tipo']=="") {  ?>
   <br><br>

   <A class="formulario">Escolha acima um tipo de válvula retenção pistão.</a>

   <?  }  else {  ?>
   <img src="imagens/desenhos/<?=$imagem_default?>" border="0" id="imagemmudar">
   <? } ?>
   
   <?if($_GET['tipo']!="") {  ?>

   <br>

   <center>

   <table border="0">
   <tr>
   <td height="20"  align="center">
   <a class="con1">Unidade:</a>
   </td>
   </tr>
   <tr>
   <td>
   <form action="<?$_SERVER['REQUEST_URI']?>" method="post">
   <select name="unidade">
   <option value="<?=$_POST['unidade']?>"><?=$_POST['unidade']?></option>
   <option value="centímetro [cm]">centímetro [cm]</option>
   <option value="decímetro [dm]">decímetro [dm]</option>
   <option value="polegada">polegada</option>
   <option value="metro [m]">metro [m]</option>
   <option value="micrometro">micrometro</option>
   <option value="milímetro [mm]" <?if ($_POST['unidade']=="") echo "selected";?>>milímetro [mm]</option>
   </select>
   <input type="submit" value="OK">
   </form>
   </td>
   </tr>
   </table>
   </center>


   <? } ?>
   
    <?  if($_GET['tipo']=="roscada" || $_GET['tipo']=="sw") { ?>

   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr background="imagens/fundo_azul3.jpg" style="height:30">
   <td align="center" width="190"><a class="con">Bitola</a></td>
   <td align="center" width="190"><a class="con">A</a></td>
   <td align="center" width="190"><a class="con">B</a></td>
   </tr>
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("82", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("81", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?>  </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("88", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("84", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?>   </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("105", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?>  ± <?Transforma_Medida("0.7", $_POST['unidade']);?>   </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("148", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("121", $_POST['unidade']);?>  ± <?Transforma_Medida("1", $_POST['unidade']);?>   </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("148", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("121", $_POST['unidade']);?>  ± <?Transforma_Medida("1", $_POST['unidade']);?>  </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("165", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("135", $_POST['unidade']);?>  ± <?Transforma_Medida("1", $_POST['unidade']);?>   </a</td>
   </tr>
   </table>
   <? } ?>

   </td>

  <?if($_GET['tipo']=="") {  ?>
  <td></td>
  <? } else { ?>
  
  
  <SCRIPT language="JavaScript">
<!--
if (document.images)
{
  pic1= new Image(380,477);
  pic1.src="imagens/desenhos/<?=$imagem1?>";
  pic2= new Image(380,477);
  pic2.src="imagens/desenhos/<?=$imagem2?>";
  pic3= new Image(380,477);
  pic3.src="imagens/desenhos/<?=$imagem3?>";
  pic4= new Image(380,477);
  pic4.src="imagens/desenhos/<?=$imagem4?>";
  pic5= new Image(380,477);
  pic5.src="imagens/desenhos/<?=$imagem5?>";
  pic6= new Image(380,477);
  pic6.src="imagens/desenhos/<?=$imagem6?>";
  pic7= new Image(380,477);
  pic7.src="imagens/desenhos/<?=$imagem7?>";
  pic8= new Image(380,477);
  pic8.src="imagens/desenhos/<?=$imagem8?>";
  pic9= new Image(380,477);
  pic9.src="imagens/desenhos/<?=$imagem9?>";
  pic10= new Image(380,477);
  pic10.src="imagens/desenhos/<?=$imagem10?>";
  pic11= new Image(380,477);
  pic11.src="imagens/desenhos/<?=$imagem11?>";
}
//-->
</SCRIPT>


  <td background="imagens/fundo_componentes2.jpg"  valign="top">

  <table border="0" style="width:100%">
  <tr><td colspan="2" background="imagens/fundo_componentes.jpg" style="height:23" align="center"><a class="titulo_branco"><strong>Componentes</strong></a></td> </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">1</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem1?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Corpo <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">2</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem2?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Anel <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">3</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem3?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Pêndulo <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">4</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem4?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Disco <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

    <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">5</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem5?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Porca do Disco <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">6</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem6?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Pino <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">7</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem7?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Junta Espirotálica<!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">8</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem8?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Tampa <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">9</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem9?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Porca do Corpo <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>
  
  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">9</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem10?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Prisioneiros <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>
  
  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">9</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem11?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Placa de Identificação <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  </table>

  </td>
  <? } ?>
  </tr>
  </table>


</center>

<table><tr><td style="height:5"></td></tr></table>


   </td>
   <td><img src="imagens/abas/spacer.gif" width="1" height="5" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="7"><img name="abas_r4_c1" src="imagens/abas/down.gif" width="570" height="8" border="0" id="abas_r4_c1" alt="" /></td>
   <td><img src="imagens/abas/spacer.gif" width="1" height="8" border="0" alt="" /></td>
  </tr>
</table>

<br><br>


