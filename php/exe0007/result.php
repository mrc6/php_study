<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <main>
	  <h1>Convertendo de BRL para USD</h1>
      <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url),true);
        //var_dump($dados);
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        $real = $_GET["din"] ?? 0;
        //var_dump($real);
        
        if ($real == "") {
		  echo "Você precisa informar algum valor! <br />";
		} else {
		  $dolar = $real / $cotacao;
          $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
          echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem à " . numfmt_format_currency($padrao, $dolar, "USD") . "<br />";	
		}
      ?>
      <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
  </body>
</html>
