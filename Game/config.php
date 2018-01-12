<!doctype html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="check.php" method="get">
    <label for="players"></label>
    <input type="text" name="players" id="players" value="<?= $_GET['players']?>">
    <button type="submit" value="submit">Enviar</button>


</form>

</body>
</html>











<?php
/*
1 - Crie um Formulário que Envie Dados para check.php

2 - O dado passado deve ser: "jogadores"

Dica:

  Lembrem-se que o que define a chave da variavél que será passada para a página é o atributo "name" no input. Observe:

  <input type="text" name="nomeDaVariavel">

3 - A variavél "jogadores", representa o Numero de Jogadores, logo a <label> desse <input> deve conter essa informação.

4 - Os inputs devem utilizar o atributo "value", sendo igual ao valor da variavel $_GET['nomeDaVariavel']. Isso será bastante
útil se a página check.php fazer um redicrionamento de volta para config.php.

  Dica: Veja como vocês podem utilizar o atributo "value" da tag <input>:
    Nome: <input type="text" name="fname" value="John">

  Mas se o Nome estivesse em alguma variavél?
    Nome: <input type="text" name="name" value=<?php echo $minhaVariavel; ?> >

  Mais detalhes em: https://www.w3schools.com/tags/att_input_value.asp


?>

