<?php
include 'connection.php';
$nome_professor = $_POST['nome'];
$registro_professor = $_POST['registro'];
$sql = mysqli_query($connectionBD, "INSERT INTO professor(nome_professor, registro_professor) VALUES ('$nome_professor', '$registro_professor')");

if ($sql){
    header('Location: telaprofessor.php');
}
?>