<?php
    include 'connection.php';
    if(isset($_GET['id_professor'])){
        $id = $_GET[ 'id_professor'];
        $sql = mysqli_query($connectionBD, "SELECT * FROM professor WHERE id_professor = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $nome = $n['nome_professor'];
            $registro = $n['registro_professor'];
            
        }
    }

    if(isset($_POST['atualizar'])){
        $id = $_GET["id_professor"];
        $nome = $_POST["nome"];
        $registro = $_POST["registro"];
        
        

        $queryUpdate = "UPDATE professor SET nome_professor = '$nome', registro_professor = '$registro' WHERE id_professor = '$id'";
        $consulta = mysqli_query($connectionBD, $queryUpdate);
        header('location: telaprofessor.php');
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
                <input type="" name="nome" placeholder="Nome" id="" class="w-50 p-2">
            </div>
             <br>
            <div>
                <input type="" name="registro" placeholder="Registro" id="" class="w-50 p-2">
            </div>
<br>
            <div>
                <button  type="submit" class="btn btn-success" name="atualizar">Atualize</button>
            </div>
        
        </form>
       
       
    </div>
</body>
</html>