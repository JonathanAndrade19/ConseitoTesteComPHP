<?php

require_once 'EscritorDeArquivo.php';

// Definir o cenário
$caminhoArquivo = md5(time());
$escritor = new EscritorDeArquivo($caminhoArquivo);

// Execultar a acão a ser testada
$escritor->escreve('Primeira Linha');
$escritor->escreve('Segunda Linha');

// Verificar se o resultado e o esperado
$conteudoEsperado = 'Primeira Linha
Segunda Linha
';

if ($conteudoEsperado === file_get_contents($caminhoArquivo)){
    echo 'TESTE OK'. PHP_EOL;
} else {
    echo 'TESTE FAILED'. PHP_EOL;
}

?>