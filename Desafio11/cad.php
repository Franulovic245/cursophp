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
      $preco= $_GET ['preco'] ?? 0;
      $reajuste = $_GET ['reaj'] ?? 0;
    ?>
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?= $_SERVER['PHP_SELF']?> " method="get">
            <label for="v1">Preço do Produto (R$)</label>
            <input type="number" name="preco" min = "0.10" step="0.01" id="v1" value="<?=$preco?>">
            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id ="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" min="0" max="100"id="reaj" step="1" oninput="mudaValor()">
            <input type="submit" value="Reajustar Preço">

        </form>
    </main>
        <?php 
            $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

            $aumento = $preco * $reajuste /100;
            $novo = $preco + $aumento;
        
        ?>
<section id ="Resultado">
        <h2>Resultado do Reajuste</h2>   
            <?php 
            echo "O produto que custava ". numfmt_format_currency($padrao,$preco,"BRL"). " com <strong> $reajuste% de aumento </strong>vai passar a custar <strong>". numfmt_format_currency($padrao,$novo,"BRL") . "</strong> a partir de agora.";
            ?>
    </section>
    <script>
        mudaValor();
            function mudaValor(){
                p.innerText = reaj.value;
            }
    </script>
</body>
</html>