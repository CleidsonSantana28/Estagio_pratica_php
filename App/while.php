<?php
# equanto a condição while não for satisfeita (a variavel em analise for menor que 10) execute o bloco da instrução enquanto corresponder, sendo verdadeira.
# se diferente não execute while, passe para a proxima linha  e/ou instrução.
$i=0;
while($i<10){
    echo "em execução<br>";
    $i++; #contador
}
echo '<hr>';
print_r($i);echo '<br>';

$i=0;
while($i<10){
    echo $i++.'<br>';
}
echo '<hr>';