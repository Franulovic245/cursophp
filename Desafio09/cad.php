<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
      $valor1 = $_GET ['valor1'] ?? 0;
      $peso1 = $_GET ['peso1'] ?? 1;
      $valor2 = $_GET ['valor2'] ?? 0;
      $peso2 = $_GET ['peso2'] ?? 1;
    ?>
    <main>
        <h2>Medias Aritméticas</h2>
        <form action="<?= $_SERVER['PHP_SELF']?> " method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="valor1" id="v1" min = "0" step="0.01" required value="<?=$valor1?>">
            <label for="v2">1º Peso</label>
            <input type="number" name="peso1" id="v2" min ="0" required value="<?=$peso1?>">
            <label for="v1">2º Valor</label>
            <input type="number" name="valor2" id="v3" min = "0" step="0.01" required value="<?=$valor2?>">
            <label for="v2">2º Peso</label>
            <input type="number" name="peso2" id="v4" min ="0" required value="<?=$peso2?>">
            <input type="submit" value="Analisar">

        </form>
    </main>

<section id ="Resultado">
        <h2>Cálculo das Médias</h2>   
            <?php 
            $ms = ($valor1 + $valor2) / 2;
            $mp = (($peso1 * $valor1) + ($peso2 * $valor2)) / ($peso1 + $peso2);
            echo "<p>Analisando os valores $valor1 e $valor2:</p>";

            echo "<ul>";
                echo "<li> A <strong>Média Aritmética Simples</strong> entre os valores é igual a ".number_format($ms,2,",",".") .".</li>";
                echo "<li> A <strong>Média Aritmética Ponderada com pesos $peso1 e $peso2 é igual a " .number_format($mp,2,",",".") .".</strong></li>";
            echo "</ul>";
            ?>
    </section>
</body>
</html>