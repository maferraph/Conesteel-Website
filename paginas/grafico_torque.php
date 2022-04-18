<?php

//////////////////////////////////////////////////////////////////////////////////////////

// Definicoes do banco de dados:

$bancodedados          = 'conesteel';
$servidor              = '***';
$usuario               = '***';
$senha                 = '***';
$erroconexao           = 'Erro na Conexão';
$errobd                = 'Erro no Banco de Dados';
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  //Abre o banco de dados:
 $conexao = mysql_connect($servidor, $usuario, $senha) or die($erroconexao);
 mysql_select_db($bancodedados) or die($errobd . mysql_error());
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

include ("../includes/conversor.php");

// Função abrevia (sem pontos):
    function abrevia2($texto, $quantidade) {
    if(strlen($texto) > $quantidade) {
    return substr($texto, 0, ($quantidade - 3));
    } else {
    return $texto;
    }
    }

$uni_torq    = $_GET['uni'];
$valvula     = $_GET['valv'];
$bitola      = $_GET['bito'];
$pressao     = $_GET['pres'];


if ($bitola==1) $bitola2='1/2"';
if ($bitola==2) $bitola2='3/4"';
if ($bitola==3) $bitola2='1"';
if ($bitola==4) $bitola2='1.1/2"';
if ($bitola==5) $bitola2='2"';




function Transforma_Torque($valor, $unidade) {
$valor     = ToSI_Tor($valor, "newton/metro");
$resultado = FromSI_Tor($valor, $unidade);
$resultado = abrevia2($resultado, 8);
return $resultado;
}

if (($valvula=="Gaveta") && ($bitola=="1") && ($pressao=="Sem Pressão")) {

$datay[0]=Transforma_Torque(30, $uni_torq);
$datay[1]=Transforma_Torque(23, $uni_torq);
$datay[2]=Transforma_Torque(2.3, $uni_torq);
$datay[3]=Transforma_Torque(2.3, $uni_torq);
$datay[4]=Transforma_Torque(2.3, $uni_torq);
$datay[5]=Transforma_Torque(2.3, $uni_torq);
$datay[6]=Transforma_Torque(15, $uni_torq);
$datay[7]=Transforma_Torque(12.3, $uni_torq);
$datay[8]=Transforma_Torque(2.3, $uni_torq);
$datay[9]=Transforma_Torque(2.3, $uni_torq);
$datay[10]=Transforma_Torque(2.3, $uni_torq);
$datay[11]=Transforma_Torque(2.3, $uni_torq);
$datay[12]=Transforma_Torque(30, $uni_torq);

$datax[0]="Fechamento";
$datax[1]="Crack Open";
$datax[2]="2 voltas";
$datax[3]="4 voltas";
$datax[4]="6 voltas";
$datax[5]="7 voltas e meia";
$datax[6]="Contra Vedação";
$datax[7]="Crack Open";
$datax[8]="2 voltas";
$datax[9]="4 voltas";
$datax[10]="6 voltas";
$datax[11]="7 voltas e meia";
$datax[12]="Fechamento";

}

if (($valvula=="Gaveta") && ($bitola=="1") && ($pressao=="Com Pressão")) {

$datay[0]=Transforma_Torque(30, $uni_torq);
$datay[1]=Transforma_Torque(24, $uni_torq);
$datay[2]=Transforma_Torque(3.3, $uni_torq);
$datay[3]=Transforma_Torque(3.3, $uni_torq);
$datay[4]=Transforma_Torque(3.3, $uni_torq);
$datay[5]=Transforma_Torque(3.3, $uni_torq);
$datay[6]=Transforma_Torque(15, $uni_torq);
$datay[7]=Transforma_Torque(13, $uni_torq);
$datay[8]=Transforma_Torque(6, $uni_torq);
$datay[9]=Transforma_Torque(6, $uni_torq);
$datay[10]=Transforma_Torque(6, $uni_torq);
$datay[11]=Transforma_Torque(6, $uni_torq);
$datay[12]=Transforma_Torque(30, $uni_torq);

$datax[0]="Fechamento";
$datax[1]="Crack Open";
$datax[2]="2 voltas";
$datax[3]="4 voltas";
$datax[4]="6 voltas";
$datax[5]="7 voltas e meia";
$datax[6]="Contra Vedação";
$datax[7]="Crack Open";
$datax[8]="2 voltas";
$datax[9]="4 voltas";
$datax[10]="6 voltas";
$datax[11]="7 voltas e meia";
$datax[12]="Fechamento";

}

