<body onLoad="display_control('conteudo','show');display_control('preload','hide');" >


<script language="javascript">

function ImagemSelecionadaMonte(imagem){
	var ImagemMostrar = imagem;
	document.getElementById("monte").src = "imagens/abas/"+ImagemMostrar+""
}

function ImagemSelecionadaDados(imagem){
	var ImagemMostrar = imagem;
	document.getElementById("dados").src = "imagens/abas/"+ImagemMostrar+""
}

function ImagemSelecionada(imagem){
	var ImagemMostrar = imagem;
	document.getElementById("imagemmudar").src = "imagens/"+ImagemMostrar+""
}


function display_control(div,state){

    if(state=='show'){
        document.getElementById(div).style.display = "block";
    } else {
        document.getElementById(div).style.display = "none";
    }

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
   <td><img name="aba_conhecendo" src="imagens/abas/aba_conhecendo_sel.gif" width="110" height="35" border="0" id="aba_conhecendo" alt="" /></td>
   <td><img name="aba1_r1_c2" src="imagens/abas/aba1_r1_c2.gif" width="6" height="35" border="0" id="aba1_r1_c2" alt="" /></td>
   <td><a href="?pag=dados_gaveta" onMouseOver="ImagemSelecionadaDados('aba_dados2.gif')" onMouseOut="ImagemSelecionadaDados('aba_dados.gif')"><img name="aba_dados" src="imagens/abas/aba_dados.gif" width="135" height="35" border="0" id="dados" alt="" /></a></td>
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
<tr><td align="center"><a class="con5">Conheça a válvula gaveta:</a></td></tr>
</table>

<center>
<br>

<table border="0" cellpadding="0" cellspacing="0" width="530">
<tr>
<td width="230" align="center"><img src="imagens/gaveta_m.gif"  border="0" id="imagemmudar"></td>
<td width="20"></td>
<td width="280" align="center">

<table border="0" cellpadding="0" cellspacing="0" width="255">
<tr>
<td><a href="#2"><img src="imagens/gaveta_p1.gif" width="125" height="100" border="0" onClick="ImagemSelecionada('gaveta_m.gif');"></a></td>
<td width="5"></td>
<td><a href="#2"><img src="imagens/gaveta_p2.gif" width="125" height="100" border="0" onClick="ImagemSelecionada('gaveta_m2.gif');"></a></td>
</tr>
<tr><td colspan="3" height="5"></td></tr>
<tr>
<td><a href="#2"><img src="imagens/gaveta_p3.gif" width="125" height="100" border="0" onClick="ImagemSelecionada('gaveta_m3.gif');"></a></td>
<td width="5"></td>
<td><a href="#2"><img src="imagens/gaveta_p4.gif" width="125" height="100" border="0" onClick="ImagemSelecionada('gaveta_m4.gif');"></a></td>
</tr>
<tr><td colspan="3" height="5"></td></tr>
<tr>
<td colspan="3" align="center"><a href="?pag=aviso_gaveta_3d"><img src="imagens/gif_3d.gif" width="255" height="77" border="0"></a></td>
</tr>
</table>

</td>
</tr>
</table>

<br>

<table border="0" cellpadding="0" cellspacing="0" width="568">
<tr><td background="imagens/fundo_titulo.jpg"><a class="titulo_branco2">&nbsp;Qual a sua função?</a></td></tr>
<tr><td background="imagens/fundo_azul2.jpg"><a class="menu">
<br>Esse é o tipo de válvula mais importante e de uso mais generalizado. Sua função basicamente, é bloquear líquidos por excelência. O bloqueio do líquido é feito lentamente, assim, evita os efeitos de uma paralisação repentina, que podem causar dados desastrosos.<br><br></a></td></tr>
<tr><td background="imagens/fundo_titulo.jpg"><a class="titulo_branco2">&nbsp;Onde posso utiliza-la?</a></td></tr>
<tr><td background="imagens/fundo_azul2.jpg"><a class="menu">
<br> Se você pretende bloquear em uma determinada tubulação a passagem do fluído, esta é a válvula ideal para a sua aplicação!<br><br>
Pode ser utilizada em tubulações de água, óleos e líquidos em geral ou até mesmo gases.<br><br>
</a></td></tr>
<tr><td background="imagens/fundo_titulo.jpg"><a class="titulo_branco2">&nbsp;Quais as condições para utilizar esta válvula?</a></td></tr>
<tr><td background="imagens/fundo_azul2.jpg"><a class="menu">
<br>
*  É indicada apenas para bloquear o fluxo, caso contrário conheça nossas </a> <a class="mais" href="?pag=produtos">outras válvulas <a class="menu">.<br><br>

* Esta válvula também é indicada para trabalhar com gases e vapores.<br><br>

* Não devem ser utilizadas para fluídos que deixem sedimentos ou depósitos sólidos.<br><br>

* Podem ser utilizadas em tubulações com fluxo pulsante ou sujeitas a vibrações.<br><br>

</a>

<tr><td>

<center>

<table><tr><td style="height:5"></td></tr></table>


<table border="0" cellpadding="0" cellspacing="0" width="568">
<tr>
<td style="height:50" bgcolor="#F9F9F9" align="center"><a href="?pag=dados_gaveta"><img src="imagens/ver_dados.gif" width="200" height="40" border="0"></td>
<td style="height:50" bgcolor="#F9F9F9" align="center"><a href="?pag=monte_valvula&val=gaveta"><img src="imagens/monte_sua_valvula.gif" width="200" height="40" border="0"></a></td>
</tr>
</table>


</center>

</td></tr>
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


