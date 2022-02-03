<?php
require_once 'vendor/autoload.php';

/*$produto = new \App\Model\Produto();
$produto->setId(1);
$produto->setNome('Cadeira');
$produto->setDescricao('Gamer');*/

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->delete(2);
$produtoDao->read();

foreach ($produtoDao->read() as $produto):
	echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;