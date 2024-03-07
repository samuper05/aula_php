<?php

// utilizar $ para criar variaveis
$nome = 'Samuel';
$escola = 'Senac Taubaté';
$turno = 'noite';

echo "<h1>Ola mundo!</h1";
// usando aspas dupla, n é necessario concatenar string com variavel
echo "<h3>seja bem-vindo $nome</h3>";
// usando aspas simples, é necessario concatenar string e variavel
// utilizando "ponto final" (.)
echo 'Você está matriculado no ' . $escola . ', no turno da ' . $turno;