<?php
// Variaveis super globais que existem em todos os scripts php por padrão.

echo "<pre>";

echo "Pega Get <br>";
print_r($_GET); // reponsavel por pegar todas as variaveis enviadas via url por metodoo get
echo "<br>";

echo "Pega post <br>";
print_r($_POST); // mesmo que a de cima mas só pega variaveis de url do método post

echo "<br>";
// Porem é desaconselhado o uso desta variavel, pois é da responsabilidade do programador saber o tipo de requisição que esta
// havendo.
echo "pega tanto post quanto get <br>";
print_r($_REQUEST); // Um coringa que faz o que as duas acima fazem, pega tanto post quanto get.
echo "<br>";

?>

<form class="" action="" method="post">
    <input type="text" name="campo_1" value="">
    <button type="submit">Testar</button>
</form>
