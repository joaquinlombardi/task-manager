<?php
require 'db.php';

$id = $_GET['id'];

// Obtener la tarea
$stmt = $conn->prepare("SELECT * FROM tasks WHERE id = :id");
$stmt->execute([':id' => $id]);
$task = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$task) {
    die("Tarea no encontrada");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("UPDATE tasks SET title = :title, description = :description WHERE id = :id");
    $stmt->execute([
        ':title' => $title,
        ':description' => $description,
        ':id' => $id
    ]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar tarea</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <h1>Editar tarea</h1>

    <form method="POST">
        <label>Título</label>
        <input type="text" name="title" value="<?= htmlspecialchars($task['title']) ?>" required>

        <label>Descripción</label>
        <textarea name="description"><?= htmlspecialchars($task['description']) ?></textarea>

        <button type="submit">Actualizar</button>
    </form>

</body>
</html>
