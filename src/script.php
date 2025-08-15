<?php

  $action = isset($_GET["action"]) ? $_GET["action"] : "";
  $arrSupermercado = array("Leite","Ovo","Carne","Feijao","Refrigerante");
  $arrNomes = array("Joao","Leandro","Danrley","Davi","Murilo","Caio","Eduardo");

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
  }