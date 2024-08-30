<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 

        $_dia = "quinta";
        switch ($_dia) {
            case "segunda":
                echo "Hoje é segunda";
                break;
            case "terça":
                echo "Hoje é terça";
                break;
            case "quarta":
                echo "Hoje é quarta";
                break; 
                default:
                echo "é fim de semana";   

        }
   
        ?>
    </body>
</html>