<!DOCTYPE html>
<html>
<head>
    <title>Comics</title>    
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h1>Listado de Cómics</h1>
    <a href="index.php?action=info">Información del Proyecto</a>
    <a href="index.php?action=create">Añadir Cómic</a>                
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Género</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($comics as $comic): ?>
        <tr>
            <td><?= $comic['id'] ?></td>
            <td><?= $comic['titulo'] ?></td>
            <td><?= $comic['autor'] ?></td>
            <td><?= $comic['genero'] ?></td>
            <td><?= $comic['precio'] ?></td>
            <td><?= $comic['stock'] ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $comic['id'] ?>">Editar</a>
                <a href="index.php?action=delete&id=<?= $comic['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
