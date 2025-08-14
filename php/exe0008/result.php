<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <h1>Analisador de números reais</h1>
    <?php 
      $num = $_POST["n"] ?? 123.456;
      $int = (int) $num;
      $fra = $num - $int;
      echo "<p>Analizando o número digitado ". number_format($num, 3, ",", ".") ."</p><br />";
      echo "<ul><li>A parte inteira do número é <strong>". number_format($int, 0, ",",".") ."</strong></li>";
      echo "<li>A parte fracionária do número é <strong>". number_format($fra, 3, ",",".") ."</strong></li></ul>";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>
