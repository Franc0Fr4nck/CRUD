<!DOCTYPE html>
<html>
<head>
    <title>Añadir Cómic</title>	
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h1>Añadir Cómic</h1>
    <form action="index.php?action=store" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required><br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" required><br>
        <label for="genero">Género:</label>
        <input type="text" name="genero"><br>
        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" required><br>
        <label for="stock">Stock:</label>
        <input type="number" name="stock" required><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
