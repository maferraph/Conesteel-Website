<?php
/***************************************************************************
Site Conesteel
http://www.conesteel.com.br
funcoes.php
Criado em 25/10/2005
Autor: Mauricio Fernandes Raphael
***************************************************************************/

/***************************************************************************
Iniciar Se��es
***************************************************************************/
$sessao_nome = session_name( md5( $_SERVER["REMOTE_ADDR"] ) ) ;
session_start() ;
if( !isset( $_SESSION['host'] ) ){ $_SESSION['host'] = $_SERVER["REMOTE_ADDR"] ; }
if( !isset( $_SESSION['time'] ) ){ $_SESSION['time'] = date("d/m/Y H:i:s") ; }
if( !isset( $_SESSION['idioma'] ) ){ $_SESSION['idioma'] = $_SERVER["HTTP_ACCEPT_LANGUAGE"] ; }
if( !isset( $_SESSION['usuario'] ) ){ $_SESSION['usuario'] = "" ; }
if( !isset( $_SESSION['senha'] ) ){ $_SESSION['senha'] = "" ; }
if( !isset( $_SESSION['tentativas'] ) ){ $_SESSION['tentativas'] = 1 ; }
if( !isset( $_SESSION['tmp'] ) ){ $_SESSION['tmp'] = "" ; }

/***************************************************************************
Vari�veis P�blicas
***************************************************************************/
$TEXTO_EMPRESA = "Conesteel V�lvulas e Conex�es Industriais Ltda.";
$HTML_MENUPAGINA_COR = "#4169E1" ;

/***************************************************************************
Fun��es para Banco de Dados
***************************************************************************/
$MYSQL_SERVIDOR = "";
$MYSQL_USUARIO = "";
$MYSQL_SENHA = "";
$MYSQL_BD = "";
$MYSQL_MSGERRO_CONEXAO = "N�o foi poss�vel estabelecer conex�o com o banco de dados." ;
$MYSQL_MSGERRO_BD = "N�o foi poss�vel abrir o banco de dados." ;
$MYSQL_MSGERRO_QUERY = "N�o foi poss�vel executar query." ;

/***************************************************************************
Fun��es para HTML
***************************************************************************/

function InsereCabecalho()
{
   echo "<HTML><HEAD><TITLE>Conesteel V�lvulas e Conex�es Industriais Ltda.</TITLE>\n";
   //metatags
   echo "<META NAME=\"Title\" CONTENT=\"Conesteel V�lvulas e Conex�es Industriais Ltda.\">\n";
   echo "<META NAME=\"ROBOTS\" CONTENT=\"INDEX, NOFOLLOW\">\n";
   echo "<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=iso-8859-1\">\n";
   echo "<META NAME=\"Language\" CONTENT=\"Portuguese\">\n";
   echo "<META HTTP-EQUIV=\"Expires\" CONTENT='0'>\n";
   echo "<META NAME=\"description\" CONTENT=\"Site da Conesteel\">\n";
   echo "<META NAME=\"keywords\" CONTENT=\"Site, Conesteel, V�lvulas, Conex�es, Gaveta, Globo, Reten��o Pist�o, Reten��o Portinhola, ASTM, ASME, API, MSS, a�o forjado, industriais\">\n";
   echo "<META HTTP-EQUIV=\"author\" CONTENT=\"Maur�cio Fernandes Raphael\">\n";
   echo "<META HTTP-EQUIV=\"Reply-to\" CONTENT=\"mauricio@conesteel.com.br\">\n";
   echo "<META NAME=\"Classification\" CONTENT=\"Ind�stria\">\n";
   echo "<META NAME=\"Doc-rights\" CONTENT=\"" . $GLOBALS['TEXTO_EMPRESA'] . "\">\n";
   echo "<META HTTP-EQUIV=\"imagetoolbar\" CONTENT=\"no\">" ;
   //Icone
   echo "<LINK HREF=\"/images/logo.ico\" REL=\"SHORTCUT ICON\">\n";
   //Estilos
   echo "<LINK HREF=\"estilos.css\" REL=\"stylesheet\" TYPE=\"text/css\">\n";
   //Javascript
   echo "<SCRIPT LANGUAGE=\"javascript\" SRC=\"scripts.js\"></SCRIPT>\n";
   echo "</HEAD>\n";
   echo "
<SCRIPT LANGUAGE=\"JScript\">
function click(e)
{
   var msginst = '$TEXTO_EMPRESA';
   if(document.all){ if(event.button==2||event.button==3){alert(msginst);return false;} }
   if(document.layers){ if(e.which==3){alert(msginst);return false;} }
}
if(document.layers){ document.captureEvents(Event.MOUSEDOWN); }
document.onmousedown=click;
</SCRIPT>" ;
}

