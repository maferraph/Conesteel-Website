<?php

     include_once './includes/global.php';
echo $GLOBALS["servidor"] ;
     $conexao = mysql_connect($servidor, $usuario, $senha) or die($erroconexao);
     mysql_select_db($bancodedados) or die($errobd . mysql_error());

?>
<table><tr><td style="height:5"></td></tr></table>

<table border="0" cellpadding="0" cellspacing="0" width="570">
  <tr>
   <td><img src="imagens/meio/spacer.gif" width="570" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td><img name="tabela3_r1_c1" src="imagens/meio/perguntas_tb.jpg" width="570" height="52" border="0" id="tabela3_r1_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="34" border="0" alt="" /></td>
  </tr>
  <tr>
   <td background="imagens/meio/fundo_tb1.jpg">
   
   <center>

   <table>
   <tr><td style="width:110" align="center" valign="center">
   <img src="imagens/icon_perguntas.jpg" border="0">
   </td><td>
   <a class="texto3">Antes de entrar em contato conosco para tirar sua dúvida, consulte a nossa base de dados de perguntas e respostas.</a>
   </td></tr>
   </table>
   
   <table><tr><td style="height:5"></td></tr></table>
   
   <table background="imagens/fundo_azul2.jpg" style="width:560px">

   <tr>
   <td colspan="2" background="imagens/fundo_titulo.jpg" align="center"><a class="titulo_branco2">Índice de perguntas</a></td>
   </tr>
   
   
   <tr>
   <td colspan="2"><a class="titulo_branco2"><a class="con">Geral:</a></td>
   </tr>

   <?
   
   $cont_p = 1;

   $perguntas = mysql_query("SELECT * FROM perguntas WHERE tipo='geral' ORDER BY ordem", $conexao) or die($erroconsulta);

   while ($res_perguntas  = mysql_fetch_array($perguntas))  {
   
   $pergunta   =  $res_perguntas['pergunta'];
   
   ?>

   <tr>
   <td style="width:15"><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="aba" href="#pó"><?=$cont_p?> -</a> <a class="mais2" href="#pergunta<?=$res_perguntas['ID']?>"><?=$pergunta?></a></td>
   </tr>
   
   <?$cont_p++; } ?>
   
   
   
   <tr>
   <td colspan="2"><a class="titulo_branco2"><a class="con">Válvula Gaveta:</a></td>
   </tr>

   <?

   $perguntas = mysql_query("SELECT * FROM perguntas WHERE tipo='gaveta' ORDER BY ordem", $conexao) or die($erroconsulta);

   while ($res_perguntas  = mysql_fetch_array($perguntas))  {

   $pergunta   =  $res_perguntas['pergunta'];

   ?>

   <tr>
   <td style="width:15"><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="aba" href="#pó"><?=$cont_p?> -</a> <a class="mais2" href="#pergunta<?=$res_perguntas['ID']?>"><?=$pergunta?></a></td>
   </tr>

   <?$cont_p++; } ?>
   
   
   <tr>
   <td colspan="2"><a class="titulo_branco2"><a class="con">Válvula Globo:</a></td>
   </tr>

   <?

   $perguntas = mysql_query("SELECT * FROM perguntas WHERE tipo='globo' ORDER BY ordem", $conexao) or die($erroconsulta);

   while ($res_perguntas  = mysql_fetch_array($perguntas))  {

   $pergunta   =  $res_perguntas['pergunta'];

   ?>

   <tr>
   <td style="width:15"><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="aba" href="#pó"><?=$cont_p?> -</a> <a class="mais2" href="#pergunta<?=$res_perguntas['ID']?>"><?=$pergunta?></a></td>
   </tr>

   <?$cont_p++; } ?>
   
   
   <tr>
   <td colspan="2"><a class="titulo_branco2"><a class="con">Válvula Retenção (Pistão/Portinhola):</a></td>
   </tr>

   <?

   $perguntas = mysql_query("SELECT * FROM perguntas WHERE tipo='retencao' ORDER BY ordem", $conexao) or die($erroconsulta);

   while ($res_perguntas  = mysql_fetch_array($perguntas))  {

   $pergunta   =  $res_perguntas['pergunta'];

   ?>

   <tr>
   <td style="width:15"><img src="imagens/iconb.jpg" border="0"></td>
   <td><a class="aba" href="#pó"><?=$cont_p?> -</a> <a class="mais2" href="#pergunta<?=$res_perguntas['ID']?>"><?=$pergunta?></a></td>
   </tr>

   <?$cont_p++; } ?>
   

   </table>

   <table><tr><td style="height:5"></td></tr></table>


   <table border="0" cellpadding="0" cellspacing="0" width="560">
   
   <tr>
   <td background="imagens/fundo_titulo.jpg"" align="center"><a class="titulo_branco2">Perguntas e Respostas:</a></td>
   </tr>
   
   <tr>
   <td style="height:30"><a class="con">Geral:</a></td>
   </tr>

   <?
   
   $cont_p=1;

   $perguntas = mysql_query("SELECT * FROM perguntas WHERE tipo='geral' ORDER BY ordem", $conexao) or die($erroconsulta);

   while ($res_perguntas  = mysql_fetch_array($perguntas))  {

   $pergunta   =  $res_perguntas['pergunta'];
   $resposta   =  $res_perguntas['resposta'];
   ?>
   <tr>
   <td background="imagens/fundo_azul3.jpg" style="height:30"><a class="aba" name="pergunta<?=$res_perguntas['ID']?>"><?=$cont_p?> - <?=$pergunta?></a></td>
   </tr>

   <tr><td style="height:5"></td></tr>

   <tr>
   <td style="height:30"><a class="menu">Re: <?=$resposta?></a></td>
   </tr>
   
   <tr><td style="height:5"></td></tr>
   
   <? $cont_p++;  }  ?>
   
   <tr>
   <td style="height:30"><a class="con">Válvula Gaveta:</a></td>
   </tr>

   <?

   $perguntas = mysql_query("SELECT * FROM perguntas WHERE tipo='gaveta' ORDER BY ordem", $conexao) or die($erroconsulta);

   while ($res_perguntas  = mysql_fetch_array($perguntas))  {

   $pergunta   =  $res_perguntas['pergunta'];
   $resposta   =  $res_perguntas['resposta'];
   ?>
   <tr>
   <td background="imagens/fundo_azul3.jpg" style="height:30"><a class="aba" name="pergunta<?=$res_perguntas['ID']?>"><?=$cont_p?> - <?=$pergunta?></a></td>
   </tr>

   <tr><td style="height:5"></td></tr>

   <tr>
   <td style="height:30"><a class="menu">Re: <?=$resposta?></a></td>
   </tr>

   <tr><td style="height:5"></td></tr>

   <? $cont_p++;  }  ?>
   
   
   <tr>
   <td style="height:30"><a class="con">Válvula Globo:</a></td>
   </tr>

   <?

   $perguntas = mysql_query("SELECT * FROM perguntas WHERE tipo='globo' ORDER BY ordem", $conexao) or die($erroconsulta);

   while ($res_perguntas  = mysql_fetch_array($perguntas))  {

   $pergunta   =  $res_perguntas['pergunta'];
   $resposta   =  $res_perguntas['resposta'];
   ?>
   <tr>
   <td background="imagens/fundo_azul3.jpg" style="height:30"><a class="aba" name="pergunta<?=$res_perguntas['ID']?>"><?=$cont_p?> - <?=$pergunta?></a></td>
   </tr>

   <tr><td style="height:5"></td></tr>

   <tr>
   <td style="height:30"><a class="menu">Re: <?=$resposta?></a></td>
   </tr>

   <tr><td style="height:5"></td></tr>

   <? $cont_p++;  }  ?>
   
   
   <tr>
   <td style="height:30"><a class="con">Válvula Retenção (Pistão/Portinhola):</a></td>
   </tr>

   <?

   $perguntas = mysql_query("SELECT * FROM perguntas WHERE tipo='retencao' ORDER BY ordem", $conexao) or die($erroconsulta);

   while ($res_perguntas  = mysql_fetch_array($perguntas))  {

   $pergunta   =  $res_perguntas['pergunta'];
   $resposta   =  $res_perguntas['resposta'];
   ?>
   <tr>
   <td background="imagens/fundo_azul3.jpg" style="height:30"><a class="aba" name="pergunta<?=$res_perguntas['ID']?>"><?=$cont_p?> - <?=$pergunta?></a></td>
   </tr>

   <tr><td style="height:5"></td></tr>

   <tr>
   <td style="height:30"><a class="menu">Re: <?=$resposta?></a></td>
   </tr>

   <tr><td style="height:5"></td></tr>

   <? $cont_p++;  }  ?>
   

   
   </table>
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
