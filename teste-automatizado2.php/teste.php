<?php

require_once 'Pessoa.php';
require_once 'ExportadorDePessoaEmXml.php';

//Arrange
$pessoa = new Pessoa('Jonathan', new DateTimeImmutable('1994-10-19'));
$exportador = new ExportadorDePessoaEmXml($pessoa);

//Act
$xml = $exportador->exportaEmXml();

//Assert
$conteudoEsperando = '<pessoa><nome>Jonathan</nome><idade>26</idade></pessoa>';

if ($conteudoEsperando === $xml){
    echo 'TESTE OK' . PHP_EOL;
} else {
    echo 'TESTE FALHOU' . PHP_EOL;
}
?>