<?php

   // Includes:
     
     include_once 'includes/global.php';
     
     session_start();

     // Qual a linguagem selecionada?
     
     $linguagem = $_SESSION['LINGUAGEM'];
     
     $pag       = $_GET['pag'];
     
     // Se n�o tiver, ent�o iguala a padr�o (portugu�s)
     
     if (empty($linguagem)) $lingua = "portugues";
     
     // OBS: Os textos do sites est�o contidos em apenas um arquivo para cada lingua

     $arquivo = "lingua/".$lingua.".php";
     
     require ($arquivo);
     
     switch ($pag)

      {

      case 'login':

      $meio="painel/login.php";

      break;

      case 'principal':

      $meio        = "principal.php";
      $title       = "V�lvulas tipo: Gaveta, Globo, Reten��o Pist�o / Portinhola";
      break;

      case '':

      $meio        ="principal.php";
      $title       = "V�lvulas tipo: Gaveta, Globo, Reten��o Pist�o / Portinhola";
      break;

      case 'empresa':

      $meio  = "paginas/empresa.php";
      $title = "A Empresa: Tudo sobre a Conesteel - Conquistas, Clientes, Representantes, Sistemada de Gest�o...";

      break;

      case 'aempresa':

      $meio  = "paginas/aempresa.php";
      $title = "Conhe�a a nossa trajet�ria de sucesso!";

      break;

      case 'clientes':

      $meio="paginas/clientes.php";
      $title = "Lista de clientes - Fornecedora Petrobr�s";

      break;

      case 'onde_estamos':

      $meio="paginas/onde_estamos.php";
      $title = "Onde Estamos? Saiba como chegar at� a Conesteel";

      break;

      case 'representantes':

      $meio="paginas/representantes.php";
      $title = "Representantes em grandes pontos do Brasil.";

      break;

      case 'suporte':

      $meio="paginas/suporte.php";
      $title = "Muitas informa��es t�cnicas! Tire todas as suas d�vidas";

      break;

      case 'perda_carga':

      $meio="paginas/perda_carga.php";
      $title = "C�lculo de perda de carga";

      break;

      case 'assistencia_tecnica':

      $meio="paginas/assistencia_tecnica.php";
      $title = "Assist�ncia T�cnica - Suprimento de pe�as, Pr�-Opera��o Assistida...";

      break;

      case 'perguntas':

      $meio="paginas/perguntas.php";
      $title = "Perguntas freq�entes sobre nossos produtos e servi�os.";

      break;

      case 'pressao':

      $meio="paginas/pressao.php";
      $title = "Press�o de Trabalho x Temperatura";

      break;

      case 'downloads':

      $meio="paginas/downloads.php";
      $title = "Download do nosso cat�logo de produtos, manuais, norma SA8000...";

      break;

      case 'conquistas':

      $meio="paginas/conquistas.php";
      $title = "Veja as principais conquistas importantes nos �ltimos anos";

      break;

      case 'gestao':

      $meio="paginas/gestao.php";
      $title = "Sistema de Gest�o da Qualidade";

      break;

      case 'contato':

      $meio="paginas/contato.php";
      $title = "D�vidas, cr�ticas e sugest�es? Entre em contato";

      break;

      case 'conversor':

      $meio="paginas/conversor.php";
      $title = "Conversor de Unidades";

      break;

      case 'corrosao':

      $meio="paginas/corrosao.php";
      $title = "Tabela de Corros�o dos Materiais";

      break;

      case 'produtos':

      $meio="paginas/produtos.php";
      $title = "Nossos Produtos: V�lvula Gaveta, Globo e Reten��o Pist�o / Portinhola";

      break;

      case 'propriedades':

      $meio="paginas/propriedades.php";
      $title = "Propriedades Qu�micas e Mec�nicas dos Materiais";

      break;
      
      case 'curva_torque':

      $meio="paginas/curva_torque.php";
      $title = "Curva de Torque";

      break;

      case 'conhecendo_pistao':

      $meio="paginas/conhecendo_pistao.php";
      $title = "Conhe�a a V�lvula Reten��o Pist�o";

      break;

      case 'aviso_pistao_3d':

      $meio="paginas/aviso_pistao_3d.php";
      $title = "Aviso - eDrawings";

      break;

      case 'dados_pistao':

      $meio="paginas/dados_pistao.php";
      $title = "Dados T�cnicos da V�lvula Reten��o Pist�o";

      break;

      case 'conhecendo_gaveta':

      $meio="paginas/conhecendo_gaveta.php";
      $title = "Conhe�a a V�lvula Gaveta";

      break;

      case 'dados_gaveta':

      $meio="paginas/dados_gaveta.php";
      $title = "Dados T�cnicos da V�lvula Gaveta";

      break;

      case 'aviso_gaveta_3d':

      $meio="paginas/aviso_gaveta_3d.php";
      $title = "Aviso - eDrawings";

      break;

      case 'conhecendo_globo':

      $meio="paginas/conhecendo_globo.php";
      $title = "Conhe�a a V�lvula Globo";

      break;

      case 'dados_globo':

      $meio="paginas/dados_globo.php";
      $title = "Dados T�cnicos da V�lvula Globo";

      break;

      case 'aviso_globo_3d':

      $meio="paginas/aviso_globo_3d.php";
      $title = "Aviso - eDrawings";

      break;

      case 'conhecendo_portinhola':

      $meio="paginas/conhecendo_portinhola.php";
      $title = "Conhe�a a V�lvula Portinhola";

      break;

      case 'dados_portinhola':

      $meio="paginas/dados_portinhola.php";
      $title = "Dados T�cnicos da V�lvula Reten��o Portinhola";

      break;

      case 'aviso_portinhola_3d':

      $meio="paginas/aviso_portinhola_3d.php";
      $title = "Aviso - eDrawings";

      break;

      case 'monte_valvula':

      $meio="paginas/monte_valvula.php";
      $title = "Monte a sua V�lvula / Compre On-line!";

      break;

      case 'monte_valvula2':

      $meio="paginas/monte_valvula2.php";
      $title = "Caracter�sticas da V�lvula";

      break;

      case 'mapa_site':

      $meio="paginas/mapa_site.php";
      $title = "Mapa do site - Rela��o de todas as se��es do site.";

      break;

      default :

      $meio="paginas/404.php";
      $title = "Ops! A p�gina n�o foi encontrada!";

      break;

      }

     $description = "Fabricante brasileira de v�lvulas industriais forjadas. V�lvulas do tipo: gaveta, globo e reten��o pist�o / portinhola. Reconhecida por oferecer produtos de alta tecnologia e qualidade, � uma das fornecedoras Petrobr�s. Com certifica��o ISO 9001.";
     $keywords    = "v�lvulas industriais conesteel gaveta globo retent��o portinhola pist�o metalurgica iso9001 a�o forjado";


     ?>
     <html>
     <head>
     <title>Conesteel V�lvulas Industriais Ltda. - <?=$title?></title>
     <META http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
     <META name="description" content="<?=$description?>">
     <META name="keywords" content="<?=$keywords?>">
     <META http-equiv="author" content="Mauricio Fernandes Raphael">
     <META http-equiv="Reply-to" content="mauricio@conesteel.com.br">
     <META name="title" content="<?=$title?>">
     <META name="robots" content="index,follow">
     <META name="resource-type" content="document"/>
     <META name="classification" content="Internet"/>
     <META name="distribution" content="Global"/>
     <META name="rating" content="General"/>
     <META name="language" content="pt-br"/>
     <META name="verify-v1" content="R+MnVUT+P+UqayqcGPNK9G2+WaOf4LIOnDydvDYeRc8=" /> <!-- Confirma��o para o google-->
     <LINK href="css.css" rel="stylesheet" type="text/css">
     </head>

     <body topmargin="0" leftmargin="0" background="imagens/fundo.jpg">

     <center>

     <?require ("topo.php");?>

     <table width="778" border="0" cellpadding="0" cellspacing="0">
     <tr>
     <td style="width:185" background="imagens/fundo_menu.jpg" align="center" valign="top">
      <?

     switch ($pag)

      {

      case 'empresa':

      require ("menus/menu_empresa.php");

      break;
      
      case 'historico':

      require ("menus/menu_empresa.php");

      break;
      
      case 'aempresa':

      require ("menus/menu_empresa.php");

      break;
      
      case 'clientes':

      require ("menus/menu_empresa.php");

      break;
      
      case 'representantes':

      require ("menus/menu_empresa.php");

      break;
      
      case 'gestao':

      require ("menus/menu_empresa.php");

      break;
      
      case 'onde_estamos':

      require ("menus/menu_empresa.php");

      break;
      
      case 'login':

      require ("menu_principal.php");

      break;
      

      case 'conquistas':

      require ("menus/menu_empresa.php");

      break;
      
      case 'produtos':

      require ("menus/menu_produtos.php");

      break;
      
      case 'conhecendo_pistao':

      require ("menus/menu_produtos.php");

      break;
      
      case 'dados_pistao':

      require ("menus/menu_produtos.php");

      break;
      
      case 'aviso_pistao_3d':

      require ("menus/menu_produtos.php");

      break;
      
      case 'monte_pistao':

      require ("menus/menu_produtos.php");

      break;
      
      case 'conhecendo_gaveta':

      require ("menus/menu_produtos.php");

      break;

      case 'dados_gaveta':

      require ("menus/menu_produtos.php");

      break;
      
      case 'aviso_gaveta_3d':

      require ("menus/menu_produtos.php");

      break;
      
      case 'conhecendo_globo':

      require ("menus/menu_produtos.php");

      break;

      case 'dados_globo':

      require ("menus/menu_produtos.php");

      break;
      
      case 'aviso_globo_3d':

      require ("menus/menu_produtos.php");

      break;
      
      case 'conhecendo_portinhola':

      require ("menus/menu_produtos.php");

      break;
      
      case 'dados_portinhola':

      require ("menus/menu_produtos.php");

      break;
      
      case 'aviso_portinhola_3d':

      require ("menus/menu_produtos.php");

      break;
      
      case 'monte_valvula':

      require ("menus/menu_produtos.php");

      break;
      
      case 'monte_produtos':

      require ("menus/menu_produtos.php");

      break;
      
      case 'assistencia_tecnica':

      require ("menus/menu_suporte.php");

      break;
      
      case 'perguntas':

      require ("menus/menu_suporte.php");

      break;
      
      case 'suporte':

      require ("menus/menu_suporte.php");

      break;
      
      case 'perda_carga':

      require ("menus/menu_suporte.php");

      break;
      
      case 'corrosao':

      require ("menus/menu_suporte.php");

      break;

      case 'conversor':

      require ("menus/menu_suporte.php");

      break;
      
      case 'downloads':

      require ("menus/menu_suporte.php");

      break;
      
      case 'propriedades':

      require ("menus/menu_suporte.php");

      break;
      
      case 'pressao':

      require ("menus/menu_suporte.php");

      break;
      
      case 'curva_torque':

      require ("menus/menu_suporte.php");

      break;
      
      case 'contato':

      require ("menu_principal.php");

      break;
      
      case 'mapa_site':

      require ("menu_principal.php");

      break;
      

      default :

      require ("menu_principal.php");

      break;

      }
      
      ?>

     </td>

     <td style="width:593" background="imagens/fundo_meio.gif" valign="top">


     <?

     require ($meio);

     ?>

     </td></tr>

     </table>

     <?require ("rodape.php");?>

     </center>
     </body>
     </html>
