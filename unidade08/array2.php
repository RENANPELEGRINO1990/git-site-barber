<?php
$_megasena = array(12,60,23,32,87,66);

rsort($_megasena);

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        echo max($_megasena) . "<br>";
        echo min($_megasena) . "<br>";
     ?>

       <pre>
       <?php 
           print_r($_megasena);
        ?>
        </pre>
    </body>
</html>