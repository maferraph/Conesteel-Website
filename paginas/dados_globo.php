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

<img src="imagens/globo_tb.jpg" width="570" height="52" border="0">

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
   <td><a href="?pag=conhecendo_globo" onMouseOver="ImagemSelecionadaConhece('aba_conhecendo2.gif')" onMouseOut="ImagemSelecionadaConhece('aba_conhecendo.gif')"><img name="aba_conhecendo" src="imagens/abas/aba_conhecendo.gif" width="110" height="35" border="0" id="conhece" alt="" /></a></td>
   <td><img name="aba1_r1_c2" src="imagens/abas/aba1_r1_c2.gif" width="6" height="35" border="0" id="aba1_r1_c2" alt="" /></td>
   <td><a href="#2"><img name="aba_dados" src="imagens/abas/aba_dados_sel.gif" width="135" height="35" border="0" id="dados" alt="" /></a></td>
   <td><img name="aba1_r1_c4" src="imagens/abas/aba1_r1_c4.gif" width="7" height="35" border="0" id="aba1_r1_c4" alt="" /></td>
   <td><a href="?pag=monte_valvula&val=globo" onMouseOver="ImagemSelecionadaMonte('aba_monte2.gif')" onMouseOut="ImagemSelecionadaMonte('aba_monte.gif')"><img name="aba_monte" src="imagens/abas/aba_monte.gif" width="170" height="35" border="0" id="monte" alt="" /></a></td>
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
<tr><td align="center"><a class="con5">&nbsp; Dados Técnicos da válvula globo:</a></td></tr>
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
   $imagem_default='globobw.gif';
   $imagem1="globobw1-arruela.gif";                      $componente1="Arruela do Volante";
   $imagem2="globobw2-porca_haste.gif";                  $componente2="Porca da Haste";
   $imagem3="globobw3-plaqueta.gif";                     $componente3="Placa - Identificação";
   $imagem4="globobw4-volante.gif";                      $componente4="Volante";
   $imagem5="globobw5-bucha.gif";                        $componente5="Bucha da Haste";
   $imagem6="globobw6-prisioneiro_preme.gif";            $componente6="Prisioneiro - Preme";
   $imagem7="globobw7-porca_preme.gif";                  $componente7="Porca do Preme";
   $imagem8="globobw8-haste.gif";                        $componente8="Haste";
   $imagem9="globobw9-preme.gif";                        $componente9="Preme";
   $imagem10="globobw10-gaxeta.gif";                     $componente10="Gaxeta";
   $imagem11="globobw11-prisioneiro_corpo.gif";          $componente11="Prisioneiro Corpo";
   $imagem12="globobw12-porca_corpo.gif";                $componente12="Porca do Corpo";
   $imagem13="globobw13-castelo.gif";                    $componente13="Castelo";
   $imagem14="globobw14-junta.gif";                      $componente14="Junta Espirotálica";
   $imagem15="globobw15-contra-sede.gif";                $componente15="Contra Sede";
   $imagem16="globobw16-sede.gif";                       $componente16="Sede";
   $imagem17="globobw17-corpo.gif";                      $componente17="Corpo";


   }else{ $con1="con";  }

   if($_GET['tipo']=="flangeada") {
   $con2="con1";
   $imagem_default='globoflangeada.gif';
   $imagem1="globoflangeada1-arruela.gif";               $componente1="Arruela do Volante";
   $imagem2="globoflangeada2-porca_castelo.gif";         $componente2="Porca da Haste";
   $imagem3="globoflangeada3-volante.gif";               $componente3="Volante";
   $imagem4="globoflangeada4-plaqueta.gif";              $componente4="Placa - Identificação";
   $imagem5="globoflangeada5-bucha.gif";                 $componente5="Bucha da Haste";
   $imagem6="globoflangeada6-prisioneiro_preme.gif";     $componente6="Prisioneiro - Preme";
   $imagem7="globoflangeada7-porca_preme.gif";           $componente7="Porca do Preme";
   $imagem8="globoflangeada8-haste.gif";                 $componente8="Haste";
   $imagem9="globoflangeada9-preme.gif";                 $componente9="Preme";
   $imagem10="globoflangeada10-gaxeta.gif";              $componente10="Gaxeta";
   $imagem11="globoflangeada11-prisioneiro_corpo.gif";   $componente11="Prisioneiro - Corpo";
   $imagem12="globoflangeada12-porca_corpo.gif";         $componente12="Porca do Corpo";
   $imagem13="globoflangeada13-castelo.gif";             $componente13="Castelo";
   $imagem14="globoflangeada14-junta.gif";               $componente14="Junta Espirotálica";
   $imagem15="globoflangeada15-contra_sede.gif";         $componente15="Contra Sede";
   $imagem16="globoflangeada16-sede.gif";                $componente16="Sede";
   $imagem17="globoflangeada17-corpo.gif";               $componente17="Corpo";
   $imagem18="globoflangeada18-solda.gif";               $componente18="Solda";
   $imagem19="globoflangeada19-flange.gif";              $componente19="Flange";

   }else{ $con2="con";  }

   if($_GET['tipo']=="npt") {
   $con3="con1";
   $imagem_default='globonpt.gif';
   $imagem1="globonpt1-plaqueta.gif";                    $componente1="Placa - Identificação";
   $imagem2="globonpt2-arruela.gif";                     $componente2="Arruela do Volante";
   $imagem3="globonpt3-porca_castelo.gif";               $componente3="Porca da Haste";
   $imagem4="globonpt4-volante.gif";                     $componente4="Volante";
   $imagem5="globonpt5-bucha.gif";                       $componente5="Bucha da Haste";
   $imagem6="globonpt6-prisioneiro_preme.gif";           $componente6="Prisioneiro - Preme";
   $imagem7="globonpt7-porca_preme.gif";                 $componente7="Porca do Preme";
   $imagem8="globonpt8-preme.gif";                       $componente8="Preme";
   $imagem9="globonpt9-gaxeta.gif";                      $componente9="Gaxeta";
   $imagem10="globonpt10-prisioneiro_corpo.gif";         $componente10="Prisioneiro - Corpo";
   $imagem11="globonpt11-porca_corpo.gif";               $componente11="Porca do Corpo";
   $imagem12="globonpt12-castelo.gif";                   $componente12="Castelo";
   $imagem13="globonpt13-junta.gif";                     $componente13="Junta Espirotálica";
   $imagem14="globonpt14-haste.gif";                     $componente14="Haste";
   $imagem15="globonpt15-contra_sede.gif";               $componente15="Contra Sede";
   $imagem16="globonpt16-sede.gif";                      $componente16="Sede";
   $imagem17="globonpt17-corpo.gif";                     $componente17="Corpo";
   }else{ $con3="con";  }

   if($_GET['tipo']=="SW") {
   $con4="con1";
   $imagem_default='globosw.gif';
   $imagem1="globosw1-plaqueta.gif";                     $componente1="Placa - Identificação";
   $imagem2="globosw2-arruela.gif";                      $componente2="Arruela do Volante";
   $imagem3="globosw3-porca_castelo.gif";                $componente3="Porca da Haste";
   $imagem4="globosw4-volante.gif";                      $componente4="Volante";
   $imagem5="globosw5-bucha.gif";                        $componente5="Bucha da Haste";
   $imagem6="globosw6-prisioneiro_preme.gif";            $componente6="Prisioneiro - Preme";
   $imagem7="globosw7-porca_preme.gif";                  $componente7="Porca do Preme";
   $imagem8="globosw8-preme.gif";                        $componente8="Preme";
   $imagem9="globosw9-gaxeta.gif";                       $componente9="Gaxeta";
   $imagem10="globosw10-prisioneiro_corpo.gif";          $componente10="Prisioneiro - Corpo";
   $imagem11="globosw11-porca_corpo.gif";                $componente11="Porca do Corpo";
   $imagem12="globosw12-castelo.gif";                    $componente12="Castelo";
   $imagem13="globosw13-junta.gif";                      $componente13="Junta Espirotálica";
   $imagem14="globosw14-haste.gif";                      $componente14="Haste";
   $imagem15="globosw15-contra_sede.gif";                $componente15="Contra Sede";
   $imagem16="globosw16-sede.gif";                       $componente16="Sede";
   $imagem17="globosw17-corpo.gif";                      $componente17="Corpo";
   }else{ $con4="con";  }
   ?>

   <a class="<?=$con1?>" href="?pag=dados_globo&tipo=BW#valv" name="valv">BW</a> <a class="texto1">|</a>
   <a class="<?=$con2?>" href="?pag=dados_globo&tipo=flangeada#valv">Flangeada</a> <a class="texto1">|</a>
   <a class="<?=$con3?>" href="?pag=dados_globo&tipo=npt#valv">NPT</a> <a class="texto1">|</a>
   <a class="<?=$con4?>" href="?pag=dados_globo&tipo=SW#valv">SW</a>


   <?if($_GET['tipo']=="") {  ?>
   <br><br>

   <A class="formulario">Escolha acima um tipo de válvula globo.</a>

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
   
   
            <?  if($_GET['tipo']=="BW") { ?>

   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr background="imagens/fundo_azul3.jpg" style="height:30">
   <td align="center" width="190"><a class="con">Bitola</a></td>
   <td align="center" width="190"><a class="con">A</a></td>
   <td align="center" width="190"><a class="con">B</a></td>
   <td align="center" width="190"><a class="con">D</a></td>
   </tr>
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("188", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("173", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("193", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("174", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("253", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("229", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("322", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("295", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("349", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("310", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?> </a</td>
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
   <td align="center" width="190"><a class="con">B</a></td>
   <td align="center" width="190"><a class="con">D</a></td>
   </tr>
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("188", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("173", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("193", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("174", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("253", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("229", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("322", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("295", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("349", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("310", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?> </a</td>
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
   
    <?  if($_GET['tipo']=="npt" || $_GET['tipo']=="SW") { ?>

   <table border="0" width="380" background="imagens/fundo_azul2.jpg" cellpadding="0" cellspacing="0">
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr background="imagens/fundo_azul3.jpg" style="height:30">
   <td align="center" width="190"><a class="con">Bitola</a></td>
   <td align="center" width="190"><a class="con">A</a></td>
   <td align="center" width="190"><a class="con">B</a></td>
   <td align="center" width="190"><a class="con">C</a></td>
   <td align="center" width="190"><a class="con">D</a></td>
   </tr>
   <tr bgcolor="006FDD">
   <td colspan="7" style="height:1"></td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("188", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("173", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("81", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/8"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("188", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("173", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("81", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("188", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("173", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("81", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">3/4"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("193", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("174", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("84", $_POST['unidade']);?> ± <?Transforma_Medida("0.5", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("75", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("253", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("229", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("130", $_POST['unidade']);?> ± <?Transforma_Medida("0.7", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("102", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">1.1/2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("322", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("295", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("141", $_POST['unidade']);?> ± <?Transforma_Medida("1", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?> </a</td>
   </tr>
   <tr>
   <td align="center"><a class="menu">2"</a></td>
   <td align="center"><a class="menu"><?Transforma_Medida("349", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("310", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("156", $_POST['unidade']);?> ± <?Transforma_Medida("1", $_POST['unidade']);?> </a</td>
   <td align="center"><a class="menu"><?Transforma_Medida("119", $_POST['unidade']);?> </a</td>
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
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem1?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente1?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">2</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem2?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente2?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">3</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem3?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente3?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">4</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem4?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente4?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

    <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">5</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem5?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente5?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">6</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem6?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente6?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">7</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem7?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente7?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">8</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem8?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente8?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">9</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem9?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente9?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">10</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem10?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente10?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">11</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem11?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente11?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">12</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem12?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente12?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">13</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem13?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente13?><!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">14</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem14?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente14?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">15</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem15?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente15?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">16</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem16?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente16?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">17</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem17?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente17?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <?  if($_GET['tipo']=="flangeada") { ?>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">18</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem18?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente18?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
  </tr>

  <tr>
  <td style="height:30; width:10;" align="center"><a class="con5">19</a></td>
  <td><a href="#2" class="mais" onMouseOver="ImagemSelecionada('<?=$imagem19?>')" onMouseOut="ImagemSelecionada('<?=$imagem_default?>')"><?=$componente19?> <!--<img src="imagens/inter.gif" border="0">--></a></td>
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


