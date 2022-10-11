<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style2.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php

    if( isset($_POST["submit"]) && !empty($_POST["submit"])){

        $nombre = $_POST["nombre"];
        $n1 = $_POST["nota1"];
        $n2 = $_POST["nota2"];
        $n3 = $_POST["nota3"];
        $n4 = $_POST["nota4"];


        if($nombre == ""){
            echo ("Ingrese un nombre");
            exit;
        }
        else if(!preg_match("/^[a-zñA-ZÑáéíóúÁÉÍÓÚ]{3,20}$/", $_POST["nombre"])){
            echo ("Ingrese un nombre válido");
            exit;
        }
        if($n1== ""){
            echo ("Ingrese la nota 1");
            exit;

        }else if($n2 == ""){
            echo ("Ingrese la nota 2");
            exit;

        }else if($n3 == ""){
            echo ("Ingrese la nota 3");
            exit;

        }else if($n4 == ""){
            echo("Ingrese la nota 4");
            exit;

        }if ($n1 <= 0 or $n1 > 7.0){
            echo("Ingrese nota 1");
            exit;
        }else if ($n2 <= 0 or $n2 > 7.0){
            echo("Ingrese nota 2");
            exit;
        }if ($n3 <= 0 or $n3 > 7.0){
            echo("Ingrese nota 3");
            exit;
        }if ($n4 <= 0 or $n4 > 7.0){
            echo("Ingrese nota 4");
            exit;
        }

        $n_final = ($n1 + $n2 + $n3 +$n4)/4;

        if($n_final >= 4.0){
            echo "<b>Has Aprobado!<br>
            <b>Nombre del Estudiante: </b>".$nombre."<br>
            <b>Notas Ingresadas:</b><br> Nota 1: ".$n1."<br>Nota 2: ".$n2."<br>Nota 3: ".$n3."<br>Nota 4: ".$n4."<br>
            <b>Promedio:</b> ".round($n_final,1). "<br>
            <b>Asignatura:</b> Desarrollo de Sistemas Web Dinámicos";
        }else{

            echo '<script language="javascript">alert("Reprobado!");</script>'.
            "<b>Nombre del Estudiante: </b>".$nombre."<br>
            <b>Notas Ingresadas:</b> <br> Nota 1: ".$n1."<br>Nota 2: ".$n2."<br>Nota 3: ".$n3."<br>Nota 4: ".$n4."<br>
            <b>Promedio:</b> ".round($n_final,1). "<br>
            <b>Asignatura:</b> Desarrollo de Sistemas Web Dinámicos";
        }



        

        
    }

    //if($n_final < 4.0)
            //echo ('<script language="javascript">alert("Reprobó! ");</script>');