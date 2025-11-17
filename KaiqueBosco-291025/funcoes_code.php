<?php
  function soma($numa, $numb){
    $resultado = $numa + $numb;
    return $resultado;
  }

  function situacaoNotas($notaa, $notab){
    $media = ($notaa + $notab) / 2;
    $sit = "";

    if($media >= 7){
      $sit = "Aprovado";
    }
    else if($media < 7 && $media >= 5){
      $sit = "Exame";
    }
    else{
      $sit = "Reprovado";
    }
    return $sit;
  }

  function convKm($distanciaMetro){
    $distanciaKm = $distanciaMetro / 1000;
    return $distanciaKm;
  }

  function areaParede($alturaParede, $larguraParede){
    $area = $alturaParede * $larguraParede;
    return $area;
  }

  function quantTinta($areaParede){
    $areaCopia = $areaParede;
    $litrosTinta = 0;

    while($areaCopia >= 2){
      $areaCopia -= 2;
      $litrosTinta++;
    }
    if($areaCopia != 0){
      $litrosTinta++;
    }
    return $litrosTinta;
  }

  function aumentoSalario($salarioAtual, $percAumento){
    $percAumento /= 100;
    $aumento = $salarioAtual * $percAumento;
    $novoSalario = $salarioAtual + $aumento;
    return $novoSalario;
  }