<?php
//Adicionar a conexão com o banco 
include 'connection.php';
$nome_aluno = $_POST['nome'];
$matricula_aluno = $_POST['matricula'];
$nota_aluno = $_POST['nota'];
$sql = mysqli_query($connectionBD, "INSERT INTO alunos(nome_aluno, matricula_aluno, nota) VALUES ('$nome_aluno', '$matricula_aluno', '$nota_aluno')");

if ($sql){
    header('Location: listaralunos.php');

}
?>