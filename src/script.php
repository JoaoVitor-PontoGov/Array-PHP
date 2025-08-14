<?php

  $action = isset($_GET["action"]) ? $_GET["action"] : "";
  $arrSupermercado = array("Leite","Ovo","Carne","Feijao","Refrigerante");
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
  }