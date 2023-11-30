<?php

# Uma variável php sempre começa com o símbolo '$'

#   variáveis são Case Sensitive

$variavel = "Valor";
$Variavel = "Outro Valor";

#   Como não escrever uma variável

/*
    $!var = 0;
    $variavel(1) = 0;
    $variavel um = 0;
    $variavel-um = 0;
*/

#   Como podemos escrever uma variável

$var1 = 0;
$var_um = 0;
$varUm = 0;
$_um = 0;
$_1 = 0;

#   Boa Práticas

$umaVariavel = 0; #camel case
$uma_varial = 0; #com underline (snake case)
$UmaVariavel = 0; #studly case (não recomendável)


/*  ATENÇÃO

DEVE SER SEMPRE MANTIDO O MESMO ESTILO AO LONGO DO PROJETO

- isso ajuda muita a fazer identificações de variaveis
- não deixa dúvidas se é uma variavel ou método.
*/
?>