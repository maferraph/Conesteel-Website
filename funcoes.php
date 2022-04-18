<?php
/***************************************************************************
Site Conesteel
http://www.conesteel.com.br
funcoes.php
Criado em 25/10/2005
Autor: Mauricio Fernandes Raphael
***************************************************************************/

/***************************************************************************
Iniciar Seções
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
Variáveis Públicas
***************************************************************************/
$TEXTO_EMPRESA = "Conesteel Válvulas e Conexões Industriais Ltda.";
$HTML_MENUPAGINA_COR = "#4169E1" ;

/***************************************************************************
Funções para Banco de Dados
***************************************************************************/
$MYSQL_SERVIDOR = "";
$MYSQL_USUARIO = "";
$MYSQL_SENHA = "";
$MYSQL_BD = "";
$MYSQL_MSGERRO_CONEXAO = "Não foi possível estabelecer conexão com o banco de dados." ;
$MYSQL_MSGERRO_BD = "Não foi possível abrir o banco de dados." ;
$MYSQL_MSGERRO_QUERY = "Não foi possível executar query." ;

/***************************************************************************
Funções para HTML
***************************************************************************/

function InsereCabecalho()
{
   echo "<HTML><HEAD><TITLE>Conesteel Válvulas e Conexões Industriais Ltda.</TITLE>\n";
   //metatags
   echo "<META NAME=\"Title\" CONTENT=\"Conesteel Válvulas e Conexões Industriais Ltda.\">\n";
   echo "<META NAME=\"ROBOTS\" CONTENT=\"INDEX, NOFOLLOW\">\n";
   echo "<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=iso-8859-1\">\n";
   echo "<META NAME=\"Language\" CONTENT=\"Portuguese\">\n";
   echo "<META HTTP-EQUIV=\"Expires\" CONTENT='0'>\n";
   echo "<META NAME=\"description\" CONTENT=\"Site da Conesteel\">\n";
   echo "<META NAME=\"keywords\" CONTENT=\"Site, Conesteel, Válvulas, Conexões, Gaveta, Globo, Retenção Pistão, Retenção Portinhola, ASTM, ASME, API, MSS, aço forjado, industriais\">\n";
   echo "<META HTTP-EQUIV=\"author\" CONTENT=\"Maurício Fernandes Raphael\">\n";
   echo "<META HTTP-EQUIV=\"Reply-to\" CONTENT=\"mauricio@conesteel.com.br\">\n";
   echo "<META NAME=\"Classification\" CONTENT=\"Indústria\">\n";
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
   echo "<TR><TD align=\"left\" bgColor=\"#4169E1\" colSpan=\"3\" height=\"20\" noWrap vAlign=\"center\">&nbsp;<FONT class=\"BarraMenuPagina\">CONESTEEL® Válvulas e Conexões Industriais Ltda. - Todos os direitos reservados</FONT></TD>\n";
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
      return "Não" ;
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
Funcões Diversas
***************************************************************************/

function EscreveDia()
{
   if( date("D") == "Sun" ){ $dia = "Domingo, " ; }
   elseif( date("D") == "Mon" ){ $dia = "Segunda-feira, " ; }
   elseif( date("D") == "Tue" ){ $dia = "Terça-feira, " ; }
   elseif( date("D") == "Wed" ){ $dia = "Quarta-feira, " ; }
   elseif( date("D") == "Thu" ){ $dia = "Quinta-feira, " ; }
   elseif( date("D") == "Fri" ){ $dia = "Sexta-feira, " ; }
   elseif( date("D") == "Sat" ){ $dia = "Sábado, " ; }

   if( date("n") == "1" ){ $mes = "janeiro" ; }
   elseif( date("n") == "2" ){ $mes = "fevereiro" ; }
   elseif( date("n") == "3" ){ $mes = "março" ; }
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
Verificação do Logon da Intranet
***************************************************************************/
function AutenticacaoIntranet()
{
   if( $_SESSION['secao'] == "intranet" And $_SESSION['usuario'] == "" And $_SESSION['senha'] == "" )
   {
      //abre banco de dados
      $MYSQL_CONEXAO = mysql_connect( $GLOBALS['MYSQL_SERVIDOR'] , $GLOBALS['MYSQL_USUARIO'] , $GLOBALS['MYSQL_SENHA'] ) or die( $GLOBALS['MYSQL_MSGERRO_CONEXAO'] ) ;
      $MYSQL_SISCOVAL = mysql_select_db( $GLOBALS['MYSQL_BD'] ) or die( $GLOBALS['MYSQL_MSGERRO_BD'] ) ;
      //verifica se o usuário ultrapassou o número de tentativas no dia
      $frasetentativasnegadas = "Você ultrapassou o limite de tentativas possíveis para autenticação. Por medidas de segurança, o seu acesso estará liberado somente depois da 0:00hs." ;
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
      //exibe janela de autenticação
      $fraselogon = "Digite o nome do usuário e a senha para acessar a intranet da Conesteel (tentativa " . $_SESSION['tentativas'] . "/3):" ;
      $fraselogonerro = "Os dados não conferem - não foi possível fazer autenticação. " . $fraselogon ;
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
         //se deu erro na autenticação
         $fraseautenticacao = "Autenticação para Intranet" ;
         $fraseacessorestrito = "Acesso restrito nesta área." ;
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


