<?php

include "config/conn.php";

$id = 1;

//preparar
$stmt = $conectar->prepare("UPDATE atividade SET titulo = :titulo, descricao = :descricao WHERE id = :id");


//trocar
$stmt->bindParam(":id", $id);
$stmt->bindParam(":titulo, $titulo");
$stmt->bindParam(":descricao, $descricao");


//executar
$stmt->execute();


?>