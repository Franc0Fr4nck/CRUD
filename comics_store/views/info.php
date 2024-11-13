<!DOCTYPE html>
<html>
<head>
    <title>Información del Proyecto</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h1>Información del proyecto</h1>

    <h2>Liga de descarga</h2>
    <p>Puedes descargar el proyecto desde este repositorio en GitHub:</p>
    <a href="https://github.com/usuario/comics_store" target="_blank">Repositorio de Comics Store en GitHub</a>

    <h2>Instrucciones de Instalación</h2>
    <ol>
        <li>Copia la carpeta `comics_store` en la carpeta `htdocs` de XAMPP.</li>
        <li>Crea la base de datos en phpMyAdmin ejecutando esta consulta:
            ```sql
            CREATE DATABASE comic_store;
            ```
        </li>
        <li>Crea la tabla `comics` con esta estructura:
            ```sql
            CREATE TABLE comics (
                id INT AUTO_INCREMENT PRIMARY KEY,
                titulo VARCHAR(255) NOT NULL,
                autor VARCHAR(255) NOT NULL,
                genero VARCHAR(255),
                precio DECIMAL(10,2) NOT NULL,
                stock INT NOT NULL
            );
            ```
        </li>
    </ol>

    <h2>Descripción de la implementación</h2>
    <p>Este CRUD permite gestionar una base de datos de cómics, incluyendo la creación, edición, eliminación y visualización de registros.</p>

    <h2>Datos del desarrollador</h2>
    <p>Nombre: [Piña Chavez Jose Francisco]</p>
    <p>No.Control: [201064093]</p>
    <p>CRUD: [Tienda de comics: Imprerio F.F]</p>

    <p><a href="index.php">Volver al listado de cómics</a></p>
</body>
</html>
