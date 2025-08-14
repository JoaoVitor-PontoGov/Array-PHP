<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="ISO-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays PHP</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style></style>
  
    <script>
      $(function(){

        $("#appSupermercado #BtnAdicionarItens").click(function() {
          $.post(
            "script.php?action=adicionarItensSupermercado",
          {
            blItensAdicionados: $("#blItensAdicionados").val()
          },
          function(response, adicionado) {
            console.log(response);
            $("#ulSupermercado").html(response)
          }
          )
        })

        $("#appSupermercado #BtnExcluirPrimeiro").click(function() {
          $.post(
            "script.php?action=excluirPrimeiro",
            {
              blItensAdicionados: $("#blItensAdicionados").val()
            },
            function(response, adicionado) {
              console.log(response);
              $("#ulSupermercado").html(response)
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

</body>
</html>