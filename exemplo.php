<?php

use Rapha\DigitalCep\Search;

require_once 'vendor/autoload.php';

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('02945060');

print_r($resultado);