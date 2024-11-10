
<?php
include 'config.php';

// Verifica si el formulario fue enviado y si todos los campos están presentes
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imagen"])) {
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $categoria = $_POST["categoria"];

    // Manejo de la imagen subida
    $nombre_imagen = $_FILES["imagen"]["name"];
    $ruta_temporal = $_FILES["imagen"]["tmp_name"];
    $directorio_destino = "./Imagenes/" . basename($nombre_imagen);

    // Mueve la imagen al directorio deseado
    if (move_uploaded_file($ruta_temporal, $directorio_destino)) {
        // Ruta para guardar en la base de datos
        $ruta_imagen = "./Imagenes/" . basename($nombre_imagen);

        // Inserta el nuevo proyecto en la base de datos
        $sql = "INSERT INTO proyectos (titulo, descripcion, imagen, categoria) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $titulo, $descripcion, $ruta_imagen, $categoria);

        if ($stmt->execute()) {
            // Redirige a index.php después de agregar el proyecto exitosamente
            header("Location: index.php?status=success");
            exit();
        } else {
            echo "Error al agregar el proyecto: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error al subir la imagen.";
    }
}

$conn->close();
?>

<?php
include 'config.php';

$sql = "SELECT * FROM proyectos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Variables para cada campo de la base de datos
        $id = $row["id"];
        $titulo = $row["titulo"];
        $descripcion = $row["descripcion"];
        $imagen = $row["imagen"];
        $categoria = $row["categoria"];
        
        // Proyecto card
        echo '<div class="col-md-4" data-proyecto="' . $categoria . '">';
        echo '    <div class="card">';
        echo '        <div class="card-body">';
        echo '            <h5 class="card-title">' . $titulo . '</h5>';
        echo '            <img src="' . $imagen . '" alt="' . $titulo . '" class="imagen" style="width:90%; height:auto;">';
        echo '            <p class="card-text">' . substr($descripcion, 0, 100) . '...</p>';  // Mostrar una parte de la descripción
        echo '            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProyecto' . $id . '">Ver más</button>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';

        // Modal para cada proyecto
        echo '<div class="modal fade" id="modalProyecto' . $id . '" tabindex="-1" aria-labelledby="modalProyecto' . $id . 'Label" aria-hidden="true">';
        echo '    <div class="modal-dialog">';
        echo '        <div class="modal-content">';
        echo '            <div class="modal-header">';
        echo '                <h5 class="modal-title" id="modalProyecto' . $id . 'Label">' . $titulo . '</h5>';
        echo '                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        echo '            </div>';
        echo '            <div class="modal-body">';
        echo '                <img src="' . $imagen . '" alt="' . $titulo . '" class="img-fluid mb-3">';  // Imagen dentro del modal
        echo '                <p>' . $descripcion . '</p>';  // Descripción completa
        echo '            </div>';
        echo '            <div class="modal-footer">';
        echo '                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
} else {
    echo "<p>No hay proyectos para mostrar</p>";
}

$conn->close();
?>

<?php
include 'config.php';

// Verifica si el formulario fue enviado y si todos los campos están presentes
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imagen"])) {
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $categoria = $_POST["categoria"];

    // Manejo de la imagen subida
    $nombre_imagen = $_FILES["imagen"]["name"];
    $ruta_temporal = $_FILES["imagen"]["tmp_name"];
    $directorio_destino = "./Imagenes/" . basename($nombre_imagen);

    // Mueve la imagen al directorio deseado
    if (move_uploaded_file($ruta_temporal, $directorio_destino)) {
        // Ruta para guardar en la base de datos
        $ruta_imagen = "./Imagenes/" . basename($nombre_imagen);

        // Inserta el nuevo proyecto en la base de datos
        $sql = "INSERT INTO proyectos (titulo, descripcion, imagen, categoria) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $titulo, $descripcion, $ruta_imagen, $categoria);

        if ($stmt->execute()) {
            echo "Proyecto agregado exitosamente.";
            header("Location: index.php"); // Redirige a index.php después de agregar el proyecto
            exit();
        } else {
            echo "Error al agregar el proyecto: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error al subir la imagen.";
    }
}
?>


