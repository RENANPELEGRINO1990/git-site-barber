<?php 

//passo 1
$servidor = "local";
$usuario  = "root";
$senha    = "1234";
$banco    = "andes";
$conecta  = mysqli_connect($servidor,$usuario,$senha,$banco);

// passo 2

if (mysqli_connect_errno()) {
    die("Conexao falhou:" . mysqli_connect_errno());
}

//PASSO 3

$consulta_produtos = "SELECT nomeproduto, precounitario, tempoentrega ";
$consulta_produtos.= " FROM produtos";

$produtos= mysqli_query($conecta, $consulta_produtos);

if(!$produtos) {
    die("falha na consulta de dados");
}

?>
<!doctype html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Fundamental</title>
    </head>

    <body>
       <?php
       
       while ( $registro = mysqli_fetch_row($produtos)) {
        print_r($registro);
        echo "<br>";
      
    }
    
       
       ?>

    </body>

</html>
<?php

mysqli_close($conecta);

?>
    
       



