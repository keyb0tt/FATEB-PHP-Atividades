<?php
  include "funcoes_code.php";

  $funcSoma = soma(10, 5);
  echo "Primeira função: $funcSoma\n";

  $funcSituacao = situacaoNotas(10, 5);
  echo "Segunda função: $funcSituacao\n";

  $funcConvKm = convKm(2500);
  echo "Terceira função: $funcConvKm km\n";

  $funcAreaParede = areaParede(2.5, 10.0);
  echo "Quarta função: $funcAreaParede m²\n";

  $funcQuantTinta = quantTinta(10);
  echo "Quinta função: $funcQuantTinta litros\n";

  $funcAumentoSalario = aumentoSalario(1200, 25);
  echo "Sexta função: R$$funcAumentoSalario\n";
