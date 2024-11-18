<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas v1.0</title>
</head>
<body> 
    <section>

<h1>Conversor de Moedas v1.0</h1>
    <?php 
        
        $num = $_GET ["num"] ?? 0;
        $calc = $num / 5.22;
        $padrao = numfmt_create("us",NumberFormatter::CURRENCY);
        echo "<p>Seus ". numfmt_format_currency($padrao,$num,"BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao,$calc, "USD") . "</strong></p>";
       
        echo "<strong>*Cotação fixa de R$5,22</strong> informada diretamente no código.";
        
        
        
    ?>
<br>
<br>
    <button><a type="submit" href="javascript:history.go(-1)">← Voltar</a></button>

</section>
</body>
</html>