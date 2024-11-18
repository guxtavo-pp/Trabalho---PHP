<?php
include 'connection.php';
include 'readp.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela dos Professor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container col-md-6 offset-md-3">
<br><br>       
<table class="table table-hover">
            <h1>Dados do Professor</h1>
            <thead>
                <tr>
                    <th scope="col">Id do professor</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Registro</th>
                    <th scope="col">Funções</th>
                </tr>
            </thead>
            <?php
            while ($professor = mysqli_fetch_assoc($listarrSQL)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $professor['id_professor'] ?></td>
                        <td><?php echo $professor['nome_professor'] ?></td>
                        <td><?php echo $professor['registro_professor'] ?></td>
                       
                        </td>
                        <td>
         <a href="deletep.php?id_professor=<?php echo $professor['id_professor']; ?>" class="btn btn-danger">Excluir</a>
         <a href="updateprofessor.php?id_professot=<?php echo $professor['id_professor']; ?>" class="btn btn-success">Atualizar</a>
     </td>
                    </tr>

                </tbody>
            <?php
            }
            ?>
        </table>
       
    </div>
    <div>
        <form action="index.php">
            <button type="submit" class="m-4 btn btn-success ">Volte ao início</button>
        </form>
    </div>
</body>
</html>