<html>
  <head>
    <title>PHP</title>
  </head>
  <body>
    
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
      $matriculaAntiga= $_POST['matricula'];
      $nomeNovo = $_POST['nomeNovo'];
      $idadeNova = $_POST['idadeNova'];
      $matriculaNova= $_POST['matriculaNova'];
  
      $arquivo = fopen("alunos.txt","r")or die("Arquivo não encontrado.");
      $arqtemp = fopen("arquivotemporario.txt", "w")or die("Arquivo não foi criado");
  
      $x = 0;
      $sucesso = 0;
    while(!feof($arquivo)){
        $linha[] = fgets($arquivo);
        $colunaDados = explode(";", $linha[$x]);
        $nome = $colunaDados[0];
        $idade = $colunaDados[1];
        $matricula = $colunaDados[2];
            
            If(!($matricula == $matriculaAntiga || $matricula == NULL))
              {
              $texto1 = $nome . ";" . $idade . ";" . $matricula;
              fwrite($arqtemp, $texto1) ;
              $sucesso = 1;
            }
              $x++;
            }
            if($sucesso == 1){
              $texto1 = $nomeNovo . ";" . $idadeNova . ";" . $matriculaNova;
              fwrite($arqtemp, $texto1)  ;
       }
       fclose($arquivo); 
       fclose($arqtemp); 
      //Copia o conteudo do arquivo temporario para o arquivo original
      $arqtemp = fopen("arquivotemporario.txt", "r")or die("Arquivo não foi criado");
      $arquivo = fopen("alunos.txt","w")or die("Arquivo não encontrado.");

    $i = 0;
    while (!feof($arqtemp)) {
        $linha[] = fgets($arqtemp);
        $colunaDados = explode(";", $linha[$i]); 
        $nome = $colunaDados[0];
        $idade = $colunaDados[1];
        $matricula = $colunaDados[2];
        $texto2 = $nome . ";" . $idade . ";" . $matricula;
        fwrite($arquivo, $texto2);
        $i++;
    }
  
    fclose($arquivo); 
    fclose($arqtemp);
} 

     ?>
    <form method="POST" action="editar.php">
      <h2>Matricula a ser editada:</h2>
      <input type="text" name="matricula">
      <br>
      <h2>Novo nome: </h2>
      <input type="text" name="nomeNovo">
      <br>
      <h2>Nova Idade:</h2>
      <input type="text" name="idadeNova">
      <br>
      <h2>Nova Matricula:</h2>
      <input type="text" name="matriculaNova">
      <br>
      <br>
      <input type="submit">
    </form>
    <a href="index.php">Voltar</a>
  </body>
</html>