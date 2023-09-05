<html>
  <head>
    <title>Incluir e Ler arquivo</title>
  </head>
  <body>
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
      $nome = $_POST['nome'];
      $idade = $_POST['idade'];
      $matricula= $_POST['matricula'];

      $arq = fopen("alunos.txt","a")or die("Não foi possível criar o arquivo.");
    $linha = "Nome: Idade: Matrícula:\n";
    $linha = $nome . "; " . $idade . "; " . $matricula . "\n";
    fwrite($arq,$linha);
    fclose($arq);
    $msg = "Arquivo criado com sucesso!";
}
     ?>
    <form method="POST" action="index.php">
      <h2>Nome: </h2>
      <input type="text" name="nome">
      <br>
      <h2>Idade:</h2>
      <input type="number" name="idade">
      <br>
      <h2>Matricula:</h2>
      <input type="number" name="matricula">
      <br>
      <br>
      <input type="submit">
    </form>
    <?php
    echo $msg;
      ?>
  </body>
</html>
