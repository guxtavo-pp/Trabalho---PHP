
    <?php
    include 'connection.php';
    if(isset($_GET['id_aluno'])){
        $id = $_GET[ 'id_aluno'];
        $sql = mysqli_query($connectionBD, "SELECT * FROM alunos WHERE id_aluno = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $nome_aluno = $n['nome_aluno'];
            $matricula_aluno = $n['matricula_aluno'];
            $nota = $n['nota'];
            
        }
    }

    if(isset($_POST['atualizar'])){
        $id = $_GET["id_aluno"];
        $nome_aluno = $_POST["nome"];
        $matricula_aluno = $_POST["matricula"];
        $nota_aluno = $_POST["nota"];
        

        $queryUpdate = "UPDATE alunos SET nome_aluno = '$nome_aluno', matricula_aluno = '$matricula_aluno', nota = '$nota_aluno' WHERE id_aluno = $id";
        $consulta = mysqli_query($connectionBD, $queryUpdate);
        header('location: listaralunos.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualize</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <br><br>
        <form  method="post" class="container col-md-6 offset-md-3">
        <h1>Atualize os dados:</h1>
               <div>
                <input type="" name="nome" placeholder="Nome" id="">
            </div>
            <br>
            <div>
                <input type="" name="matricula" placeholder="Matricula" id="">
            </div>
            <br>
            <div>
                <input type="" name="nota" placeholder="Nota Geral" id="">
            </div>
<br>
            <div>
                <button type="submit" class="btn btn-success" name="atualizar">Atualize</button>
            </div>
        
        </form>
       
       
    </div>
</body>
</html>