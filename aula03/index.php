<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula03</title>
</head>
<body>
    <pre>
    <?php
    require_once('caneta.php');

    $c1 = new Caneta("BIC", "Azul", 0.7);
    $c2 = new Caneta("Compacto", "Preto", 0.5);

    // $c1 = new Caneta();
    // $c1->setModelo("BIC");
    // $c1->modelo = "Compacto"; //consigo usar sem o método pois é publico
    // $c1->setPonta(0.5);
    // $c1->ponta = 0.5; só consigo com método pois é do tipo privado
    
    // echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}"; 
    
    print_r($c1);
    echo "<br/>";
    print_r($c2);

     
    ?>
    </pre>
</body>
</html>