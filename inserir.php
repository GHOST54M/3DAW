<html>
  <head>
    <title>Inserir</title>
  </head>
  <style>
    section{
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 500px;
    }
  </style>

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
    echo"<center>Aluno cadastrado!</center>";
}
     ?>
     <main>
        <section>
            <h1>Cadastrar aluno</h1>
    <form method="POST" action="inserir.php">
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
    <a href="index.php">Voltar</a>
        </section>

        <main>
  </body>
</html>