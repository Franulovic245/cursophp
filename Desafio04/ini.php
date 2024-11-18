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
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        
        
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
        $dados = json_decode(file_get_contents($url), true);
        
        $cotação = $dados["value"][0]["cotacaoCompra"];

        $num = $_GET ["num"] ?? 0;
        $calc = $num / $cotação;
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
        echo "<p>Seus ". numfmt_format_currency($padrao,$num,"BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao,$calc, "USD") . "</strong></p>";
       
        echo "<strong>Cotação Retirada do Banco Central</strong>.";
        
        
        
    ?>
<br>
<br>
    <button><a type="submit" href="javascript:history.go(-1)">← Voltar</a></button>

</section>
</body>
</html><?php 




?>