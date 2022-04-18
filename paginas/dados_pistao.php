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

<img src="imagens/pistao_tb.jpg" width="570" height="52" border="0">

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
   <td><a href="?pag=conhecendo_pistao" onMouseOver="ImagemSelecionadaConhece('aba_conhecendo2.gif')" onMouseOut="ImagemSelecionadaConhece('aba_conhecendo.gif')"><img name="aba_conhecendo" src="imagens/abas/aba_conhecendo.gif" width="110" height="35" border="0" id="conhece" alt="" /></a></td>
   <td><img name="aba1_r1_c2" src="imagens/abas/aba1_r1_c2.gif" width="6" height="35" border="0" id="aba1_r1_c2" alt="" /></td>
   <td><a href="#2"><img name="aba_dados" src="imagens/abas/aba_dados_sel.gif" width="135" height="35" border="0" id="dados" alt="" /></a></td>
   <td><img name="aba1_r1_c4" src="imagens/abas/aba1_r1_c4.gif" width="7" height="35" border="0" id="aba1_r1_c4" alt="" /></td>
   <td><a href="?pag=monte_valvula&val=pistao" onMouseOver="ImagemSelecionadaMonte('aba_monte2.gif')" onMouseOut="ImagemSelecionadaMonte('aba_monte.gif')"><img name="aba_monte" src="imagens/abas/aba_monte.gif" width="170" height="35" border="0" id="monte" alt="" /></a></td>
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
<tr><td align="center"><a class="con5">&nbsp; Dados Técnicos da válvula retenção pistão:</a></td></tr>
</table>

   <center>
   <br>
   <table border="0" style="width:100%">
   <tr>
   <td <?if($_GET['tipo']=="") { ?> style="width:100%"<? } else { ?> style="width:387" <?}?>>
   <center>

   <?

   if($_GET['tipo']=="BW") {
   $con1="con1";
   $imagem_default='pistaobw.gif';
   $imagem1="pistaobw1-plaqueta.gif";
   $imagem2="pistaobw2-prisioneiros.gif";
   $imagem3="pistaobw3-porcas.gif";
   $imagem4="pistaobw4-tampa.gif";
   $imagem5="pistaobw5-junta.gif";
   $imagem6="pistaobw6-mola.gif";
   $imagem7="pistaobw7-pistao.gif";
   $imagem8="pistaobw8-sede.gif";
   $imagem9="pistaobw9-corpo.gif";
   }else{ $con1="con";  }
   
   if($_GET['tipo']=="encaixe") {
   $con2="con1";
   $imagem_default='pistaoboj.gif';
   $imagem1="pistaoboj1-plaqueta.gif";
   $imagem2="pistaoboj2-prisioneiro.gif";
   $imagem3="pistaoboj3-porcas.gif";
   $imagem4="pistaoboj4-tampa.gif";
   $imagem5="pistaoboj5-junta.gif";
   $imagem6="pistaoboj6-mola.gif";
   $imagem7="pistaoboj7-pistao.gif";
   $imagem8="pistaoboj8-sede.gif";
   $imagem9="pistaoboj9-corpo.gif";
   }else{ $con2="con";  }
   
   if($_GET['tipo']=="flangeada") {
   $con3="con1";
   $imagem_default='pistaoflangeada.gif';
   $imagem1="pistaoflangeada1-plaqueta.gif";
   $imagem2="pistaoflangeada2-prisioneiros.gif";
   $imagem3="pistaoflangeada3-porcas.gif";
   $imagem4="pistaoflangeada4-tampa.gif";
   $imagem5="pistaoflangeada5-junta.gif";
   $imagem6="pistaoflangeada6-mola.gif";
   $imagem7="pistaoflangeada7-pistao.gif";
   $imagem8="pistaoflangeada8-sede.gif";
   $imagem9="pistaoflangeada9-corpo.gif";
   }else{ $con3="con";  }

   if($_GET['tipo']=="roscada") {
   $con4="con1";
   $imagem_default='pistaoroscada.gif';
   $imagem1="pistaoroscada1-plaqueta.gif";
   $imagem2="pistaoroscada2-prisioneiros.gif";
   $imagem3="pistaoroscada3-porcas.gif";
   $imagem4="pistaoroscada4-tampa.gif";
   $imagem5="pistaoroscada5-junta.gif";
   $imagem6="pistaoroscada6-mola.gif";
   $imagem7="pistaoroscada7-pistao.gif";
   $imagem8="pistaoroscada8-sede.gif";
   $imagem9="pistaoroscada9-corpo.gif";
   }else{ $con4="con";  }
   ?>
   
   <a class="<?=$con1?>" href="?pag=dados_pistao&tipo=BW#valv" name="valv">BW</a> <a class="texto1">|</a>
   <a class="<?=$con3?>" href="?pag=dados_pistao&tipo=flangeada#valv">Flangeada</a> <a class="texto1">|</a>
   <a class="<?=$con4?>" href="?pag=dados_pistao&tipo=roscada#valv">NPT</a> |
   <a class="<?=$con2?>" href="?pag=dados_pistao&tipo=encaixe#valv">SW</a> <a class="texto1">




   <?if($_GET['tipo']=="") {  ?>
   <br><br>

   <A class="formulario">Escolha acima um tipo de válvula retenção pistão.</a>

   <?  }  else {  ?>

   <div id="preload" ><p><img src="imagens/preload.gif"><a class="formulario"> Carregando...</a></p></div>
   <div id="conteudo"><p><img src="imagens/desenhos/<?=$imagem_default?>" border="0" id="imagemmudar"></p></div>
   <?if($_GET['tipo']=="BW") {  ?><br><center><a class="texto1">(face a face padrão fabricante, niple adaptado)</a></center><?}?>
      <?if($_GET['tipo']=="flangeada") {  ?><br><center><a class="texto1">(flanges adaptadas com solda de penetração total)</a></center><?}?>
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
   
   
          <?  if($_GET['tipo']=="BW") { ?>

   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr background="imagens/fundo_azul3.jpg" style="height:30">
   <td align="center" width="190"><a class="con">Bitola</a></td>
   <td align="center" width="190"><a class="con">A</a></td>
   </tr>
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("82", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("88", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("130", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("171", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("171", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("186", $_POST['unidade']);?> </a</td>
   </tr>
   </table>


    <br>
   <center><a class="con">Medida B:</a></center>
   <br>
   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr background="imagens/fundo_azul3.jpg" style="height:30">
   <td align="center" width="76"><a class="con">Bitola</a></td>
   <td align="center" width="76"><a class="con">Classe 150</a></td>
   <td align="center" width="76"><a class="con">Classe 300</a></td>
   <td align="center" width="76"><a class="con">Classe 600</a></td>
   <td align="center" width="76"><a class="con">Classe 900</a></td>
   <td align="center" width="76"><a class="con">Classe 1500</a></td>
   </tr>
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("108", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("152", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("165 ", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu">ND </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("216", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("117", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("176", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("190", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("229", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("216", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("127", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("203", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("216", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("254", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("254", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("140", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("216", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("229", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("279", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("279", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("165", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("229", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("241", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("305", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("305", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("203", $_POST['unidade']);?>  </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("267", $_POST['unidade']);?>  </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("292", $_POST['unidade']);?>  </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("368", $_POST['unidade']);?>  </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("368", $_POST['unidade']);?>  </a</td>
   </tr>
   </table>

   <? } ?>
   
   
   
       <?  if($_GET['tipo']=="flangeada") { ?>

   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr background="imagens/fundo_azul3.jpg" style="height:30">
   <td align="center" width="190"><a class="con">Bitola</a></td>
   <td align="center" width="190"><a class="con">A</a></td>
   </tr>
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("82", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("88", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("130", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("171", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("171", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("186", $_POST['unidade']);?> </a</td>
   </tr>
   </table>
   
   
    <br>
   <center><a class="con">Medida B:</a></center>
   <br>
   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr background="imagens/fundo_azul3.jpg" style="height:30">
   <td align="center" width="76"><a class="con">Bitola</a></td>
   <td align="center" width="76"><a class="con">Classe 150</a></td>
   <td align="center" width="76"><a class="con">Classe 300</a></td>
   <td align="center" width="76"><a class="con">Classe 600</a></td>
   <td align="center" width="76"><a class="con">Classe 900</a></td>
   <td align="center" width="76"><a class="con">Classe 1500</a></td>
   </tr>
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("108", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("152", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("165", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("216", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("216", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("117", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("178", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("190", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("229", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("229", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("127", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("203", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("216", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("254", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("254", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("140", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("216", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("229", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("279", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("279", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("165", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("229", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("241", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("305", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("305", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("205", $_POST['unidade']);?>  </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("267", $_POST['unidade']);?>  </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("292", $_POST['unidade']);?>  </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("368", $_POST['unidade']);?>  </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("368", $_POST['unidade']);?>  </a</td>
   </tr>
   </table>

   <? } ?>
   
   <?  if($_GET['tipo']=="roscada" || $_GET['tipo']=="encaixe") { ?>

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
   <td align="center"><a class="menu">1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("82", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("81", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/8"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("82", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("81", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("82", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("81", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("88", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("84", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("130", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("130", $_POST['unidade']);?> ± <?Transforma_Medida("0.7", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("171", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("141", $_POST['unidade']);?> ± <?Transforma_Medida("1", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("171", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("141", $_POST['unidade']);?> ± <?Transforma_Medida("1", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("186", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("156", $_POST['unidade']);?> ± <?Transforma_Medida("1", $_POST['unidade']);?> </a</td>
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
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem1?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Placa de Identificação <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">2</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem2?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Prisioneiro do corpo <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">3</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem3?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Porcas do corpo <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">4</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem4?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Tampa <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

    <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">5</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem5?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Junta Espiratória <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">6</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem6?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Mola <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">7</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem7?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Pistão <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">8</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem8?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Sede <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">9</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem9?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Corpo <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>
  <?
  if($_GET['tipo']=="flangeada") {
  ?>
  
  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">10</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('pistaoflangeada10-solda.gif')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Solda <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">11</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('pistaoflangeada11-flanges.gif')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Flange <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>
  
  <?
  }
  ?>
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


