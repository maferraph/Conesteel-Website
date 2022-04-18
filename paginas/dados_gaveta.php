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

<img src="imagens/gaveta_tb.jpg" width="570" height="52" border="0">

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
   <td><a href="?pag=conhecendo_gaveta" onMouseOver="ImagemSelecionadaConhece('aba_conhecendo2.gif')" onMouseOut="ImagemSelecionadaConhece('aba_conhecendo.gif')"><img name="aba_conhecendo" src="imagens/abas/aba_conhecendo.gif" width="110" height="35" border="0" id="conhece" alt="" /></a></td>
   <td><img name="aba1_r1_c2" src="imagens/abas/aba1_r1_c2.gif" width="6" height="35" border="0" id="aba1_r1_c2" alt="" /></td>
   <td><a href="#2"><img name="aba_dados" src="imagens/abas/aba_dados_sel.gif" width="135" height="35" border="0" id="dados" alt="" /></a></td>
   <td><img name="aba1_r1_c4" src="imagens/abas/aba1_r1_c4.gif" width="7" height="35" border="0" id="aba1_r1_c4" alt="" /></td>
   <td><a href="?pag=monte_valvula&val=gaveta" onMouseOver="ImagemSelecionadaMonte('aba_monte2.gif')" onMouseOut="ImagemSelecionadaMonte('aba_monte.gif')"><img name="aba_monte" src="imagens/abas/aba_monte.gif" width="170" height="35" border="0" id="monte" alt="" /></a></td>
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
<tr><td align="center"><a class="con5">&nbsp; Dados Técnicos da válvula gaveta:</a></td></tr>
</table>




   <center>
   <br>
   <table border="0" style="width:100%">
   <tr>
   <td <?if($_GET['tipo']=="") { ?> style="width:100%"<? } else { ?> style="width:387" <?}?> valign="top">
   <center>

   <?

   if($_GET['tipo']=="BW") {
   $con1="con1";
   $imagem_default='gavetabw.gif';
   $imagem1="gavetabw1-placa.gif";
   $imagem2="gavetabw2-porca_volante.gif";           ;
   $imagem3="gavetabw3-volante.gif";
   $imagem4="gavetabw4-arruela_castelo.gif";
   $imagem5="gavetabw5-bucha.gif";
   $imagem6="gavetabw6-prisioneiro_preme.gif";
   $imagem7="gavetabw7-porca_preme.gif";
   $imagem8="gavetabw8-haste.gif";
   $imagem9="gavetabw9-preme.gif";
   $imagem10="gavetabw10-gaxeta.gif";
   $imagem11="gavetabw11-prisioneiros.gif";
   $imagem12="gavetabw12-porca_corpo.gif";
   $imagem13="gavetabw13-castelo.gif";
   $imagem14="gavetabw14-junta.gif";
   $imagem15="gavetabw15-cunha.gif";
   $imagem16="gavetabw16-anel.gif";
   $imagem17="gavetabw17-corpo.gif";

   
   }else{ $con1="con";  }

   if($_GET['tipo']=="flangeada") {
   $con2="con1";
   $imagem_default='gavetaflangeada.gif';
   $imagem1="gavetaflangeada1-placa.gif";
   $imagem2="gavetaflangeada2-porca_volante.gif";
   $imagem3="gavetaflangeada3-volante.gif";
   $imagem4="gavetaflangeada4-arruela_castelo.gif";
   $imagem5="gavetaflangeada5-bucha.gif";
   $imagem6="gavetaflangeada6-prisioneiro_preme.gif";
   $imagem7="gavetaflangeada7-porca_preme.gif";
   $imagem8="gavetaflangeada8-haste.gif";
   $imagem9="gavetaflangeada9-preme.gif";
   $imagem10="gavetaflangeada10-gaxeta.gif";
   $imagem11="gavetaflangeada11-prisioneiros.gif";
   $imagem12="gavetaflangeada12-porca_corpo.gif";
   $imagem13="gavetaflangeada13-castelo.gif";
   $imagem14="gavetaflangeada14-junta.gif";
   $imagem15="gavetaflangeada15-cunha.gif";
   $imagem16="gavetaflangeada16-anel.gif";
   $imagem17="gavetaflangeada17-corpo.gif";
   $imagem18="gavetaflangeada18-solda.gif";
   $imagem19="gavetaflangeada19-flange.gif";
   
   }else{ $con2="con";  }

   if($_GET['tipo']=="npt") {
   $con3="con1";
   $imagem_default='gavetanpt.gif';
   $imagem1="gavetanpt1-placa.gif";
   $imagem2="gavetanpt2-porca_volante.gif";
   $imagem3="gavetanpt3-volante.gif";
   $imagem4="gavetanpt4-arruela_castelo.gif";
   $imagem5="gavetanpt5-bucha.gif";
   $imagem6="gavetanpt6-prisioneiro_preme.gif";
   $imagem7="gavetanpt7-porca_preme.gif";
   $imagem8="gavetanpt8-haste.gif";
   $imagem9="gavetanpt9-preme.gif";
   $imagem10="gavetanpt10-gaxeta.gif";
   $imagem11="gavetanpt11-prisioneiros.gif";
   $imagem12="gavetanpt12-porca_corpo.gif";
   $imagem13="gavetanpt13-castelo.gif";
   $imagem14="gavetanpt14-junta.gif";
   $imagem15="gavetanpt15-cunha.gif";
   $imagem16="gavetanpt16-anel.gif";
   $imagem17="gavetanpt17-corpo.gif";
   }else{ $con3="con";  }

   if($_GET['tipo']=="SW") {
   $con4="con1";
   $imagem_default='gavetasw.gif';
   $imagem1="gavetasw1-placa.gif";
   $imagem2="gavetasw2-porca_volante.gif";
   $imagem3="gavetasw3-volante.gif";
   $imagem4="gavetasw4-arruela_castelo.gif";
   $imagem5="gavetasw5-bucha.gif";
   $imagem6="gavetasw6-prisioneiro_preme.gif";
   $imagem7="gavetasw7-porca_preme.gif";
   $imagem8="gavetasw8-haste.gif";
   $imagem9="gavetasw9-preme.gif";
   $imagem10="gavetasw10-gaxeta.gif";
   $imagem11="gavetasw11-prisioneiros.gif";
   $imagem12="gavetasw12-porca_corpo.gif";
   $imagem13="gavetasw13-castelo.gif";
   $imagem14="gavetasw14-junta.gif";
   $imagem15="gavetasw15-cunha.gif";
   $imagem16="gavetasw16-anel.gif";
   $imagem17="gavetasw17-corpo.gif";
   }else{ $con4="con";  }
   ?>

   <a class="<?=$con1?>" href="?pag=dados_gaveta&tipo=BW#valv" name="valv">BW</a> <a class="texto1">|</a>
   <a class="<?=$con2?>" href="?pag=dados_gaveta&tipo=flangeada#valv">Flangeada</a> <a class="texto1">|</a>
   <a class="<?=$con3?>" href="?pag=dados_gaveta&tipo=npt#valv">NPT</a> <a class="texto1">|</a>
   <a class="<?=$con4?>" href="?pag=dados_gaveta&tipo=SW#valv">SW</a>


   <?if($_GET['tipo']=="") {  ?>
   <br><br>

   <A class="formulario">Escolha acima um tipo de válvula gaveta.</a>

   <?  }  else {  ?>
   <br><br>
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
   
   
   <?  if($_GET['tipo']=="npt") { ?>

   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr background="imagens/fundo_azul3.jpg" style="height:30">
   <td align="center" width="76"><a class="con">Bitola</a></td>
   <td align="center" width="76"><a class="con">A</a></td>
   <td align="center" width="76"><a class="con">B</a></td>
   <td align="center" width="76"><a class="con">C</a></td>
   <td align="center" width="76"><a class="con">D</a></td>
   </tr>
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("182", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("167", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("81", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/8"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("182", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("167", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("81", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("182", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("167", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("81", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("191", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("171", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("84", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("222", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("199", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?> ± <?Transforma_Medida("0.7", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("297", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("262", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("121", $_POST['unidade']);?> ± <?Transforma_Medida("1", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("297", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("262", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("121", $_POST['unidade']);?> ± <?Transforma_Medida("1", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("324", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("282", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("135", $_POST['unidade']);?> ± <?Transforma_Medida("1", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?></a</td>
   </tr>

   </table>
   <? } ?>
   
   
   <?  if($_GET['tipo']=="SW") { ?>

   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr background="imagens/fundo_azul3.jpg" style="height:30">
   <td align="center" width="76"><a class="con">Bitola</a></td>
   <td align="center" width="76"><a class="con">A</a></td>
   <td align="center" width="76"><a class="con">B</a></td>
   <td align="center" width="76"><a class="con">C</a></td>
   <td align="center" width="76"><a class="con">D</a></td>
   </tr>
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("182", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("167", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("81", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/8"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("182", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("167", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("81", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("182", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("167", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("181", $_POST['unidade']);?> ± 0,5</a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("191", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("171", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("84", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("222", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("199", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?> ± <?Transforma_Medida("0.7", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("297", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("262", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("121", $_POST['unidade']);?> ± <?Transforma_Medida("1", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("297", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("262", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("121", $_POST['unidade']);?> ± <?Transforma_Medida("1", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("324", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("282", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("135", $_POST['unidade']);?> ± <?Transforma_Medida("1", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?></a</td>
   </tr>

   </table>
   <? } ?>
   
  <?  if($_GET['tipo']=="BW") { ?>

   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr background="imagens/fundo_azul3.jpg" style="height:30">
   <td align="center" width="76"><a class="con">Bitola</a></td>
   <td align="center" width="76"><a class="con">A</a></td>
   <td align="center" width="76"><a class="con">B</a></td>
   <td align="center" width="76"><a class="con">D</a></td>
   </tr>
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("182", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("167", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/8"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("182", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("167", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("182", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("167", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("191", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("171", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("222", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("199", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("297", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("262", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("297", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("262", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("324", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("282", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?></a</td>
   </tr>

   </table>

       <center><a class="con">Medida C:</a></center>
   
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
   <td align="center"><a class="menu"><?Transforma_Medida("140", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("165", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu">ND </a</td>
   <td align="center"><a class="menu">ND</a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("117", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("152", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("190", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu">ND </a</td>
   <td align="center"><a class="menu">ND</a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("127", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("165", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("216", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("254", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("254", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("140", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("178", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("229", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("279", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("279", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("165", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("190", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("241", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("305", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("305", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("216", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("216", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("292", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("368", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("368", $_POST['unidade']);?></a</td>
   </tr>
   </table>
   <? } ?>
   
   
   <?  if($_GET['tipo']=="flangeada") { ?>
   <br>
   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr background="imagens/fundo_azul3.jpg" style="height:30">
   <td align="center" width="76"><a class="con">Bitola</a></td>
   <td align="center" width="76"><a class="con">A</a></td>
   <td align="center" width="76"><a class="con">B</a></td>
   <td align="center" width="76"><a class="con">D</a></td>
   </tr>
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("182", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("167", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("191", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("171", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("222", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("199", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("297", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("262", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("297", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("262", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("324", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("282", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?></a</td>
   </tr>

   </table>
   <br>
       <center><a class="con">Medida C:</a></center>

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
   <td align="center"><a class="menu"><?Transforma_Medida("140", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("165", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu">ND </a</td>
   <td align="center"><a class="menu">ND</a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("117", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("152", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("190", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu">ND </a</td>
   <td align="center"><a class="menu">ND</a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("127", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("165", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("216", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("254", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("254", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("140", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("178", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("229", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("279", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("279", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("165", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("190", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("241", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("305", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("305", $_POST['unidade']);?></a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("216", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("216", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("282", $_POST['unidade']);?></a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("368", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("368", $_POST['unidade']);?> </a</td>
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
  pic12= new Image(380,477);
  pic12.src="imagens/desenhos/<?=$imagem12?>";
  pic13= new Image(380,477);
  pic13.src="imagens/desenhos/<?=$imagem13?>";
  pic14= new Image(380,477);
  pic14.src="imagens/desenhos/<?=$imagem14?>";
  pic15= new Image(380,477);
  pic15.src="imagens/desenhos/<?=$imagem15?>";
  pic16= new Image(380,477);
  pic16.src="imagens/desenhos/<?=$imagem16?>";
  pic17= new Image(380,477);
  pic17.src="imagens/desenhos/<?=$imagem17?>";
  pic18= new Image(380,477);
  pic18.src="imagens/desenhos/<?=$imagem18?>";
  pic19= new Image(380,477);
  pic19.src="imagens/desenhos/<?=$imagem19?>";
}
//-->
</SCRIPT>




  <td background="imagens/fundo_componentes2.jpg"  valign="top">

  <table border="0" style="width:100%">
  <tr><td colspan="2" background="imagens/fundo_componentes.jpg" style="height:23" align="center"><a class="titulo_branco"><strong>Componentes</strong></a></td> </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">1</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem1?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Placa - Identificação <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">2</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem2?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Porca do Volante <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">3</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem3?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Volante <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">4</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem4?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Arruela do Castelo <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

    <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">5</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem5?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Bucha da Haste <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">6</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem6?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Prisioneiro - Preme <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">7</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem7?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Porca do Preme <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">8</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem8?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Haste <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">9</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem9?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Preme <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">10</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem10?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Gaxeta <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">11</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem11?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Prisioneiro Corpo <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">12</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem12?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Porca do Corpo <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">13</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem13?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Castelo<!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">14</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem14?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Junta Espirotálica <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">15</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem15?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Cunha <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">16</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem16?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Anel Gaveta <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">17</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem17?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Corpo <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <?  if($_GET['tipo']=="flangeada") { ?>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">18</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem18?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Solda <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">19</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem19?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')">Flange <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <? } ?>

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


