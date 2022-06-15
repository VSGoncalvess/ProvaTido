<?php

include "config/conn.php";

$stmt = $conectar->prepare("SELECT * FROM atividade ORDER BY id");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo $key . " - " . $value . "<br>";
	}
	echo " --------------------------- <br>";
}

?>