<script language="javascript">
function validaForm(){
           d = document.mail;
           //validar nome
           if (d.txt_nome.value == ""){
                     alert("O campo \"Nome\" deve ser preenchido!");
                     d.txt_nome.focus();
                     return false;
           }


         //validar email
         if (d.txt_email.value == ""){
                   alert("O campo \"E-Mail\" deve ser preenchido!");
                   d.txt_email.focus();
                   return false;
         }
         //validar email(verificao de endereco eletrônico)
         parte1 = d.txt_email.value.indexOf("@");
         parte2 = d.txt_email.value.indexOf(".");
         parte3 = d.txt_email.value.length;
         if (!(parte1 >= 3 && parte2 >= 6 && parte3 >= 9)) {
                   alert ("O campo \"E-Mail\" está incorreto!");
                   d.txt_email.focus();
                   return false;
         }

         //validar mensagem
           if (d.txt_mensagem.value == ""){
                     alert("O campo \"Mensagem\" deve ser preenchido!");
                     d.txt_mensagem.focus();
                     return false;
           }


         return true;
 }

</script>

<table border="0" cellpadding="0" cellspacing="0" width="570">
  <tr>
   <td><img src="imagens/meio/spacer.gif" width="570" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td><img name="tabela3_r1_c1" src="imagens/meio/fale_conosco_tb.jpg" width="570" height="52" border="0" id="tabela3_r1_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="34" border="0" alt="" /></td>
  </tr>
  <tr>
   <td background="imagens/meio/fundo_tb1.jpg" align="center" valign="top">
   
   <?

   if ($_POST['txt_nome'] && $_POST['txt_email']) {

   $nome                  = $_POST['txt_nome'];
   $empresa               = $_POST['txt_empresa'];
   $email                 = $_POST['txt_email'];
   $ddd                   = $_POST['txt_ddd'];
   $tel                   = $_POST['txt_tel'];
   $departamento          = strtoupper($_POST['sel_departamento']);
   $mensagem              = $_POST['txt_mensagem'];


   if ($_POST['sel_departamento']=="Assistência Técnica") $destinatario="assistenciatecnica@conesteel.com.br";
   if ($_POST['sel_departamento']=="Certificados") $destinatario="certificados@conesteel.com.br";
   if ($_POST['sel_departamento']=="Cobranca")     $destinatario="cobranca@conesteel.com.br";
   if ($_POST['sel_departamento']=="Comercial")    $destinatario="comercial@conesteel.com.br";
   if ($_POST['sel_departamento']=="Compras")      $destinatario="compras@conesteel.com.br";
   if ($_POST['sel_departamento']=="Inspeção")     $destinatario="inspecao@conesteel.com.br";
   if ($_POST['sel_departamento']=="Engenharia")   $destinatario="engenharia@conesteel.com.br";
   if ($_POST['sel_departamento']=="Recursos Humanos")   $destinatario="rh@conesteel.com.br";
   if ($_POST['sel_departamento']=="Vendas")             $destinatario="vendas@conesteel.com.br";
   if ($_POST['sel_departamento']=="Qualidade")          $destinatario="qualidade@conesteel.com.br";
   if ($_POST['sel_departamento']=="Conesteel")          $destinatario="conesteel@conesteel.com.br";

   
$mensagem ="E-MAIL ENVIADO PELO FORMULÁRIO DE CONTATO DO SITE CONESTEEL
###########################################################
# Nome: $nome
# Empresa/Instituição: $empresa
# E-mail: $email  Telefone: ($ddd) $tel
# Departamento Solicitado: $departamento
###########################################################

-> Mensagem:  $mensagem

---- FIM DA MENSAGEM ----
###########################################################";

$mensagem2 ="E-MAIL ENVIADO PELO FORMULÁRIO DE CONTATO DO SITE CONESTEEL

Olá $nome,

A Conesteel recebeu a sua mensagem corretamente, iremos responder o mais rápido possível.

Vê-lo satisfeito é o principal objetivo de nosso trabalho.

Conesteel Válvulas e Conexões Industriais. Não é apenas uma marca, é uma grife em válvulas.

Av. Montemagno, 2454 - Vila Formosa - São Paulo (SP) - Brasil - CEP 03371-000
Telefone: +55 (11) 6910-1444 - Fax: +55 (11) 6107-6667
CONESTEEL - Não é apena uma marca, é uma grife em válvulas.
$destinatario
www.conesteel.com.br";




//mail($destinatario, 'E-Mail - Formulário', $mensagem);


mail($destinatario, "Formulário Site - $departamento ", $mensagem,
     "From: ".$_POST['txt_email']."\r\n" .
     "Reply-To: ".$_POST['txt_email']."\r\n" .
     "X-Mailer: PHP/" . phpversion());
     
mail($_POST['txt_email'], "conesteel.com.br - $departamento", $mensagem2,
     "From: $destinatario\r\n" .
     "Reply-To: $destinatario\r\n" .
     "X-Mailer: PHP/" . phpversion());
     
     ?>
     
     <center>
     <table><tr><td style="height:5"></td></tr></table>
     <img src="imagens/enviada.jpg" border="0"><br><br>
     <a class="texto2"><strong><?=$nome?></strong>, sua mensagem foi recebida corretamente. Nossa equipe irá responde-lo assim que possível. Muito Obrigado!</a>
     </center>
     
        </td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="123" border="0" alt="" /></td>
  </tr>
  <tr>
   <td background="imagens/meio/tabela3_r3_c1.jpg" align="center">

   <table border="0">
   <tr><td width="10">
   <img src="imagens/iconb.jpg" border="0">
   </td><td>
   <a class="aba" href="?pag=principal">clique aqui</a> <a class="texto3">para continuar navegando.</a>
   </td>
   </tr>
   </table>

   </td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="23" border="0" alt="" /></td>
  </tr>
 </table>
     
     
     <?



   } else {

   ?>
   
   <form name="mail"  method="post" action="?pag=contato" onSubmit="return validaForm()">
   <table width="550" border="0">
   <tr><td colspan="2">
   <a class="texto3">
   Dúvidas, críticas, sugestões? Sempre buscando a excelência em atendimento e a satisfação de nossos clientes, a Conesteel conta com uma equipe de profissionais para receber e encaminhar sua mensagem ao departamento responsável, tornando a resposta a mais correta e eficiente possível. OBS: Também temos um telefone que funciona exclusivamente para assistêcia técnica em caso de urgencia: <strong>+55(11)7316-3016.<strong>
   <br /> <br />
   </a>
   </td></tr>

   
   <tr><td width="550">
   <a class="texto2"><img src="imagens/iconb.jpg" border="0">&nbsp; Nome:</a>
   </td>
   <td width="390">
   <input class="normal" type="text" name="txt_nome" maxlength="50"/>
   </td></tr>
   
   <tr><td width="550">
   <a class="texto2"><img src="imagens/iconb.jpg" border="0">&nbsp; Empresa/Instituição:</a>
   </td>
   <td width="390">
   <input class="normal" type="text" name="txt_empresa" maxlength="50" />
   </td></tr>
   
   <tr><td width="550">
   <a class="texto2"><img src="imagens/iconb.jpg" border="0">&nbsp; E-mail:</a>
   </td>
   <td width="390">
   <input class="normal" type="text" name="txt_email" maxlength="50"/>
   </td></tr>
   
   <tr><td width="550">
   <a class="texto2"><img src="imagens/iconb.jpg" border="0">&nbsp; Telefone:</a>
   </td>
   <td width="390">
   <input class="ddd" type="text" name="txt_ddd" maxlength="3"/>&nbsp;
   <input class="tel" type="text" name="txt_tel" maxlength="10"/><a class=texto1> (DDD + Telefone ) </a>
   </td></tr>
   
   <tr><td width="550">
   <a class="texto2"><img src="imagens/iconb.jpg" border="0">&nbsp; Departamento:</a>
   </td>
   <td width="390">
   <select name="sel_departamento">
   <option value="Conesteel">Escolha o Departamento:</option>
   <option value="Assistência Técnica">Assistência Técnica</option>
   <option value="Certificados">Certificados</option>
   <option value="Cobranca">Cobrança</option>
   <option value="Comercial">Comercial</option>
   <option value="Compras">Compras</option>
   <option value="Engenharia">Engenharia</option>
   <option value="Inspeção">Inspeção</option>
   <option value="Qualidade">Qualidade</option>
   <option value="Recursos Humanos">Recursos Humanos</option>
   <option value="Vendas">Vendas</option>

   </select>
   </td></tr>
   
   <tr><td  width="550">
   <a class="texto2"><img src="imagens/iconb.jpg" border="0">&nbsp; Mensagem:</a>
   </td>
   <td width="390">
   <textarea name="txt_mensagem"></textarea>
   </td></tr>
   <tr><td style="height:15"></td></tr>
   </table>


   </td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="123" border="0" alt="" /></td>
  </tr>
  <tr>
   <td background="imagens/meio/tabela3_r3_c1.jpg" align="center">

   <input type="image" src="imagens/enviar.jpg" border="0" name="enviar">

   </td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="23" border="0" alt="" /></td>
  </tr>
 </table>
 </form>

<table><tr><td style="height:5"></td></tr></table>

   <center>

   <table border="0" cellpadding="0" cellspacing="0" width="514">
  <tr>
   <td><img src="imagens/meio/spacer.gif" width="37" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="445" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="32" height="1" border="0" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="3"><img name="quadro_email_r1_c1" src="imagens/meio/quadro_email_r1_c1.jpg" width="514" height="22" border="0" id="quadro_email_r1_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="22" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="quadro_email_r2_c1" src="imagens/meio/quadro_email_r2_c1.jpg" width="37" height="31" border="0" id="quadro_email_r2_c1" alt="" /></td>
   <td background="imagens/meio/quadro_email_r2_c2.jpg" width="445" height="25" align="center">

   <a class="texto2">Se preferir, você pode utilizar os nosos e-mails diretamente:</a>

   </td>
   <td rowspan="2"><img name="quadro_email_r2_c3" src="imagens/meio/quadro_email_r2_c3.jpg" width="32" height="31" border="0" id="quadro_email_r2_c3" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="25" border="0" alt="" /></td>
  </tr>
  <tr>
   <td><img name="quadro_email_r3_c2" src="imagens/meio/quadro_email_r3_c2.jpg" width="445" height="6" border="0" id="quadro_email_r3_c2" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="6" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="3" background="imagens/meio/quadro_email_r4_c1.jpg" width="514" height="207" align="center">


   <table border="0" cellpadding="0" cellspacing="0" width="400">
   <tr><td>
   
   <table><tr><td style="height:5"></td></tr></table>

   <table border="0">
   <tr><td>
   <img src="imagens/ico_mail.gif" border="0">
   </td><td>
   <a class="aba"> Assistência Técnica:</a> <a class="menu" href="mailto:assistenciatecnica@conesteel.com.br">assistenciatecnica@conesteel.com.br</a><br>
   </td></tr>
   </table>

   <table><tr><td style="height:5"></td></tr></table>

   <table border="0">
   <tr><td>
   <img src="imagens/ico_mail.gif" border="0">
   </td><td>
   <a class="aba"> Certificados:</a> <a class="menu" href="mailto:certificados@conesteel.com.br">certificados@conesteel.com.br</a><br>
   </td></tr>
   </table>

   <table><tr><td style="height:5"></td></tr></table>


   <table border="0">
   <tr><td>
   <img src="imagens/ico_mail.gif" border="0">
   </td><td>
   <a class="aba"> Comercial:</a> <a class="menu" href="mailto:comercial@conesteel.com.br">comercial@conesteel.com.br</a><br>
   </td></tr>
   </table>

   <table><tr><td style="height:5"></td></tr></table>

   <table border="0">
   <tr><td>
   <img src="imagens/ico_mail.gif" border="0">
   </td><td>
   <a class="aba"> Compras:</a> <a class="menu" href="mailto:compras@conesteel.com.br">compras@conesteel.com.br</a><br>
   </td></tr>
   </table>



   <table><tr><td style="height:5"></td></tr></table>

   <table border="0">
   <tr><td>
   <img src="imagens/ico_mail.gif" border="0">
   </td><td>
   <a class="aba"> Engenharia:</a> <a class="menu" href="mailto:engenharia@conesteel.com.br">engenharia@conesteel.com.br</a><br>
   </td></tr>
   </table>

   <table><tr><td style="height:5"></td></tr></table>

   <table border="0">
   <tr><td>
   <img src="imagens/ico_mail.gif" border="0">
   </td><td>
   <a class="aba"> Inspeção:</a> <a class="menu" href="mailto:inspecao@conesteel.com.br">inspecao@conesteel.com.br</a><br>
   </td></tr>
   </table>

   <table><tr><td style="height:5"></td></tr></table>

   <table border="0">
   <tr><td>
   <img src="imagens/ico_mail.gif" border="0">
   </td><td>
   <a class="aba"> Qualidade:</a> <a class="menu" href="mailto:qualidade@conesteel.com.br">qualidade@conesteel.com.br</a><br>
   </td></tr>
   </table>

   <table><tr><td style="height:5"></td></tr></table>

   <table border="0">
   <tr><td>
   <img src="imagens/ico_mail.gif" border="0">
   </td><td>
   <a class="aba"> Recursos Humanos:</a> <a class="menu" href="mailto:rh@conesteel.com.br">rh@conesteel.com.br</a><br>
   </td></tr>
   </table>

   <table><tr><td style="height:5"></td></tr></table>

   <table border="0">
   <tr><td>
   <img src="imagens/ico_mail.gif" border="0">
   </td><td>
   <a class="aba"> Vendas:</a> <a class="menu" href="mailto:vendas@conesteel.com.br">vendas@conesteel.com.br</a><br>
   </td></tr>
   </table>

   <table><tr><td style="height:5"></td></tr></table>



   </td</tr>
   </table>



   </td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="207" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="3"><img name="quadro_email_r5_c1" src="imagens/meio/quadro_email_r5_c1.jpg" width="514" height="36" border="0" id="quadro_email_r5_c1" alt="" /></td>
   <td><img src="imagens/meio/spacer.gif" width="1" height="36" border="0" alt="" /></td>
  </tr>
</table>

   </center>
   
   <? } ?>
   
<table><tr><td style="height:10"></td></tr></table>

<!--

<img src="imagens/monte_a_valvula.gif" width="570" height="104" border="0">

<table><tr><td style="height:10"></td></tr></table>

-->
</td></tr>
   


 </table>







