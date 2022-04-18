<?php

include_once ( "../includes/global.php" );

include ("../includes/conversor.php");

$uni_temp  = $_SESSION['temperatura'];
$uni_press = $_SESSION['press'];

$material    = $_GET['mat'];
$temperatura = $_GET['temp'];
$pressao     = $_GET['press'];

function Transforma_temp1($valor)  {
   global $temperatura;
   $temp   = ToSI_Temp("$valor", "Fahrenheit");
   $temp   = FromSI_Temp($temp, $temperatura);
   $temp   = round($temp);

   return $temp;

   }
   
function Transforma_press2($valor)  {
   global   $pressao;
   
   $press   = FromSI_Press("$valor", "pound-force/sq.inch");
   $press   = ToSI_Press($press, $pressao);
   $press   = round($press);

   return $press;

   }



$temp0 = 0;
$temp1 = Transforma_temp1(-20)."/".Transforma_temp1(100);
$temp2 = Transforma_temp1(200);
$temp3 = Transforma_temp1(300);
$temp4 = Transforma_temp1(400);
$temp5 = Transforma_temp1(500);
$temp6 = Transforma_temp1(600);
$temp7 = Transforma_temp1(650);
$temp8 = Transforma_temp1(750);
$temp9 = Transforma_temp1(800);
$temp10= Transforma_temp1(850);
$temp11= Transforma_temp1(900);
$temp12= Transforma_temp1(950);
$temp13= Transforma_temp1(1000);
$temp14= Transforma_temp1(1050);
$temp15= Transforma_temp1(1100);
$temp16= Transforma_temp1(1150);
$temp17= Transforma_temp1(1200);
$temp18= Transforma_temp1(1250);
$temp19= Transforma_temp1(1300);
$temp20= Transforma_temp1(1350);
$temp21= Transforma_temp1(1400);
$temp22= Transforma_temp1(1450);
$temp23= Transforma_temp1(1500);



$datax[0]= $temp0;
$datax[1]= $temp1;
$datax[2]= $temp2;
$datax[3]= $temp3;
$datax[4]= $temp4;
$datax[5]= $temp5;
$datax[6]= $temp6;
$datax[7]= $temp7;
$datax[8]= $temp8;
$datax[9]= $temp9;
$datax[10]=$temp10;
$datax[11]=$temp11;
$datax[12]=$temp12;
$datax[13]=$temp13;
$datax[14]=$temp14;
$datax[15]=$temp15;
$datax[16]=$temp16;
$datax[17]=$temp17;
$datax[18]=$temp18;
$datax[19]=$temp19;
$datax[20]=$temp20;
$datax[21]=$temp21;
$datax[22]=$temp22;
$datax[23]=$temp23;


$cont = 0;

$grafico   =  mysql_query("SELECT * FROM pressao_trabalho WHERE material='$material' AND classe='150'", $conexao) or die($erroconsulta);

while ($res_grafico  = mysql_fetch_array($grafico))  {

$datay[$cont]=Transforma_press2($res_grafico['pressao']);
$cont++;
}

$cont = 0;

$grafico   =  mysql_query("SELECT * FROM pressao_trabalho WHERE material='$material' AND classe='300'", $conexao) or die($erroconsulta);

while ($res_grafico  = mysql_fetch_array($grafico))  {

$datay2[$cont]=Transforma_press2($res_grafico['pressao']);
$cont++;
}


$cont = 0;

$grafico   =  mysql_query("SELECT * FROM pressao_trabalho WHERE material='$material' AND classe='600'", $conexao) or die($erroconsulta);

while ($res_grafico  = mysql_fetch_array($grafico))  {

$datay3[$cont]=Transforma_press2($res_grafico['pressao']);
$cont++;
}


$cont = 0;

$grafico   =  mysql_query("SELECT * FROM pressao_trabalho WHERE material='$material' AND classe='800'", $conexao) or die($erroconsulta);

while ($res_grafico  = mysql_fetch_array($grafico))  {

$datay4[$cont]=Transforma_press2($res_grafico['pressao']);
$cont++;
}

$cont = 0;

