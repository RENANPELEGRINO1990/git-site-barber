<?php  

$_nome = "Curso PHP ";

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

    <?php
        //strlen - Retorna  a quantidade de letras (posição)
         echo strlen($_nome);

        //stripos - Retorna a primeira ocorrencia
        echo stripos($_nome,"P");

        //strripos - Retorna a ultima ocorrencia
        echo strripos($_nome,"P");

        //strtolower - Converte para letras min
        echo strtolower($_nome);

        //strtoupper - Converte para letras maius.
        echo strtoupper($_nome);

        //substr_count - Conta quantas ocorreram de um
                         //de um texto ou uma string
                        //Faz diferença entre maisc e min.
        echo substr_count($_nome, "P");                
        ?>
    </body>
</html>