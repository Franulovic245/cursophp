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
      $tempo= $_GET ['Tempo'] ?? 0;
      
    ?>
    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?= $_SERVER['PHP_SELF']?> " method="get">
            <label for="v1">Qual é o total de segundos ?</label>
            <input type="number" name="Tempo" min = "1"  id="v1" value="<?=$tempo?>">
            <input type="submit" value="Calcular">

        </form>

        <?php 
            $seg = $tempo % 60;
            $min = floor(($tempo % (60 * 60) / 60));
            $horas = floor(($tempo % (60 * 60 * 24)) / (60 * 60));
            $dia = floor(($tempo % (60 * 60 * 24 * 7)) / (60 * 60 *24));
            $semana = floor(($tempo % (60 * 60 * 24 * 7 * 4)) / (60 * 60 *24 * 7));
        ?>
    </main>
       
<section id ="Resultado">
        <h2>Totalizando tudo</h2>   
            <?php 
           echo "Analizando o valor que você digitou, <strong>".number_format($tempo,0,".",".") ." segundos</strong> e equivalem a um total de:";

           echo "<ul>";
           echo "<li>$semana semanas</li>";
           echo "<li>$dia dias</li>";
           echo "<li>$horas Horas</li>";
           echo "<li>$min minutos</li>";
           echo "<li>$seg segundos</li>";
           echo "</ul>";


            ?>
    </section>
  
</body>
</html>