<?php

// Estagiário: Cleidson Santos
// Setor: Analise e desenvolvimento de sistema - Inema COTIC
// Descrição: Estrutura condicional FOR
// Data: 22/11/2022

// Pratica de conhecimentos na linguagem de programação usando PHP

// Nessa atividade foi desenvolvido uma tabuada utilizando a condicional FOR

// * Nesse desenvolvimento foi utilizado a linguagem PHP junto com algumas marcações em HTML foi também utilizado em uma pagina separada “estilo.php” alteração da fonte e ajuste na margem e para colocar lado a lado as quatro operações, essas operações e calculada de zero a dez, com tabelas que inicia com zero e finalizado na tabela 10;
// * Para esse desenvolvimento foi utilizado a estrutura condicional FOR.
// * para as tabuada de multiplicação e divisão fora utilizado códigos para fazer a alteração no simbolo, segue anexo endereço da pagina e os códigos utilizados.
// * para a tabuada de divisão devido as valores do resultado apresentarem valores muito grandes, foi utilizado parâmetro ‘number_format(($var),2) para limitar à duas casas decimas após a virgula ex.: 0,00.
//  number_format(($i - $j),2), mostra o numeros de casas decimais depois da virgula.
//  ÷ - &divide; - &#247; - divisão, insere o simbolo de divisão.
//  × - &times; - &#215; - multiplicação, insere o simbolo da multiplicação
//  http://fap.if.usp.br/~vvuolo/A%20-%20HOME%20-%20Fisica/simbolos.htm

include('estilo.php');

echo "<div id='sub'>";
# Subtração
echo "<h3>Subtração</h3>";
for ($i = 0; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "<li>{$i}-{$j}=" . ($i - $j) . "</li>";
    }
    echo "<br><hr>";
    echo "<br>";
}
echo "</div>";

echo "<div id='sub'>";
# Soma
echo "<h3>Soma</h3>";
for ($i = 0; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "<li>{$i}+{$j}=" . ($i + $j) . "</li>";
    }
    echo "<br><hr>";
    echo "<br>";
}
echo "</div>";

echo "<div id='sub'>";
# Multiplicação
echo "<h3>Multiplicação</h3>";
for ($i = 0; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "<li>{$i}&times{$j}=" . ($i * $j) . "</li>";
    }
    echo "<br><hr>";
    echo "<br>";
}
echo "</div>";

echo "<div id='sub'>";
# Divisão
echo "<h3>Divisão</h3>";
for ($i = 0; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "<li>{$i}&divide{$j}=" . number_format(($i / $j), 2) . "</li>";
    }
    echo "<br><hr>";
    echo "<br>";
}
echo "</div>";
?>