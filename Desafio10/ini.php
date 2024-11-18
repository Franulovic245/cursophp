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
      $nasceu = $_GET ['nasc1'] ?? 2000;
      $ano1 = $_GET ['ano'] ?? $date;
      $date = date("Y");
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?= $_SERVER['PHP_SELF']?> " method="get">
            <label for="v1">Em que ano você nasceu ?</label>
            <input type="number" name="nasc1" id="v1" min = "1900" max ="<?=($date - 1)?>" value="<?=$nasceu?>">
            <label for="v2">Quer saber sua idade em que ano ? (atualmente estamos em <strong><?=$date?></strong>)</label>
            <input type="number" name="ano" id="v2" min ="1900" value="<?=$ano1?>">
            <input type="submit" value="Analisar">

        </form>
    </main>

<section id ="Resultado">
        <h2>Resultado</h2>   
            <?php 
                $idade = $ano1 - $nasceu;
                echo "Quem nasceu em $nasceu vai ter <strong>$idade anos</strong> em $ano1";
            ?>
    </section>
</body>
</html>