<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Informe o valor em Reais para converter em Dólares</h1>
    </header>
    <main>
      <h1>Conversor BRL-USD</h1>
      <form action="result.php" method="get">
        <label for="din">Qual o valor a ser convertido?</label>
        <input type="number" name="din" id="din" step="0.01"/>
        <input type="submit" value="converter" />
      </form>
    </main>
</body>
</html>
