<?php
// levar a pasta para xampp htdocs
// Ambiente php
// Variável de memória: $nomeVariavel
// get --> variável superglobal $_GET
// post --> variável superglobal $_POST

include "conexao.php";

try {

    $nome = $_GET["fNome"];
    $nasc = $_GET["fNasc"];
    $endereco = $_GET["fEnd"];
    $genero = $_GET["fGenero"];

    if (empty($_GET["fInfo1"])) {
        $novosProdutos = "Não";
    } else {
        $novosProdutos = $_GET["fInfo1"];
    }

    if (empty($_GET["fInfo2"])) {
        $ofertas = "Não";
    }  else {
        $ofertas = $_GET["fInfo2"];
    }

    // Tratando informaçõess recebidas do formulário
    $nome = strtoupper($nome);
    // $nome = strtolower($nome);

    // Exibindo o conteúdo das variáveis
    // concatenação .
    /* echo "<h1 style='text-align: center;'>Título HTML + PHP</h1>";
    echo "<br><br>";
    echo "Estamos no PHP";
    echo "<br><br>";
    echo $nome;
    echo "<br><br>";
    echo "Nome digitado: $nome";
    echo "<br><br>";
    echo $nasc;
    echo "<br><br>";
    echo "Data de nascimento: ".$nasc."<br><br>";
    echo "Endereço: $endereco"."<br><br>";
    echo "Endereço: $genero"."<br><br>";
    echo "Novos produtos: $novosProdutos"."<br><br>";
    echo "Nossas ofertas: $ofertas  "."<br><br>"; */

    $sql = $conectar -> prepare ("USE sistemawebdatabase; INSERT INTO clientes (nome, nasc, endereco, genero, novosprodutos, ofertas) VALUES ('$nome', '$nasc', '$endereco', '$genero', '$novosProdutos', '$ofertas')");

    $sql -> execute();
    header("location: index.html");

} catch (PDOException $e) {
    echo ("Falha na gravação do registro!".$e->getMessage());
}


// Com post
/* 
$nome = $_POST["fNome"];
$nasc = $_POST["fNasc"];

// Exibindo o conteúdo das variáveis
echo $nome;
echo "<br><br>";
echo $nasc;
*/

?>