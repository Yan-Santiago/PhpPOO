<?php
require 'classes/produto.php';
require 'modelos/produto.php';

use modelosn\Produtos as productModel;
use classesn\Produtos as productClass;

$produto = new productModel();
$produto->mostrarDetalhes();
$produto2 = new productClass();
$produto2->mostrarDetalhes();