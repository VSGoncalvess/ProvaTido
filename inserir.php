<?php

include "config/conn.php";

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

//preparar
$stmt = $conectar->prepare("INSERT INTO atividade (titulo, descricao) VALUES(:TITULO, :DESCRICAO)");

//trocar
$stmt->bindParam(':TITULO', $titulo);
$stmt->bindParam(':DESCRICAO', $descricao);

//executar
$stmt->execute();

header("Location: index.php");

?>