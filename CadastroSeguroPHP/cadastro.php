<?php

include_once 'conexao.php';

$listaCadastro = "SELECT * FROM cadastro";

$result = mysqli_query($conn, $listaCadastro);

$rows = mysqli_fetch_assoc($result);

?>