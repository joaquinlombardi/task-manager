<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO tasks (title, description) VALUES (:title, :description)");
    $stmt->execute([
        ':title' => $title,
        ':description' => $description
    ]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear tarea</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <h1>Crear nueva tarea</h1>

    <form method="POST">
        <label>Título</label>
        <input type="text" name="title" required>

        <label>Descripción</label>
        <textarea name="description"></textarea>

        <button type="submit">Guardar</button>
    </form>

</body>
</html>
