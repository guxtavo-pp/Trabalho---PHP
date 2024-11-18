<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <br><br><br><br>
        <form action="savealuno.php" method="post" class="container col-md-6">
        <h1>Informe seus dados:</h1>
               <div>
                <input class="w-50 p-2" type="" name="nome" placeholder="Nome" id="" >
            </div>
            <br>
            <div>
                <input class="w-50 p-2" type="" name="matricula" placeholder="Matricula" id="">
            </div>
            <br>
            <div>
                <input class="w-50 p-2" type="" name="nota" placeholder="Nota Geral" id="">
            </div>
            <br>

            <div>
                <button type="submit" class="btn btn-success">Login</button>
            </div>
        
        </form>
       
       
    </div>
</body>
</html>