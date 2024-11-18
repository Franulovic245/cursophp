<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
         <?php 
        $number = $_GET ['num'] ?? 1;
        ?>
        
<main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF']?> " method="get">
            <label for="numero">Número</label>
            <input type="number" name="num" id="idnum" min ="1" value="<?=$number?>">
            <input type="submit" value="Calcular Raízes">

        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "Analisando o <strong>número $number,</strong> temos:";
            
            echo "<ul>";
            echo "<li> A sua raiz quadrada é <strong>" . number_format(sqrt($number),3,",",".") . "</strong></li>";
            echo "<li> A sua raiz cubica é <strong>" . number_format(pow($number, 1/3),3,",","."). "</strong></li>";
            echo "</ul>";
        
        ?>

    </section>
</body>
</html>