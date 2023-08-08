<?php

$banco = mysqli_connect("localhost", "root", "", "sistema_provas") or die("erro de conexao");

if (!$banco) {
    echo ("deu ruim" . mysqli_connect_error());
} else {
    echo ("conexao efetuada com sucesso<hr><br>");
}

?>