$grafico   =  mysql_query("SELECT * FROM pressao_trabalho WHERE material='$material' AND classe='900'", $conexao) or die($erroconsulta);

while ($res_grafico  = mysql_fetch_array($grafico))  {

$datay5[$cont]=Transforma_press2($res_grafico['pressao']);
$cont++;
}

$cont = 0;

$grafico   =  mysql_query("SELECT * FROM pressao_trabalho WHERE material='$material' AND classe='1500'", $conexao) or die($erroconsulta);

while ($res_grafico  = mysql_fetch_array($grafico))  {

$datay6[$cont]=Transforma_press2($res_grafico['pressao']);
$cont++;
}

$cont = 0;

$grafico   =  mysql_query("SELECT * FROM pressao_trabalho WHERE material='$material' AND classe='2500'", $conexao) or die($erroconsulta);

while ($res_grafico  = mysql_fetch_array($grafico))  {

$datay7[$cont]=Transforma_press2($res_grafico['pressao']);
$cont++;
}

$cont = 0;

$grafico   =  mysql_query("SELECT * FROM pressao_trabalho WHERE material='$material' AND classe='4500'", $conexao) or die($erroconsulta);

while ($res_grafico  = mysql_fetch_array($grafico))  {

$datay8[$cont]=Transforma_press2($res_grafico['pressao']);
$cont++;
}

include ("../includes/graficos/jpgraph.php");
include ("../includes/graficos/jpgraph_line.php");
include ("../includes/graficos/jpgraph_iconplot.php");


// Setup the graph
$graph = new Graph(740,570);
$graph->SetMargin(50,40,10,30);


 $graph ->SetScale("textlin");
 $graph->xscale-> ticks->Set(100, 1);


$graph->title->Set('Pressão x Temperatura do Material (ASME B16.34): '.$material);

$graph->xaxis->title->Set("Pressão(Y) em $pressao                                           Temperatura(X) em $temperatura");


//$graph->title->SetFont(FF_ARIAL,FS_NORMAL,12);

//$graph->SetBackgroundGradient('red','blue');

$graph->xaxis->SetPos('min');


$titulo[0]=1;

$titulo_le = new LinePlot($titulo);
$titulo_le->SetLegend('Classes');
//$titulo_le->SetColor("blue");
//$titulo_le->SetFillGradient('yellow@0.4','red@0.4');

$p1 = new LinePlot($datay);
$p1->SetLegend('150');
$p1->SetColor("blue");
$p1->SetFillGradient('black@0.4','red@0.4');

$p2 = new LinePlot($datay2);
$p2->SetLegend('300');
$p2->SetColor("black");
$p2->SetFillGradient('#9933F@0.4','white');

$p3 = new LinePlot($datay3);
$p3->SetLegend('600');
$p3->SetColor("blue");
$p3->SetFillGradient('blue@0.4','white@0.4');

$p4 = new LinePlot($datay4);
$p4->SetLegend('800');
$p4->SetColor("blue");
$p4->SetFillGradient('red@0.4','white@0.4');

$p5 = new LinePlot($datay5);
$p5->SetLegend('900');
$p5->SetColor("blue");
$p5->SetFillGradient('#C0C0C0@0.4','white@0.4');

$p6 = new LinePlot($datay6);
$p6->SetLegend('1500');
$p6->SetColor("blue");
$p6->SetFillGradient('navy@0.4','white@0.4');

$p7 = new LinePlot($datay7);
$p7->SetLegend('2500');
$p7->SetColor("blue");
$p7->SetFillGradient('green@0.4','white@0.4');

$p8 = new LinePlot($datay8);
$p8->SetLegend('4500');
$p8->SetColor("blue");
$p8->SetFillGradient('yellow@0.4','white@0.4');




$graph->xaxis->SetTickLabels($datax);

$icon = new IconPlot('../logao.png',350,200,1,30);
$icon->SetAnchor('center','center');
$graph->Add($icon);

$graph->Add($titulo_le);
$graph->Add($p8);
$graph->Add($p7);
$graph->Add($p6);
$graph->Add($p5);
$graph->Add($p4);
$graph->Add($p3);
$graph->Add($p2);
$graph->Add($p1);



// Output line


$graph->Stroke();

?>


