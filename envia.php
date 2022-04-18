<?php

 mysql_connect ("***", "***","***");
 $conexao = mysql_connect ("***", "***","***");
 mysql_select_db("conesteel");
 $erroconsulta = 'póó!';
 //Carrega a página

 $abrepagina = fopen ("fluido.txt", "r");

 //Pega as strings
 $cont=1;

 while (!feof ($abrepagina) ) {

$conteudo = fgets($abrepagina, 4096);

$conteudo = trim($conteudo);

if ($conteudo=="") { $conteudo="-"; }

//mysql_query("INSERT INTO tabela_corrosao (fluido) VALUES ('$conteudo')", $conexao) or die($erroconsulta);

mysql_query("UPDATE tabela_corrosao SET teflon = '$conteudo' WHERE ID = '$cont'", $conexao) or die(mysql_error());

echo "<center><a class=\"con2\">$conteudo<br></a></center>";

$cont++;

 } //Fecha while
 fclose ($abrepagina); //Fecha página
 
 ?>
