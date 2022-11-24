<?php
$x = 5;
function executar()
{
    echo "a função foi executada.";
}

function Conexão()
{
    $cnx = new PDO("mysql:host=localhost;dbname=pdo1;charset=utf8", 'cleidson', 'C@santos123');
}
