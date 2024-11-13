<?php
require_once 'models/Comic.php';
require_once 'controllers/ComicController.php';
require_once 'controllers/InfoController.php';

try {
    $db = new PDO('mysql:host=localhost;dbname=comic_store', 'root', '');
} catch (PDOException $e) {
    die('Error: ' . $e->getMessage());
}

// Crear la instancia del controlador ComicController
$controller = new ComicController($db);

// Crear la instancia del controlador InfoController
$infoController = new InfoController();

// Obtener la acción solicitada
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Controlar la acción solicitada
switch ($action) {
    case 'info':
        $infoController->showInfo();
        break;
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store($_POST['titulo'], $_POST['autor'], $_POST['genero'], $_POST['precio'], $_POST['stock']);
        break;
    case 'edit':
        $controller->edit($_GET['id']);
        break;
    case 'update':
        $controller->update($_GET['id'], $_POST['titulo'], $_POST['autor'], $_POST['genero'], $_POST['precio'], $_POST['stock']);
        break;
    case 'delete':
        $controller->destroy($_GET['id']);
        break;
    default:
        $controller->index();
        break;
}

