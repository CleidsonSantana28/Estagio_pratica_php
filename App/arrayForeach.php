<?php

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
