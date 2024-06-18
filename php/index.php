<?php
$servername = "db";
$username = "my_user";
$password = "my_password";
$dbname = "my_database";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT message FROM test_table WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo $row["message"];
    }
} else {
    echo "No esta conectado!!!";
}

$conn->close();
?>