<?php

    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="saliag";

    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$conn){
        die("NO hay conexion:" .mysqli_connect_error());

    }

?>