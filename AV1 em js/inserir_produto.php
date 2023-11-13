<?php
      $id = $_POST['id'];
      $quantidade= $_POST['quantidade'];

      $arqCarrinho = fopen("carrinho.txt","a")or die("Não foi possível criar o arquivo.");
      $arqProduto = fopen("produto.txt","r")or die("Não foi possível acessar o arquivo.");

      $x = 0;
      $sucesso = 0;
    while(!feof($arqProduto)){
        $linha[] = fgets($arqProduto);
        $colunaDados = explode(";", $linha[$x]);
      
        $idp = $colunaDados[0];
        $nome = $colunaDados[1];
        $valor = $colunaDados[2];    
            If($idp == $id)
              {
              $linha = $id . ";" . $nome . ";" . $quantidade . ";" . $valor;
              fwrite($arqCarrinho,$linha);
              $sucesso = 1;
              break;
            }else{
              $x++;     
            }
            }
      fclose($arqCarrinho);
      fclose($arqProduto);
     ?>