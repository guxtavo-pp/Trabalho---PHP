<?php
include 'connection.php';

$sql = "SELECT
    COUNT(CASE WHEN nota >= '6' THEN 1 END) AS aprovado,
    COUNT(CASE WHEN nota < '6' THEN 1 END) AS reprovado
FROM
    alunos";

$result = $connectionBD->query($sql);
$row = $result->fetch_assoc();

$aprovados = $row['aprovado'];
$reprovados = $row['reprovado'];
?>