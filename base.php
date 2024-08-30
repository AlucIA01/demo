<?php
$servername = "autorack.proxy.rlwy.net"; // Servidor de la base de datos
$port = 29769; // Puerto de la base de datos
$username = "root";  // Reemplaza con tu usuario de MySQL
$password = "EubnNEWRjXeUBJyPdUpSjHJBcDUmOAck"; // Reemplaza con tu contraseña de MySQL
$dbname = "farmacia"; // El nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Definir el query
$sql = "SELECT 
            f.nom_farmacia, 
            f.dir_farmacia,
            p.desc_productos,
            p.stock
        FROM farmacia f, productos p
        WHERE f.id_farmacia = p.id_farmacia";

$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Output de cada fila
    echo "<table border='1'>";
    echo "<tr><th>Nombre Farmacia</th><th>Dirección</th><th>Descripción Producto</th><th>Stock</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nom_farmacia"]. "</td><td>" . $row["dir_farmacia"]. "</td><td>" . $row["desc_productos"]. "</td><td>" . $row["stock"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

// Cerrar la conexión
$conn->close();
?>