if (($valvula=="Gaveta") && ($bitola=="2") && ($pressao=="Sem Pressão")) {

$datay[0]=Transforma_Torque(30, $uni_torq);
$datay[1]=Transforma_Torque(24, $uni_torq);
$datay[2]=Transforma_Torque(2.3, $uni_torq);
$datay[3]=Transforma_Torque(2.3, $uni_torq);
$datay[4]=Transforma_Torque(2.3, $uni_torq);
$datay[5]=Transforma_Torque(2.3, $uni_torq);
$datay[6]=Transforma_Torque(2.3, $uni_torq);
$datay[7]=Transforma_Torque(15, $uni_torq);
$datay[8]=Transforma_Torque(13, $uni_torq);
$datay[9]=Transforma_Torque(2.3, $uni_torq);
$datay[10]=Transforma_Torque(2.3, $uni_torq);
$datay[11]=Transforma_Torque(2.3, $uni_torq);
$datay[12]=Transforma_Torque(2.3, $uni_torq);
$datay[13]=Transforma_Torque(2.3, $uni_torq);
$datay[14]=Transforma_Torque(30, $uni_torq);

$datax[0]="Fechamento";
$datax[1]="Crack Open";
$datax[2]="2 voltas";
$datax[3]="4 voltas";
$datax[4]="6 voltas";
$datax[5]="8 voltas";
$datax[6]="9 voltas e 1/2";
$datax[7]="Contra Vedação";
$datax[8]="Crack Open";
$datax[9]="2 voltas";
$datax[10]="4 voltas";
$datax[11]="6 voltas";
$datax[12]="8 voltas";
$datax[13]="9 voltas e 1/2";
$datax[14]="Fechamento";

}

if (($valvula=="Gaveta") && ($bitola=="2") && ($pressao=="Com Pressão")) {

$datay[0]=Transforma_Torque(30, $uni_torq);
$datay[1]=Transforma_Torque(23.6, $uni_torq);
$datay[2]=Transforma_Torque(4, $uni_torq);
$datay[3]=Transforma_Torque(4, $uni_torq);
$datay[4]=Transforma_Torque(4, $uni_torq);
$datay[5]=Transforma_Torque(4, $uni_torq);
$datay[6]=Transforma_Torque(4, $uni_torq);
$datay[7]=Transforma_Torque(15, $uni_torq);
$datay[8]=Transforma_Torque(13, $uni_torq);
$datay[9]=Transforma_Torque(6, $uni_torq);
$datay[10]=Transforma_Torque(6, $uni_torq);
$datay[11]=Transforma_Torque(6, $uni_torq);
$datay[12]=Transforma_Torque(6, $uni_torq);
$datay[13]=Transforma_Torque(6, $uni_torq);
$datay[14]=Transforma_Torque(30, $uni_torq);

$datax[0]="Fechamento";
$datax[1]="Crack Open";
$datax[2]="2 voltas";
$datax[3]="4 voltas";
$datax[4]="6 voltas";
$datax[5]="8 voltas";
$datax[6]="9 voltas e 1/2";
$datax[7]="Contra Vedação";
$datax[8]="Crack Open";
$datax[9]="2 voltas";
$datax[10]="4 voltas";
$datax[11]="6 voltas";
$datax[12]="8 voltas";
$datax[13]="9 voltas e 1/2";
$datax[14]="Fechamento";

}


