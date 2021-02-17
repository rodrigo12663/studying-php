<?php

require_once 'controllers/product.php';
require_once 'models/product.php';
use  models\Product as ModelsProduct;
use controllers\Product as controllersProduct;


$produto = new ModelsProduct();
$produto->mostrarDetalhes();

echo "<br>";
$produto2 = new controllersProduct();
$produto2->mostrarDetalhes();