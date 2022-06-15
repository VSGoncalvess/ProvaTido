<?php

include "config/conn.php";

$id = 2;

$stmt = $conectar->prepare("DELETE FROM atividade WHERE id = :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

?>