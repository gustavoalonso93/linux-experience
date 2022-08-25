<html>

   <head>
     <title>Titulo exemplo</title>
   </head>
  <body>

  <?php
  ini_set("display_erros",1);
  header('Content-Type: text/html; charset=iso-8859-1');

  echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

  $servername = "0.0.0.0"; //ip
  $username = "root";
  $password = "123456"; //Senha
  $database = "bancoShiro";

  //conexão
 
  $link = new mysqli($servername, $username, $password, $database);

 /* check connection */

 if (mysqli_connect_errno()) {
     printf("Connect failed: %s\n", mysqli_connect_error());
     exit();
   }

 $valor_rand1 = rand(1,999);
 $valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)),1));
 $host_name = gethostname();

 $query = "INSERT INTO dados(Prod_ID,Nome,preco,preso,marca) VALUES ("$valo>

 if ($link -> query($query) == TRUE) {
    echo "Processo concluido! Informações salvas!";
 } else {
    echo "Aconteceu um error: " . $link->error;
 }

  ?>
  </body>
</html> 

