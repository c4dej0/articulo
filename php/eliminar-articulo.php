<?php

include("database.php");

if(isset($_POST["id"])){
    
    $id = $_POST["id"];

    $query = "DELETE FROM articulo WHERE id = $id";
    $result = mysqli_query($connecction, $query);

    if(!$result) {
        die("Hubo un error en la consulta". mysqli_error($connecction));
    }

    echo "El articulo se elimino correctamente";

}