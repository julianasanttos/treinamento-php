<?php
require_once("funcaoColuna.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="">
    <?php
        echo escreveInput($_GET['players']);
    ?>
</form>
</body>
</html>
/*

  1 - Importe o arquivo "funcaoColuna.php" utilizando o require_once.

  2 - Crie um Formulario que passará os dados via POST para resultado.php

  3 - Dentro do formulário, chame a função "escreveInput" passando como parâmetro o número de jogadores que chegou nessa
  página via GET.

  4 - Antes de finalizar o formulário, crie um botão de Submit, porque a nossa função acima só cria os Inputs.
