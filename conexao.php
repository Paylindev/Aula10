<?php

try {
    // PDO = classe PHP Data Objects
    $conectar = new PDO ("mysql:host=localhost;port=3306;dataname=sistemawebdatabase", "root", "");
    // banco                      usuario e senha
    // echo ("Conectado com sucesso!");

    echo "Conectado com sucesso!";
}
catch (PDOException $e) {
    echo ("Falha ao se conectar".$e->getMessage());
}

?>