if (($valvula=="Gaveta") && ($bitola=="3") && ($pressao=="Sem Pressão")) {

$datay[0]=Transforma_Torque(50, $uni_torq);
$datay[1]=Transforma_Torque(38, $uni_torq);
$datay[2]=Transforma_Torque(4, $uni_torq);
$datay[3]=Transforma_Torque(4, $uni_torq);
$datay[4]=Transforma_Torque(4, $uni_torq);
$datay[5]=Transforma_Torque(3.6, $uni_torq);
$datay[6]=Transforma_Torque(3.6, $uni_torq);
$datay[7]=Transforma_Torque(3.6, $uni_torq);
$datay[8]=Transforma_Torque(25, $uni_torq);
$datay[9]=Transforma_Torque(19, $uni_torq);
$datay[10]=Transforma_Torque(3.6, $uni_torq);
$datay[11]=Transforma_Torque(3.6, $uni_torq);
$datay[12]=Transforma_Torque(3.6, $uni_torq);
$datay[13]=Transforma_Torque(3.6, $uni_torq);
$datay[14]=Transforma_Torque(3.6, $uni_torq);
$datay[15]=Transforma_Torque(3.6, $uni_torq);
$datay[16]=Transforma_Torque(50, $uni_torq);

$datax[0]="Fechamento";
$datax[1]="Crack Open";
$datax[2]="2 voltas";
$datax[3]="4 voltas";
$datax[4]="6 voltas";
$datax[5]="8 voltas";
$datax[6]="10 voltas";
$datax[7]="11 voltas e 1/2";
$datax[8]="Contra Vedação";
$datax[9]="Crack Open";
$datax[10]="2 voltas";
$datax[11]="4 voltas";
$datax[12]="6 voltas";
$datax[13]="8 voltas";
$datax[14]="10 voltas";
$datax[15]="11 voltas e 1/2";
$datax[16]="Fechamento";

}


if (($valvula=="Gaveta") && ($bitola=="3") && ($pressao=="Com Pressão")) {

$datay[0]=Transforma_Torque(50, $uni_torq);
$datay[1]=Transforma_Torque(38.3, $uni_torq);
$datay[2]=Transforma_Torque(3.3, $uni_torq);
$datay[3]=Transforma_Torque(3.3, $uni_torq);
$datay[4]=Transforma_Torque(3.3, $uni_torq);
$datay[5]=Transforma_Torque(3.3, $uni_torq);
$datay[6]=Transforma_Torque(3.3, $uni_torq);
$datay[7]=Transforma_Torque(3.3, $uni_torq);
$datay[8]=Transforma_Torque(25, $uni_torq);
$datay[9]=Transforma_Torque(21.3, $uni_torq);
$datay[10]=Transforma_Torque(6, $uni_torq);
$datay[11]=Transforma_Torque(6, $uni_torq);
$datay[12]=Transforma_Torque(6, $uni_torq);
$datay[13]=Transforma_Torque(6, $uni_torq);
$datay[14]=Transforma_Torque(6, $uni_torq);
$datay[15]=Transforma_Torque(6, $uni_torq);
$datay[16]=Transforma_Torque(50, $uni_torq);

$datax[0]="Fechamento";
$datax[1]="Crack Open";
$datax[2]="2 voltas";
$datax[3]="4 voltas";
$datax[4]="6 voltas";
$datax[5]="8 voltas";
$datax[6]="10 voltas";
$datax[7]="11 voltas e 1/2";
$datax[8]="Contra Vedação";
$datax[9]="Crack Open";
$datax[10]="2 voltas";
$datax[11]="4 voltas";
$datax[12]="6 voltas";
$datax[13]="8 voltas";
$datax[14]="10 voltas";
$datax[15]="11 voltas e 1/2";
$datax[16]="Fechamento";

}

if (($valvula=="Gaveta") && ($bitola=="4") && ($pressao=="Sem Pressão")) {

$datay[0]=Transforma_Torque(80, $uni_torq);
$datay[1]=Transforma_Torque(70, $uni_torq);
$datay[2]=Transforma_Torque(3.3, $uni_torq);
$datay[3]=Transforma_Torque(4, $uni_torq);
$datay[4]=Transforma_Torque(4.3, $uni_torq);
$datay[5]=Transforma_Torque(4.3, $uni_torq);
$datay[6]=Transforma_Torque(3.6, $uni_torq);
$datay[7]=Transforma_Torque(3.6, $uni_torq);
$datay[8]=Transforma_Torque(30, $uni_torq);
$datay[9]=Transforma_Torque(24, $uni_torq);
$datay[10]=Transforma_Torque(5.3, $uni_torq);
$datay[11]=Transforma_Torque(5, $uni_torq);
$datay[12]=Transforma_Torque(5, $uni_torq);
$datay[13]=Transforma_Torque(4.3, $uni_torq);
$datay[14]=Transforma_Torque(4.3, $uni_torq);
$datay[15]=Transforma_Torque(4.3, $uni_torq);
$datay[16]=Transforma_Torque(80, $uni_torq);

$datax[0]="Fechamento";
$datax[1]="Crack Open";
$datax[2]="2 voltas";
$datax[3]="4 voltas";
$datax[4]="6 voltas";
$datax[5]="8 voltas";
$datax[6]="10 voltas";
$datax[7]="11 voltas e 1/2";
$datax[8]="Contra Vedação";
$datax[9]="Crack Open";
$datax[10]="2 voltas";
$datax[11]="4 voltas";
$datax[12]="6 voltas";
$datax[13]="8 voltas";
$datax[14]="10 voltas";
$datax[15]="11 voltas e 1/2";
$datax[16]="Fechamento";

}

