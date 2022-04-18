<?php

   // Includes:
     
     include_once 'includes/global.php';
     
     session_start();

     // Qual a linguagem selecionada?
     
     $linguagem = $_SESSION['LINGUAGEM'];
     
     $pag       = $_GET['pag'];
     
     // Se não tiver, então iguala a padrão (português)
     
     if (empty($linguagem)) $lingua = "portugues";
     
     // OBS: Os textos do sites estão contidos em apenas um arquivo para cada lingua

     $arquivo = "lingua/".$lingua.".php";
     
     require ($arquivo);
     
     switch ($pag)

      {

      case 'login':

      $meio="painel/login.php";

      break;

      case 'principal':

      $meio        = "principal.php";
      $title       = "Válvulas tipo: Gaveta, Globo, Retenção Pistão / Portinhola";
      break;

      case '':

      $meio        ="principal.php";
      $title       = "Válvulas tipo: Gaveta, Globo, Retenção Pistão / Portinhola";
      break;

      case 'empresa':

      $meio  = "paginas/empresa.php";
      $title = "A Empresa: Tudo sobre a Conesteel - Conquistas, Clientes, Representantes, Sistemada de Gestão...";

      break;

      case 'aempresa':

      $meio  = "paginas/aempresa.php";
      $title = "Conheça a nossa trajetória de sucesso!";

      break;

      case 'clientes':

      $meio="paginas/clientes.php";
      $title = "Lista de clientes - Fornecedora Petrobrás";

      break;

      case 'onde_estamos':

      $meio="paginas/onde_estamos.php";
      $title = "Onde Estamos? Saiba como chegar até a Conesteel";

      break;

      case 'representantes':

      $meio="paginas/representantes.php";
      $title = "Representantes em grandes pontos do Brasil.";

      break;

      case 'suporte':

      $meio="paginas/suporte.php";
      $title = "Muitas informações técnicas! Tire todas as suas dúvidas";

      break;

      case 'perda_carga':

      $meio="paginas/perda_carga.php";
      $title = "Cálculo de perda de carga";

      break;

      case 'assistencia_tecnica':

      $meio="paginas/assistencia_tecnica.php";
      $title = "Assistência Técnica - Suprimento de peças, Pré-Operação Assistida...";

      break;

      case 'perguntas':

      $meio="paginas/perguntas.php";
      $title = "Perguntas freqüentes sobre nossos produtos e serviços.";

      break;

      case 'pressao':

      $meio="paginas/pressao.php";
      $title = "Pressão de Trabalho x Temperatura";

      break;

      case 'downloads':

      $meio="paginas/downloads.php";
      $title = "Download do nosso catálogo de produtos, manuais, norma SA8000...";

      break;

      case 'conquistas':

      $meio="paginas/conquistas.php";
      $title = "Veja as principais conquistas importantes nos últimos anos";

      break;

      case 'gestao':

      $meio="paginas/gestao.php";
      $title = "Sistema de Gestão da Qualidade";

      break;

      case 'contato':

      $meio="paginas/contato.php";
      $title = "Dúvidas, críticas e sugestões? Entre em contato";

      break;

      case 'conversor':

      $meio="paginas/conversor.php";
      $title = "Conversor de Unidades";

      break;

      case 'corrosao':

      $meio="paginas/corrosao.php";
      $title = "Tabela de Corrosão dos Materiais";

      break;

      case 'produtos':

      $meio="paginas/produtos.php";
      $title = "Nossos Produtos: Válvula Gaveta, Globo e Retenção Pistão / Portinhola";

      break;

      case 'propriedades':

      $meio="paginas/propriedades.php";
      $title = "Propriedades Químicas e Mecânicas dos Materiais";

      break;
      
      case 'curva_torque':

      $meio="paginas/curva_torque.php";
      $title = "Curva de Torque";

      break;

      case 'conhecendo_pistao':

      $meio="paginas/conhecendo_pistao.php";
      $title = "Conheça a Válvula Retenção Pistão";

      break;

      case 'aviso_pistao_3d':

      $meio="paginas/aviso_pistao_3d.php";
      $title = "Aviso - eDrawings";

      break;

      case 'dados_pistao':

      $meio="paginas/dados_pistao.php";
      $title = "Dados Técnicos da Válvula Retenção Pistão";

      break;

      case 'conhecendo_gaveta':

      $meio="paginas/conhecendo_gaveta.php";
      $title = "Conheça a Válvula Gaveta";

      break;

      case 'dados_gaveta':

      $meio="paginas/dados_gaveta.php";
      $title = "Dados Técnicos da Válvula Gaveta";

      break;

      case 'aviso_gaveta_3d':

      $meio="paginas/aviso_gaveta_3d.php";
      $title = "Aviso - eDrawings";

      break;

      case 'conhecendo_globo':

      $meio="paginas/conhecendo_globo.php";
      $title = "Conheça a Válvula Globo";

      break;

      case 'dados_globo':

      $meio="paginas/dados_globo.php";
      $title = "Dados Técnicos da Válvula Globo";

      break;

      case 'aviso_globo_3d':

      $meio="paginas/aviso_globo_3d.php";
      $title = "Aviso - eDrawings";

      break;

      case 'conhecendo_portinhola':

      $meio="paginas/conhecendo_portinhola.php";
      $title = "Conheça a Válvula Portinhola";

      break;

      case 'dados_portinhola':

      $meio="paginas/dados_portinhola.php";
      $title = "Dados Técnicos da Válvula Retenção Portinhola";

      break;

      case 'aviso_portinhola_3d':

      $meio="paginas/aviso_portinhola_3d.php";
      $title = "Aviso - eDrawings";

      break;

      case 'monte_valvula':

      $meio="paginas/monte_valvula.php";
      $title = "Monte a sua Válvula / Compre On-line!";

      break;

      case 'monte_valvula2':

      $meio="paginas/monte_valvula2.php";
      $title = "Características da Válvula";

      break;

      case 'mapa_site':

      $meio="paginas/mapa_site.php";
      $title = "Mapa do site - Relação de todas as seções do site.";

      break;

      default :

      $meio="paginas/404.php";
      $title = "Ops! A página não foi encontrada!";

      break;

      }

     $description = "Fabricante brasileira de válvulas industriais forjadas. Válvulas do tipo: gaveta, globo e retenção pistão / portinhola. Reconhecida por oferecer produtos de alta tecnologia e qualidade, é uma das fornecedoras Petrobrás. Com certificação ISO 9001.";
     $keywords    = "válvulas industriais conesteel gaveta globo retentção portinhola pistão metalurgica iso9001 aço forjado";


     ?>
     <html>
     <head>
     <title>Conesteel Válvulas Industriais Ltda. - <?=$title?></title>
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
     <META name="verify-v1" content="R+MnVUT+P+UqayqcGPNK9G2+WaOf4LIOnDydvDYeRc8=" /> <!-- Confirmação para o google-->
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
