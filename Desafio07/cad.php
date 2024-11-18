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
      $dividendo = $_GET ['div1'] ?? 0;
      $divisor = $_GET ['div2'] ?? 1;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?> " method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="div1" id="v1" min = "0" value="<?=$dividendo?>">
            <label for="v2">Divisor</label>
            <input type="number" name="div2" id="v2" min ="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">

        </form>
    </main>

<section id ="Resultado">
        <h2>Estrutura da Divisão</h2>
            <pre>
            <?php 
                    $quociente = intdiv($dividendo, $divisor);
                    $resto = $dividendo % $divisor;
            ?>
        <table  class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>

</pre>
    </section>
</body>
</html>