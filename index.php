<?php

require_once "vendor/autoload.php";
use \andreolv\cep\Search;

$busca = new Search();

$resultado = $busca->pegaEnderecoPorCep('72236008');

print_r($resultado);
