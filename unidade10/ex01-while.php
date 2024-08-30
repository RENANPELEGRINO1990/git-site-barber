<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>

// sorteio mega sena
    <?php  
    
    $_contador = 1; 
    while( $_contador < 5) {
        $_sorteio = rand(1,60);
        echo $_sorteio . " ";
   
        $_contador = $_contador +1;
    }
      
    ?>
</body>
</html>