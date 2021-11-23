<?php

    session_start();
    
    include("conexion.php");

    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username; 

    if(isset($_POST['btn-login'])){

        $login_query = mysqli_query($conn, "SELECT * FROM tblusuarios WHERE username='$username' AND password='$password' ");
        $filas = mysqli_num_rows($login_query);

        if($filas==1){
            echo "<script> alert('Bienvenido $username'); window.location='index.php'</script>";
        }else{
            echo "<script> alert('ERROR DE AUTENTICACIÓN'); window.location='login.php'</script>";
        }
    }
?>