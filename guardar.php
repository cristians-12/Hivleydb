<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
    // echo "Conexión fallida.";
}

$categoria = $_POST['opcionesc'];
$imagen = $_POST['imagen'];
$servicio = $_POST['servicio'];
$desc = $_POST['descripcion'];

$sql = "INSERT INTO hivley (imagen, titulo, categoria, descripcion) VALUES ('$imagen', '$servicio', '$categoria', '$desc')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>