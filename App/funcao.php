<?php
include('DAO/funcao1.php');

// echo 'inicio da nossa aplicação';
// echo '<br><br>';

// function executar(){
//     echo "a função foi executada.";
// }

try {
    if($x<=10){
        Conexão();
        exit("Acesso ao banco realizado!");
        
        }

} catch (PDOException $e) {
    echo "Mensagem: " . $e->getMessage() . "<br>";
    echo "Linha: " . $e->getLine() . "<br>";
    echo "Arquivo: " . $e->getFile() . "<br>";
}