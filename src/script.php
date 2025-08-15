<?php

  $action = isset($_GET["action"]) ? $_GET["action"] : "";
  $arrSupermercado = array("Leite","Ovo","Carne","Feijao","Refrigerante");
  $arrNomes = array("Joao","Leandro","Danrley","Davi","Murilo","Caio","Eduardo");
  $arrNumeros = [];

  switch ($action) {
    case 'adicionarItensSupermercado':
      
      array_push($arrSupermercado, "Banana", "Bolacha");

      $liFinal = "";

      foreach ($arrSupermercado as $produto) {
        $liFinal .= "<li> $produto </li>";
      }

      $liFinal .= "<p> A lista possui ".count($arrSupermercado)." itens</p>";

      echo $liFinal;
      
      break;
    case 'excluirPrimeiro':
      
      array_push($arrSupermercado, "Banana", "Bolacha");
      array_shift($arrSupermercado);
      
      $liFinal = "";

      foreach ($arrSupermercado as $produto) {
        $liFinal .= "<li> $produto </li>";
      }

      $liFinal .= "<p> A lista possui ".count($arrSupermercado)." itens</p>";

      echo $liFinal;

      break;
    case 'ordemAlfabetica':

      asort($arrNomes);
      $liFinal = "";

      foreach ($arrNomes as $nome) {
        $liFinal .= "<li> $nome </li>";
      }

      echo $liFinal;
      break;
      
    case "ordemInversa":
      
      asort($arrNomes);
      $liOrdemInversa = array_reverse($arrNomes);
      $liFinal = "";

      foreach ($arrNomes as $nome) {
        $liFinal .= "<li> $nome </li>";
      }

      echo $liFinal;
      break;
    case 'mostrarNumeros':

      for($i = 0; $i < 20; $i++) {
        $arrNumeros[$i] = ($i + 1);
      }

      $resultado = "<p>Sua lista de numeros e: </p>";

      foreach ($arrNumeros as $numero) {
        $resultado .= $numero . " ";
      }

      $resultado .= "<br><p>Os numeros pares da lista sao: </p>";
      foreach ($arrNumeros as $numero) {
        if ($numero %2 == 0) {
          $resultado .= $numero . " ";
        }
      }
      
      echo $resultado;
      break;
    case 'somarNumeros':

      for($i = 0; $i < 20; $i++) {
        $arrNumeros[$i] = ($i + 1);
      }

      $soma = 0;

      foreach ($arrNumeros as $numero) {
        if ($numero %2 === 0) {
          $soma += $numero;
        }
      }

      echo "A soma dos numeros pares e de: " . $soma;

      break;
  }