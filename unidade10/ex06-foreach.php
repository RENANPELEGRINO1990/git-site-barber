<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_agenda  = array(       "Nome" => "Andre",
                                 "Telefone"=> "999-888",
                                 "Salario"=> "2500.00");

        foreach ($_agenda as $_contatos => $_valor) {
            echo $_contatos . " : " . $_valor . "<br>";
        }                         
    ?>
</body>
</html>