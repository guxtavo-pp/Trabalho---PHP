<?php 
include 'connection.php';
$id = $_GET["id_professor"];

if(isset($_GET['id_professor'])){
    $sqlDelete = mysqli_query($connectionBD, "DELETE FROM professor WHERE id_professor = {$id}")
    or die (mysqli_error($connectionBD));

    header('location: telaprofessor.php');
}
?>