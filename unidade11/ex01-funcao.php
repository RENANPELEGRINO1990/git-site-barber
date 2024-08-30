<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>

<body>
    <?php 

    function retornarDiaria($_salario) {
        return number_format( $_salario/24, 2);
    }

    echo retornarDiaria(3000) . "<br>";
    echo retornarDiaria(5500) . "<br>";

    ?>
</body>
</html>