<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de Numero Aleatorio</title>
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 

            $gera = mt_rand(0,100);
            echo "O valor gerado foi <strong>$gera</strong>";

        ?>

        <button onclick="location.reload();">Gerar outro</button>
    </section>
</body>
</html>