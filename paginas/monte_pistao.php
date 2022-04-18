<script language="javascript">

function ImagemSelecionada(imagem){
	var ImagemMostrar = imagem;
	document.getElementById("imagemmudar").src = "imagens/pistao/"+ImagemMostrar+""
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
   <td><a href="?pag=dados_pistao" onMouseOver="ImagemSelecionadaDados('aba_dados2.gif')" onMouseOut="ImagemSelecionadaDados('aba_dados.gif')"><img name="aba_dados" src="imagens/abas/aba_dados.gif" width="135" height="35" border="0" id="dados" alt="" /></a></td>
   <td><img name="aba1_r1_c4" src="imagens/abas/aba1_r1_c4.gif" width="7" height="35" border="0" id="aba1_r1_c4" alt="" /></td>
   <td><img name="aba_monte" src="imagens/abas/aba_monte_sel.gif" width="170" height="35" border="0" id="monte" alt="" /></td>
   <td><img name="aba1_r1_c6" src="imagens/abas/aba1_r1_c6.gif" width="142" height="35" border="0" id="aba1_r1_c6" alt="" /></td>
   <td><img src="imagens/abas/spacer.gif" width="1" height="35" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="6"><img name="aba1_r2_c1" src="imagens/abas/aba1_r2_c1.gif" width="570" height="7" border="0" id="aba1_r2_c1" alt="" /></td>
   <td><img src="imagens/abas/spacer.gif" width="1" height="7" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="6" background="imagens/abas/meio.gif" width="570" height="8" border="0" id="meio" />

   <center>

   <img src="imagens/passo1.jpg" width="568" height="37" border="0">


<table border="0"><tr><td style="height:5"></td></tr></table>


<table border="0" width="500">
<tr>
<td><img src="imagens/pasta_net.jpg" width="32" height="36" border="0"></td>
<td align="center"><a class="texto2">A Conesteel é a primeira fabricante de válvulas a disponibilizar este serviço através da internet no Brasil.</a></td>
</tr>
</table>

<table border="0"><tr><td style="height:10"></td></tr></table>

<table border="0" width="500">
<tr>
<td align="center"><a class="texto2">Nesta seção, você pode escolher a configuração de uma válvula e em seguida gerar um <strong>datasheet</strong> e/ou envia-la para o nosso departamento de vendas para um <strong>orçamento</strong>!</a></td>
</tr>
</table>

<br>

<table border="0" cellpadding="0" cellspacing="0" width="570">
<tr><td align="center"><a class="con5">&nbsp; Passo 1 - Escolhendo a válvula:</a><br><br></td></tr>
</table>

<a class="texto2">Para começar a sua configuração, confirme o tipo de válvula que deseja configurar e clique no botão iniciar:<br><br></a>

<script language="javascript">
function ImagemSelecionada(imagem){
	var ImagemMostrar = imagem;
	document.getElementById("imagemmudar").src = "imagens/"+ImagemMostrar+""
}
</script>

<table border="0">
<tr>
<td width="160" align="center">
<img src="imagens/pistao_p.gif" id="imagemmudar">
</td>
<td>
<form name="SelecionarImagem">

<table border="0">
<tr>
<td style="width:20" height="25" align="center"><img src="imagens/tick.gif" width="16" height="16" border="0"></td>
<td><input type="radio" name="teste" onClick="ImagemSelecionada('gaveta_p.gif');"> <a class="texto3"> Vávula Gaveta </a></td>
</tr>
<tr>
<td style="width:20" height="25" align="center"><img src="imagens/tick.gif" width="16" height="16" border="0"></td>
<td><input type="radio" name="teste" onClick="ImagemSelecionada('globo_p.gif');"> <a class="texto3"> Vávula Globo</a></td>
</tr>
<tr>
<td style="width:20" height="25" align="center"><img src="imagens/tick.gif" width="16" height="16" border="0"></td>
<td><input type="radio" name="teste" onClick="ImagemSelecionada('pistao_p.gif');"> <a class="texto3"> Vávula Retenção Pistão</a></td>
</tr>
<tr>
<td style="width:20" height="25" align="center"><img src="imagens/tick.gif" width="16" height="16" border="0"></td>
<td><input type="radio" name="teste" onClick="ImagemSelecionada('portinhola_p.gif');"> <a class="texto3"> Vávula Retenção Portinhola</a></td>
</tr>
</table>

</form>
</td>
</tr>
<table>

<br>



</center>

<table border="0"><tr><td style="height:5"></td></tr></table>


   </td>
   <td><img src="imagens/abas/spacer.gif" width="1" height="5" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="7"><img name="abas_r4_c1" src="imagens/abas/down.gif" width="570" height="8" border="0" id="abas_r4_c1" alt="" /></td>
   <td><img src="imagens/abas/spacer.gif" width="1" height="8" border="0" alt="" /></td>
  </tr>
</table>

<br><br>


