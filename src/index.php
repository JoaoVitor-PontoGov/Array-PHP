<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="ISO-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays PHP</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
      body{
        display: flex;
        flex-direction: column;
        align-items: center
      }

      #ulSupermercado{
        display: flex;
        flex-direction: column;
        align-items: center;
        list-style-type: none;
      }

      hr{
        border: 1px solid black;
        width: 50%;
      }
    </style>
  
    <script>
      $(function(){

        $("#appSupermercado #BtnAdicionarItens").click(function() {
          $.post(
            "script.php?action=adicionarItensSupermercado",
            function(response) {
              console.log(response);
              $("#ulSupermercado").html(response)
          }
          )
        })

        $("#appSupermercado #BtnExcluirPrimeiro").click(function() {
          $.post(
            "script.php?action=excluirPrimeiro",
            function(response) {
              console.log(response);
              $("#ulSupermercado").html(response)
            }
          )
        })

        $("#appNomes #BtnOrdemAlfabetica").click(function() {
          $.post(
            "script.php?action=ordemAlfabetica",
            function(response){
              console.log(response);
              $("#ulNomes").html(response)
            }
          )
        })

        $("#appNomes #BtnOrdemInversa").click(function() {
          $.post(
            "script.php?action=ordemInversa",
            function(response){
              console.log(response);
              $("#ulNomes").html(response)
            }
          )
        })

      })

    </script>
</head>

<body>

  <div id="appSupermercado">
    <ul id="ulSupermercado">
      <li>Leite</li>
      <li>Ovo</li>
      <li>Carne</li>
      <li>Feijao</li>
      <li>Refrigerante</li>
    </ul>
    <button type="button" id="BtnAdicionarItens">Adicionar itens</button>
    <button type="button" id="BtnExcluirPrimeiro">Excluir primeiro</button>
  </div>

  <hr>

  <div id="appNomes">
    <ul id="ulNomes">
      <li>Joao</li>
      <li>Leandro</li>
      <li>Danrley</li>
      <li>Davi</li>
      <li>Murilo</li>
      <li>Caio</li>
      <li>Eduardo</li>
    </ul>
    <button type="button" id="BtnOrdemAlfabetica">Ordenar em ordem alfabetica</button>
    <button type="button" id="BtnOrdemInversa">Inverterter ordem alfabetica</button>
  </div>
  
</body>
</html>