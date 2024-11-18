<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Desafio6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>


        <?php 
            $numvar = $_GET ["numname"] ?? 0;
            $salmin = 1380.00;
            $calc = $numvar / $salmin;
            $intsal = floor($calc);
            $rest = $salmin * $intsal;
            $restreal = $numvar - $rest;
            $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            
            echo "Quem recebe um salário de ". numfmt_format_currency($padrao,$numvar,"BRL") . " ganha <strong>$intsal salários mínimos + </strong>"  . numfmt_format_currency($padrao,$restreal,"BRL");


        ?>

        
        </main>
</body>
</html>