function InsereRodape()
{
   echo "<BODY>\n";
   echo "<TABLE border=\"0\" cellPadding=\"0\" cellSpacing=\"0\" width=\"100%\" VALIGN=\"TOP\">\n";
   echo "<TBODY>\n";
   echo "<TR><TD align=\"left\" bgColor=\"#4169E1\" colSpan=\"3\" height=\"20\" noWrap vAlign=\"center\">&nbsp;<FONT class=\"BarraMenuPagina\">CONESTEEL� V�lvulas e Conex�es Industriais Ltda. - Todos os direitos reservados</FONT></TD>\n";
   echo "<TD align=\"right\" bgColor=\"#4169E1\" colSpan=\"3\" height=\"20\" noWrap vAlign=\"center\"><FONT class=\"BarraMenuPagina\">(55 11) 6910-1444</FONT>&nbsp;</TD></TR>\n";
   echo "</TBODY></TABLE>\n";
   echo "</BODY></HTML>\n" ;
}

function VerificaCheck( $Valor )
{
   if( $Valor == 0 )
   {
      return "" ;
   }
   else
   {
      return " CHECKED" ;
   }
}

function CheckParaNumero( $Valor )
{
   if( $Valor == "on" Or $Valor == true )
   {
      return 1 ;
   }
   else
   {
      return 0 ;
   }
}

function NumParaSN( $Valor )
{
   if( $Valor == 0 )
   {
      return "N�o" ;
   }
   else
   {
      return "Sim" ;
   }
}


function DefineIdioma()
{
    switch ($_GET['idioma']) {
    case 'en': // ingles
        $_SESSION['idioma'] = 'en';
        break;
    case 'es': // espanhol
        $_SESSION['idioma'] = 'es';
        break;
    case 'br': // portugues
        $_SESSION['idioma'] = 'br';
        break;
    default:
        $_SESSION['idioma'] = 'br';
        break;
    }

    js_redirecionar($_SERVER['PHP_SELF']);
}

/***************************************************************************
Func�es Diversas
***************************************************************************/

function EscreveDia()
{
   if( date("D") == "Sun" ){ $dia = "Domingo, " ; }
   elseif( date("D") == "Mon" ){ $dia = "Segunda-feira, " ; }
   elseif( date("D") == "Tue" ){ $dia = "Ter�a-feira, " ; }
   elseif( date("D") == "Wed" ){ $dia = "Quarta-feira, " ; }
   elseif( date("D") == "Thu" ){ $dia = "Quinta-feira, " ; }
   elseif( date("D") == "Fri" ){ $dia = "Sexta-feira, " ; }
   elseif( date("D") == "Sat" ){ $dia = "S�bado, " ; }

   if( date("n") == "1" ){ $mes = "janeiro" ; }
   elseif( date("n") == "2" ){ $mes = "fevereiro" ; }
   elseif( date("n") == "3" ){ $mes = "mar�o" ; }
   elseif( date("n") == "4" ){ $mes = "abril" ; }
   elseif( date("n") == "5" ){ $mes = "maio" ; }
   elseif( date("n") == "6" ){ $mes = "junho" ; }
   elseif( date("n") == "7" ){ $mes = "julho" ; }
   elseif( date("n") == "8" ){ $mes = "agosto" ; }
   elseif( date("n") == "9" ){ $mes = "setembro" ; }
   elseif( date("n") == "10" ){ $mes = "outubro" ; }
   elseif( date("n") == "11" ){ $mes = "novembro" ; }
   elseif( date("n") == "12" ){ $mes = "dezembro" ; }

   $string = $dia . date("d") . " de " . $mes . " de " . date("Y") ;
   return $string ;
}


