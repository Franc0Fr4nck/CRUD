<!DOCTYPE html>
<html>
<head>
    <title>Editar Cómic</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h1>Editar Cómic</h1>
    <form action="index.php?action=update&id=<?= $comic['id'] ?>" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" value="<?= $comic['titulo'] ?>" required><br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" value="<?= $comic['autor'] ?>" required><br>
        <label for="genero">Género:</label>
        <input type="text" name="genero" value="<?= $comic['genero'] ?>"><br>
        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" value="<?= $comic['precio'] ?>" required><br>
        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="<?= $comic['stock'] ?>" required><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
