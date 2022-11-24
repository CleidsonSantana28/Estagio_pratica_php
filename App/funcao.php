<?php
include('funcao1.php');

echo 'inicio da nossa aplicação';
echo '<br><br>';

// function executar(){
//     echo "a função foi executada.";
// }

try {
    if($x<=10){
        Conexão();
        echo "Conectado";
        }

} catch (PDOException $e) {
    echo "Mensagem: " . $e->getMessage() . "<br>";
    echo "Linha: " . $e->getLine() . "<br>";
    echo "Arquivo: " . $e->getFile() . "<br>";
}