<?php
 // Estilo de comentário de uma linha em  C++
    /* Este é um comentário de múltiplas linhas
       ainda outra linha de comentário */
    //$banco = new mysqli(host, usuario, senha, banco); exemplo de conexão com banco
    $banco = new mysqli("localhost", "", "", ""); 
    if ($banco->connect_error){
        echo "<p>Encontrei um erro amigão $banco->errno --> $banco->connect_error()</p>";
        die();

    }

   
?>