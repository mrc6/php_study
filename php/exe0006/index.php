<!DOCTYPE html>
<html>
<body>

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
