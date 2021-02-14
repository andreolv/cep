<?php

require_once "vendor/autoload.php";
use \andre\cep\Search;

$busca = new Search();

$resultado = $busca->pegaEnderecoPorCep('72236008');

print_r($resultado);