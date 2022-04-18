<?

 mysql_connect ("***", "***","***");
 $conexao = mysql_connect ("***", "***","***");
 mysql_select_db("conesteel");
 $erroconsulta = 'póó!';
 
 
  $cont1=4;
  $cont2=6;
 
  for ($cont=0;$cont<3000;$cont++)  {
 
  $table = mysql_query("SELECT * FROM pressao_trabalho where ID='$cont1'", $conexao) or die($erroconsulta);

  while ($res_table  = mysql_fetch_array($table))  {

  $pressao1   =  $res_table['pressao'];

  }
  


  
  $table2 = mysql_query("SELECT * FROM pressao_trabalho where ID='$cont2'", $conexao) or die($erroconsulta);

  while ($res_table2  = mysql_fetch_array($table2))  {

  $pressao2   =  $res_table2['pressao'];

  }

  
  $contpressao = $cont1+1;
  
  $pressao800 =   ($pressao1/3) + (($pressao2*2)/3);
  $pressao800 = round($pressao800);

  mysql_query("UPDATE pressao_trabalho SET pressao = '$pressao800' WHERE ID = '$contpressao'", $conexao) or die(mysql_error());
  
  
  echo "<center>$cont"." - ".$contpressao.":".$pressao800."<br></center>";
  
  $cont1=$cont1+9;
  $cont2=$cont2+9;
  

  }
  
  
  
  