if (($valvula=="Gaveta") && ($bitola=="4") && ($pressao=="Com Pressão")) {

$datay[0]=Transforma_Torque(80, $uni_torq);
$datay[1]=Transforma_Torque(75, $uni_torq);
$datay[2]=Transforma_Torque(9.6, $uni_torq);
$datay[3]=Transforma_Torque(9.6, $uni_torq);
$datay[4]=Transforma_Torque(9.6, $uni_torq);
$datay[5]=Transforma_Torque(9.6, $uni_torq);
$datay[6]=Transforma_Torque(9.6, $uni_torq);
$datay[7]=Transforma_Torque(9.6, $uni_torq);
$datay[8]=Transforma_Torque(30, $uni_torq);
$datay[9]=Transforma_Torque(25.3, $uni_torq);
$datay[10]=Transforma_Torque(15.6, $uni_torq);
$datay[11]=Transforma_Torque(16, $uni_torq);
$datay[12]=Transforma_Torque(16.3, $uni_torq);
$datay[13]=Transforma_Torque(16.6, $uni_torq);
$datay[14]=Transforma_Torque(17, $uni_torq);
$datay[15]=Transforma_Torque(17.6, $uni_torq);
$datay[16]=Transforma_Torque(80, $uni_torq);

$datax[0]="Fechamento";
$datax[1]="Crack Open";
$datax[2]="2 voltas";
$datax[3]="4 voltas";
$datax[4]="6 voltas";
$datax[5]="8 voltas";
$datax[6]="10 voltas";
$datax[7]="11 voltas e 1/2";
$datax[8]="Contra Vedação";
$datax[9]="Crack Open";
$datax[10]="2 voltas";
$datax[11]="4 voltas";
$datax[12]="6 voltas";
$datax[13]="8 voltas";
$datax[14]="10 voltas";
$datax[15]="11 voltas e 1/2";
$datax[16]="Fechamento";

}

if (($valvula=="Gaveta") && ($bitola=="5") && ($pressao=="Sem Pressão")) {

$datay[0]=Transforma_Torque(80, $uni_torq);
$datay[1]=Transforma_Torque(70, $uni_torq);
$datay[2]=Transforma_Torque(4, $uni_torq);
$datay[3]=Transforma_Torque(4, $uni_torq);
$datay[4]=Transforma_Torque(4, $uni_torq);
$datay[5]=Transforma_Torque(4.6, $uni_torq);
$datay[6]=Transforma_Torque(4.3, $uni_torq);
$datay[7]=Transforma_Torque(4.6, $uni_torq);
$datay[8]=Transforma_Torque(4.3, $uni_torq);
$datay[9]=Transforma_Torque(30, $uni_torq);
$datay[10]=Transforma_Torque(23.6, $uni_torq);
$datay[11]=Transforma_Torque(6.6, $uni_torq);
$datay[12]=Transforma_Torque(6.6, $uni_torq);
$datay[13]=Transforma_Torque(6.3, $uni_torq);
$datay[14]=Transforma_Torque(6.3, $uni_torq);
$datay[15]=Transforma_Torque(5.6, $uni_torq);
$datay[16]=Transforma_Torque(5.6, $uni_torq);
$datay[17]=Transforma_Torque(5.6, $uni_torq);
$datay[18]=Transforma_Torque(80, $uni_torq);


$datax[0]="Fechamento";
$datax[1]="Crack Open";
$datax[2]="2 voltas";
$datax[3]="4 voltas";
$datax[4]="6 voltas";
$datax[5]="8 voltas";
$datax[6]="10 voltas";
$datax[7]="12 voltas";
$datax[8]="13 voltas e 1/2";
$datax[9]="Contra Vedação";
$datax[10]="Crack Open";
$datax[11]="2 voltas";
$datax[12]="4 voltas";
$datax[13]="6 voltas";
$datax[14]="8 voltas";
$datax[15]="10 voltas";
$datax[16]="12 voltas";
$datax[17]="13 voltas e 1/2";
$datax[18]="Fechamento";

}

