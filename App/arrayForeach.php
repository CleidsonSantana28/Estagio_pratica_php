<?php
# Array associativo
# e definido a variável $key como a chave, e o variável $value refere-se a ao valor da chave
# Nesse foreach irá execultar os ciclos ate que todos os dados dentro do array se esgotem
$nomes=['cleidson','eduarda','lucas','marilene'];
foreach($nomes as $nome){
    echo $nome.'<br>';
}
echo '<hr>';

$capitais=[
    'Brasil'=>'Brasília',
    'Portugal'=>'Lisboa',
    'Espanha'=>'Madrid'
];
foreach($capitais as $key =>$value){
    echo "Para o país {$key} a capital é {$value}<br><hr>";
}
