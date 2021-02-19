<?php

require_once 'EscritorDeArquivo.php';

$caminhoArquivo = 'Arquivo';
$escritor = new EscritorDeArquivo($caminhoArquivo);

$escritor->escreve('Primeira Linha');
$escritor->escreve('Segunda Linha');

?>