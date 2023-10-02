<?php
    $arq = fopen("alunos.txt","r")or die("Não foi possível abrir o arquivo.");
    $i = 0;
    $linhas[] = fgets($arq);
?>
<html>
  <head>
    <title>Exibir</title>
  </head>
  <style>
    section{
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 500px;
    }
    section > a{
        margin: 20px;
    }
    #cabecalho > td{
        font-weight: 700;
        font-size: 20px;
        padding: 5px;
    }
  </style>
  <body>
<main>
    <section>
        <h1>Lista de alunos:</h1>
        <table>
            <tr id="cabecalho"><td>Nome:</td><td>Idade:</td><td>Matrícula:</td></tr>
            <?php
            while (!feof($arq)) {
                $linhas[] = fgets($arq);
                $dados = explode(";", $linhas[$i]);
                $nome = $dados[0];
                $idade = $dados[1];
                $matricula = $dados[2];
                echo "<tr>";
                echo "<td>" . $nome . "</td>";
                echo "<td>" . $idade . "</td>";
                echo "<td>" . $matricula . "</td>";
                echo "</tr>";
                $i++;
    }
            ?>

        </table>
        <a href="index.php">Voltar</a>
    </section>
</main>
<?php
    fclose($arq);
?>
  </body>
</html>