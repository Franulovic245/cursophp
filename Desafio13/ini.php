<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.notas{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
      $Val= $_GET ['Val'] ?? 0;
      
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        
        <form action="<?= $_SERVER['PHP_SELF']?> " method="get">
            <label for="v1">Qual valor você deseja sacar ? (R$)</label>
            <input type="number" name="Val" min = "0" step="5"  id="v1" value="<?=$Val?>">
            <p>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">

        </form>

        <?php 
            $rest1=$Val;
           $cem = floor($Val / 100);
           $rest1 %= 100;
           $cinq = floor($rest1 / 50);
           $rest1 %= 50;
           $dez = floor($rest1 / 10);
           $rest1 %= 10;
           $cinco = floor($rest1 / 5);
        ?>
    </main>
       
<section id ="Resultado">
           
            <?php 
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            echo"<h2>Saque de ". numfmt_format_currency($padrao,$Val,"BRL") ." realizado</h2>";
           echo "O caixa eletrônico vai te entregar as seguintes notas:";

           echo "<ul>";
           echo "<li> <img src=\"./img/100-reais.jpg\" class='notas'> x$cem </li>";
           echo "<li> <img src=\"./img/50-reais.jpg\" class='notas'> x$cinq </li>";
           echo "<li> <img src=\"./img/10-reais.jpg\" class='notas'> x$dez </li>";
           echo "<li> <img src=\"./img/5-reais.jpg\" class='notas'> x$cinco </li>";
           echo "</ul>";


            ?>
    </section>
  
</body>
</html>