if (($valvula=="Gaveta") && ($bitola=="5") && ($pressao=="Com Pressão")) {

$datay[0]=Transforma_Torque(80, $uni_torq);
$datay[1]=Transforma_Torque(75, $uni_torq);
$datay[2]=Transforma_Torque(7, $uni_torq);
$datay[3]=Transforma_Torque(7, $uni_torq);
$datay[4]=Transforma_Torque(7, $uni_torq);
$datay[5]=Transforma_Torque(7, $uni_torq);
$datay[6]=Transforma_Torque(7, $uni_torq);
$datay[7]=Transforma_Torque(7, $uni_torq);
$datay[8]=Transforma_Torque(7, $uni_torq);
$datay[9]=Transforma_Torque(30, $uni_torq);
$datay[10]=Transforma_Torque(24.6, $uni_torq);
$datay[11]=Transforma_Torque(19, $uni_torq);
$datay[12]=Transforma_Torque(19, $uni_torq);
$datay[13]=Transforma_Torque(19, $uni_torq);
$datay[14]=Transforma_Torque(19, $uni_torq);
$datay[15]=Transforma_Torque(19, $uni_torq);
$datay[16]=Transforma_Torque(19, $uni_torq);
$datay[17]=Transforma_Torque(19, $uni_torq);
$datay[18]=Transforma_Torque(80, $uni_torq);


$datax[0]="Fechamento";
$datax[1]="Crack Open";
$datax[2]="2 voltas";
$datax[3]="4 voltas";
$datax[4]="6 voltas";
$datax[5]="8 voltas";
$datax[6]="10 voltas";
$datax[7]="12 voltas";
$datax[8]="13 voltas e 1/2";
$datax[9]="Contra Vedação";
$datax[10]="Crack Open";
$datax[11]="2 voltas";
$datax[12]="4 voltas";
$datax[13]="6 voltas";
$datax[14]="8 voltas";
$datax[15]="10 voltas";
$datax[16]="12 voltas";
$datax[17]="13 voltas e 1/2";
$datax[18]="Fechamento";

}




include ("../includes/graficos/jpgraph.php");
include ("../includes/graficos/jpgraph_line.php");
include ("../includes/graficos/jpgraph_iconplot.php");


// Setup the graph
$lineplot=new LinePlot($datay);
$lineplot->value->SetColor('black');
$lineplot->value->SetFont(FF_FONT1,FS_BOLD);
$lineplot->mark->SetType(MARK_UTRIANGLE);
$lineplot->value->show();
$lineplot->value->SetFormat('%0.1f');
$graph = new Graph(950,550);
$graph->SetMargin(50,40,10,120);
$graph->SetScale("textlin");
$graph->title->Set('Curva de Torque da Válvula '.$valvula .' de '.$bitola2.' '.$pressao.' - Unidade: '.$uni_torq);
$graph->xaxis->title->Set("Descrição");
$graph->xaxis->SetPos('min');
$graph->xaxis->SetLabelAngle(90);
$graph->xaxis->SetFont(FF_FONT1,FS_BOLD);
$graph->xscale-> ticks->Set(100, 1);
$titulo[0]=1;
$titulo_le = new LinePlot($titulo);
$p1 = new LinePlot($datay);
$p1->mark->SetType(MARK_FILLEDCIRCLE);
$p1->SetColor("#006AD5");
$p1->SetFillColor("#D5EAFF");
$p1->mark->SetFillColor("blue");
$p1->mark->SetWidth(4);

$icon = new IconPlot('../logao.png',470,200,1,20);
$icon->SetAnchor('center','center');
$graph->Add($p1);
$graph->Add($titulo_le);
$graph->Add($icon);
$graph->Add($lineplot);
$graph->xaxis->SetTickLabels($datax);
// Output line
$graph->Stroke();
?>
