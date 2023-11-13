<?php
      $id = $_POST['id'];
      $nome = $_POST['nome'];
      $preco= $_POST['preco'];

      $arqProduto = fopen("produto.txt","a")or die("Não foi possível acessar o arquivo.");

        $linha = "\n" . $id . ";" . $nome . ";" . $valor;
        fwrite($arqProduto,$linha);

      fclose($arqProduto);
     ?>