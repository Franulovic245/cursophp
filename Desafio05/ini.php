<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de Número Real</title>
</head>
<body> 
    <section>

<h1>Analisador de Número Real</h1>
    <?php 
        
        $num = $_GET ["num"] ?? 0;
        $parte_inteira = (int) $num;
        $parte_fracionaria = $num - $parte_inteira;

        echo "<ul><li>A parte Inteira do número é <strong>". number_format($parte_inteira,0,",",".") ."</strong></li></ul>";
        echo "<ul><li>A parte Fracionária do número é <strong> ". number_format($parte_fracionaria,3,",",".")."</strong></li></ul>";
        
    ?>
<br>
<br>
    <button><a type="submit" href="javascript:history.go(-1)">Voltar</a></button>

</section>
</body>
</html>