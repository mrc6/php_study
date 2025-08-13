<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Randômicos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Obtenha um número entre 0 e 100</h1>
    </header>

    <?php
      $min = 0;
      $max = 100;
      $num = mt_rand($min, $max);

      echo "Gerando um número aleatório entre $min e $max ... <br />";
      echo "O número é $num <br />";
    ?>

    <button onclick="javascript:document.location.reload()">&#x1F504;Gerar outro número</button>

</body>
</html>
