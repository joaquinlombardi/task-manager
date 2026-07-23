<?php
require 'db.php';

// Obtener todas las tareas
$stmt = $conn->prepare("SELECT * FROM tasks ORDER BY created_at DESC");
$stmt->execute();
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <h1>Task Manager</h1>

    <a href="create.php" class="btn">Crear nueva tarea</a>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Creada</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= htmlspecialchars($task['title']) ?></td>
                    <td><?= htmlspecialchars($task['description']) ?></td>
                    <td><?= $task['created_at'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $task['id'] ?>">Editar</a>
                        <a href="delete.php?id=<?= $task['id'] ?>" onclick="return confirm('¿Eliminar tarea?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
