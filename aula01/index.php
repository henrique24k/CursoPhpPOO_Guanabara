<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo - POO</title>
</head>
<body>
     <?php
     require_once('Caneta.php'); //Também serve com o include
     
     $c1 = new Caneta;
     $c1->modelo = "Bic"; //Não precisa de $ pois o cor é um atributo, usa-se ->
     $c1->cor = "Azul";
     $c1->ponta = 0.7;
     $c1->tampada = true;
     $c1->rabiscar();

    // var_dump($c1);
    print_r($c1);
    echo "<br/>";

     $c2 = new Caneta;
     $c2->modelo = "Compacto";
     $c2->cor = "preto";
     $c2->ponta = 0.5;
     $c2->tampada = false;
     $c2->rabiscar();
     print_r($c2);


     ?>
</body>
</html>