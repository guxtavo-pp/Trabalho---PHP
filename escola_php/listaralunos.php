<?php
include 'read.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dados Alunos</title>
</head>

<body>
    <br><br>
    <div class="container col-md-6 offset-md-3">
        <table class="table table-hover">

            <thead>
                <tr>
                    <th scope="col">Id do aluno</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Matricula</th>
                    <th scope="col">Nota</th> 
                    <th>Status</th>
                    <th>Funções</th>
                </tr>
            </thead>
            <?php
            while ($alunos = mysqli_fetch_assoc($listarSQL)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $alunos['id_aluno'] ?></td>
                        <td><?php echo $alunos['nome_aluno'] ?></td>
                        <td><?php echo $alunos['matricula_aluno'] ?></td>
                        <td><?php echo $alunos['nota'] ?></td>
                        <td><?php 
                        if($alunos['nota'] >= 6) {
                            echo "Aprovado";
                        } else {
                            echo "Reprovado";
                        }
                        ?>
                        </td>
                        <td>
                 <a href="delete.php?id_aluno=<?php echo $alunos['id_aluno']; ?>" class="btn btn-danger">Excluir</a>
                 <a href="updatealuno.php?id_aluno=<?php echo $alunos['id_aluno']; ?>" class="btn btn-success">Atualizar</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>