/***************************************************************************
Verifica��o do Logon da Intranet
***************************************************************************/
function AutenticacaoIntranet()
{
   if( $_SESSION['secao'] == "intranet" And $_SESSION['usuario'] == "" And $_SESSION['senha'] == "" )
   {
      //abre banco de dados
      $MYSQL_CONEXAO = mysql_connect( $GLOBALS['MYSQL_SERVIDOR'] , $GLOBALS['MYSQL_USUARIO'] , $GLOBALS['MYSQL_SENHA'] ) or die( $GLOBALS['MYSQL_MSGERRO_CONEXAO'] ) ;
      $MYSQL_SISCOVAL = mysql_select_db( $GLOBALS['MYSQL_BD'] ) or die( $GLOBALS['MYSQL_MSGERRO_BD'] ) ;
      //verifica se o usu�rio ultrapassou o n�mero de tentativas no dia
      $frasetentativasnegadas = "Voc� ultrapassou o limite de tentativas poss�veis para autentica��o. Por medidas de seguran�a, o seu acesso estar� liberado somente depois da 0:00hs." ;
      if( $_SESSION['usuario'] == "" And $_SERVER['PHP_AUTH_USER'] != "" )
      {
         if( $_SESSION[ "acessointerno" ] == true ) //verifica usuario
         {
            $MYSQL_RESULTADO = mysql_query( "SELECT * FROM tentativas WHERE usuario ='" . $_SERVER['PHP_AUTH_USER'] . "'" ) or die( mysql_error() ) ;
         }
         else //verifica host
         {
            $MYSQL_RESULTADO = mysql_query( "SELECT * FROM tentativas WHERE host ='" . $_SERVER[ 'REMOTE_ADDR' ] . "'" ) or die( mysql_error() ) ;
         }
         while ( $MYSQL_LINHA = mysql_fetch_array( $MYSQL_RESULTADO ) )
         {
            echo $frasetentativasnegadas ;
            exit ;
         }
      }
      //verifica o nome do usuario digitado
      if( $_SESSION['usuario'] == "" And $_SERVER['PHP_AUTH_USER'] != "" And $_SESSION['tentativas'] <= 3 )
      {
         $log = false ;
         $MYSQL_RESULTADO = mysql_query( "SELECT * FROM usuarios WHERE usuario = '" . $_SERVER['PHP_AUTH_USER'] . "'" ) or die( mysql_error() ) ;
         while ( $MYSQL_LINHA = mysql_fetch_array( $MYSQL_RESULTADO ) )
         {
            if( $_SERVER['PHP_AUTH_PW'] == $MYSQL_LINHA["senha"] )
            {
               $log = true ;
            }
         }
         if( $log == true )
         {
            $_SESSION['usuario'] = $_SERVER['PHP_AUTH_USER'] ;
            $_SESSION['senha'] = $_SERVER['PHP_AUTH_PW'] ;
            header("Location: $SERVIDOR/index.php?pag=redirintra&script=" . urlencode("index.php?pag=frame&secao=intra") ) ;
            exit ;
         }
         else
         {
            $_SESSION['usuario'] = "" ;
            $_SESSION['senha'] = "" ;
            $_SESSION['tentativas'] = $_SESSION['tentativas'] + 1 ;
         }
      }
      //trava acesso depois de ultrapassado o limite de tentativas
      elseif( $_SESSION['usuario'] == "" And $_SERVER['PHP_AUTH_USER'] != "" And $_SESSION['tentativas'] > 3 )
      {
         echo $frasetentativasnegadas ;
         $MYSQL_RESULTADO = mysql_query( "INSERT INTO tentativas ( data , usuario , host ) VALUES ( NOW() , '" . $_SERVER['PHP_AUTH_USER'] . "' , '" . $_SERVER[ 'REMOTE_ADDR' ] . "' )" ) or die( mysql_error() ) ;
         exit ;
      }
      //exibe janela de autentica��o
      $fraselogon = "Digite o nome do usu�rio e a senha para acessar a intranet da Conesteel (tentativa " . $_SESSION['tentativas'] . "/3):" ;
      $fraselogonerro = "Os dados n�o conferem - n�o foi poss�vel fazer autentica��o. " . $fraselogon ;
      if( $_SESSION['usuario'] == "" And $_SESSION['tentativas'] > 0 And $_SESSION['tentativas'] <= 3 )
      {
         if( $_SESSION['tentativas'] == 1 )
         {
            header('WWW-Authenticate: Basic realm="' . $fraselogon . '"') ;
         }
         else
         {
            header('WWW-Authenticate: Basic realm="' . $fraselogonerro . '"') ;
         }
         //se deu erro na autentica��o
         $fraseautenticacao = "Autentica��o para Intranet" ;
         $fraseacessorestrito = "Acesso restrito nesta �rea." ;
         $_SESSION['secao'] = "internet" ;
         InsereCabecalho("") ;
         echo "<BODY><TBODY><TABLE border=0 cellPadding=0 cellSpacing=0 width=100% VALIGN=TOP>\n";
         echo "<TR><TD class=CelulaMenu heigth=20><IMG border=0 src=\"imagens/logo.jpg\"></TD></TR>\n";
         echo "<TR><TD bgColor=\"#4169E1\" height=\"20\">&nbsp;<FONT class=\"BarraMenuPagina\">$fraseautenticacao</FONT></TD></TR>\n";
         echo "</TABLE><BR>\n" ;
         echo $fraseacessorestrito ;
         echo "</TABLE></TBODY></BODY></HTML>\n" ;
         exit ;
      }
      //fecha banco de dados
      mysql_close( $MYSQL_CONEXAO ) ;
   }
}


?>


