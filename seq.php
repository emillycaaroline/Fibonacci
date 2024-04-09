<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
        p{
            font-size: large;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
</head>

<body>
    <form action="" method="get">
      <p>Exibir até(maior que 2):</p>   <input type="number" name="number" /><br /> <br>
        <input type="submit" name="submit" value="Calcular" /> <br> <br>
    </form>
    <?php
    $n = $_GET['number'];
    $ultimo = 1;
    $penultimo = 0;

    echo "0<br />1<br />";
    for ($count = 1; $count <= $n - 2; $count++) {
        $atual = $ultimo + $penultimo;
        echo $atual . "<br />";

        $penultimo = $ultimo;
        $ultimo = $atual;
    }
    ?>
</body>

</html>