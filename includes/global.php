<?php

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Definicoes do banco de dados:

//$bancodedados          = 'conesteel';
//$servidor              = '***';
//$usuario               = '***';
//$senha                 = '***';
//$erroconexao           = 'Erro na Conex�o';
//$errobd                = 'Erro no Banco de Dados';
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Definicoes do banco de dados:


$bancodedados          = 'conesteel1';
$servidor              = '***';
$usuario               = '***';
$senha                 = '***';
$erroconexao           = 'Erro na Conex�o';
$errobd                = 'Erro no Banco de Dados';

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //Abre o banco de dados:
  $conexao = mysql_connect($servidor, $usuario, $senha) or die($erroconexao);
  mysql_select_db($bancodedados) or die($errobd . mysql_error());
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Fun��es Comuns

// Redirecionar p�gina:

   function redireciona($url) {

   echo "<script language=javascript>window.location = '$url';</script>";

   }
   
// Fun��o abrevia:
   
   function abrevia($texto, $quantidade) {

   if(strlen($texto) > $quantidade) {

   return substr($texto, 0, ($quantidade - 3))."...";

   } else {

   return $texto;

   }

   }
   
// Fun��o abrevia (sem pontos):

   function abrevia2($texto, $quantidade) {

   if(strlen($texto) > $quantidade) {

   return substr($texto, 0, ($quantidade - 3));

   } else {

   return $texto;

   }

   }

// Fu��o Abre Pop-UP:

   function popup($url, $altura, $largura) {

   return "onClick=\"window.open('$url','','toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=no,width=$altura,height=$largura,top=120,left=120'); return false\"";

   }
   
// Escreve Dia
   
   function EscreveDia() {
   
    // decide o dia da semana atual
    $dia = '';
    if (date('D') == 'Sun') {
        $dia = 'Domingo, ';
    } elseif (date('D') == 'Mon') {
        $dia = 'Segunda-feira, ';
    } elseif (date('D') == 'Tue') {
        $dia = 'Ter�a-feira, ';
    } elseif (date('D') == 'Wed') {
        $dia = 'Quarta-feira, ';
    } elseif (date('D') == 'Thu') {
        $dia = 'Quinta-feira, ';
    } elseif (date('D') == 'Fri') {
        $dia = 'Sexta-feira, ';
    } elseif (date('D') == 'Sat') {
        $dia = 'S�bado, ';
    } else {
        $dia = '';
    }

    // decide o mes atual
    $mes = '';
    if (date('n') == '1') {
        $mes = 'janeiro';
    } elseif (date('n') == '2') {
        $mes = 'fevereiro';
    } elseif (date('n') == '3') {
        $mes = 'mar�o';
    } elseif (date('n') == '4') {
        $mes = 'abril';
    } elseif (date('n') == '5') {
        $mes = 'maio';
    } elseif (date('n') == '6') {
        $mes = 'junho';
    } elseif (date('n') == '7') {
        $mes = 'julho';
    } elseif (date('n') == '8') {
        $mes = 'agosto';
    } elseif (date('n') == '9') {
        $mes = 'setembro';
    } elseif (date('n') == '10') {
        $mes = 'outubro';
    } elseif (date('n') == '11') {
        $mes = 'novembro';
    } elseif (date('n') == '12') {
        $mes = 'dezembro';
    } else {
        $mes = '';
    }

    $string = $dia . date('d') . ' de ' . $mes . ' de ' . date('Y');
    return $string;

    }
   

?>
