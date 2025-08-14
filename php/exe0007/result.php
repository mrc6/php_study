<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <?php 
      $cotacao = 5.39;
      $real = $_GET["din"] ?? 101;
      $dolar = $real / $cotacao;
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
      echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem à " . numfmt_format_currency($padrao, $dolar, "USD") . "<br />";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>
