<?php

    //session_start();

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $verificar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' 
    and contrasena = '$contrasena'");

    if(mysqli_num_rows($verificar_login) > 0){
       // $_SESSION['usuario'] = $correo;
        header("location: ../home.php");
        exit();
    }else{
        echo '<script> 
        alert("ESTE USUARIO NO EXISTE, POR FAVOR VERIFIQUE LOS DATOS INTRODUCIDOS");
        window.location = "../index.php";
        </script>';
        exit();
    }
?>