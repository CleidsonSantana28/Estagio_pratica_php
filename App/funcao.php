<?php

include('DAO/funcao1.php');

/*
foi criada um função de conexão como banco de dados do MySQL, e o mesmo é chamado em outro arquivo 
e ápos a realização de suposto cadastro, verificação na condicional IF a variável X, sendo verdade essa condição realiza o 
acesso ao banco, salva as informações e depois finalizando a conexão com o banco.
*/

try {
    if ($x <= 10) {
        Conexão();
        echo "Conexão finalizada<br>";
        exit();
    } else {
        echo "Valor da Variavel maior que 10";
    }
} catch (PDOException $e) {
    echo "Mensagem: " . $e->getMessage() . "<br>";
    echo "Linha: " . $e->getLine() . "<br>";
    echo "Arquivo: " . $e->getFile() . "<br>";
}
