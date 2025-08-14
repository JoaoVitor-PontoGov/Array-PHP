# Treinamento PontoGOV Sistemas - Projeto Prático IV

## **Enunciado**

Este exercício tem como objetivo introduzir os fundamentos do PHP com foco em **requisições**, **controle de fluxo** e **manipulação de dados**. Dividido em duas etapas, o desafio começa com a compreensão das variáveis globais (`$_GET`, `$_POST`, `$_SERVER`) e termina com a construção de um **controller simples** baseado no padrão usado pela empresa, com lógica de cálculo.

---

### **Etapa 1: Explorando Requisições em PHP**

Crie um pequeno sistema com dois arquivos PHP (`.php`), um irá conter o conteúdo HTML com um formulário e o outro um script PHP que **recebe e processa os dados via POST**.

#### **Requisitos Básicos (obrigatórios)**

- O formulário deve solicitar os seguintes campos:
  - Nome
  - Idade
  - Gênero (Masculino/Feminino/Outro)
- Ao submeter, os dados devem ser enviados para o outro arquivo PHP onde deve-se:
  - Imprimir todos os dados recebidos em forma de string (use `echo`) e também:
    - Mostrar a idade do usuário em 10 anos;
    - Informar se a pessoa é maior de idade.
- Ao retronar a requisição, deve imprimir a resposta com `console.log`

### **Desafios Extras (opcionais)**

- Capture e exiba o **IP do usuário** usando `$_SERVER`.
- Mostre o **User-Agent** do navegador.
- Validar se idade é um número inteiro
- Exibir a data/hora da requisição (timestamp formatado com `date()`)

---

### **Etapa 2: Controller com lógica de aprovação**

Crie um **controller simples** (`controller.php`) que responda a diferentes ações com base em um parâmetro `action` enviado via `GET`. Cada ação deve executar uma lógica específica.

#### **Requisitos Básicos (obrigatórios)**

1. Ação para calcular a média do aluno (`action=calcularMedia`):
   - Recebe 4 notas via `POST`, calcula a média e retorna a situação:
     - Média >= 7 ? Aprovado
     - Média >= 5 ? Recuperação
     - Média < 5 ? Reprovado
   - Extras (opcionais):
     - Exibir também a maior e menor nota recebida;
     - Exibir nota necessária para atingir média 7 (se ficar em recuperação).

2. Ação para calcular ao Índice de Massa Corporal - IMC (`action=calcularIMC`):
   - Recebe peso e altura via `POST` e retorna o IMC e sua classificação com base em:
     - IMC < 18.5: Abaixo do peso
     - IMC < 25: Peso normal
     - IMC < 30: Sobrepeso
     - IMC >= 30: Obesidade
 - Extras (opcionais):
   - Calcular o peso ideal da pessoa com base na fórmula do IMC 22 (padrão de referência saudável): `peso_ideal = 22 * (altura ^ 2)`

3. Ação para calcular ao Índice de Massa Corporal - IMC (`action=calcularIMC`):
  - Recebe uma data-alvo (`YYYY-MM-DD`) via `GET` e retorna:
    - Dias, horas e minutos restantes até a data
    - Informa se a data já passou
    - Se a data já passou, informar há quanto tempo ela passou.
 - Extras (opcionais):
   - Permitir comparar com hora exata (GET?hora=HH:MM) além da data.

#### **Formato de resposta**

- Todas as respostas devem ser retornadas em **JSON** com os dados de resposta.

---

### **Observações**

- Crie uma pasta para cada etapa.
- Preferência por identação clara e uso de `isset`/`empty` para validações
- Mantenha as boas práticas e padrões de código adotados pela empresa.
- Use mensagens de commit claras e semânticas.