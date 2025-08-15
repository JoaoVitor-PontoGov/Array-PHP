<?php

  $action = isset($_GET["action"]) ? $_GET["action"] : "";
  $arrSupermercado = array("Leite","Ovo","Carne","Feijao","Refrigerante");
  $arrNomes = array("Joao","Leandro","Danrley","Davi","Murilo","Caio","Eduardo");
  $arrNumeros = [];
  $arrFrutas = array("Banana","Laranja","Tomate","Mamao","Jaca","Jabuticaba");
  $arrComb1 = array("arroz","feijao","macarrao");
  $arrComb2 = array("5.50","7.20","4.80");

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

      foreach ($liOrdemInversa as $nome) {
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
    case "pesquisaFruta":

      $frutaSelecionada = $_POST["dsFruta"];
      $resultado = "Fruta nao encontrada";

      foreach ($arrFrutas as $indice => $fruta) {
        if(strtoupper($fruta) == strtoupper($frutaSelecionada)) {
          $resultado = "Fruta encontrada no indice: " . $indice;
        }
      }

      echo $resultado;

      break;

    case "mostrarArray":

      $primeiraLista = "<ul>";
      $segundaLista = "<ul>";

      foreach ($arrComb1 as $produto) {
        $primeiraLista .= "<li>".  $produto ."</li>";
      }

      $primeiraLista .= "</ul>";

      foreach ($arrComb2 as $preco) {
        $segundaLista .= "<li>".  $preco ."</li>";
      }

      $segundaLista .= "</ul>";

      $resultado = array(
        "nomes" => $primeiraLista,
        "precos" => $segundaLista
      );

      echo json_encode($resultado);

      break;
    case "mesclarArrays":

      $arrMesclados = array_combine($arrComb1, $arrComb2);

      $resultado = "Produto:  |  Preco: <br>";

      foreach ($arrMesclados as $arrComb1 => $arrComb2) {
        $resultado .=   $arrComb1 . " | " . $arrComb2 . "<br>";
      }

      echo $resultado;
    break;

    case "incluirNovo":

      $arrMesclados = array_combine($arrComb1, $arrComb2);

      $arrMesclados["Bolacha"] = "6.40";

      $resultado = "Produto:  |  Preco: <br>";

      foreach ($arrMesclados as $arrComb1 => $arrComb2) {
        $resultado .=   $arrComb1 . " | " . $arrComb2 . "<br>";
      }

      echo $resultado;
  }