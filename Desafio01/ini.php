<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado Final</title>
</head>
<body> 
    <section>

<h1>Resultado Final</h1>
    <?php 
        
        $num = $_GET ["num"] ?? 0;
        echo "O número escolhido foi <strong>$num</strong>"; 
        $ant = $num - 1;
        echo "<br> O seu antecessor é $ant";
        $suc = $num + 1;
        echo "<br> O seu sucessor é $suc ";
        
    ?>
<br>
<br>
    <button><a type="submit" href="javascript:history.go(-1)">← Voltar</a></button>

</section>
</body>
</html>