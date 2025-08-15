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

      #cntCombinacaoArray{
        display: flex;
        flex-direction: column;
        align-items: center;
        list-style-type: none;
      }

      #appCombinacaoArray{
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

        $("#appNumeros #BtnMostrarNumeros").click(function(){
          $.post(
            "script.php?action=mostrarNumeros",
            function(response){
              console.log(response)
              $("#cntNumeros").html(response)
            }
          )

          $("#appNumeros #BtnSomarNumeros").show();
        })

        $("#appNumeros #BtnSomarNumeros").click(function(){
          $.post(
            "script.php?action=somarNumeros",
            function(response){
              console.log(response);
              $("#cntNumeros").html(response);
            }
          )
        })

        $("#appFrutas #BtnPesquisaFruta").click(function(){
          $.post(
            "script.php?action=pesquisaFruta"
            ,{
              dsFruta: $("#dsFruta").val()
            },
            function(response){
              console.log(response);
              $("#cntFruta").html(response)
            }
          )
        })

        $("#appCombinacaoArray #BtnMostrarArrays").click(function(){
          $.post(
            "script.php?action=mostrarArray",
            function(response){
              console.log(response);
              $("#appCombinacaoArray h3").show()

              const arrComb1 = response.nomes;
              const arrComb2 = response.precos;
              

              $("#appCombinacaoArray #arrComb1").html(arrComb1)
              $("#appCombinacaoArray #arrComb2").html(arrComb2)

              $("#appCombinacaoArray #BtnMostrarArrays").hide();
              $("#appCombinacaoArray #BtnMesclarArrays").show();
            }, "json"
          )
        })

        $("#appCombinacaoArray #BtnMesclarArrays").click(function(){
          $.post(
            "script.php?action=mesclarArrays",
            function(response){
              console.log(response);
              
              $("#appCombinacaoArray #BtnMesclarArrays").hide()
              $("#appCombinacaoArray #BtnIncluirNovo").show();

              $("#appCombinacaoArray h3").hide();
              $("#appCombinacaoArray h2").show();
              $("#appCombinacaoArray #arrComb1").hide();
              $("#appCombinacaoArray #arrComb2").hide();

              $("#cntCombinacaoArray").html(response)
            }
          )
        })

        $("#appCombinacaoArray #BtnIncluirNovo").click(function(){
          $.post(
            "script.php?action=incluirNovo",
            function(response){
              console.log(response);
              
              $("#appCombinacaoArray #BtnIncluirNovo").hide();

              $("#cntCombinacaoArray").html(response)
            }
          )
        });

        $("#appAlunos #BtnMostrarAlunos").click(function(){
          $.post(
            "script.php?action=mostrarAlunos",
            function(response){
              console.log(response);
              
              $("#cntAlunos").html(response)
              $("#appAlunos #BtnMostrarAlunos").hide();
              $("#appAlunos #BtnIncluirAluno").show();
            }
          )
        });

        $("#appAlunos #BtnIncluirAluno").click(function(){
          $.post(
            "script.php?action=incluirAluno",
            function(response){
              console.log(response);
              
              $("#cntAlunos").html(response)
              $("#appAlunos #BtnIncluirAluno").hide();
              $("#appAlunos #BtnEditarNota").show();
            }
          )
        });

        $("#appAlunos #BtnEditarNota").click(function(){
          $.post(
            "script.php?action=editarNota",
            function(response){
              console.log(response);
              
              $("#cntAlunos").html(response);
              $("#appAlunos #BtnEditarNota").hide();
              $("#appAlunos #BtnCalcularMedia").show();
            }
          )
        });

         $("#appAlunos #BtnCalcularMedia").click(function(){
          $.post(
            "script.php?action=calcularMedia",
            function(response){
              console.log(response);
              
              $("#cntAlunos").append(response);
              $("#appAlunos #BtnCalcularMedia").hide();
              $("#appAlunos #BtnOrdenarNotas").show();
              
            }
          )
        });

        $("#appAlunos #BtnOrdenarNotas").click(function(){
          $.post(
            "script.php?action=ordenarNotas",
            function(response){
              console.log(response);
              
              $("#cntAlunos").html(response);

              $("#appAlunos #BtnOrdenarNotas").hide();
              $("#appAlunos #BtnMaiorQueOito").show();
            }
          )
        })

        $("#appAlunos #BtnMaiorQueOito").click(function(){
          $.post(
            "script.php?action=maiorQueOito",
            function(response){
              console.log(response);
              
              $("#cntAlunos").html(response);

              $("#appAlunos #BtnMaiorQueOito").hide();
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
  
  <hr>

  <div id="appNumeros">
    <div id="cntNumeros"></div>
    <button type="button" id="BtnMostrarNumeros">Mostrar numeros pares</button>
    <button type="button" id="BtnSomarNumeros" hidden>Somar os numeros pares</button>
  </div>

  <hr>

  <div id="appFrutas">
    <label for="dsFruta">Escreva uma fruta</label>
    <input type="text" name="dsFruta" id="dsFruta">
    <button type="button" id="BtnPesquisaFruta">Pesquisar</button>
    <div id="cntFruta"></div>
  </div>

  <hr>

  <div id="appCombinacaoArray">
    <h3 hidden>Array 1</h3>
    <div id="arrComb1"></div>
    <h3 hidden>Array 2</h3>
    <div id="arrComb2"></div>
    <h2 hidden>Arrays Combinadas</h2>
    <div id="cntCombinacaoArray"></div>

    <button type="button" id="BtnMostrarArrays">Mostrar arrays</button>
    <button type="button" id="BtnMesclarArrays" hidden>Mesclar arrays</button>
    <button type="button" id="BtnIncluirNovo" hidden>Incluir novo</button>
  </div>

  <hr>

  <div id="appAlunos">
    <div id="cntAlunos"></div>
    <button type="button" id="BtnMostrarAlunos">Mostrar alunos</button>
    <button type="button" id="BtnIncluirAluno" hidden>Incluir aluno</button>
    <button type="button" id="BtnEditarNota" hidden>Editar nota</button>
    <button type="button" id="BtnCalcularMedia" hidden>Calcular media</button>
    <button type="button" id="BtnOrdenarNotas" hidden>Ordenar notas</button>
    <button type="button" id="BtnMaiorQueOito" hidden>Mostrar maiores que 8</button>
  </div>

</body>
</html>