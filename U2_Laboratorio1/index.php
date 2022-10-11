<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Ingrese sus datos</h1>
    <div>
        <form action="procesador.php" method="POST">

            <label for="">Estudiante: </label> <br>
            <input type="text" name="nombre" > <br><br>

            <label for="">Nota 1:</label> <br>
            <input type="text" name="nota1"> <br><br>

            <label for="">Nota 2:</label> <br>
            <input type="text" name="nota2"> <br><br>

            <label for="">Nota 3:</label> <br>
            <input type="text" name="nota3"> <br><br>

            <label for="">Nota 4:</label> <br>
            <input type="text" name="nota4"> <br><br>

            <input type="submit" name="submit" value="Enviar datos">

        </form>
    </div>

</body>
</html>