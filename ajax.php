<?php
    include("abrir_conexion.php");

    $identificacion = $_POST["ident"];

    $resultado = $conn->query("SELECT * FROM hivley where id=$identificacion");

    if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()){
                echo "
                    <img src='img/".$row["imagen"]."' class='imgpopupdos'>
                    <p class='text-light textpopup'>".$row["descripcion"]."</p>
                ";
            }
    }
?>